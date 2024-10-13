<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Components\BetsAPI;
use App\Http\Controllers\ApiController;

class InplayController extends ApiController
{
    public function getListPlay() {
    	$list = BetsAPI::getListPlay();
    	$results = [];
  //   	dump($list->results[0]);
  //   	foreach($list['results'] as $key=>$value){
		//   echo $value['id'];
		// }
    	for ($i=0; $i < 3; $i++) { 
    		$item = $list['results'][$i];
    		$results[] = [
    			'id' => $item['id'],
    			'sport_id' => $item['sport_id'],
    			'time_status' => $item['time_status'],
    			'home' => $item['home'],
    			'away' => $item['away'],
    			'league' => $item['league'],
    			'ss' => $item['ss'],
    			'timer' => $item['timer'],
    			'scores' => $item['scores'],
    			'inplay_updated_at' => $item['inplay_updated_at'],
    			'odds' => BetsAPI::getOdds($item['id'], $item['inplay_updated_at'] - 500)['results']
    		];
    	}
        return response([
        	'data' => $results,
        	'message' => 'success'
        ]);
    }

    public function checkOdd(Request $req) {
    	$item = BetsAPI::getOdds($req->id, $req->inplay_updated_at - 500)['results']['1_1'];
    	if (sizeof($item)) {
    		$value = $item[0][$req->key];
    		return response([
        		'data' => [
        			'can' => $value == $req->value,
        			'value' => $value,
        		],
        		'message' => 'success'
        	]);
    	}

    }
}
