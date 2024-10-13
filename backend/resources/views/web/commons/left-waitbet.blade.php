<!-- BetListMini Session -->
<div style="display: none;" id="div_BetListMini">
  <div title="Bet List (Mini)" class="leftBoxTitle">
    <span class="icon-arrow"></span>
    <div title="Refresh" onclick="openBetList(0, 0);" name="btnRefresh_BetListMini" class="btnIcon mark right" id="BetListMiniRefreshIcon">
      <span class="icon-refresh"></span>
    </div>
    <span style="width: 130px;" class="text-ellipsis left titleTxt">Bet List (Mini)</span>
  </div>
  <div class="leftBoxbody">
    <div class="boxbg">
      <div class="reSet">
        <a title="Waiting Bet" class="button" onclick="openBetList(1,0)" style="cursor: pointer"><span>Waiting Bet</span>
        </a>
        <a title="Void" class="button" onclick="openBetList(5,0);" style="cursor: pointer"><span>Void</span>
        </a>
      </div>
      <span id="BetListMiniContainer"><div class="BetInfo bgcpelight" onmouseover="this.className='BetInfo Ltrbgov'" onmouseout="this.className='BetInfo bgcpelight'"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size:10px;"><tbody><tr><td colspan="2" class="TextStyle01">Soccer / HDP</td></tr><tr><td colspan="0" class="FavTeamClass" onmousemove="NumberGroupTitle(this);" title="">Viking FK</td><td align="right"><span title="Score Map" onclick="javascript:popScoreMap('7942980','left');" class="iconOdds scoreMap"></span></td></tr><tr><td nowrap=""><div style="overflow: hidden; text-overflow: ellipsis; white-space:nowrap; width: 110px; " title="+123"><span class="TextStyle03">-0.25</span><span class="TextStyle01">@[1-1] @</span><span class="UdrDogOddsClass">+123</span></div></td><td align="right" class="TextStyle01"><b>12.0</b></td></tr> <tr><td colspan="2" class="TextStyle04">Viking FK-vs-Asane Fotball</td></tr><tr><td colspan="2" class="TextStyle06"><div class="left">ID:11818245</div><div class="right text-ellipsis" style="width:70px; text-align:right; line-height:inherit;" title="P">Running</div></td></tr></tbody></table></div></span>
    </div>
  </div>
  <div class="leftBoxFoot"></div>
</div>
<!-- END BetListMini Session -->
<!-- WaitingBets Session -->
<div style="display: block;" id="div_WaitingBets">
  <div title="Waiting &amp; Cancelled" class="leftBoxTitle">
    <span class="icon-arrow"></span>
    <div title="Refresh" onclick="openBetList(1,0);" name="btnRefresh_WaitingBets" class="btnIcon mark right" id="WaitingBetRefreshIcon">
      <span class="icon-refresh"></span>
    </div>
    <span style="width: 130px;" class="text-ellipsis left titleTxt">Waiting &amp; Cancelled</span>
  </div>
  <div class="leftBoxbody">
    <div class="boxbg">
      <div class="reSet" id="account">
        <a title="Bet List (Mini)" class="button" onclick="openBetList(0, 0)" style="cursor: pointer"><span>Bet List (Mini)</span>
        </a>
        <a title="Void" class="button" onclick="openBetList(5,0);" style="cursor: pointer"><span>Void</span>
        </a>
      </div>
      <span id="WaitingBetsSpan"><div align="center" id="lastrefresh" style="display: block;">Time : <span id="refresh-time">3</span></div><div align="center" id="checkStatus" style="display: none">Checking Status Now...</div><div align="center" id="checkStatus" style="display: none">Checking Status Now...</div><div class="BetInfo liveligh" onmouseover="this.className='BetInfo Ltrbgov'" onmouseout="this.className='BetInfo liveligh'"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="font-size:10px;"><tbody><tr><td colspan="2" class="TextStyle01 ">Soccer / HDP / Handicap</td></tr><tr><td colspan="2" class="TextStyle02 " onmousemove="NumberGroupTitle(this);">Viking FK</td></tr><tr><td><span class="TextStyle03 "><span class="TextStyle03">0.0</span><span class="TextStyle01">[1-1]</span></span><span class="">@</span><span class="FavOddsClass">-151</span></td><td align="right" class="TextStyle01 "><b>12.00</b></td></tr><tr><td colspan="2" class="TextStyle04 "><div>Viking FK -vs- Asane Fotball</div><div></div></td></tr><tr><td colspan="2" class="TextStyle06"><div class="left">ID:11818262</div><div class="right text-ellipsis" style="width:70px; text-align:right; line-height:inherit;" title="Waiting">Waiting</div></td></tr></tbody></table></div> </span>
    </div>
  </div>
  <div class="leftBoxFoot"></div>
</div>
<!-- End Of WaitingBets Session -->
<!-- VoidTicket Session -->
<div style="display: none;" id="div_VoidTicket">
  <div title="Void &amp; Cancelled Bet" class="leftBoxTitle">
    <span class="icon-arrow"></span>
    <div title="Refresh" onclick="openBetList(5,0);" name="btnRefresh_VoidTicket" class="btnIcon mark right" id="VoidTicketRefreshIcon">
      <span class="icon-refresh"></span>
    </div>
    <span style="width: 130px;" class="text-ellipsis left titleTxt">Void &amp; Cancelled</span>
  </div>
  <div class="leftBoxbody">
    <div class="boxbg">
      <div class="reSet" id="account">
        <a title="Bet List (Mini)" class="button" onclick="openBetList(0,0);" style="cursor: pointer"><span>Bet List (Mini)</span>
        </a>
        <a title="Waiting Bet" class="button" onclick="openBetList(1,0);" style="cursor: pointer"><span>Waiting Bet</span>
        </a>
      </div>
      <span id="VoidTicketSpan"></span>
    </div>
  </div>
  <div class="leftBoxFoot"></div>
</div>
<!-- End Of VoidTicket Session -->
</div>