<style>
.icon-parlay::before {
    content: "\EA54";
    font-family:  "iconfont-asia2022"!important;
}
.icon-score-map::before {
    content: "\EA72";
    font-family:  "iconfont-asia2022"!important;
}
.icon-cashout::before {
    content: "\EA6C";
    font-family:  "iconfont-asia2022"!important;
}
.blue.smallBtn:hover::before{
    color: white!important;
    font-size: 1.1rem!important;
    font-family: "iconfont-asia2022"!important;
    background: rgb(45 73 118);
    
}
/*.accent.icon-soccer.smallBtn::before{*/
/*    font-size: 1.1rem;*/
/*}*/
.blue::before{
   color: rgb(45 73 118)!important;
   font-size: 1.1rem!important;
}

.flexible.primary.icon-moreExpand.smallBtn-text,
.flexible.primary.icon-next.smallBtn-text {
  background: #fff6f3;
  color: black !important;
  height: 2em;
  margin-right: 0.5em;
  padding: 1em;
}

.league .trigger {
  margin-right: unset;
}

.trigger.toggle {
  width: 2em;
  max-width: 2em;
}

.trigger.icon-favorite {
  width: 2em;
  max-width: 2em;
  font-family:  "iconfont-asia2022"!important;
}
.icon-favorite::before {
    font-family:  "iconfont-asia2022"!important;
}

.normal-a {
  background: #dfebf6;
  border-color: #bbbbbb;
}

.normal-b {
  background: #dfebf6;
  border-color: #bbbbbb;
}

.normal-b .multiOdds>div:nth-of-type(2),
.normal-a .multiOdds>div:nth-of-type(2),
.normal-b .multiOdds>div:nth-of-type(5),
.normal-a .multiOdds>div:nth-of-type(5) {
  border-left: 1px solid rgb(235, 206, 198, 1) !important;
}

.oddsTitle,
.oddsTitle-accent,
.oddsTitleSub {
  height: 28px;
  border: unset;

}
.c-modal__heading{
    background: rgb(45 73 118)!important;
}
.c-btn.c-btn--primary{
    background: rgb(45 73 118)!important;
}
.icon-statistic::before {
    font-family: "iconfont-asia2022"!important;
}
.icon-streaming.accent.smallBtn::before{
    color: rgb(145 16 8);
    font-size: 1.1rem;
    font-family: "iconfont-asia2022"!important;
}
.accent.icon-soccer.smallBtn::before{
    color: rgb(145 16 8);
    font-size: 1.1rem;
    font-family: "iconfont-asia2022"!important;
}

.icon-streaming.accent.smallBtn:hover::before{
    color: white;
    font-size: 1.3rem;
    font-family: "iconfont-asia2022"!important;
}
.accent.icon-soccer.smallBtn:hover::before{
    color: white;
    font-size: 0.8rem;
    font-family: "iconfont-asia2022"!important;
}


.oddsTable .event .team .iconSet .smallBtn {
    -webkit-box-flex: 0 0 auto;
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    border: 1px solid rgb(214 207 204);
    align-self: flex-start;
    height: 22px;
    width: 22px;
}
.accent.smallBtn,
.blue.smallBtn,
.accent.smallBtn-text {
    background: rgb(255 246 243); 
    color: #ffffff;
    margin-right: 5px;
}
.accent.smallBtn:hover,
.accent.smallBtn-text {
    background: rgb(145 16 8); 
    color: white;
}

.league+.oddsContent .matchArea:first-child>div {
  margin-bottom: 1px;
}

@media only screen and (max-width: 4008px) {
  .oddsTable .event {
    color: black;
    width: 17em;
    max-width: 17em;
  }
}

@media only screen and (max-width: 1208px) {
  .oddsTable .event {
    color: black;
    width: 17.3em;
    max-width: 17.3em;
  }
}

.live-a,
.live-b,
.normal-a,
.normal-b,
.mmr-a,
.mmr-b {
  border-top: 1px solid rgba(206,161,147, 0.7) !important;
  border-bottom: unset;
  border-right: unset;
  border-left: unset;
  height: 1px;
}

.oddsTable .multiOdds .event {
  color: black;
  width: 15.4em;
  max-width: 15.4em;
}

.oddsTable .odds {
  text-align: left;
}

.oddsTable .oddsBet {
  min-width: 4.2em;
  font-weight: bold;

}

.multiOdds .betArea {
  background-color: white;
  border-radius: 3px;
  margin-right: 2px;
  margin-left: 2px;
  font-size: 1.1em;
  font-weight: bold;
}

.multiOdds .odds .subtxt {
  /*border-bottom: 1px solid;*/
  border-color: unset !important;
}

/*.live-b .event+div,*/
/*.live-b .time,*/
/*.live-b .others,*/
/*.live-b .multiOdds+.multiOdds,*/
/*.hdpou-a .live-b .multiOdds>div:nth-of-type(5),*/
/*.hdpou-g .live-b .multiOdds>div:nth-of-type(4),*/
/*.hdpouSingle-a .live-b .multiOdds>div:nth-of-type(n+2),*/
/*.hdpouFullHalf-a .live-b .multiOdds>div:nth-of-type(n+2),*/
/*.live-b .manyOdds+.manyOdds,*/
/*.hdpou-a .live-b .manyOdds>div:nth-of-type(5),*/
/*.hdpou-g .live-b .manyOdds>div:nth-of-type(4),*/
/*.hdpouSingle-a .live-b .manyOdds>div:nth-of-type(n+2),*/
/*.hdpouFullHalf-a .live-b .manyOdds>div:nth-of-type(n+2),*/
/*.onextwo-a .live-b>div:nth-last-of-type(3),*/
/*.correctScore-a .live-b>div:nth-last-of-type(6),*/
/*.correctScore-d .live-b>div:nth-last-of-type(5),*/
/*.correctScore-b .live-b>div:nth-last-of-type(3),*/
/*.correctScore-e .live-b>.odds,*/
/*.oddEven-a .live-b>div:nth-last-of-type(2),*/
/*.totalGoal-a .live-b>div:nth-of-type(7),*/
/*.halfTimeFullTime-a .live-b>div:nth-last-of-type(3),*/
/*.halfTimeFullTime-a .live-b>div:nth-last-of-type(6),*/
/*.firstGoalLastGoal-a .live-b>div:nth-last-of-type(3),*/
/*.racing-a .live-b>div,*/
/*.racing-b .live-b>div,*/
/*.racing-c .live-b>div,*/
/*.racing-d .live-b>div,*/
/*.numberGame-a .live-b>div,*/
/*.numberGame-b .live-b>div,*/
/*.numberGame-c .live-b>div,*/
/*.numberGame-d .live-b>div,*/
/*.lotto-c .live-b>div,*/
/*.sport164 .live-b>div {*/
/*    border-color: unset !important;*/
/*}*/
/*.live-a .event+div,*/
/*.live-a .time,*/
/*.live-a .others,*/
/*.live-a .multiOdds+.multiOdds,*/
/*.hdpou-a .live-a .multiOdds>div:nth-of-type(5),*/
/*.hdpou-g .live-a .multiOdds>div:nth-of-type(4),*/
/*.hdpouSingle-a .live-a .multiOdds>div:nth-of-type(n+2),*/
/*.hdpouFullHalf-a .live-a .multiOdds>div:nth-of-type(n+2),*/
/*.live-a .manyOdds+.manyOdds,*/
/*.hdpou-a .live-a .manyOdds>div:nth-of-type(5),*/
/*.hdpou-g .live-a .manyOdds>div:nth-of-type(4),*/
/*.hdpouSingle-a .live-a .manyOdds>div:nth-of-type(n+2),*/
/*.hdpouFullHalf-a .live-a .manyOdds>div:nth-of-type(n+2),*/
/*.onextwo-a .live-a>div:nth-last-of-type(3),*/
/*.correctScore-a .live-a>div:nth-last-of-type(6),*/
/*.correctScore-d .live-a>div:nth-last-of-type(5),*/
/*.correctScore-b .live-a>div:nth-last-of-type(3),*/
/*.correctScore-e .live-a>.odds,*/
/*.oddEven-a .live-a>div:nth-last-of-type(2),*/
/*.totalGoal-a .live-a>div:nth-of-type(7),*/
/*.halfTimeFullTime-a .live-a>div:nth-last-of-type(3),*/
/*.halfTimeFullTime-a .live-a>div:nth-last-of-type(6),*/
/*.firstGoalLastGoal-a .live-a>div:nth-last-of-type(3),*/
/*.racing-a .live-a>div,*/
/*.racing-b .live-a>div,*/
/*.racing-c .live-a>div,*/
/*.racing-d .live-a>div,*/
/*.numberGame-a .live-a>div,*/
/*.numberGame-b .live-a>div,*/
/*.numberGame-c .live-a>div,*/
/*.numberGame-d .live-a>div,*/
/*.lotto-c .live-a>div,*/
/*.sport164 .live-a>div {*/
/*    border-color:unset;*/
/*}*/
/*.multiOdds .odds:nth-child(4)::before,*/
/*.multiOdds .odds:nth-child(7)::before {*/
/*    content: "";*/
/* border-right: 1px solid #bbbbbb; */
/*    position: absolute;*/
/*    height: 100%;*/
/*    width: 1px;*/
/*    right: 0;*/
/*    visibility: initial;*/
/*}*/
/*.matchArea .multiOdds>div:nth-of-type(2),*/
/*.matchArea .multiOdds>div:nth-of-type(3),*/
/*.matchArea .multiOdds>div:nth-of-type(4),*/
/*.matchArea .multiOdds>div:nth-of-type(5),*/
/*.matchArea .multiOdds>div:nth-of-type(6),*/
/*.matchArea .multiOdds>div:nth-of-type(7),*/
/*.matchArea .multiOdds>div:nth-of-type(8) {*/
/*  border-top: 1px solid rgba(206,161,147, 0.5) !important;*/
/*}*/

