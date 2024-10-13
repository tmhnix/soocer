<script type="text/javascript">
    top.TYPE = '{{$type}}';
    top.ODD_TYPE = '{{$odd_type}}';
    top.GAME_TYPE = '{{$game_type}}';
</script>
<div>
    <div class="caption sport1" ng-if="TYPE=='single'">
        <div class="mainTitle">Hôm nay</div>
        <div class="filterArea">
            <div class="filter liveOnly withCheckbox"><label class="" title="Ngưng kích hoạt"><input type="checkbox" value="on"><div class="checkbox"></div><span class="text">Trực tiếp</span></label></div>
            <button class="filter primary" title="Cá cược tổng hợp" ng-click="goToParlay()">Cược Xiên</button>
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
                <span >(</span>
                <span >10</span>
                <span >&nbsp;/&nbsp;</span>
                <span >10</span>
                <span >)&nbsp;</span>
                <span >Giải</span>
            </button>
            <div class="filter withCheckbox"><label class="icon-sportHotLeagues" title="Giải Đấu Nổi Bật"><input type="checkbox" value="on"><div class="checkbox"></div><span class="sportName">Giải Đấu Nổi Bật</span></label></div>
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
                    <span class="text-fill">Cược Nhanh</span>
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

    <a id="btnRefresh_D"  loading="loading.upleagues" on-refresh="onrefreshUpcoming" refresh-item number='10' class="button" title="Tải Lại" style="display: none;">
    </a>
    <a on-refresh="onrefreshInplay" loading="loading.leagues" refresh-item number='10' id="btnRefresh_L" class="button" title="Trực tiếp" style="display: none;">
    </a>

    <div class="caption sport1" ng-if="TYPE=='multiple'"><div class="mainTitle">Cá Cược Tổng Hợp</div><div class="filterArea">
        <button class="filter primary" ng-click="goToToday()" title="Sự kiện hôm nay">Sự kiện hôm nay</button><button class="filter icon-selectLeague"><!-- react-text: 24092 -->(<!-- /react-text --><span>22</span><!-- react-text: 24094 -->&nbsp;/&nbsp;<!-- /react-text --><!-- react-text: 24095 -->22<!-- /react-text --><!-- react-text: 24096 -->)&nbsp;<!-- /react-text --><!-- react-text: 24097 -->Giải<!-- /react-text --></button><button class="filter" title="2 Selections">2 Selections</button><button class="filter">Trợ giúp</button><div class="filter oddsTableStatus-connecting"></div><button class="icon-fontLarge filter hiddenElement" title="Switch larger Font"></button><button class="setting showLess fixed hiddenElement" title="Hiding some Options"></button><button class="setting popover pinItem hiddenElement" title="Setting Showing Options"><div class="popoverPanel"></div></button></div></div>
        <div class="promotionBoard" ng-show="menu.showPromotions">
      
        <div class="smallBtn inactive-light textC icon-clear" ng-click="menu.showPromotions = !menu.showPromotions" title="ĐÓNG"></div>

        <div class="promotionBoard-Items">
            <img class="promotionBoard-img" src="/assets/web/images/v2/banners/ABanner_SPORT_341.jpg">
        </div>
        <div class="promotionBoard-Items">
            <img class="promotionBoard-img" src="/assets/web/images/v2/banners/ABanner_NSPORT_394.jpg">
        </div>
        <div class="promotionBoard-Items">
            <img class="promotionBoard-img" src="/assets/web/images/v2/banners/ABanner_NSPORT_395.jpg">
        </div>
        <div class="promotionBoard-Items">
                <img class="promotionBoard-img" src="/assets/web/images/v2/banners/ABanner_NSPORT_385.jpg">
            </div>
    </div>

    <div class="oddsTable hdpou-a sport1">
        <div class="oddsTitleWrap">
            <button class="trigger toggle-primary icon-open" title="Collapse the League"></button>
            <div class="oddsTitle">
                <div class="time" title="Giờ">Giờ</div>
                <div class="event" title="Trận Đấu">Trận Đấu</div>
                <div class="odds subtxt" title="Toàn Thời Gian Handicap">Kèo Toàn Trận</div>
                <div class="odds subtxt" title="Toàn Thời Gian Over/Under">Tài Xỉu Toàn Trận</div>
                <div class="odds" title="Toàn Thời Gian 1X2">1X2 Toàn Trận</div>
                <div class="odds subtxt" title="Hiệp 1 Handicap">Kèo Chấp Hiệp 1</div>
                <div class="odds subtxt" title="Hiệp 1 Over/Under">Tài Xỉu Hiệp 1</div>
                <div class="odds" title="Hiệp 1 1X2">1X2 Hiệp 1</div>
                <div class="others"></div>
            </div>
        </div>
        <div class="leagueGroup" ng-repeat="(key, league) in leagues">
            <div class="league">
                <button class="trigger toggle icon-open" ng-class="{'icon-open': !league.close, 'icon-close': league.close}"  ng-click="league.close=!league.close"></button>
                <button class="trigger icon-favorite"></button>
                <div class="leagueName">
                    <span ><% league.name %></span>
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
                                    <span><% event.time == 'Ref_live' ? 'Trực tiếp': event.time %></span>
                                    <span ></span>
                                </span>
                            </div>
                        </div>
                        <odd-item class="multiOdds" key="key" ng-repeat="(key, odd) in event.odds" event="event" odd="odd"></odd-item>
                        <div class="others">
                            <button class="flexible primary icon-next smallBtn-text" title="Chi tiết"></button>
                            <button class="flexible primary icon-moreExpand smallBtn-text" title="Các loại cược khác">16</button>
                        </div>
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
                <div class="event" title="Trận Đấu">Trận Đấu</div>
                <div class="odds subtxt" title="Toàn Thời Gian Handicap">Kèo Toàn Trận</div>
                <div class="odds subtxt" title="Toàn Thời Gian Over/Under">Tài Xỉu Toàn Trận</div>
                <div class="odds" title="Toàn Thời Gian 1X2">1X2 Toàn Trận</div>
                <div class="odds subtxt" title="Hiệp 1 Handicap">Kèo Chấp Hiệp 1</div>
                <div class="odds subtxt" title="Hiệp 1 Over/Under">Tài Xỉu Hiệp 1</div>
                <div class="odds" title="Hiệp 1 1X2">1X2 Hiệp 1</div>
                <div class="others"></div>
            </div>
        </div>
        <div class="leagueGroup" ng-repeat="(key, league) in upleagues">
            <div class="league">
                <button class="trigger toggle icon-open"></button>
                <button class="trigger icon-favorite"></button>
                <div class="leagueName">
                    <span ><% league.name %></span>
                </div>
            </div>
            <div class="oddsContent">
                <div class="matchArea">
                    <div ng-class="{'normal-a': event.key%2==0, 'normal-b': event.key%2==1}" ng-repeat="(key, event) in league.events">
                        <div class="time">
                            <div class="binding" ng-bind-html="event.time | to_trusted">
                            </div>
                        </div>
                        <odd-item class="multiOdds" key="key" ng-repeat="(key, odd) in event.odds" event="event" odd="odd"></odd-item>
                        <div class="others">
                            <button class="flexible primary icon-next smallBtn-text" title="Chi tiết"></button>
                            <button class="flexible primary icon-moreExpand smallBtn-text" title="Các loại cược khác">16</button>
                        </div>
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
