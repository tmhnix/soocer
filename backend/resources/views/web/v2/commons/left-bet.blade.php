<!-- BET -->
   <div id="BettingModeContainer" class="TabBox" style="">
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td id="div_menu_single" class="R_menu_R current" title="Single"><span class="icon-arrow"></span><a href="JavaScript:SwitchBettingMode(0,'1')"><span class="subTitle">Single</span></a></td>
          <td id="div_menu_multiple" class="R_menu_gr" title="Multi-single" style="display: none;"><span class="icon-arrow"></span><a href="JavaScript:SwitchBettingMode(1)"><span class="subTitle">Multi-single</span></a></td>
          <td id="div_menu_parlay" class="R_menu_gr" title="Cá cược tổng hợp"><span class="icon-arrow"></span><a href="JavaScript:SwitchBettingMode(2,'1')"><span class="subTitle">Cá cược tổng hợp</span><span class="numSelections" id="mparlay_cnt"></span></a></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- MENU -->
   <div id="BetProcessContainer">
    <form name="fomConfirmBet" method="post" target="ifmConfirmBet" autocomplete="off" action="underover/confirm_bet_data.aspx">
      <div id="BP_SPORT" style="">
        <div class="leftBoxbody">
          <div class="boxbg">
            <div id="BetInfo" class="BetInfo">
              <div class="TextStyle01 pad"><span id="menuTitle">Bóng đá / </span> <span id="menuTitleOT" style="display: none;">Cược Thắng</span> <span id="tdBetKind" height="=27">Handicap</span></div>
              <div id="trOddsInfo">
                <div id="tdLiveBgColor" class="bet">
                  <div class="pad"><span id="spChoiceClass" class="FavTeamClass">Russia</span><br>
                    <span id="sbBetKindValue" class="HdpGoalClass">-1.25</span> <span id="spScoreValue" class="TextStyle01"></span> <span class="TextStyle03">@</span> <span id="bodds" class="UdrDogOddsClassBetProcess">0.85</span></div>
                    <div id="sbBetAOSValue" class=""></div>
                  </div>
                  <div id="divKeepBetProcess" class="checkbox">
                    <input id="chKeepBet" name="chKeepBet" type="checkbox" checked="" onclick="OddsKeepCountTime(this);">                    
                    <span id="KeepOdds"><span>Tự làm mới(4)</span></span></div>
                  </div>

                  <!--<div class="line_divR"><img src ="/template/public/images/space.gif" name="imgHorseJockey" width="28" height="30" id="imgHorseJockey" onerror="this.style.display='none'"/></div>-->
                  <div class="TextStyle04 pad"><div id="spHome_id"><span id="spHome">Russia</span></div> <div id="spAway_id"><span id="spAway">Saudi Arabia</span></div><div id="spMatchCode_id"><span id="spMatchCode"></span></div>
                  <div id="ot_dvChoiceValue_id" style="display: none;"><span id="ot_dvChoiceValue" style="display: none;"></span></div>
                  <div id="spLeaguename_id" class="TextStyle07"><span id="spLeaguename">*FIFA WORLD CUP 2018 (IN RUSSIA)</span></div>
                </div>
                <div id="div_addparlay" class="checkbox txtleft addToParlay" style="display: none;"><input type="checkbox" id="chk_addToParlay" onclick="SingleToParlay();"><div id="icon_addParlay">Add to Parlay</div></div>
                <div class="Currency pad mag">UT
                  <span class="deleteicon"><input id="BPstake" name="BPstake" type="text" size="10" class="deletable" style="ime-mode:disabled" onkeydown="validateOnKD('BPstake', event)" onkeypress="return(validateOnKP(this, event,this.selectionStart));" onkeyup="payOutOnKU(document.getElementById('BPstake'), event)" autocomplete="off" onpaste="return false;"><span></span></span>
                  <input id="BPBetKey" name="BPBetKey" type="hidden" value="124646521_h">
                  <div id="BPMinMaxBetAlert" class="tips" style="display:none">
                    <div class="content info"></div>
                  </div>
                </div>
                <div id="tr_StakeMultiples" style="display: none;"><span id="sp_stakeMultiples" class="TextStyle05"></span></div>
                <div class="numberPad-wrap" style="display:none">
                  <ul class="numberPad" id="BPstake_numberPad">
                    <li><a href="javascript:void(0);" class="iNumber">1</a></li>
                    <li><a href="javascript:void(0);" class="iNumber">2</a></li>
                    <li><a href="javascript:void(0);" class="iNumber">3</a></li>
                    <li><a href="javascript:void(0);" class="iNumber">4</a></li>
                    <li><a href="javascript:void(0);" class="iNumber">5</a></li>
                    <li><a href="javascript:void(0);" class="iNumber">6</a></li>
                    <li><a href="javascript:void(0);" class="iNumber">7</a></li>
                    <li><a href="javascript:void(0);" class="iNumber">8</a></li>
                    <li><a href="javascript:void(0);" class="iNumber">9</a></li>
                    <li><a href="javascript:void(0);" class="clear">clear</a></li>
                    <li><a href="javascript:void(0);" class="iNumber">0</a></li>
                    <li><a href="javascript:void(0);" class="enter">enter</a></li>
                  </ul>
                </div>
                <div id="divAcceptBetterOdds" class="checkbox txtleft">
                  <input id="cbAcceptBetterOdds" name="cbAcceptBetterOdds" type="checkbox" checked="" value="1" onchange="SyncAcceptBetterOddsCheck(this);">
                  <div>Tự nhận tỷ lệ cược tốt</div>
                </div>
                <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tabstyle02">
                  <tbody><tr id="trlPayOut">
                    <th nowrap="nowrap" width="10px">Thanh Toán</th>
                    <td>&nbsp;<span id="payOut">18.50</span><span id="scoremap" class="iconOdds scoreMap right" title="Score Map" style="display: block;"></span></td>
                  </tr>
                  <tr>
                    <th nowrap="nowrap">Tối Thiểu</th>
                    <td id="tdBetprocessMinBet" class="BetprocessMinBet">UT&nbsp;<span id="spMinBetValue">3</span></td>
                  </tr>
                  <tr>
                    <th nowrap="nowrap">Tối đa</th>
                    <td id="tdBetprocessMaxBet" nowrap="nowrap" class="BetprocessMaxBet">UT&nbsp;<span id="spMaxBetValue">1,135</span></td>
                  </tr>
                </tbody></table>
              </div>
              <div class="BetProcessBtnBox">
                <div id="divAutoAccept" class="mag" style="display: none;"><span id="btnAutoAccept" style="display: none;"><span name="btnAutoAccept"></span></span>
                  <input id="cbAutoAccept" name="cbAutoAccept" type="checkbox" value="1" style="display:none">
                </div>
                <div style="display:none"><input name="btnBPSubmit" type="text" class="Graybutton" value="Đặt Cược"></div>
                <a id="btnBPSubmit" style="cursor:pointer;" type="submit" class="button mark" title="Đặt Cược"><span onclick="betSubmit('click');">Đặt Cược</span></a> 
                <a style="cursor:pointer;" type="button" onclick="javascript:ReloadWaitingBetList('yes','no','1');" class="button" title="Hủy"><span>Hủy</span></a> </div>
                <div id="BPOddsChangeAlert" class="tips box" style="display:none;">
                  <div class="content info"></div>
                </div>
              </div>
            </div>
            <div class="leftBoxFoot"></div>
            <div class="Backmenu"><span class="icon-arrow"></span><a href="javascript:ReloadWaitingBetList('yes','no','1');">Trở về Menu</a></div>
          </div>
          <!-- BEGIN Horse Bet Process-->
          <div id="BP_RACE" style="display:none">
            <div class="leftBoxbody">
              <div class="boxbg">
                <div class="BetInfo">
                  <div class="TextStyle01 pad"><span id="hrmenuTitle">Cược Thắng</span><span id="hrtdBetKind"></span></div>
                  <div id="">
                    <div class="pad">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                          <td id="hrChoiceClass" class="TextStyle02"><span id="hrspHome"></span></td>
                          <td align="right" valign="top"><img src="https://ssl-1-1.bongstatic.com//template/public/images/space.gif" name="imgHorseJockey" width="21" height="21" id="imgHorseJockey" onerror="this.style.display='none'" style="display: none;"></td>
                        </tr>
                      </tbody></table>
                    </div>
                    <div class="TextStyle04 pad"><span id="hrspAway"></span><br>
                      <span id="hrspLeaguename" class="TextStyle07"></span><span id="VRaceOddsDisp1" class="TextStyle03">@ </span><span id="VRaceOddsDisp2" class="UdrDogOddsClassBetProcess"></span></div>
                    </div>
                    <div id="trOddsHorseFixedInfo" style="display: none;">
                      <div id="tdHorseFixedBgColor">
                        <div id="HorseType41" style="display:none"><span>@</span> <span id="HFixedbodds1" style="display:none"></span></div>
                        <div id="HorseType43" style="display:none"><span>@</span> <span id="HFixedbodds2" style="display:none"></span> <span>@</span> <span id="HFixedbodds3" style="display:none"></span></div>
                        <div id="divHorseFixKeepBetProcess" class="checkbox mag" style="display: none;">
                          <input id="HorseFixchKeepBet" name="HorseFixchKeepBet" type="checkbox" checked="" onclick="OddsKeepCountTime(this);">
                          <span id="HorseFixKeep"></span><a href="#" class="btnIcon right" title="Tải Lại"><span class="icon-refresh"></span></a></div>
                        </div>
                      </div>
                      <div id="trHorseTotoKeep" class="checkbox txtleft" style="display:none">
                        <input id="FScreen" name="FScreen" type="checkbox" value="" checked="" onclick="FreezeScreen(this)">
                        <div>Freeze</div>
                      </div>
                      <div class="Currency pad mag">UT
                        <span class="deleteicon"><input id="HorseBPstake" name="HorseBPstake" type="text" size="10" class="deletable" style="ime-mode:disabled" onkeydown="return(validateOnKD(this, event));" onkeypress="return(validateOnKP(this, event,this.selectionStart));" onkeyup="payOutOnKU(this, event);" autocomplete="off" onpaste="return false;"><span></span></span>
                        <input id="HorseBPBetKey" name="HorseBPBetKey" type="hidden">
                        <div id="HRBPMinMaxBetAlert" class="tips" style="display:none;">
                          <div class="content info"></div>
                        </div>
                      </div>
                      <div id="hrtr_StakeMultiples"><span id="hrsp_stakeMultiples" class="TextStyle05"></span></div>
                      <div class="numberPad-wrap" style="display:none">
                        <ul class="numberPad" id="HorseBPstake_numberPad">
                          <li><a href="javascript:void(0);" class="iNumber">1</a></li>
                          <li><a href="javascript:void(0);" class="iNumber">2</a></li>
                          <li><a href="javascript:void(0);" class="iNumber">3</a></li>
                          <li><a href="javascript:void(0);" class="iNumber">4</a></li>
                          <li><a href="javascript:void(0);" class="iNumber">5</a></li>
                          <li><a href="javascript:void(0);" class="iNumber">6</a></li>
                          <li><a href="javascript:void(0);" class="iNumber">7</a></li>
                          <li><a href="javascript:void(0);" class="iNumber">8</a></li>
                          <li><a href="javascript:void(0);" class="iNumber">9</a></li>
                          <li><a href="javascript:void(0);" class="clear">clear</a></li>
                          <li><a href="javascript:void(0);" class="iNumber">0</a></li>
                          <li><a href="javascript:void(0);" class="enter">enter</a></li>
                        </ul>
                      </div>
                      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="tabstyle02">
                        <tbody><tr id="VR_tr1" style="display: none;">
                          <th nowrap="nowrap">Thanh Toán</th>
                          <td id="VRPayout"></td>
                        </tr>
                        <tr id="VR_tr2" style="display:none">
                          <th nowrap="nowrap">Tối đa Thanh toán</th>
                          <td><span id="VRMaxPayout"></span></td>
                        </tr>
                        <tr>
                          <th nowrap="nowrap">Tối Thiểu</th>
                          <td id="hrtdBetprocessMinBet" class="MinBet">UT&nbsp;<span id="hrspMinBetValue"></span></td>
                        </tr>
                        <tr>
                          <th nowrap="nowrap">Tối đa</th>
                          <td id="hrtdBetprocessMaxBet" nowrap="nowrap" class="MaxBet">UT&nbsp;<span id="hrspMaxBetValue"></span></td>
                        </tr>
                      </tbody></table>
                    </div>              
                    <div class="BetProcessBtnBox">
                      <a id="Race_btnBPSubmit" style="cursor:pointer" type="submit" class="button mark" title="Đặt Cược"><span onclick="betSubmit('click');">Đặt Cược</span></a> 
                      <a style="cursor:pointer" type="button" onclick="javascript:ReloadWaitingBetList('yes','no','1');" class="button" title="Hủy"><span>Hủy</span></a> </div>
                      <div id="HRBPOddsChangeAlert" class="tips box" style="display:none;">
                        <div class="content info"></div>
                      </div>
                    </div>
                  </div>
                  <div class="leftBoxFoot"></div>
                  <div class="Backmenu"><span class="icon-arrow"></span><a href="javascript:ReloadWaitingBetList('yes','no','1');">Trở về Menu</a></div>
                </div>
                <!-- END Horse Bet Process-->
              </form>
            </div>
   <!-- BET END -->