.oddsTable .live-a>div:first-child,
.oddsTable .live-b>div:first-child,
.oddsTable .normal-a>div:first-child,
.oddsTable .normal-b>div:first-child,
.oddsTable .mmr-a>div:first-child,
.oddsTable .mmr-b>div:first-child,
.numberGame-a .live-a>div:nth-last-of-type(3),
.numberGame-a .live-b>div:nth-last-of-type(3),
.numberGame-a .normal-a>div:nth-last-of-type(3),
.numberGame-a .normal-b>div:nth-last-of-type(3),
.numberGame-a .mmr-a>div:nth-last-of-type(3),
.numberGame-a .mmr-b>div:nth-last-of-type(3),
.numberGame-a .live-a>div:nth-last-of-type(5),
.numberGame-a .live-b>div:nth-last-of-type(5),
.numberGame-a .normal-a>div:nth-last-of-type(5),
.numberGame-a .normal-b>div:nth-last-of-type(5),
.numberGame-a .mmr-a>div:nth-last-of-type(5),
.numberGame-a .mmr-b>div:nth-last-of-type(5),
.numberGame-d .live-a>div:nth-last-of-type(2),
.numberGame-d .live-b>div:nth-last-of-type(2),
.numberGame-d .normal-a>div:nth-last-of-type(2),
.numberGame-d .normal-b>div:nth-last-of-type(2),
.numberGame-d .mmr-a>div:nth-last-of-type(2),
.numberGame-d .mmr-b>div:nth-last-of-type(2),
.numberGame-d .live-a>div:nth-last-of-type(5),
.numberGame-d .live-b>div:nth-last-of-type(5),
.numberGame-d .normal-a>div:nth-last-of-type(5),
.numberGame-d .normal-b>div:nth-last-of-type(5),
.numberGame-d .mmr-a>div:nth-last-of-type(5),
.numberGame-d .mmr-b>div:nth-last-of-type(5),
.numberGame-d .live-a>div:nth-last-of-type(7),
.numberGame-d .live-b>div:nth-last-of-type(7),
.numberGame-d .normal-a>div:nth-last-of-type(7),
.numberGame-d .normal-b>div:nth-last-of-type(7),
.numberGame-d .mmr-a>div:nth-last-of-type(7),
.numberGame-d .mmr-b>div:nth-last-of-type(7),
.lotto-c .live-a>div:nth-last-of-type(6),
.lotto-c .live-b>div:nth-last-of-type(6),
.lotto-c .normal-a>div:nth-last-of-type(6),
.lotto-c .normal-b>div:nth-last-of-type(6),
.lotto-c .mmr-a>div:nth-last-of-type(6),
.lotto-c .mmr-b>div:nth-last-of-type(6) {
    border-right: 1px solid rgb(235, 206, 198, 1);
}
.live-b .event+div,
.live-b .time,
.live-b .others,
.live-b .multiOdds+.multiOdds,
.hdpou-a .live-b .multiOdds>div:nth-of-type(5),
.hdpou-g .live-b .multiOdds>div:nth-of-type(4),
.hdpouSingle-a .live-b .multiOdds>div:nth-of-type(n+2),
.hdpouFullHalf-a .live-b .multiOdds>div:nth-of-type(n+2),
.live-b .manyOdds+.manyOdds,
.hdpou-a .live-b .manyOdds>div:nth-of-type(5),
.hdpou-g .live-b .manyOdds>div:nth-of-type(4),
.hdpouSingle-a .live-b .manyOdds>div:nth-of-type(n+2),
.hdpouFullHalf-a .live-b .manyOdds>div:nth-of-type(n+2),
.onextwo-a .live-b>div:nth-last-of-type(3),
.correctScore-a .live-b>div:nth-last-of-type(6),
.correctScore-d .live-b>div:nth-last-of-type(5),
.correctScore-b .live-b>div:nth-last-of-type(3),
.correctScore-e .live-b>.odds,
.oddEven-a .live-b>div:nth-last-of-type(2),
.totalGoal-a .live-b>div:nth-of-type(7),
.halfTimeFullTime-a .live-b>div:nth-last-of-type(3),
.halfTimeFullTime-a .live-b>div:nth-last-of-type(6),
.firstGoalLastGoal-a .live-b>div:nth-last-of-type(3),
.racing-a .live-b>div,
.racing-b .live-b>div,
.racing-c .live-b>div,
.racing-d .live-b>div,
.numberGame-a .live-b>div,
.numberGame-b .live-b>div,
.numberGame-c .live-b>div,
.numberGame-d .live-b>div,
.lotto-c .live-b>div,
.sport164 .live-b>div {
    border-color: rgb(235, 206, 198, 1);
}
.matchArea .multiOdds>div:nth-of-type(2),
.matchArea .multiOdds>div:nth-of-type(3),
.matchArea .multiOdds>div:nth-of-type(4),
.matchArea .multiOdds>div:nth-of-type(5),
.matchArea .multiOdds>div:nth-of-type(6),
.matchArea .multiOdds>div:nth-of-type(7),
.matchArea .multiOdds>div:nth-of-type(8) {
  border-top: 1px solid rgb(235, 206, 198, 1) !important;
}
.matchArea .live-b>odd-item:first-child .multiOdds>div:nth-of-type(2),
.matchArea .live-a>odd-item:first-child .multiOdds>div:nth-of-type(3),
.matchArea>odd-item:first-child .multiOdds>div:nth-of-type(4),
.matchArea>odd-item:first-child .multiOdds>div:nth-of-type(5),
.matchArea>odd-item:first-child .multiOdds>div:nth-of-type(6),
.matchArea>odd-item:first-child .multiOdds>div:nth-of-type(7),
.matchArea>odd-item:first-child .multiOdds>div:nth-of-type(8) {
  border-top: unset !important;
}


