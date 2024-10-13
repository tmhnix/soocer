<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tùy thích/Tự Chọn</title>
    
    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/TVstreaming.css?v=201801250558" rel="stylesheet" type="text/css">
    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/table_w.css?v=201802011053" rel="stylesheet" type="text/css">
    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/button.css?v=201612290759" rel="stylesheet" type="text/css">
    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/global.css?v=201803080523" rel="stylesheet" type="text/css">
    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/menu.css?v=201801030314" rel="stylesheet" type="text/css">
    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/infocss.css?v=201604070631" rel="stylesheet" type="text/css">
    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/oddsFamily.css?v=201802011053" rel="stylesheet" type="text/css">
    <style type="text/css">
<!--
body {
  background-attachment:fixed;
  min-width: 900px;
}
.headerArea{
  width: 100%;
}
a:link {
  text-decoration: none;
}
a:visited {
  text-decoration: none;
}
a:hover {
  text-decoration: none;
}
a:active {
  text-decoration: none;
}
.style1 {
  color: #333333
}
-->
</style>
    <script language="JavaScript" type="text/javascript" src="https://ssl-1-1.bongstatic.com/commJS/jquery.min.js?v=201206260354"></script>
    <script language="JavaScript" type="text/javascript" src="https://ssl-1-1.bongstatic.com/commJS/common.js?v=201710190418"></script>
    <script language="JavaScript" type="text/javascript" src="https://ssl-1-1.bongstatic.com/commJS/UserProfile.js?v=201705180450"></script>
    <script language="JavaScript" type="text/javascript" src="commJS/password_strength_plugin.js?v=201411250956"></script>
</head>
<body class="" onload="showmessage('');" id="">
    <div class="headerArea">
        <div id="bong88logo">
        </div>
    </div>
  <div class="blueArea">
  </div>
  <div class="leftMenuArea left">
    <div class="leftMenuContainer">
      <div class="leftBoxTitle">
        <span class="icon-arrow"></span><span class="titleTxt">Settings</span>
      </div>
      <div id="subnavbg">
        <div id="subnav">
          <a id="mchange_password" href="UserProfile_Change_Password.aspx" class="navon ">
            <span>Đổi Mật Khẩu</span></a> <a id="mPreferences" href="UserProfile_Preferences.aspx" class="navon current"><span>Tùy thích/Tự Chọn</span></a>
          <a id="mCSPriority" href="UserProfile_CSPriority.aspx" class="navon ">
            <span>Tự lập DS Môn Thể Thao</span></a>
        </div>
      </div>
      <div class="leftBoxFoot">
      </div>
    </div>
  </div>
  <div class="userProfilePage left">
    <div class="container">
      
    <div class="titleBar">
    <div class="title">Tùy thích/Tự Chọn</div>
  </div>
    <!--<form id="frmPreferences" name="frmPreferences" method="post" action="UserProfile_Preferences.aspx">-->
  <div class="tabbox boxStyle formArea">
    <div class="row">
      <div class="title">Ngôn Ngữ</div>
      <div id="DefaultLanguage_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('DefaultLanguage',event);return false;" onclick="onClickSelecter('DefaultLanguage');return false;" class="button select">
<input type="hidden" name="DefaultLanguage" id="DefaultLanguage" value="vn">
<span id="DefaultLanguage_Txt" title="Tiếng Việt">Tiếng Việt</span>
<ul id="DefaultLanguage_menu" class="submenu">
<li title="English" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('DefaultLanguage',this,'en',false);">English</li>
<li title="繁體中文" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('DefaultLanguage',this,'ch',false);">繁體中文</li>
<li title="日本語" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('DefaultLanguage',this,'jp',false);">日本語</li>
<li title="Tiếng Việt" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('DefaultLanguage',this,'vn',false);">Tiếng Việt</li>
</ul>
</div>

      <div class="iconOdds help" onclick="showHelp('langHelp');" title=" Trợ giúp">
        <div id="langHelp" class="hint" style="visibility: hidden;">Chọn ngôn ngữ  yêu thích mặc định của bạn.</div>
      </div>
    </div>
    <div class="row" id="OddsTypeRow" style="display: ;">
      <div class="title">Loại Chấp</div>
            <div id="OddsType_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('OddsType',event);return false;" onclick="onClickSelecter('OddsType');return false;" class="button select">
