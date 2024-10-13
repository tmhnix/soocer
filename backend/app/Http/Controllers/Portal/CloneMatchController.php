<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use App\Models\League;
use App\Models\Event;
use App\Models\Odd;
use App\Models\Bet;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Components\OddsConverter;
use Validator;
use DB;


/**
 * IpAccessController info
 */
class CloneMatchController extends PortalController {

    public function index(Request $req) {
        $leagues = League::where('leagues.status', 'active')
            ->join('odds', function ($join) use ($req) {
                $join->on('odds.league_id', '=', 'leagues.league_id');
                $join->where('odds.odd_status', '0');
            })
            ->havingRaw('count(odds.id) > 0')
            ->select('leagues.id', 'leagues.name', 'leagues.league_id', 'leagues.order', 'leagues.order_upcoming')
            ->groupBy('leagues.league_id', 'leagues.id')
            ->orderBy('leagues.order_upcoming', 'asc')
            ->limit(30)
            ->get();

        return view('portal.agent.match.index', compact('leagues'));
    }

    public function matchList(Request $req) {
        $events = Event::where('is_manual', true)->orderBy('start_date', 'desc')->limit(20)->get();

        return view('portal.agent.match.list', compact('events'));
    }
    public function delete ($id) {
        $event = Event::find($id);
        
        if($event) {
        
        }
    }
    public function update($id, Request $req) {
        $event = Event::find($id);

        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'ss' => 'required'
            ]);

            if ($validator->fails()) {
                $req->session()->flash('errorMsg', $validator->errors()->first());
                return redirect(route('portal.agent.match.update'));
            }

            if ($req->ss !== $event->ss) {
                $event->has_new_score = true;
                $event->new_score_at = date('Y-m-d H:i:s', strtotime('now'));

                $event->fill([
                    'ss' => $req->ss
                ]);
            }

            DB::beginTransaction();
            try{
                
                $event->time_status = $req->status;
                
                
                if($req->status == 3){
                    $league = League::where('league_id', $event->league_id)->first();
                    $league->status = 'inactive';
                    $league->save();
                }
                $event->save();
                foreach ($req->odds as $odd) {
                    $newOne = Odd::find($odd['id']);

                    $odd['ft_hdp']['handicap_value'] = format_number_if_not_empty($odd['ft_hdp']['handicap_value']);
                    $odd['ft_hdp']['handicap_team'] = $odd['ft_hdp']['handicap_value'] <= 0 ? 'home': 'away';
                    $odd['ft_hdp']['handicap_value'] = abs($odd['ft_hdp']['handicap_value']);
                    $odd['ft_hdp']['home_od'] = format_number_if_not_empty($odd['ft_hdp']['home_od']);
                    $odd['ft_hdp']['away_od'] = format_number_if_not_empty($odd['ft_hdp']['away_od']);
                    $odd['ft_hdp']['handicap'] = OddsConverter::convertHandicapValue($odd['ft_hdp']['handicap_value']) ?? 0;

                    $odd['ft_ou']['handicap_value'] = abs(format_number_if_not_empty($odd['ft_ou']['handicap_value']));
                    $odd['ft_ou']['over_od'] = format_number_if_not_empty($odd['ft_ou']['over_od']);
                    $odd['ft_ou']['under_od'] = format_number_if_not_empty($odd['ft_ou']['under_od']);
                    $odd['ft_ou']['handicap'] = OddsConverter::convertHandicapValue($odd['ft_ou']['handicap_value']);

                    $odd['ft_1x2']['home_od'] = format_number_if_not_empty($odd['ft_1x2']['home_od']);
                    $odd['ft_1x2']['draw_od'] = format_number_if_not_empty($odd['ft_1x2']['draw_od']);
                    $odd['ft_1x2']['away_od'] = format_number_if_not_empty($odd['ft_1x2']['away_od']);

                    // HF
                    $odd['hf_hdp']['handicap_value'] = format_number_if_not_empty($odd['hf_hdp']['handicap_value']);
                    $odd['hf_hdp']['handicap_team'] = $odd['hf_hdp']['handicap_value'] <= 0 ? 'home': 'away';
                    $odd['hf_hdp']['handicap_value'] = abs($odd['hf_hdp']['handicap_value']);
                    $odd['hf_hdp']['home_od'] = format_number_if_not_empty($odd['hf_hdp']['home_od']);
                    $odd['hf_hdp']['away_od'] = format_number_if_not_empty($odd['hf_hdp']['away_od']);
                    $odd['hf_hdp']['handicap'] = OddsConverter::convertHandicapValue($odd['hf_hdp']['handicap_value']) ?? 0;

                    $odd['hf_ou']['handicap_value'] = abs(format_number_if_not_empty($odd['hf_ou']['handicap_value']));
                    $odd['hf_ou']['over_od'] = format_number_if_not_empty($odd['hf_ou']['over_od']);
                    $odd['hf_ou']['under_od'] = format_number_if_not_empty($odd['hf_ou']['under_od']);
                    $odd['hf_ou']['handicap'] = OddsConverter::convertHandicapValue($odd['hf_ou']['handicap_value']) ?? 0;

                    $odd['hf_1x2']['home_od'] = format_number_if_not_empty($odd['hf_1x2']['home_od']);
                    $odd['hf_1x2']['draw_od'] = format_number_if_not_empty($odd['hf_1x2']['draw_od']);
                    $odd['hf_1x2']['away_od'] = format_number_if_not_empty($odd['hf_1x2']['away_od']);
                    $newOne->fill($odd);


                    $newOne->save();
                }
                DB::commit();
            } catch (QueryException $e) {
                dump($e);
                DB::rollBack();
                return response(['code' => 'SERVER_ERROR'], 500);
            } catch (Exception $ex) {
                dump($ex);
                DB::rollBack();
                return response(['code' => 'SERVER_ERROR'], 500);
            }
        }
        return view('portal.agent.match.update', compact('event', 'id'));
    }

    public function create(Request $req) {
        $validator = Validator::make($req->all(), [
            'league_name' => 'required',
            'home' => 'required',
            'away' => 'required',
            'time' => 'required:time'
        ]);

        $sgTime = strtotime($req->time) + 60*60;

        if ($validator->fails()) {
            $req->session()->flash('errorMsg', $validator->errors()->first());
            return redirect(route('portal.agent.match.clone'));
        }

        $league = League::where('name', $req->league_name)->first();
        $uuid = uniqid();
        $time = date("h:iA", $sgTime);
        $start_date = date("Y-m-d H:i:s", strtotime($req->time) - 11 * 60*60);
        $event = new Event([
            'event_id' => $uuid,
            'parent_id' => $uuid,
            'league_id' => $league->league_id,
            'league_name' => $league->name,
            'home' => $req->home,
            'away' => $req->away,
            'type' => Event::TYPE_MAIN,
            'ss' => '0-0',
            'start_time' => 0,
            'time' => '<font color="red">LIVE</font> '.$time,
            'extra' => [
                'ss' => []
            ],
            'reds' => [
                'home' => 0,
                'away' => 0,
            ],
            'start_date' => $start_date,
            'is_manual' => true
        ]);

        DB::beginTransaction();
        try{
            $event->save();
            foreach ($req->odds as $odd) {
                if (empty($odd['checked'])) {
                    continue;
                }
                $odd_id = uniqid();
                $newOne = new Odd([
                    'odd_id' => $odd_id,
                    'event_id' => $uuid,
                    'league_id' => $league->league_id,
                    'type' => Event::TYPE_MAIN,
                    'is_manual' => true
                ]);

                $odd['ft_hdp']['handicap_value'] = format_number_if_not_empty($odd['ft_hdp']['handicap_value']);
                $odd['ft_hdp']['handicap_team'] = $odd['ft_hdp']['handicap_value'] <= 0 ? 'home': 'away';
                $odd['ft_hdp']['handicap_value'] = abs($odd['ft_hdp']['handicap_value']);
                $odd['ft_hdp']['home_od'] = format_number_if_not_empty($odd['ft_hdp']['home_od']);
                $odd['ft_hdp']['away_od'] = format_number_if_not_empty($odd['ft_hdp']['away_od']);
                $odd['ft_hdp']['handicap'] = OddsConverter::convertHandicapValue($odd['ft_hdp']['handicap_value']) ?? 0;

                $odd['ft_ou']['handicap_value'] = abs(format_number_if_not_empty($odd['ft_ou']['handicap_value']));
                $odd['ft_ou']['over_od'] = format_number_if_not_empty($odd['ft_ou']['over_od']);
                $odd['ft_ou']['under_od'] = format_number_if_not_empty($odd['ft_ou']['under_od']);
                $odd['ft_ou']['handicap'] = OddsConverter::convertHandicapValue($odd['ft_ou']['handicap_value']) ?? 0;

                $odd['ft_1x2']['home_od'] = format_number_if_not_empty($odd['ft_1x2']['home_od']);
                $odd['ft_1x2']['draw_od'] = format_number_if_not_empty($odd['ft_1x2']['draw_od']);
                $odd['ft_1x2']['away_od'] = format_number_if_not_empty($odd['ft_1x2']['away_od']);

                // HF
                $odd['hf_hdp']['handicap_value'] = format_number_if_not_empty($odd['hf_hdp']['handicap_value']);
                $odd['hf_hdp']['handicap_team'] = $odd['hf_hdp']['handicap_value'] <= 0 ? 'home': 'away';
                $odd['hf_hdp']['handicap_value'] = abs($odd['hf_hdp']['handicap_value']);
                $odd['hf_hdp']['home_od'] = format_number_if_not_empty($odd['hf_hdp']['home_od']);
                $odd['hf_hdp']['away_od'] = format_number_if_not_empty($odd['hf_hdp']['away_od']);
                $odd['hf_hdp']['handicap'] = OddsConverter::convertHandicapValue($odd['hf_hdp']['handicap_value']) ?? 0;

                $odd['hf_ou']['handicap_value'] = abs(format_number_if_not_empty($odd['hf_ou']['handicap_value']));
                $odd['hf_ou']['over_od'] = format_number_if_not_empty($odd['hf_ou']['over_od']);
                $odd['hf_ou']['under_od'] = format_number_if_not_empty($odd['hf_ou']['under_od']);
                $odd['hf_ou']['handicap'] = OddsConverter::convertHandicapValue($odd['hf_ou']['handicap_value']) ?? 0;

                $odd['hf_1x2']['home_od'] = format_number_if_not_empty($odd['hf_1x2']['home_od']);
                $odd['hf_1x2']['draw_od'] = format_number_if_not_empty($odd['hf_1x2']['draw_od']);
                $odd['hf_1x2']['away_od'] = format_number_if_not_empty($odd['hf_1x2']['away_od']);
                $newOne->fill($odd);


                $newOne->save();
            }
            DB::commit();
            return redirect(route('portal.agent.match.update', ['id' => $event->id]));
        } catch (QueryException $e) {
            dump($e);
            DB::rollBack();
            return response(['code' => 'SERVER_ERROR'], 500);
        } catch (Exception $ex) {
            dump($ex);
            DB::rollBack();
            return response(['code' => 'SERVER_ERROR'], 500);
        }
    }
}
