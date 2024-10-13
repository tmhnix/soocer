<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\User;
use App\Models\League;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\RedisCache;
use App\Models\Bet;
use DB;


class LeaguesController extends ApiController
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }


    // =================== API ======================
    public function getInPlayLeagues(Request $req)
    {
        $result = null; //RedisCache::getInplay(2, $req->type, 1);
        if ($result) {
            return response([
                'data' => $result,
                'message' => 'success'
            ]);
        }
        $req->game_type = $req->game_type ?? 'socer';
        $leagues = League::where('leagues.status', 'active')
            ->join('odds', function ($join) use ($req) {
                $join->on('odds.league_id', '=', 'leagues.league_id');
                $join->where('odds.odd_status', '1');
                if ($req->type === 'multiple') {
                    $join->where('odds.is_parlay', true);
                }
            })
            ->where('leagues.type', '=', $req->game_type)
            ->havingRaw('count(odds.id) > 0')
            ->select('leagues.id', 'leagues.name', 'leagues.league_id', 'leagues.order', 'leagues.order_upcoming')
            ->groupBy('leagues.league_id', 'leagues.id')
            ->orderBy('leagues.order', 'asc')
            ->get();

        $i = 0;
        $_leagues = [];
        foreach ($leagues as $league) {
            $league->events = $league->populateEvents(1);
            $isOdds = false;
            $cs = false;
            foreach ($league->events as $value) {
                $value->key = $i;
                $i++;
                $value->odds = $value->populateOdds(1, $req->type);
                if ($value->is_cs) {
                    $cs = true;
                }
                if($value->odds) {
                    $isOdds = true;
                }
                if($req->game_type == 'saba') {
                    $home = explode('|', $value->home);
                    $away = explode('|', $value->away);
                    $value->home = $home[0];
                    $value->away = $away[0];
                    $value->league_name = explode('|', $value->league_name)[0];
                }
                
            }
            $league->cs = $cs;
            if($req->game_type == 'saba') {
                $league_name = explode('|',$league->name);
                $league->name = $league_name[0];
            }
            if($isOdds) {
                array_push($_leagues, $league);
            }
        }
        // RedisCache::setInplay(2, $req->type, 1, $leagues);

        return response([
            'data' => $_leagues,
            'message' => 'success'
        ]);
    }

    public function getUpcomingPlayLeagues(Request $req)
    {
        // $result = RedisCache::getInplay(2, $req->type, 0);
        $result = null;
        if ($result) {
            return response([
                'data' => $result,
                'message' => 'success'
            ]);
        }
        $req->game_type = $req->game_type ?? 'socer';
        
        $leagues = League::where('leagues.status', 'active')
            ->join('odds', function ($join) use ($req) {
                $join->on('odds.league_id', '=', 'leagues.league_id');
                $join->where('odds.odd_status', '0');
                if ($req->type === 'multiple') {
                    $join->where('odds.is_parlay', true);
                }
            })
            ->where('leagues.type', '=', $req->game_type)
            ->havingRaw('count(odds.id) > 0')
            ->select('leagues.id', 'leagues.name', 'leagues.league_id', 'leagues.order', 'leagues.order_upcoming')
            ->groupBy('leagues.league_id', 'leagues.id')
            ->orderBy('leagues.order_upcoming', 'asc')
            ->limit(30)
            ->get();

        $i = 0;
        $_leagues = [];
        foreach ($leagues as $league) {
            $league->events = $league->populateEvents(0);
            $cs = false;
            $isOdds = false;
            foreach ($league->events as $value) {
                $value->key = $i;
                $i++;
                $value->odds = $value->populateOdds(0, $req->type);
                if($value->odds) {
                    $isOdds = true;
                }
                if ($value->correct_score) {
                    $cs = true;
                }
                if($req->game_type == 'saba') {
                    $home = explode('|', $value->home);
                    $away = explode('|', $value->away);
                    $value->home = $home[0];
                    $value->away = $away[0];
                }
            }           
            $league->cs = $cs;
            if($req->game_type == 'saba') {
                $league_name = explode('|',$league->name);
                $league->name = $league_name[0];
            }
            if($isOdds) {
                array_push($_leagues, $league);
            }
        }

        RedisCache::setInplay(2, $req->type, 0, $_leagues);
        return response([
            'data' => $leagues,
            'message' => 'success'
        ]);
    }

    public function getLive($matchId, $liveId)
    {
        $liveId = explode(',', $liveId);
        $src = '';
        $curl = curl_init();
        $tokenCookie = json_decode(RedisCache::getCookieLive(), true);

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

        return response([
            'data' => $src,
            'message' => 'success'
        ]);
    }

    public function getStatement(Request $req)
    {
        $date = $req->date ? $req->date : date("m/d/Y");
        if ($req->day == '2before') {
            $date = date("m/d/Y", strtotime("-2 day"));
        }
        if ($req->day == '7before') {
            $date = date("m/d/Y", strtotime("-7 days"));
        }

        $bets = Bet::where('user_id', Auth::user()->id)
            ->whereIn('status', [Bet::STATUS_CANCEL, Bet::STATUS_DONE])
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', '>=', $date)
            ->selectRaw('date(created_at) as date, count(id), sum(bet_amount) as stake, sum(bet_profit) as profit, sum(bet_commission) as commission')
            ->groupBy(DB::raw('date(created_at)'))
            ->orderBy('date', 'desc')
            ->get();
        return response([
            'data' => [
                'bets' => $bets,
                // 'betCanncel' => $betsCancel
            ],
            'message' => 'success'
        ]);
    }

    public function getStatementReport(Request $req)
    {
        $date = $req->date ? $req->date : date("Y-m-d");
        $day = date('w');
        $week_start = date('Y-m-d', strtotime('monday this week'));

        $bets = Bet::where('user_id', Auth::user()->id)
            ->whereIn('status', [Bet::STATUS_CANCEL, Bet::STATUS_DONE])
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', '>=', $week_start)
            ->whereDate('created_at', '<=', $date)
            ->selectRaw('date(created_at) as date, count(id), sum(bet_amount) as stake, sum(bet_profit) as profit, sum(bet_commission) as commission')
            ->groupBy(DB::raw('date(created_at)'))
            ->orderBy('date', 'desc')
            ->get();


        //lastWeek
        $last_week_end = date('Y-m-d', strtotime('-1 day', strtotime($week_start)));
        $last_week_start = date('Y-m-d', strtotime('-6 days', strtotime($last_week_end)));
       
        $lastBets = Bet::where('user_id', Auth::user()->id)
            ->whereIn('status', [Bet::STATUS_CANCEL, Bet::STATUS_DONE])
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', '>=', $last_week_start)
            ->whereDate('created_at', '<=', $last_week_end)
            ->selectRaw('date(created_at) as date, count(id), sum(bet_amount) as stake, sum(bet_profit) as profit, sum(bet_commission) as commission')
            ->groupBy(DB::raw('date(created_at)'))
            ->orderBy('date', 'desc')
            ->get();
        return response([
            'data' => [
                'week' => $bets,
                'lastWeek' => $lastBets,

            ],
            'message' => 'success'
        ]);
    }

    public function getStatementDetails(Request $req)
    {
        $date = $req->date ? $req->date : date("Y-m-d");
        $type = $req->type;
        $game_type = $req->game_type ? $req->game_type : Bet::GAME_TYPE_BONGDA;
        $bets = Bet::where('user_id', Auth::user()->id)
            ->where('game_type', $game_type)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', '>=', $date);
        if ($type) {
            $bets = $bets->where('status', $type);
        }
        $bets = $bets->orderBy('created_at', 'asc')->get();

        $result = [];
        foreach ($bets as $value) {
            $result[] = $value->getJson();
        }
        $bets = $result;

        $betsInfo = Bet::where('user_id', Auth::user()->id)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', '=', $date);
        if ($type) {
            $betsInfo = $betsInfo->where('status', $type);
        }
        $betsInfo = $betsInfo->selectRaw('date(created_at) as date, count(id), sum(bet_amount) as stake, sum(bet_profit) as profit, sum(bet_commission) as commission')
            ->groupBy(DB::raw('date(created_at)'))
            ->first();

        return response([
            'data' => [
                'bets' => $bets,
                'betsInfo' => $betsInfo
            ],
            'message' => 'success'
        ]);
    }


    public function result(Request $req)
    {
        $date = $req->date ? $req->date : date("Y-m-d");

        if ($req->day == '1before') {
            $date = date('Y-m-d', strtotime('-1 day', strtotime($date)));
        }


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

            foreach ($value->events  as $event) {
                $event['time_status_name'] = $event->timeStatus();
            }
        }

        return response([
            'leagues' => $leagues,
            'message' => 'success'
        ]);
    }
}
