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
            <span>Đổi Mật Khẩu</span></a> <a id="mPreferences" href="UserProfile_Preferences.aspx" class="navon "><span>Tùy thích/Tự Chọn</span></a>
          <a id="mCSPriority" href="UserProfile_CSPriority.aspx" class="navon current">
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
    <div class="title">Tự lập DS Môn Thể Thao</div>
  </div>
    <!--<form id="frmCSPriority" name="frmCSPriority" method="post" action="UserProfile_CSPriority.aspx">-->
  <div id="CSPrioritySet" class="CSPriority">
    <!--<div class="formDetial"><input type="checkbox" id="checkToEdit" />Cho phép tôi tự lập DS thể thao</div>-->
    <div class="tabbox boxStyle formArea">
      <div class="btnArea">
        <a class="button mark" onclick="return callCSPrioritySubmit('YES');" title=" Gửi"><span>Gửi</span></a>            
        <a class="button" onclick="RestoreCSPriority();" title=" Phục Hồi Mặc Định"><span>Khôi Phục</span></a>
      </div>
      <table width="100%" cellpadding="0" cellspacing="0" class="oddsTable info">
        <tbody><tr>
          <th width="10%">Position</th>
          <th class="even" align="left">Môn</th>
        </tr>
                
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">1</td>                    
          <td id="SN1">
            <div>
              <input type="hidden" id="1" value="1">
                            <div class="sportName">Bóng đá</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:hidden" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:hidden" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">2</td>                    
          <td id="SN2">
            <div>
              <input type="hidden" id="2" value="204">
                            <div class="sportName">Colossus</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">3</td>                    
          <td id="SN3">
            <div>
              <input type="hidden" id="3" value="161">
                            <div class="sportName">Number Game</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">4</td>                    
          <td id="SN4">
            <div>
              <input type="hidden" id="4" value="154">
                            <div class="sportName">Horse Racing Fixed Odds</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">5</td>                    
          <td id="SN5">
            <div>
              <input type="hidden" id="5" value="15X">
                            <div class="sportName">Racing</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">6</td>                    
          <td id="SN6">
            <div>
              <input type="hidden" id="6" value="18X">
                            <div class="sportName">Thể Thao Ảo</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">7</td>                    
          <td id="SN7">
            <div>
              <input type="hidden" id="7" value="43">
                            <div class="sportName">E-Sports</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">8</td>                    
          <td id="SN8">
            <div>
              <input type="hidden" id="8" value="2">
                            <div class="sportName">Bóng rổ</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">9</td>                    
          <td id="SN9">
            <div>
              <input type="hidden" id="9" value="8">
                            <div class="sportName">Bóng chày</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">10</td>                    
          <td id="SN10">
            <div>
              <input type="hidden" id="10" value="3">
                            <div class="sportName">Bóng bầu dục Mỹ</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">11</td>                    
          <td id="SN11">
            <div>
              <input type="hidden" id="11" value="4">
                            <div class="sportName">Khúc côn cầu trên băng</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">12</td>                    
          <td id="SN12">
            <div>
              <input type="hidden" id="12" value="5">
                            <div class="sportName">Quần vợt</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">13</td>                    
          <td id="SN13">
            <div>
              <input type="hidden" id="13" value="9">
                            <div class="sportName">Cầu lông</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">14</td>                    
          <td id="SN14">
            <div>
              <input type="hidden" id="14" value="6">
                            <div class="sportName">Bóng chuyền</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">15</td>                    
          <td id="SN15">
            <div>
              <input type="hidden" id="15" value="7">
                            <div class="sportName">Snooker/Pool</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">16</td>                    
          <td id="SN16">
            <div>
              <input type="hidden" id="16" value="11">
                            <div class="sportName">Thể Thao Môtô</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">17</td>                    
          <td id="SN17">
            <div>
              <input type="hidden" id="17" value="10">
                            <div class="sportName">Đánh Golf</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">18</td>                    
          <td id="SN18">
            <div>
              <input type="hidden" id="18" value="50">
                            <div class="sportName">Cricket</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">19</td>                    
          <td id="SN19">
            <div>
              <input type="hidden" id="19" value="99">
                            <div class="sportName">Môn thể thao khác</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">20</td>                    
          <td id="SN20">
            <div>
              <input type="hidden" id="20" value="44">
                            <div class="sportName">Quyền Thái</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">21</td>                    
          <td id="SN21">
            <div>
              <input type="hidden" id="21" value="16">
                            <div class="sportName">Quyền anh</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">22</td>                    
          <td id="SN22">
            <div>
              <input type="hidden" id="22" value="26">
                            <div class="sportName">Bóng bầu dục</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">23</td>                    
          <td id="SN23">
            <div>
              <input type="hidden" id="23" value="25">
                            <div class="sportName">Ném phi tiêu</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">24</td>                    
          <td id="SN24">
            <div>
              <input type="hidden" id="24" value="18">
                            <div class="sportName">Bóng bàn</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">25</td>                    
          <td id="SN25">
            <div>
              <input type="hidden" id="25" value="30">
                            <div class="sportName">Squash</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">26</td>                    
          <td id="SN26">
            <div>
              <input type="hidden" id="26" value="28">
                            <div class="sportName">Khúc côn cầu trên cỏ</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">27</td>                    
          <td id="SN27">
            <div>
              <input type="hidden" id="27" value="24">
                            <div class="sportName">Bóng ném</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">28</td>                    
          <td id="SN28">
            <div>
              <input type="hidden" id="28" value="32">
                            <div class="sportName">Netball</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">29</td>                    
          <td id="SN29">
            <div>
              <input type="hidden" id="29" value="22">
                            <div class="sportName">Điền kinh</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">30</td>                    
          <td id="SN30">
            <div>
              <input type="hidden" id="30" value="12">
                            <div class="sportName">Bơi lội</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">31</td>                    
          <td id="SN31">
            <div>
              <input type="hidden" id="31" value="14">
                            <div class="sportName">Bóng nước</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">32</td>                    
          <td id="SN32">
            <div>
              <input type="hidden" id="32" value="15">
                            <div class="sportName">Lặn</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">33</td>                    
          <td id="SN33">
            <div>
              <input type="hidden" id="33" value="17">
                            <div class="sportName">Bắn cung</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">34</td>                    
          <td id="SN34">
            <div>
              <input type="hidden" id="34" value="20">
                            <div class="sportName">Canoeing</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">35</td>                    
          <td id="SN35">
            <div>
              <input type="hidden" id="35" value="33">
                            <div class="sportName">Đua xe đạp</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">36</td>                    
          <td id="SN36">
            <div>
              <input type="hidden" id="36" value="31">
                            <div class="sportName">Giải Trí</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">37</td>                    
          <td id="SN37">
            <div>
              <input type="hidden" id="37" value="23">
                            <div class="sportName">Cưỡi ngựa</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">38</td>                    
          <td id="SN38">
            <div>
              <input type="hidden" id="38" value="34">
                            <div class="sportName">Đấu kiếm</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">39</td>                    
          <td id="SN39">
            <div>
              <input type="hidden" id="39" value="21">
                            <div class="sportName">Thể dục</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">40</td>                    
          <td id="SN40">
            <div>
              <input type="hidden" id="40" value="35">
                            <div class="sportName">Judo</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">41</td>                    
          <td id="SN41">
            <div>
              <input type="hidden" id="41" value="36">
                            <div class="sportName">M. Pentathlon</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">42</td>                    
          <td id="SN42">
            <div>
              <input type="hidden" id="42" value="37">
                            <div class="sportName">Rowing</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">43</td>                    
          <td id="SN43">
            <div>
              <input type="hidden" id="43" value="38">
                            <div class="sportName">Đua thuyền buồm</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">44</td>                    
          <td id="SN44">
            <div>
              <input type="hidden" id="44" value="39">
                            <div class="sportName">Bắn súng</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">45</td>                    
          <td id="SN45">
            <div>
              <input type="hidden" id="45" value="40">
                            <div class="sportName">Taekwondo</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">46</td>                    
          <td id="SN46">
            <div>
              <input type="hidden" id="46" value="41">
                            <div class="sportName">Triathlon</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">47</td>                    
          <td id="SN47">
            <div>
              <input type="hidden" id="47" value="19">
                            <div class="sportName">Cử tạ</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">48</td>                    
          <td id="SN48">
            <div>
              <input type="hidden" id="48" value="29">
                            <div class="sportName">Winter Sports</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">49</td>                    
          <td id="SN49">
            <div>
              <input type="hidden" id="49" value="42">
                            <div class="sportName">Đấu vật</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:visible" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:visible" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
        <tr onmouseout="this.style.backgroundColor='';" onmouseover="this.style.backgroundColor='#f5eeb8';">
          <td align="center">50</td>                    
          <td id="SN50">
            <div>
              <input type="hidden" id="50" value="13">
                            <div class="sportName">Chính trị</div>
              <div class="sportPriority">
                <span class="iconOdds bFront" style="visibility:visible" title=" Chuyển Tới Đầu Trang" onclick="javascript:void(0);moveUpToTop(this);"></span>
                <span class="iconOdds bForward" style="visibility:visible" title=" Chuyển Lên" onclick="javascript:void(0);moveUp(this);"></span>
                <span class="iconOdds sBackward" style="visibility:hidden" title=" Chuyển Xuống" onclick="javascript:void(0);moveDown(this);"></span>
                <span class="iconOdds sBack" style="visibility:hidden" title=" Chuyển Về Cuối Trang" onclick="javascript:void(0);moveDownToLast(this);"></span>
              </div>
            </div>
          </td>
        </tr>
        
                
      </tbody></table>
      <div class="btnArea">
        <a class="button mark" onclick="return callCSPrioritySubmit('YES');" title=" Gửi"><span>Gửi</span></a>            
        <!--<a href="#" class="button" onclick="return callCSPrioritySubmit('NO');" title=" Phục Hồi Mặc Định"><span>Khôi Phục</span></a>-->
                <a class="button" onclick="RestoreCSPriority();" title=" Phục Hồi Mặc Định"><span>Khôi Phục</span></a>
                
      </div>

    </div>
            <input type="hidden" id="BingoTopMsg" value="Bingo vị trí cao nhất là thứ hai">
            <input type="hidden" id="SportCount" value="50">
            <input type="hidden" id="DefaultSortType" value="1,161,154,15X,18X,43,2,8,3,4,29,5,9,6,7,11,10,50,99,44,16,26,25,18,30,28,24,32,22,12,14,15,17,20,33,31,23,34,21,35,36,37,38,39,40,41,19,42,13">
            <input type="hidden" id="DefaultSportName" value="Bóng đá,Number Game,Horse Racing Fixed Odds,Racing,Thể Thao Ảo,E-Sports,Bóng rổ,Bóng chày,Bóng bầu dục Mỹ,Khúc côn cầu trên băng,Winter Sports,Quần vợt,Cầu lông,Bóng chuyền,Snooker/Pool,Thể Thao Môtô,Đánh Golf,Cricket,Môn thể thao khác,Quyền Thái,Quyền anh,Bóng bầu dục,Ném phi tiêu,Bóng bàn,Squash,Khúc côn cầu trên cỏ,Bóng ném,Netball,Điền kinh,Bơi lội,Bóng nước,Lặn,Bắn cung,Canoeing,Đua xe đạp,Giải Trí,Cưỡi ngựa,Đấu kiếm,Thể dục,Judo,M. Pentathlon,Rowing,Đua thuyền buồm,Bắn súng,Taekwondo,Triathlon,Cử tạ,Đấu vật,Chính trị">
    <input type="hidden" id="NewSportSort" name="NewSportSort">
    <input id="hidSubmit" name="hidSubmit" type="hidden">
  </div>
    <!--</form>-->
    

    </div>
  </div>
    <div id="footer">
        <div class="userProfileFooter">
            <span>© Copyright 2022 . viva88  All Rights Reserved.</span>
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