<?php

namespace App\Http\Controllers\Portal;

use App\Components\OddsConverter;
use App\Http\Controllers\PortalController;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Models\User;
use App\Models\Bet;
use App\Models\Log;
use App\Models\Event;
use App\Components\Logs;
use Validator;
use DB;
use Auth;

/**
 * IpAccessController info
 */
class WebController extends PortalController
{
    protected $guard = 'portal';
    /**
     * services listing
     *
     * @param Request $req
     */
    public function changepwd($id, Request $req)
    {
        $req->session()->flash('errorMsg', '');
        $req->session()->flash('successMsg', '');
        $owner = $req->user();
        if ($owner->isAdmin()) {
            $user = User::find($id);
        } else {
            $user = User::where(['id' => $id, 'parent_id' => $owner->id])->first();
        }

        if (!$user) {
            return view('errors.403');
        }

        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'password' => 'required',
                're_password' => 'required|same:password'
            ]);

            if ($validator->fails()) {
                $req->session()->flash('errorMsg', $validator->errors()->first());
            } else {
                $req->session()->flash('successMsg', 'Đổi mật khẩu thành công!');
                $user->setPassword($req->password);

                $user->save();
                echo "<script>window.close();</script>"; //close window
            }
        }
        return view('portal.commons.changepwd', compact('id', 'user'));
    }

    public function secure_code($id, Request $req)
    {
        $req->session()->flash('errorMsg', '');
        $req->session()->flash('successMsg', '');
        $owner = $req->user();
        if ($owner->isAdmin()) {
            $user = User::find($id);
        } else {
            $user = User::where(['id' => $id, 'parent_id' => $owner->id])->first();
        }

        if (!$user) {
            return view('errors.403');
        }

        $user->secure_code = null;
        $user->save();
        $req->session()->flash('successMsg', 'Reset mã bảo vệ  của ' . $user->username . ' thành công!');
        return redirect(route('portal.agent.listMember'));
    }

    /**
     * services listing
     *
     * @param Request $req
     */
    public function updateBet($id, Request $req)
    {
        $req->session()->flash('errorMsg', '');
        $req->session()->flash('successMsg', '');
        $owner = $req->user();
        $bet = Bet::findByOwner($id, $owner);

        if (!$bet) {
            return view('errors.404');
        }
        $json = $bet->getJson();
        $userPortal = Auth::guard('portal')->user();
        $users = [];
        if ($userPortal->user_type == 'admin') {
            $_users = User::where('status', 'active')->where('user_type', 'member')->get();
        } else if ($userPortal->user_type == 'super') {
            $_users = User::where('status', 'active')->where('user_type', 'member')->where('parents', 'like', '1-' . $userPortal->id . '%')->get();
        }

        foreach ($_users as $user) {
            $userBetLast = Bet::where('user_id', $user->id)->whereNotNull('ip_address')->select('id', 'ip_address')->orderByDesc('id')->limit(1)->first();
            $users[$user->id] = [
                'username' => $user->username . ' - ' . $user->first_name,
                'id' => $user->id,
                'ip_address' => $userBetLast ? $userBetLast->ip_address : '',
            ];
        }

        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'bet_position' => 'required',
                'bet_amount' => 'required|numeric',
                'bet_value' => 'required|numeric',
                'ss' => 'required'
            ]);

            if ($req->submit == "Xác nhận") {
                if ($validator->fails()) {
                    $req->session()->flash('errorMsg', $validator->errors()->first());
                } else if ($bet->status === Bet::STATUS_DONE) {
                    $req->session()->flash('errorMsg', 'kèo đã sử lý');
                } else {
                    $req->session()->flash('successMsg', 'Cập nhật thành công!');
                    $bet_pre_pay = OddsConverter::calculateLose($req->bet_amount, $req->bet_value);
                    $change = $bet_pre_pay - $bet->bet_pre_pay;
                    if ($change !== 0) {
                        $u = User::find($bet->user_id);
                        if ($change > $u->wallet) {
                            $req->session()->flash('errorMsg', 'Tiền cọc không đủ');
                            return view('portal.commons.updateBet', compact('id', 'bet', 'json'));
                        }
                        $u->decrement('wallet', $change);
                    }
                    $bet->fill($req->all());
                    $bet->bet_pre_pay = $bet_pre_pay;
                    if ($req->created_at) {
                        $bet->created_at = $req->created_at;
                    }
                    if ($req->handicap_value) {
                        $odd = $bet->odd;
                        $odd['handicap_value'] = $req->handicap_value;
                        $odd['handicap'] = $req->handicap_value;
                        $bet->odd = $odd;
                    }

                    $bet->logs($owner);
                    $bet->save();
                }
            } elseif ($req->submit == 'Nhân bản'  && ($userPortal->user_type == 'admin' || $userPortal->user_type == 'super')) {
                $userOdd = User::find($bet->user_id);
                $userNew = User::find($req->username);


                if ($bet->bet_pre_pay > $userNew->wallet) {
                    $req->session()->flash('errorMsg', 'Số tiền của của người chơi không đủ để cược.');
                } else {
                    $sumBets = Bet::where(['event_id' => $bet->event_id, 'user_id' => $userNew->id])->sum('bet_amount');
                    if ($userNew->bongdaper < $sumBets + (float)$bet->bet_amount) {
                        $sub = $userNew->bongdaper - $sumBets;
                        if ($sub > 0) {
                            $msg = 'Vượt mức giới hạn trận đấu. bạn có thể đánh dưới ' . format_number_pretty($sub, 2) . 'UT';
                        } else {
                            $msg = 'Vượt mức giới hạn trận đấu';
                        }
                        $req->session()->flash('errorMsg', $msg);
                    } else {
                        $betDuplicate = $bet->replicate();
                        $betDuplicate->user_id = $userNew->id;
                        $betDuplicate->ip_address = $req->bet_ip_address;
                        $betDuplicate->created_at = $bet->created_at;
                        $betDuplicate->updated_at = $bet->updated_at;

                        $betDuplicate->updateParent($userNew);
                        try {
                            $betDuplicate->save();
                            $userNew->decrement('wallet', $bet->bet_pre_pay);
                            $userNew->last_time_bet = date("Y-m-d H:i:s");
                            $userNew->save();
                            $req->session()->flash('successMsg', 'Nhân bản thành công.');
                            $result = [];
                            foreach ($betDuplicate->toArray() as $key => $value) {
                                if ($key !== $betDuplicate->getAttibuteName($key)) {
                                    $result[] = [
                                        'key' => $key,
                                        'name' => $betDuplicate->getAttibuteName($key),
                                        'from' => $betDuplicate->getOriginal($key),
                                        'to' => $value
                                    ];
                                }
                            }
                            Log::create([
                                'user_id' => $userPortal->id,
                                'related_id' => $betDuplicate->id,
                                'type' => Log::TYPE_DOUBLE_BET,
                                'user_name' => $userPortal->username,
                                'extra' => $result
                            ]);
                        } catch (Exception $ex) {
                            $req->session()->flash('errorMsg', 'Nhân bản không thành công.');
                        }
                    }
                }
            } elseif ($req->submit == 'Dời' && ($userPortal->user_type == 'admin' || $userPortal->user_type == 'super')) {
                $userOdd = User::find($bet->user_id);
                $userNew = User::find($req->username);
                if ($userOdd->id != $userNew->id) {
                    if ($bet->bet_pre_pay > $userNew->wallet) {
                        $req->session()->flash('errorMsg', 'Số tiền của của người chơi không đủ để cược.');
                    } else {
                        $bet->user_id = $userNew->id;
                        $bet->ip_address = $req->bet_ip_address;
                        $betLog = Log::where('user_id', $userOdd->id)->where('related_id', $bet->id)->where('user_name', $userOdd->username)->first();
                        if ($betLog) {
                            $betLog->user_id = $userNew->id;
                            $betLog->user_name = $userNew->username;
                            $betLog->save();
                        }

                        $bet->updateParent($userNew);
                        try {
                            $bet->save();
                            $userNew->decrement('wallet', $bet->bet_pre_pay);
                            $userNew->last_time_bet = date("Y-m-d H:i:s");
                            $userNew->save();

                            $userOdd->increment('wallet', $bet->bet_pre_pay);
                            $userOdd->save();

                            $req->session()->flash('successMsg', 'Dời thành công');

                            $result = [];
                            foreach ($bet->toArray() as $key => $value) {
                                if ($key !== $bet->getAttibuteName($key)) {
                                    $result[] = [
                                        'key' => $key,
                                        'name' => $bet->getAttibuteName($key),
                                        'from' => $bet->getOriginal($key),
                                        'to' => $value
                                    ];
                                }
                            }
                            Log::create([
                                'user_id' => $userPortal->id,
                                'related_id' => $bet->id,
                                'type' => Log::TYPE_MOVED_BET,
                                'user_name' => $userPortal->username,
                                'extra' => $result
                            ]);
                        } catch (Exception $ex) {
                            $req->session()->flash('errorMsg', 'Dời không thành công');
                        }
                    }
                }
            }
        }


        return view('portal.commons.updateBet', compact('id', 'bet', 'json', 'owner', 'users', 'userPortal'));
    }

    public function updateBetInSaoke($id, Request $req)
    {
        $errorMsg = '';
        $owner = $req->user();
        $bet = Bet::findByOwner($id, $owner);


        if (!$bet) {
            return view('errors.404');
        }
        $json = $bet->getJson();

        $userPortal = Auth::guard('portal')->user();
        $users = [];
        if ($userPortal->user_type == 'admin') {
            $_users = User::where('status', 'active')->where('user_type', 'member')->get();
        } else if ($userPortal->user_type == 'super') {
            $_users = User::where('status', 'active')->where('user_type', 'member')->where('parents', 'like', '1-' . $userPortal->id . '%')->get();
        }

        foreach ($_users as $user) {
            $userBetLast = Bet::where('user_id', $user->id)->whereNotNull('ip_address')->select('id', 'ip_address')->orderByDesc('id')->limit(1)->first();
            $users[$user->id] = [
                'username' => $user->username . ' - ' . $user->first_name,
                'id' => $user->id,
                'ip_address' => $userBetLast ? $userBetLast->ip_address : '',
            ];
        }
        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'bet_position' => 'required',
                'bet_amount' => 'required|numeric',
                'bet_value' => 'numeric',
                'bet_profit' => 'required|numeric',
                'bet_commission' => 'required|numeric',
                'status' => 'required',
                'ss' => 'required'
            ]);

            $has_full = $req->has_full ? true : false;
            if ($validator->fails()) {
                $req->session()->flash('errorMsg', $validator->errors()->first());
            } else {
                if ($req->submit == "Xác nhận") {
                    $req->session()->flash('successMsg', 'Cập nhật thành công!');
                    if ($req->status == Bet::STATUS_DONE) {
                        if ($req->bet_status == Bet::STATUS_REFUND || $req->bet_status == Bet::STATUS_UNUSUAL_BETS) {
                            $u = User::find($bet->user_id);
                            if ($bet->status == Bet::STATUS_RUNING) {
                                $u->increment('wallet', $bet->bet_pre_pay);
                                $bet->status = Bet::STATUS_DONE;
                                $bet->bet_status = $req->bet_status;
                                $bet->logs($owner);
                                $bet->save();
                            } else if ($bet->status == Bet::STATUS_DONE) {
                                if ($bet->bet_status == Bet::BET_STATUS_WON) {
                                    $u->decrement('wallet', $bet->bet_profit + $bet->bet_commission);
                                }

                                if ($bet->bet_status == Bet::BET_STATUS_LOSE) {
                                    $u->increment('wallet', - ($bet->bet_profit + $bet->bet_commission));
                                }
                                $bet->bet_commission = 0;
                                $bet->bet_profit = 0;
                                $bet->status = Bet::STATUS_DONE;
                                $bet->bet_status = $req->bet_status;
                                $bet->logs($owner);
                                $bet->save();
                            }
                        } else {
                            $u = User::find($bet->user_id);
                            $change = ($bet->bet_profit + $bet->bet_commission) - ($req->bet_profit + $req->bet_commission);
                            if ($change !== 0 && date('m/d/Y') == date('m/d/Y', strtotime($bet->created_at))) {
                                if ($change > $u->wallet) {
                                    $req->session()->flash('errorMsg', 'Tiền cọc không đủ');
                                    return view('portal.commons.updateBetInSaoke', compact('id', 'bet', 'json'));
                                }
                                $u->decrement('wallet', $change);
                            }
                            $bet->total_profit = $bet->bet_profit + $bet->bet_commission;
                            $bet->bet_pre_pay = OddsConverter::calculateLose($req->bet_amount, $req->bet_value);

                            if ($bet->status == Bet::STATUS_RUNING && $req->bet_status == Bet::BET_STATUS_WON) {
                                $u->increment('wallet', $bet->total_profit +  $bet->bet_pre_pay);
                            }
                        }
                    }

                    if (
                        date('m/d/Y') == date('m/d/Y', strtotime($bet->created_at))
                        && $bet->status != $req->status
                        && $req->status == Bet::STATUS_CANCEL
                    ) {
                        $u = User::find($bet->user_id);
                        $u->increment('wallet', $bet->bet_pre_pay);
                    }
                    $bet->status = $req->status;
                    $bet->ip_address =  $req->bet_ip_address;
                    $bet->fill($req->all());
                    $bet->fill(['has_full' => $has_full]);
                    if ($req->handicap_value) {
                        $odd = $bet->odd;
                        $odd['handicap_value'] = $req->handicap_value;
                        $odd['handicap'] = $req->handicap_value;
                        $bet->odd = $odd;
                    }
                    $bet->logs($owner);
                    $bet->save();
                } elseif ($req->submit == 'Nhân bản'  && ($userPortal->user_type == 'admin' || $userPortal->user_type == 'super')) {
                    $userOdd = User::find($bet->user_id);
                    $userNew = User::find($req->username);
                    if ($bet->bet_pre_pay > $userNew->wallet) {
                        $req->session()->flash('errorMsg', 'Số tiền của của người chơi không đủ để tạo sao kê.');
                    } else {
                        $sumBets = Bet::where(['event_id' => $bet->event_id, 'user_id' => $userNew->id])->sum('bet_amount');
                        if ($userNew->bongdaper < $sumBets + (float)$bet->bet_amount) {
                            $sub = $userNew->bongdaper - $sumBets;
                            if ($sub > 0) {
                                $msg = 'Vượt mức giới hạn trận đấu. bạn có thể đánh dưới ' . format_number_pretty($sub, 2) . 'UT';
                            } else {
                                $msg = 'Vượt mức giới hạn trận đấu';
                            }
                            $req->session()->flash('errorMsg', $msg);
                        } else {
                            $betDuplicate = $bet->replicate();
                            $betDuplicate->user_id = $userNew->id;
                            $betDuplicate->ip_address = $req->bet_ip_address;
                            $betDuplicate->created_at = $bet->created_at;
                            $betDuplicate->updated_at = $bet->updated_at;

                            $betDuplicate->updateParent($userNew);
                            try {
                                $betDuplicate->save();
                                $userNew->decrement('wallet', $bet->bet_pre_pay);
                                $userNew->last_time_bet = date("Y-m-d H:i:s");
                                $userNew->save();
                                $req->session()->flash('successMsg', 'Nhân bản thành công.');
                                $result = [];
                                foreach ($betDuplicate->toArray() as $key => $value) {
                                    if ($key !== $betDuplicate->getAttibuteName($key)) {
                                        $result[] = [
                                            'key' => $key,
                                            'name' => $betDuplicate->getAttibuteName($key),
                                            'from' => $betDuplicate->getOriginal($key),
                                            'to' => $value
                                        ];
                                    }
                                }
                                Log::create([
                                    'user_id' => $userPortal->id,
                                    'related_id' => $betDuplicate->id,
                                    'type' => Log::TYPE_DOUBLE_BET,
                                    'user_name' => $userPortal->username,
                                    'extra' => $result
                                ]);
                            } catch (Exception $ex) {
                                $req->session()->flash('errorMsg', 'Nhân bản không thành công.');
                            }
                        }
                    }
                } elseif ($req->submit == 'Dời' && ($userPortal->user_type == 'admin' || $userPortal->user_type == 'super')) {
                    $userOdd = User::find($bet->user_id);
                    $userNew = User::find($req->username);
                    if ($userOdd->id != $userNew->id) {
                        if ($bet->bet_pre_pay > $userNew->wallet) {
                            $req->session()->flash('errorMsg', 'Số tiền của của người chơi không đủ để cược.');
                        } else {
                            $bet->user_id = $userNew->id;
                            $bet->ip_address = $req->bet_ip_address;
                            $betLog = Log::where('user_id', $userOdd->id)->where('related_id', $bet->id)->where('user_name', $userOdd->username)->first();
                            if ($betLog) {
                                $betLog->user_id = $userNew->id;
                                $betLog->user_name = $userNew->username;
                                $betLog->save();
                            }

                            $bet->updateParent($userNew);
                            try {
                                $bet->save();
                                $userNew->decrement('wallet', $bet->bet_pre_pay);
                                $userNew->last_time_bet = date("Y-m-d H:i:s");
                                $userNew->save();

                                $userOdd->increment('wallet', $bet->bet_pre_pay);
                                $userOdd->save();

                                $req->session()->flash('successMsg', 'Dời thành công');
                                $result = [];
                                foreach ($bet->toArray() as $key => $value) {
                                    if ($key !== $bet->getAttibuteName($key)) {
                                        $result[] = [
                                            'key' => $key,
                                            'name' => $bet->getAttibuteName($key),
                                            'from' => $bet->getOriginal($key),
                                            'to' => $value
                                        ];
                                    }
                                }
                                Log::create([
                                    'user_id' => $userPortal->id,
                                    'related_id' => $bet->id,
                                    'type' => Log::TYPE_MOVED_BET,
                                    'user_name' => $userPortal->username,
                                    'extra' => $result
                                ]);
                            } catch (Exception $ex) {
                                $req->session()->flash('errorMsg', 'Dời không thành công');
                            }
                        }
                    }
                }
            }
        }
        return view('portal.commons.updateBetInSaoke', compact('id', 'bet', 'json', 'owner', 'users', 'userPortal'));
    }

    public function updateEvent($id, Request $req)
    {
        $errorMsg = '';
        $owner = $req->user();
        $event = Event::find($id);
        if (!$event) {
            return view('errors.404');
        }

        if ($req->isMethod('post')) {
            if ($event->time_status !== 2) {
                $errorMsg = 'Trận đấu đã được xử lý!';
            } else {
                $validator = Validator::make($req->all(), [
                    'time_status' => 'required|in:2,3,5',
                    'hf_ss' => 'required',
                    'ss' => 'required'
                ]);

                if ($validator->fails()) {
                    $errorMsg = $validator->errors()->first();
                } else {
                    $list_ss = Event::validSs($req->ss, $req->list_ss);
                    if ($list_ss === false) {
                        $errorMsg = 'Tỉ số và danh sách bàn thắng không phù hợp!';
                    } else {
                        $errorMsg = 'Cập nhật thành công!';
                        $event->time_status = $req->time_status;
                        $event->hf_ss = $req->hf_ss;
                        $event->ss = $req->ss;
                        $event->extra = $event->extra ? $event->extra : [];
                        $event->extra = array_merge($event->extra, ['ss' => $list_ss]);
                        $event->logs($owner);
                        $event->save();
                    }
                }
            }
        }
        return view('portal.commons.updateEvent', compact('id', 'event', 'errorMsg'));
    }

    public function updateMember($id, Request $req)
    {
        $req->session()->flash('errorMsg', '');
        $req->session()->flash('successMsg', '');
        $owner = $req->user();
        if ($owner->isAdmin()) {
            $user = User::find($id);
        } else {
            $user = User::where(['id' => $id, 'parent_id' => $owner->id])->first();
        }
        if (!$user) {
            return view('errors.403');
        }

        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'first_name' => 'required',
                'last_name' => 'required',
                'home_mobile' => 'required',
                'phone' => 'required',
            ]);

            if ($validator->fails()) {
                $req->session()->flash('errorMsg', $validator->errors()->first());
            } else {
                $req->session()->flash('successMsg', 'Đổi thông tin thành công!');
                $user->fill([
                    'first_name' => $req->first_name,
                    'last_name' => $req->last_name,
                    'home_mobile' => $req->home_mobile,
                    'phone' => $req->phone,
                    'fax' => $req->fax
                ]);
                $user->save();
            }
        }
        return view('portal.commons.updateMember', compact('id', 'user'));
    }

    public function updateBetsMember($id, Request $req)
    {
        $owner = $req->user();
        if ($owner->isAdmin()) {
            $user = User::find($id);
        } else {
            $user = User::where(['id' => $id, 'parent_id' => $owner->id])->first();
        }
        if (!$user) {
            return view('errors.403');
        }

        $errorMsg = '';
        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'bongdamin' => 'required|numeric',
                'bongdamax' => 'required|numeric',
                'bongdaper' => 'required|numeric',
                'bongromin' => 'required|numeric',
                'bongromax' => 'required|numeric',
                'bongroper' => 'required|numeric',
                'bauducmin' => 'required|numeric',
                'bauducmax' => 'required|numeric',
                'bauducper' => 'required|numeric'
            ]);

            if ($validator->fails()) {
                $errorMsg = $validator->errors()->first();
            } else {
                $errorMsg = 'Cập nhật thành công!';
                $user->fill([
                    'bongdamin' => $req->bongdamin,
                    'bongdamax' => $req->bongdamax,
                    'bongdaper' => $req->bongdaper,
                    'bongromin' => $req->bongromin,
                    'bongromax' => $req->bongromax,
                    'bongroper' => $req->bongroper,
                    'bauducmin' => $req->bauducmin,
                    'bauducmax' => $req->bauducmax,
                    'bauducper' => $req->bauducper
                ]);
                $user->save();
            }
        }
        return view('portal.commons.bets_member', compact('user', 'errorMsg'));
    }

    public function updatePermission($id, Request $req)
    {
        $owner = $req->user();
        if ($owner->isAdmin()) {
            $user = User::find($id);
        } else {
            $user = User::where(['id' => $id, 'parent_id' => $owner->id])->first();
        }
        if (!$user) {
            return view('errors.403');
        }
        $permissions = [
            'edit_keo_treo' => $user->can('edit_keo_treo'),
            'edit_keo_dang_da' => $user->can('edit_keo_dang_da'),
            'edit_keo_sao_ke' => $user->can('edit_keo_sao_ke'),
            'edit_keo_delete' => $user->can('edit_keo_delete'),
            'edit_keo_logs' => $user->can('edit_keo_logs'),
        ];
        $errorMsg = '';
        if ($req->isMethod('post')) {
            if ($req->edit_keo_treo) {
                $user->attachPermissionByName('edit_keo_treo');
            } else {
                $user->detachPermissionByName('edit_keo_treo');
            }

            if ($req->edit_keo_delete) {
                $user->attachPermissionByName('edit_keo_delete');
            } else {
                $user->detachPermissionByName('edit_keo_delete');
            }

            if ($req->edit_keo_dang_da) {
                $user->attachPermissionByName('edit_keo_dang_da');
            } else {
                $user->detachPermissionByName('edit_keo_dang_da');
            }

            if ($req->edit_keo_sao_ke) {
                $user->attachPermissionByName('edit_keo_sao_ke');
            } else {
                $user->detachPermissionByName('edit_keo_sao_ke');
            }

            if ($req->edit_keo_logs) {
                $user->attachPermissionByName('edit_keo_logs');
            } else {
                $user->detachPermissionByName('edit_keo_logs');
            }
            $errorMsg = 'Cập nhật thành công!';
            echo "<script>alert('Cập nhật thành công!'); window.close();</script>"; //close window
        }
        return view('portal.commons.updatePermission', compact('user', 'errorMsg', 'permissions'));
    }

    public function updateWallet($id, Request $req)
    {
        $owner = $req->user();
        if ($owner->isAdmin()) {
            $user = User::find($id);
            $owner = User::find($user->parent_id);
        } else {
            $user = User::where(['id' => $id, 'parent_id' => $owner->id])->first();
        }
        if (!$user) {
            return view('errors.403');
        }

        $errorMsg = '';
        $min = $user->credit_line - $user->wallet;
        $max = $owner->wallet + $user->credit_line;
        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'txtamout' => 'required|numeric|max:' . $max . '|min:' . $min
            ]);

            $reduceValue = $req->txtamout - $user->credit_line;
            if ($validator->fails()) {
                $errorMsg = $validator->errors()->first();
            } else {
                DB::beginTransaction();
                try {
                    $user->increment('wallet', $reduceValue);
                    $user->increment('credit_line', $reduceValue);
                    $owner->decrement('wallet', $reduceValue);
                    $errorMsg = 'Cập nhật thành công!';
                    DB::commit();
                } catch (QueryException $e) {
                    DB::rollBack();
                    Logs::error($e);
                    dump($e);
                    $errorMsg = 'Lỗi Database, liên hệ với kĩ thuật để sửa lỗi.';
                } catch (Exception $ex) {
                    DB::rollBack();
                    Logs::error($ex);
                    $errorMsg = 'Tạo bị lỗi';
                }
            }
        }
        return view('portal.commons.updateWallet', compact('user', 'errorMsg', 'min', 'max'));
    }

    public function updateCommission($id, Request $req)
    {
        $owner = $req->user();
        if ($owner->isAdmin()) {
            $user = User::find($id);
        } else {
            $user = User::where(['id' => $id, 'parent_id' => $owner->id])->first();
        }
        if (!$user) {
            return view('errors.403');
        }

        $errorMsg = '';
        if ($req->isMethod('post')) {
            try {
                $user->discountAsian = $req->discountAsian;
                $user->save();
                $errorMsg = 'Cập nhật thành công!';
                echo "<script>window.close();</script>"; //close window
            } catch (Exception $ex) {
                Logs::error($ex);
                $errorMsg = 'cập nhật lỗi';
            }
        }
        return view('portal.commons.updateCommission', compact('user', 'errorMsg'));
    }
}
