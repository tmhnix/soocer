<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use App\Models\League;
use App\Models\Event;
use App\Models\User;
use App\Components\Menu\Menu;
use App\Models\Bet;
use App\Models\Odd;
use App\Models\NumberGame;
use DB;
use Validator;
use App\Components\SessionStore;
use App\Helpers\RedisCache;
use Illuminate\Support\Facades\Cookie;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;
use Psy\Util\Json;
use Illuminate\Support\Facades\Redis as Redis;

/**
 * IpAccessController info
 */
class HomeController extends WebController
{

    /**
     * services listing
     *
     * @param Request $req
     */
    public function index(Request $req)
    {
        if (SessionStore::isFirstVersion()) {
            return view('web.index', compact('req'))->with("LEFT_MENU", Menu::getMenu());
        }
        return view('web.v2.pages.home', compact('req'))->with("LEFT_MENU", Menu::getMenu());
    }
    public function offline(Request $req)
    {
        $user = $req->user();
        $user->online = false;
        $user->save();
    }

    public function copy(Request $req)
    {
        return view('web.commons.copy');
    }

    public function number_game(Request $req)
    {
        SessionStore::changeVersion();
        return redirect(route('web.home', ['ref' => 'number_game']));
    }

    public function bingo(Request $req)
    {
        return view('web.iframe.bingo');
    }

    public function message(Request $req)
    {
        return view('web.v2.iframe.message');
    }

