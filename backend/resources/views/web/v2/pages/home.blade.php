@extends('web.v2.template')
@section('body-class', 'profile')
@section('main')
<div ng-controller="HomeV2Controller">
    <div class="caption sport1">
        <div class="mainTitle">Hôm Nay</div>
        <div class="filterArea">
            <button class="filter primary" title="Cá cược tổng hợp">Cá cược tổng hợp</button>
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
            <a id="btnRefresh_D" ng-class="{'disable': loading.upleagues}" loading="loading.upleagues" on-refresh="onrefreshUpcoming" refresh-item number='90' class="button" title="Tải Lại" style="display: none;">
            </a>
            <a on-refresh="onrefreshInplay" ng-class="{'disable': loading.leagues}" loading="loading.leagues" refresh-item number='20' id="btnRefresh_L" class="button" title="Trực tiếp" style="display: none;">
            </a>
        </div>
    </div>
    <div class="promotionBoard" ng-show="menu.showPromotions">
        <div class="smallBtn inactive-light textC icon-clear" ng-click="menu.showPromotions = !menu.showPromotions" title="ĐÓNG"></div>
        <div class="promotionBoard-Items">
            <img class="promotionBoard-img" src="/assets/web/images/v2/banners/promotionBoard_PH3AIO.jpg?v201804191111" onclick="javascript:menuTrigger('T','1','HDPOU')">
        </div>
        <div class="promotionBoard-Items">
            <img class="promotionBoard-img" src="/assets/web/images/v2/banners/promotionBoard_eSports.jpg?v=20180411?v201804191111" onclick="javascript:menuTrigger('T','43','HDPOU3')">
        </div>
        <div class="promotionBoard-Items">
            <img class="promotionBoard-img" src="/assets/web/images/v2/banners/promotionBoard_DancingLion.jpg?v201804191111" onclick="javascript:window.util.conditionalOpen('vb','/VendorGame/OpenVBCrossSelling?gameID=dancing-lions','w_casino','width=1024,height=768,location=no,fullscreen=1,scrollbars=yes,resizable=yes');addAnalysis(1,'dancing-lions',12,0);">
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
                <button class="trigger toggle icon-open"></button>
                <button class="trigger icon-favorite"></button>
                <div class="leagueName">
                    <span ><% league.name %></span>
                </div>
            </div>
            <div class="oddsContent">
                <div class="matchArea">
                    <div class="live-a">
                        <div class="time">
                            <div class="score">
                                <span >0</span>
                                <span >-</span>
                                <span >0</span>
                            </div>
                            <div class="timeInfo">
                                <span class="timePlaying">
                                    <span >1H 27'</span>
                                    <span ></span>
                                </span>
                            </div>
                        </div>
                        <div class="multiOdds">
                            <div class="event">
                                <div class="team">
                                    <div class="name name-pointer accent" title="CA Independiente">
                                        <div class="text">
                                            <span >CA Independiente</span>
                                        </div>
                                    </div>
                                    <div class="iconSet">
                                        <button class="icon-streaming accent smallBtn" title="Live Streaming"></button>
                                        <button class="accent icon-soccer smallBtn" title="Live Match" style="cursor:default;"></button>
                                        <button class="icon-favorite smallBtn" title="Yêu thích của tôi"></button>
                                        <button class="icon-favorite smallBtn" title="Favorite"></button>
                                    </div>
                                </div>
                                <div class="team">
                                    <div class="name name-pointer" title="Defensa y Justicia">
                                        <div class="text">
                                            <span >Defensa y Justicia</span>
                                        </div>
                                    </div>
                                    <div class="iconSet">
                                        <button class="primary icon-scoreMap smallBtn" title="Score Map"></button>
                                        <button class="primary icon-statistic smallBtn" title="Statistic Information"></button>
                                    </div>
                                </div>
                                <div class="team">
                                    <div class="extra">Hòa</div>
                                </div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >0-0.5</span>
                                    </span>
                                    <div class="oddsBet indicatorUp" style="cursor:pointer;">
                                        <span data-moid="24835250__140975406">0.97</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt"></span>
                                    <div class="oddsBet indicatorDown" style="cursor:pointer;">
                                        <span data-moid="24835250__140975406">0.95</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >1.5</span>
                                    </span>
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24835250__140975404">0.82</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt">
                                        <span >u</span>
                                    </span>
                                    <div class="oddsBet underdog" style="cursor:pointer;">
                                        <span data-moid="24835250__140975404">-0.92</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds">
                                <div class="betArea">
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24835250__140975402">2.29</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24835250__140975402">3.85</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24835250__140975402">2.61</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >0</span>
                                    </span>
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24835250__140975400">0.63</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt"></span>
                                    <div class="oddsBet underdog" style="cursor:pointer;">
                                        <span data-moid="24835250__140975400">-0.73</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >0.5</span>
                                    </span>
                                    <div class="oddsBet indicatorDown underdog" style="cursor:pointer;">
                                        <span data-moid="24835250__140975399">-0.58</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt">
                                        <span >u</span>
                                    </span>
                                    <div class="oddsBet indicatorUp" style="cursor:pointer;">
                                        <span data-moid="24835250__140975399">0.48</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds">
                                <div class="betArea">
                                    <div class="oddsBet indicatorDown" style="cursor:pointer;">
                                        <span data-moid="24835250__140975395">4.20</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <div class="oddsBet indicatorDown" style="cursor:pointer;">
                                        <span data-moid="24835250__140975395">6.10</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <div class="oddsBet indicatorUp" style="cursor:pointer;">
                                        <span data-moid="24835250__140975395">1.43</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="multiOdds">
                            <div class="event">
                                <div class="team"></div>
                                <div class="team"></div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >0.5</span>
                                    </span>
                                    <div class="oddsBet underdog" style="cursor:pointer;">
                                        <span data-moid="24835250__141951509">-0.77</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt"></span>
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24835250__141951509">0.69</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >1.5-2</span>
                                    </span>
                                    <div class="oddsBet underdog" style="cursor:pointer;">
                                        <span data-moid="24835250__141951510">-0.89</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt">
                                        <span >u</span>
                                    </span>
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24835250__141951510">0.79</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds">
                                <div class="betArea"></div>
                                <div class="betArea"></div>
                                <div class="betArea"></div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >0-0.5</span>
                                    </span>
                                    <div class="oddsBet underdog" style="cursor:pointer;">
                                        <span data-moid="24835250__141951519">-0.50</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt"></span>
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24835250__141951519">0.40</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >0.5-1</span>
                                    </span>
                                    <div class="oddsBet underdog" style="cursor:pointer;">
                                        <span data-moid="24835250__141951528">-0.39</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt">
                                        <span >u</span>
                                    </span>
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24835250__141951528">0.29</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds">
                                <div class="betArea"></div>
                                <div class="betArea"></div>
                                <div class="betArea"></div>
                            </div>
                        </div>
                        <div class="others">
                            <button class="flexible specialD smallBtn-text" title="SuperLive">SL</button>
                            <button class="accent icon-fastMarket smallBtn-text" title="Fast Markets">Fast</button>
                            <button class="flexible primary icon-moreExpand smallBtn-text" title="More Bet Types">9</button>
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
                    <div class="normal-a">
                        <div class="time">
                            <div class="binding">
                                <font color="red">LIVE</font> 09:00AM
                            </div>
                        </div>
                        <div class="multiOdds">
                            <div class="event">
                                <div class="team">
                                    <div class="name name-pointer accent" title="Deportivo Pasto">
                                        <div class="text">
                                            <span >Deportivo Pasto</span>
                                        </div>
                                    </div>
                                    <div class="iconSet">
                                        <button class="accent icon-soccer smallBtn" title="Live Match" style="cursor:default;"></button>
                                        <button class="icon-favorite smallBtn" title="Favorite"></button>
                                    </div>
                                </div>
                                <div class="team">
                                    <div class="name name-pointer" title="Boyaca Chico">
                                        <div class="text">
                                            <span >Boyaca Chico</span>
                                        </div>
                                    </div>
                                    <div class="iconSet">
                                        <button class="primary icon-scoreMap smallBtn" title="Score Map"></button>
                                        <button class="primary icon-statistic smallBtn" title="Statistic Information"></button>
                                    </div>
                                </div>
                                <div class="team">
                                    <div class="extra">Hòa</div>
                                </div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >0.5-1</span>
                                    </span>
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24907127__141817282">0.73</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt"></span>
                                    <div class="oddsBet underdog" style="cursor:pointer;">
                                        <span data-moid="24907127__141817282">-0.89</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >2.0</span>
                                    </span>
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24907127__141817280">0.76</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt">
                                        <span >u</span>
                                    </span>
                                    <div class="oddsBet underdog" style="cursor:pointer;">
                                        <span data-moid="24907127__141817280">-0.94</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds">
                                <div class="betArea">
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24907127__141817279">1.55</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24907127__141817279">5.40</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24907127__141817279">3.55</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >0-0.5</span>
                                    </span>
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24907127__141817277">0.76</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt"></span>
                                    <div class="oddsBet underdog" style="cursor:pointer;">
                                        <span data-moid="24907127__141817277">-0.92</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds subtxt">
                                <div class="betArea">
                                    <span class="txt">
                                        <span >0.5-1</span>
                                    </span>
                                    <div class="oddsBet indicatorUp" style="cursor:pointer;">
                                        <span data-moid="24907127__141817276">0.77</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <span class="txt">
                                        <span >u</span>
                                    </span>
                                    <div class="oddsBet indicatorDown underdog" style="cursor:pointer;">
                                        <span data-moid="24907127__141817276">-0.95</span>
                                    </div>
                                </div>
                            </div>
                            <div class="odds">
                                <div class="betArea">
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24907127__141817269">2.17</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24907127__141817269">6.60</span>
                                    </div>
                                </div>
                                <div class="betArea">
                                    <div class="oddsBet" style="cursor:pointer;">
                                        <span data-moid="24907127__141817269">2.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="others">
                            <button class="flexible specialD smallBtn-text" title="SuperLive">SL</button>
                            <button class="flexible primary icon-moreExpand smallBtn-text" title="More Bet Types">3</button>
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
            <div class="copyright">© Copyright 2022. viva88.com. All Rights Reserved.</div>
        </footer>
        <script type="text/javascript">
            var item = "{{$req->ref}}"
            if (item == 'number_game') {
                location = '/bingo';
            }
        </script>
    </div>
</div>
@stop