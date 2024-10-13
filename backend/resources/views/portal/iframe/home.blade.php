<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="/site-main/favico.ico" />
    <link href="/assets/admin/v2/css/common.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/v2/css/dashboard-agent.min.css?v=1.0.6830.19091" rel="stylesheet" type="text/css">
    <link href="/assets/admin/v2/css/default-home.min.css?v=1.0.6830.19091" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="scroll-tabs">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active" id="balance-tab">
                <a href="#balance" aria-controls="home" role="tab" data-toggle="tab">Tài Khoản</a>
            </li>
            <li role="presentation" id="stats-tab">
                <a href="#stats" aria-controls="home" role="tab" data-toggle="tab">Thống kê</a>
            </li>
            <li role="presentation" id="notice-tab">
                <a href="#notice" aria-controls="home" role="tab" data-toggle="tab">Thông báo</a>
            </li>
                <li id="memberrequest-tab">
                    <a href="#member-requests" aria-controls="home" role="tab" data-toggle="tab">
                        <span>Chơi Thử</span>
                        <span class="new-request">(0)</span>
                        <span class="badge-title">Mới</span>
                        <span id="icon-help-play-for-fun" class="icon-information-outline"></span>
                    </a>
                </li>
        </ul>
    </div>
    <div class="tab-content" style="">
        <div role="tabpanel" class="tab-pane active balance-info" id="balance">
            



<div class="container">
    <div class="panel-title"><span class="icon-balanceinfo"></span>Tài Khoản</div>
        <div class="row">
        <div class="col-xs-7">{{$authUser->user_type}}</div>
        <div class="col-xs-5 value"><strong>{{$authUser->username}}</strong></div>
    </div>

        <div class="row">
        <div class="col-xs-7">Tiền tệ</div>
        <div class="col-xs-5 value"><strong>UT</strong></div>
    </div>


    <div class="group-title">Tài Khoản</div>
        <div class="row">
        <div class="col-xs-7">Số dư tài khoản</div>
        <div class="col-xs-5 value ">
                <strong>{{$authUser->wallet}}</strong>
        </div>
    </div>

        <div class="row">
        <div class="col-xs-7">Số dư tài khoản đến hết  hôm qua</div>
        <div class="col-xs-5 value ">
                <strong>0.00</strong>
        </div>
    </div>

        <div class="row">
        <div class="col-xs-7">Tổng số tiền giao dịch</div>
        <div class="col-xs-5 value ">
                <strong>0.00</strong>
        </div>
    </div>

        <div class="row">
        <div class="col-xs-7">Tổng tiền giao dịch đến hết hôm qua</div>
        <div class="col-xs-5 value ">
                <strong>0.00</strong>
        </div>
    </div>

    <style>
        .color-red {
            color: red!important;
        }
    </style>
    <div class="group-title">Thắng thua</div>
        <div class="row">
        <div class="col-xs-7">Thắng thua trong ngày ({{$today}})</div>
        <div class="col-xs-5 value ">
                <a href="{!! route('portal.agent.win_lose_details', ['start_date' => $today, 'end_date' => $today]) !!}" class="btn-link {{$total_today > 0 ? '' : 'color-red'}}">{{$total_today}}</a>
        </div>
    </div>

        <div class="row">
        <div class="col-xs-7">Thắng thua hôm qua ({{$yesterday}})</div>
        <div class="col-xs-5 value ">
                <a href="{!! route('portal.agent.win_lose_details', ['start_date' => $yesterday, 'end_date' => $yesterday]) !!}" class="btn-link {{$total_yesterday > 0 ? '' : 'color-red'}}">{{$total_yesterday}}</a>
        </div>
    </div>


    <div class="group-title">
        Credit
    </div>
        <div class="row">
        <div class="col-xs-7">Tổng hạn mức tín dụng của  Agent</div>
        <div class="col-xs-5 value ">
                <strong>{{$authUser->credit_line}}</strong>
        </div>
    </div>

        <div class="row">
        <div class="col-xs-7">Tổng mức tín dụng của {{$authUser->getNextType()}}</div>
        <div class="col-xs-5 value ">
                <strong>{{format_number_pretty($authUser->credit_line - $authUser->wallet)}}</strong>
        </div>
    </div>