.live-a .event+div, .live-a .time, .live-a .others, .live-a .multiOdds+.multiOdds, .hdpou-a .live-a .multiOdds>div:nth-of-type(5), .hdpou-g .live-a .multiOdds>div:nth-of-type(4), .hdpouSingle-a .live-a .multiOdds>div:nth-of-type(n+2), .hdpouFullHalf-a .live-a .multiOdds>div:nth-of-type(n+2), .live-a .manyOdds+.manyOdds, .hdpou-a .live-a .manyOdds>div:nth-of-type(5), .hdpou-g .live-a .manyOdds>div:nth-of-type(4), .hdpouSingle-a .live-a .manyOdds>div:nth-of-type(n+2), .hdpouFullHalf-a .live-a .manyOdds>div:nth-of-type(n+2), .onextwo-a .live-a>div:nth-last-of-type(3), .correctScore-a .live-a>div:nth-last-of-type(6), .correctScore-d .live-a>div:nth-last-of-type(5), .correctScore-b .live-a>div:nth-last-of-type(3), .correctScore-e .live-a>.odds, .oddEven-a .live-a>div:nth-last-of-type(2), .totalGoal-a .live-a>div:nth-of-type(7), .halfTimeFullTime-a .live-a>div:nth-last-of-type(3), .halfTimeFullTime-a .live-a>div:nth-last-of-type(6), .firstGoalLastGoal-a .live-a>div:nth-last-of-type(3), .racing-a .live-a>div, .racing-b .live-a>div, .racing-c .live-a>div, .racing-d .live-a>div, .numberGame-a .live-a>div, .numberGame-b .live-a>div, .numberGame-c .live-a>div, .numberGame-d .live-a>div, .lotto-c .live-a>div, .sport164 .live-a>div {
    border-color: rgb(235, 206, 198, 1);
}

.flexible.accent.smallBtn.btn-live {
  display: none;
}

.category-sub {
  background: white;
}

.category-sportList {
  background: white;
  /*border: 1px solid black;*/
}

.category.today>li:nth-of-type(6) {
  display: none;
}

.category-sportList.icon-sport8:first-child {
  display: none;
}

.category-sportList.icon-sport18x .smallBtn.flexible.icon-new {
  display: none;
}

.category-sub-list .betTypeName {
  max-width: 10em;
}

/* div.live-b>odd-item:first-child .multiOdds>div:nth-of-type(2),
.matchArea .multiOdds>div:nth-of-type(3),
.matchArea .multiOdds>div:nth-of-type(4),
.matchArea .multiOdds>div:nth-of-type(5),
.matchArea .multiOdds>div:nth-of-type(6),
.matchArea .multiOdds>div:nth-of-type(7),
.matchArea .multiOdds>div:nth-of-type(8)
{
    border-top:unset!important;
} */
.multiOdds .odds:nth-child(4)::before,
.multiOdds .odds:nth-child(7)::before {
  content: "";
  border-right: unset;
  position: absolute;
  height: 100%;
  width: 1px;
  right: 0;
  visibility: initial;
}

.multiOdds .event {
  border-right: unset;
}

.oddsBet.indicatorDown,
.oddsBet.indicatorUp-a,
.oddsBet.indicatorUp,
.oddsBet.indicatorDown-a {
  background-color: unset !important;
}

.oddsTitle>div+div,
.oddsTitle-accent>div+div,
.oddsTitleSub>div+div {
  border-left: unset;
}

.betArea .txt {
  color: #767170;
}

.oddsBet.underdog,
.oddsBet.underdog .oddsBet {
  color: #ff0000 !important;
}

.infoGroup .infoRow {
  background: unset;
}

.infoGroup .infoTitle {
  background: unset;
}

.mainLayout {
  max-width: 1866px;
}

.header-belt,
.header-topBar {
  min-width: calc(768px - 0.833em*2);
  max-width: calc(1866px - 0.833em*2);
  margin: 0 auto;
}
</style>
<script type="text/javascript">
top.TYPE = '{{$type}}';
top.ODD_TYPE = '{{$odd_type}}';
</script>
<div class="caption sport1" ng-if="TYPE=='single'">
  <div class="mainTitle">Hôm nay</div>
  <div class="filterArea c-odds-page__option">
    <button class="filter primary" title="Cược Xiên" ng-click="goToParlay()">Cược Xiên</button>
    <div class="dropdown filter">
      <div class="selected icon-allMarkets" title="Tất Cả Trận Đấu"></div>
      <div class="dropdownPanel">
        <div class="content icon-allMarkets">Tất Cả Trận Đấu</div>
        <div class="content icon-mainMarkets">Các Trận Đấu Chính</div>
      </div>
    </div>
    <div class="dropdown filter">
      <div class="selected icon-normalSorting" title="Lựa chọn bình thường"></div>
      <div class="dropdownPanel">
        <div class="content icon-sortByTime">Chọn Lựa Theo Thời Gian</div>
        <div class="content icon-normalSorting">Lựa chọn bình thường</div>
      </div>
    </div>
    <button class="filter icon-selectLeague">
      <span>(</span>
      <span>10</span>
      <span>&nbsp;/&nbsp;</span>
      <span>10</span>
      <span>)&nbsp;</span>
      <span>Giải</span>
    </button>
    <div class="filter withCheckbox"><label class="icon-sportHotLeagues" title="Giải Đấu Nổi Bật"><input type="checkbox"
          value="on">
        <div class="checkbox"></div><span class="sportName">Giải Đấu Nổi Bật</span>
      </label></div>
    <div class="dropdown filter">
      <div class="selected icon-doubleLine" title="Dòng Kép"></div>
      <div class="dropdownPanel">
        <div class="content icon-singleLine">Một Dòng</div>
        <div class="content icon-doubleLine">Dòng Kép</div>
        <div class="content icon-fullTimes">Toàn Thời Gian</div>
        <div class="content icon-halfTime">Hiệp 1</div>
      </div>
    </div>
    <div class="dropdown filter withSwitch">
      <div class="selected icon-malayOdds" title="Malay Odds"></div>
      <div class="dropdownPanel">
        <div class="content icon-decimalOdds">Decimal Odds</div>
        <div class="content icon-malayOdds">Malay Odds</div>
        <div class="content icon-hongKongOdds">Hong Kong Odds</div>
      </div>
    </div>
    <div class="filter withCheckbox primary">
      <label class="" title="Được kích hoạt">
        <input type="checkbox" checked="">
        <div class="checkbox"></div>
        <span class="text-fill">Cược Nhanh</span>
      </label>
    </div>
    <div class="filter oddsTableStatus-connecting"></div>
    <button class="icon-fontLarge filter hiddenElement" title="Switch larger Font"></button>
    <button class="setting showLess fixed hiddenElement" title="Hiding some Options"></button>
    <button class="setting popover pinItem hiddenElement" title="Setting Showing Options">
      <div class="popoverPanel"></div>
    </button>
  </div>
