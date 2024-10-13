<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="todoApp">
   <head>
      <title>Bingo</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/table_w.css?v=201805310751" rel="stylesheet" type="text/css">
      <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/button.css?v=201805310313" rel="stylesheet" type="text/css">
      <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/oddsFamily.css?v=201805240425" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/idangerous.swiper.css?v=201603290207">
      <script type="application/javascript" src="{{ elixir('js/web-all.js') }}"></script>
      <script type="application/javascript" src="{{ elixir('js/templates.js') }}"></script>
      <link rel="stylesheet" href="{{ elixir('css/web-app.css') }}"/>
      <link rel="stylesheet" href="{{ elixir('css/web-all.css')}}"/>
      <style type="text/css">
         .numberGroup td.ball:hover{
            background-color: #ffe00e;
         }
      </style>
   </head>
   <body ng-controller="NumberGameController" id="Bingo" lang="vn">
      <div id="SwitchNewVersionTip" class="SwitchVer" style="display: none;">
         <div class="tips">
            <div class="content info">
               <p>BẤM NGAY để thử phiên bản mới!</p>
            </div>
         </div>
      </div>
      <div id="Miniodds" class="sidebar">
         <div id="SmallLiveInfo" style="display: none;" class="smallLiveInfo">
            <div class="title">
               <span title="Match Information">
                  <div class="icon-arrow"></div>
                  Match Information
                  <a class="btnIcon right" title="ĐÓNG" onclick="javascript:CloseSmallLiveInfo();"><span class="icon-close"></span></a>
               </span>
            </div>
            <div class="loadiframe container"><iframe id="SmallLiveInfoFrame" src="" height="277" scrolling="no" frameborder="0" style="display: inline-block;"></iframe></div>
         </div>
         <div id="MiniOddsNews" class="newsGaming">
            <div id="gamingtitle" class="gaming container" style="display: none;">
               <div class="promotion-banner" style="display: block;">
                  <div id="promotionBannerTitle" class="title">
                     Những trò cược mới.
                     <div class="popWClose" title="Close" onclick="$('#gamingtitle').hide();"></div>
                  </div>
                  <ul>
                     <li style="display: list-item;">
                        <div class="main-banner">
                           <div id="slides">
                              <a href="javascript:parent.leftFrame.SwitchMenuType(0,'','192','T');"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/pm_vsWorldCup.jpg?v=20180419"></a>
                              <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/ad_AllbetM.jpg?v=20171114">
                              <!--<img src='https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/ad_bullfight.jpg?v=20180208' />-->
                              <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/pm_LTmobile.jpg?v=20180424">
                              <a href="javascript:parent.leftFrame.SwitchMenuType(0,'','193','T');"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/pm_vsBaskball.jpg?v=20180419"></a>
                              <a href="javascript:parent.topFrame.openHowToUseFM();"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/pm_fastmarket.jpg?v=20180328"></a>
                              <a href="javascript:parent.leftFrame.SwitchMenuType(0,'','43','T');"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/pm_eSports.jpg?v=20180411"></a>
                              <a href="javascript:parent.leftFrame.SwitchMenuType(0,'','1','T');"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/ad_PH3AIO.jpg?v=20171218"></a>
                              <a href="javascript:parent.leftFrame.SwitchMenuType(0,'','2','T');"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/ad_NBA-AIO-GV.jpg?v=20171114"></a>
                              <a href="javascript:parent.topFrame.OpenCasino();"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/pm_BaccaratJP.jpg?v=20170515"></a>
                              <a href="javascript:parent.topFrame.OpenCasino();"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/ad_NewTableCasino.jpg?v=20170906"></a>
                              <a href="javascript:parent.topFrame.OpenCasino();"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/product/ad_HoldSuper6.jpg?v=20161115"></a>
                              <!--<img src='https://ssl-1-1.bongstatic.com/template/sportsbook/vn' />-->
                              <a href="#" class="slidesjs-previous slidesjs-navigation"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/layout/l_icon.png"></a>
                              <a href="#" class="slidesjs-next slidesjs-navigation"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/layout/r_icon.png"></a>                
                           </div>
                        </div>
                     </li>
                     <li style="display: none;">
                        <div class="gaming-content bingo">
                           <dl>
                              <dt class="title"></dt>
                              <dt class="text01"></dt>
                              <dt class="text02"></dt>
                              <dt class="btn"><a href="javascript:parent.topFrame.openCasinoBingoFromMini();">Play Now</a></dt>
                           </dl>
                        </div>
                     </li>
                     <li style="display: none;">
                        <div class="gaming-content casino">
                           <dl>
                              <dt class="title"></dt>
                              <dt class="text01"></dt>
                              <dt class="text02"></dt>
                              <dt class="btn"><a href="javascript:parent.topFrame.OpenCasino();">Play Now</a></dt>
                           </dl>
                        </div>
                     </li>
                     <li style="display: none;">
                        <div class="gaming-content liveCasino">
                           <dl>
                              <dt class="title"></dt>
                              <dt class="text01"></dt>
                              <dt class="text02"></dt>
                              <dt class="btn"><a href="javascript:parent.topFrame.OpenLiveCasinoWindowFromMini();">Play Now</a></dt>
                           </dl>
                        </div>
                     </li>
                     <li style="display: none;">
                        <div class="gaming-content numberGame">
                           <dl>
                              <dt class="title"></dt>
                              <dt class="text01"></dt>
                              <dt class="text02"></dt>
                              <dt class="btn"><a href="javascript:parent.topFrame.openNumberGmeFromMini();">Play Now</a></dt>
                           </dl>
                        </div>
                     </li>
                     <li style="display: none;">
                        <div class="gaming-content miniGame">
                           <dl>
                              <dt class="title"></dt>
                              <dt class="text01"></dt>
                              <dt class="text02"></dt>
                              <dt class="btn"><a href="javascript:parent.leftFrame.OpenMiniGame();">Play Now</a></dt>
                           </dl>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div id="livetv" class="LiveTV">
            <div class="title">
               <span title="Showing Now">Showing Now</span>
            </div>
            <div id="livestreamingCcontainer" class="LiveTV container ScrollbarContent mCustomScrollbar _mCS_1" data-mcs-theme="dark">
               <div id="mCSB_1" class="mCustomScrollBox mCS-dark mCSB_vertical mCSB_inside" tabindex="0" style="max-height: 219px;">
                  <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                     <ul id="streamingarray">
                        <li>
                           <a id="livestreaming_5" title="Quần vợt" class="navon current">Quần vợt</a>         <!-- Begin -- Open livestreaming Content -->         
                           <div class="LiveTVContent" style="display: block;">
                              <div class="LiveTVList">
                                 <table id="LiveTV_5" class="oddsTable">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <span class="icon-live-tv"></span>        
                                             <div class="selebox">
                                                <ul class="cm-nav">
                                                   <li><a href="javascript:fFrame.openSingleStreaming('25475368',0);" class="current">Open in new window</a></li>
                                                </ul>
                                             </div>
                                          </td>
                                          <td>
                                             <div title="Nino Serdarusic (CRO)">                                 Nino Serdarusic (CRO)</div>
                                             <div title="Roman Khassanov (KAZ)">                                 Roman Khassanov (KAZ)</div>
                                          </td>
                                          <td valign="top">                         <span>02:00PM</span>                     </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="LiveTVList">
                                 <table id="LiveTV_5" class="oddsTable">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <span class="icon-live-tv"></span>        
                                             <div class="selebox">
                                                <ul class="cm-nav">
                                                   <li><a href="javascript:fFrame.openSingleStreaming('25475369',0);" class="current">Open in new window</a></li>
                                                </ul>
                                             </div>
                                          </td>
                                          <td>
                                             <div title="Kevin Krawietz (GER)">                                 Kevin Krawietz (GER)</div>
                                             <div title="Goncalo Oliveira (POR)">                                 Goncalo Oliveira (POR)</div>
                                          </td>
                                          <td valign="top">                         <span>02:00PM</span>                     </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="LiveTVList">
                                 <table id="LiveTV_5" class="oddsTable">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <span class="icon-live-tv"></span>        
                                             <div class="selebox">
                                                <ul class="cm-nav">
                                                   <li><a href="javascript:fFrame.openSingleStreaming('25475371',0);" class="current">Open in new window</a></li>
                                                </ul>
                                             </div>
                                          </td>
                                          <td>
                                             <div title="Roberto Ortega-Olmedo (ESP)">                                 Roberto Ortega-Olmedo (ESP)</div>
                                             <div title="Hugo Dellien (BOL)">                                 Hugo Dellien (BOL)</div>
                                          </td>
                                          <td valign="top">                         <span>03:00PM</span>                     </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="LiveTVList">
                                 <table id="LiveTV_5" class="oddsTable">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <span class="icon-live-tv"></span>        
                                             <div class="selebox">
                                                <ul class="cm-nav">
                                                   <li><a href="javascript:fFrame.openSingleStreaming('25476083',0);" class="current">Open in new window</a></li>
                                                </ul>
                                             </div>
                                          </td>
                                          <td>
                                             <div title="Zuzana Zlochova (SVK)">                                 Zuzana Zlochova (SVK)</div>
                                             <div title="Mai Hontama (JPN)">                                 Mai Hontama (JPN)</div>
                                          </td>
                                          <td valign="top">                         <span>03:00PM</span>                     </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <!-- End -- Open livestreaming Content -->     
                        </li>
                        <li>
                           <a id="livestreaming_6" title="Bóng chuyền" class="navon current">Bóng chuyền</a>         <!-- Begin -- Open livestreaming Content -->         
                           <div class="LiveTVContent" style="display: block;">
                              <div class="LiveTVList">
                                 <table id="LiveTV_6" class="oddsTable">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <span class="icon-live-tv"></span>        
                                             <div class="selebox">
                                                <ul class="cm-nav">
                                                   <li><a href="javascript:fFrame.openSingleStreaming('25427917',0);" class="current">Open in new window</a></li>
                                                </ul>
                                             </div>
                                          </td>
                                          <td>
                                             <div title="Russia (W) (N)">                                 Russia (W) (N)</div>
                                             <div title="USA (W)">                                 USA (W)</div>
                                          </td>
                                          <td valign="top">                         <span>04:00PM</span>                     </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                              <div class="LiveTVList">
                                 <table id="LiveTV_6" class="oddsTable">
                                    <tbody>
                                       <tr>
                                          <td>
                                             <span class="icon-live-tv"></span>        
                                             <div class="selebox">
                                                <ul class="cm-nav">
                                                   <li><a href="javascript:fFrame.openSingleStreaming('25427918',0);" class="current">Open in new window</a></li>
                                                </ul>
                                             </div>
                                          </td>
                                          <td>
                                             <div title="Japan (W) (N)">                                 Japan (W) (N)</div>
                                             <div title="Turkey (W)">                                 Turkey (W)</div>
                                          </td>
                                          <td valign="top">                         <span>04:05PM</span>                     </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                           <!-- End -- Open livestreaming Content -->     
                        </li>
                     </ul>
                  </div>
                  <div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-dark mCSB_scrollTools_vertical" style="display: block;">
                     <div class="mCSB_draggerContainer">
                        <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 144px; max-height: 209px;" oncontextmenu="return false;">
                           <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                        </div>
                        <div class="mCSB_draggerRail"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="cbswitch" class="jackpots open">
            <div class="title" onclick="switchCB();" title="Jackpot">
               Jackpot
               <div id="CBarrow" class="arrow"><i class="icon-arrow_fixed"></i><i class="icon-arrow_fixed_up"></i></div>
            </div>
            <div class="container">
               <!-- 中獎資訊 -->       
               <div id="JackpotWinDiv" class="casino-jackpot-win" style="display: none;">
                  <div class="casino-jackpot-win__info">
                     <div class="casino-jackpot-win__id">
                        <span id="JackpotWinUserName" class="casino-jackpot-win__text">*********</span>
                     </div>
                     <div class="casino-jackpot-win__title">
                        <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/CasinoJackpot/win-title.png">
                     </div>
                     <div class="casino-jackpot-win__time">
                        <span id="JackpotWinWinTime" class="casino-jackpot-win__text">*********</span>
                     </div>
                     <div class="casino-jackpot-win__money">
                        <span id="JackpotWinWinMoney" class="casino-jackpot-win__text">*********</span>
                     </div>
                     <img src="https://ssl-1-1.bongstatic.com/template/sportsbook//public/images/CasinoJackpot/win-panel.png">
                  </div>
                  <div class="casino-jackpot-win__game">
                     <span id="JackpotWinWinGame" class="casino-jackpot-win__text">********</span>
                  </div>
                  <img src="https://ssl-1-1.bongstatic.com/template/sportsbook//public/images/CasinoJackpot/win-bg.gif">
               </div>
               <!-- swiper -->
               <div id="JackpotSwiperContainer" class="swiper-container">
                  <div id="JackpotArrowLeft" class="swiper-arrow-left " style="display: none;">
                     <div class="arrow-left ">
                        <i class="icon-arrow_fixed"></i>
                     </div>
                  </div>
                  <div id="JackpotArrowRight" class="swiper-arrow-right" style="display: none;">
                     <div class="arrow-right">
                        <i class="icon-arrow_fixed"></i>
                     </div>
                  </div>
                  <div id="tmpWrapper" class="swiper-wrapper">
                     <div id="tmpSwiper" class="swiper-slide">
                        <!-- casino-jackpot pool-1 -->
                        <div class="casino-jackpot casino-jackpot_pool-1">
                           <a class="casino-jackpot__banner" href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0034',936,772)" title="Play Now">
                           <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/vn/images/CasinoJackpot/2179_Jackpot.jpg">
                           </a>
                           <div class="casino-jackpot__pools">
                              <ul class="casino-jackpot__list">
                                 <li class="casino-jackpot__row">
                                    <div class="casino-jackpot__col">
                                       <span class="casino-jackpot__text">Jackpot</span>
                                    </div>
                                    <div class="casino-jackpot__col">
                                       <span class="casino-jackpot__money">2,602.83</span>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="title">
            <span title="Tỉ lệ cược.">
            Tỉ lệ cược.
            <a id="btnMiniOddsRefresh" class="btnIcon right" title="Tải Lại" onclick="fFrame.topFrame.miniOddsObj.Refresh();">
            <span class="icon-refresh"></span>
            </a>
            </span>
         </div>
         <div id="minioddCcontainer" class="miniodds container">
            <ul>
               <li>
                  <a id="miniodds_1" title="Bóng đá" class="navon current">Bóng đá</a>      <!-- Begin -- Open Mini Odds Content -->     
                  <div class="miniContent" style="display: block;">
                     <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                        <tbody>
                           <tr>
                              <td class="tabtitle" colspan="2">FT. HDP</td>
                           </tr>
                           <tr>
                              <td class="miniLeague" colspan="2">
                                 <div class="text-ellipsis" title="INDONESIA LIGA 1">INDONESIA LIGA 1</div>
                              </td>
                           </tr>
                           <tr class="bgcpe">
                              <td colspan="2" class="miniTeamClass">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                       <tr>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="FavTeamClass" style="text-overflow: ellipsis" title="PSMS Medan">PSMS Medan</span></div>
                                             </div>
                                          </td>
                                          <td class="liveodds" width="33%">                          <font color="red">LIVE</font> 10:00PM                                                                                            </td>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Persib Bandung">Persib Bandung</span></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        <tbody>
                           <tr align="center">
                              <th width="50%" nowrap="nowrap" class="even">-0.50</th>
                              <th width="50%" nowrap="nowrap" class="even">+0.50</th>
                           </tr>
                           <tr align="center" class="bgcpe">
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147573220','h','-0.97')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="FavOddsClass">-0.97</span></td>
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147573220','a','0.81')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.81</span></td>
                           </tr>
                        </tbody>
                     </table>
                     <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                        <tbody>
                           <tr>
                              <td class="tabtitle" colspan="2">FT. HDP</td>
                           </tr>
                           <tr>
                              <td class="miniLeague" colspan="2">
                                 <div class="text-ellipsis" title="SLOVAKIA U19 LEAGUE">SLOVAKIA U19 LEAGUE</div>
                              </td>
                           </tr>
                           <tr class="bgcpe">
                              <td colspan="2" class="miniTeamClass">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                       <tr>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="FavTeamClass" style="text-overflow: ellipsis" title="DAC Dunajska Streda U19">DAC Dunajska Streda U19</span></div>
                                             </div>
                                          </td>
                                          <td class="liveodds" width="33%">                          <font color="red">LIVE</font> 07:30PM                                                                                            </td>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Tatran Presov U19">Tatran Presov U19</span></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        <tbody>
                           <tr align="center">
                              <th width="50%" nowrap="nowrap" class="even">-0.25</th>
                              <th width="50%" nowrap="nowrap" class="even">+0.25</th>
                           </tr>
                           <tr align="center" class="bgcpe">
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147579532','h','0.87')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.87</span></td>
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147579532','a','0.91')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.91</span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- End -- Open Mini Odds Content -->        
               </li>
               <li>
                  <a id="miniodds_2" title="Bóng rổ" class="navon current">Bóng rổ</a>      <!-- Begin -- Open Mini Odds Content -->     
                  <div class="miniContent" style="display: block;">
                     <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                        <tbody>
                           <tr>
                              <td class="tabtitle" colspan="2">Cược theo dòng tiền</td>
                           </tr>
                           <tr>
                              <td class="miniLeague" colspan="2">
                                 <div class="text-ellipsis" title="Spain Liga ACB">Spain Liga ACB</div>
                              </td>
                           </tr>
                           <tr class="bgcpe">
                              <td colspan="2" class="miniTeamClass">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                       <tr>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Real Madrid">Real Madrid</span></div>
                                             </div>
                                          </td>
                                          <td class="liveodds" width="33%">                          06/06 03:00AM                                                                                            </td>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Herbalife Gran Canaria">Herbalife Gran Canaria</span></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        <tbody>
                           <tr align="center">
                              <th width="50%" nowrap="nowrap" class="even"></th>
                              <th width="50%" nowrap="nowrap" class="even"></th>
                           </tr>
                           <tr align="center" class="bgcpe">
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147306456','h','0.14')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.14</span></td>
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147306456','a','-0.20')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="FavOddsClass">-0.20</span></td>
                           </tr>
                        </tbody>
                     </table>
                     <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                        <tbody>
                           <tr>
                              <td class="tabtitle" colspan="2">Cược theo dòng tiền</td>
                           </tr>
                           <tr>
                              <td class="miniLeague" colspan="2">
                                 <div class="text-ellipsis" title="Italy Lega Basket Serie A">Italy Lega Basket Serie A</div>
                              </td>
                           </tr>
                           <tr class="bgcpe">
                              <td colspan="2" class="miniTeamClass">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                       <tr>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="EA7 Emporio Armani Milano">EA7 Emporio Armani Milano</span></div>
                                             </div>
                                          </td>
                                          <td class="liveodds" width="33%">                          06/06 02:45AM                                                                                            </td>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Dolomiti Energia Trentino">Dolomiti Energia Trentino</span></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        <tbody>
                           <tr align="center">
                              <th width="50%" nowrap="nowrap" class="even"></th>
                              <th width="50%" nowrap="nowrap" class="even"></th>
                           </tr>
                           <tr align="center" class="bgcpe">
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147306658','h','0.26')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.26</span></td>
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147306658','a','-0.33')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="FavOddsClass">-0.33</span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- End -- Open Mini Odds Content -->        
               </li>
               <li>
                  <a id="miniodds_5" title="Quần vợt" class="navon current">Quần vợt</a>      <!-- Begin -- Open Mini Odds Content -->     
                  <div class="miniContent" style="display: block;">
                     <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                        <tbody>
                           <tr>
                              <td class="tabtitle" colspan="2">Cược theo dòng tiền</td>
                           </tr>
                           <tr>
                              <td class="miniLeague" colspan="2">
                                 <div class="text-ellipsis" title="ATP Challenger - Shymkent">ATP Challenger - Shymkent</div>
                              </td>
                           </tr>
                           <tr class="liveligh">
                              <td colspan="2" class="miniTeamClass">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                       <tr>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Kevin Krawietz (GER)">Kevin Krawietz (GER)</span></div>
                                             </div>
                                          </td>
                                          <td class="liveodds" width="33%">
                                             <div class="FavTeamClass">Live</div>
                                          </td>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Goncalo Oliveira (POR)">Goncalo Oliveira (POR)</span></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        <tbody>
                           <tr align="center">
                              <th width="50%" nowrap="nowrap" class="even"></th>
                              <th width="50%" nowrap="nowrap" class="even"></th>
                           </tr>
                           <tr align="center" class="liveligh">
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147508331','h','0.25')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp Odds_Upd"><span class="UdrDogOddsClass">0.25</span></td>
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147508331','a','-0.39')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp Odds_Upd"><span class="FavOddsClass">-0.39</span></td>
                           </tr>
                        </tbody>
                     </table>
                     <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                        <tbody>
                           <tr>
                              <td class="tabtitle" colspan="2">Cược theo dòng tiền</td>
                           </tr>
                           <tr>
                              <td class="miniLeague" colspan="2">
                                 <div class="text-ellipsis" title="ITF Pro Circuit - Hua Hin 4 Women Singles">ITF Pro Circuit - Hua Hin 4 Women Singles</div>
                              </td>
                           </tr>
                           <tr class="liveligh">
                              <td colspan="2" class="miniTeamClass">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                       <tr>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Zuzana Zlochova (SVK)">Zuzana Zlochova (SVK)</span></div>
                                             </div>
                                          </td>
                                          <td class="liveodds" width="33%">
                                             <div class="FavTeamClass">Live</div>
                                          </td>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Mai Hontama (JPN)">Mai Hontama (JPN)</span></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        <tbody>
                           <tr align="center">
                              <th width="50%" nowrap="nowrap" class="even"></th>
                              <th width="50%" nowrap="nowrap" class="even"></th>
                           </tr>
                           <tr align="center" class="liveligh">
                              <td onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass"></span></td>
                              <td onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass"></span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- End -- Open Mini Odds Content -->        
               </li>
               <li>
                  <a id="miniodds_6" title="Bóng chuyền" class="navon current">Bóng chuyền</a>      <!-- Begin -- Open Mini Odds Content -->     
                  <div class="miniContent" style="display: block;">
                     <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                        <tbody>
                           <tr>
                              <td class="tabtitle" colspan="2">FT. HDP</td>
                           </tr>
                           <tr>
                              <td class="miniLeague" colspan="2">
                                 <div class="text-ellipsis" title="FIVB Nations League Women">FIVB Nations League Women</div>
                              </td>
                           </tr>
                           <tr class="liveligh">
                              <td colspan="2" class="miniTeamClass">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                       <tr>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Russia (W) (N)">Russia (W) (N)</span></div>
                                             </div>
                                          </td>
                                          <td class="liveodds" width="33%">
                                             <div class="FavTeamClass">Live</div>
                                          </td>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="FavTeamClass" style="text-overflow: ellipsis" title="USA (W)">USA (W)</span></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        <tbody>
                           <tr align="center">
                              <th width="50%" nowrap="nowrap" class="even">+2.50</th>
                              <th width="50%" nowrap="nowrap" class="even">-2.50</th>
                           </tr>
                           <tr align="center" class="liveligh">
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147105455','h','-0.70')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="FavOddsClass">-0.70</span></td>
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147105455','a','0.52')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.52</span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- End -- Open Mini Odds Content -->        
               </li>
               <li>
                  <a id="miniodds_8" title="Bóng chày" class="navon current">Bóng chày</a>      <!-- Begin -- Open Mini Odds Content -->     
                  <div class="miniContent" style="display: block;">
                     <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                        <tbody>
                           <tr>
                              <td class="tabtitle" colspan="2">Cược theo dòng tiền</td>
                           </tr>
                           <tr>
                              <td class="miniLeague" colspan="2">
                                 <div class="text-ellipsis" title="Nippon Professional Baseball - Interleague">Nippon Professional Baseball - Interleague</div>
                              </td>
                           </tr>
                           <tr class="bgcpe">
                              <td colspan="2" class="miniTeamClass">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                       <tr>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Yomiuri Giants">Yomiuri Giants</span></div>
                                             </div>
                                          </td>
                                          <td class="liveodds" width="33%">                          <font color="red">LIVE</font> 05:00PM                                                                                            </td>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Tohoku Rakuten Golden Eagles">Tohoku Rakuten Golden Eagles</span></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        <tbody>
                           <tr align="center">
                              <th width="50%" nowrap="nowrap" class="even"></th>
                              <th width="50%" nowrap="nowrap" class="even"></th>
                           </tr>
                           <tr align="center" class="bgcpe">
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147188909','h','0.57')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.57</span></td>
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147188909','a','-0.72')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="FavOddsClass">-0.72</span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- End -- Open Mini Odds Content -->        
               </li>
               <li>
                  <a id="miniodds_10" title="Đánh Golf" class="navon current">Đánh Golf</a>      <!-- Begin -- Open Mini Odds Content -->     
                  <div class="miniContent" style="display: block;">
                     <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                        <tbody>
                           <tr>
                              <td class="tabtitle" colspan="2">Cược theo dòng tiền</td>
                           </tr>
                           <tr>
                              <td class="miniLeague" colspan="2">
                                 <div class="text-ellipsis" title="Ryder Cup Winner">Ryder Cup Winner</div>
                              </td>
                           </tr>
                           <tr class="bgcpe">
                              <td colspan="2" class="miniTeamClass">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                       <tr>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Europe">Europe</span></div>
                                             </div>
                                          </td>
                                          <td class="liveodds" width="33%">                          09/28 02:00PM                                                                                            </td>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="USA">USA</span></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        <tbody>
                           <tr align="center">
                              <th width="50%" nowrap="nowrap" class="even"></th>
                              <th width="50%" nowrap="nowrap" class="even"></th>
                           </tr>
                           <tr align="center" class="bgcpe">
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('126916839','h','-0.86')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="FavOddsClass">-0.86</span></td>
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('126916839','a','0.70')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.70</span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- End -- Open Mini Odds Content -->        
               </li>
               <li>
                  <a id="miniodds_11" title="Thể Thao Môtô" class="navon current">Thể Thao Môtô</a>      <!-- Begin -- Open Mini Odds Content -->     
                  <div class="miniContent" style="display: block;">
                     <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                        <tbody>
                           <tr>
                              <td class="tabtitle" colspan="2">Cược theo dòng tiền</td>
                           </tr>
                           <tr>
                              <td class="miniLeague" colspan="2">
                                 <div class="text-ellipsis" title="F1 - Canada Grand Prix Race Winner">F1 - Canada Grand Prix Race Winner</div>
                              </td>
                           </tr>
                           <tr class="bgcpe">
                              <td colspan="2" class="miniTeamClass">
                                 <table width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tbody>
                                       <tr>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="The Field">The Field</span></div>
                                             </div>
                                          </td>
                                          <td class="liveodds" width="33%">                          06/08 10:00PM                                                                                            </td>
                                          <td width="33%">
                                             <div name="teamName" style="height:35px;width:90px">
                                                <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Lewis Hamilton">Lewis Hamilton</span></div>
                                             </div>
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </td>
                           </tr>
                        </tbody>
                        <tbody>
                           <tr align="center">
                              <th width="50%" nowrap="nowrap" class="even"></th>
                              <th width="50%" nowrap="nowrap" class="even"></th>
                           </tr>
                           <tr align="center" class="bgcpe">
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147461664','h','0.58')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.58</span></td>
                              <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('147461664','a','-0.71')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="FavOddsClass">-0.71</span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- End -- Open Mini Odds Content -->        
               </li>
            </ul>
         </div>
         <div id="fixed_slide" class="fixed_slide open" style="left: 800px;">
            <div class="slide_header" onclick="javascript:fFrame.mainFrame.CrossSellingRun();">
               <div class="slide_header_left">
                  <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/sevenbar.png">
                  <h2>Cùng tham gia các trò cược thú vị.</h2>
               </div>
               <div class="slide_header_right">
                  <div id="CSarrow" class="arrow down_arrow">
                     <i class="icon-arrow_fixed"></i>
                     <i class="icon-arrow_fixed_up"></i>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
            <div class="slide_box">
               <div id="swiper-container1" class="swiper-container">
                  <div class="swiper-wrapper" style="width: 1925px; height: 105px; transform: translate3d(-550px, 0px, 0px); transition-duration: 1s;">
                     <div class="swiper-slide swiper-slide-duplicate" style="width: 275px; height: 105px;">
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0011',910,680);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/R0011_up.png">
                              </div>
                              <p>Sic Bo</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('W0001',788,514);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/W0001.png">
                              </div>
                              <p>Sea Orchestra</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0010',1024,668);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/S0010.png">
                              </div>
                              <p>Western Zodiac</p>
                           </a>
                        </div>
                        <!--<div class="image_row">
                           <a href="javascript:fFrame.topFrame.OpenLiveCasinoWindow();">
                               <div class="black-div">
                                   <div class="black_mask"></div>
                                   <div class="try_btn">Play Now</div>
                                   <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/LiveCasino.png">
                               </div>
                               <p>Live Casino</p>
                           </a>
                           </div>  -->                  
                     </div>
                     <div class="swiper-slide" style="width: 275px; height: 105px;">
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCasino();">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/Lobby.png">
                              </div>
                              <p>More Games</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0001',1024,768);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/R0001_up.png">
                              </div>
                              <p>Baccarat</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0015',1024,768);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/R0015_up.png">
                              </div>
                              <p>Baccarat Super 6</p>
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 275px; height: 105px;">
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0003',1024,768);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/R0003_up.png">
                              </div>
                              <p>Blackjack</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0006',1024,768);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/R0006_up.png">
                              </div>
                              <p>Casino Hold'em</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0001',1024,668);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/S0001.png">
                              </div>
                              <p>Jungle Wild</p>
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide" style="width: 275px; height: 105px;">
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0005',1024,768);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/R0005_up.png">
                              </div>
                              <p>Bài xì tố (Poker Tri)</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0023',1024,668);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/S0023.png">
                              </div>
                              <p>Oriental Beauty</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0026',1024,768);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/R0026_up.png">
                              </div>
                              <p>Lật bài 21</p>
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide" style="width: 275px; height: 105px;">
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('W0002',788,514);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/W0002.png">
                              </div>
                              <p>Cash Out</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0219',1440,900);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/GG.png">
                              </div>
                              <p>Bắn cá</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0011',1024,668);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/S0011.png">
                              </div>
                              <p>Chinese Zodiac</p>
                           </a>
                        </div>
                     </div>
                     <div class="swiper-slide" style="width: 275px; height: 105px;">
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0011',910,680);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/R0011_up.png">
                              </div>
                              <p>Sic Bo</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('W0001',788,514);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/W0001.png">
                              </div>
                              <p>Sea Orchestra</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0010',1024,668);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/S0010.png">
                              </div>
                              <p>Western Zodiac</p>
                           </a>
                        </div>
                        <!--<div class="image_row">
                           <a href="javascript:fFrame.topFrame.OpenLiveCasinoWindow();">
                               <div class="black-div">
                                   <div class="black_mask"></div>
                                   <div class="try_btn">Play Now</div>
                                   <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/LiveCasino.png">
                               </div>
                               <p>Live Casino</p>
                           </a>
                           </div>  -->                  
                     </div>
                     <div class="swiper-slide swiper-slide-duplicate" style="width: 275px; height: 105px;">
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCasino();">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/Lobby.png">
                              </div>
                              <p>More Games</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0001',1024,768);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/R0001_up.png">
                              </div>
                              <p>Baccarat</p>
                           </a>
                        </div>
                        <div class="image_row ">
                           <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0015',1024,768);">
                              <div class="black-div">
                                 <div class="black_mask"></div>
                                 <div class="try_btn">Play Now</div>
                                 <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/fixed_bar/R0015_up.png">
                              </div>
                              <p>Baccarat Super 6</p>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="arrow-left">
                  <i class="icon-arrow_fixed"></i>
               </div>
               <div class="arrow-right">
                  <i class="icon-arrow_fixed"></i>
               </div>
            </div>
         </div>
      </div>
      <iframe name="DataFrame_L" src="" style="display: none"></iframe>
      <iframe name="DataFrame_D" src="" style="display: none"></iframe>
      <div class="titleBar">
         <div class="title">Number Game / Hôm nay</div>
         <div class="right">
            <div id="selOddsType_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('selOddsType',event);return false;" onclick="onClickSelecter('selOddsType');return false;" class="button select icon">
               <input type="hidden" name="selOddsType" id="selOddsType" value="4">
               <span id="selOddsType_Txt" title="Malay Odds">
                  <div id="selOddsType_Icon" class="icon_MY"></div>
               </span>
               <ul id="selOddsType_menu" class="submenu">
                  <li title="Hong Kong Odds" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('selOddsType',this,'2',true);changeOddsType(2);">
                     <div class="icon_HK"></div>
                     Hong Kong Odds
                  </li>
                  <li title="Decimal Odds" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('selOddsType',this,'1',true);changeOddsType(1);">
                     <div class="icon_Dec"></div>
                     Decimal Odds
                  </li>
                  <li title="Malay Odds" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('selOddsType',this,'4',true);changeOddsType(4);">
                     <div class="icon_MY"></div>
                     Malay Odds
                  </li>
               </ul>
            </div>
            <a on-refresh="loadNumberGame" ng-class="{'disable': loading}" loading="loading" refresh-item number='20' id="btnRefresh_L" class="button" style="" title="Trực tiếp">
            </a>
            <!-- <a href="javascript:refreshData_L();" id="btnRefresh_L" class="button" style="" title="Trực tiếp">
               <span>
                  <div class="icon-refresh" title="Trực tiếp"></div>
                  19
               </span>
            </a> -->
            <input type="hidden" id="CanBetNumberMsg" name="CanBetNumberMsg" value="Your account is not able to play Number Game. Please contact your upline to enable Number Game for you.">
         </div>
      </div>
      <div id="OddsTr" style="display: block;">
         <div class="tabbox">
            <div class="tabbox_F" id="oTableContainer_L">
               @include('web.commons.bingo')
            </div>
            <div class="tabbox_F" id="oTableContainer_D" style="display: none;">
               <table id="tmplTable" class="oddsTable" width="100%" cellpadding="0" cellspacing="0" border="0">
                  <thead></thead>
                  <tbody></tbody>
               </table>
            </div>
         </div>
      </div>
      <div id="TrNoInfo" style="display: none">
         <table class="oddsTable" width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
               <tr>
                  <td align="center" class="tabtitle" style="border-radius: 0;">Không có trận đấu nào vào lúc này.</td>
               </tr>
            </tbody>
         </table>
      </div>
      <div id="BetList" align="center" style="display: none;"><img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/layout/loading.gif" vspace="2"></div>
      <div id="MoreDiv" style="display: none">
         <div class="popupW">
            <div id="MoreTitle" class="popupWTitle">
               <span>
                  <div class="popWIcon"></div>
                  <div class="popWTitleContain">Kickoff Sequence</div>
                  <div id="MoreCloser" class="popWClose" title="ĐÓNG"></div>
                  <a id="BingobtnRefresh" class="btnIcon black right" href="javascript:RefpopBingoSeq();" title="Tải Lại"><span class="icon-refresh"></span></a>
               </span>
            </div>
            <div id="oMoreContainer" class="popWContain"></div>
         </div>
      </div>
      <div id="PopDiv" style="display: none">
         <div class="popupW">
            <div id="PopTitle" class="popupWTitle">
               <span>
                  <div class="popWIcon"></div>
                  <div id="PopTitleText" class="popWTitleContain"></div>
                  <div id="PopCloser" class="popWClose" title="ĐÓNG"></div>
               </span>
            </div>
            <div id="oPopContainer" class="popWContain"></div>
         </div>
      </div>
      <div>
         <ul class="footer-menu">
            <li><a href="index_info.aspx?page=4" target="DF_Information">Cách sử Dụng</a></li>
            <li style="display: none">|</li>
         </ul>
         <div style="width:780px; font-size: 9px; font-family: Arial; color: #666666; text-align: center; line-height: 45px;">© Copyright 2018. viva88.com. All Rights Reserved.</div>
      </div>
   </body>
</html>