</div>

        </div>
        <div role="tabpanel" class="tab-pane statistic" id="stats" action-url="/site-main/Statistics">




<div class="container">
    <div class="panel-title"><span class="icon-statistics"></span>Thống kê của bạn</div>
    <div class="group-title">Tiền chưa xử lý</div>
        <div class="row">
        <div class="col-xs-7">Tiền chưa xử lý của Agent</div>
        <div class="col-xs-5 value ">
                <strong>0.00</strong>
        </div>
    </div>

        <div class="row">
        <div class="col-xs-7">Tổng tiền chưa xử lý</div>
        <div class="col-xs-5 value ">
                <strong>0.00</strong>
        </div>
    </div>


    <div class="group-title">Member Info</div>

    <div class="row">
        <div class="col-xs-7 lable">Member</div>
        <div class="col-xs-5 value">
            <strong data-toggle="tooltip" data-placement="top" title="" data-original-title="<div class='nowrap'>Hoạt Động: <span class='active'>0</span></div><div class='nowrap'>Khóa: <span class='closed'>3</span></div><div class='nowrap'>Đình Chỉ: <span class='suspended'>0</span></div>">
                <span class="active">0</span>|
                <span class="closed">0</span>|
                <span class="suspended">0</span>
            </strong>
        </div>
    </div>

        <div class="row">
        <div class="col-xs-12 label dropdown">
            <span id="listTopWinningMembers" class="dropdown-toggle pointer" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" action-url="/site-main/Statistics/TopWinningMembers">
                10 member thắng nhiều nhất trong tháng <span class="icon icon-plus"></span>
            </span>
            <div class="dropdown-menu dropdown-stast" aria-labelledby="10 member thắng nhiều nhất trong tháng">
                <div class="text-center"><span class="block-icon-small "></span></div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-xs-12 label dropdown">
            <span id="listTopTurnoverMembers" class="dropdown-toggle pointer" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" action-url="/site-main/Statistics/TopTurnoverMembers">
                Member đặt cược nhiều nhất trong tháng <span class="icon icon-plus"></span>
            </span>
            <div class="dropdown-menu dropdown-stast" aria-labelledby="Member đặt cược nhiều nhất trong tháng">
                <div class="text-center"><span class="block-icon-small "></span></div>
            </div>
        </div>
    </div>

        <div class="row">
        <div class="col-xs-12 label dropdown">
            <span id="listNewMembers" class="dropdown-toggle pointer" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" action-url="/site-main/Statistics/NewMembers">
                Member mới trong tháng: 0 <span class="icon icon-plus"></span>
            </span>
            <div class="dropdown-menu dropdown-stast" aria-labelledby="Member mới trong tháng: 0">
                <div class="text-center"><span class="block-icon-small "></span></div>
            </div>
        </div>
    </div>

</div></div>
        <div role="tabpanel" class="tab-pane notice" id="notice" action-url="/site-messages/PortalMessage/Index">
<div class="notice-container">
    <div class="panel-title"><span class="icon-announcements"></span>Thông báo</div>
    
