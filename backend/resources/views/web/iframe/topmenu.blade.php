<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="todoApp">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>

<link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/global.css?v=201803080523" rel="stylesheet" type="text/css">
<link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/button.css?v=201612290759" rel="stylesheet" type="text/css">
<link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/jquery.mCustomScrollbar.css?v=201509110753" rel="stylesheet" type="text/css">

<script type="application/javascript" src="{{ elixir('js/web-all.js') }}"></script>
<script type="application/javascript" src="{{ elixir('js/templates.js') }}"></script>
<link rel="stylesheet" href="{{ elixir('css/web-app.css') }}"/>
<link rel="stylesheet" href="{{ elixir('css/web-all.css')}}"/>

<script language="JavaScript" type="text/javascript" src="https://ssl-1-1.bongstatic.com/commJS/M_Util.js?v=201803080523"></script>
<script language="JavaScript" type="text/javascript" src="assets/web/js/M_TopFrame.js"></script>
<script>
  $(document).ready(function () {
    if (CheckIsIpad()) {
      $("html").addClass("isPad");
    }
    if (CheckIsMobileDevice()) {
      $('#LiveCasinoBlock').hide();
    }
  });

  function logoclick() {
    if ($("html").hasClass("rollup")) {
      $("html").removeClass("rollup");
      $('frameset', window.parent.document).eq(0).attr("rows", "95,*,0");
    } else {
      $("html").addClass("rollup");
      $('frameset', window.parent.document).eq(0).attr("rows", "55,*,0");
    }
  }
  $(function () {
    SetMarqueeMsg();
  });

</script>


<script language="JavaScript" type="text/javascript">
var strMonth = new Array('Tháng1', 'Tháng2', 'Tháng3', 'Tháng4', 'Tháng5', 'Tháng6', 'Tháng7', 'Tháng8', 'Tháng9', 'Tháng10', 'Tháng11', 'Tháng12');
var year = 2018;
var month = 3;
var day = 11;
var hrs = 23
var min = 1;
var sec = 51;
var lbl_private_message = "; <font color=green>Tin Nhắn Cá Nhân: </font>";
var pubmsg = "Attn:[E-Sports] Due to Player [Ggoong (Yu Byeong Jun)] did not participate, [League of Legends - LPL Spring (Player Kills on Map 2) - 11/3], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!";
var primsg = "";
var count = 0;
var newmsg = "";//"Tin Nhắn";
var lbl_close = "ĐÓNG";
var _gmtTxt = "+8";
var res_SearchTeamName = "Search Team";
var current = new Date(new Date().toLocaleString("en-US", {timeZone: "Asia/Singapore"}));
Synctime(current.getFullYear(), current.getMonth() + 1, current.getDate(), current.getHours(), current.getMinutes(), current.getSeconds());
function getCount() {
  return count;
}

function clock(){
  sec++
  if (sec==60) {
    sec=0;
    min++;
  }
  if (min==60) {
    min=0;
    hrs++;
  }
  if (hrs==24) {
    hrs=0;
    sec=0;
    min=0;
    day++;
  }
  if (min<10) {
    strmin="0" + min
  }
  else
  {
    strmin=min
  }
  if (sec<10) {
    strsec="0" + sec
  }
  else
  {
    strsec=sec
  }

  if(!isDate(year,month,day))    //to next month
  {
    month++;
    day=1;
  }
  if(!isDate(year,month,day))    //to next year
  {
    year++;
    month=1;
    day=1;
  }

  if (hrs>=12) {
    stra="PM";
  }
  else {
    stra="AM"
  }
  if (hrs>=12) {
    strhrs=hrs-12
  }
  else {
    strhrs=hrs
  }
  var str = strhrs + ":" + strmin + ":" + strsec + " " + stra + "&nbsp;" + strMonth[month-1] + " " + day + ", " + year + " GMT "+_gmtTxt;
  var ttt = document.getElementById("clock");
  ttt.innerHTML = str;
}
setInterval("clock()",1000);
function Synctime(p_year,p_month,p_day,p_hour,p_min,p_sec)
{
  year = p_year;
  month = p_month;
  day = p_day;
  hrs = p_hour;
  min = p_min;
  sec = p_sec;
}