</div>

<a id="btnRefresh_D" loading="loading.upleagues" on-refresh="onrefreshUpcoming" refresh-item number='90' class="button"
  title="Tải Lại" style="display: none;">
</a>
<a on-refresh="onrefreshInplay" loading="loading.leagues" refresh-item number='20' id="btnRefresh_L" class="button"
  title="Trực tiếp" style="display: none;">
</a>

<div class="caption sport1" ng-if="TYPE=='multiple'">
  <div class="mainTitle">Cá Cược Tổng Hợp</div>
  <div class="filterArea">
    <button class="filter primary" ng-click="goToToday()" title="Sự kiện hôm nay">Sự kiện hôm nay</button><button
      class="filter icon-selectLeague">
      <!-- react-text: 24092 -->(
      <!-- /react-text --><span>22</span><!-- react-text: 24094 -->&nbsp;/&nbsp;
      <!-- /react-text -->
      <!-- react-text: 24095 -->22
      <!-- /react-text -->
      <!-- react-text: 24096 -->)&nbsp;
      <!-- /react-text -->
      <!-- react-text: 24097 -->Giải
      <!-- /react-text -->
    </button><button class="filter" title="2 Selections">2 Selections</button><button class="filter">Trợ giúp</button>
    <div class="filter oddsTableStatus-connecting"></div><button class="icon-fontLarge filter hiddenElement"
      title="Switch larger Font"></button><button class="setting showLess fixed hiddenElement"
      title="Hiding some Options"></button><button class="setting popover pinItem hiddenElement"
      title="Setting Showing Options">
      <div class="popoverPanel"></div>
    </button>
  </div>
</div>