<div class="message-content">
                <div class="group-date">9/19/2018</div>
            <div class="msg-contents">
                <div id="791169" class="message pointer  ">
                    <div class="time">
                        <span class="icon icon-plus"></span>
                        8:37:07 AM
                    </div>
                    <div class="content short-content ">
                        Attn:[Soccer] The match between "Nakhon Ratchasima -vs- Chiangrai United" [THAILAND LEAGUE CUP - 19/...
                    </div>
                    <div class="content full-content ">
                        Attn:[Soccer] The match between "Nakhon Ratchasima -vs- Chiangrai United" [THAILAND LEAGUE CUP - 19/9*Live*], we faced disruption in our broadcast from 19/9 8:22:11 PM - 8:25:49 PM. As a result tickets placed during the disrupted period were REJECTED. Sorry for the inconvenience caused!     
                    </div>
                </div>
            </div>
            <div class="msg-contents">
                <div id="791154" class="message pointer  ">
                    <div class="time">
                        <span class="icon icon-plus"></span>
                        7:57:39 AM
                    </div>
                    <div class="content short-content ">
                        Attn:[Tennis] Due to Player retirement, "Mikhail Kukushkin (KAZ) -vs- Denis Istomin (UZB)" [ATP - St...
                    </div>
                    <div class="content full-content ">
                        Attn:[Tennis] Due to Player retirement, "Mikhail Kukushkin (KAZ) -vs- Denis Istomin (UZB)" [ATP - St.Petersburg Open - 19/9], all bets taken are considered REFUNDED (Except Set 1 Winner). Parlay counted as one(1). Thank you!    
                    </div>
                </div>
            </div>
            <div class="msg-contents">
                <div id="791143" class="message pointer  ">
                    <div class="time">
                        <span class="icon icon-plus"></span>
                        6:56:59 AM
                    </div>
                    <div class="content short-content ">
                        Attn:[Cricket] The match between "Assam (N) -vs- Gujarat" &amp; "Haryana (N) -vs- Jharkhand" [Vijay Haza...
                    </div>
                    <div class="content full-content ">
                        Attn:[Cricket] The match between "Assam (N) -vs- Gujarat" &amp; "Haryana (N) -vs- Jharkhand" [Vijay Hazare Trophy - 19/9] has been abandoned. All bets taken are REFUNDED. Parlay counted as (1). Thank you!
                    </div>
                </div>
            </div>
            <div class="msg-contents">
                <div id="791118" class="message pointer  ">
                    <div class="time">
                        <span class="icon icon-plus"></span>
                        5:20:48 AM
                    </div>
                    <div class="content short-content ">
                        Attn:[Tennis] Due to Player retirement, "Arantxa Rus (NED)/Nina Stojanovic (SRB) -vs- Dalila Jakupov...
                    </div>
                    <div class="content full-content ">
                        Attn:[Tennis] Due to Player retirement, "Arantxa Rus (NED)/Nina Stojanovic (SRB) -vs- Dalila Jakupovic (SLO)/Darija Jurak (CRO)" [Women Doubles - Korea Open - 19/9], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!
                    </div>
                </div>
            </div>
            <div class="msg-contents">
                <div id="791086" class="message pointer  ">
                    <div class="time">
                        <span class="icon icon-plus"></span>
                        2:14:53 AM
                    </div>
                    <div class="content short-content ">
                        Attn:[Badminton] Due to player [Vaibhaav . (IND)/Prakash Raj (IND)] Withdrawal, [Bangka Belitung Ind...
                    </div>
                    <div class="content full-content ">
                        Attn:[Badminton] Due to player [Vaibhaav . (IND)/Prakash Raj (IND)] Withdrawal, [Bangka Belitung Indonesia Masters Men Doubles (Set Handicap) - 19/9], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you! 
                    </div>
                </div>
            </div>
            <div class="msg-contents">
                <div id="791083" class="message pointer  ">
                    <div class="time">
                        <span class="icon icon-plus"></span>
                        1:48:36 AM
                    </div>
                    <div class="content short-content ">
                        Attn:[Tennis] Due to player [Jennifer Brady (USA)] Withdrawal, [WTA - Guangzhou International Open -...
                    </div>
                    <div class="content full-content ">
                        Attn:[Tennis] Due to player [Jennifer Brady (USA)] Withdrawal, [WTA - Guangzhou International Open - 19/9], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!    
                    </div>
                </div>
            </div>
                <div class="group-date">9/18/2018</div>
            <div class="msg-contents">
                <div id="791059" class="message pointer  ">
                    <div class="time">
                        <span class="icon icon-plus"></span>
                        9:55:17 PM
                    </div>
                    <div class="content short-content ">
                        Attn:[E-Sports] The match between "Bravado Gaming (Map 2) -vs- lmfao (Map 2)" [CS:GO - Esports Champ...
                    </div>
                    <div class="content full-content ">
                        Attn:[E-Sports] The match between "Bravado Gaming (Map 2) -vs- lmfao (Map 2)" [CS:GO - Esports Championship Series (Map 2) - 18/9] has been cancelled as Official announced "Bravado Gaming" as the winner. Therefore, all bets taken are considered REFUNDED. Thank you!   
                    </div>
                </div>
            </div>
            <div class="msg-contents">
                <div id="791046" class="message pointer  ">
                    <div class="time">
                        <span class="icon icon-plus"></span>
                        6:33:47 PM
                    </div>
                    <div class="content short-content ">
                            Attn:[E-Sports] The match between "IRS.R -vs- Athletico Esports", "Athletico Esports -vs- IRS.R" [...
                    </div>
                    <div class="content full-content ">
                            Attn:[E-Sports] The match between "IRS.R -vs- Athletico Esports", "Athletico Esports -vs- IRS.R" [Dota 2 - ESL Australia &amp; NZ Championship - 18/9], "Grayhound Gaming -vs- Chiefs eSports Club", "MC E-Sports -vs- Tainted Minds" &amp; "Legacy eSports -vs- Breakaway" [CS:GO - ESEA - 18/9] have been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!    
                    </div>
                </div>
            </div>
            <div class="msg-contents">
                <div id="790974" class="message pointer  ">
                    <div class="time">
                        <span class="icon icon-plus"></span>
                        10:42:58 AM
                    </div>
                    <div class="content short-content ">
                        Attn:[Soccer] The match between "Balikesirspor -vs- Umraniyespor" [TURKEY FIRST LEAGUE - 17/9] has b...
                    </div>
                    <div class="content full-content ">
                        Attn:[Soccer] The match between "Balikesirspor -vs- Umraniyespor" [TURKEY FIRST LEAGUE - 17/9] has been suspended after 1st half, all bets placed in Full Time market are considered REFUNDED (Except 1st half and those products which have been determined the win loss). Parlay counted as one (1). Thank you! 
                    </div>
                </div>
            </div>
            <div class="msg-contents">
                <div id="790968" class="message pointer  ">
                    <div class="time">
                        <span class="icon icon-plus"></span>
                        10:26:35 AM
                    </div>
                    <div class="content short-content ">
                        Attn:[Tennis] Due to Player replacement, the match between "Marcos Baghdatis (CYP) -vs- Lukas Lacko ...
                    </div>
                    <div class="content full-content ">
                        Attn:[Tennis] Due to Player replacement, the match between "Marcos Baghdatis (CYP) -vs- Lukas Lacko (SVK)" [ATP - St.Petersburg Open - 18/9] has been replaced to "Ruben Bemelmans (BEL) -vs- Lukas Lacko (SVK)". All bets taken are considered REFUNDED. Parlay counted as one(1). Thank you! 
 
                    </div>
                </div>
            </div>
</div>

    <div class="more-info" totalmsg="20">
        Thêm
        <span class="icon-arrow-down icon-more"></span>
    </div>
</div></div>
            <div role="tabpanel" class="tab-pane member-requests" id="member-requests" action-url="/site-main/MemberRequests"><div class="container">
    <div class="panel-title">
        <span class="icon-dropbox"></span>
        <span>Chơi Thử</span>
        <span class="new-request">(0)</span>
        <span id="icon-help-play-for-fun" class="icon-information-outline"></span>
        <span class="badge-title">Mới</span>
    </div>
    <div class="panel-body">
        <div>
                <div class="col-xs-12 center">Thông tin chưa được cập nhật</div>

        </div>

    </div>
</div>
<input data-val="true" data-val-number="The field TotalRequest must be a number." data-val-required="The TotalRequest field is required." id="totalRequest" name="totalRequest" type="hidden" value="0">
<input id="GuidelineUrl" name="GuidelineUrl" type="hidden" value="/site-main/MemberRequests/Guidelines">
<input id="PlayForFunGuide" name="PlayForFunGuide" type="hidden" value="Chơi thử - Hướng dẫn"></div>
    </div>
    <input id="oldMainRootPath" name="oldMainRootPath" type="hidden" value="/ex-main/">
<input id="mainRootPath" name="mainRootPath" type="hidden" value="/site-main/">
    <!--[if IE 8]><!-->
</body>
</html>
