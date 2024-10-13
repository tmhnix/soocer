<aside class="sidebar" id="side-bar">
    <div class="partial-content customer-profile" id="profile" data-url="/admin/customer/BriefProfile">
        <div id="profile-content" data-introduce-nick-name-tooltip-cookie-name="ACD83D7C704A0831D18B7277DC5F8A"
            data-is-default-avatar="false" data-is-show-profile-picture-tooltip="true" data-nick-name="SUBXEM999">
            <a href="/admin/customer/ProfilePicture" target="main" class="profile-avatar">
                <img id="logoProfileImg" width="50" height="50" profile-image-id="10051" default-avatar="false"
                    src="{{ asset('img/cbimage.png') }}" alt="" title="Nhấn vào đây để sửa hình đại diện">
            </a>
            <div class="userinfo">
                <span class="userName">{{ $authUser->username }}</span>
                <br>
                <div style="font-size: 11px; padding-top: 5px; color: white"> <span id="spanNickNameID">Biệt danh:
                    </span>
                    <a href="javascript:true" class="linkConfigNow" id="linkNickNameID" target="main"> <span
                            style="white-space: nowrap; font-weight: bold"><span id="labelNickname">Cấu hình
                                ngay</span></span></a>
                </div>
            </div> <input id="Username" name="Username" type="hidden" value="KF680F07">
        </div>
    </div>
    <nav class="navigation" id="navigation">
        <ul class="main-tab">
            <li id="main-menu-header" class="mainmenu active withripple" data-target-container="mainmenu-container">
                <a>Menu chính</a>
            </li>
            <li class="accountinfo withripple" id="account-info-header1" data-target-container="accountinfo-container1">
                <a>Thông tin</a>
            </li>
            <li class="visible-mobile nav-close">
                <span class="icon-close icon-close-left-panel" id="closeIconOnMobile"></span>
            </li>
        </ul>
        <section id="main-menu-tab" class="mainmenu-container" data-mcs-theme="minimal-dark" role="tablist"
            aria-multiselectable="true" style="overflow: visible;">
            <div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside"
                style="max-height: none;" tabindex="0">
                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                    style="position:relative; top:0; left:0;" dir="ltr">
                    <ul class="list-menu" id="main-menu-items">
                        <li class="menu-item " id="menu-REPORTS">
                            <a class="withripple menu-opener parent-menu ">
                                <span class="txt-item pull-left txt-reports">
                                    <span class="icon icon-reports"></span>
                                    Báo cáo
                                </span>
                                <span class="pull-right icon-arrow-right"></span>
                            </a>
                            <ul class="sub-menu" style="display: none;">
                                <li data-url="/portal/member_chua_xu_ly" class="sub-menu-item "
                                    id="sub-menu-MEMBEROUTSTANDING">
                                    <a href="#" class="redirect-item">
                                        Số tiền chưa xử lý</a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-MEMBERWINLOSS">
                                    <a href="#" class="redirect-item">
                                        Thắng thua của thành viên</a>
                                </li>
                                <li data-url="/portal/win_lose_details" class="sub-menu-item "
                                    id="sub-menu-MEMBERWINLOSSDETAIL">
                                    <a href="#" class="redirect-item">
                                        Chi tiết thắng thua</a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item "
                                    id="sub-menu-MATCHWINLOSTDETAIL">
                                    <a href="#" class="redirect-item">
                                        Chi tiết thắng thua theo trận</a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-WINLOSSANALYSIS">
                                    <a href="#" class="redirect-item">
                                        Phân tích hệ số thắng thua</a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item "
                                    id="sub-menu-WINLOSSANALYSISCHART">
                                    <a href="#" class="redirect-item">
                                        Biểu đồ đánh giá thắng thua </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-WINLOSSBYPRODUCT">
                                    <a href="#" class="redirect-item">
                                        Thắng Thua Trên Sản Phẩm </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item "
                                    id="sub-menu-COMMISSIONBYBETTYPE">
                                    <a href="#" class="redirect-item">
                                        Hoa hồng theo loại cược </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-STATEMENT">
                                    <a href="#" class="redirect-item">
                                        Hoa hồng cho Racing </a>
                                </li>
                                <li data-url="/portal/cancel_void" class="sub-menu-item " id="sub-menu-RESULT">
                                    <a href="#" class="redirect-item">
                                        Cược hủy/từ chối </a>
                                </li>
                                <li data-url="/portal/bets_runing" class="sub-menu-item " id="sub-menu-SCHEDULE">
                                    <a href="#" class="redirect-item">
                                        Giám sát lượt cược gần nhất </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item "
                                    id="sub-menu-PROGRESSIVEGAMESCONTRIBUTION">
                                    <a href="#" class="redirect-item">
                                        Sao kê </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item "
                                    id="sub-menu-PROGRESSIVEGAMESCONTRIBUTION">
                                    <a href="#" class="redirect-item">
                                        Kết quả </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item " id="menu-MEMBERINFO">
                            <a class="withripple menu-opener parent-menu ">
                                <span class="txt-item pull-left txt-memberinfo">
                                    <span class="icon icon-memberinfo"></span>
                                    Thông tin Thành viên
                                </span>
                                <span class="pull-right icon-arrow-right"></span>
                            </a>
                            <ul class="sub-menu" style="display: none;">
                                <li data-url="/portal/members/create" class="sub-menu-item " id="sub-menu-NEWMEMBER">
                                    <a href="#" class="redirect-item">
                                        Tạo Member mới </a>
                                </li>
                                <li data-url="/portal/listSubs" class="sub-menu-item " id="sub-menu-CUSTOMERLIST">
                                    <a href="#" class="redirect-item">
                                        Tài khoản phụ
                                    </a>
                                </li>
                                <li data-url="/portal/listMember" class="sub-menu-item " id="sub-menu-CUSTOMERLIST">
                                    <a href="#" class="redirect-item">
                                        Danh sách Member </a>
                                </li>
                                <li data-url="/portal/creditBalanceList" class="sub-menu-item "
                                    id="sub-menu-CREDITBALANCE">
                                    <a href="#" class="redirect-item">
                                        Hạn mức /Tín dụng </a>
                                </li>
                                <li data-url="/admin/customer/ProblemAccount" class="sub-menu-item "
                                    id="sub-menu-PROBLEMACCOUNTLIST">
                                    <a href="#" class="redirect-item">
                                        Danh Sách Tài Khoản Có Vấn Đề </a>
                                </li>
                                <li data-url="/admin/customer/SportbookPositionTakingList" class="sub-menu-item "
                                    id="sub-menu-POSITIONTAKING">
                                    <a href="#" class="redirect-item">
                                        Position Taking (%) </a>
                                </li>
                                <li data-url="/admin/PositionTakingListCasino/CasinoPositionTakingList"
                                    class="sub-menu-item " id="sub-menu-CASINOPOSITIONTAKING">
                                    <a href="#" class="redirect-item">
                                        PT (%) của Casino </a>
                                </li>
                                <li data-url="/admin/Commission/MemberCommissionSportbook" class="sub-menu-item "
                                    id="sub-menu-MEMBERCOMMISSION">
                                    <a href="#" class="redirect-item">
                                        Hoa hồng của Member </a>
                                </li>
                                <li data-url="/admin/customer/WinLossLimit" class="sub-menu-item "
                                    id="sub-menu-MEMBERWINLIMIT">
                                    <a href="#" class="redirect-item">
                                        Hạn mức thắng/thua của Member </a>
                                </li>
                                <li data-url="/admin/customer/BetChoiceLimit" class="sub-menu-item "
                                    id="sub-menu-BETCHOICELIMIT">
                                    <a href="#" class="redirect-item">
                                        Giới hạn lựa chọn </a>
                                </li>
                                <li data-url="/admin/customer/ProgressiveJackpot" class="sub-menu-item "
                                    id="sub-menu-PROGRESSIVEJACKPOTGAMES">
                                    <a href="#" class="redirect-item">
                                        Trò chơi Jackpot lũy tiến </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item " id="menu-BETLISTS">
                            <a class="withripple menu-opener parent-menu ">
                                <span class="txt-item pull-left txt-betlists">
                                    <span class="icon icon-betlists"></span>
                                    Danh sách cược
                                </span>
                                <span class="pull-right icon-arrow-right"></span>
                            </a>
                            <ul class="sub-menu" style="display: none;">
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-LASTBETS">
                                    <a href="#" class="redirect-item">
                                        Cược mới nhất </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-CANCELLEDBETS">
                                    <a href="#" class="redirect-item">
                                        Cược bị hủy </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-CORRECTSCORE">
                                    <a href="#" class="redirect-item">
                                        Tỷ Số Chính Xác </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-PARLAY">
                                    <a href="#" class="redirect-item">
                                        Cược Tổng Hợp </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-BETTYPE13">
                                    <a href="#" class="redirect-item">
                                        Giữ Sạch Lưới </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-BETTYPE24">
                                    <a href="#" class="redirect-item">
                                        Cơ Hội Kép </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-BETTYPE26">
                                    <a href="#" class="redirect-item">
                                        Cả Hai/Một/Không Đội Ghi Bàn </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-BETTYPE27">
                                    <a href="#" class="redirect-item">
                                        Cược Thắng Áp Đảo </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-BETTYPE28">
                                    <a href="#" class="redirect-item">
                                        Cược Chấp 3 Chiều </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item " id="menu-BETSANDFORECAST">
                            <a class="withripple menu-opener parent-menu ">
                                <span class="txt-item pull-left txt-betsandforecast">
                                    <span class="icon icon-betsandforecast"></span>
                                    Tổng Cược &amp; Dự Đoán
                                </span>
                                <span class="pull-right icon-arrow-right"></span>
                            </a>
                            <ul class="sub-menu" style="display: none;">
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-HOUL">
                                    <a href="#" class="redirect-item">
                                        Cược chấp/Tài Xỉu/Trực tiếp </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-MONEYLINE">
                                    <a href="#" class="redirect-item">
                                        Moneyline </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-OE1X2DND">
                                    <a href="#" class="redirect-item">
                                        Lẻ/Chẵn + 1x2 + Hòa/Không Hòa </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-FTHTTOTALGOAL">
                                    <a href="#" class="redirect-item">
                                        Tổng Số Bàn Thắng </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-OUTRIGHT">
                                    <a href="#" class="redirect-item">
                                        Cược Thắng </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-HTFT">
                                    <a href="#" class="redirect-item">
                                        H1/Cả Trận </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-FTHTFGLG">
                                    <a href="#" class="redirect-item">
                                        Bàn Thắng Đầu/Cuối </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item "
                                    id="sub-menu-HOMEDRAWAWAYNOBET">
                                    <a href="#" class="redirect-item">
                                        Nhà/Hoà/Khách Không Tính </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-NUMBERGAME">
                                    <a href="#" class="redirect-item">
                                        Number Game </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-LBL1X2">
                                    <a href="#" class="redirect-item">
                                        1 X 2 </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-SCOREMAP">
                                    <a href="#" class="redirect-item">
                                        Score Map </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-NG2">
                                    <a href="#" class="redirect-item">
                                        Lô Đề </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item" id="menu-TRANSFER">
                            <a class="withripple menu-opener parent-menu redirect-item" href="#" target="main">
                                <span class="txt-item pull-left"><span class="icon icon-transfer"></span>Chuyển
                                    khoản</span>
                            </a>
                        </li>
                        <li class="menu-item " id="menu-VIEWLOG">
                            <a class="withripple menu-opener parent-menu ">
                                <span class="txt-item pull-left txt-viewlog">
                                    <span class="icon icon-viewlog"></span>
                                    Nhật ký
                                </span>
                                <span class="pull-right icon-arrow-right"></span>
                            </a>
                            <ul class="sub-menu" style="display: none;">
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-SETTING">
                                    <a href="#" class="redirect-item">
                                        Thiết lập </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-STATUS">
                                    <a href="#" class="redirect-item">
                                        Trạng thái </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-CREDIT">
                                    <a href="#" class="redirect-item">
                                        Tín dụng </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-LOGIN">
                                    <a href="#" class="redirect-item">
                                        Đăng nhập </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item " id="menu-ANNOUNCEMENTS">
                            <a class="withripple menu-opener parent-menu ">
                                <span class="txt-item pull-left txt-announcements">
                                    <span class="icon icon-announcements"></span>
                                    Thông Báo
                                </span>
                                <span class="pull-right icon-arrow-right"></span>
                            </a>
                            <ul class="sub-menu" style="display: none;">
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-NORMAL">
                                    <a href="#" class="redirect-item">
                                        Chung </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-SPECIAL">
                                    <a href="#" class="redirect-item">
                                        Đặc biệt </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-SYSTEMUPDATE">
                                    <a href="#" class="redirect-item">
                                        Hệ thống </a>
                                </li>
                                <li data-url="javscript:void(0)" class="sub-menu-item " id="sub-menu-PERSONALMESSAGE">
                                    <a href="#" class="redirect-item">
                                        Tin nhắn cá nhân </a>
                                </li>
                            </ul>
                        </li>
                        @if ($authUser->can('edit_keo_*'))
                            <li class="menu-item " id="menu-Bleft_Parent">
                                <a class="withripple menu-opener parent-menu">
                                    <span class="txt-item pull-left txt-announcements">
                                        <span class="icon icon-announcements"></span>
                                        Quản trị
                                    </span>
                                    <span class="pull-right icon-arrow-right"></span>
                                </a>
                                <ul class="sub-menu" style="display: none;">
                                    @if ($authUser->can('edit_keo_treo'))
                                        <li data-url="/portal/event_pending" class="sub-menu-item "
                                            id="sub-menu-NORMAL">
                                            <a href="#" class="redirect-item">
                                                Xử lý kèo treo </a>
                                        </li>
                                    @endif
                                    @if ($authUser->can('edit_keo_treo'))
                                        <li data-url="/portal/bet_pending" class="sub-menu-item "
                                            id="sub-menu-NORMAL">
                                            <a href="#" class="redirect-item">
                                                Xử lý kèo cược (bet) treo </a>
                                        </li>
                                    @endif
                                    @if ($authUser->can('edit_keo_dang_da'))
                                        <li data-url="/portal/bets_all" class="sub-menu-item " id="sub-menu-NORMAL">
                                            <a href="#" class="redirect-item">
                                                Sửa kèo đang đá </a>
                                        </li>
                                    @endif
                                    @if ($authUser->can('edit_keo_sao_ke'))
                                        <li data-url="/portal/bets_in_saoke" class="sub-menu-item "
                                            id="sub-menu-NORMAL">
                                            <a href="#" class="redirect-item">
                                                Sửa kèo trong sao kê </a>
                                        </li>
                                    @endif
                                    @if ($authUser->can('edit_keo_logs'))
                                        <li data-url="/portal/logs" class="sub-menu-item " id="sub-menu-NORMAL">
                                            <a href="#" class="redirect-item">
                                                Lịch sử hoạt động </a>
                                        </li>
                                    @endif
                                    @if ($authUser->isAdmin())
                                        <li data-url="/portal/match/list" class="sub-menu-item " id="sub-menu-NORMAL">
                                            <a href="#" class="redirect-item">
                                                Danh sách trận ảo </a>
                                        </li>
                                        <li data-url="/portal/delete_data" class="sub-menu-item " id="sub-menu-NORMAL">
                                            <a href="#" class="redirect-item">
                                                Xóa dữ liệu </a>
                                        </li>
                                        <li data-url="/portal/alerts" class="sub-menu-item " id="sub-menu-NORMAL">
                                            <a href="#" class="redirect-item">
                                                Thông báo mật </a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        @endif
                    </ul>
                    <div class="extra-box">
                        <span class="icon icon-user" id="user-icon"></span>
                    </div>
                </div>
            </div>
            <div id="mCSB_1_scrollbar_vertical"
                class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical"
                style="display: none;">
                <div class="mCSB_draggerContainer">
                    <div id="mCSB_1_dragger_vertical" class="mCSB_dragger"
                        style="position: absolute; min-height: 50px; height: 0px; top: 0px;"
                        oncontextmenu="return false;">
                        <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                    </div>
                    <div class="mCSB_draggerRail"></div>
                </div>
            </div>
        </section> <input id="AssetCommonCssLink" name="AssetCommonCssLink" type="hidden"
            value="<link href=&quot;/assets/bundles/common/common.min.css?v=2021100500&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;>">
        <!--[if (gt IE 8)|!(IE)]><!-->
        <section id="account-info-tab"
            class="accountinfo-container mCustomScrollbar _mCS_2 mCS-autoHide mCS_no_scrollbar"
            data-mcs-theme="minimal-dark" style="position: relative; overflow: visible;">
            <div id="mCSB_2" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical mCSB_outside"
                style="max-height: 1130px;" tabindex="0">
                <div id="mCSB_2_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y"
                    style="position:relative; top:0; left:0;" dir="ltr">
                    <iframe frameborder="0" id="accountinfo-content" name="menu" marginwidth="0" marginheight="0"
                        allowtransparency="true" class="accinfo-content" scrolling="auto"></iframe>
                </div>
            </div>
            <div id="mCSB_2_scrollbar_vertical"
                class="mCSB_scrollTools mCSB_2_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical"
                style="display: none;">
                <div class="mCSB_draggerContainer">
                    <div id="mCSB_2_dragger_vertical" class="mCSB_dragger"
                        style="position: absolute; min-height: 50px; top: 0px;" oncontextmenu="return false;">
                        <div class="mCSB_dragger_bar" style="line-height: 50px;"></div>
                    </div>
                    <div class="mCSB_draggerRail"></div>
                </div>
            </div>
        </section>
        <!--<![endif]-->
        <!--[if lt IE 9]>
  <section id="account-info-tab" class="accountinfo-container">
   <iframe frameborder="0" id="accountinfo-content"
     name="menu" marginwidth="0" marginheight="0" allowtransparency="true" class="accinfo-content" scrolling="auto"></iframe>
  </section>
 <![endif]-->
    </nav>
</aside>