<div class="promotionBoard" ng-show="menu.showPromotions">

  <div class="smallBtn inactive-light textC icon-clear" ng-click="menu.showPromotions = !menu.showPromotions"
    title="ĐÓNG"></div>


  <div class="swiper mySwiper" style="display: none;">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH VICTORIA ÚC">GIẢI VÔ ĐỊCH VICTORIA ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Port Melbourne Sharks"><span class="c-team-name c-custom">Port
                Melbourne Sharks</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:30PM
              </div>
            </div>
            <div class="c-event-card__team-away c-custom" title="Dandenong City SC">
              <div class="c-team-flag c-custom"></div><span class="c-team-name c-custom">Dandenong City SC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header">
              <div class="c-btn c-btn--cashout" title="Bán Vé Cược"><i class="c-icon c-icon--cashout"></i></div><span
                class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a class="c-btn c-btn--icon"
                title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a>
            </div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">-1.75</span><span
                  class="c-odds c-odds--minus" data-moid="55350874__446506700" style="cursor: pointer;">-1.00</span>
              </div>
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">+1.75</span><span class="c-odds c-custom"
                  data-moid="55350874__446506700" style="cursor: pointer;">0.90</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league c-custom">
              <div class="c-text" title="GIẢI VÔ ĐỊCH QUEENSLAND ÚC">GIẢI VÔ ĐỊCH QUEENSLAND ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Brisbane Roar FC (Trẻ) (N)"><span
                class="c-team-name c-custom">Brisbane Roar FC (Trẻ) (N)</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:15PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Brisbane City FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Brisbane City FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header">
              <div class="c-btn c-btn--cashout" title="Bán Vé Cược"><i class="c-icon c-icon--cashout"></i></div><span
                class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a class="c-btn c-btn--icon"
                title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a>
            </div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+0.25</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55350879__445558914" style="cursor: pointer;">-0.94</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-0.25</span><span class="c-odds c-custom" data-moid="55350879__445558914"
                  style="cursor: pointer;">0.78</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH VICTORIA ÚC">GIẢI VÔ ĐỊCH VICTORIA ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Altona Magic">
              <span class="c-team-name c-custom">Altona Magic</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font>
                12:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Avondale FC">
              <div class="c-team-flag"></div>
              <span class="c-team-name c-custom">Avondale FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header">
              <div class="c-btn c-btn--cashout" title="Bán Vé Cược"><i class="c-icon c-icon--cashout"></i></div>
              <span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span>
              <a class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a>
            </div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;">
                <span class="c-text-goal c-custom">+0.75</span>
                <span class="c-odds c-custom" data-moid="55350869__446506612" style="cursor: pointer;">0.95</span>
              </div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;">
                <span class="c-text-goal c-custom">-0.75</span>
                <span class="c-odds c-custom" data-moid="55350869__446506612" style="cursor: pointer;">0.95</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Bayswater City"><span class="c-team-name c-custom">Bayswater
                City</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Inglewood United">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Inglewood United</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-0.50</span><span class="c-odds c-custom" data-moid="55140236__443878966"
                  style="cursor: pointer;">0.88</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+0.50</span><span class="c-odds c-custom" data-moid="55140236__443878966"
                  style="cursor: pointer;">0.96</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Cockburn City"><span class="c-team-name c-custom">Cockburn
                City</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Stirling Macedonia FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Stirling Macedonia FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">+0.25</span><span
                  class="c-odds c-odds--minus c-custom" data-moid="55140235__443878458"
                  style="cursor: pointer;">-0.94</span></div>
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">-0.25</span><span class="c-odds c-custom"
                  data-moid="55140235__443878458" style="cursor: pointer;">0.78</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Cockburn City"><span class="c-team-name c-custom">Cockburn
                City</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Stirling Macedonia FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Stirling Macedonia FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 3.00</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55140235__443878453" style="cursor: pointer;">-0.97</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 3.00</span><span class="c-odds c-custom"
                  data-moid="55140235__443878453" style="cursor: pointer;">0.79</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Gwelup Croatia SC"><span class="c-team-name c-custom">Gwelup
                Croatia SC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Floreat Athena">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Floreat Athena</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+0.75</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55140240__443878960" style="cursor: pointer;">-0.94</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-0.75</span><span class="c-odds c-custom" data-moid="55140240__443878960"
                  style="cursor: pointer;">0.78</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Gwelup Croatia SC"><span class="c-team-name c-custom">Gwelup
                Croatia SC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Floreat Athena">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Floreat Athena</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 3.50</span><span class="c-odds c-custom"
                  data-moid="55140240__443878957" style="cursor: pointer;">0.90</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 3.50</span><span class="c-odds c-custom"
                  data-moid="55140240__443878957" style="cursor: pointer;">0.92</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Perth RedStar FC"><span class="c-team-name c-custom">Perth
                RedStar FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Armadale SC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Armadale SC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-1.00</span><span class="c-odds c-custom" data-moid="55140239__448362513"
                  style="cursor: pointer;">0.90</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+1.00</span><span class="c-odds c-custom" data-moid="55140239__448362513"
                  style="cursor: pointer;">0.94</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Perth RedStar FC"><span class="c-team-name c-custom">Perth
                RedStar FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Armadale SC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Armadale SC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button odd-bg-custom" data-odds-status="change-up" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">O 3.25</span><span class="c-odds c-custom"
                  data-moid="55140239__443878712" style="cursor: pointer;">0.91</span></div>
              <div class="c-odds-button odd-bg-custom" data-odds-status="change-down" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">u 3.25</span><span class="c-odds c-custom"
                  data-moid="55140239__443878712" style="cursor: pointer;">0.91</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Perth SC (N)"><span class="c-team-name c-custom">Perth SC
                (N)</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Perth Glory (Trẻ)">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Perth Glory (Trẻ)</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-1.00</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55388609__448362481" style="cursor: pointer;">-0.95</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+1.00</span><span class="c-odds c-custom" data-moid="55388609__448362481"
                  style="cursor: pointer;">0.79</span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Perth SC (N)"><span class="c-team-name c-custom">Perth SC
                (N)</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Perth Glory (Trẻ)">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Perth Glory (Trẻ)</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 3.25</span><span class="c-odds c-custom"
                  data-moid="55388609__445843204" style="cursor: pointer;">0.98</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 3.25</span><span class="c-odds c-custom"
                  data-moid="55388609__445843204" style="cursor: pointer;">0.84</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Sorrento FC"><span class="c-team-name c-custom">Sorrento
                FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Balcatta FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Balcatta FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button odd-bg-custom" data-odds-status="change-down" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">-1.50</span><span class="c-odds c-custom"
                  data-moid="55140238__443878461" style="cursor: pointer;">0.83</span></div>
              <div class="c-odds-button odd-bg-custom" data-odds-status="change-up" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">+1.50</span><span
                  class="c-odds c-odds--minus c-custom" data-moid="55140238__443878461"
                  style="cursor: pointer;">-0.99</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TÂY ÚC">GIẢI VÔ ĐỊCH TÂY ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Sorrento FC"><span class="c-team-name c-custom">Sorrento
                FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Balcatta FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Balcatta FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 3.50</span><span class="c-odds c-custom"
                  data-moid="55140238__443878457" style="cursor: pointer;">0.94</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 3.50</span><span class="c-odds c-custom"
                  data-moid="55140238__443878457" style="cursor: pointer;">0.88</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH BẮC NEW SOUTH WALES ÚC">GIẢI VÔ ĐỊCH BẮC NEW SOUTH WALES
                ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Cooks Hill United FC"><span class="c-team-name c-custom">Cooks
                Hill United FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Newcastle Olympic FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Newcastle Olympic FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header">
              <div class="c-btn c-btn--cashout" title="Bán Vé Cược"><i class="c-icon c-icon--cashout"></i></div><span
                class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a class="c-btn c-btn--icon"
                title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a>
            </div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">+1.25</span><span class="c-odds c-custom"
                  data-moid="55388837__445845517" style="cursor: pointer;">0.89</span></div>
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">-1.25</span><span class="c-odds c-custom"
                  data-moid="55388837__445845517" style="cursor: pointer;">0.95</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH BẮC NEW SOUTH WALES ÚC">GIẢI VÔ ĐỊCH BẮC NEW SOUTH WALES
                ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Cooks Hill United FC"><span class="c-team-name c-custom">Cooks
                Hill United FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Newcastle Olympic FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Newcastle Olympic FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header">
              <div class="c-btn c-btn--cashout" title="Bán Vé Cược"><i class="c-icon c-icon--cashout"></i></div><span
                class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a class="c-btn c-btn--icon" title="Chi tiết"><i
                  class="c-icon c-icon--arrow-right"></i></a>
            </div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 3.50</span><span class="c-odds c-custom"
                  data-moid="55388837__445845512" style="cursor: pointer;">0.89</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 3.50</span><span class="c-odds c-custom"
                  data-moid="55388837__445845512" style="cursor: pointer;">0.93</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="JAPAN J-LEAGUE DIVISION 3">JAPAN J-LEAGUE DIVISION 3</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Iwaki FC"><span class="c-team-name c-custom">Iwaki FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Azul Claro Numazu FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Azul Claro Numazu FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header">
              <div class="c-btn c-btn--cashout" title="Bán Vé Cược"><i class="c-icon c-icon--cashout"></i></div><span
                class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a class="c-btn c-btn--icon"
                title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a>
            </div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-0.75</span><span class="c-odds c-custom" data-moid="55426839__446156256"
                  style="cursor: pointer;">0.78</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+0.75</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55426839__446156256" style="cursor: pointer;">-0.94</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="JAPAN J-LEAGUE DIVISION 3">JAPAN J-LEAGUE DIVISION 3</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Iwaki FC"><span class="c-team-name c-custom">Iwaki FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Azul Claro Numazu FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Azul Claro Numazu FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header">
              <div class="c-btn c-btn--cashout" title="Bán Vé Cược"><i class="c-icon c-icon--cashout"></i></div><span
                class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a class="c-btn c-btn--icon" title="Chi tiết"><i
                  class="c-icon c-icon--arrow-right"></i></a>
            </div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 2.50</span><span class="c-odds c-custom"
                  data-moid="55426839__446156253" style="cursor: pointer;">0.90</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 2.50</span><span class="c-odds c-custom"
                  data-moid="55426839__446156253" style="cursor: pointer;">0.92</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="JAPAN FOOTBALL LEAGUE">JAPAN FOOTBALL LEAGUE</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Tokyo Musashino United FC"><span
                class="c-team-name c-custom">Tokyo Musashino United FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Kochi United SC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Kochi United SC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-0.50</span><span class="c-odds c-custom" data-moid="55708453__448522270"
                  style="cursor: pointer;">0.98</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+0.50</span><span class="c-odds c-custom" data-moid="55708453__448522270"
                  style="cursor: pointer;">0.86</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="JAPAN FOOTBALL LEAGUE">JAPAN FOOTBALL LEAGUE</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Tokyo Musashino United FC"><span
                class="c-team-name c-custom">Tokyo Musashino United FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Kochi United SC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Kochi United SC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">O 2.50</span><span
                  class="c-odds c-odds--minus c-custom" data-moid="55708453__448522264"
                  style="cursor: pointer;">-0.99</span></div>
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">u 2.50</span><span class="c-odds c-custom"
                  data-moid="55708453__448522264" style="cursor: pointer;">0.81</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="JAPAN FOOTBALL LEAGUE">JAPAN FOOTBALL LEAGUE</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Nara Club "><span class="c-team-name c-custom">Nara Club </span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="MIO Biwako Shiga">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">MIO Biwako Shiga</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-0.75</span><span class="c-odds c-custom" data-moid="55708451__448522448"
                  style="cursor: pointer;">0.79</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+0.75</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55708451__448522448" style="cursor: pointer;">-0.95</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="JAPAN FOOTBALL LEAGUE">JAPAN FOOTBALL LEAGUE</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Nara Club "><span class="c-team-name c-custom">Nara Club </span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="MIO Biwako Shiga">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">MIO Biwako Shiga</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 2.50</span><span class="c-odds c-custom"
                  data-moid="55708451__448522446" style="cursor: pointer;">0.80</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 2.50</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55708451__448522446" style="cursor: pointer;">-0.98</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TASMANIA ÚC">GIẢI VÔ ĐỊCH TASMANIA ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Launceston City FC"><span
                class="c-team-name c-custom">Launceston City FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Olympia FC Warriors">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Olympia FC Warriors</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-1.50</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55138001__443852336" style="cursor: pointer;">-0.95</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+1.50</span><span class="c-odds c-custom" data-moid="55138001__443852336"
                  style="cursor: pointer;">0.79</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH TASMANIA ÚC">GIẢI VÔ ĐỊCH TASMANIA ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Launceston City FC"><span
                class="c-team-name c-custom">Launceston City FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Olympia FC Warriors">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Olympia FC Warriors</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 3.75</span><span class="c-odds c-custom"
                  data-moid="55138001__443852332" style="cursor: pointer;">0.78</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 3.75</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55138001__443852332" style="cursor: pointer;">-0.96</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="AUSTRALIA CAPITAL NATIONAL PREMIER LEAGUE">AUSTRALIA CAPITAL NATIONAL
                PREMIER LEAGUE</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Monaro Panthers"><span class="c-team-name c-custom">Monaro
                Panthers</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:45PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Canberra Olympic">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Canberra Olympic</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">-1.25</span><span class="c-odds c-custom"
                  data-moid="55136684__443827916" style="cursor: pointer;">0.94</span></div>
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">+1.25</span><span class="c-odds c-custom"
                  data-moid="55136684__443827916" style="cursor: pointer;">0.90</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="AUSTRALIA CAPITAL NATIONAL PREMIER LEAGUE">AUSTRALIA CAPITAL NATIONAL
                PREMIER LEAGUE</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Monaro Panthers"><span class="c-team-name c-custom">Monaro
                Panthers</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:45PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Canberra Olympic">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Canberra Olympic</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 3.50</span><span class="c-odds c-custom"
                  data-moid="55136684__443827912" style="cursor: pointer;">0.90</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 3.50</span><span class="c-odds c-custom"
                  data-moid="55136684__443827912" style="cursor: pointer;">0.92</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH BẮC ÚC">GIẢI VÔ ĐỊCH BẮC ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="University Azzurri FC"><span
                class="c-team-name c-custom">University Azzurri FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Casuarina FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Casuarina FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header">
              <div class="c-btn c-btn--cashout" title="Bán Vé Cược"><i class="c-icon c-icon--cashout"></i></div><span
                class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a class="c-btn c-btn--icon"
                title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a>
            </div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+2.25</span><span class="c-odds c-custom" data-moid="55708525__448523051"
                  style="cursor: pointer;">0.94</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-2.25</span><span class="c-odds c-custom" data-moid="55708525__448523051"
                  style="cursor: pointer;">0.90</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH BẮC ÚC">GIẢI VÔ ĐỊCH BẮC ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="University Azzurri FC"><span
                class="c-team-name c-custom">University Azzurri FC</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Casuarina FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Casuarina FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header">
              <div class="c-btn c-btn--cashout" title="Bán Vé Cược"><i class="c-icon c-icon--cashout"></i></div><span
                class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a class="c-btn c-btn--icon" title="Chi tiết"><i
                  class="c-icon c-icon--arrow-right"></i></a>
            </div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 4.00</span><span class="c-odds c-custom"
                  data-moid="55708525__448523047" style="cursor: pointer;">0.82</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 4.00</span><span class="c-odds c-custom"
                  data-moid="55708525__448523047" style="cursor: pointer;">1.00</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="AUSTRALIA FOOTBALL NEW SOUTH WALES LEAGUE 1">AUSTRALIA FOOTBALL NEW
                SOUTH WALES LEAGUE 1</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Blacktown Spartans "><span
                class="c-team-name c-custom">Blacktown Spartans </span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Mounties Wanderers">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Mounties Wanderers</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-0.75</span><span class="c-odds c-custom" data-moid="55422091__446125984"
                  style="cursor: pointer;">0.98</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+0.75</span><span class="c-odds c-custom" data-moid="55422091__446125984"
                  style="cursor: pointer;">0.82</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="AUSTRALIA FOOTBALL NEW SOUTH WALES LEAGUE 1">AUSTRALIA FOOTBALL NEW
                SOUTH WALES LEAGUE 1</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Blacktown Spartans "><span
                class="c-team-name c-custom">Blacktown Spartans </span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Mounties Wanderers">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Mounties Wanderers</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">O 3.25</span><span class="c-odds c-custom"
                  data-moid="55422091__446125980" style="cursor: pointer;">0.89</span></div>
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">u 3.25</span><span class="c-odds c-custom"
                  data-moid="55422091__446125980" style="cursor: pointer;">0.91</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="KOREA K3 LEAGUE">KOREA K3 LEAGUE</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Yangju Citizen"><span class="c-team-name c-custom">Yangju
                Citizen</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 03:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Pocheon Citizen FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Pocheon Citizen FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">0.00</span><span class="c-odds c-custom" data-moid="54179094__435969030"
                  style="cursor: pointer;">0.96</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">0.00</span><span class="c-odds c-custom" data-moid="54179094__435969030"
                  style="cursor: pointer;">0.84</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="KOREA K3 LEAGUE">KOREA K3 LEAGUE</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Yangju Citizen"><span class="c-team-name c-custom">Yangju
                Citizen</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 03:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Pocheon Citizen FC">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Pocheon Citizen FC</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 2.25</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="54179094__435969026" style="cursor: pointer;">-0.97</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 2.25</span><span class="c-odds c-custom"
                  data-moid="54179094__435969026" style="cursor: pointer;">0.77</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="AUSTRALIA QUEENSLAND NATIONAL PREMIER LEAGUE U23">AUSTRALIA QUEENSLAND
                NATIONAL PREMIER LEAGUE U23</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Eastern Suburbs U23"><span class="c-team-name c-custom">Eastern
                Suburbs U23</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:45PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Gold Coast United U23">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Gold Coast United U23</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-0.25</span><span class="c-odds c-custom" data-moid="55665714__448175733"
                  style="cursor: pointer;">0.80</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal">+0.25</span><span class="c-odds c-custom" data-moid="55665714__448175733"
                  style="cursor: pointer;">1.00</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="AUSTRALIA QUEENSLAND NATIONAL PREMIER LEAGUE U23">AUSTRALIA QUEENSLAND
                NATIONAL PREMIER LEAGUE U23</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Eastern Suburbs U23"><span class="c-team-name c-custom">Eastern
                Suburbs U23</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:45PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Gold Coast United U23">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Gold Coast United U23</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 3.50</span><span class="c-odds" data-moid="55665714__448175729"
                  style="cursor: pointer;">0.80</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 3.50</span><span class="c-odds c-custom"
                  data-moid="55665714__448175729" style="cursor: pointer;">1.00</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="AUSTRALIA CAPITAL NATIONAL PREMIER LEAGUE U23">AUSTRALIA CAPITAL
                NATIONAL PREMIER LEAGUE U23</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="West Canberra Wanderers FC U23"><span
                class="c-team-name c-custom">West Canberra Wanderers FC U23</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Gungahlin United FC U23">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Gungahlin United FC U23</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">+0.50</span><span class="c-odds c-custom"
                  data-moid="55665830__448176448" style="cursor: pointer;">0.85</span></div>
              <div class="c-odds-button odd-bg-custom" data-odds-status="" data-selected="false"
                style="cursor: pointer;"><span class="c-text-goal c-custom">-0.50</span><span class="c-odds c-custom"
                  data-moid="55665830__448176448" style="cursor: pointer;">0.95</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="AUSTRALIA CAPITAL NATIONAL PREMIER LEAGUE U23">AUSTRALIA CAPITAL
                NATIONAL PREMIER LEAGUE U23</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="West Canberra Wanderers FC U23"><span
                class="c-team-name c-custom">West Canberra Wanderers FC U23</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 01:30PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Gungahlin United FC U23">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Gungahlin United FC U23</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 3.75</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55665830__448176444" style="cursor: pointer;">-1.00</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 3.75</span><span class="c-odds c-custom"
                  data-moid="55665830__448176444" style="cursor: pointer;">0.80</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH U21 VICTORIA ÚC">GIẢI VÔ ĐỊCH U21 VICTORIA ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Dandenong Thunder U21"><span
                class="c-team-name c-custom">Dandenong Thunder U21</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Bentleigh Greens U21">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Bentleigh Greens U21</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Cược Chấp">Cược Chấp</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">+0.50</span><span class="c-odds c-custom" data-moid="55665862__448176847"
                  style="cursor: pointer;">0.89</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">-0.50</span><span class="c-odds c-custom" data-moid="55665862__448176847"
                  style="cursor: pointer;">0.91</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="c-event-card" style="width: calc(381px - .25rem);">
          <div class="c-event-card__header">
            <div class="c-text-league">
              <div class="c-text c-custom" title="GIẢI VÔ ĐỊCH U21 VICTORIA ÚC">GIẢI VÔ ĐỊCH U21 VICTORIA ÚC</div>
            </div>
          </div>
          <div class="c-event-card__match">
            <div class="c-event-card__team-home" title="Dandenong Thunder U21"><span
                class="c-team-name c-custom">Dandenong Thunder U21</span>
              <div class="c-team-flag"></div>
            </div>
            <div class="c-event-card__info">
              <div class="c-match-time c-custom">
                <font color="red">TRỰC TIẾP</font> 02:00PM
              </div>
            </div>
            <div class="c-event-card__team-away" title="Bentleigh Greens U21">
              <div class="c-team-flag"></div><span class="c-team-name c-custom">Bentleigh Greens U21</span>
            </div>
          </div>
          <div class="c-event-card-bets">
            <div class="c-event-card-bets__header"><span class="c-text c-custom" title="Tài/Xỉu">Tài/Xỉu</span><a
                class="c-btn c-btn--icon" title="Chi tiết"><i class="c-icon c-icon--arrow-right"></i></a></div>
            <div class="c-event-card-bets__main">
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">O 3.25</span><span class="c-odds c-custom"
                  data-moid="55665862__448176843" style="cursor: pointer;">0.78</span></div>
              <div class="c-odds-button" data-odds-status="" data-selected="false" style="cursor: pointer;"><span
                  class="c-text-goal c-custom">u 3.25</span><span class="c-odds c-odds--minus c-custom"
                  data-moid="55665862__448176843" style="cursor: pointer;">-0.98</span></div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>


  <!--<div class="promotionBoard-Items">-->
  <!--    <img class="promotionBoard-img" src="/assets/web/images/v2/banners/ABanner_SPORT_341.jpg">-->
  <!--</div>-->
  <!--<div class="promotionBoard-Items">-->
  <!--    <img class="promotionBoard-img" src="/assets/web/images/v2/banners/ABanner_NSPORT_394.jpg">-->
  <!--</div>-->
  <!--<div class="promotionBoard-Items">-->
  <!--    <img class="promotionBoard-img" src="/assets/web/images/v2/banners/ABanner_NSPORT_395.jpg">-->
  <!--</div>-->
  <!--<div class="promotionBoard-Items">-->
  <!--    <img class="promotionBoard-img" src="/assets/web/images/v2/banners/ABanner_NSPORT_385.jpg">-->
  <!--</div>-->
