<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Components\BetsAPI;
use App\Components\OddsConverter;
use App\Models\League;
use App\Models\User;
use App\Models\Bet;

class CrawlLeage extends Command
{
    protected $values = '[{ "id": "1837", "name": "*UEFA CHAMPIONS LEAGUE" }, { "id": "46030", "name": "*UEFA CHAMPIONS LEAGUE - CORNERS" }, { "id": "50416", "name": "*UEFA CHAMPIONS LEAGUE - HOME TEAM/AWAY TEAM" }, { "id": "27055", "name": "*UEFA CHAMPIONS LEAGUE - Injury time awarded at end of 2nd half" }, { "id": "50430", "name": "*UEFA CHAMPIONS LEAGUE - TOTAL GOALS MINUTES" }, { "id": "50191", "name": "*UEFA CHAMPIONS LEAGUE - WHICH TEAM TO KICK OFF" }, { "id": "15448", "name": "*UEFA CHAMPIONS LEAGUE - WHICH TEAM WILL ADVANCE TO NEXT ROUND" }, { "id": "230", "name": "AFC CHAMPIONS LEAGUE" }, { "id": "46016", "name": "AFC CHAMPIONS LEAGUE - CORNERS" }, { "id": "418", "name": "AFC CUP" }, { "id": "46019", "name": "AFC CUP - CORNERS" }, { "id": "10532", "name": "AFC CUP - SPECIFIC 15 MINS" }, { "id": "700", "name": "ARGENTINA NACIONAL B DIVISION" }, { "id": "10716", "name": "ARGENTINA PRIMERA B METROPOLITANA" }, { "id": "72030", "name": "BEACH SOCCER COPA AMERICA (IN PERU)" }, { "id": "214", "name": "BRAZIL CAMPEONATO CARIOCA" }, { "id": "54153", "name": "BRAZIL CAMPEONATO GAUCHO 2ND DIVISION" }, { "id": "213", "name": "BRAZIL CAMPEONATO PAULISTA" }, { "id": "11319", "name": "BRAZIL CAMPEONATO PAULISTA SERIE A2" }, { "id": "44922", "name": "BRAZIL CAMPEONATO PAULISTA SERIE A3" }, { "id": "57749", "name": "BULGARIA FIRST PROFESSIONAL LEAGUE" }, { "id": "13836", "name": "BULGARIA U19 LEAGUE" }, { "id": "16168", "name": "CAF CHAMPIONS LEAGUE QUALIFIERS" }, { "id": "23064", "name": "CAF CONFEDERATION CUP QUALIFIERS" }, { "id": "27", "name": "CLUB FRIENDLY" }, { "id": "11466", "name": "COLOMBIA PRIMERA A" }, { "id": "4114", "name": "CONCACAF CHAMPIONS LEAGUE" }, { "id": "330", "name": "COPA SUDAMERICANA" }, { "id": "50645", "name": "CROATIA 3RD DIVISION" }, { "id": "35191", "name": "DENMARK RESERVE LEAGUE (PLAY OFF)" }, { "id": "59242", "name": "EGYPT PREMIER LEAGUE" }, { "id": "59841", "name": "EGYPT PREMIER LEAGUE - CORNERS" }, { "id": "59847", "name": "EGYPT PREMIER LEAGUE - SPECIFIC 15 MINS" }, { "id": "7750", "name": "ENGLISH CENTRAL RESERVE LEAGUE" }, { "id": "267", "name": "ENGLISH FA TROPHY" }, { "id": "58766", "name": "ENGLISH FOOTBALL LEAGUE TROPHY" }, { "id": "72125", "name": "ENGLISH FOOTBALL LEAGUE TROPHY - WHICH TEAM WILL ADVANCE TO NEXT ROUND" }, { "id": "6821", "name": "ENGLISH ISTHMIAN LEAGUE PREMIER DIVISION" }, { "id": "79", "name": "ENGLISH LEAGUE CHAMPIONSHIP" }, { "id": "81", "name": "ENGLISH LEAGUE ONE" }, { "id": "138", "name": "ENGLISH LEAGUE TWO" }, { "id": "49840", "name": "ENGLISH NATIONAL LEAGUE" }, { "id": "49827", "name": "ENGLISH NATIONAL LEAGUE NORTH" }, { "id": "49828", "name": "ENGLISH NATIONAL LEAGUE SOUTH" }, { "id": "25853", "name": "ENGLISH NORTHERN PREMIER DIVISION" }, { "id": "26046", "name": "ENGLISH SOUTHERN PREMIER DIVISION" }, { "id": "16371", "name": "FANTASY MATCH" }, { "id": "62724", "name": "FINLAND CHAMPIONSHIP U20 QUALIFIERS" }, { "id": "298", "name": "FINLAND CUP" }, { "id": "4412", "name": "GERMANY 3RD LIGA" }, { "id": "665", "name": "GERMANY OBERLIGA" }, { "id": "24778", "name": "GERMANY REGIONAL LEAGUE BAVARIA" }, { "id": "25385", "name": "GERMANY REGIONAL LEAGUE SOUTHWEST" }, { "id": "4953", "name": "GERMANY REGIONAL LEAGUE WEST" }, { "id": "240", "name": "HUNGARY CUP" }, { "id": "10", "name": "INTERNATIONAL FRIENDLY" }, { "id": "364", "name": "INTERNATIONAL FRIENDLY U19" }, { "id": "275", "name": "INTERNATIONAL FRIENDLY WOMEN" }, { "id": "973", "name": "INTERNATIONAL FRIENDLY WOMEN U19" }, { "id": "62385", "name": "ISRAEL LIGA BET" }, { "id": "30", "name": "ITALY SERIE B" }, { "id": "66396", "name": "ITALY SERIE C" }, { "id": "66597", "name": "ITALY SERIE C CUP" }, { "id": "8895", "name": "JORDAN 1ST DIVISION" }, { "id": "34441", "name": "LA MANGA INTERNATIONAL TOURNAMENT WOMEN (IN SPAIN)" }, { "id": "32903", "name": "MEXICO CUP" }, { "id": "227", "name": "ROMANIA CUP" }, { "id": "365", "name": "SAUDI PRO LEAGUE" }, { "id": "42436", "name": "SCOTLAND DEVELOPMENT LEAGUE" }, { "id": "30729", "name": "SCOTLAND LEAGUE 1" }, { "id": "24572", "name": "SLOVENIA PRVA LIGA" }, { "id": "420", "name": "TURKEY FIRST LEAGUE" }, { "id": "58886", "name": "URUGUAY RESERVE LEAGUE" }, { "id": "6166", "name": "VENEZUELA PRIMERA DIVISION" }, { "id": "598", "name": "WALES CUP" } ]';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl:league';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run crawl League';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // $admin = User::find(1);
        // $supers = User::where('user_type', 'super')->get();
        // foreach ($supers as $key => $value) {
        //     $value->addAttachedParents($admin);
        //     $value->save();
        //     $masters = User::where(['user_type' => 'master', 'parent_id' => $value->id])->get();
        //     foreach ($masters as $key => $master) {
        //         $master->addAttachedParents($value);
        //         $master->save();
        //         $agents = User::where(['user_type' => 'agent', 'parent_id' => $master->id])->get();
        //         foreach ($agents as $key => $agent) {
        //             $agent->addAttachedParents($master);
        //             $agent->save();
        //             $members = User::where(['user_type' => 'member', 'parent_id' => $agent->id])->get();
        //             foreach ($members as $key => $member) {
        //                 $member->addAttachedParents($agent);
        //                 $member->save();
        //             }
        //         }
        //     }
        // }
        // 
        $users = User::where('user_type', 'member')->get();
        foreach ($users as $value) {
            $end_date = date("m/d/Y");
            $start_date = date("m/d/Y");
            $array = Bet::where('user_id', $value->id)
            ->where('status', Bet::STATUS_DONE)
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->select('bet_profit', 'bet_commission')
            ->get();
            $sum = [
                'profit' => 0,
                'commission' => 0,
                'total' => 0
            ];
            foreach ($array as $item) {
                $sum['profit'] += $item->bet_profit;
                $sum['commission'] += $item->bet_commission;
            }
            $sum['total'] = $sum['profit'] + $sum['commission'];
            $array = Bet::where('user_id', $value->id)
            ->where('status', Bet::STATUS_RUNING)
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->select('bet_amount')
            ->get();

            foreach ($array as $item) {
                $sum['total'] -= $item->bet_amount;
            }

            $value->wallet = $value->credit_line + $sum['total'];
            if ($value->wallet < 0) {
                $value->wallet = 0;
            }
            $value->save();
            dump($value->id);
        }
    }

    public function saveLeages($list) {
        foreach ($list as $key => $item) {
            League::create([
                'league_id' => $item['id'],
                'name' => $item['name'],
                'order' => $key
            ]);
        }
    }
}
