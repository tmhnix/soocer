<?php

namespace App\Http\Controllers\Web\v2;

use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use App\Models\League;
use App\Models\Event;
use App\Models\User;
use App\Models\Bet;
use App\Models\Odd;
use DB;
use Validator;
use App\Components\SessionStore;
use App\Helpers\RedisCache;


/**
 * IpAccessController info
 */
class HomeV2Controller extends WebController
{

    // =================== API ======================
    public function getInPlayLeagues(Request $req)
    {
        // $result = RedisCache::getInplay(2, $req->type, 1);
        // if ($result) {
        //     return response([
        //         'data' => $result,
        //         'message' => 'success'
        //     ]);
        // }
        $gameType = $req->game_type;

        $leagues = League::where('leagues.status', 'active')
            ->join('odds', function ($join) use ($req) {
                $join->on('odds.league_id', '=', 'leagues.league_id');
                $join->where('odds.odd_status', 1);
                if ($req->type === 'multiple') {
                    $join->where('odds.is_parlay', true);
                }
            })
            // ->where('leagues.type', '=', $req->game_type)
            ->where(function($query) use ($gameType) {
                if($gameType === 'saba') {
                    $query->where('leagues.type', $gameType);
                }
            })
            ->havingRaw('count(odds.id) > 0')
            ->select('leagues.id', 'leagues.type', 'leagues.name', 'leagues.league_id', 'leagues.order', 'leagues.order_upcoming')
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
            if(empty($league->type)) {
                $league->orderClient = 'socer';
            } else {
                $league->orderClient = $league->type;
            }
            $league->cs = $cs;
            if($req->game_type == 'saba' || $league->type == 'saba') {
                $league_name = explode('|', $league->name);
                $league->name = $league_name[0];
            }
            if($isOdds) {
                array_push($_leagues, $league);
            }
        }
        // RedisCache::setInplay(2, $req->type, 1, $_leagues);
        return response([
            'data' => $_leagues,
            'message' => 'success'
        ]);
    }

    public function getUpcomingPlayLeagues(Request $req)
    {
        // $result = RedisCache::getInplay(2, $req->type, 0);
        $result = null; 
        $gameType = $req->game_type;
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
            // ->where('leagues.type', '=', $req->game_type)
            ->where(function($query) use ($gameType) {
                if($gameType === 'saba') {
                    $query->where('leagues.type', $gameType);
                }
            })
            ->havingRaw('count(odds.id) > 0')
            ->select('leagues.id', 'leagues.type', 'leagues.name', 'leagues.league_id', 'leagues.order', 'leagues.order_upcoming')
            ->groupBy('leagues.league_id', 'leagues.id')
            ->orderBy('leagues.order_upcoming', 'asc')
            ->limit(60)
            ->get();

        $i = 0;
        $_leagues = [];
        foreach ($leagues as $xx=> $league) {
            $league->events = $league->populateEvents(0);
            $cs = false;
            $isOdds = false;
            
            $name = $league->name;
            $isDisplayLeagure = false;
            $arrDisplayLeagure = [];
            
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
                
                $isHadicapOrCorner = false;
                $arrEvents = [];
                foreach($value->odds as $odd) {
                    
                    $fthpd = $odd->ft_hdp;
                    
                    if(!empty($fthpd['home_od']) && !empty($fthpd['away_od'])) {
                        $odd->isDisplayOddItem = true;
                    } else {
                        $odd->isDisplayOddItem = false;
                    }
                    $arrEvents[] = $odd->isDisplayOddItem;
                }
                if(in_array(true, $arrEvents)) {
                    $isHadicapOrCorner = true;
                }
                $value->isHadicapOrCorner = $isHadicapOrCorner;
                $arrDisplayLeagure[] = $value->isHadicapOrCorner;
                if(in_array(true, $arrDisplayLeagure) && ! $this->checkString($name)) {
                    $isDisplayLeagure = true;
                }
                $leagues[$xx]->isDisplayLeagure = $isDisplayLeagure;
                
            }  
            if(empty($league->type)) {
                $league->orderClient = 'socer';
            } else {
                $league->orderClient = $league->type;
            }
            $league->cs = $cs;
            if($req->game_type == 'saba'  || $league->type == 'saba') {
                $league_name = explode('|',$league->name);
                $league->name = $league_name[0];
            }
            if($isOdds) {
                array_push($_leagues, $league);
            }
        }

        // RedisCache::setInplay(2, $req->type, 0, $_leagues);
        return response([
            'data' => $_leagues,
            'message' => 'success'
        ]);
    }
    
    protected function checkString($string)
    {
        $outofItem = ['- HOME TEAM/AWAY TEAM', '- BOOKINGS', '- WHICH TEAM WILL ADVANCE TO NEXT ROUND'];
        
        $return = false;
        foreach ($outofItem as $item) {
           if (strpos($string, $item) !== false) {
                $return = true;
                break;
            }
        }
        return $return;
    }
}
