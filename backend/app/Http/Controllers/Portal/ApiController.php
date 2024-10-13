<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bet;
use App\Models\Log;


/**
 * IpAccessController info
 */
class ApiController extends PortalController {

    /**
     * services listing
     *
     * @param Request $req
     */
    public function updateUserStatus($id, Request $req) {
    	$owner = $req->user();
        if ($owner->isAdmin()) {
            $user = User::find($id);
        } else {
            $user = User::where(['id' => $id, 'parent_id' => $owner->id])->first();    
        }

        if (!$user) {
            return response([
                'message' => 'Bạn không có quyền cập nhật người dùng này'
            ], 403);
        }
    	try{
            $user->status = $req->status;
    		$user->save();
            return response([
            	'message' => 'success'
        	]);
        } catch (Exception $ex) {
            return response(['code' => 'SERVER_ERROR'], 500);
        }
    }

    public function deleteBet($id, Request $req) {
        $owner = $req->user();
        try{
            Bet::where('group_id', $id)->delete();
            $bet = Bet::find($id);
            $user = User::find($bet->user_id);
            if (date('m/d/Y') == date('m/d/Y', strtotime($bet->created_at))) {
                $change = $bet->total_profit;
                if ($bet->status == BET::STATUS_PENDING || $bet->status == BET::STATUS_RUNING) {
                    $change = -1 * $bet->bet_pre_pay;
                }
                $user->decrement('wallet', $change);
            }

            if (!$user->isAdmin()) {
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
                    'user_id' => $owner->id,
                    'related_id' => $id,
                    'type' => Log::TYPE_DELETE_BET,
                    'user_name' => $owner->username,
                    'extra' => $result
                ]);
            }

            $bet->delete();
            return response([
                'message' => 'success'
            ]);
        } catch (Exception $ex) {
            return response(['code' => 'SERVER_ERROR'], 500);
        }
    }

    public function deleteUser($id, Request $req) {
        try{
            $user = User::find($id);
            $parent = User::find($user->parent_id);
            if ($parent) {
                $parent->increment('wallet', $user->credit_line);
                $user->delete();
            }
            return response([
                'message' => 'success'
            ]);
        } catch (Exception $ex) {
            return response(['code' => 'SERVER_ERROR'], 500);
        }
    }

    public function checkOnline(Request $req) {
        $ids = explode(',', $req->ids);

        $payload = User::whereIn('id', $ids)->select("id", "online")->get();

        return response(['data' => $payload]);
    }
}