<input type="hidden" name="OddsType" id="OddsType" value="4">
<span id="OddsType_Txt" title="MY">MY</span>
<ul id="OddsType_menu" class="submenu">
<li title="Dec" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('OddsType',this,'1',false);">Dec</li>
<li title="HK" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('OddsType',this,'2',false);">HK</li>
<li title="MY" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('OddsType',this,'4',false);">MY</li>
</ul>
</div>

      <div class="iconOdds help" onclick="showHelp('otHelp');" title=" Trợ giúp">
        <div id="otHelp" class="hint" style="visibility: hidden;">Chọn kiểu hiển thị tỷ lệ cược ưa thích  mặc định của bạn.</div>
      </div>
    </div>
    <div class="row">
      <div class="title">Loại Trang</div>
      <div id="LayoutMode_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('LayoutMode',event);return false;" onclick="onClickSelecter('LayoutMode');return false;" class="button select">
<input type="hidden" name="LayoutMode" id="LayoutMode" value="2">
<span id="LayoutMode_Txt" title="Dòng Kép">Dòng Kép</span>
<ul id="LayoutMode_menu" class="submenu">
<li title="Một Dòng" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('LayoutMode',this,'1',false);">Một Dòng</li>
<li title="Dòng Kép" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('LayoutMode',this,'2',false);">Dòng Kép</li>
<li title="Toàn Thời Gian" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('LayoutMode',this,'3',false);">Toàn Thời Gian</li>
<li title="Hiệp 1" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('LayoutMode',this,'4',false);">Hiệp 1</li>
</ul>
</div>

      <div class="iconOdds help" onclick="showHelp('ptHelp');" title=" Trợ giúp">
        <div id="ptHelp" class="hint" style="visibility: hidden;">Chọn kiểu hiển thị trang cược Hôm Nay và Sớm mà bạn ưa thích.</div>
      </div>
    </div>
    <div class="row">
      <div class="title">Tiền Cược Mặc Định</div>
            <div id="BetStake_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('BetStake',event);return false;" onclick="onClickSelecter('BetStake');return false;" class="button select">
<input type="hidden" name="BetStake" id="BetStake" value="-1">
<span id="BetStake_Txt" title="tắt">tắt</span>
<ul id="BetStake_menu" class="submenu">
<li title="Lần Cược Cuối" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('BetStake',this,'0',false);SwitchUssInput('c');">Lần Cược Cuối</li>
<li title="Tùy Chỉnh" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('BetStake',this,'',false);SwitchUssInput('o');">Tùy Chỉnh</li>
<li title="tắt" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('BetStake',this,'-1',false);SwitchUssInput('c');">tắt</li>
</ul>
</div>

      <div id="uusSet" class="textInput" style="display:none">UT <input type="text" id="uus" maxlength="10" value="" onkeyup="addCommas(removeCommas(document.getElementById('uus').value));" onkeypress="return validateOnKP(this, event,this.selectionStart);"></div>
      <div class="iconOdds help" onclick="showHelp('stHelp');" title=" Trợ giúp">
        <div id="stHelp" class="hint" style="visibility: hidden;">Khởi động hệ thống tự động nhập mức cược tùy chỉnh của bạn và mức cược của lần cược cuối.</div>
      </div>
    </div>
    <div class="row">
      <div class="title">Tự nhận tỷ lệ cược tốt</div>
      <div id="BetterOdds_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('BetterOdds',event);return false;" onclick="onClickSelecter('BetterOdds');return false;" class="button select">
