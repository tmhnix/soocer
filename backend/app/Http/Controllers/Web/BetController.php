<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\League;
use App\Models\Event;
use App\Models\Bet;
use App\Models\Odd;
use App\Models\NumberGame;
use App\Models\Alert;
use Validator;
use DB;
use App\Components\SessionStore;
use App\Components\OddsConverter;

/**
 * IpAccessController info
 */
class BetController extends WebController
{

    public function alert(Request $req)
    {
        $user = $req->user();
        $alert = Alert::where('username', $user->username)->first();
        if ($alert && $alert->msg) {
            return $alert->msg;
        }
        return '';
    }

    public function createCorrectScore(Request $req)
    {
        $user = $req->user();
        $validator = Validator::make($req->all(), [
            'event_id' => 'required|string',
            'bet_amount' => 'required|numeric|min:' . $user->bongdamin . '|max:' . $user->bongdamax,
            'bet_value' => 'required|numeric',
            'bet_position' => 'required|integer',
            'type' => 'string|in:0_1,1_0,2_0,0_2,2_1,1_2,3_0,0_3,3_1,1_3,3_2,2_3,4_0,0_4,4_1,1_4,4_2,2_4,4_3,3_4,0_0,1_1,2_2,3_3,4_4,AOS',
            'bet_type' => 'required|string|in:correct_score'
        ]);

        if ($validator->fails()) {
            return response([
                'code' => $validator->errors()->first(),
                'msg' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);
        }

        if ($req->bet_value == 0) {
            return response([
                'msg' => 'Tỉ lệ đang được cập nhật',
                'code' => 'EVENT_CLOSED'
            ], 400);
        }

        $event = Event::where('event_id',$req->event_id)->first();
    
        if ($event->status !== 'active') {
            return response([
                'msg' => 'Trận đấu đã đóng bạn không thể cược trận đấu này.',
                'code' => 'EVENT_CLOSED'
            ], 400);
        }

        $sumBets = Bet::where(['event_id' => $req->event_id, 'user_id' => $user->id, 'type' => $req->bet_type])->sum('bet_amount');
        if ($user->bongdaper < $sumBets + (float)$req->bet_amount) {
            $sub = $user->bongdaper - $sumBets;
            if ($sub > 0) {
                $msg = 'Vượt mức giới hạn trận đấu. bạn có thể đánh dưới ' . format_number_pretty($sub, 2) . 'UT';
            } else {
                $msg = 'Vượt mức giới hạn trận đấu';
            }

            return response([
                'msg' => $msg,
                'code' => 'LIMITED_AMOUNT'
            ], 400);
        }

        //Check bet_value send back
        $newVal = $event->correct_score[$req->type];
        if ($newVal !== $req->bet_value) {
            return response([
                'msg' => 'EVENT_CHANGED',
                'code' => 'EVENT_CHANGED',
                'data' => [
                    'newVal' => $newVal,
                    'oldVal' => $req->bet_value,
                ]
            ], 400);
        }

        $bet_pre_pay = OddsConverter::calculateLose($req->bet_amount, $req->bet_value);

        if ($bet_pre_pay > $user->wallet) {
            return response([
                'msg' => 'Số tiền của bạn không đủ để cược.',
                'code' => 'NOT_MONEY'
            ], 400);
        }
        // return $event[$req->bet_type];
        //save and push to nodejs
        $bet = new Bet([
            'user_id' => $user->id,
            'odd_id' => $req->odd_id,
            'game_type' => Bet::GAME_TYPE_BONGDA,
            'event_id' => $req->event_id,
            'bet_amount' => $req->bet_amount,
            'bet_pre_pay' => $bet_pre_pay,
            'bet_value' => $req->bet_value,
            'bet_position' => $req->bet_position,
            'time_status' => $event->time_status,
            'time_position' => 0,
            'bet_type' => $req->bet_type,
            'type'=> $req->type,
            'odd' => $event->correct_score,
            'ss' => $event->ss,
            'ip_address' => get_client_ip(),
            'version' => SessionStore::getVersion(),
            'time' => $event->time,
            'reds' => $event->reds
        ]);

        $bet->updateParent($user);

        if ($event->time_status == Event::TIME_STATUS_INCOMING) {
            $bet->status = Bet::STATUS_RUNING;
        }

        try {
            $bet->save();
            $user->decrement('wallet', $bet_pre_pay);
            $user->last_time_bet = date("Y-m-d H:i:s");
            $user->save();
            return response([
                'code' => 'SUCCESS',
                'msg' => 'SUCCESS',
                'data' => $bet
            ]);
        } catch (Exception $ex) {
            return response(['code' => 'SERVER_ERROR'], 500);
        }
    }
    public function create(Request $req)
    {
        if($req->bet_type == 'correct_score') {
            return $this->createCorrectScore($req);
        }
        $user = $req->user();
        $validator = Validator::make($req->all(), [
            'odd_id' => 'required|string',
            'bet_amount' => 'required|numeric|min:' . $user->bongdamin . '|max:' . $user->bongdamax,
            'bet_value' => 'required|numeric',
            'bet_position' => 'required|integer',
            'type' => 'string|in:home,away,draw',
            'bet_type' => 'required|string|in:ft_hdp,ft_ou,ft_1x2,hf_hdp,hf_ou,hf_1x2,'
        ]);

        if ($validator->fails()) {
            return response([
                'code' => $validator->errors()->first(),
                'msg' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);
        }

        if ($req->bet_value == 0) {
            return response([
                'msg' => 'Tỉ lệ đang được cập nhật',
                'code' => 'ODD_CLOSED'
            ], 400);
        }

        $odd = Odd::findFullByOddId($req->odd_id);
        if (!$odd || !in_array($odd->odd_status, [Odd::TIME_STATUS_INPLAY, Odd::TIME_STATUS_INCOMING])) {
            return response([
                'msg' => 'Trận đấu đã đóng bạn không thể cược trận đấu này.',
                'code' => 'ODD_CLOSED'
            ], 400);
        }

        if ($odd->status !== 'active') {
            return response([
                'msg' => 'Trận đấu đã đóng bạn không thể cược trận đấu này.',
                'code' => 'ODD_CLOSED'
            ], 400);
        }

        $sumBets = Bet::where(['event_id' => $odd->event_id, 'user_id' => $user->id])->sum('bet_amount');
        if ($user->bongdaper < $sumBets + (float)$req->bet_amount) {
            $sub = $user->bongdaper - $sumBets;
            if ($sub > 0) {
                $msg = 'Vượt mức giới hạn trận đấu. bạn có thể đánh dưới ' . format_number_pretty($sub, 2) . 'UT';
            } else {
                $msg = 'Vượt mức giới hạn trận đấu';
            }

            return response([
                'msg' => $msg,
                'code' => 'LIMITED_AMOUNT'
            ], 400);
        }

        //Check bet_value send back
        if ($req->bet_type == 'correct_score') {
            $newVal = $odd->getBetWithType($req->type, $req->bet_type);
        } else {
            $newVal = $odd->getBetWithType($req->bet_position, $req->bet_type);
        }
        if ($newVal !== $req->bet_value) {
            return response([
                'msg' => 'ODD_CHANGED',
                'code' => 'ODD_CHANGED',
                'data' => [
                    'newVal' => $newVal,
                    'oldVal' => $req->bet_value,
                ]
            ], 400);
        }

        $bet_pre_pay = OddsConverter::calculateLose($req->bet_amount, $req->bet_value);

        if ($bet_pre_pay > $user->wallet) {
            return response([
                'msg' => 'Số tiền của bạn không đủ để cược.',
                'code' => 'NOT_MONEY'
            ], 400);
        }
        // return $event[$req->bet_type];
        //save and push to nodejs
        $bet = new Bet([
            'user_id' => $user->id,
            'odd_id' => $req->odd_id,
            'game_type' => Bet::GAME_TYPE_BONGDA,
            'event_id' => $odd->event_id,
            'bet_amount' => $req->bet_amount,
            'bet_pre_pay' => $bet_pre_pay,
            'bet_value' => $req->bet_value,
            'bet_position' => $req->bet_position,
            'time_status' => $odd->time_status,
            'time_position' => $odd->time_position,
            'bet_type' => $req->bet_type,
            'type'=> $req->type,
            'odd' => $odd[$req->bet_type],
            'ss' => $odd->ss,
            'ip_address' => get_client_ip(),
            'version' => SessionStore::getVersion(),
            'time' => $odd->time,
            'reds' => $odd->reds
        ]);

        $bet->updateParent($user);

        if ($odd->time_status == Event::TIME_STATUS_INCOMING) {
            $bet->status = Bet::STATUS_RUNING;
        }

        try {
            $bet->save();
            $user->decrement('wallet', $bet_pre_pay);
            $user->last_time_bet = date("Y-m-d H:i:s");
            $user->save();
            return response([
                'code' => 'SUCCESS',
                'msg' => 'SUCCESS',
                'data' => $bet
            ]);
        } catch (Exception $ex) {
            return response(['code' => 'SERVER_ERROR'], 500);
        }
    }

    public function createGame(Request $req)
    {
        $user = $req->user();
        $validator = Validator::make($req->all(), [
            'odd_id' => 'required|string',
            'step' => 'required|numeric',
            'bet_amount' => 'required|numeric|min:' . $user->bongdamin . '|max:' . $user->bongdamax,
            'bet_value' => 'required|numeric',
            'bet_position' => 'required|integer',
            'bet_type' => 'required|string|in:game_next_ou,game_next_oe,game_next_combo,game_wheel'
        ]);

        if ($validator->fails()) {
            return response([
                'code' => $validator->errors()->first(),
                'msg' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);
        }

        if ($req->bet_value == 0) {
            return response([
                'msg' => 'Tỉ lệ đang được cập nhật',
                'code' => 'ODD_CLOSED'
            ], 400);
        }

        $odd = NumberGame::where('event_id', $req->odd_id)->first();
        if (!$odd || $odd->step != $req->step) {
            return response([
                'msg' => 'Tỉ lệ kèo thay đổi.',
                'code' => 'ODD_CLOSED'
            ], 400);
        }

        if (!$odd->data[12]) {
            return response([
                'msg' => 'Tỉ lệ kèo thay đổi.',
                'code' => 'ODD_CLOSED'
            ], 400);
        }

        if ($odd->status !== 'runing') {
            return response([
                'msg' => 'Trận đấu đã đóng bạn không thể cược trận đấu này.',
                'code' => 'ODD_CLOSED'
            ], 400);
        }

        // //Check bet_value send back
        // $newVal = $odd->getBetWithType($req->bet_position, $req->bet_type);
        // if ($newVal !== $req->bet_value) {
        //     return response([
        //         'msg' => 'ODD_CHANGED',
        //         'code' => 'ODD_CHANGED',
        //         'data' => [
        //             'newVal' => $newVal,
        //             'oldVal' => $req->bet_value,
        //         ]
        //     ], 400);
        // }

        if ($req->bet_amount > $user->wallet) {
            return response([
                'msg' => 'Số tiền của bạn không đủ để cược.',
                'code' => 'NOT_MONEY'
            ], 400);
        }
        // return $event[$req->bet_type];
        //save and push to nodejs
        $bet = new Bet([
            'user_id' => $user->id,
            // 'odd_id' => $req->odd_id,
            'game_type' => Bet::GAME_TYPE_BINGO,
            'number_id' => $odd->event_id,
            'number_step' => $req->step,
            'bet_amount' => $req->bet_amount,
            'bet_pre_pay' => $req->bet_amount,
            'bet_value' => $req->bet_value,
            'bet_position' => $req->bet_position,
            'time_status' => 0,
            'time_position' => 0,
            'bet_type' => $req->bet_type,
            'odd' => $odd->ball_numbers,
            'ss' => $req->ss,
            'number_code' => $odd->code,
            'ip_address' => get_client_ip(),
            'version' => SessionStore::getVersion(),
            'time' => $odd->time,
            'reds' => $odd->reds
        ]);

        $bet->updateParent($user);
        $bet->status = Bet::STATUS_RUNING;

        try {
            $bet->save();
            $user->decrement('wallet', $bet->bet_pre_pay);
            $user->last_time_bet = date("Y-m-d H:i:s");
            $user->save();
            return response([
                'code' => 'SUCCESS',
                'msg' => 'SUCCESS',
                'data' => $bet
            ]);
        } catch (Exception $ex) {
            return response(['code' => 'SERVER_ERROR'], 500);
        }
    }

    public function createGroup(Request $req)
    {
        $user = $req->user();
        $validator = Validator::make($req->all(), [
            'bet_amount' => 'required|numeric|min:' . $user->bongdamin . '|max:' . $user->bongdamax,
            'bets.*.odd_id' => 'required|string',
            'bets.*.bet_value' => 'required|numeric',
            'bets.*.bet_position' => 'required|integer',
            'bets.*.bet_type' => 'required|string|in:ft_hdp,ft_ou,ft_1x2,hf_hdp,hf_ou,hf_1x2'
        ]);

        if ($validator->fails()) {
            return response([
                'code' => $validator->errors()->first(),
                'msg' => $validator->errors()->first(),
                'errors' => $validator->errors()
            ], 422);
        }

        if ($req->bet_amount > $user->wallet) {
            return response([
                'msg' => 'Số tiền của bạn không đủ để cược.',
                'code' => 'NOT_MONEY'
            ], 400);
        }

        $result = [];
        foreach ($req->bets as $key => $bet) {
            $bet = (object) $bet;
            if ($bet->bet_value == 0) {
                return response([
                    'msg' => 'Tỉ lệ đang được cập nhật',
                    'code' => 'ODD_CLOSED'
                ], 400);
            }

            $odd = Odd::findFullByOddId($bet->odd_id);
            if (!$odd || !in_array($odd->odd_status, [Odd::TIME_STATUS_INPLAY, Odd::TIME_STATUS_INCOMING])) {
                return response([
                    'msg' => 'Trận đấu đã đóng bạn không thể cược trận đấu này.',
                    'code' => 'ODD_CLOSED',
                    'data' => [
                        'odd_id' => $odd->odd_id,
                    ]
                ], 400);
            }

            if ($odd->status !== 'active') {
                return response([
                    'msg' => 'Trận đấu đã đóng bạn không thể cược trận đấu này.',
                    'code' => 'ODD_CLOSED',
                    'data' => [
                        'odd_id' => $odd->odd_id,
                    ]
                ], 400);
            }

            //Check bet_value send back
            $newVal = $odd->getBetWithType($bet->bet_position, $bet->bet_type);
            if ($newVal !== $bet->bet_value) {
                return response([
                    'msg' => 'Tỷ lệ cược đang được cập nhật!',
                    'code' => 'ODD_CHANGED',
                    'data' => [
                        'odd_id' => $odd->odd_id,
                        'odd' => $odd,
                        'newVal' => $newVal,
                        'oldVal' => $bet->bet_value,
                    ]
                ], 400);
            }


            $newBet = new Bet([
                'user_id' => $user->id,
                'odd_id' => $odd->odd_id,
                'event_id' => $odd->event_id,
                'bet_amount' => 0,
                'bet_value' => $bet->bet_value,
                'bet_position' => $bet->bet_position,
                'time_status' => $odd->time_status,
                'time_position' => $odd->time_position,
                'bet_type' => $bet->bet_type,
                'odd' => $odd[$bet->bet_type],
                'ss' => $odd->ss,
                'ip_address' => get_client_ip(),
                'version' => SessionStore::getVersion(),
                'time' => $odd->time,
                'reds' => $odd->reds,
                'game_type' => Bet::GAME_TYPE_BONGDA,
                'bet_kind' => Bet::KIND_ITEM,
                'odd_type' => Bet::ODD_TYPE_DECIMAL,
            ]);

            $newBet->updateParent($user);

            if ($odd->time_status == Event::TIME_STATUS_INCOMING) {
                $newBet->status = Bet::STATUS_RUNING;
            }

            $result[] = $newBet;
        }


        $groupBet = new Bet([
            'user_id' => $user->id,
            'bet_amount' => $req->bet_amount,
            'bet_pre_pay' => $req->bet_amount,
            'bet_kind' => Bet::KIND_GROUP,
            'ip_address' => get_client_ip(),
            'version' => SessionStore::getVersion(),
            'game_type' => Bet::GAME_TYPE_BONGDA,
            'odd_type' => Bet::ODD_TYPE_DECIMAL,
        ]);

        $groupBet->updateParent($user);

        $groupBet->status = Bet::STATUS_RUNING;
        foreach ($result as $key => $value) {
            if ($value->time_status == Event::TIME_STATUS_INPLAY) {
                $groupBet->status = Bet::STATUS_PENDING;
                break;
            }
        }

        DB::beginTransaction();
        try {
            $groupBet->save();
            foreach ($result as $value) {
                $value->group_id = $groupBet->id;
                $value->save();
            }
            $user->decrement('wallet', $groupBet->bet_pre_pay);
            $user->last_time_bet = date("Y-m-d H:i:s");
            $user->save();
            DB::commit();
            return response([
                'code' => 'SUCCESS',
                'msg' => 'SUCCESS',
                'data' => $groupBet
            ]);
        } catch (QueryException $e) {
            DB::rollBack();
            return response(['code' => 'SERVER_ERROR'], 500);
        } catch (Exception $ex) {
            DB::rollBack();
            return response(['code' => 'SERVER_ERROR'], 500);
        }
    }

    public function histories(Request $req)
    {
        $user = $req->user();
        $bets = Bet::where('user_id', $user->id)
            ->where('status', Bet::STATUS_DONE)
            ->orderBy('id', 'desc')->get();
        foreach ($bets as $value) {
            $value->event;
        }
        return response([
            'code' => 'SUCCESS',
            'msg' => 'SUCCESS',
            'data' => $bets
        ]);
    }

    public function inplay(Request $req)
    {
        $user = $req->user();
        $bets = Bet::where('user_id', $user->id)
            ->whereIn('bet_kind', [Bet::KIND_GROUP, Bet::KIND_NORMAL])
            ->where('status', '<>', Bet::STATUS_DONE)
            ->orderBy('id', 'desc')->get();

        $result = [];
        foreach ($bets as $value) {
            $result[] = $value->getJson();
        }
        return response([
            'code' => 'SUCCESS',
            'msg' => 'SUCCESS',
            'data' => $result
        ]);
    }
}