</div>

<div class="oddsTable hdpou-a sport1">
  <div class="oddsTitleWrap">
    <button class="trigger toggle-primary icon-open" title="Collapse the League"></button>
    <div class="oddsTitle">
      <div class="time" title="Giờ">Giờ</div>
      <div class="event" style="color:white;display: flex;" title="Trận Đấu">
        <svg style="border-radius: 100%; background-color: white;margin-right: 5px;" xmlns="http://www.w3.org/2000/svg"
          version="1.1" id="fo圖層_1" x="576" viewBox="0 0 48 48" xml:space="preserve" width="20" height="20">
          <style>
          .fost0 {
            display: none;
            opacity: .1
          }

          .fost1 {
            display: inline;
            fill: red
          }

          .fost2,
          .fost3 {
            display: none;
            fill: none
          }

          .fost3 {
            stroke: #e6e6e4;
            stroke-width: .5;
            stroke-miterlimit: 10
          }

          .fost4 {
            fill: #911108
          }
          </style>
          <g class="fost0">
            <path class="fost1" d="M34 14v20H14V14h20m2-2H12v24h24V12z" />
          </g>
          <path class="fost2" d="M12 12h24v24H12V12z" />
          <path class="fost3" d="M12 12h24v24H12z" />
          <path class="fost4"
            d="M43.4 18.8C42 13.6 38.6 9.4 34 6.6 24.4 1.2 12.2 4.4 6.6 14 1.2 23.6 4.4 35.8 14 41.4c3.2 1.8 6.6 2.6 10 2.6 7 0 13.6-3.6 17.4-10 2.6-4.6 3.2-10 2-15.2zm-5 13.6c-4.6 8-14.8 10.6-22.8 6.2C7.6 34 5 23.8 9.4 15.8c3.2-5.4 8.8-8.4 14.6-8.4 2.8 0 5.6.8 8.4 2.2 3.8 2.2 6.6 5.8 7.8 10.2 1 4.2.4 8.6-1.8 12.6z" />
          <path class="fost4" d="M22.4 26.8c1.6 1 3.6.4 4.6-1.2L31.6 11 21.2 22.4c-1 1.6-.4 3.6 1.2 4.4z" />
        </svg>

        Trận Đấu
      </div>
      <!--<div class="odds subtxt" title="Toàn Thời Gian Handicap">Kèo Toàn Trận</div>-->
      <!--<div class="odds subtxt" title="Toàn Thời Gian Over/Under">Tài Xỉu Toàn Trận</div>-->
      <!--<div class="odds" title="Toàn Thời Gian 1X2">1X2 Toàn Trận</div>-->
      <!--<div class="odds subtxt" title="Hiệp 1 Handicap">Kèo Chấp Hiệp 1</div>-->
      <!--<div class="odds subtxt" title="Hiệp 1 Over/Under">Tài Xỉu Hiệp 1</div>-->
      <!--<div class="odds" title="Hiệp 1 1X2">1X2 Hiệp 1</div>-->
      <!--<div class="others"></div>-->
    </div>
  </div>
  <div class="leagueGroup" ng-repeat="(key, league) in leagues | orderBy: '-orderClient'">
    <div class="league" style="background: #e6e6e6;border-bottom-width: 0px;">
      <button style="background: #e6e6e6;" class="trigger toggle icon-open" ng-class="{'icon-open': !league.close, 'icon-close': league.close}"
        ng-click="league.close=!league.close"></button>
      <button class="trigger icon-favorite"></button>
      <div class="leagueName">
        <!--<span ><% league.name %></span>-->
        <!--<div class="time" title="Giờ">Giờ</div>-->
        <div class="oddsTitle" style="background: #e6e6e6;">
          <div class="event" style="color:black; border-right: 1px solid #bbbbbb; " title=""><% league.name %></div>
          <div class="odds subtxt" style="color:black" title="Toàn Thời Gian Handicap">Cược Chấp Toàn Trận</div>
          <div class="odds subtxt" style="color:black" title="Toàn Thời Gian Over/Under">Tài Xỉu Toàn Trận</div>
          <div class="odds" style="color:black;border-right: 1px solid #bbbbbb;" title="Toàn Thời Gian 1X2">1X2 Toàn
            Trận</div>
          <div class="odds subtxt" style="color:black" title="Hiệp 1 Handicap">Cược Chấp Hiệp 1</div>
          <div class="odds subtxt" style="color:black" title="Hiệp 1 Over/Under">Tài Xỉu Hiệp 1</div>
          <div class="odds" style="color:black;border-right: 1px solid #bbbbbb;" title="Hiệp 1 1X2">1X2 Hiệp 1</div>
          <!-- <div class="others"  style="color:black"></div> -->
        </div>
      </div>
    </div>
    <div class="oddsContent" ng-class="{'hiddenElement': league.close}">
      <div class="matchArea">
        <div ng-class="{'live-a': event.key%2==0, 'live-b': event.key%2==1}" ng-repeat="(key, event) in league.events">
          <div class="time">
            <div class="score" define-text="event.ss">
              <span><% event.ss %></span>
            </div>
            <div class="timeInfo">
              <span class="timePlaying">
                <span><% event.time.split(" ")[0] %></span>
                <span><% event.time.split(" ")[1] %></span>
              </span>
            </div>
            <button style="width:100%;max-width: unset;margin-top: 5px;" class="trigger icon-favorite" title="Yêu thích của tôi"></button>
          </div>
          <odd-item class="multiOdds" key="key" ng-repeat="(key, odd) in event.odds" event="event" odd="odd"
            type='live'></odd-item>
          <!-- <div class="others">
                            <button class="flexible primary icon-next smallBtn-text" title="Chi tiết"></button>
                            <button class="flexible primary icon-moreExpand smallBtn-text" title="Các loại cược khác">16</button>
                        </div> -->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="oddsTable hdpou-a sport1">
  <div class="oddsTitleWrap">
    <button class="trigger toggle-primary icon-open" title="Collapse the League"></button>
    <div class="oddsTitle">
      <div class="time" title="Giờ">Giờ</div>
      <div class="event" style="color:white;display: flex;" title="Trận Đấu">
        <svg style="border-radius: 100%; background-color: white;margin-right: 5px;" xmlns="http://www.w3.org/2000/svg"
          version="1.1" id="fo圖層_1" x="576" viewBox="0 0 48 48" xml:space="preserve" width="20" height="20">
          <style>
          .fost0 {
            display: none;
            opacity: .1
          }

          .fost1 {
            display: inline;
            fill: red
          }

          .fost2,
          .fost3 {
            display: none;
            fill: none
          }

          .fost3 {
            stroke: #e6e6e4;
            stroke-width: .5;
            stroke-miterlimit: 10
          }

          .fost4 {
            fill: #911108
          }
          </style>
          <g class="fost0">
            <path class="fost1" d="M34 14v20H14V14h20m2-2H12v24h24V12z" />
          </g>
          <path class="fost2" d="M12 12h24v24H12V12z" />
          <path class="fost3" d="M12 12h24v24H12z" />
          <path class="fost4"
            d="M43.4 18.8C42 13.6 38.6 9.4 34 6.6 24.4 1.2 12.2 4.4 6.6 14 1.2 23.6 4.4 35.8 14 41.4c3.2 1.8 6.6 2.6 10 2.6 7 0 13.6-3.6 17.4-10 2.6-4.6 3.2-10 2-15.2zm-5 13.6c-4.6 8-14.8 10.6-22.8 6.2C7.6 34 5 23.8 9.4 15.8c3.2-5.4 8.8-8.4 14.6-8.4 2.8 0 5.6.8 8.4 2.2 3.8 2.2 6.6 5.8 7.8 10.2 1 4.2.4 8.6-1.8 12.6z" />
          <path class="fost4" d="M22.4 26.8c1.6 1 3.6.4 4.6-1.2L31.6 11 21.2 22.4c-1 1.6-.4 3.6 1.2 4.4z" />
        </svg>
        Trận Đấu
      </div>
      <!--<div class="odds subtxt" title="Toàn Thời Gian Handicap">Kèo Toàn Trận</div>-->
      <!--<div class="odds subtxt" title="Toàn Thời Gian Over/Under">Tài Xỉu Toàn Trận</div>-->
      <!--<div class="odds" title="Toàn Thời Gian 1X2">1X2 Toàn Trận</div>-->
      <!--<div class="odds subtxt" title="Hiệp 1 Handicap">Kèo Chấp Hiệp 1</div>-->
      <!--<div class="odds subtxt" title="Hiệp 1 Over/Under">Tài Xỉu Hiệp 1</div>-->
      <!--<div class="odds" title="Hiệp 1 1X2">1X2 Hiệp 1</div>-->
      <!--<div class="others"></div>-->
    </div>
  </div>
  <div class="leagueGroup" ng-repeat="(key, league) in upleagues  | orderBy: '-orderClient'"
    ng-if="league.isDisplayLeagure">
    <div class="league" style="background: #e6e6e6;border-bottom-width: 0px;">
      <button style="background: #e6e6e6;" class="trigger toggle icon-open" ng-class="{'icon-open': !league.close, 'icon-close': league.close}"
        ng-click="league.close=!league.close"></button>
      <button class="trigger icon-favorite"></button>
      <div class="leagueName">
        <div class="oddsTitle" style="background: #e6e6e6;">
          <div class="event" style="color:black; border-right: 1px solid #bbbbbb; " title=""><% league.name %></div>
          <div class="odds subtxt" style="color:black" title="Toàn Thời Gian Handicap">Cược Chấp Toàn Trận</div>
          <div class="odds subtxt" style="color:black" title="Toàn Thời Gian Over/Under">Tài Xỉu Toàn Trận</div>
          <div class="odds" style="color:black;border-right: 1px solid #bbbbbb;" title="Toàn Thời Gian 1X2">1X2 Toàn
            Trận</div>
          <div class="odds subtxt" style="color:black" title="Hiệp 1 Handicap">Cược Chấp Hiệp 1</div>
          <div class="odds subtxt" style="color:black" title="Hiệp 1 Over/Under">Tài Xỉu Hiệp 1</div>
          <div class="odds" style="color:black;border-right: 1px solid #bbbbbb;" title="Hiệp 1 1X2">1X2 Hiệp 1</div>
        </div>
      </div>
    </div>

    <div class="oddsContent" ng-class="{'hiddenElement': league.close}">
      <div class="matchArea">
        <div ng-class="{'normal-a': event.key%2==0, 'normal-b': event.key%2==1}"
          ng-repeat="(key, event) in league.events">
          <div class="time">
            <div class="binding" ng-bind-html="event.time | to_trusted">
            </div>
          </div>
          <odd-item class="multiOdds" key="key" ng-repeat="(key, odd) in event.odds" event="event" odd="odd"></odd-item>
          <!-- <div class="others">
                            <button class="flexible primary icon-next smallBtn-text" title="Chi tiết"></button>
                            <button class="flexible primary icon-moreExpand smallBtn-text" title="Các loại cược khác">16</button>
                        </div> -->
        </div>
      </div>
    </div>
  </div>
</div>
<div id="footer">
  <footer class="midFooter">
    <ul class="nav">
      <li id="howtouse">Cách sử Dụng</li>
    </ul>
    <div class="copyright">© Copyright 2022 . viva88 . All Rights Reserved.</div>
  </footer>
</div>
</div>