<input type="hidden" name="BetterOdds" id="BetterOdds" value="1">
<span id="BetterOdds_Txt" title="mở">mở</span>
<ul id="BetterOdds_menu" class="submenu">
<li title="mở" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('BetterOdds',this,'1',false);">mở</li>
<li title="tắt" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('BetterOdds',this,'0',false);">tắt</li>
</ul>
</div>

      <div class="iconOdds help" onclick="showHelp('boHelp');" title=" Trợ giúp">
        <div id="boHelp" class="hint" style="visibility: hidden;">Trong lúc bạn đặt cược nếu tỷ lệ cược có biến động cho phép hệ thống tự động chọn tỷ lệ cược tốt nhất.</div>
      </div>
    </div>
        <div class="row">
      <div class="title">Tự làm mới</div>
      <div id="AutoRefresh_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('AutoRefresh',event);return false;" onclick="onClickSelecter('AutoRefresh');return false;" class="button select">
<input type="hidden" name="AutoRefresh" id="AutoRefresh" value="1">
<span id="AutoRefresh_Txt" title="mở">mở</span>
<ul id="AutoRefresh_menu" class="submenu">
<li title="mở" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('AutoRefresh',this,'1',false);">mở</li>
<li title="tắt" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('AutoRefresh',this,'0',false);">tắt</li>
</ul>
</div>

      <div class="iconOdds help" onclick="showHelp('arHelp');" title=" Trợ giúp">
        <div id="arHelp" class="hint" style="visibility: hidden;">khởi động chức năng tự làm mới tỷ lệ cược và tự động làm mới tỷ lệ cược trong bảng cược của bạn.</div>
      </div>
    </div>
        <div class="row">
      <div class="title">Show Score Map</div>
      <div id="ShowScoreMap_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('ShowScoreMap',event);return false;" onclick="onClickSelecter('ShowScoreMap');return false;" class="button select">
<input type="hidden" name="ShowScoreMap" id="ShowScoreMap" value="0">
<span id="ShowScoreMap_Txt" title="tắt">tắt</span>
<ul id="ShowScoreMap_menu" class="submenu">
<li title="mở" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('ShowScoreMap',this,'1',false);">mở</li>
<li title="tắt" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('ShowScoreMap',this,'0',false);">tắt</li>
</ul>
</div>

      <div class="iconOdds help" onclick="showHelp('smHelp');" title=" Trợ giúp">
        <div id="smHelp" class="hint" style="visibility: hidden;">khởi động hệ thống tự động hiển thị "Bảng Điểm" khi đặt cược.</div>
      </div>
        <div class="row">
      <div class="title">Liệt Kê Trận Đấu Mặc Định</div>
      <div id="OddsSort_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('OddsSort',event);return false;" onclick="onClickSelecter('OddsSort');return false;" class="button select">
<input type="hidden" name="OddsSort" id="OddsSort" value="2">
<span id="OddsSort_Txt" title="Chọn Lựa Theo Thời Gian">Chọn Lựa Theo Thời Gian</span>
<ul id="OddsSort_menu" class="submenu">
<li title="Lựa chọn bình thường" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('OddsSort',this,'1',false);">Lựa chọn bình thường</li>
<li title="Chọn Lựa Theo Thời Gian" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('OddsSort',this,'2',false);">Chọn Lựa Theo Thời Gian</li>
</ul>
</div>

      <div class="iconOdds help" onclick="showHelp('osHelp');" title=" Trợ giúp">
        <div id="osHelp" class="hint" style="visibility: hidden;">Chọn kiểu hiển thị trận đấu ưa thích của bạn.</div>
      </div>
    </div>
    <div class="row" style="display:none">
      <div class="title">Hiển thị casino trực tuyến</div>
      <div id="ShowLiveCasino_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('ShowLiveCasino',event);return false;" onclick="onClickSelecter('ShowLiveCasino');return false;" class="button select">
