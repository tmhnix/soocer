<script type="text/javascript">
    top.TYPE = '{{ $type }}';
    top.ODD_TYPE = '{{ $odd_type }}';
</script>
<div class="">
    <a id="btnRefresh_D"  loading="loading.upleagues" on-refresh="onrefreshUpcoming" refresh-item number='10' class="button" title="Tải Lại" style="display: none;">
    </a>
    <a on-refresh="onrefreshInplay" loading="loading.leagues" refresh-item number='10' id="btnRefresh_L" class="button" title="Trực tiếp" style="display: none;">
    </a>
    <div class="caption">
        <div class="mainTitle">
            <i class="c-iconcolor-sport1"></i><span class="text">Hôm Nay / Tỷ Số Chính Xác</span>
        </div>
        <div class="filterArea">
            <div class="filter liveOnly withCheckbox"><label class="" title="Ngưng kích hoạt"><input
                        type="checkbox" value="on">
                    <div class="checkbox"></div><span class="text">Trực tiếp</span>
                </label></div><button class="filter icon-betSlip-parlay primary" title="Cược Xiên">Cược
                Xiên</button>
            <div class="dropdown filter">
                <div class="selected icon-allMarkets" title="Tất cả trận đấu"></div>
                <div class="dropdownPanel">
                    <div class="content icon-allMarkets">Tất cả trận đấu</div>
                    <div class="content icon-mainMarkets">Các trận đấu chính</div>
                    <div class="content icon-otherMarkets">Thị trường khác</div>
                </div>
            </div>
            <div class="dropdown filter">
                <div class="selected icon-normalSorting" title="Lựa chọn bình thường"></div>
                <div class="dropdownPanel">
                    <div class="content icon-sortByTime">Xếp theo thời gian</div>
                    <div class="content icon-normalSorting">Lựa chọn bình thường</div>
                </div>
            </div><button class="filter icon-selectLeague">(<span>19</span>&nbsp;/&nbsp;19)&nbsp;Giải</button>
            <div class="dropdown filter">
                <div class="selected icon-fullTimes" title="Toàn Trận"></div>
                <div class="dropdownPanel">
                    <div class="content icon-fullTimes">Toàn Trận</div>
                    <div class="content icon-halfTime">Hiệp 1</div>
                    <div class="content icon-2halfTime">Hiệp 2</div>
                </div>
            </div>
            <div class="filter withCheckbox active"><label class="" title="Được kích hoạt"><input
                        type="checkbox" value="on" checked="">
                    <div class="checkbox"></div><span class="text">Cược Nhanh</span>
                </label></div>
            <div class="filter oddsTableStatus-connecting" title="Đã Kết Nối Dữ Liệu"></div><button
                class="icon-fontLarge filter hiddenElement" title="Switch larger Font"></button><button
                class="setting showLess fixed hiddenElement" title="Hiding some Options"></button><button
                class="setting popover pinItem hiddenElement" title="Setting Showing Options">
                <div class="popoverPanel"></div>
            </button>
        </div>
    </div>
    <div class="oddsTable correctScore-a sport1">
        <div class="oddsTitleWrap"><button class="trigger toggle-primary icon-open" title="Thu hẹp Giải đấu"></button>
            <div class="oddsTitle">
                <div class="time" title="Giờ">Giờ</div>
                <div class="event" title="Trận Đấu">Trận Đấu</div>
                <div class="odds" title="1-0">1-0</div>
                <div class="odds" title="2-0">2-0</div>
                <div class="odds" title="2-1">2-1</div>
                <div class="odds" title="3-0">3-0</div>
                <div class="odds" title="3-1">3-1</div>
                <div class="odds" title="3-2">3-2</div>
                <div class="odds" title="4-0">4-0</div>
                <div class="odds" title="4-1">4-1</div>
                <div class="odds" title="4-2">4-2</div>
                <div class="odds" title="4-3">4-3</div>
                <div class="odds" title="0-0">0-0</div>
                <div class="odds" title="1-1">1-1</div>
                <div class="odds" title="2-2">2-2</div>
                <div class="odds" title="3-3">3-3</div>
                <div class="odds" title="4-4">4-4</div>
                <div class="odds" title="AOS">AOS</div>
            </div>
        </div>
        <div class="leagueGroup" ng-repeat="(key, league) in leagues" ng-if="league.cs">
            <div class="league">
                <button class="trigger toggle icon-open"
                    ng-class="{'icon-open': !league.close, 'icon-close': league.close}"
                    ng-click="league.close=!league.close"></button>
                <button class="trigger icon-favorite"></button>
                <div class="leagueName">
                    <span><% league.name %></span>
                </div>
            </div>

            <div class="oddsContent" ng-class="{'hiddenElement': league.close}">
                <div class="matchArea">
                    <div ng-class="{'live-a': event.key%2==0, 'live-b': event.key%2==1}"
                        ng-repeat="(key, event) in league.events" ng-if="event.correct_score">
                        <div class="time" ng-if="event.correct_score">
                            <div class="score" define-text="event.ss">
                                <span class=""><% event.ss %></span>
                            </div>
                            <div class="timeInfo">
                                <span class="timePlaying">
                                    <span class=""><% event.time %></span>
                                </span>
                            </div>
                        </div>
                        <odd-item class="multiOdds" key="key" event="event" ng-if="event.is_cs" type="correct_score">
                        </odd-item>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="oddsTable correctScore-a sport1">
        <div class="oddsTitleWrap"><button class="trigger toggle-primary icon-open" title="Thu hẹp Giải đấu"></button>
            <div class="oddsTitle">
                <div class="time" title="Giờ">Giờ</div>
                <div class="event" title="Trận Đấu">Trận Đấu</div>
                <div class="odds" title="1-0">1-0</div>
                <div class="odds" title="2-0">2-0</div>
                <div class="odds" title="2-1">2-1</div>
                <div class="odds" title="3-0">3-0</div>
                <div class="odds" title="3-1">3-1</div>
                <div class="odds" title="3-2">3-2</div>
                <div class="odds" title="4-0">4-0</div>
                <div class="odds" title="4-1">4-1</div>
                <div class="odds" title="4-2">4-2</div>
                <div class="odds" title="4-3">4-3</div>
                <div class="odds" title="0-0">0-0</div>
                <div class="odds" title="1-1">1-1</div>
                <div class="odds" title="2-2">2-2</div>
                <div class="odds" title="3-3">3-3</div>
                <div class="odds" title="4-4">4-4</div>
                <div class="odds" title="AOS">AOS</div>
            </div>
        </div>
        <div class="leagueGroup" ng-repeat="(key, league) in upleagues" ng-if="league.cs">
            <div class="league">
                <button class="trigger toggle icon-open"
                    ng-class="{'icon-open': !league.close, 'icon-close': league.close}"
                    ng-click="league.close=!league.close"></button>
                <button class="trigger icon-favorite"></button>
                <div class="leagueName">
                    <span><% league.name %></span>
                </div>
            </div>

            <div class="oddsContent" ng-class="{'hiddenElement': league.close}">
                <div class="matchArea">
                    <div ng-if="event.correct_score"
                        ng-class="{'normal-a': event.key%2==0, 'normal-b': event.key%2==1}"
                        ng-repeat="(key, event) in league.events">

                        <div class="time" ng-if="event.correct_score">
                            <div class="binding" ng-bind-html="event.time | to_trusted">
                            </div>
                        </div>
                        <odd-item class="multiOdds" key="key" event="event" ng-if="event.is_cs" type="correct_score">
                        </odd-item>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
