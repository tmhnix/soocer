<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
<div id="Miniodds" class="sidebar" ng-controller="RightController">
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
      <div id="gamingtitle" class="gaming container" style="display: block;">
         <div class="promotion-banner" style="display: block;">
            <div id="promotionBannerTitle" class="title">Những trò cược mới.</div>
            <ul>
               <li style="display: list-item;">
                  <div class="main-banner">
                     <div id="slides" style="overflow: hidden; display: block;">

                         <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_HoldSuper6.jpg?v=20161115">
                         <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_PH3AIO.jpg?v=20171218">
                         <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_KenoLottery.jpg?v=20170824">
                         <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_NBA-AIO-GV.jpg?v=20171114">
                         <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_NewTableCasino.jpg?v=20170906">
                         <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_fastmarket.jpg?v=20170306">
                         <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_N7.jpg?v=20161227">

                         <a href="#" class="slidesjs-previous slidesjs-navigation"><img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/layout/l_icon.png"></a>
                        <a href="#" class="slidesjs-next slidesjs-navigation"><img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/layout/r_icon.png"></a>

                        <!--<img src='https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_AllbetM.jpg?v=20171114' />-->
                        <!--<div class="slidesjs-container" style="overflow: hidden; position: relative; width: 305px; height: 165px;">
                           <div class="slidesjs-control" style="position: relative; left: 0px; width: 305px; height: 165px;">
                              <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_PH3AIO.jpg?v=20171218" class="slidesjs-slide" slidesjs-index="0" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; backface-visibility: hidden; display: none;">
                              <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_KenoLottery.jpg?v=20170824" class="slidesjs-slide" slidesjs-index="1" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
                              <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_NBA-AIO-GV.jpg?v=20171114" class="slidesjs-slide" slidesjs-index="2" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">
                              <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_NewTableCasino.jpg?v=20170906" class="slidesjs-slide" slidesjs-index="3" style="position: absolute; top: 0px; left: -305px; width: 100%; z-index: 0; display: block; backface-visibility: hidden;"><a href="javascript:parent.topFrame.openHowToUseFM();" class="slidesjs-slide" slidesjs-index="4" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 10; display: block; backface-visibility: hidden;">
                              <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_fastmarket.jpg?v=20170306"></a><a href="javascript:parent.leftFrame.OpenN7();" class="slidesjs-slide" slidesjs-index="5" style="position: absolute; top: 0px; left: 305px; width: 100%; z-index: 0; display: block; backface-visibility: hidden;">
                              <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_N7.jpg?v=20161227"></a><a href="javascript:parent.topFrame.OpenCasino();" class="slidesjs-slide" slidesjs-index="6" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;"><img src="https://ssl-1-1.bongcdn.com/template/sportsbook/vn/images/product/ad_HoldSuper6.jpg?v=20161115">
                              </a>
                           </div>
                        </div>
                        <!~~<img src='https://ssl-1-1.bongcdn.com/template/sportsbook/vn' />~~>
                        <a href="#" class="slidesjs-previous slidesjs-navigation"><img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/layout/l_icon.png"></a>
                        <a href="#" class="slidesjs-next slidesjs-navigation"><img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/layout/r_icon.png"></a>                
                        <ul class="slidesjs-pagination">
                           <li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="0" class="">1</a></li>
                           <li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="1" class="">2</a></li>
                           <li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="2" class="">3</a></li>
                           <li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="3" class="">4</a></li>
                           <li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="4" class="active">5</a></li>
                           <li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="5">6</a></li>
                           <li class="slidesjs-pagination-item"><a href="#" data-slidesjs-item="6">7</a></li>
                        </ul>-->
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
                     <a id="livestreaming_1" title="Bóng đá" class="navon current">Bóng đá</a>         <!-- Begin -- Open livestreaming Content -->         
                     <div class="LiveTVContent" style="display: block;">
                        <div class="LiveTVList">
                           <table id="LiveTV_1" class="oddsTable">
                              <tbody>
                                 <tr>
                                    <td>
                                       <span class="icon-live-tv"></span>        
                                       <div class="selebox">
                                          <ul class="cm-nav">
                                             <li><a href="javascript:fFrame.openSingleStreaming('24569548',0);" class="current">Open in new window</a></li>
                                             <li><a style="cursor: pointer;" onclick="javascript:openStreamingMiddle(event,'24569548')" class="current">       Float above odds table</a></li>
                                          </ul>
                                       </div>
                                    </td>
                                    <td>
                                       <div title="Odd BK">                                 Odd BK</div>
                                       <div title="Rosenborg">                                 Rosenborg</div>
                                    </td>
                                    <td valign="top">                         <span>02:00AM</span>                     </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="LiveTVList">
                           <table id="LiveTV_1" class="oddsTable">
                              <tbody>
                                 <tr>
                                    <td>
                                       <span class="icon-live-tv"></span>        
                                       <div class="selebox">
                                          <ul class="cm-nav">
                                             <li><a href="javascript:fFrame.openSingleStreaming('24610524',0);" class="current">Open in new window</a></li>
                                             <li><a style="cursor: pointer;" onclick="javascript:openStreamingMiddle(event,'24610524')" class="current">       Float above odds table</a></li>
                                          </ul>
                                       </div>
                                    </td>
                                    <td>
                                       <div title="Kayserispor ">                                 Kayserispor </div>
                                       <div title="Fenerbahce">                                 Fenerbahce</div>
                                    </td>
                                    <td valign="top">                         <span>01:00AM</span>                     </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <!-- End -- Open livestreaming Content -->     
                  </li>
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
                                             <li><a href="javascript:fFrame.openSingleStreaming('24664541',0);" class="current">Open in new window</a></li>
                                          </ul>
                                       </div>
                                    </td>
                                    <td>
                                       <div title="Jennifer Brady (USA)">                                 Jennifer Brady (USA)</div>
                                       <div title="Naomi Osaka (JPN)">                                 Naomi Osaka (JPN)</div>
                                    </td>
                                    <td valign="top">                         <span>01:15AM</span>                     </td>
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
                                             <li><a href="javascript:fFrame.openSingleStreaming('24673678',0);" class="current">Open in new window</a></li>
                                          </ul>
                                       </div>
                                    </td>
                                    <td>
                                       <div title="Silvia Soler-Espinosa (ESP)">                                 Silvia Soler-Espinosa (ESP)</div>
                                       <div title="Camila Giorgi (ITA)">                                 Camila Giorgi (ITA)</div>
                                    </td>
                                    <td valign="top">                         <span>01:45AM</span>                     </td>
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
                                             <li><a href="javascript:fFrame.openSingleStreaming('24673680',0);" class="current">Open in new window</a></li>
                                          </ul>
                                       </div>
                                    </td>
                                    <td>
                                       <div title="Polona Hercog (SLO)">                                 Polona Hercog (SLO)</div>
                                       <div title="Maryna Zanevska (BEL)">                                 Maryna Zanevska (BEL)</div>
                                    </td>
                                    <td valign="top">                         <span>02:00AM</span>                     </td>
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
                                             <li><a href="javascript:fFrame.openSingleStreaming('24673383',0);" class="current">Open in new window</a></li>
                                          </ul>
                                       </div>
                                    </td>
                                    <td>
                                       <div title="Deniz Khazaniuk (ISR)">                                 Deniz Khazaniuk (ISR)</div>
                                       <div title="Marie Bouzkova (CZE)">                                 Marie Bouzkova (CZE)</div>
                                    </td>
                                    <td valign="top">                         <span>01:15AM</span>                     </td>
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
                                             <li><a href="javascript:fFrame.openSingleStreaming('24664575',0);" class="current">Open in new window</a></li>
                                          </ul>
                                       </div>
                                    </td>
                                    <td>
                                       <div title="Victoria Rodriguez (MEX)">                                 Victoria Rodriguez (MEX)</div>
                                       <div title="Ana Bogdan (ROU)">                                 Ana Bogdan (ROU)</div>
                                    </td>
                                    <td valign="top">                         <span>02:00AM</span>                     </td>
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
                                             <li><a href="javascript:fFrame.openSingleStreaming('24664561',0);" class="current">Open in new window</a></li>
                                          </ul>
                                       </div>
                                    </td>
                                    <td>
                                       <div title="Evgeniya Rodina (RUS)">                                 Evgeniya Rodina (RUS)</div>
                                       <div title="Alison Riske (USA)">                                 Alison Riske (USA)</div>
                                    </td>
                                    <td valign="top">                         <span>02:00AM</span>                     </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                     <!-- End -- Open livestreaming Content -->     
                  </li>
                  <li>
                     <a id="livestreaming_8" title="Bóng chày" class="navon current">Bóng chày</a>         <!-- Begin -- Open livestreaming Content -->         
                     <div class="LiveTVContent" style="display: block;">
                        <div class="LiveTVList">
                           <table id="LiveTV_8" class="oddsTable">
                              <tbody>
                                 <tr>
                                    <td>
                                       <span class="icon-live-tv"></span>        
                                       <div class="selebox">
                                          <ul class="cm-nav">
                                             <li><a href="javascript:fFrame.openSingleStreaming('24669546',0);" class="current">Open in new window</a></li>
                                          </ul>
                                       </div>
                                    </td>
                                    <td>
                                       <div title="PIT Pirates">                                 PIT Pirates</div>
                                       <div title="MIN Twins">                                 MIN Twins</div>
                                    </td>
                                    <td valign="top">                         <span>01:05AM</span>                     </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="LiveTVList">
                           <table id="LiveTV_8" class="oddsTable">
                              <tbody>
                                 <tr>
                                    <td>
                                       <span class="icon-live-tv"></span>        
                                       <div class="selebox">
                                          <ul class="cm-nav">
                                             <li><a href="javascript:fFrame.openSingleStreaming('24669549',0);" class="current">Open in new window</a></li>
                                          </ul>
                                       </div>
                                    </td>
                                    <td>
                                       <div title="MIL Brewers">                                 MIL Brewers</div>
                                       <div title="STL Cardinals">                                 STL Cardinals</div>
                                    </td>
                                    <td valign="top">                         <span>02:10AM</span>                     </td>
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
                  <div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 87px; max-height: 209px;" oncontextmenu="return false;">
                     <div class="mCSB_dragger_bar" style="line-height: 30px;"></div>
                  </div>
                  <div class="mCSB_draggerRail"></div>
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
                           <div class="text-ellipsis" title="ARGENTINA NACIONAL B DIVISION">ARGENTINA NACIONAL B DIVISION</div>
                        </td>
                     </tr>
                     <tr class="bgcpe">
                        <td colspan="2" class="miniTeamClass">
                           <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                 <tr>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="FavTeamClass" style="text-overflow: ellipsis" title="Instituto">Instituto</span></div>
                                       </div>
                                    </td>
                                    <td class="liveodds" width="33%">                          <font color="red">LIVE</font> 07:00AM                                                                                            </td>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Club Almagro">Club Almagro</span></div>
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
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138242970','h','0.82')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.82</span></td>
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138242970','a','1.02')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">1.02</span></td>
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
                           <div class="text-ellipsis" title="BOLIVIA PROFESSIONAL FOOTBALL LEAGUE">BOLIVIA PROFESSIONAL FOOTBALL LEAGUE</div>
                        </td>
                     </tr>
                     <tr class="bgcpe">
                        <td colspan="2" class="miniTeamClass">
                           <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                 <tr>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="FavTeamClass" style="text-overflow: ellipsis" title="Sport Boys Warnes">Sport Boys Warnes</span></div>
                                       </div>
                                    </td>
                                    <td class="liveodds" width="33%">                          <font color="red">LIVE</font> 08:00AM                                                                                            </td>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Club Aurora">Club Aurora</span></div>
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
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138676522','h','0.73')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.73</span></td>
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138676522','a','1.12')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">1.12</span></td>
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
                        <td class="tabtitle" colspan="2">FT. HDP</td>
                     </tr>
                     <tr>
                        <td class="miniLeague" colspan="2">
                           <div class="text-ellipsis" title="Israel Super League">Israel Super League</div>
                        </td>
                     </tr>
                     <tr class="liveligh">
                        <td colspan="2" class="miniTeamClass">
                           <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                 <tr>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="FavTeamClass" style="text-overflow: ellipsis" title="Hapoel SP Tel Aviv">Hapoel SP Tel Aviv</span></div>
                                       </div>
                                    </td>
                                    <td class="liveodds" width="33%">
                                       <div class="FavTeamClass">2Q 10'</div>
                                    </td>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Maccabi FOX Tel Aviv">Maccabi FOX Tel Aviv</span></div>
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
                        <th width="50%" nowrap="nowrap" class="even Odds_Upd">-2.50</th>
                        <th width="50%" nowrap="nowrap" class="even Odds_Upd">+2.50</th>
                     </tr>
                     <tr align="center" class="liveligh">
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('137929062','h','0.95')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp Odds_Upd"><span class="UdrDogOddsClass">0.95</span></td>
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('137929062','a','0.81')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp Odds_Upd"><span class="UdrDogOddsClass">0.81</span></td>
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
                           <div class="text-ellipsis" title="France Pro A">France Pro A</div>
                        </td>
                     </tr>
                     <tr class="bgcpe">
                        <td colspan="2" class="miniTeamClass">
                           <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                 <tr>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="ASVEL Lyon-Villeurbanne">ASVEL Lyon-Villeurbanne</span></div>
                                       </div>
                                    </td>
                                    <td class="liveodds" width="33%">                          <font color="red">LIVE</font> 02:45AM                                                                                            </td>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Antibes Sharks ">Antibes Sharks </span></div>
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
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138025891','h','0.15')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.15</span></td>
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138025891','a','4.76')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">4.76</span></td>
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
                           <div class="text-ellipsis" title="WTA - Abierto GNP Seguros">WTA - Abierto GNP Seguros</div>
                        </td>
                     </tr>
                     <tr class="liveligh">
                        <td colspan="2" class="miniTeamClass">
                           <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                 <tr>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Evgeniya Rodina (RUS)">Evgeniya Rodina (RUS)</span></div>
                                       </div>
                                    </td>
                                    <td class="liveodds" width="33%">
                                       <div class="FavTeamClass">Live</div>
                                    </td>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Alison Riske (USA)">Alison Riske (USA)</span></div>
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
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138391771','h','9.09')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">9.09</span></td>
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138391771','a','0.03')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.03</span></td>
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
                           <div class="text-ellipsis" title="WTA - Abierto GNP Seguros">WTA - Abierto GNP Seguros</div>
                        </td>
                     </tr>
                     <tr class="bgcpe">
                        <td colspan="2" class="miniTeamClass">
                           <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                 <tr>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Lesia Tsurenko (UKR)">Lesia Tsurenko (UKR)</span></div>
                                       </div>
                                    </td>
                                    <td class="liveodds" width="33%">                          <font color="red">LIVE</font> 04:30AM                                                                                            </td>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Nao Hibino (JPN)">Nao Hibino (JPN)</span></div>
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
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138391826','h','0.19')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.19</span></td>
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138391826','a','3.70')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">3.70</span></td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!-- End -- Open Mini Odds Content -->        
         </li>
         <li>
            <a id="miniodds_4" title="Khúc côn cầu trên băng" class="navon current">Khúc côn cầu trên băng</a>      <!-- Begin -- Open Mini Odds Content -->     
            <div class="miniContent" style="display: block;">
               <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                  <tbody>
                     <tr>
                        <td class="tabtitle" colspan="2">FT. HDP</td>
                     </tr>
                     <tr>
                        <td class="miniLeague" colspan="2">
                           <div class="text-ellipsis" title="NHL - (Regular Time Only)">NHL - (Regular Time Only)</div>
                        </td>
                     </tr>
                     <tr class="bgcpe">
                        <td colspan="2" class="miniTeamClass">
                           <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                 <tr>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="FavTeamClass" style="text-overflow: ellipsis" title="Toronto Maple Leafs">Toronto Maple Leafs</span></div>
                                       </div>
                                    </td>
                                    <td class="liveodds" width="33%">                          <font color="red">LIVE</font> 07:00AM                                                                                            </td>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Buffalo Sabres">Buffalo Sabres</span></div>
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
                        <th width="50%" nowrap="nowrap" class="even">-1.50</th>
                        <th width="50%" nowrap="nowrap" class="even">+1.50</th>
                     </tr>
                     <tr align="center" class="bgcpe">
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138419435','h','1.02')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">1.02</span></td>
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138419435','a','0.86')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.86</span></td>
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
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('126916839','h','1.16')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">1.16</span></td>
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
                           <div class="text-ellipsis" title="F1 - World Drivers Championship 2018 Winner">F1 - World Drivers Championship 2018 Winner</div>
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
                                    <td class="liveodds" width="33%">                          04/06 07:00PM                                                                                            </td>
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
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('126915799','h','1.81')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">1.81</span></td>
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('126915799','a','0.44')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.44</span></td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!-- End -- Open Mini Odds Content -->        
         </li>
         <li>
            <a id="miniodds_16" title="Quyền anh" class="navon current">Quyền anh</a>      <!-- Begin -- Open Mini Odds Content -->     
            <div class="miniContent" style="display: block;">
               <table width="100%" cellspacing="0" cellpadding="0" border="0" class="oddsTable">
                  <tbody>
                     <tr>
                        <td class="tabtitle" colspan="2">Cược theo dòng tiền</td>
                     </tr>
                     <tr>
                        <td class="miniLeague" colspan="2">
                           <div class="text-ellipsis" title="UFC 223 (in Brooklyn, New York)">UFC 223 (in Brooklyn, New York)</div>
                        </td>
                     </tr>
                     <tr class="bgcpe">
                        <td colspan="2" class="miniTeamClass">
                           <table width="100%" cellspacing="0" cellpadding="0" border="0">
                              <tbody>
                                 <tr>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Michael Chiesa">Michael Chiesa</span></div>
                                       </div>
                                    </td>
                                    <td class="liveodds" width="33%">                          04/08 10:00AM                                                                                            </td>
                                    <td width="33%">
                                       <div name="teamName" style="height:35px;width:90px">
                                          <div style="margin: 0px; padding: 0px; border: 0px;"><span class="UdrDogTeamClass" style="text-overflow: ellipsis" title="Anthony Pettis">Anthony Pettis</span></div>
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
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138650709','h','0.73')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">0.73</span></td>
                        <td onclick="javascript:fFrame.topFrame.miniOddsObj.clickOdds('138650709','a','1.11')" style="cursor: pointer;" onmouseover="this.style.backgroundColor='#f5eeb8';" onmouseout="this.style.backgroundColor='';" class="nbsp"><span class="UdrDogOddsClass">1.11</span></td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <!-- End -- Open Mini Odds Content -->        
         </li>
      </ul>
   </div>
   <div id="fixed_slide" class="fixed_slide" ng-class="{'open': rightOpen}" style="left: 800;">
      <div class="slide_header" ng-click="openSlide()">
         <div class="slide_header_left">
            <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/sevenbar.png">
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
            <div class="swiper-wrapper">
               <div class="swiper-slide swiper-slide-duplicate">
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0023',1024,668);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/S0023.png">
                        </div>
                        <p>Oriental Beauty</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0026',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0026_up.png">
                        </div>
                        <p>Lật bài 21</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0011',910,680);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0011_up.png">
                        </div>
                        <p>Sic Bo</p>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide" style="width: 275px; height: 105px;">
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCasino();">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/Lobby.png">
                        </div>
                        <p>More Games</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0001',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0001_up.png">
                        </div>
                        <p>Baccarat</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0015',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0015_up.png">
                        </div>
                        <p>Baccarat Super 6</p>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide swiper-slide-duplicate">
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0023',1024,668);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/S0023.png">
                        </div>
                        <p>Oriental Beauty</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0026',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0026_up.png">
                        </div>
                        <p>Lật bài 21</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0011',910,680);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0011_up.png">
                        </div>
                        <p>Sic Bo</p>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide" style="width: 275px; height: 105px;">
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0003',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0003_up.png">
                        </div>
                        <p>Blackjack</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0006',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0006_up.png">
                        </div>
                        <p>Casino Hold'em</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0027',1024,668);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/S0027.png">
                        </div>
                        <p>Magician</p>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide" style="width: 275px; height: 105px;">
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0017',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0017_up.png">
                        </div>
                        <p>Dragon Tiger</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0016',1024,668);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/S0016.png">
                        </div>
                        <p>Halloween</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0005',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0005_up.png">
                        </div>
                        <p>Bài xì tố (Poker Tri)</p>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide swiper-slide-visible swiper-slide-active" style="width: 275px; height: 105px;">
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0025',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0025_up.png">
                        </div>
                        <p>Texas Hold'em</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0001',1024,668);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/S0001.png">
                        </div>
                        <p>Jungle Wild</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('W0002',788,514);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/W0002.png">
                        </div>
                        <p>Cash Out</p>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide" style="width: 275px; height: 105px;">
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0023',1024,668);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/S0023.png">
                        </div>
                        <p>Oriental Beauty</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0026',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0026_up.png">
                        </div>
                        <p>Lật bài 21</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0011',910,680);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0011_up.png">
                        </div>
                        <p>Sic Bo</p>
                     </a>
                  </div>
                  <div class="image_row">
                     <a href="javascript:fFrame.topFrame.OpenLiveCasinoWindow();">
                         <div class="black-div">
                             <div class="black_mask"></div>
                             <div class="try_btn">Play Now</div>
                             <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/LiveCasino.png">
                         </div>
                         <p>Live Casino</p>
                     </a>
                     </div>                    
               </div>
               <div class="swiper-slide swiper-slide-duplicate">
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('S0023',1024,668);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/S0023.png">
                        </div>
                        <p>Oriental Beauty</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0026',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0026_up.png">
                        </div>
                        <p>Lật bài 21</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0011',910,680);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0011_up.png">
                        </div>
                        <p>Sic Bo</p>
                     </a>
                  </div>
               </div>
               <div class="swiper-slide swiper-slide-duplicate" style="width: 275px; height: 105px;">
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCasino();">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/Lobby.png">
                        </div>
                        <p>More Games</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0001',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0001_up.png">
                        </div>
                        <p>Baccarat</p>
                     </a>
                  </div>
                  <div class="image_row ">
                     <a href="javascript:fFrame.topFrame.OpenCrossSellingOneRNGGame('R0015',1024,768);">
                        <div class="black-div">
                           <div class="black_mask"></div>
                           <div class="try_btn">Play Now</div>
                           <img src="https://ssl-1-1.bongcdn.com/template/sportsbook/public/images/fixed_bar/R0015_up.png">
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

<script type="text/javascript">
    var prevLeft = 0;
    var timoutP = null;
    $(document).scroll( function(evt) {
        var currentLeft = $(this).scrollLeft();
        if(prevLeft != currentLeft) {
            prevLeft = currentLeft;
            timoutP && clearTimeout(timoutP);
            timoutP = setTimeout(function () {
               $('#fixed_slide').css('left', (800 - currentLeft) +'px');
            }, 500);
        }
    });
</script>