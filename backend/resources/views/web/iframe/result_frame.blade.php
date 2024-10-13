<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="todoApp">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Statement</title>
      <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/M_UnderOver.css?v=201802011053" rel="stylesheet" type="text/css">
      <script type="application/javascript" src="{{ elixir('js/web-all.js') }}"></script>
      <script type="application/javascript" src="{{ elixir('js/templates.js') }}"></script>
      <link rel="stylesheet" href="{{ elixir('css/web-app.css') }}" />
      <link rel="stylesheet" href="{{ elixir('css/web-all.css')}}" />
      <style type="text/css">
         <!--
            #Layer1 {
              position:absolute;
              left:1px;
              top:20px;
              width:424px;
              height:311px;
              z-index:1;
            }
            -->
      </style>
   </head>
   <body id="Result" style="padding-bottom: 5px;">
      <div class="">
         <form action="Result.php" method="get" name="form1" target="ResultMain">
            <input type="hidden" id="selectDate" name="selectDate">
            <div class="titleBar">
               <div class="title">Kết quả</div>
               <div class="right" style="display:"><a onclick="openKeno1();" class="button mark" title="Keno"><span>Keno</span></a></div>
               <div class="right"><a href="#" class="button mark" title="Outright"><span>Cược thắng</span></a></div>
            </div>
            <div class="board">
               <ul class="panelInfo">
                  <li>
                     <span class="title">Ngày</span>
                     <div id="f_trigger_b" class="button select">
                    <span id="selDate">03/20/2018</span> 
                     </div>
                     <a onclick="location = '?date={{date('Y-m-d')}}'" class="button"><span>Hôm nay</span></a> <a onclick="location = '?date={{(new DateTime())->modify('-1 day')->format('Y-m-d')}}'" class="button"><span>Hôm qua</span></a> 
                  </li>
               </ul>
               <ul class="panelInfo">
                  <li>
                     <span class="title">Môn</span>
                     <div id="SelectSport_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('SelectSport',event);return false;" onclick="onClickSelecter('SelectSport');" class="button select">
                        <input type="hidden" name="SelectSport" id="SelectSport" value="1">
                        <span id="SelectSport_Txt" title="Soccer">Bóng đá</span>
                        <ul id="SelectSport_menu" class="submenu">
                           <li title="Soccer" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('SelectSport',this,'1',false);SelectChange('sport', '1', '');">Bóng đá</li>
                        </ul>
                     </div>
                  </li>
                  <li>
                     <span class="title ">Giải</span>
                     <div id="SelectLeague_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('SelectLeague',event);return false;" onclick="onClickSelecter('SelectLeague');" class="button select">
                        <input type="hidden" name="SelectLeague" id="SelectLeague" value="">
                        <span id="SelectLeague_Txt" title="All League">
                        Tất cả
                        </span>
                        <ul id="SelectLeague_menu" class="submenu">
                           <li title="All League" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20'">Tất cả</li>
                           <li title="ALBANIA SUPER LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ALBANIA SUPER LEAGUE'">ALBANIA SUPER LEAGUE</li>
                           <li title="ALBANIA SUPER LEAGUE - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ALBANIA SUPER LEAGUE - SPECIALS'">ALBANIA SUPER LEAGUE - SPECIALS</li>
                           <li title="ARGENTINA PRIMERA B METROPOLITANA" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ARGENTINA PRIMERA B METROPOLITANA'">ARGENTINA PRIMERA B METROPOLITANA</li>
                           <li title="ARGENTINA PRIMERA B NACIONAL" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ARGENTINA PRIMERA B NACIONAL'">ARGENTINA PRIMERA B NACIONAL</li>
                           <li title="ARGENTINA PRIMERA D" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ARGENTINA PRIMERA D'">ARGENTINA PRIMERA D</li>
                           <li title="ARGENTINA RESERVE LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ARGENTINA RESERVE LEAGUE'">ARGENTINA RESERVE LEAGUE</li>
                           <li title="ARGENTINA SUPERLIGA" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ARGENTINA SUPERLIGA'">ARGENTINA SUPERLIGA</li>
                           <li title="ARGENTINA SUPERLIGA - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ARGENTINA SUPERLIGA - SPECIALS'">ARGENTINA SUPERLIGA - SPECIALS</li>
                           <li title="ARMENIA FIRST LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ARMENIA FIRST LEAGUE'">ARMENIA FIRST LEAGUE</li>
                           <li title="AUSTRALIA QUEENSLAND NATIONAL PREMIER LEAGUE U20" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=AUSTRALIA QUEENSLAND NATIONAL PREMIER LEAGUE U20'">AUSTRALIA QUEENSLAND NATIONAL PREMIER LEAGUE U20</li>
                           <li title="AUSTRIA REGIONALLIGA OST" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=AUSTRIA REGIONALLIGA OST'">AUSTRIA REGIONALLIGA OST</li>
                           <li title="AZERBAIJAN DIVISION 1" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=AZERBAIJAN DIVISION 1'">AZERBAIJAN DIVISION 1</li>
                           <li title="BELGIUM RESERVE LEAGUE - PLAYOFF" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=BELGIUM RESERVE LEAGUE - PLAYOFF'">BELGIUM RESERVE LEAGUE - PLAYOFF</li>
                           <li title="BULGARIA FIRST PROFESSIONAL FOOTBALL LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=BULGARIA FIRST PROFESSIONAL FOOTBALL LEAGUE'">BULGARIA FIRST PROFESSIONAL FOOTBALL LEAGUE</li>
                           <li title="BULGARIA FIRST PROFESSIONAL FOOTBALL LEAGUE - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=BULGARIA FIRST PROFESSIONAL FOOTBALL LEAGUE - SPECIALS'">BULGARIA FIRST PROFESSIONAL FOOTBALL LEAGUE - SPECIALS</li>
                           <li title="BULGARIA SECOND PROFESSIONAL FOOTBALL LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=BULGARIA SECOND PROFESSIONAL FOOTBALL LEAGUE'">BULGARIA SECOND PROFESSIONAL FOOTBALL LEAGUE</li>
                           <li title="BULGARIA SECOND PROFESSIONAL FOOTBALL LEAGUE - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=BULGARIA SECOND PROFESSIONAL FOOTBALL LEAGUE - SPECIALS'">BULGARIA SECOND PROFESSIONAL FOOTBALL LEAGUE - SPECIALS</li>
                           <li title="CHILE PRIMERA B" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=CHILE PRIMERA B'">CHILE PRIMERA B</li>
                           <li title="CHILE PRIMERA DIVISION" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=CHILE PRIMERA DIVISION'">CHILE PRIMERA DIVISION</li>
                           <li title="CHILE PRIMERA DIVISION - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=CHILE PRIMERA DIVISION - SPECIALS'">CHILE PRIMERA DIVISION - SPECIALS</li>
                           <li title="CHINA RESERVE LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=CHINA RESERVE LEAGUE'">CHINA RESERVE LEAGUE</li>
                           <li title="CLUB FRIENDLY" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=CLUB FRIENDLY'">CLUB FRIENDLY</li>
                           <li title="CLUB FRIENDLY - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=CLUB FRIENDLY - SPECIALS'">CLUB FRIENDLY - SPECIALS</li>
                           <li title="COLOMBIA PRIMERA A" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=COLOMBIA PRIMERA A'">COLOMBIA PRIMERA A</li>
                           <li title="COLOMBIA PRIMERA B" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=COLOMBIA PRIMERA B'">COLOMBIA PRIMERA B</li>
                           <li title="CZECH REPUBLIC LEAGUE U21" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=CZECH REPUBLIC LEAGUE U21'">CZECH REPUBLIC LEAGUE U21</li>
                           <li title="CZECH REPUBLIC LEAGUE U21 - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=CZECH REPUBLIC LEAGUE U21 - SPECIALS'">CZECH REPUBLIC LEAGUE U21 - SPECIALS</li>
                           <li title="CZECH REPUBLIC NATIONAL LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=CZECH REPUBLIC NATIONAL LEAGUE'">CZECH REPUBLIC NATIONAL LEAGUE</li>
                           <li title="DENMARK RESERVE LEAGUE - PLAYOFF" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=DENMARK RESERVE LEAGUE - PLAYOFF'">DENMARK RESERVE LEAGUE - PLAYOFF</li>
                           <li title="ECUADOR SERIE A" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ECUADOR SERIE A'">ECUADOR SERIE A</li>
                           <li title="ECUADOR SERIE B" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ECUADOR SERIE B'">ECUADOR SERIE B</li>
                           <li title="EGYPT PREMIER LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=EGYPT PREMIER LEAGUE'">EGYPT PREMIER LEAGUE</li>
                           <li title="EGYPT PREMIER LEAGUE - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=EGYPT PREMIER LEAGUE - SPECIALS'">EGYPT PREMIER LEAGUE - SPECIALS</li>
                           <li title="ENGLISH LEAGUE 1" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ENGLISH LEAGUE 1'">ENGLISH LEAGUE 1</li>
                           <li title="ENGLISH LEAGUE 1 - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ENGLISH LEAGUE 1 - SPECIALS'">ENGLISH LEAGUE 1 - SPECIALS</li>
                           <li title="ENGLISH PROFESSIONAL DEVELOPMENT LEAGUE U23" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ENGLISH PROFESSIONAL DEVELOPMENT LEAGUE U23'">ENGLISH PROFESSIONAL DEVELOPMENT LEAGUE U23</li>
                           <li title="FRANCE LIGUE 2" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=FRANCE LIGUE 2'">FRANCE LIGUE 2</li>
                           <li title="FRANCE LIGUE 2 - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=FRANCE LIGUE 2 - SPECIALS'">FRANCE LIGUE 2 - SPECIALS</li>
                           <li title="FRANCE WOMEN DIVISION 1" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=FRANCE WOMEN DIVISION 1'">FRANCE WOMEN DIVISION 1</li>
                           <li title="GERMANY BUNDESLIGA 2" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=GERMANY BUNDESLIGA 2'">GERMANY BUNDESLIGA 2</li>
                           <li title="GERMANY BUNDESLIGA 2 - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=GERMANY BUNDESLIGA 2 - SPECIALS'">GERMANY BUNDESLIGA 2 - SPECIALS</li>
                           <li title="GERMANY BUNDESLIGA U19" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=GERMANY BUNDESLIGA U19'">GERMANY BUNDESLIGA U19</li>
                           <li title="GERMANY REGIONALLIGA BAVARIA" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=GERMANY REGIONALLIGA BAVARIA'">GERMANY REGIONALLIGA BAVARIA</li>
                           <li title="GERMANY REGIONALLIGA BAVARIA - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=GERMANY REGIONALLIGA BAVARIA - SPECIALS'">GERMANY REGIONALLIGA BAVARIA - SPECIALS</li>
                           <li title="GERMANY REGIONALLIGA NORTH" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=GERMANY REGIONALLIGA NORTH'">GERMANY REGIONALLIGA NORTH</li>
                           <li title="GERMANY REGIONALLIGA SOUTHWEST" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=GERMANY REGIONALLIGA SOUTHWEST'">GERMANY REGIONALLIGA SOUTHWEST</li>
                           <li title="GERMANY REGIONALLIGA SOUTHWEST - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=GERMANY REGIONALLIGA SOUTHWEST - SPECIALS'">GERMANY REGIONALLIGA SOUTHWEST - SPECIALS</li>
                           <li title="INDIA GOA PRO LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=INDIA GOA PRO LEAGUE'">INDIA GOA PRO LEAGUE</li>
                           <li title="IRELAND FIRST DIVISION" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=IRELAND FIRST DIVISION'">IRELAND FIRST DIVISION</li>
                           <li title="IRELAND FIRST DIVISION - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=IRELAND FIRST DIVISION - SPECIALS'">IRELAND FIRST DIVISION - SPECIALS</li>
                           <li title="IRELAND LEAGUE CUP" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=IRELAND LEAGUE CUP'">IRELAND LEAGUE CUP</li>
                           <li title="IRELAND PREMIER DIVISION" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=IRELAND PREMIER DIVISION'">IRELAND PREMIER DIVISION</li>
                           <li title="IRELAND PREMIER DIVISION - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=IRELAND PREMIER DIVISION - SPECIALS'">IRELAND PREMIER DIVISION - SPECIALS</li>
                           <li title="ISRAEL LIGA LEUMIT" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ISRAEL LIGA LEUMIT'">ISRAEL LIGA LEUMIT</li>
                           <li title="ISRAEL LIGA LEUMIT - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ISRAEL LIGA LEUMIT - SPECIALS'">ISRAEL LIGA LEUMIT - SPECIALS</li>
                           <li title="ITALY SERIE B" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ITALY SERIE B'">ITALY SERIE B</li>
                           <li title="ITALY SERIE B - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ITALY SERIE B - SPECIALS'">ITALY SERIE B - SPECIALS</li>
                           <li title="ITALY SERIE C" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ITALY SERIE C'">ITALY SERIE C</li>
                           <li title="ITALY SERIE C - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ITALY SERIE C - SPECIALS'">ITALY SERIE C - SPECIALS</li>
                           <li title="KAZAKHSTAN CUP" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=KAZAKHSTAN CUP'">KAZAKHSTAN CUP</li>
                           <li title="NETHERLANDS RESERVE LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=NETHERLANDS RESERVE LEAGUE'">NETHERLANDS RESERVE LEAGUE</li>
                           <li title="NORWAY ELITESERIEN" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=NORWAY ELITESERIEN'">NORWAY ELITESERIEN</li>
                           <li title="NORWAY ELITESERIEN - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=NORWAY ELITESERIEN - SPECIALS'">NORWAY ELITESERIEN - SPECIALS</li>
                           <li title="PARAGUAY PRIMERA DIVISION" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=PARAGUAY PRIMERA DIVISION'">PARAGUAY PRIMERA DIVISION</li>
                           <li title="PARAGUAY PRIMERA DIVISION - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=PARAGUAY PRIMERA DIVISION - SPECIALS'">PARAGUAY PRIMERA DIVISION - SPECIALS</li>
                           <li title="ROMANIA LIGA 1 - PLAYOFF" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ROMANIA LIGA 1 - PLAYOFF'">ROMANIA LIGA 1 - PLAYOFF</li>
                           <li title="ROMANIA LIGA 1 - PLAYOFF - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ROMANIA LIGA 1 - PLAYOFF - SPECIALS'">ROMANIA LIGA 1 - PLAYOFF - SPECIALS</li>
                           <li title="ROMANIA LIGA 2" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=ROMANIA LIGA 2'">ROMANIA LIGA 2</li>
                           <li title="SCOTLAND DEVELOPMENT LEAGUE 2 U20" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SCOTLAND DEVELOPMENT LEAGUE 2 U20'">SCOTLAND DEVELOPMENT LEAGUE 2 U20</li>
                           <li title="SCOTLAND DEVELOPMENT LEAGUE U20" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SCOTLAND DEVELOPMENT LEAGUE U20'">SCOTLAND DEVELOPMENT LEAGUE U20</li>
                           <li title="SCOTLAND LEAGUE 1" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SCOTLAND LEAGUE 1'">SCOTLAND LEAGUE 1</li>
                           <li title="SERBIA PRVA LIGA" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SERBIA PRVA LIGA'">SERBIA PRVA LIGA</li>
                           <li title="SOUTH AUSTRALIA NATIONAL PREMIER LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SOUTH AUSTRALIA NATIONAL PREMIER LEAGUE'">SOUTH AUSTRALIA NATIONAL PREMIER LEAGUE</li>
                           <li title="SOUTH AUSTRALIA STATE LEAGUE 1" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SOUTH AUSTRALIA STATE LEAGUE 1'">SOUTH AUSTRALIA STATE LEAGUE 1</li>
                           <li title="SPAIN SEGUNDA DIVISION" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SPAIN SEGUNDA DIVISION'">SPAIN SEGUNDA DIVISION</li>
                           <li title="SPAIN SEGUNDA DIVISION - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SPAIN SEGUNDA DIVISION - SPECIALS'">SPAIN SEGUNDA DIVISION - SPECIALS</li>
                           <li title="SURREY SENIOR CUP" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SURREY SENIOR CUP'">SURREY SENIOR CUP</li>
                           <li title="SWEDEN ALLSVENSKAN U21" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SWEDEN ALLSVENSKAN U21'">SWEDEN ALLSVENSKAN U21</li>
                           <li title="SWITZERLAND CHALLENGE LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SWITZERLAND CHALLENGE LEAGUE'">SWITZERLAND CHALLENGE LEAGUE</li>
                           <li title="SWITZERLAND CHALLENGE LEAGUE - SPECIALS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=SWITZERLAND CHALLENGE LEAGUE - SPECIALS'">SWITZERLAND CHALLENGE LEAGUE - SPECIALS</li>
                           <li title="TURKEY TFF SECOND LEAGUE" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=TURKEY TFF SECOND LEAGUE'">TURKEY TFF SECOND LEAGUE</li>
                           <li title="UEFA WOMEN U17 CHAMPIONSHIP QUALIFIERS" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=UEFA WOMEN U17 CHAMPIONSHIP QUALIFIERS'">UEFA WOMEN U17 CHAMPIONSHIP QUALIFIERS</li>
                           <li title="UKRAINE LEAGUE 1" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=UKRAINE LEAGUE 1'">UKRAINE LEAGUE 1</li>
                           <li title="UKRAINE LEAGUE U19" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=UKRAINE LEAGUE U19'">UKRAINE LEAGUE U19</li>
                           <li title="URUGUAY PRIMERA DIVISION" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=URUGUAY PRIMERA DIVISION'">URUGUAY PRIMERA DIVISION</li>
                           <li title="VENEZUELA PRIMERA DIVISION" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=VENEZUELA PRIMERA DIVISION'">VENEZUELA PRIMERA DIVISION</li>
                           <li title="VIAREGGIO CUP U19 (IN ITALY)" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="location = '?day=2018/03/20&amp;giai=VIAREGGIO CUP U19 (IN ITALY)'">VIAREGGIO CUP U19 (IN ITALY)</li>
                        </ul>
                     </div>
                  </li>
               </ul>
            </div>
            <div id="WaitLoading" align="center" style="display: none"><img src="loading.gif" vspace="2"></div>
            <div id="ResultItem" class="tabbox" style="display: block">
               <div class="tabbox_F">
                  <table class="oddsTable info" width="100%" cellpadding="0" cellspacing="0" border="0">
                     <tbody>
                        <tr>
                           <th width="110" align="left" nowrap="">Thời Gian Bắt Đầu</th>
                           <th width="400" align="left" class="even">Trận đấu</th>
                           <th width="95" style="white-space:nowrap;">Hiệp 1</th>
                           <th width="80" style="white-space:nowrap;" class="even">Chung cuộc</th>
                           <th width="75" align="left">Trạng thái</th>
                        </tr>
                        @foreach($leagues as $league)
                        <tr>
                           <td class="tabtitle"></td>
                           <td colspan="6" class="tabtitle">{{$league->name}}</td>
                        </tr>
                           @foreach($league->events as $key=>$event)
                           <tr class="{{$key%2 == 0 ? 'bgcpe' : 'bgcpelight'}}">
                              <td nowrap="nowrap">{{$event->updated_at}}</td>
                              <td>{{$event->home}} -vs- {{$event->away}}</td>
                              <td align="center"><strong>
                                 {{isset($event->extra['hf_ss']) ? $event->extra['hf_ss'] : '-'}} </strong>
                              </td>
                              <td align="center"><strong>
                                 {{$event->ss}}              </strong>
                              </td>
                              <td><strong><% '{{$event->time_status}}' | timeStatus %></strong></td>
                           </tr>
                           @endforeach
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="note">
               <div class="noteBorder">
                  <div class="title"><span>Lưu ý</span></div>
                  <div class="content">Xin lưu ý rằng thời gian hiển thị dựa trên GMT +8 giờ.</div>
               </div>
            </div>
         </form>
      </div>
   </body>
</html>