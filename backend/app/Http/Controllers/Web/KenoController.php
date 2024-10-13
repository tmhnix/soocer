<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\WebController;
use Illuminate\Http\Request;
use App\Models\League;
use App\Models\Event;
use App\Models\User;
use App\Models\Bet;
use App\Models\Odd;
use App\Models\NumberGame;
use DB;
use Validator;
use App\Components\SessionStore;
use App\Helpers\RedisCache;


/**
 * IpAccessController info
 */
class KenoController extends WebController {

    /**
     * services listing
     *
     * @param Request $req
     */
    public function index(Request $req) {
        return view('keno.index');
    }
}
