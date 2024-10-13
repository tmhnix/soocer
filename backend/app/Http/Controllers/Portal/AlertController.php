<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException;
use App\Models\Alert;
use App\Models\User;
use Validator;
use Auth;
use DB;


/**
 * IpAccessController info
 */
class AlertController extends PortalController {

    public function index() {
        $list = Alert::get();
        return view('portal.alerts.list', compact('list'));
    }

    public function delete($id) {
        Alert::find($id)->delete();
        return redirect(route('portal.agent.alerts'));
    }

    public function add(Request $req) {
        if ($req->isMethod('post')) {
            $msg = [
                "username.unique" => "Bạn đã tạo cho người dùng này rồi",
                "username.exists" => "Người dùng không tồn tại"
            ];
            $validator = Validator::make($req->all(), [
                'msg' => 'required',
                'username' => 'required|unique:alerts|exists:users,username'
            ], $msg);

            if ($validator->fails()) {
                $req->session()->flash('errorMsg', $validator->errors()->first());
            } else {
                $alert = new Alert([
                    "msg" => $req->msg,
                    "username" => $req->username
                ]);
                $alert->save();
                $req->session()->flash('successMsg', 'Tạo thành công!');     
                return redirect(route('portal.agent.alerts'));
            }
        }
        return view('portal.alerts.add');
    }
}
