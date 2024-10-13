<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="todoApp">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>

<link href="/assets/web/css/v2/sports.css?v201804191111" rel="stylesheet" type="text/css">
<link href="/assets/web/css/v2/main.css?v201804191111" rel="stylesheet" type="text/css">

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
<div id="header" class="header-showFull"><header class="header-expand" data-reactid=".0"><noscript data-reactid=".0.0"></noscript><div class="header-belt" data-reactid=".0.1"><div class="logo " data-reactid=".0.1.0"></div><div class="header-belt-main" data-reactid=".0.1.1"><div class="header-belt-main-tool" data-reactid=".0.1.1.0"><div class="messages" data-reactid=".0.1.1.0.0"><div class="messages-marquee" data-reactid=".0.1.1.0.0.0"><div class="messages-marquee-text" data-reactid=".0.1.1.0.0.0.0" style="transform: translateY(-16px); transition-duration: 0ms; transition-timing-function: ease;"><span data-reactid=".0.1.1.0.0.0.0.0">Attn:[Soccer] The match between "Liverpool Montevideo U19 (N) -vs- Sud America U19" [URUGUAY CAMPEONATO U19 - 23/4*Live*], we faced disruption in our broadcast from 23/4 9:37:42 PM - 9:41:44 PM. As a result tickets placed during the disrupted period were REJECTED. Sorry for the inconvenience caused!  


</span><br data-reactid=".0.1.1.0.0.0.0.1"><span data-reactid=".0.1.1.0.0.0.0.2">Attn:[Soccer] The match between "Liverpool Montevideo U19 (N) -vs- Sud America U19" [URUGUAY CAMPEONATO U19 - 23/4*Live*], we faced disruption in our broadcast from 23/4 9:37:42 PM - 9:41:44 PM. As a result tickets placed during the disrupted period were REJECTED. Sorry for the inconvenience caused!   