<input type="hidden" name="ShowLiveCasino" id="ShowLiveCasino" value="1">
<span id="ShowLiveCasino_Txt" title="mở">mở</span>
<ul id="ShowLiveCasino_menu" class="submenu">
<li title="mở" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('ShowLiveCasino',this,'1',false);">mở</li>
<li title="tắt" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('ShowLiveCasino',this,'0',false);">tắt</li>
</ul>
</div>

      <div class="iconOdds help" onclick="showHelp('lcHelp');" title=" Trợ giúp">
        <div id="lcHelp" class="hint" style="visibility: hidden;">Khởi động hệ thống tự động hiển thị casino trong trang mục trực tuyến.</div>
      </div>
    </div>
        <div class="row">
            <div class="title">Market Type</div>
      <div id="MarketType_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('MarketType',event);return false;" onclick="onClickSelecter('MarketType');return false;" class="button select">
<input type="hidden" name="MarketType" id="MarketType" value="0">
<span id="MarketType_Txt" title="Tất Cả Trận Đấu">Tất Cả Trận Đấu</span>
<ul id="MarketType_menu" class="submenu">
<li title="Tất Cả Trận Đấu" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('MarketType',this,'0',false);">Tất Cả Trận Đấu</li>
<li title="Các Trận Đấu Chính" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('MarketType',this,'1',false);">Các Trận Đấu Chính</li>
</ul>
</div>

      <div class="iconOdds help" onclick="showHelp('mtHelp');" title=" Trợ giúp">
        <div id="mtHelp" class="hint" style="visibility: hidden;">Select your prefered market.</div>
      </div>
        </div>
    <div class="row" id="ValidateDiv" style="visibility: hidden;">
      <div class="title">Mã xác nhận</div>  
      <input id="txtCode" type="text" maxlength="4" name="txtCode" style="position: relative;width: 95px;top: -5px;">   
      <img id="validateCode" width="52px" height="19" title=" Tải Lại" onclick="this.src='login_code.aspx?'+(new Date().getTime());" alt="" src="login_code.aspx?1">      
    </div>    
    <div class="btnArea">
      <a href="#" class="button mark" onclick="return callPreferencesSubmit('YES');" title=" Gửi"><span>Gửi</span></a>
            <a href="#" class="button" onclick="RestorePreferences();" title=" Khôi phục hệ thống mặc định ban đầu"><span>Khôi Phục</span></a>
    </div>
  </div>
    <input id="hidSubmit" name="hidSubmit" type="hidden">
    <input id="hidBetStakeNotNullMessage" name="hidBetStakeNotNullMessage" type="hidden" value="Please enter the amount">
    <input id="hidBetStakeNotNumericMessage" name="hidBetStakeNotNumericMessage" type="hidden" value="The amount must be numeric">
    <input id="hidBetStakeMoreThenZeroMessage" name="hidBetStakeMoreThenZeroMessage" type="hidden" value="The amount must be greater than zero">
    <input id="hidBetSatkeNumbericValueMessage" name="hidBetSatkeNumbericValueMessage" type="hidden" value="Vui lòng nhập giá trị số (không có dấu thập phân)">
    <input id="hiderrlogin_enter_valid" name="hiderrlogin_enter_valid" type="hidden" value="Vui lòng nhập thông tin xác thực">
    <input id="hidUSite" name="hidUSite" type="hidden" value="789y">
    </div>
    <!--</form>-->
    </div>
  </div>
    <div id="footer">
        <div class="userProfileFooter">
            <span>© Copyright 2018. viva88.com. All Rights Reserved.</span>
        </div>
    </div>


<script language="JavaScript" type="text/JavaScript">
    if (document.all) {
        var tags = document.all.tags("button")
        for (var i = 0; i < tags.length; i++)
            tags(i).outerHTML = tags(i).outerHTML.replace(">", " hidefocus=true>")
    }
</script>
</body></html>