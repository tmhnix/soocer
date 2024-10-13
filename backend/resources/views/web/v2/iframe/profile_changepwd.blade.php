<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Tùy thích/Tự Chọn</title>
    
    <link href="/assets/web/css/v2/TVstreaming.css" rel="stylesheet" type="text/css">
    <link href="/assets/web/css/v2/table_w.css" rel="stylesheet" type="text/css">
    <link href="/assets/web/css/v2/button.css" rel="stylesheet" type="text/css">
    <link href="/assets/web/css/global.css?v=11" rel="stylesheet" type="text/css">
    <link href="/assets/web/css/v2/menu.css" rel="stylesheet" type="text/css">
    <link href="/assets/web/css/v2/infocss.css" rel="stylesheet" type="text/css">
    
    <link href="/assets/web/css/v2/mainv2.css?v=15" rel="stylesheet" type="text/css">
    
    <link href="/assets/web/css/v2/oddsFamily.css" rel="stylesheet" type="text/css">
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
[class*="icon-"]:not(.c-icon):not(.c-gc-icon)::before {
    font-family: "iconfont-asia";
    font-style: normal !important;
}
.icon-preferences::before {
    content: "\EA5F";
}

</style>
    <script language="JavaScript" type="text/javascript" src="/assets/web/js/commJS/jquery.min.js"></script>
    <script language="JavaScript" type="text/javascript" src="/assets/web/js/commJS/common.js"></script>
    <script language="JavaScript" type="text/javascript" src="/assets/web/js/commJS/UserProfile.js"></script>
    <script language="JavaScript" type="text/javascript">
      (function(a){a.fn.resultStyle="";a.fn.passStrength=function(c){var b={shortPass:"shortPass",shortPassText:"Too Short",badPass:"badPass",badPassText:"Weak",goodPass:"goodPass",goodPassText:"Good",strongPass:"strongPass",strongPassText:"Strong",otherPass:"otherPass",samePasswordText:"Current password and new password identical.",baseStyle:"testresult",userid:"",messageloc:1};var d=a.extend(b,c);return this.each(function(){var e=a(this);a(e).unbind().keyup(function(){var f=a.fn.teststrength(a(this).val(),a(d.userid).val(),d);if(a(this).val().length>0){if(d.messageloc===1){a(this).next("."+d.baseStyle).remove();a(this).after('<span class="'+d.baseStyle+'"><span></span></span>');a(this).next("."+d.baseStyle).addClass(a(this).resultStyle).find("span").text(f)}else{a(this).prev("."+d.baseStyle).remove();a(this).before('<span class="'+d.baseStyle+'"><span></span></span>');a(this).prev("."+d.baseStyle).addClass(a(this).resultStyle).find("span").text(f)}}if(a(this).val().length==0){a(".testresult").remove()}});a.fn.teststrength=function(h,f,g){var i=0;if(h.length==0){return}if(h.length<6&&h.length>0){this.resultStyle=g.shortPass;return g.shortPassText}if(h.toLowerCase()==f.toLowerCase()){this.resultStyle=g.otherPass;return g.samePasswordText}i+=h.length*4;i+=(a.fn.checkRepetition(1,h).length-h.length)*1;i+=(a.fn.checkRepetition(2,h).length-h.length)*1;i+=(a.fn.checkRepetition(3,h).length-h.length)*1;i+=(a.fn.checkRepetition(4,h).length-h.length)*1;if(h.match(/(.*[0-9].*[0-9].*[0-9])/)){i+=5}if(h.match(/(.*[!,@,#,$,%,^,&,*,?,_,~].*[!,@,#,$,%,^,&,*,?,_,~])/)){i+=5}if(h.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)){i+=10}if(h.match(/([a-zA-Z])/)&&h.match(/([0-9])/)){i+=15}if(h.match(/([!,@,#,$,%,^,&,*,?,_,~])/)&&h.match(/([0-9])/)){i+=15}if(h.match(/([!,@,#,$,%,^,&,*,?,_,~])/)&&h.match(/([a-zA-Z])/)){i+=15}if(h.match(/^\w+$/)||h.match(/^\d+$/)){i-=10}if(i<0){i=0}if(i>100){i=100}if(i<34){this.resultStyle=g.badPass;return g.badPassText}if(i<68){this.resultStyle=g.goodPass;return g.goodPassText}this.resultStyle=g.strongPass;return g.strongPassText}})}})(jQuery);$.fn.checkRepetition=function(c,f){var e="";for(var a=0;a<f.length;a++){var d=true;for(var b=0;b<c&&(b+a+c)<f.length;b++){d=d&&(f.charAt(b+a)==f.charAt(b+a+c))}if(b<c){d=false}if(d){a+=c-1;d=false}else{e+=f.charAt(a)}}return e};
    </script>
</head>
<body class="" onload="showmessage('{{isset($errorMsg) ? $errorMsg : ''}}');document.getElementById('txtOldPW').focus();" id="Change_Password">
    <div class="headerArea">
        <div id="bong88logo">
        </div>
    </div>
  <div class="blueArea">
  </div>
  <div class="mainpass" style="width: 100%;display: flex;flex-direction: row;">
  <div class="leftMenuArea left" style="width:234px;">
    <div class="leftMenuContainer">
      <div class="heading-noMoving  leftBoxTitle">
        <span class="icon-arrow"></span>
        <span class="titleTxt">Cài đặt</span>
      </div>
      <div id="subnavbg">
        <div id="subnav">
          <a id="mchange_password" href="UserProfile_Change_Password.aspx" class="navon current">
            <span>Đổi Mật Khẩu</span></a> 
          <a id="mCSPriority" href="" class="navon ">
            <span>Hiển thị trang</span></a>
          <a id="mCSPriority" href="" class="navon ">
            <span>Tùy chỉnh thứ tự các môn </span></a>
          <a id="mCSPriority" href="/" class="navon ">
            <span>Cá cược</span></a>
          <a id="mPreferences" href="" class="navon "><span>Cài đặt khác</span></a>    
        </div>
      </div>
      <div class="leftBoxFoot">
      </div>
    </div>
  </div>
  <div class="userProfilePage left" style="width: 100%;">
    <div class="container">
      
<script language="JavaScript" type="text/JavaScript">
jQuery(document).ready(function () {
    //BASIC
    jQuery(".password_test").passStrength({
        userid: "#txtOldPW",
        shortPassText: "Too Short",
        badPassText: "Weak",
        goodPassText: "Good",
        strongPassText: "Strong",
        samePasswordText: "Current password and new password identical."
    });
});
CFS = function(e) {
    return e;
}
</script>
<!-- <form id="frmChangePW" name="frmChangePW" method="post" action="UserProfile_Change_Password.aspx" autocomplete="off"> -->
  {!! Form::open(array('route' => 'web.profileChangePwd', "id" => "frmChangePW")) !!}
  <div class="titleBar">
    <div class="title ">Tài Khoản</div>
    <div class="right"> </div>
  </div>
  <!-- <div class="note">
    <div class="noteBorder">
      <div class="title"><span>Alert</span></div>
      <div class="content">
        <div name="en">
          <p>Dear Valued Customer,</p>
          <p>As a precaution to protect your account, you are suggested to change your password periodically.<br />
            For this reason, we have decided to implement a password reset. Please use the form below to change your password now.</p>
          <p>Thank you for your cooperation.</p>
        </div>
        <div name="vn">
          <p>Chào quí khách hàng,</p>
          <p>Như một sự phòng ngừa để bảo vệ tài khoản, bạn được khuyên thay đổi Mật khẩu một cách định kì.<br />
            Vì thế, yêu cầu bạn thay đổi mật khẩu hiện tại. Vui lòng điền vào mẩu bên dưới để thay đổi mật khẩu.</p>
          <p>Cảm ơn sự hợp tác của bạn.</p>
        </div>
      </div>
    </div>
  </div> -->
  <div class="tabbox boxStyle">
    <div class="tabbox_F" style="max-width: 40em;
    margin: 0 auto;
    padding: 2em 1em;">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="formList">
        <tbody>
            <tr ><td style="font-weight: bold;">Thay đổi mật khẩu tài khoản</td></tr>
        <tr>
          <td><label>Mật khẩu hiện tại</label></td>
          <td><input id="txtOldPW" name="txtOldPW" type="password" style="width: 250px;"></td>
        </tr>
        <tr>
          <td><label>Mật khẩu mới</label></td>
          <td><input id="txtPW" name="txtPW" type="password" class="password_test" style="width: 250px;"></td>
        </tr>
        <tr>
          <td><label>Xác nhận mật khẩu mới</label></td>
          <td><input id="txtConPW" name="txtConPW" type="password" style="width: 250px;"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="color01">* Phải gồm ít nhất 6 ký tự và có phân biệt kiểu chữ.</span></td>
        </tr>
        <tr>
          <td colspan="2" height="50">
            <input id="expiry" name="expiry" type="hidden" value="">
            <div class="" style="padding: 1.25em;
    text-align: center;" >
              <a id="btnChangePW" name="btnChangePW" class="button mark btnArea" onclick="return callSubmit('YES');" title=" Gửi"  style="display: inline-block;
                                float: none;
                                min-width: 8em;">
                    <div 
                        class="largeBtn"
                        style="display: inline-block;
                                float: none;
                                min-width: 8em;"
                    >
                        Gửi
                    </div>
              </a>
              <!--<a id="btnReset" name="btnReset" class="button" onclick="resetPW();" title=" Xác Lập Lại"><span>Xác Lập Lại</span>-->
              <!--</a> -->
            </div>
          </td>
        </tr>
        </tbody>
      </table>
      <input id="hidSubmit" name="hidSubmit" type="hidden">
      <input id="hidRemindSubmit" name="hidRemindSubmit" type="hidden">
      <input id="hidLowerCaseOldPW" name="hidLowerCaseOldPW" type="hidden">
      <input type="hidden" id="hidExDate" name="hidExDate" value="0">
      <input id="hidEncryptSecCode" name="hidEncryptSecCode" type="hidden">
      <input id="hidCheckSecRule" name="hidCheckSecRule" type="hidden" value="true">
      <input id="hidChangeMode" name="hidChangeMode" type="hidden" value="">
    </div>
  </div>
{!! Form::close() !!}
<input type="hidden" id="hidConPW" name="hidConPW" value="Vui lòng nhập mật khẩu xác nhận">
<input type="hidden" id="hidPW" name="hidPW" value="Please enter new password">
<input type="hidden" id="hidOldPW" name="hidOldPW" value="Vui lòng nhập mật khẩu cũ">
<input type="hidden" id="hidPWdiff" name="hidPWdiff" value="Mật Khẩu Mới và Mật Khẩu Xác Nhận không khớp nhau!">
<input type="hidden" id="hidExecPW" name="hidExecPW" value="Phải gồm ít nhất 6 ký tự (tối đa 10) và có phân biệt kiểu chữ.">
<input type="hidden" id="hidpwdnotsame" name="hidpwdnotsame" value="The new password can not be the same as the current password!">
<input type="hidden" id="hidconfirm" name="hidconfirm" value="Change Security Code?">
<input type="hidden" id="hidSpecialCharactersNewPassword" name="hidSpecialCharactersNewPassword" value="Mật Khẩu : Special characters are not allowed">
<input type="hidden" id="hidSpecialCharactersConfirmPassword" name="hidSpecialCharactersConfirmPassword" value="Xác Nhận Mật Khẩu : Special characters are not allowed">
    </div>
  </div>
</div>  
    <div id="footer">
        <div class="userProfileFooter">
            <span>© Copyright 2022 . viva88 . All Rights Reserved.</span>
        </div>
    </div>


<script language="JavaScript" type="text/JavaScript">
    if (document.all) {
        var tags = document.all.tags("button")
        for (var i = 0; i < tags.length; i++)
            tags(i).outerHTML = tags(i).outerHTML.replace(">", " hidefocus=true>")
    }
</script>
</body>
</html>