function isDate(TDY,TDM,TDD) //input 3 string
{   
  var BegDate = new Date(parseFloat(TDY)+"/"+TDM+"/"+TDD);  
  if (BegDate.getYear()<200) 
    var TBegYear=BegDate.getYear()+1900
  else var TBegYear=BegDate.getYear()
  if (TBegYear!=parseFloat(TDY) || BegDate.getMonth()+1!=parseFloat(TDM) || BegDate.getDate()!=parseFloat(TDD)) 
    return false; 
  else return true;     
}
</script>
</head>
<body id="element" class="" lang="vn" ng-controller="TopMenuController">
<a name="top" id="top"></a>
<div id="containerHead">
    <div id="noticeUM" class="noticeUM" style="display:none">
        <div class="noticUM__box">
            <div class="noticeUM__img"></div>
            <div id="noticeUM__text" class="noticeUM__text">
                Maintenance will take place today from <strong>1:30 PM</strong> to <strong>4:10 PM</strong> (GMT +8).
            </div>
            <div class="noticeUM__close" onclick="CloseUMMsg()"></div>
        </div>
    </div>
  <div class="headerArea">        
        <div id="bong88logo"></div>
        <div class="Hotnews">
          <div class="containerHotnews">
              <a name="collapse" id="collapse"></a>
              <div id="marquee">
              <div id="marqueeMsg" style="top: -18px;">Attn:[E-Sports] Due to Player [Ggoong (Yu Byeong Jun)] did not participate, [League of Legends - LPL Spring (Player Kills on Map 2) - 11/3], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!</div>
          </div>
              <a href="javascript:OpenWinMessage();" id="btnMoreNews" name="btnMoreNews" class="button more" title="Hiển Thị Tất Cả Tin Nhắn Chung"> + </a>
          </div>
          <div class="content">
            <a id="btnMorePriNewsCount" name="btnMorePriNewsCount" href="javascript:OpenWinPriMessage();" title="Hiển Thị Tất Cả Tin Nhắn Cá Nhân" class="button pMag">0</a>
      </div>
    </div>
        <div id="marqueeMsgHover" class="HotnewsPopup ScrollbarContent mCustomScrollbar _mCS_108 mCS_no_scrollbar" data-mcs-theme="dark" style="display: none;"><div id="mCSB_108" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 75px; padding-left: 20px;"><div id="mCSB_108_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: 0px;" dir="ltr">
            <div class="popupp">Attn:[Soccer] The match between "Colon de Santa Fe -vs- Velez Sarsfield" [ARGENTINA SUPER LIGA - 7/4] has been suspended at 22nd minutes, all bets taken are considered REFUNDED (Except those products which have been determined the win loss). Parlay counted as one(1). Thank you!</div>
        </div><div id="mCSB_108_scrollbar_vertical" class="mCSB_scrollTools mCSB_108_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer" style=""><div id="mCSB_108_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; height: 0px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>

        <div id="Logout">
            <a ng-click="logout()" class="logoutbtn" style="cursor: pointer;"><span>Đăng Xuất</span></a>
        </div>


        <div id="odd_manu">
            <a ng-click="goBetList()" class="button group" title="Bảng Cược" style="cursor: pointer;"><span>Bảng Cược</span></a>
            <a href="{!! route('web.statementDetails') !!}" target="_blank" class="button" style="max-width:40px; width:auto;" title="Đầy đủ"><span>Đầy đủ</span></a>
            <a href="{!! route('web.statement') !!}" target="_blank" class="button" title="Sao Kê"><span>Sao Kê</span></a>
            <a ng-click="goAccount()" target="leftFrame" style="cursor: pointer;" class="button" title="Tài Khoản"><span>Tài Khoản</span></a>

            <a href="{!! route('web.resultFrame') !!}" target="_blank" class="button" title="Kết quả"><span>Kết quả</span></a>
            <a href="{!! route('web.profileChangePwd') !!}" target="_blank" class="button" title="Tùy thích/Tự Chọn"><span>Tùy thích/Tự Chọn</span></a>
    </div>


        <div class="mainMenuArea">
          
  <ul class="mainMenu">
  
    <li><a href="javascript:gotoSportsTodayPage();" class="current" title="Thể Thao" id="top_menu_sportsbook_a"><span>Thể Thao</span></a></li>
    <li id="LiveCasinoBlock">
    <div id="LiveCasinoMenu-New" class="corner-new" style="display:">New</div>
    <a href="#" title="Live Casino" id="top_menu_livecasino_a"><span>Live Casino</span></a>
        <div class="SubSiteNav p03" id="TopLiveCasinoMenuContainer" style="display: none">
          <div class="SubSiteNavArrow SubSiteNavDiamond"></div>
            <ul>
                
                <li id="top_menu_255"><a href="javascript:parent.leftFrame.OpenAllBet();" title="Gold Deluxe" style="display:">Gold Deluxe</a></li>
                <li id="top_menu_211"><div class="corner-new" style="display:">New</div><a href="javascript:parent.leftFrame.OpenAllBet();" title="Allbet" style="display:">Allbet</a></li>                 
            </ul>
        </div>
    </li>
        
    
    
    <li>
    <div id="GamingMenu-New" class="corner-new" style="display:">New</div>
    <a href="#" title="Trò Chơi" id="top_menu_casino_a"><span>Trò Chơi</span></a>
    <div class="SubSiteNav p03" id="TopCasinoMenuContainer" style="display: none">
            <div class="SubSiteNavArrow SubSiteNavDiamond"></div>
            <ul>
                <li><a href="javascript:OpenAllBet();" title="Sòng bạc">Sòng bạc</a></li>
                <li id="TopCasinoMenuMiniGame" style="display: none"><a href="javascript:parent.leftFrame.OpenAllBet();" title="Trò chơi Mini">Trò chơi Mini</a></li>
                <li style="display:"><div class="corner-new">New</div><a href="javascript:parent.leftFrame.OpenAllBet(1);" title="Bắn cá">Bắn cá</a></li>                
             </ul>
        </div>
    </li>
    
    
    <li><a href="javascript:SwitchSport('', 161);" id="top_menu_numbergame_a" title="Number Game"><span>Number Game</span></a></li>
    
        
    <li><a href="javascript:showFinance();" style="display:none" title="Tài chính"><span>Tài chính</span></a></li>
  
    
  <li>
  <div id="KenoMenu-New" class="corner-new" style="display:">New</div>
        <a href="#" style="cursor:pointer" title="Keno/Xổ số"><span>Keno/Xổ số</span></a>    
        <div class="SubSiteNav p03" id="TopKenoMenuContainer" style="display: none">
            <div class="SubSiteNavArrow SubSiteNavDiamond"></div>
            <ul>
            <li><a href="javascript:parent.leftFrame.OpenAllBet('M');" title="Keno" style="display:">Keno</a></li>
            <li><div class="corner-new" style="display:">New</div><a href="javascript:parent.leftFrame.OpenAllBet('M');" title="Xổ số" style="display:">Xổ số</a></li>
            </ul>
        </div>
  </li>
   

   
      
      <li>
        <div id="VSMenu-New" class="corner-new" style="display:">New</div>
        <a href="#" id="top_menu_virtualsports_a" title="Thể Thao Ảo"><span>Thể Thao Ảo</span></a>
        <div class="SubSiteNav p03" id="TopVSMenuContainer" style="display: none">
          <div class="SubSiteNavArrow SubSiteNavDiamond"></div>
            <ul>
                <li id="top_menu_180"><a href="javascript:OpenAllBet(180);" title="Thể Thao Ảo">Thể Thao Ảo</a></li>
                <li id="top_menu_190"><div class="corner-new" style="display:">New</div><a href="javascript:OpenAllBet(190);" title="Giải đấu Bóng đá Ảo">Giải đấu Bóng đá Ảo</a></li>
                <li id="top_menu_191"><div class="corner-new" style="display:">New</div><a href="javascript:OpenAllBet(191);" title="Quốc gia Bóng đá Ảo">Quốc gia Bóng đá Ảo</a></li>
            </ul>
        </div>
      </li>
      
            
        
        <li>   
            <a href="javascript:OpenAllBet('43');" id="top_menu_sportsbook_43" name="top_menu_sportsbook" title="E-Sports" class=""><span>E-Sports</span></a>
        </li>
      
        
        <li>
            <div class="corner-new">New</div>   
            <a href="javascript:parent.leftFrame.OpenAllBet();" title=" Lô Đề " style="display:"><span> Lô Đề </span></a>
        </li>
         
    </ul>

        </div>
    </div>
