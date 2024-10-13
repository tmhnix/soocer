<!-- <link rel="stylesheet" href="/portal/css/all.css"> -->
<style type="text/css">
    #marqueeMessage {
        position: absolute;
        display: inline-block;
        top: 5px;
        left: 245px;
        right: 20px;
        overflow: hidden;
        height: 16px;
    }

    #scroller {
        position: absolute;
        white-space: nowrap;
    }

    .HeaderMenu {
        position: relative;
    }

    #button {
        border-style: solid;
        border-width: 1px 1px 0;
        border-color: #cecece;
        height: 57px;
        min-width: 750px;
    }

    #button_main {
        display: block;
        height: 55px;
    }

    .HeaderMenu {
        position: relative;
    }

    .HeaderMenu {
        padding: 0;
        margin: 0;
        font-size: 12px;
    }

    #button_main li {
        display: block;
        float: left;
    }

    #button_main li a.active {
        color: #333;
        margin-top: 0;
        height: 29px;
        background-color: #f9f9f9;
    }

    #button_main li a {
        display: block;
        float: left;
        color: black;
        text-decoration: none;
        padding-left: 12px;
        padding-right: 10px;
        line-height: 29px;
        height: 29px;
        border-right: 1px solid #dfdfdf;
    }
    main{
        margin-top: 30px;
    }
    #header-nav{
            background-image: url("/img/bgg.png");
        }
    @media only screen and (max-width: 600px) {
        .search-table-outter {margin-top:60px}
        #header-nav{
            background-image: url("/img/bggm.png");
        }
    }
