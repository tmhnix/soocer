<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Customer List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/assets/admin/assets/bundles/common/common.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/assets/bundles/site-memberinfo/default.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/site-memberinfo/assets/bundles/default.min.css" rel="stylesheet" type="text/css">

    <link href="/assets/admin/assets/bundles/site-asset/data-table.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/site-memberinfo/Features/CustomerList/Bundles/customer-list.min.css" rel="stylesheet"
        type="text/css">
    <link href="/assets/admin/site-memberinfo/Features/CustomerList/Bundles/customer-list-07.min.css"
        rel="stylesheet" type="text/css" media="screen and (max-device-width: 767px)">
</head>

<body>
<div id="page-popup" class="modal fade hidden" role="dialog" aria-labelledby="myModalLabel"
        style="opacity: 1; overflow: visible;">
        <div class="modal-dialog ex-modal" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="icon icon-close close" data-dismiss="modal" aria-label="Đóng"><span
                            aria-hidden="true"></span></button>
                    <h4 class="modal-title" id="result-detail-title"><span class="popup-title" id="popup-title"></span>
                    </h4>
                </div>
                <div class="modal-body">
                    <iframe frameborder="0" allowtransparency="true" marginheight="0" marginwidth="0" scrolling="auto"
                        id="popup-iframe"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade message-modal" id="userMessageModal" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body" id="userMessageModalBody">
                    <button type="button" class="icon icon-close close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"></span></button>
                    <div id="msg-content">
                        <p class="not-shown-message">Dear Valued Customer: [GDG] Temporarily removed from the Website
                            until further Notice. Sorry for the inconvenience caused. </p>
                    </div>
                    <a class="link hide showmore-container">Thêm</a>
                    <a class="link hide showless-container">Rút gọn</a>
                </div>
            </div>
        </div>
    </div>
    <div class="customer-list">
        <div class="page-title">
            <span class="text-title pull-left">
                Danh s&#225;ch Member
                &nbsp;
                <!-- <a href="/admin/doc/StaticMessageGuide?id=137130" target="_blank"><span class="icon icon-information-outline"></span></a> -->
            </span>
        </div>

        <div class="form-inline filter form-report">
            <div class="form-group username-box">
                <label>T&#234;n đăng nhập</label>
                <input type="text" class="txt-search" id="txt-username"
                    placeholder="T&#234;n đăng nhập/Biệt Danh hoặc T&#234;n/Họ" />
            </div>
            <div class="form-group status-box">
                <label>Trạng th&#225;i</label>
                <select id="statusFilter" name="statusFilter">
                    <option value="0" selected="selected">Tất cả</option>
                    <option value="active">Mở</option>
                    <option value="suspended">Bị đ&#236;nh chỉ</option>
                    <option value="block">Bị kh&#243;a</option>
                </select>
            </div>
            <div class="form-group btn-box">
                <input type="submit" value="X&#225;c nhận" class="btn-submit" />
            </div>
        </div>

        <table id="tbl-customer-list" class="hidden tblRpt tblRpt-bordered tblRpt-hover display nowrap">
            <thead>

                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <tr>
                    <th rowspan="2" class="header all padding-icon">
                        No.
                    </th>
                    <th rowspan="2" class="header all padding-icon">
                        <input type="checkbox" id="select-all" />
                    </th>
                    <th rowspan="2" class="header all padding-icon">
                        <!-- <div class="edit-multiple icon-table-edit" data-url="" title="Tuỳ Chỉnh Đồng Loạt Thiết Lập" /> -->
                    </th>
                    <th rowspan="2" class="header all">
                        T&#234;n đăng nhập 
                    </th>
                    <th rowspan="2" class="header all">
                        Trạng th&#225;i
                    </th>
                    <th rowspan="2" class="header">
                        Nhân đôi hoa hồng
                    </th>
                    <th rowspan="2" class="header  ">
                        Biệt danh
                    </th>
                    <th rowspan="2" class="header  ">
                        Tên
                    </th>
                    <th rowspan="2" class="header  ">
                        Họ
                    </th>
                    <th rowspan="2" class="header ugroup desktop">
                        Nh&#243;m
                    </th>
                    <th colspan="4" class="header desktop">
                        Hoa hồng
                    </th>
                    <th rowspan="2" class="header ">
                        Ngày tạo
                    </th>
                    <th rowspan="2" class="header ">
                        IP đăng nhập
                    </th>
                    <th rowspan="2" class="header "></th>
                </tr>
                <tr class="thead-row2">
                    <th class="header commission startGroup desktop">
                        A Comm 1
                    </th>
                    <th class="header commission desktop">
                        A Comm 2
                    </th>
                    <th class="header commission desktop">
                        A Comm 3
                    </th>
                    <th class="header commission desktop">
                        Number Game
                    </th>
                </tr>
            </thead>
        </table>

        <div class="modal modal-sm fade" id="status-popup" tabindex="-2" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            id="close-product-popup" style="margin-right: 20px;">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>

        <form target="productIframe" action="" id="productIframeForm">
            <input type="hidden" value="" />
            <input type="submit" class="hidden">
        </form>

        <div class="modal modal-product modal-sm fade" id="product-popup" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                            id="close-product-popup">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body-product">
                        <iFrame src="" name="productIframe" id="productIframe" style="width:100%; height:95%;"></iFrame>
                    </div>
                </div>
            </div>
        </div>

        <input name="__RequestVerificationToken" type="hidden"
            value="I5dtBQmeEoftdl9NBO44fVtPBbX-jZ-aIfOWS8RtOh_mLlx5j0BA6BARkvViA0WIkC7bpnpQ0YZtJFxKHe_jVJ3mpfk1" />
        <input id="StatusId" name="StatusId" type="hidden" value="0" />
        <input id="DoubleCommId" name="DoubleCommId" type="hidden" value="2" />
        <input id="UnconfirmSettingId" name="UnconfirmSettingId" type="hidden" value="0" />
        <input type="hidden" id="searchAccountId" value="">
        <input type="hidden" id="searchAccountName" value="KF680F07">
        <input type="hidden" id="searchAccountRoleId" value="2">
        <input type="hidden" id="uplineRoleId" value="2">
        <input type="hidden" id="downlineLevelName" value="Member">
        <input type="hidden" id="showEditMultiple" value='true'>
        <input type="hidden" id="isMobileView" value='false'>
        <input type="hidden" id="breadcrumbLevelJson"
            value='[{&#39;CustId&#39;:52572250,&#39;CustName&#39;:&#39;KF680F07&#39;,&#39;CustLevelId&#39;:2}]'>
        <input type="hidden" id="oldMainUrl" value='/portal/'>
        <input type="hidden" id="reportsUrl" value='/portal/'>
        <input type="hidden" id="memberInfoUrl" value='/portal/'>
        <input type="hidden" id="limitedDateToShowInfo" value='true'>
        <input type="hidden" id="isShowMyanmarOdds" value='false'>
        <input type="hidden" id="canViewReport" value='true'>
        <input type="hidden" id="canUpdateAccount" value='true'>
        <input type="hidden" id="customerListResources"
            value='{&quot;NotFilter&quot;:&quot;Kh&amp;#244;ng d&amp;#249;ng&quot;,&quot;UnlockTooltip&quot;:&quot;Nhấn để mở kho&amp;#225;&quot;,&quot;MemberList&quot;:&quot;Danh s&amp;#225;ch Member&quot;,&quot;ExpandAll&quot;:&quot;Mở rộng tất cả&quot;,&quot;Expand&quot;:&quot;Mở rộng&quot;,&quot;AComm1&quot;:&quot;Hoa hồng Agent 1&quot;,&quot;AComm2&quot;:&quot;Hoa hồng Agent 2&quot;,&quot;AComm3&quot;:&quot;Hoa hồng Agent 3&quot;,&quot;GroupB&quot;:&quot;Nh&amp;#243;m B&quot;,&quot;GroupC&quot;:&quot;Nh&amp;#243;m C&quot;,&quot;GroupA&quot;:&quot;Nh&amp;#243;m A&quot;,&quot;GroupD&quot;:&quot;Nh&amp;#243;m D&quot;,&quot;Closed&quot;:&quot;Bị đ&amp;#243;ng&quot;,&quot;ThereIsNoData&quot;:&quot;Th&amp;#244;ng tin chưa được cập nhật&quot;,&quot;PlayerMyanmarOdds&quot;:&quot;P Tỷ Lệ Cược Myanmar&quot;,&quot;Locked&quot;:&quot;Bị kh&amp;#243;a&quot;,&quot;ViewIPTooltip&quot;:&quot;Nhấn v&amp;#224;o IP để xem th&amp;#244;ng tin IP&quot;,&quot;UsernamePlaceHolder&quot;:&quot;T&amp;#234;n đăng nhập/Biệt Danh hoặc T&amp;#234;n/Họ&quot;,&quot;AccountMyanmarOdds&quot;:&quot;A Tỷ Lệ Cược Myanmar&quot;,&quot;MasterAgentList&quot;:&quot;Danh s&amp;#225;ch Master&quot;,&quot;Status&quot;:&quot;Trạng th&amp;#225;i&quot;,&quot;Select&quot;:&quot;Lưa chọn&quot;,&quot;PComm1&quot;:&quot;Hoa hồng Member 1&quot;,&quot;PComm3&quot;:&quot;Hoa hồng Member 3&quot;,&quot;PComm2&quot;:&quot;Hoa hồng Member 2&quot;,&quot;AllowDoubleCommission&quot;:&quot;Cho ph&amp;#233;p Nh&amp;#226;n đ&amp;#244;i hoa hồng&quot;,&quot;DisallowDoubleCommission&quot;:&quot;Kh&amp;#244;ng cho ph&amp;#233;p nh&amp;#226;n đ&amp;#244;i hoa hồng&quot;,&quot;CreatedDate&quot;:&quot;Ng&amp;#224;y tạo&quot;,&quot;UnconfirmedSetting&quot;:&quot;Chưa Thiết Lập&quot;,&quot;AgentList&quot;:&quot;Danh s&amp;#225;ch Agent&quot;,&quot;MyanmarOdds&quot;:&quot;Tỷ Lệ Cược Myanmar&quot;,&quot;CollapseAll&quot;:&quot;Thu gọn tất cả&quot;,&quot;NickName&quot;:&quot;Biệt Danh&quot;,&quot;Suspended&quot;:&quot;Bị đ&amp;#236;nh chỉ&quot;,&quot;Statement&quot;:&quot;Sao k&amp;#234;&quot;,&quot;PageSize&quot;:&quot;Số d&amp;#242;ng&quot;,&quot;No&quot;:&quot;No.&quot;,&quot;Of&quot;:&quot;/&quot;,&quot;All&quot;:&quot;Tất cả&quot;,&quot;Group&quot;:&quot;Nh&amp;#243;m&quot;,&quot;Other&quot;:&quot;Kh&amp;#225;c&quot;,&quot;UsernameTooltip&quot;:&quot;Nhấn v&amp;#224;o T&amp;#234;n t&amp;#224;i khoản để xem chi tiết c&amp;#225;c tuyến dưới&quot;,&quot;FirstLastName&quot;:&quot;Họ v&amp;#224; t&amp;#234;n&quot;,&quot;Username&quot;:&quot;T&amp;#234;n đăng nhập&quot;,&quot;LastName&quot;:&quot;Họ&quot;,&quot;Commission&quot;:&quot;Hoa hồng&quot;,&quot;Collapse&quot;:&quot;Thu gọn&quot;,&quot;Disabled&quot;:&quot;V&amp;#244; hiệu h&amp;#243;a&quot;,&quot;EditStatus&quot;:&quot;Sửa Trạng Th&amp;#225;i&quot;,&quot;EditMultipleSetting&quot;:&quot;Tuỳ Chỉnh Đồng Loạt Thiết Lập&quot;,&quot;Allowed&quot;:&quot;Cho ph&amp;#233;p&quot;,&quot;FirstName&quot;:&quot;T&amp;#234;n&quot;,&quot;StatementTooltip&quot;:&quot;Xem Sao K&amp;#234;&quot;,&quot;UnuspendStatusPopupHeader&quot;:&quot;Huỷ đ&amp;#236;nh chỉ &amp;lt;username&amp;gt;&quot;,&quot;UpdateDoubleCommSuccessfully&quot;:&quot;Cập nhật Nh&amp;#226;n Đ&amp;#244;i Hoa Hồng th&amp;#224;nh c&amp;#244;ng&quot;,&quot;EditSetting&quot;:&quot;Sửa Thiết Lập&quot;,&quot;LoginIP&quot;:&quot;IP đăng nhập&quot;,&quot;DoubleComm&quot;:&quot;Nh&amp;#226;n đ&amp;#244;i hoa hồng&quot;,&quot;Disallowed&quot;:&quot;Kh&amp;#244;ng cho&quot;,&quot;Group1X2&quot;:&quot;1X2&quot;,&quot;Edit&quot;:&quot;T&amp;#249;y chỉnh&quot;,&quot;None&quot;:&quot;Bỏ Chọn&quot;,&quot;Open&quot;:&quot;Mở&quot;,&quot;View&quot;:&quot;Xem&quot;,&quot;Page&quot;:&quot;Trang&quot;}'>
        <input type="hidden" id="arrayStatusRnCasino" name="arrayStatusRnCasino" value=''>
        <input type="hidden" id="arrayCustID" name="arrayCustID" value=''>
        <input type="hidden" id="arrayUserName" name="arrayUserName" value=''>
        <input type="hidden" id="arrayStatusRnCasino" name="arrayStatusRnCasino" value=''>
        <input type="hidden" id="commissionText" value='Hoa hồng'>
        <input type="hidden" id="unuspendStatusPopupHeader" value='Huỷ đ&#236;nh chỉ &lt;username&gt;'>
        <input type="hidden" id="editText" value='T&#249;y chỉnh'>
        <input type="hidden" id="editSettingText" value='Sửa Thiết Lập'>
        <input type="hidden" id="editMultipleSettingText" value='Tuỳ Chỉnh Đồng Loạt Thiết Lập'>
        <input type="hidden" id="editStatusText" value='Sửa Trạng Th&#225;i'>
        <input type="hidden" id="viewIPTooltipText" value='Nhấn v&#224;o IP để xem th&#244;ng tin IP'>
        <input type="hidden" id="usernameTooltipText"
            value='Nhấn v&#224;o T&#234;n t&#224;i khoản để xem chi tiết c&#225;c tuyến dưới'>
        <input type="hidden" id="statementTooltipText" value='Xem Sao K&#234;'>
        <input type="hidden" id="loginIPText" value='IP đăng nhập'>
        <input type="hidden" id="collapseText" value='Thu gọn'>
        <input type="hidden" id="expandText" value='Mở rộng'>
        <input type="hidden" id="collapseAllText" value='Thu gọn tất cả'>
        <input type="hidden" id="expandAllText" value='Mở rộng tất cả'>
        <input type="hidden" id="unlockTooltipText" value='Nhấn để mở kho&#225;'>
        <input type="hidden" id="confirmUnlockInCaseFalseOTPSC"
            value='T&#224;i khoản n&#224;y đ&#227; bị kh&#243;a do nhiều lần nhập sai M&#227; OTP / M&#227; bảo mật. Bạn c&#243; muốn mở kho&#225; kh&#244;ng?'>
        <input type="hidden" id="confirmUnlockInCaseFalsePassword"
            value='T&#224;i khoản n&#224;y đ&#227; bị kh&#243;a do nhiều lần nhập sai mật khẩu. Bạn c&#243; muốn mở kh&#243;a kh&#244;ng?'>
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="/assets/admin/assets/bundles/common/common.min.js" type="text/javascript"></script>
    <script src="/assets/admin/assets/bundles/site-memberinfo/default.min.js" type="text/javascript"></script>

    <script type="text/javascript">
       
    </script>
    <script src="/assets/admin/assets/bundles/site-memberinfo/data-table.min.js" type="text/javascript"></script>
    <script
        src="/assets/admin/site-memberinfo/Features/QRCodeMemberSignIn/Scripts/EasyAutocomplete/jquery.easy-autocomplete.min.js"
        type="text/javascript"></script>
    <script src="/assets/admin/site-memberinfo/Features/CustomerList/Bundles/customer-list.min.js"
        type="text/javascript"></script>


</body>

</html>