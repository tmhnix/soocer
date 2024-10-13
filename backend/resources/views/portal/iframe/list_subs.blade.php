<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="portal">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link href="/assets/admin/css/dstv_files/Agent.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/CustomerList.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/IcoEdit_Control.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/IconEditMulti_Control.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/IcoOther_Control.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/IcoStatus.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/IcoViewDownline_Control.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/MenuPopup_Control.min.css" rel="stylesheet" type="text/css">
      <script type="application/javascript" src="{{ elixir('portal/js/all.js') }}"></script>
      <style type="text/css">
        .pagination{
          display: inline-flex;
          list-style: none;
          font-size: 18px;
        }
        .pagination li{
          padding-right: 10px; 
        }
      </style>
      <style type="text/css">
         #element_to_pop_up { display:none; }
      </style>
      <link href="/assets/admin/css/dstv_files/SearchUserName_Control.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/styles.min.css" rel="stylesheet" type="text/css">
   </head>
   <body ng-controller="ListMemberController">
   @include('portal.messsage')
      <table>
         <tbody>
            <tr>
               <td><input type="hidden" id="arrayCustID" name="arrayCustID">
                  <input type="hidden" id="arrayUserName" name="arrayUserName">
                  <input type="hidden" id="arrayStatus" name="arrayStatus">
                  <input type="hidden" id="isDisableSuspendedStatus" name="isDisableSuspendedStatus" value="false">
                  <input type="hidden" id="isDisableAllowOutrightStatus" name="isDisableAllowOutrightStatus" value="true">
               </td>
            </tr>
         </tbody>
      </table>
      <table>
         <tbody>
            <tr>
               <td>
                  <table border="0" cellpadding="0" cellspacing="0" width="100%" id="diverrmsg" style="display: none;">
                     <tbody>
                        <tr>
                           <td id="msg_1_1" class="emsg_1_1">&nbsp;</td>
                           <td id="msg_1_2" class="emsg_1_2">&nbsp;</td>
                           <td id="msg_1_3" class="emsg_1_3">&nbsp;</td>
                        </tr>
                        <tr>
                           <td id="msg_2_1" valign="top" class="emsg_2_1">&nbsp;</td>
                           <td valign="top" id="spmsgerr" class="msgerr"></td>
                           <td id="msg_2_2" class="emsg_2_2">&nbsp;</td>
                        </tr>
                        <tr>
                           <td id="msg_3_1" class="emsg_3_1">&nbsp;</td>
                           <td id="msg_3_2" class="emsg_3_2">&nbsp;</td>
                           <td id="msg_3_3" class="emsg_3_3">&nbsp;</td>
                        </tr>
                     </tbody>
                  </table>
               </td>
            </tr>
            <tr>
               <a href="{!! route('portal.agent.subaccount') !!}"><input style="width: 100px; margin-bottom: 30px" id="dSubmit" type="button" data-toggle="modal" data-target="#myModal" value="Tạo mới" class="buttonSubmit" onclick=""></a>
            </tr>
            <tr>
               <td>
                  <div id="title_header">Danh sách <span style="text-transform: capitalize;">Tài khoản phụ</span> &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:getPrint('page_main');" id="imgPrint" title="In"></a></div>
               </td>
            </tr>
            <tr>
               <td>
                  <div id="box_header" style="width:100%">
                     <table id="tblSearch" cellpadding="0" cellspacing="0" border="0">
                        <tbody>
                           <tr>
                              <td>Tài khoản</td>
                              <td>
                                 <input list="member" placeholder="Tên đăng nhập" style="width: 145px; position: relative;" class="text_italic" name="txtUserName" id="txtUserName" autocomplete="off">
                                 <datalist id="member">
                                    <option value="ZXTE2N000">DEMO</option>
                                    <option value="ZXTE2N100">Demo </option>
                                 </datalist>
                              </td>
                              <td>Trạng thái</td>
                              <td>
                                 <div id="box_option">
                                    <select id="statusFilter" name="statusFilter">
                                       <option value="0">Tất cả</option>
                                       <option value="1">Mở</option>
                                       <option value="2">Bị đình chỉ</option>
                                       <option value="3">Bị khóa</option>
                                       <option value="4">Vô hiệu hóa</option>
                                    </select>
                                 </div>
                                 <div style="width: 76px; float:right; text-align:right">
                                    <input style="width: 100%" id="dSubmit" type="button" data-toggle="modal" data-target="#myModal" value="Xác nhận" class="buttonSubmit" onclick="">
                                 </div>
                                 <div class="shadow" id="shadow" style="position: absolute; top: 73px; left: 74px; visibility: hidden;">
                                    <div class="output" id="output">
                                       <script src="../dstv_files/SearchUserName_Control.min.js" type="text/javascript"></script><script src="../dstv_files/autocomplete.js" type="text/javascript"></script>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </td>
            </tr>
            <tr>
               <td>
                  <div id="page_main">
                     <link href="/assets/admin/css/dstv_files/PagingHeader.min.css" rel="stylesheet" type="text/css">
                     <table id="tblHeader" cellspacing="0" cellpadding="0">
                        <tbody>
                           <tr>
                              <td class="bgleft">&nbsp;&nbsp;Lưa chọn : <a id="chkAll" onclick="CheckAll_onClick(true);">Tất cả</a> | <a id="chkNone" onclick="CheckAll_onClick(false);">None</a></td>
                              <td class="bgright">
                                 Dung lượng trang
                                 <select id="sel_PagingTop" name="sel_PagingTop" onchange="_PagingTop.SetPageSize(this.value)">
                                    <option value="10">10</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    <option value="500" selected="">500</option>
                                 </select>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <table id="tblCustomerList" class="tblRpt width-100per">
                        <thead>
                           <tr class="RptHeader">
                              <th id="headerNo" rowspan="2" userid="15366409" subaccid="0">No.</th>
                              <th rowspan="2" isdirectdownline="1" isshowdcom="False">
                                 <div onclick="RenderMulti(this,'MultiPopup','Agent','15366409','15366409');" class="btnEditMult" id="EdiMulti"></div>
                              </th>
                              <th rowspan="2">Tài khoản</th>
                              <th rowspan="2">Trạng thái</th>
                              <th rowspan="2">Tùy chỉnh</th>
                              <th rowspan="2">Tên</th>
                              <th rowspan="2">Họ</th>
                              <th rowspan="2">Nhóm</th>
                              <th rowspan="2">Ngày tạo</th>
                              <th rowspan="2">IP đăng nhập</th>
                           </tr>
                        </thead>
                        <tbody>
                           @foreach ($list as $i => $item)
                           <tr class="RowBgOpen">
                              <td>{{$i + 1}}</td>
                              <td><input type="checkbox" name="chkid" value="KP39MATH000"></td>
                              <td><a>{{$item->username}}</a></td>
                              <td>
                                 <div id="IdStatus" ng-click="showPopup($event, {{$item->id}}, '{{$item->status}}', '{{$item->username}}');">
                                  <span class="text" title="Mở">{{$item->getStatusName()}}</span>
                                    <span class="arrow" title="Trạng thái">&nbsp;&nbsp;&nbsp;</span>
                                 </div>
                              </td>
                              <td align="center">
                                 <div title="Tùy chỉnh" class="divOther" ng-click="showFrmUpdOthers($event, {{$item->id}}, '{{$item->username}}')"></div>
                              </td>
                              <td class="l">{{$item->first_name}}</td>
                              <td class="l">{{$item->last_name}}</td>
                              <td>{{$item->group}}</td>
                              <td class="bl_time">{{format_date_pretty($item->created_at)}}</td>
                              <td>
                                <a target="_blank" href="http://cqcounter.com/whois/?query={{$item->last_ip_login}}" class="iplink">{{$item->last_ip_login}}</a>
                              </td>
                           </tr>
                           @endforeach
                        </tbody>
                        <tfoot>
                           <tr>
                              <td colspan="23">
                                 {{ $list->links() }}
                              </td>
                           </tr>
                        </tfoot>
                     </table>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
      <div id="Popup" class="divMenuPopup" style="top: 290px; left: 235px; display: none;">
         <form action="#" name="ZXTE2N006" id="ZXTE2N006">
            <div id="tr_racingPT">
               <a class="" href="javascript:;" ng-click="closePopup()" id="racingPT" value="0">
                <span style="margin-right: 5px;;">Hủy</span>
               </a>
            </div>
            <div id="tr">
               <input type="hidden" id="mb" name="mb" value="ABC">
               <input type="radio" ng-model="status" name="edit_status" id="chk_closed" value="block">&nbsp;&nbsp;Khóa
            </div>
            <div id="tr">
               <input type="radio" ng-model="status" name="edit_status" id="chk_suspended" value="suspended">&nbsp;&nbsp;Đình chỉ
            </div>
            <div id="tr">
               <input type="radio" ng-model="status" name="edit_status" id="chk_outright" value="active">&nbsp;&nbsp;Outright
            </div>
            <div id="tr_racingPT"><a class="" href="javascript:;" ng-click="updateStatus();" id="racingPT" value="0"><span style="margin-right: 5px;;">Gửi</span></a>
            </div>
         </form>
      </div>
      <div id="MultiPopup" class="divMenuPopup">
         <div id="tr_sportBook"><a class="LinkPopup" href="javascript:;" id="sportBook" value="0">Edit for Sportsbook</a></div>
         <div id="tr_racing"><a class="LinkPopup" href="javascript:;" id="racing" value="0">Edit for Racing</a></div>
         <div id="tr_casino"><a class="LinkPopup" href="javascript:;" id="casino" value="0">Edit for Casino</a></div>
         <div id="tr_bingo"><a class="LinkPopup" href="javascript:;" id="bingo" value="0">Edit for Bingo</a></div>
         <div id="tr_keno"><a class="LinkPopup" href="javascript:;" id="keno" value="1">Edit Multiple Keno</a></div>
         <div id="tr_P2P"><a class="LinkPopup" href="javascript:;" id="P2P" value="0">Edit for Poker</a></div>
         <div id="tr_livecasino"><a class="LinkPopup" href="javascript:;" id="livecasino" value="0">Edit for Live Casino</a></div>
         <div id="tr_virtualsports"><a class="LinkPopup" href="javascript:;" id="virtualsports" value="0">Edit for Virtual Sports</a></div>
         <div id="tr_doublecomm"><a class="LinkPopup" href="javascript:;" id="doublecomm" value="0">Edit for x2 Commision</a></div>
      </div>
      <div id="divUpdOthers" class="divMenuPopup" style="top: 150px; left: 284px; display: none;">
         <div id="tr_racingPT"><a class="" href="javascript:;" ng-click="closePopupInfo()" id="racingPT" value="0"><span style="margin-right: 5px;;">Hủy</span></a></div>
         <!-- <div id="tr_racingPT"><a class="Disable_edit" href="javascript:;" id="racingPT" value="0">Racing</a></div>
         <div id="tr_casinoPT"><a class="Disable_edit" href="javascript:;" id="casinoPT" value="0">Casino</a></div>
         <div id="tr_p2pPT"><a class="Disable_edit" href="javascript:;" id="p2pPT" value="0">Poker</a></div>
         <div id="tr_bingoPT"><a class="Disable_edit" href="javascript:;" id="bingoPT" value="0">Bingo</a></div>
         <div id="tr_livecasinoPT"><a class="Disable_edit" href="javascript:;" id="livecasinoPT" value="0">Live Casino</a></div> -->
         <!-- <div id="tr_virtualsportsPT"><a class="Disable_edit" href="javascript:;" id="virtualsportsPT" value="0">Virtual Sports</a></div> -->
         <div id="tr_kenoPT" style="display: none;"><a class="Disable_edit" href="javascript:;" id="kenoPT" value="0">Keno</a></div>
         <div id="tr_editInfo"><a class="LinkPopup" href="javascript:;" id="editInfo" value="0" ng-click="menuPopupAction('editInfo')">Thông tin</a></div>
         <!-- <div id="tr_betSetting"><a class="LinkPopup" href="javascript:;" id="betSetting" value="0" ng-click="menuPopupAction('betSetting')">Tiền cược</a></div> -->
         <!-- <div id="tr_commission"><a class="LinkPopup" ng-click="menuPopupAction('commission')" href="javascript:;" id="commission" value="0">Hoa hồng</a></div> -->
         <div id="tr_commission"><a class="LinkPopup" ng-click="menuPopupAction('delete')" href="javascript:;" id="commission" value="0">Xóa</a></div>
         @if($current_type !== 'member')
         <div id="tr_password"><a class="LinkPopup" href="javascript:;" ng-click="menuPopupAction('secure_code')" id="password" value="0">Reset Mã bảo vệ</a>
         </div>
         @endif
         <div id="tr_password"><a class="LinkPopup" href="javascript:;" ng-click="menuPopupAction('password')" id="password" value="0">Mật khẩu</a>
         </div>
      </div>
   </body>
</html>