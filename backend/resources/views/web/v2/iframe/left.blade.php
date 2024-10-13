<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="overflow-x: hidden; overflow-y: auto" ng-app="todoApp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>
    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/M_LeftAllInOne.css?v=201801030314" rel="stylesheet" type="text/css">

    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/oddsFamily.css?v=201802011053" rel="stylesheet" type="text/css">


    <script type="application/javascript" src="{{ elixir('js/web-all.js') }}"></script>
    <script type="application/javascript" src="{{ elixir('js/templates.js') }}"></script>
    <link rel="stylesheet" href="{{ elixir('css/web-app.css') }}"/>
    <link rel="stylesheet" href="{{ elixir('css/web-all.css')}}"/>
</head>
<body lang="vn" id="LeftAllInOne" ng-controller="LeftController">

<div>
   <!--BEGIN MessageDisplay-->  
   <div id="MessageDisplayContainer" style="display:none;">
      <div class="leftBoxTitle"><span class="icon-arrow"></span><span id="spSubTitle" class="titleTxt"></span></div>
      <div class="leftBoxbody">
         <div class="boxbg reSet errorlogon" style="width:auto"> <span id="spTitle"></span>
          <em id="spContent">Message</em> </div>
      </div>
      <div class="leftBoxFoot"></div>
      <div class="Backmenu"><span class="icon-arrow"></span><a href="javascript:ReloadWaitingBetList('yes','no','1');">Back to Menu</a></div>
      <iframe name="ifmMessageDisplay" id="ifmMessageDisplay" src="" style="display:none"></iframe>
      <form name="fomMessageDisplay" action="MessageDisplay_Data.aspx" method="post" target="ifmMessageDisplay" style="display:none">
         <input type="hidden" id="msg_type" name="msg_type" value="">
         <input type="hidden" id="msg_u_title" name="msg_u_title" value="">
         <input type="hidden" id="msg_u_msg" name="msg_u_msg" value="">
      </form>
   </div>

   <div class="leftSwitchVer"></div>
   <!--END Message Display-->
   <account-info show="menu.account"/>
   <!-- Back to menu picture --> 
</div>
<!-- BEGIN small TV -->
<div style="padding-bottom: 150px;">
   <left-bet></left-bet>

   <left-sports show="menu.sports"></left-sports>

   <left-bet-wait></left-bet-wait>
</div>
@include('web.commons.mini-game')
</body>
</html>