    public function underodds(Request $req)
    {
        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.underodds', ['type' => 'single', 'odd_type' => 'malay', 'req' => $req]);
        }
        return view('web.v2.iframe.underodds', ['type' => 'single', 'odd_type' => 'malay']);
    }

    public function correct_score(Request $req)
    {
        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.correct_score', ['type' => 'single', 'odd_type' => 'malay', 'req' => $req]);
        }
        return view('web.v2.iframe.correct_score', ['type' => 'single', 'odd_type' => 'malay']);
    }

    public function saba_game(Request $req)
    {
        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.saba_game', ['type' => 'single', 'odd_type' => 'malay', 'req' => $req]);
        }
        return view('web.v2.iframe.saba_game', ['type' => 'single', 'odd_type' => 'malay','game_type' => 'saba_game']);
    }

    public function underoddsGroup(Request $req)
    {
        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.underodds', ['type' => 'multiple', 'odd_type' => 'decimal']);
        }
        return view('web.v2.iframe.underodds', ['type' => 'multiple', 'odd_type' => 'decimal']);
    }

    public function profileChangePwd(Request $req)
    {
        $errorMsg = '';
        $user = $req->user();

        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'txtPW' => 'required',
                'txtConPW' => 'required|same:txtPW',
                'txtOldPW' => 'required'
            ]);
            if ($validator->fails()) {
                $errorMsg = $validator->errors()->first();
            } else if (!$user->validPwd($req->txtOldPW)) {
                $errorMsg = 'Sai mật khẩu cũ!!';
            } else {
                $errorMsg = 'Cập nhật mật khẩu thành công!!';
                $user->setPassword($req->txtPW);
                $user->save();
            }
        }
        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.profile_changepwd', ['type' => 'single', 'odd_type' => 'malay']);
        }
        return view('web.v2.iframe.profile_changepwd', compact('errorMsg'));
    }

    public function userProfile_Preferences(Request $req)
    {
        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.profile_preferences');
        }
        return view('web.v2.iframe.profile_preferences');
    }

    public function userProfile_CSPriority(Request $req)
    {
        return view('web.iframe.profile_cspriority');
    }

    public function leftIframe(Request $req)
    {
        $user = $req->user();
        $user->includeProfit();
        $user->includeRuningAmount();

        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.left', compact('betsDone', 'betsRuning'));
        }
        return view('web.v2.iframe.left', compact('betsDone', 'betsRuning'));
    }

    public function topmenu(Request $req)
    {
        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.topmenu');
        }
        return view('web.v2.iframe.topmenu');
    }

    public function resultFrame(Request $req)
    {
        $date = $req->date ? $req->date : date("Y-m-d");
        $leagues = League::where('leagues.status', 'active')
            ->join('events', function ($join) use ($date) {
                $join->on('events.league_id', '=', 'leagues.league_id');
                $join->whereDate('events.updated_at', $date);
            })
            ->havingRaw('count(events.id) > 0')
            ->select('leagues.*')
            ->groupBy('leagues.league_id', 'leagues.id')
            ->orderBy('leagues.order', 'asc')
            ->get();

        foreach ($leagues as $value) {
            $value->events = Event::where(['league_id' => $value->league_id])
                ->whereDate('updated_at', $date)
                ->orderBy('order', 'asc')->get();
        }

        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.result_frame', compact('leagues'));
        }
        return view('web.v2.iframe.result_frame', compact('leagues'));
    }

    public function statement(Request $req)
    {
        $user = $req->user();
        $type = $req->get('type') ?? 'soccer';
        $game = $req->get('game') ?? 'taixiu';
        $betsCancel = Bet::where('user_id', $user->id)
            ->where('status', Bet::STATUS_CANCEL)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', '>=', date("m/d/Y", strtotime("-1 month")))
            ->selectRaw('date(created_at) as date, count(id), sum(bet_amount) as stake, sum(bet_profit) as profit, sum(bet_commission) as commission')
            ->groupBy(DB::raw('date(created_at)'))
            ->orderBy('date', 'desc')
            ->get();

        $betsDone = Bet::where('user_id', $user->id)
            ->where('status', Bet::STATUS_DONE)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', '>=', date("m/d/Y", strtotime("-1 month")))
            ->selectRaw('date(created_at) as date, count(id), sum(bet_amount) as stake, sum(bet_profit) as profit, sum(bet_commission) as commission, game_type')
            ->groupBy(DB::raw('date(created_at)'), 'game_type')
            ->orderBy('date', 'desc')
            ->get();

        $sabagame = []; 
        if ($type == 'sabagame') {
            $sabagame = [
                'taixiu' => [
                    'title' => 'Tài xỉu',
                    'data' => [],
                ],
                'xocdia' =>  [
                    'title' => 'Xóc đĩa',
                    'data' => [],
                ],
                'baucua' =>  [
                    'title' => 'Bầu cua',
                    'data' => [],
                ],
                'poker'  =>  [
                    'title' => 'Poker',
                    'data' => [],
                ],
                'caothap' =>  [
                    'title' => 'Cao thấp',
                    'data' => [],
                ]
            ];
        }

        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.statement', compact('betsCancel', 'betsDone'));
        }
        return view('web.v2.iframe.statement', compact('betsCancel', 'betsDone', 'type', 'sabagame', 'game'));
    }

    public function getHistorySabagame($game, Request $req)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://node:8000/api/' . $game . 'History',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'session:' . $req->header('session'),
                'domain:' . $req->header('domain')
            ),
        ));

        $response = curl_exec($curl);
        dump(curl_error($curl));
        curl_close($curl);

        // die;
        // $response = json_decode($response, true);


        return response([
            'data' => [],
            'message' => 'success'
        ]);
    }

    public function statementDetails(Request $req)
    {
        $date = $req->date ? $req->date : date("Y-m-d");
        $type = $req->type;
        $game_type = $req->game_type ? $req->game_type : Bet::GAME_TYPE_BONGDA;
        $user = $req->user();
        $bets = Bet::where('user_id', $user->id)
            ->where('game_type', $game_type)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', $date);
        if ($type) {
            $bets = $bets->where('status', $type);
        }
        $bets = $bets->orderBy('created_at', 'asc')->get();

        $result = [];
        foreach ($bets as $value) {
            $result[] = $value->getJson();
        }
        $bets = $result;

        $betsInfo = Bet::where('user_id', $user->id)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', $date);
        if ($type) {
            $betsInfo = $betsInfo->where('status', $type);
        }
        $betsInfo = $betsInfo->selectRaw('date(created_at) as date, count(id), sum(bet_amount) as stake, sum(bet_profit) as profit, sum(bet_commission) as commission')
            ->groupBy(DB::raw('date(created_at)'))
            ->first();
        if (SessionStore::isFirstVersion()) {
            return view('web.iframe.statement_details', compact('bets', 'betsInfo', 'type'));
        }
        return view('web.v2.iframe.statement_details', compact('bets', 'betsInfo', 'type'));
    }

    // =================== API ======================
    public function getInPlayLeagues(Request $req)
    {
        $result = RedisCache::getInplay(1, $req->type, 1);
        if ($result) {
            return response([
                'data' => $result,
                'message' => 'success'
            ]);
        }
        $leagues = League::where('leagues.status', 'active')
            ->join('odds', function ($join) use ($req) {
                $join->on('odds.league_id', '=', 'leagues.league_id');
                $join->where('odds.odd_status', '1');
                if ($req->type === 'multiple') {
                    $join->where('odds.is_parlay', true);
                }
            })
            ->havingRaw('count(odds.id) > 0')
            ->select('leagues.id', 'leagues.name', 'leagues.league_id', 'leagues.order', 'leagues.order_upcoming')
            ->groupBy('leagues.league_id', 'leagues.id')
            ->orderBy('leagues.order', 'asc')
            ->get();

        $i = 0;
        foreach ($leagues as $value) {
            $value->events = $value->listInPlayEvents(1, $req->type);
            $old = -1;
            foreach ($value->events as $item) {
                $item->odd;
                if ($old !== $item->event_id) {
                    $old = $item->event_id;
                    $i++;
                }
                $item->key = $i;
            }
        }

        RedisCache::setInplay(1, $req->type, 1, $leagues);
        return response([
            'data' => $leagues,
            'message' => 'success'
        ]);
    }

    public function getUpcomingPlayLeagues(Request $req)
    {
        $result = RedisCache::getInplay(1, $req->type, 0);
        if ($result) {
            return response([
                'data' => $result,
                'message' => 'success'
            ]);
        }
        $leagues = League::where('leagues.status', 'active')
            ->join('odds', function ($join) use ($req) {
                $join->on('odds.league_id', '=', 'leagues.league_id');
                $join->where('odds.odd_status', '0');
                if ($req->type === 'multiple') {
                    $join->where('odds.is_parlay', true);
                }
            })
            ->havingRaw('count(odds.id) > 0')
            ->select('leagues.id', 'leagues.name', 'leagues.league_id', 'leagues.order', 'leagues.order_upcoming')
            ->groupBy('leagues.league_id', 'leagues.id')
            ->orderBy('leagues.order_upcoming', 'asc')
            ->get();

        $i = 0;
        foreach ($leagues as $value) {
            $value->events = $value->listInPlayEvents(0, $req->type);
            $old = -1;
            foreach ($value->events as $item) {
                $item->odd;
                if ($old !== $item->event_id) {
                    $old = $item->event_id;
                    $i++;
                }
                $item->key = $i;
            }
        }

        RedisCache::setInplay(1, $req->type, 0, $leagues);
        return response([
            'data' => $leagues,
            'message' => 'success'
        ]);
    }

    public function getInPlayLeaguesById($id, Request $req)
    {
        $league = League::where('leagues.id', $id)
            ->join('events', function ($join) {
                $join->on('events.league_id', '=', 'leagues.league_id');
                $join->where('events.time_status', '1');
                $join->where('events.has_odds', true);
            })
            ->havingRaw('count(events.id) > 0')
            ->select('leagues.id', 'leagues.name', 'leagues.league_id', 'leagues.order', 'leagues.order_upcoming')
            ->limit(5)
            ->groupBy('leagues.league_id', 'leagues.id')
            ->first();

        $league->events = $league->listInPlayEvents();
        foreach ($league->events as $item) {
            $item->odd;
        }

        return response([
            'data' => $league,
            'message' => 'success'
        ]);
    }

    public function getEventById($id, $type, Request $req)
    {
        if($type == 'correct_score') {
            $event = Event::where('event_id', $id)->first();
            return response([
                'data' => $event,
                'message' => 'success'
            ]);
        }
        
        $event = Odd::findFullByOddId($id);
        return response([
            'data' => $event,
            'message' => 'success'
        ]);
    }

    public function getAccountInfo(Request $req)
    {
        $user = $req->user();
        $user->includeProfit();
        $user->includeRuningAmount();
        $user->includeRuningAmountToday();
        $user->includeRuningAmountNotToday();
        return response([
            'data' => [
                'username' => $user->username,
                'last_time_login' => date('m/d/Y h:i A', strtotime($user->last_time_login)),
                'last_time_bet' => date('m/d/Y h:i A', strtotime($user->last_time_bet)),
                'wallet' => $user->wallet,
                'profit' => $user->profit,
                'runing_amount' => $user->runing_amount,
                'runing_amount_today' => $user->runing_amount_today,
                'runing_amount_not_today' => $user->runing_amount_not_today,
                'bongdamax' => $user->bongdamax,
                'bongdamin' => $user->bongdamin,
                'credit_line' => $user->credit_line
            ],
            'message' => 'success'
        ]);
    }

    public function getleagues()
    {
        $leagues = League::where('leagues.status', 'active')
            ->join('odds', function ($join) {
                $join->on('odds.league_id', '=', 'leagues.league_id');
                $join->whereIn('odds.odd_status', ['1', '0']);
            })
            ->havingRaw('count(odds.id) > 0')
            ->select('leagues.id', 'leagues.name')
            ->groupBy('leagues.league_id', 'leagues.id')
            ->orderBy('leagues.name', 'asc')
            ->get();
        return response([
            'data' => $leagues,
            'message' => 'success'
        ]);
    }

    public function getNumberGames()
    {
        $turbo = NumberGame::where('status', 'runing')
            ->where('type', 'turbo')
            ->orderBy('id', 'desc')
            ->first();
        $number = NumberGame::where('status', 'runing')
            ->where('type', 'number')
            ->orderBy('id', 'desc')
            ->first();
        return response([
            'data' => [
                'turbo' => $turbo,
                'number' => $number,
            ],
            'message' => 'success'
        ]);
    }

    public function changeVersion()
    {
        SessionStore::changeVersion();
        return response([
            'data' => [],
            'message' => 'success'
        ]);
    }

    public function live($matchId, $liveId)
    {
        $liveId = explode(',', $liveId);
        $src = '';
        $curl = curl_init();
        // echo '<pre>';var_dump(Redis::keys('*'));
        $tokenCookie = json_decode(RedisCache::getCookieLive(), true);
        // var_dump($tokenCookie);

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://mylv.fts368.com/LiveStream.aspx',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('act' => 'getStreamUrl', 'liveId' => $liveId[0], 'matchGroupId' => $matchId),
            CURLOPT_HTTPHEADER => array(
                'Cookie: ASP.NET_SessionId=' . @$tokenCookie['value']
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);
        $src = $response['Url'];

        return view('web.v2.live', compact('src'));
    }
}