</div>


<div id="timelyinfo">
  <div class="timeArea">
        <div id="clock" class="containertime">2:27:05 AM&nbsp;Tháng4 3, 2018 GMT +8</div>
        <div class="iconMenu">
            <ul>
                <li name="showhidetop" id="showhidetop" class="hide_top">
                    <a name="showhidetoplink" id="showhidetoplink" title="Nhấp để thu hẹp menu trên cùng." href="javascript:SwitchShowHidMode(0);"></a>
                </li>
                <li name="Favorite" title="Mục ưa thích của tôi" id="Favorite" class="Favorite added">
                    <a href="javascript:parent.leftFrame.ShowOdds('F','1',fFrame.DisplayMode)" target="mainFrame"></a>
                </li>
                <li id="tv_live" title="Truyền Hình Trực Tiếp">
                    <a id="iTV" href="javascript:fFrame.openStreamingMain();"></a>
                </li> 
                <li id="SportRadar" class="liveInfo" title="Match Information List">
                    <a href="javascript:parent.leftFrame.ShowOdds('B','1',fFrame.DisplayMode)" target="mainFrame"></a>
                </li>
            </ul>   
        </div>
        <div class="langForm">
                <!-- BEGIN LanOptBlock -->
                <!-- Start: SiteNav -->   
                <span>      
              <select name="selLang" onchange="changeLan(this[this.selectedIndex].value);"><option value="en">English</option>
