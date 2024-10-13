<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<link href="/assets/admin/css/sup_master/Agent.css" rel="stylesheet" type="text/css">
<link href="/assets/admin/css/sup_master/PortalPage.css" rel="Stylesheet" type="text/css">
<link href="/assets/admin/css/sup_master/style.css" rel="Stylesheet" type="text/css">
<link rel="stylesheet" href="{{ elixir('portal/css/app.css') }}"/>
</head>
<body marginwidth="0" marginheight="0">
@include('portal.messsage')
<div class="container-content">
      <div class="row">
            <div class="balance-container">
                <div id="balanceInfo" style="display: block;">
            <div class="row title"><span class="icon-balanceinfo"></span>TÀI KHOẢN</div>
            <ul class="list-group">
                <li>
                    <span class="label" style="text-transform: capitalize;">{{$authUser->user_type}}</span>
                    <span class="pull-right bold">{{$authUser->username}}</span>
                </li>
                <li>
                    <span class="label">Tiền Tệ </span>
                    <span class="pull-right bold">UT</span>
                </li>
                <li>
                    <span class="label">Số dư tài khoản</span>
                    <span class="pull-right bold">{{$authUser->wallet}}</span>
                </li>
                <li>
                    <span class="label">Số dư tài khoản đến hết  hôm qua</span>
                    <span class="pull-right bold">0.00</span>
                </li>
                <li>
                    <span class="label">Tổng số tiền giao dịch</span>
                    <span class="pull-right bold">0.00</span>
                </li>
                <li>
                    <span class="label">Tổng tiền giao dịch đến hết hôm qua</span>
                    <span class="pull-right bold">0.00</span>
                </li>
                <li>
                    <span class="label">Thắng thua trong ngày (01/20/2018)</span>
                    <span class="pull-right bold">0.00</span>
                </li>
                <li>
                    <span class="label">Thắng thua hôm qua (01/19/2018)</span>
                    <span class="pull-right bold">0.00</span>
                </li>
                <li>
                    <span class="label">Hạn mức tín dụng được cấp</span>
                    <span class="pull-right bold">{{$authUser->credit_line}}</span>
                </li>
                <li>
                    <span class="label">Tổng mức tín dụng của <span style="text-transform: capitalize;">{{$authUser->getNextType()}}</span></span>
                    <span class="pull-right bold">{{format_number_pretty($authUser->credit_line - $authUser->wallet)}}</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="statistic-container">
            <div id="statistic" style="display: block;">
                <div class="row title"><span class="icon-statistics"></span>THỐNG KÊ CỦA BẠN</div>
                <ul class="list-group"><li>
                    <span class="label">Số tiền chưa xử lý của Supermaster</span><span class="pull-right bold txt-special"><span class="bl_underdog">0.00</span></span></li>
                <li><span class="label">Tổng số  tiền chưa xử lý</span><span class="pull-right bold txt-special"><span class="bl_underdog">0.00</span></span>
                </li>
                <!-- <li><span class="label">Tổng số tiền chuyển khoản /chưa xử lý bên Casino</span><span class="pull-right bold txt-special"><span class="bl_underdog">0.00</span>|<span class="bl_underdog">0.00</span></span>
                </li>
                <li><span class="label">Tổng số tiền chuyển khoản /chưa xử lý bên Poker</span><span class="pull-right bold txt-special"><span class="bl_underdog">0.00</span>|<span class="bl_underdog">0.00</span></span>
                </li> -->
                <li><span id="ACST" onclick="toogleDiv(&#39;ACST&#39;, &#39;ACS&#39;, &#39;imgACS&#39;, null, &#39;highest&#39;, &#39;newmem&#39;, &#39;imgHighest&#39;, &#39;imgNewmem&#39;, &#39;top10&#39;, &#39;imgTop10&#39;);" class="sectionClose">Tổng số tài khoản hiện đang: Kích hoạt / Khóa / Đình chỉ<span class="icon-plus imgLoading" id="imgACS"></span></span><div onmouseover="divOnMouseOver();" onmouseout="divOnMouseOut();" id="ACS" class="divCollapse3" style="display: none; position: absolute;"><table class="portalTable" style="width: 100%"><tbody><tr class="oddRow"><td class="l" id="td1">Member</td><td class="r rightACS"><span class="active">0</span>|<span class="closed">0</span>|<span class="suspended">0</span></td></tr></tbody></table></div></li><li><span id="top10T" onclick="toogleDiv(&#39;top10T&#39;, &#39;top10&#39;, &#39;imgTop10&#39;, null, &#39;highest&#39;, &#39;newmem&#39;, &#39;imgHighest&#39;, &#39;imgNewmem&#39;, &#39;ACS&#39;, &#39;imgACS&#39;);" class="sectionClose">10 thành viên thắng cược nhiều nhất trong tháng<span class="icon-plus imgLoading" id="imgTop10"></span></span><div onmouseover="divOnMouseOver();" onmouseout="divOnMouseOut();" class="divCollapse" id="top10" style="display: none; position: absolute;"></div></li><li><span id="highestT" onclick="toogleDiv(&#39;highestT&#39;, &#39;highest&#39;, &#39;imgHighest&#39;, null, &#39;top10&#39;, &#39;newmem&#39;, &#39;imgTop10&#39;, &#39;imgNewmem&#39;, &#39;ACS&#39;, &#39;imgACS&#39;);" class="sectionClose">Thành viên đặt cược nhiều nhất trong tháng<span class="icon-plus imgLoading" id="imgHighest"></span></span><div onmouseover="divOnMouseOver();" onmouseout="divOnMouseOut();" class="divCollapse" id="highest" style="display: none; position: absolute;"></div></li><li><span id="newmemT" onclick="toogleDiv(&#39;newmemT&#39;, &#39;newmem&#39;, &#39;imgNewmem&#39;, null, &#39;top10&#39;, &#39;highest&#39;, &#39;imgTop10&#39;, &#39;imgHighest&#39;, &#39;ACS&#39;, &#39;imgACS&#39;);" class="sectionClose">Thành viên mới trong tháng: <span id="newmemVal" class="b">0</span><span class="icon-plus imgLoading" id="imgNewmem"></span></span><div id="newmemH" onmouseover="divOnMouseOver();" onmouseout="divOnMouseOut();" class="popup" style="display: none;"><table class="portalTable newMemWidth"><tbody><tr><th class="c">Tài khoản</th><th class="c newMemCol">Hạn mức được cấp</th><th class="c newMemCol">Ngày tạo</th></tr><tr><td colspan="3" class="c">Thông tin chưa được cập nhật</td></tr></tbody></table><div class="divCollapse2" id="newmem" style="display: none; position: absolute;"></div></div></li></ul>
            </div>       
          </div>
      </div>
      <div class="row"><div id="announcement" style="display: block;"><div class="row title"><span class="icon-announcements"></span><span class="gotoMsg" onclick="openMsg()">THÔNG BÁO</span></div><div id="divAnnouncement"><div class="divGroupDate">3/29/2016</div><div class="oddRow public" id="577405" onclick="ToggleAnnouncementContent(&#39;577405&#39;);" isread="1"><div class="divTime"><span class="toogleIcon icon-plus"></span><span>1:22:30 PM</span></div><div class="divContent"><div class="text_exposed_show">Attn:[E Sports] Due to wrong result displayed, the match between "Prodota Gaming (Map 3) -vs- Team A ...</div><div class="text_exposed_hide">Attn:[E Sports] Due to wrong result displayed, the match between "Prodota Gaming (Map 3) -vs- Team Alternate (Map 3)" [Dota 2 - Prodota Cup Europe (Map 3) - 29/3] has been re-settled. The actual result is "0-1" instead of "1-0". Kindly double check your statement again. Sorry for the inconvenience caused!    </div></div></div><div class="evenRow public" id="577387" onclick="ToggleAnnouncementContent(&#39;577387&#39;);" isread="1"><div class="divTime"><span class="toogleIcon icon-plus"></span><span>11:08:17 AM</span></div><div class="divContent"><div class="text_exposed_show">Attn:[Soccer] The match between "China -vs- Qatar" [2018 FIFA WORLD CUP ASIA QUALIFIERS - 29/3*Live* ...</div><div class="text_exposed_hide">Attn:[Soccer] The match between "China -vs- Qatar" [2018 FIFA WORLD CUP ASIA QUALIFIERS - 29/3*Live*], we faced disruption in our broadcast from 29/3 9:21:54 PM - 9:25:22 PM. As a result tickets placed during the disrupted period were REJECTED. Sorry for the inconvenience caused!    </div></div></div><div class="oddRow public" id="577384" onclick="ToggleAnnouncementContent(&#39;577384&#39;);" isread="1"><div class="divTime"><span class="toogleIcon icon-plus"></span><span>10:59:19 AM</span></div><div class="divContent"><div class="text_exposed_show">Attn:[Soccer] The match between "HNK Cibalia -vs- NK Imotski" [CROATIA 2ND DIVISION - 29/3*Live*], w ...</div><div class="text_exposed_hide">Attn:[Soccer] The match between "HNK Cibalia -vs- NK Imotski" [CROATIA 2ND DIVISION - 29/3*Live*], we faced disruption in our broadcast from 29/3 10:44:45 PM - 10:48:50 PM. As a result tickets placed during the disrupted period were REJECTED. Sorry for the inconvenience caused!    </div></div></div><div class="evenRow public" id="577288" onclick="ToggleAnnouncementContent(&#39;577288&#39;);" isread="1"><div class="divTime"><span class="toogleIcon icon-plus"></span><span>1:54:47 AM</span></div><div class="divContent"><div class="text_exposed_show">Attn:[Snooker/Pool] Due to player [Stuart Carrington] withdrawal, [China Open (Best of 9 Frames) - 2 ...</div><div class="text_exposed_hide">Attn:[Snooker/Pool] Due to player [Stuart Carrington] withdrawal, [China Open (Best of 9 Frames) - 29/3], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!    </div></div></div><div class="oddRow public" id="577273" onclick="ToggleAnnouncementContent(&#39;577273&#39;);" isread="1"><div class="divTime"><span class="toogleIcon icon-plus"></span><span>12:25:16 AM</span></div><div class="divContent"><div class="text_exposed_show">Attn:[Basketball] Due to Player [Rudy Gay (Kings)] did not participate, [*NBA BASKETBALL - Specials  ...</div><div class="text_exposed_hide">Attn:[Basketball] Due to Player [Rudy Gay (Kings)] did not participate, [*NBA BASKETBALL - Specials (Most Points Scored) - 28/3]. All bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!    </div></div></div><div class="divGroupDate">3/28/2016</div><div class="evenRow public" id="577256" onclick="ToggleAnnouncementContent(&#39;577256&#39;);" isread="1"><div class="divTime"><span class="toogleIcon icon-plus"></span><span>7:47:40 PM</span></div><div class="divContent"><div class="text_exposed_show">Attn:[Number Game] Due to technical error, all bets placed on [Number Game Event #04927 - 28/3] are  ...</div><div class="text_exposed_hide">Attn:[Number Game] Due to technical error, all bets placed on [Number Game Event #04927 - 28/3] are considered REFUNDED. Sorry for the inconvenience caused!    </div></div></div><div class="oddRow public" id="577254" onclick="ToggleAnnouncementContent(&#39;577254&#39;);" isread="1"><div class="divTime"><span class="toogleIcon icon-plus"></span><span>7:41:03 PM</span></div><div class="divContent"><div class="text_exposed_show">Attn:[Number Game] Due to technical error, all bets placed on [Number Game Event #04926 - 28/3] are  ...</div><div class="text_exposed_hide">Attn:[Number Game] Due to technical error, all bets placed on [Number Game Event #04926 - 28/3] are considered REFUNDED. Sorry for the inconvenience caused!    </div></div></div><div class="evenRow public" id="577252" onclick="ToggleAnnouncementContent(&#39;577252&#39;);" isread="1"><div class="divTime"><span class="toogleIcon icon-plus"></span><span>7:40:28 PM</span></div><div class="divContent"><div class="text_exposed_show">    Attn:[Number Game] Due to technical error, all bets placed on "3rd Ball" [Number Game Event #04925  ...</div><div class="text_exposed_hide">    Attn:[Number Game] Due to technical error, all bets placed on "3rd Ball" [Number Game Event #04925 - 28/3] are considered REFUNDED. Sorry for the inconvenience caused!    </div></div></div><div class="oddRow public" id="577249" onclick="ToggleAnnouncementContent(&#39;577249&#39;);" isread="1"><div class="divTime"><span class="toogleIcon icon-plus"></span><span>5:37:18 PM</span></div><div class="divContent"><div class="text_exposed_show">Attn:[E Sports] Due to technical error, "Team Empire -vs- London Conspiracy" [Dota 2 - DreamLeague ( ...</div><div class="text_exposed_hide">Attn:[E Sports] Due to technical error, "Team Empire -vs- London Conspiracy" [Dota 2 - DreamLeague (Series Winner) - 28/3*Live*]. All bets placed from 29/3 3:01:05 AM - 5:26:22 AM are considered REJECTED. Sorry for the inconvenience caused!</div></div></div></div></div></div>
  </div>
</body></html>