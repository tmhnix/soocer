<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\PortalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\QueryException;
use App\Models\User;
use App\Models\Bet;
use App\Models\Event;
use App\Models\Log;
use Validator;
use Auth;
use App\Components\Logs;
use DB;
use Session;

/**
 * IpAccessController info
 */
class HomeController extends PortalController
{

    /**
     * services listing
     *
     * @param Request $req
     */
    public function index(Request $req)
    {
        if (!$req->user()->secure_code) {
            return view('portal.secure.index');
        }
        return view('portal.agent.home.index');
    }

    public function updateSecureCode(Request $req)
    {
        if ($req->user()->secure_code) {
            return redirect(route('portal.agent.home'));
        }
        $errorMsg = '';
        $owner = $req->user();
        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'code' => 'required|string|min:6|max:6',
                'recode' => 'required|same:code'
            ]);

            if ($validator->fails()) {
                $errorMsg = $validator->errors()->first();
            } else {
                $errorMsg = 'Đổi mật khẩu thành công!';
                $owner->secure_code = $req->code;
                $owner->save();
                return redirect(route('portal.agent.home'));
            }
        }
        return view('portal.secure.index');
    }

    public function loginCode(Request $req)
    {
        $errorMsg = '';
        if ($req->isMethod('post')) {
            if ($req->user()->loginCode($req->code)) {
                return redirect(session()->pull('back_url', 'default'));
            } else {
                $errorMsg = 'Mã sai';
            }
        }

        return view('portal.secure.login', compact("errorMsg"));
    }

    public function home(Request $req)
    {
        $today = date("m/d/Y");
        $yesterday = date('m/d/Y', strtotime("-1 day"));

        $user = $req->user()->getOwnerParent();
        $current_type = $user->getNextType();
        $ids = $user->getNextChildIds();

        if ($current_type == User::TYPE_MEMBER) {
            $key = 'user_id';
        } else {
            $key = $current_type . '_id';
        }

        $query = Bet::whereIn($key, $ids)
            ->where('status', Bet::STATUS_DONE)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->selectRaw('sum(bet_profit) as profit, sum(bet_commission) as commission');

        $betYes = clone $query;
        $betToday = $query->whereDate('created_at', '>=', $today);
        $betToday = $betToday->whereDate('created_at', '<=', $today);
        $today_profit = $betToday->sum('bet_profit');
        $today_commission = $betToday->sum('bet_commission');

        $betYes = $betYes->whereDate('created_at', '>=', $yesterday);
        $betYes = $betYes->whereDate('created_at', '<=', $yesterday);
        $yesterday_profit = $betYes->sum('bet_profit');
        $yesterday_commission = $betYes->sum('bet_commission');

        $sum = [
            'yesterday' => $yesterday,
            'today' => $today,
            'total_today' => $today_profit + $today_commission,
            'total_yesterday' => $yesterday_profit + $yesterday_commission
        ];
        return view('portal.iframe.home', $sum);
    }

    public function trigger(Request $req)
    {
        return view('errors.444');
    }

    public function chuyenkhoan(Request $req)
    {
        return view('portal.iframe.chuyenkhoan');
    }

    public function subaccount(Request $req)
    {
        $authUser = $req->user();
        $errorMsg = '';
        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'username' => 'required|unique:users',
                'password' => 'required',
                'first_name' => 'required',
                'last_name' => 'required'
            ]);

            if ($validator->fails()) {
                $errorMsg = $validator->errors()->first();
            } else {
                $errorMsg = 'Tạo tài khoản phụ thành công!';
                $user = new User([
                    'username' => $req->username,
                    'first_name' => $req->first_name,
                    'last_name' => $req->last_name,
                ]);
                $user->credit_line = 0;
                $user->username = $req->username;
                $user->parent_id = $authUser->id;
                $user->addAttachedParents($authUser);
                $user->user_type = User::TYPE_SUB;
                $user->setPassword($req->password);
                $user->save();
                return redirect(route('portal.agent.listSubs'));
            }
        }
        return view('portal.iframe.subaccount', compact('errorMsg'));
    }

    public function chitietttmb(Request $req)
    {
        $user = User::find($req->id);
        // $req->end_date = $req->ToDate ? $req->ToDate : date("m/d/Y");
        // $req->start_date = $req->FromDate ? $req->FromDate : date("m/d/Y");
        $req->end_date = $req->end_date ? $req->end_date : date("m/d/Y");
        $req->start_date = $req->start_date ? $req->start_date : date("m/d/Y");
        $end_date = $req->end_date ? date('Y-m-d', strtotime($req->end_date)) : null;
        $start_date = $req->start_date ? date('Y-m-d', strtotime($req->start_date)) : null;
        $ids = $user->childIds();
        $ids[] = $req->id;
        $array = Bet::whereIn('user_id', $ids)
            ->where('status', Bet::STATUS_DONE)
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->get();
        $bets = [];
        $sum = [
            'profit' => 0,
            'commission' => 0,
            'total' => 0
        ];

        foreach ($array as $value) {
            $bets[] = $value->getJson();
            $sum['profit'] += $value->bet_profit;
            // dump($value->bet_profit, $value->id);
            $sum['commission'] += $value->bet_commission;
        }
        $sum['total'] = $sum['profit'] + $sum['commission'];

        return view('portal.iframe.chitietttmb', compact('bets', 'req', 'sum', 'user'));
    }

    public function secure(Request $req)
    {
        $errorMsg = '';
        $owner = $req->user();
        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'op' => 'required',
                'np' => 'required',
                'ncp' => 'required|same:np'
            ]);

            if ($validator->fails()) {
                $errorMsg = $validator->errors()->first();
            } else if (!$owner->validPwd($req->op)) {
                $errorMsg = 'Sai mật khẩu cũ!!';
            } else {
                $errorMsg = 'Đổi mật khẩu thành công!';
                $owner->setPassword($req->np);
                $owner->save();
            }
        }
        return view('portal.iframe.secure', compact('errorMsg'));
    }

    public function secureCode(Request $req)
    {
        $errorMsg = '';
        $owner = $req->user();
        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'op' => 'required',
                'np' => 'required',
                'ncp' => 'required|same:np'
            ]);

            if ($validator->fails()) {
                $errorMsg = $validator->errors()->first();
            } else if ($owner->secure_code !== $req->op) {
                $errorMsg = 'Sai mã bảo vệ cũ!!';
            } else {
                $errorMsg = 'Đổi mã bảo vệ thành công!';
                $owner->secure_code = $req->np;
                $owner->save();
                User::logoutCode();
            }
        }
        return view('portal.iframe.secure_code', compact('errorMsg'));
    }

    public function member_runingbets(Request $req)
    {
        $user = User::find($req->id);
        $req->end_date = $req->end_date ? $req->end_date : date("m/d/Y");
        $req->start_date = $req->start_date ? $req->start_date : date("m/d/Y", strtotime("-1 month"));
        $end_date = $req->end_date ? date('Y-m-d', strtotime($req->end_date)) : null;
        $start_date = $req->start_date ? date('Y-m-d', strtotime($req->start_date)) : null;

        $array = Bet::where('user_id', $req->id)
            ->where('status', Bet::STATUS_RUNING)
            ->whereDate('created_at', '>=', $start_date)
            ->whereDate('created_at', '<=', $end_date)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->get();

        $bets = [];
        $total = 0;
        foreach ($array as $value) {
            $bets[] = $value->getJson();
            $total += $value->bet_amount;
        }
        return view('portal.iframe.member_runingbets', compact('bets', 'req', 'user', 'total'));
    }

    public function createMember(Request $req)
    {
        $authUser = $req->user();
        if ($req->isMethod('post')) {
            $validator = Validator::make($req->all(), [
                'password' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'wallet' => 'numeric|min:0|max:' . $authUser->wallet,
                'username' => 'required|unique:users'
            ]);

            if ($validator->fails()) {
                $req->session()->flash('errorMsg', $validator->errors()->first());
                return redirect(route('portal.agent.createMember'));
            }

            $user = new User($req->all());
            $user->credit_line = $user->wallet;
            $user->username = $req->username;
            $user->parent_id = $authUser->id;
            $user->addAttachedParents($authUser);
            $user->user_type = $authUser->getNextType();
            $user->setPassword($req->password);
            DB::beginTransaction();
            try {
                $authUser->decrement('wallet', $user->wallet);
                $user->save();
                DB::commit();
                return redirect(route('portal.agent.listMember'))->with('successMsg', 'Tạo mới thành công');
            } catch (QueryException $e) {
                DB::rollBack();
                Logs::error($e);
                $req->session()->flash('errorMsg', 'Lỗi Database, liên hệ với kĩ thuật để sửa lỗi.');
            } catch (Exception $ex) {
                DB::rollBack();
                Logs::error($ex);
                $req->session()->flash('errorMsg', 'Tạo bị lỗi');
            }
        }
        return view('portal.iframe.create_member', ['wallet' => $authUser->wallet]);
    }

    public function listMember(Request $req)
    {
        $owner = $req->user()->getOwnerParent();
        $user = $req->CustId ? User::find($req->CustId) : $owner;
        if (!$user->isOwner($owner->id)) {
            return view('errors.403');
        }
        $parent_id = $user->CustId;
        $current_type = $user->getNextType();

        $list = User::orderBy('id', 'DESC')->where([
            'user_type' => $current_type,
            'parent_id' => $parent_id
        ])->paginate(10)->appends(Input::except('page'));

        return view('portal.iframe.list_member', [
            'list' => $list,
            'current_type' => $current_type
        ]);
    }

    public function GetCustomerListData(Request $req)
    {
        $downLineList = [
            "DownlinesList" => [],
            "TotalDownlines" => 0,
            "TotalPages" => 0
        ]; 
        // return $req->input();
        $owner = $req->user()->getOwnerParent();
        $user = $req->CustId ? User::find($req->CustId) : $owner;
        if (!$user->isOwner($owner->id)) {
            return $downLineList;
        }
        $parent_id = $user->id;
        $current_type = $user->getNextType();
        $where = [
            'user_type' => $current_type,
            'parent_id' => $parent_id,
        ];
        if ($req->input("Username")) {
            $where['username'] = $req->input("Username");
        }
        if ($req->input("Status")) {
            $where['status'] = $req->input("Status");
        }

        $list = User::orderBy('id', 'DESC')->where($where)->paginate($req->input("PageSize"), ['*'], 'page', $req->input("PageIndex"))->appends(Input::except('page'));

        $data = json_decode($list->toJson(), true);
        $i = $req->input("PageIndex") * $req->input("PageSize") - $req->input("PageSize") + 1;
        foreach ($data["data"] as &$value) {
            $value["RowNumber"] = $i;
            $value["current_type"] = $current_type;
            $i++;
        }
        return [
            "DownlinesList" => $data["data"],
            "TotalDownlines" => $data["total"],
            "TotalPages" => $data["last_page"]
        ];
    }

    public function GetCustomerAllStatus(Request $req)
    {
        // var_dump($req->query());die();
        $data = [
            "Status" => [
                [
                    "Disabled" => false, "Checked" => false, "ReloadCustomerInfo" => true, "ReloadCustomerList" => true, "ShowInCustomerList" => true, "Tooltip" => "", "IsPopup" => false, "PopupHeaderText" => "", "Url" => "/portal/api/users/" . $req->query("SearchAccountId") . "/status", "ConfirmMessage" => "Bạn có chắc muốn thay đổi trạng thái \"Khóa\" cho thành viên này không?", "JsonParams" => "{\"SearchAccountId\":\"" . $req->query("SearchAccountId") . "\",\"SearchAccountName\":\"" . $req->query("SearchAccountName") . "\",\"SearchAccountRoleId\":\"1\",\"status\":\"block\",\"StatusValue\":\"False\"}", "Text" => "Bị đóng", "DisplayOrder" => 1, "Visible" => true
                ],
                [
                    "Disabled" => false, "Checked" => false, "ReloadCustomerInfo" => true, "ReloadCustomerList" => true, "ShowInCustomerList" => true, "Tooltip" => "", "IsPopup" => false, "PopupHeaderText" => "", "Url" => "/portal/api/users/" . $req->query("SearchAccountId") . "/status", "ConfirmMessage" => "Bạn có chắc muốn thay đổi trạng thái \"Đóng\" của thành viên này không?", "JsonParams" => "{\"SearchAccountId\":\"" . $req->query("SearchAccountId") . "\",\"SearchAccountName\":\"" . $req->query("SearchAccountName") . "\",\"SearchAccountRoleId\":\"1\",\"status\":\"suspended\",\"StatusValue\":\"True\"}", "Text" => "Bị đình chỉ", "DisplayOrder" => 2, "Visible" => true
                ],
                [
                    "Disabled" => false, "Checked" => false, "ReloadCustomerInfo" => true, "ReloadCustomerList" => true, "ShowInCustomerList" => true, "Url" => "/portal/api/users/" . $req->query("SearchAccountId") . "/status", "ConfirmMessage" => "Bạn có chắc muốn thay đổi trạng thái \"Mở\" của thành viên này không?", "JsonParams" => "{\"SearchAccountId\":\"" . $req->query("SearchAccountId") . "\",\"SearchAccountName\":\"" . $req->query("SearchAccountName") . "\",\"SearchAccountRoleId\":\"1\",\"status\":\"active\",\"StatusValue\":\"True\"}", "IsPopup" => false, "PopupHeaderText" => "", "Text" => "Cho phép Outright", "DisplayOrder" => 3, "Visible" => true
                ]
            ],
            "Settings" => [
                // [
                //     "QueryStringParamaters" => ["custId" => "", "username" => "", "isSyncCasino" => "1"], "Text" => "Racing", "DisplayOrder" => 1, "Url" => "javascript:void(0)", "Icon" => "icon-edit", "Visible" => false, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => false, "ShowGuideLine" => false,"targetid"=>"racing"
                // ],[
                //     "QueryStringParamaters" => ["custId" => "", "username" => "", "isSyncCasino" => "1"], "Text" => "Casino", "DisplayOrder" => 1, "Url" => "#", "Icon" => "icon-edit", "Visible" => false, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => false, "ShowGuideLine" => false,"targetid"=>"casino"
                // ],[
                //     "QueryStringParamaters" => ["custId" => "", "username" => "", "isSyncCasino" => "1"], "Text" => "Poker", "DisplayOrder" => 1, "Url" => "#", "Icon" => "icon-edit", "Visible" => false, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => false, "ShowGuideLine" => false,"targetid"=>"poker"
                // ],[
                //     "QueryStringParamaters" => ["custId" => "", "username" => "", "isSyncCasino" => "1"], "Text" => "Bingo", "DisplayOrder" => 1, "Url" => "#", "Icon" => "icon-edit", "Visible" => false, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => false, "ShowGuideLine" => false,"targetid"=>"bingo"
                // ],[
                //     "QueryStringParamaters" => ["custId" => "", "username" => "", "isSyncCasino" => "1"], "Text" => "Live Casino", "DisplayOrder" => 1, "Url" => "#", "Icon" => "icon-edit", "Visible" => false, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => false, "ShowGuideLine" => false,"targetid"=>"livecasino"
                // ],[
                //     "QueryStringParamaters" => ["custId" => "", "username" => "", "isSyncCasino" => "1"], "Text" => "Virtual Sports", "DisplayOrder" => 1, "Url" => "#", "Icon" => "icon-edit", "Visible" => true, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => false, "ShowGuideLine" => false,"targetid"=>"virtualsports"
                // ],[
                //     "QueryStringParamaters" => ["custId" => "", "username" => "", "isSyncCasino" => "1"], "Text" => "Keno", "DisplayOrder" => 1, "Url" => "#", "Icon" => "icon-edit Enable", "Visible" => true, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => false, "ShowGuideLine" => false,"targetid"=>"keno"
                // ],
                [
                    "QueryStringParamaters" => ["custId" => $req->query("SearchAccountId"), "username" => $req->query("SearchAccountName"), "isSyncCasino" => "1"], "Text" => "Thông tin", "DisplayOrder" => 1, "Url" => "/portal/users/" . $req->query("SearchAccountId") . "/updateMember", "Icon" => "icon-edit Enable", "Visible" => true, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => true, "ShowGuideLine" => false, "targetid" => "info"
                ],
                [
                    "QueryStringParamaters" => ["custId" => $req->query("SearchAccountId"), "username" => $req->query("SearchAccountName")], "Text" => "Tiền Cược", "DisplayOrder" => 2, "Url" => "/portal/users/" . $req->query("SearchAccountId") . "/updateBetsMember", "Icon" => "icon-edit Enable", "Visible" => true, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => true, "ShowGuideLine" => false, "targetid" => "betsmenber"
                ],
                [
                    "QueryStringParamaters" => ["custId" => $req->query("SearchAccountId"), "username" => $req->query("SearchAccountName"), "roleId" => "1"], "Text" => "Hoa hồng", "DisplayOrder" => 4, "Url" => "/portal/users/" . $req->query("SearchAccountId") . "/updateCommission", "Icon" => "icon-edit Enable", "Visible" => true, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => true, "ShowGuideLine" => false, "targetid" => "commission"
                ],
            ]
        ];
        $owner = $req->user()->getOwnerParent();
        $current_type = $owner->getNextType();
        if ($owner->isAdmin()) {
            $data['Settings'][] = [
                "QueryStringParamaters" => ["CustId" => $req->query("SearchAccountId"),  "username" => $req->query("SearchAccountName")], "Text" => "Phân quyền", "Title" => "Phân quyền", "DisplayOrder" => 4, "Url" => "/portal/users/" . $req->query("SearchAccountId") . "/updatePermission", "Icon" => "icon-edit Enable", "Visible" => true, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => true, "ShowGuideLine" => false, "targetid" => "permission"
            ];
            $data['Settings'][] =
                [
                    "QueryStringParamaters" => ["CustId" => $req->query("SearchAccountId"),  "username" => $req->query("SearchAccountName")], "Text" => "Xóa", "Title" => "Xóa", "DisplayOrder" => 4, "Url" => "/portal/users/" . $req->query("SearchAccountId") . "/updatePermission", "Icon" => "icon-edit Enable", "Visible" => true, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => true, "ShowGuideLine" => false, "targetid" => "delete"
                ];
        }
        if ($current_type !== 'member') {
            $data['Settings'][] = [
                "QueryStringParamaters" => ["CustId" => $req->query("SearchAccountId"),  "username" => $req->query("SearchAccountName")], "Text" => "Reset mã bảo vệ", "Title" => "Reset mã bảo vệ", "DisplayOrder" => 4, "Url" => "/portal/users/" . $req->query("SearchAccountId") . "/secure_code", "Icon" => "icon-edit Enable", "Visible" => true, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => true, "ShowGuideLine" => false, "targetid" => "secure"
            ];
        }
        $data['Settings'][] = [
            "QueryStringParamaters" => ["CustId" => $req->query("SearchAccountId"),  "username" => $req->query("SearchAccountName")], "Text" => "Mật khẩu", "Title" => "Tùy chỉnh Mật khẩu", "DisplayOrder" => 4, "Url" => "/portal/users/" . $req->query("SearchAccountId") . "/changepwd", "Icon" => "icon-edit Enable", "Visible" => true, "AddEditTextToPopupTitle" => true, "Method" => "GET", "Enabled" => true, "ShowGuideLine" => false, "targetid" => "changepw"
        ];
        return $data;
    }

    public function listSubs(Request $req)
    {
        $owner = $req->user()->getOwnerParent();
        $user = $req->id ? User::find($req->id) : $owner;
        if (!$user->isOwner($owner->id)) {
            return view('errors.403');
        }
        $parent_id = $user->id;
        $current_type = $user->getNextType();
        return view('portal.iframe.list_subs', [
            'list' => User::orderBy('id', 'DESC')->where([
                'user_type' => 'sub',
                'parent_id' => $parent_id
            ])->paginate(10)->appends(Input::except('page')),
            'current_type' => $current_type
        ]);
    }

    public function CreditBalanceList(Request $req)
    {
        $owner = $req->user()->getOwnerParent();
        $user = $req->CustId ? User::find($req->CustId) : $owner;
        if (!$user->isOwner($owner->id)) {
            return view('errors.403');
        }
        $parent_id = $user->id;
        $current_type = $user->getNextType();
        $where = [
            'user_type' => $current_type,
            'parent_id' => $parent_id,
        ];
        $paging = $req->input("paging") ? $req->input("paging") : 10;
        if ($req->input("UserName")) {
            $where['username'] = $req->input("UserName");
        }
        if ($req->input("StatusId")) {
            $where['status'] = $req->input("StatusId");
        }
        $input = Input::except('page');
        $page = $req->input("page_input") ? $req->input("page_input") : 1;
        $inputPage = [
            "PageIndex" => $page,
            "PageSize" => $paging,
            "current_page" => 2
        ];
        $data = User::orderBy('id', 'DESC')->where($where)->paginate($paging)->appends($inputPage);
        return view('portal.iframe.credit_balanceList', [
            'list' => $data,
            'current_type' => $current_type,
            'username' => $req->input("UserName"),
            'StatusId' => $req->input("StatusId"),
            'status' => ["0" => "Tất cả", "active" => "Mở", "suspended" => "Bị đình chỉ", "block" => "Bị đóng"],
            'paging' => $paging,
            'page' => $page,
        ]);
    }

    public function header(Request $req)
    {
        return view('portal.iframe.header');
    }

    public function menu(Request $req)
    {
        $authUser = $req->user();
        return view('portal.iframe.menu', ['authUser' => $authUser]);
    }

    public function footer(Request $req)
    {
        return view('portal.iframe.footer');
    }

    public function cancel_void(Request $req)
    {
        $owner = $req->user()->getOwnerParent();
        $oneWeek = date('Y-m-d', strtotime("-1 week"));
        $ids = $owner->childIds();
        $array = Bet::whereIn('user_id', $ids)
            ->where('status', Bet::STATUS_CANCEL)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', '>=', $oneWeek)->get();
        $bets = [];
        foreach ($array as $value) {
            $bets[] = $value->getJson();
        }
        return view('portal.iframe.cancel_void', compact('bets'));
    }

    public function bets_runing(Request $req)
    {
        $owner = $req->user()->getOwnerParent();
        $ids = $owner->childIds();
        $array = Bet::whereIn('user_id', $ids)
            ->where('status', Bet::STATUS_RUNING)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->get();
        $bets = [];
        foreach ($array as $value) {
            $bets[] = $value->getJson();
        }
        return view('portal.iframe.bets_runing', compact('bets'));
    }

    public function bets_all(Request $req)
    {
        $owner = $req->user()->getOwnerParent();
        $oneWeek = date('Y-m-d', strtotime("-3 day"));
        $ids = $owner->childIds();
        $array = Bet::whereIn('user_id', $ids)
            ->where('status', Bet::STATUS_RUNING)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->whereDate('created_at', '>=', $oneWeek)->get();
        $bets = [];
        foreach ($array as $value) {
            $bets[] = $value->getJson();
        }
        return view('portal.iframe.bets_all', compact('bets'));
    }

    public function bets_in_saoke(Request $req)
    {
        $owner = $req->user()->getOwnerParent();
        $user = $req->id ? User::find($req->id) : $owner;
        $ids = $user->childIds();
        $ids[] = $user->id;
        $oneMonth = date('Y-m-d', strtotime("-1 month"));
        $array = Bet::whereIn('bets.user_id', $ids)
            ->whereDate('bets.created_at', '>=', $oneMonth)
            ->whereIn('bets.bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->orderBy('bets.id', 'desc');

        if ($req->ref_id) {
            $array = $array->where('bets.id', $req->ref_id);
        } else {
            if ($req->bet_status) {
                $array = $array->where('bets.bet_status', $req->bet_status);
            }
            if ($req->type) {
                $types = ['main'];
                if ($req->type == 'conner') {
                    $types = ['conner', 'no_of_corners'];
                }
                $array = $array->join('odds', 'odds.odd_id', 'bets.odd_id')->whereIn('odds.type', $types);
            }
        }

        if (!$req->ref_id) {
            $array = $array->where('bets.status', Bet::STATUS_DONE);
        }

        $array = $array->select('bets.*')->paginate(10)->appends(Input::except('page'));
        $bets = [];

        foreach ($array as $value) {
            $bets[] = $value->getJson();
        }

        return view('portal.iframe.bets_in_saoke', compact('bets', 'array', 'req', 'user'));
    }

    public function logs(Request $req)
    {
        $today = date("m/d/Y");
        $yesterday = date('m/d/Y', strtotime("-1 day"));
        $req->end_date = $req->end_date ? $req->end_date : date("m/d/Y");
        $req->start_date = $req->start_date ? $req->start_date : date("m/d/Y");
        $end_date = date('Y-m-d', strtotime($req->end_date));
        $start_date = date('Y-m-d', strtotime($req->start_date));
        $firstDate = date('m/d/Y', strtotime("-1 month"));

        $user = $req->user()->getOwnerParent();
        $ids = $user->getNextChildIds();
        $ids[] = $user->id;
        $oneMonth = date('Y-m-d', strtotime("-1 month"));
        $array = Log::whereIn('user_id', $ids)->whereDate('created_at', '>=', $oneMonth)->orderBy('id', 'desc');

        if ($start_date && $end_date) {
            $array = $array->whereDate('created_at', '>=', $start_date);
            $array = $array->whereDate('created_at', '<=', $end_date);
        }

        $logs = $array->paginate(10)->appends(Input::except('page'));
        return view('portal.iframe.logs', compact('logs', 'req', 'today', 'yesterday', 'firstDate'));
    }

    public function event_pending(Request $req)
    {
        $owner = $req->user()->getOwnerParent();
        $user = $req->id ? User::find($req->id) : $owner;
        $ids = $user->childIds();
        $ids[] = $user->id;
        $events = Event::whereIn('events.time_status', array(Event::TIME_STATUS_TO_BE_FIXED))
            ->join('bets', function ($join) use ($ids) {
                $join->on('bets.event_id', '=', 'events.event_id');
                $join->where('bets.status', BET::STATUS_RUNING);
                $join->whereIn('bets.user_id', $ids);
            })
            ->havingRaw('count(bets.id) > 0')
            ->selectRaw('events.*, count(bets.id) as count')
            ->groupBy('events.id', 'events.event_id')
            ->get();

        return view('portal.iframe.event_pending', compact('events'));
    }

    public function bet_pending(Request $req)
    {
        $owner = $req->user()->getOwnerParent();
        $user = $req->id ? User::find($req->id) : $owner;
        $ids = $user->childIds();
        $ids[] = $user->id;
        $message = $req->sync_bet_pending;
        if ($req->sync_bet_pending==true) {

            $message = "test111";

            // $curl = curl_init();
            // $response = file_get_contents('http://crawl:3000/fixMatchResults');
            // $response = json_decode($response);
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://crawl:3000/fixMatchResults',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);
            $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            curl_close($curl);
            if($httpcode == 200){
                $response = json_decode($response, true);
                if($response['data']){
                    $message = "Đã đồng bộ, Xin vui lòng đợi 10p rồi refresh lại trang!";
                }else{
                    $message = "Tiến trình đồng bộ đang được thực thi!";
                }
            }else{
                $message = "Có lỗi xảy ra!";
            }
        }
        // $array = Bet::where('user_id', $req->id)
        // ->where('status', Bet::STATUS_RUNING)
        // ->whereDate('created_at', '>=', $start_date)
        // ->whereDate('created_at', '<=', $end_date)
        // ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
        // ->get();

        // $bets = [];
        // $total = 0;
        // foreach ($array as $value) {
        //     $bets[] = $value->getJson();
        //     $total += $value->bet_amount;
        // }

        $array = Bet::where('bets.status', Bet::STATUS_RUNING)
            ->join('events', function ($join) use ($ids) {
                $join->on('bets.event_id', '=', 'events.event_id');
                $join->whereIn('events.time_status', array(Event::TIME_STATUS_TO_BE_FIXED,Event::TIME_STATUS_ENDED));
            })
            // ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->selectRaw('bets.*')
            ->orderBy('bets.created_at', 'desc')
            ->get();
        $bets = [];
        $total = 0;
        foreach ($array as $value) {
            $bets[] = $value->getJson();
            $total += $value->bet_amount;
        }
        // $bets = Event::whereIn('events.time_status', array(Event::TIME_STATUS_TO_BE_FIXED,Event::TIME_STATUS_ENDED))
        //     ->join('bets', function ($join) use ($ids) {
        //         $join->on('bets.event_id', '=', 'events.event_id');
        //         $join->where('bets.status', BET::STATUS_RUNING);
        //         $join->whereIn('bets.user_id', $ids);
        //     })
        //     // ->havingRaw('count(bets.id) > 0')
        //     ->selectRaw('bets.*')
        //     ->orderBy('bets.created_at desc')
        //     // ->groupBy('events.id', 'events.event_id')
        //     ->get();
        if ($req->sync_bet_pending==true) {
            return view('portal.iframe.bet_pending', compact('bets','message','total'))->with('sync_bet_pending', true);
        }

        return view('portal.iframe.bet_pending', compact('bets','message','total'));
    }

    public function member_chua_xu_ly(Request $req)
    {
        $owner = $req->user()->getOwnerParent();
        $user = $req->id ? User::find($req->id) : $owner;
        if (!$user->isOwner($owner->id)) {
            return view('errors.403');
        }
        $parent_id = $user->id;
        $current_type = $user->getNextType();

        if ($current_type == User::TYPE_MEMBER) {
            $key = 'user_id';
        } else {
            $key = $current_type . '_id';
        }

        $oneMonth = date('Y-m-d', strtotime("-1 month"));
        $ids = $user->getNextChildIds();
        $betsRuning = Bet::whereIn($key, $ids)
            ->where('status', Bet::STATUS_RUNING)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->selectRaw($key . ' as user_id, count(id) as number_ticket, sum(bet_amount) as stake, sum(bet_profit) as profit, sum(bet_commission) as commission')
            ->groupBy($key)
            ->get();

        foreach ($betsRuning as $value) {
            $value->online = $value->user->online;
            $value->username = $value->user->username;
            $value->first_name = $value->user->first_name;
            $value->last_name = $value->user->last_name;
        }
        return view('portal.iframe.member_chua_xu_ly', compact('betsRuning', 'current_type'));
    }

    public function win_lose_details(Request $req)
    {
        $today = date("m/d/Y");
        $yesterday = date('m/d/Y', strtotime("-1 day"));
        // $req->end_date = $req->ToDate ? $req->ToDate : date("m/d/Y");
        // $req->start_date = $req->FromDate ? $req->FromDate : date("m/d/Y");
        $req->end_date = $req->end_date ? $req->end_date : date("m/d/Y");
        $req->start_date = $req->start_date ? $req->start_date : date("m/d/Y");

        $end_date = date('Y-m-d', strtotime($req->end_date));
        $start_date = date('Y-m-d', strtotime($req->start_date));
        $owner = $req->user()->getOwnerParent();
        $user = $req->id ? User::find($req->id) : $owner;
        if (!$user->isOwner($owner->id)) {
            return view('errors.403');
        }
        $current_type = $user->getNextType();

        $oneMonth = date('Y-m-d', strtotime("-1 month"));
        $firstDate = date('m/d/Y', strtotime("-1 month"));
        $ids = $user->getNextChildIds();

        if ($current_type == User::TYPE_MEMBER) {
            $key = 'user_id';
        } else {
            $key = $current_type . '_id';
        }

        $betsDone = Bet::whereIn($key, $ids)
            ->where('status', Bet::STATUS_DONE)
            ->whereDate('created_at', '>=', $oneMonth)
            ->whereIn('bet_kind', [Bet::KIND_NORMAL, Bet::KIND_GROUP])
            ->selectRaw($key . ' as user_id, count(id) as number_ticket, sum(bet_amount) as stake, sum(bet_profit) as profit, sum(bet_commission) as commission');

        if ($start_date && $end_date) {
            $betsDone = $betsDone->whereDate('created_at', '>=', $start_date);
            $betsDone = $betsDone->whereDate('created_at', '<=', $end_date);
        }

        $betsDone = $betsDone->groupBy($key)->get();

        foreach ($betsDone as $value) {
            $value->online = $value->user->online;
            $value->username = $value->user->username;
            $value->first_name = $value->user->first_name;
            $value->last_name = $value->user->last_name;
        }
        $sum = [
            'stake' => 0,
            'number_ticket' => 0,
            'gross_comm' => 0,
            'profit' => 0,
            'commission' => 0,
            'total' => 0
        ];
        $req->name = $req->name?$req->name:"Hôm nay";
        return view('portal.iframe.win_lose_details', compact('betsDone', 'sum', 'today', 'firstDate', 'yesterday', 'req', 'current_type', 'user', 'start_date', 'end_date'));
    }

    public function deleteData(Request $req)
    {
        $count = -1;
        $oneMonth = date('Y-m-d', strtotime("-20 days"));
        $number = Bet::whereDate('created_at', '<=', $oneMonth)->count();
        if ($req->isMethod('post')) {
            $count = Bet::whereDate('created_at', '<=', $oneMonth)->limit(1000)->delete();
        }
        return view('portal.iframe.delete-data', compact('count', 'oneMonth', 'number'));
    }
}