<option value="ch">繁體中文</option>
<option value="jp">日本語</option>
<option value="vn" selected="">Tiếng Việt</option>
</select>
                </span>
              <!-- END LanOptBlock -->
        </div>
        <!-- Search Team Name -->
        <div class="searchTeam">
            <input id="KeyWord" onkeydown="javascript:(function(){if (event.keyCode ==13) SearchTeamName() })()" type="text" onfocus="SesrchTeamOnfocus();" onclick="this.value=''" onblur="javascript:copyKeyWord2();" value="Search Team">
            <input type="hidden" id="KeyWord2" value="">
            <a href="javascript:SearchTeamName();" class="btnSearch" title="Search">
            </a>
            <div id="msgdisplay" class="tips topmenuHid" style="display: none;">
                <div class="content info">
                    Use 3 characters or more to search</div>
            </div>
            <div id="SearchNotFound" class="tips" style="display: none;">
                <div class="content info">
                    No results found</div>
            </div>
            <div id="SpecialCharacters" class="tips" style="display: none;">
                <div class="content info">
                    Special characters are not allowed</div>
            </div>
        </div>
        <!-- Search Team Name -->
    </div>
    <div class="sidebarmenu">
        <div id="MiniOddsNews" class="newsGaming">
            <div id="MiniOddsNewsTitle" class="title current" style="cursor: pointer;" onclick="javascript:ShowWhatIsNews();">
                <span title="Tin tức mới"><div class="icon-arrow"></div>Tin tức mới</span>
            </div>
        </div>
        
    </div>
</div>
</body></html>