</span></div></div><div class="messages-rightArea" data-reactid=".0.1.1.0.0.1"><div class="message icon-message" title="Tin Nhắn Cá Nhân" data-reactid=".0.1.1.0.0.1.0"></div><div class="alertArea" data-reactid=".0.1.1.0.0.1.1"><div class="alert hiddenElement" data-reactid=".0.1.1.0.0.1.1.0"></div></div></div></div><div class="dropdown tool language" data-reactid=".0.1.1.0.1"><div class="selected" title="Tiếng Việt" data-reactid=".0.1.1.0.1.0">Tiếng Việt</div><div class="dropdownPanel" data-reactid=".0.1.1.0.1.1"><div class="content" data-reactid=".0.1.1.0.1.1.$en">English</div><div class="content" data-reactid=".0.1.1.0.1.1.$ch">繁體中文</div><div class="content" data-reactid=".0.1.1.0.1.1.$jp">日本語</div><div class="content" data-reactid=".0.1.1.0.1.1.$vn">Tiếng Việt</div></div></div><div class="logout" title="Đăng Xuất" data-reactid=".0.1.1.0.2">Đăng Xuất</div></div><ul class="nav-main nav-main_noBottomRadius" data-reactid=".0.1.1.1"><li id="TopMenuSport" class=" active" data-reactid=".0.1.1.1.$FuncSports"><span class="" data-reactid=".0.1.1.1.$FuncSports.0:0">Thể Thao</span></li><li id="TopMenuVirtualSportGroup" class="" data-reactid=".0.1.1.1.$FuncVSGroup"><div class="nav-mark-new" data-reactid=".0.1.1.1.$FuncVSGroup.0:0">Mới</div><span class="" data-reactid=".0.1.1.1.$FuncVSGroup.0:1">Thể Thao Ảo</span><ul class="nav-main-sub" data-reactid=".0.1.1.1.$FuncVSGroup.1"><li id="TopMenuVirtualSport" class="" data-reactid=".0.1.1.1.$FuncVSGroup.1.$FuncVS"><span class="nav-main-sub-Item" data-reactid=".0.1.1.1.$FuncVSGroup.1.$FuncVS.0:0">Thể Thao Ảo</span></li><li id="TopMenuBVSL" class="" data-reactid=".0.1.1.1.$FuncVSGroup.1.$FuncBVSL"><span class="nav-main-sub-Item" data-reactid=".0.1.1.1.$FuncVSGroup.1.$FuncBVSL.0:0">Giải đấu Bóng đá Ảo</span><span class="smallBtn flexible icon-new" data-reactid=".0.1.1.1.$FuncVSGroup.1.$FuncBVSL.0:1">Mới</span></li><li id="TopMenuBVSL" class="" data-reactid=".0.1.1.1.$FuncVSGroup.1.$FuncBVSN"><span class="nav-main-sub-Item" data-reactid=".0.1.1.1.$FuncVSGroup.1.$FuncBVSN.0:0">Quốc gia Bóng đá Ảo</span><span class="smallBtn flexible icon-new" data-reactid=".0.1.1.1.$FuncVSGroup.1.$FuncBVSN.0:1">Mới</span></li></ul></li><noscript data-reactid=".0.1.1.1.$FuncES"></noscript><li id="TopMenuNumberGame" class="" data-reactid=".0.1.1.1.$FuncNG"><span class="" data-reactid=".0.1.1.1.$FuncNG.0:0">Number Game</span></li><li id="TopMenuCasinoGroup" class="" data-reactid=".0.1.1.1.$FuncLCasGroup"><div class="nav-mark-new" data-reactid=".0.1.1.1.$FuncLCasGroup.0:0">Mới</div><span class="" data-reactid=".0.1.1.1.$FuncLCasGroup.0:1">Live Casino</span><ul class="nav-main-sub" data-reactid=".0.1.1.1.$FuncLCasGroup.1"><noscript data-reactid=".0.1.1.1.$FuncLCasGroup.1.$FuncLC"></noscript><li id="TopMenuGD" class="" data-reactid=".0.1.1.1.$FuncLCasGroup.1.$FuncGD"><span class="nav-main-sub-Item" data-reactid=".0.1.1.1.$FuncLCasGroup.1.$FuncGD.0:0">Gold Deluxe</span></li><li id="TopMenuAllBet" class="" data-reactid=".0.1.1.1.$FuncLCasGroup.1.$FuncAllBet"><span class="nav-main-sub-Item" data-reactid=".0.1.1.1.$FuncLCasGroup.1.$FuncAllBet.0:0">Allbet</span></li></ul></li><li id="TopMenuGamingGroup" class="" data-reactid=".0.1.1.1.$FuncGamingGroup"><div class="nav-mark-new" data-reactid=".0.1.1.1.$FuncGamingGroup.0:0">Mới</div><span class="" data-reactid=".0.1.1.1.$FuncGamingGroup.0:1">Trò Chơi</span><ul class="nav-main-sub" data-reactid=".0.1.1.1.$FuncGamingGroup.1"><li id="TopMenuCasino" class="" data-reactid=".0.1.1.1.$FuncGamingGroup.1.$FuncCas"><span class="nav-main-sub-Item" data-reactid=".0.1.1.1.$FuncGamingGroup.1.$FuncCas.0:0">Sòng bạc</span></li><li id="TopMenuGG" class="" data-reactid=".0.1.1.1.$FuncGamingGroup.1.$FuncGG"><span class="nav-main-sub-Item" data-reactid=".0.1.1.1.$FuncGamingGroup.1.$FuncGG.0:0">Bắn cá</span></li></ul></li><li id="TopMenuKenoGroup" class="" data-reactid=".0.1.1.1.$TopMenuKenoGroup"><div class="nav-mark-new" data-reactid=".0.1.1.1.$TopMenuKenoGroup.0:0">Mới</div><span class="" data-reactid=".0.1.1.1.$TopMenuKenoGroup.0:1">Keno/Xổ số</span><ul class="nav-main-sub" data-reactid=".0.1.1.1.$TopMenuKenoGroup.1"><li id="TopMenuKeno" class="" data-reactid=".0.1.1.1.$TopMenuKenoGroup.1.$FuncKo"><span class="nav-main-sub-Item" data-reactid=".0.1.1.1.$TopMenuKenoGroup.1.$FuncKo.0:0">Keno</span></li><li id="TopMenuKenoLottery" class="" data-reactid=".0.1.1.1.$TopMenuKenoGroup.1.$FuncKoL"><span class="nav-main-sub-Item" data-reactid=".0.1.1.1.$TopMenuKenoGroup.1.$FuncKoL.0:0">Xổ số</span><span class="smallBtn flexible icon-new" data-reactid=".0.1.1.1.$TopMenuKenoGroup.1.$FuncKoL.0:1">Mới</span></li></ul></li><li id="TopMenuN7" class="" data-reactid=".0.1.1.1.$FuncN7"><div class="nav-mark-new" data-reactid=".0.1.1.1.$FuncN7.0:0">Mới</div><span class="" data-reactid=".0.1.1.1.$FuncN7.0:1">Lô Đề</span></li><noscript data-reactid=".0.1.1.1.$FuncCB"></noscript></ul></div></div><div class="header-topBar" data-reactid=".0.2"><div class="header-time" id="systemTime" data-reactid=".0.2.0">00:22:28 AM Apr 24, 2018 GMT +8</div><div class="header-hotKeyArea" data-reactid=".0.2.1"><div id="btnHeaderCollapse" class="hotKey icon-headerCollapse" title="Hiển thị/Ẩn menu trên cùng" data-reactid=".0.2.1.0"></div><div class="hotKey icon-favorite added" title="Mục ưa thích của tôi" data-reactid=".0.2.1.1"></div><div id="btnLV" class="hotKey icon-streaming accent" title="Truyền Hình Trực Tiếp" data-reactid=".0.2.1.2"></div><div class="hotKey icon-liveMatch accent" title="Trận đấu Trực Tiếp" data-reactid=".0.2.1.3"></div></div><div class="header-search" data-reactid=".0.2.2"><input class="header-search-input" id="searchTeamTxt" placeholder="Tìm Kiếm Đội" data-reactid=".0.2.2.0"><div id="searchTextClear" title="Xóa nội dung" class="smallBtn inactive icon-clear hiddenElement" data-reactid=".0.2.2.1"></div><div class="header-search-button icon-search" title="Tìm kiếm" data-reactid=".0.2.2.2"></div><div id="searchTeamAlertLength" class="hint-absolute hiddenElement" data-reactid=".0.2.2.3"><div title="" class="glyphIcon accent lineCircle-accent icon-warning" data-reactid=".0.2.2.3.0"></div><div class="content" data-reactid=".0.2.2.3.1">Sử dụng 3 ký tự hoặc nhiều hơn để tìm kiếm</div></div><div id="searchTeamAlertNoResult" class="hint-absolute hiddenElement" data-reactid=".0.2.2.4"><div title="" class="glyphIcon accent lineCircle-accent icon-warning" data-reactid=".0.2.2.4.0"></div><div class="content" data-reactid=".0.2.2.4.1">No results found</div></div></div><div class="header-dataArea" data-reactid=".0.2.3"><div id="betList" class="data icon-betList" title="Bảng Cược" data-reactid=".0.2.3.0"><span class="data-text" data-reactid=".0.2.3.0.0">Bảng Cược</span></div><div id="allStatement" class="data icon-statement" title="Sao Kê" data-reactid=".0.2.3.1"><span class="data-text" data-reactid=".0.2.3.1.0">Sao Kê</span></div><div id="result" class="data icon-result" title="Kết quả" data-reactid=".0.2.3.2"><span class="data-text" data-reactid=".0.2.3.2.0">Kết quả</span></div><div id="preferences" class="data icon-preferences" title="Tùy thích/Tự Chọn" data-reactid=".0.2.3.3"><span class="data-text" data-reactid=".0.2.3.3.0">Tùy thích/Tự Chọn</span></div></div><div class="header-otherArea" data-reactid=".0.2.4"><div id="whatIsNew" class="header-news icon-news" data-reactid=".0.2.4.0"><span class="text" title="Tin tức mới" data-reactid=".0.2.4.0.0">Tin tức mới</span><div class="dropdownPanel" data-reactid=".0.2.4.0.1"><div class="smallBtn icon-clear"></div><div class="slides"> <div class="slides-container"> <a id="btnPrev" class="slides-btn-prev"></a> <a id="btnNext" class="slides-btn-next"></a> <div id="sliderControl" class="slides-control" style=""> <div class="slides-control-item" style=""><a href="javascript:window.util.open('/StaticPage/FastMarket?lang=','StaticPage','width=1024,height=' + (window.screen.availHeight - 130));void(0)"><img src="/template/_global/vn/Images/Banners/WhatsNew_fastmarket2.jpg?v201804191111"></a></div><div class="slides-control-item" style="display:none;"><a href="javascript:menuTrigger('T','43','HDPOU3')"><img src="/template/_global/vn/Images/Banners/WhatsNew_eSports.jpg?v201804191111"></a></div><div class="slides-control-item" style="display:none;"><a href="javascript:menuTrigger('T','1','HDPOU3')"><img src="/template/_global/vn/Images/Banners/WhatsNew_PH3AIO.jpg?v201804191111"></a></div><div class="slides-control-item" style="display:none;"><a href="javascript:window.util.conditionalOpen('kenolottery','/VendorGame/OpenKenoLottery','w_kenolottery','width=1320,height=827,location=no,fullscreen=1,scrollbars=yes,resizable=yes')"><img src="/template/_global/vn/Images/Banners/WhatsNew_KenoLottery.jpg?v201804191111"></a></div><div class="slides-control-item" style="display:none;"><a href="javascript:menuTrigger('T','2','HDPOU-Basketball')"><img src="/template/_global/vn/Images/Banners/WhatsNew_NBA-AIO-GV.jpg?v201804191111"></a></div><div class="slides-control-item" style="display:none;"><img src="/template/_global/vn/Images/Banners/WhatsNew_NewTableCasino.jpg?v201804191111"></div><div class="slides-control-item" style="display:none;"><a href="javascript:window.util.conditionalOpen('casino','/VendorGame/OpenCasino','w_casino','width=1024,height=768,location=no,fullscreen=1,scrollbars=yes,resizable=yes');void(0)"><img src="/template/_global/vn/Images/Banners/WhatsNew_HoldSuper6.jpg?v201804191111"></a></div><div class="slides-control-item" style="display:none;"><a href="javascript:window.Welcome.Open()"><img src="/template/vn/Images/Banners/WhatsNew_11.jpg?v201804191111"></a></div></div> </div> <div id="sliderPagination" class="slides-pagination"> <a id="1" class="slides-pagination-item active"></a><a id="2" class="slides-pagination-item "></a><a id="3" class="slides-pagination-item "></a><a id="4" class="slides-pagination-item "></a><a id="5" class="slides-pagination-item "></a><a id="6" class="slides-pagination-item "></a><a id="7" class="slides-pagination-item "></a><a id="8" class="slides-pagination-item "></a></div> </div></div></div></div></div></header></div>
</body></html>