</style>
<header class="header" id="header">
    <section class="navbar header-nav m-banner" id="header-nav" style="">
        <span class="icon-collapse icon-hamburger withripple" id="hamburger-icon"></span>
        <ul class="nav navbar-nav list-top">
            <li class="maintenance-box hide" id="um-message-box" title="Thông báo bảo trì">
                <span class="icon-under-maintenance"></span>
            </li>
            <li class="visible-mobile"><span class="icon icon-qr-code-top" title="Tạo Member với mã QR"></span></li>
            <li class="visible-mobile"><span class="icon icon-home"></span></li>
            <li class="visible-mobile"><span class="icon icon-account-search"></span></li>
            <li class="hidden-mobile datetime">
                <span class="icon icon-time"></span>
                <span class="txt-top" id="clock" data-year="<?php echo date('Y') ?>" data-month="<?php echo date('m') ?>" data-day="<?php echo date('d') ?>" data-hour="<?php echo date('H') ?>" data-minute="<?php echo date('i') ?>" data-second="<?php echo date('s') ?>">5:33:39 AM Dec 12, 2021 GMT+7</span>
            </li>
            <li class="hidden-mobile dropdown language">
                <a href="javascript:;" data-target="#" class="dropdown-toggle withripple language-selector-container" data-toggle="dropdown" aria-expanded="false"><span class="icon-flag langFlag-vi-vn"></span>Tiếng Việt<div class="ripple-container"></div></a>
                <ul class="dropdown-menu list-language" id="language" data-currentlanguage="vi-VN">
                    <!-- <li class="en-US"><a class="changelanguage-link" data-value="en-US"><span class="icon-flag langFlag-en-us"></span>English</a></li>
                    <li class="zh-TW"><a class="changelanguage-link" data-value="zh-TW"><span class="icon-flag langFlag-zh-tw"></span>繁體中文</a></li>
                    <li class="zh-CN"><a class="changelanguage-link" data-value="zh-CN"><span class="icon-flag langFlag-zh-cn"></span>简体中文</a></li>
                    <li class="ja-JP"><a class="changelanguage-link" data-value="ja-JP"><span class="icon-flag langFlag-ja-jp"></span>日本語</a></li>
                    <li class="th-TH"><a class="changelanguage-link" data-value="th-TH"><span class="icon-flag langFlag-th-th"></span>ภาษาไทย</a></li>
                    <li class="ko-KR"><a class="changelanguage-link" data-value="ko-KR"><span class="icon-flag langFlag-ko-kr"></span>한국어</a></li> -->
                    <li class="vi-VN"><a class="changelanguage-link" data-value="vi-VN"><span class="icon-flag langFlag-vi-vn"></span>Tiếng Việt</a></li>
                </ul>
            </li>
            <!-- <li class="hidden-mobile dropdown language">
                <a class="icon icon-qr-code-top withripple" title="Tạo Member với mã QR"></a>
            </li> -->
            <li class="notification">
                <a class="icon icon-bell withripple"></a>
                <span id="numberOfNewMessage" class="number-msg badge-title"></span>
            </li>
            <li class="dropdown setting">
                <a id="btn-header-menu" data-target="#" class="dropdown-toggle withripple" data-toggle="dropdown">
                    <span class="icon icon-squares top-right-menu"></span>
                    <span class="profile-avatar">
                        <img id="userPicture" width="50" height="50" src="/assets/admin/images/avatar_default.png" alt="" title="Nhấn vào đây để sửa hình đại diện">
                    </span>
                </a>
                <ul id="header-dropdown-menu" class="dropdown-menu list-setting">
                    <li class="profile-group visible-mobile">
                        <div class="profile-avatar">
                            <a href="/admin/customer/ProfilePicture" target="main" class="img-link">
                                <img id="profile-avatar-image" width="50" height="50" src="{{ asset('/assets/admin/images/avatar_default.png') }}" alt="" title="Nhấn vào đây để sửa hình đại diện">
                            </a>
                        </div>
                        <div class="userinfo">
                            <div class="info level username">
                                {{$authUser->username}}
                            </div>
                            <div class="info level nickname">
                                <div style="font-size: 11px; padding-top: 5px; color: white"> <span id="spanNickNameID">Biệt danh: </span>
                                <a href="javascript:true" class="linkConfigNow" id="linkNickNameID" target="main"> <span style="white-space: nowrap; font-weight: bold"><span id="labelNickname">Cấu hình ngay</span></span></a>
                            </div>
                            </div>
                    </li>
                    <li class="visible-mobile dropdown-submenu language"><a href="javascript:;" data-target="#" class="dropdown-toggle withripple language-selector-container" data-toggle="dropdown"><span class="icon-flag langFlag-vi-vn"></span>Tiếng Việt</a>
                        <ul class="dropdown-menu list-language" id="language" data-currentlanguage="vi-VN" style="display: none;">
                            <!-- <li class="en-US"><a class="changelanguage-link" data-value="en-US"><span class="icon-flag langFlag-en-us"></span>English</a></li>
                            <li class="zh-TW"><a class="changelanguage-link" data-value="zh-TW"><span class="icon-flag langFlag-zh-tw"></span>繁體中文</a></li>
                            <li class="zh-CN"><a class="changelanguage-link" data-value="zh-CN"><span class="icon-flag langFlag-zh-cn"></span>简体中文</a></li>
                            <li class="ja-JP"><a class="changelanguage-link" data-value="ja-JP"><span class="icon-flag langFlag-ja-jp"></span>日本語</a></li>
                            <li class="th-TH"><a class="changelanguage-link" data-value="th-TH"><span class="icon-flag langFlag-th-th"></span>ภาษาไทย</a></li>
                            <li class="ko-KR"><a class="changelanguage-link" data-value="ko-KR"><span class="icon-flag langFlag-ko-kr"></span>한국어</a></li> -->
                            <li class="vi-VN"><a class="changelanguage-link" data-value="vi-VN"><span class="icon-flag langFlag-vi-vn"></span>Tiếng Việt</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)" target="main"><span class="icon icon-account-circle"></span>Hình đại diện</a></li>
                    <li><a href="javascript:void(0)" target="main"><span class="icon icon-lock"></span>Mật khẩu</a></li>
                    <li><a href="javascript:void(0)" target="main"><span class="icon icon-sercuritycode"></span>Mã bảo mật</a></li>
                    <li><a href="javascript:void(0)" target="main"><span class="icon icon-otp"></span>OTP</a></li>
                    <li><a href="javascript:void(0)" target="main"><span class="icon icon-key"></span>Mã Bảo Vệ</a></li>
                    <li class="bg-light">
                        <ul class="list-unstyled">
                            <li class="visible-mobile"><a class="link-logout" href="{!! route('portal.logout') !!}"><span class="icon icon-logout"></span>Đăng Xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="hidden-mobile logout"><a class="icon icon-logout withripple" data-toggle="tooltip" data-placement="bottom" title="Đăng Xuất">
                    <div class="ripple-container"></div>
                </a></li>
        </ul>
    </section>
    <div id="button" style="background: white;">
        <div id="button_main" style="background:white" class="header-msg">
            <ul class="HeaderMenu">
                <li data-url="/portal/agentHome"  class="sub-menu-item "><a id="balance" class="active" href="#">Trang chủ</a></li>
                <li data-url="/portal/chuyenkhoan" class="sub-menu-item "><a id="transfer" href="#" class="">Chuyển khoản</a></li>
                <li data-url="/portal/secure" class="sub-menu-item "><a id="changepass" href="#">Bảo mật</a></li>
                <div id="marqueeMessage">
                    <span id="scroller">
                        <span id="movebets-message" class="maquee movebets-message"></span>
                        <span id="public-message" class="maquee live-message" messagetype="2">
                            <marquee behavior="scroll" direction="left">
                                <font color="red">
                                Do gần đây công ty phát hiện thành viên của nhiều đại lý liên quan các loại hình thức cá cược bất thường khác nhau hoặc Hành vi gian lận ( Đánh hàng theo nhóm. Đánh hàng sập giá, cá cược theo nhóm , buôn com ,sử dụng phần mềm cá cược, bất kỳ hành vi nào ảnh hưởng đến hoạt động bình thường của công ty vv...) Công ty thông báo đến quý đại lý , nếu bất kỳ thành viên nào bị công ty phát hiện và phán quyết rằng có cá cược bất thường ảnh hưởng tới hoạt động bình thường của công ty , Công ty sẽ hủy vé cược bất kể cược đó đã có thắng thua , trước giờ quyết toán của công ty mà không cần thông báo trước , đồng thời , công ty sẽ không chịu trách nhiệm tất cả những thiệt hại gây ra ! Vui lòng chuyển thông tin này cho cấp dưới của bạn, Xin cám ơn.
                                </font>
                            </marquee>
                            <span id="private-message" class="maquee live-message"></span>
                        </span>
                    </span>
                </div>
            </ul>

        </div>
    </div>
    <!-- <section class="header-msg" id="headerMessage">
        <span class="icon icon-home withripple" id="home-icon">
            <div class="ripple-container"></div>
        </span>
        <div id="marqueeMessage">
            <span id="scroller" style="left: -348px;">
                <span id="movebets-message" class="maquee movebets-message"></span>
                <span id="public-message" class="maquee live-message" messagetype="0">Dear Valued Customer: [GDG] Temporarily removed from the Website until further Notice. Sorry for the inconvenience caused. . </span>
                <span id="private-message" class="maquee live-message"></span>
            </span>
        </div>
    </section> -->
</header>