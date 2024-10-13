@extends('web.v2.iframe.template')
@section('menu', 'statement')
@section('main')
    <div class="account">
        <!--start-->
        <div class="content">

            <div class="caption">
                <div class="filterArea ">
                    <div class="filter icon-print" title="In Trang Này" target="_self" onclick="window.print()"></div>
                    <div class="filter icon-refresh  " title="Tải Lại" onclick="window.location.reload();"> </div>
                </div>
                <div class="mainTitle icon-betList">Bảng Cược</div>
            </div>

            <div class="accountTable-verticalAlignTop">
                <div class="tableHead">
                    <div class="no">Số.</div>
                    <div class="date">Ngày</div>
                    <div class="choice">Chọn</div>
                    <div class="odds">Tỷ lệ cược</div>
                    <div class="stake">Tiền cọc</div>
                    <div class="stake">Thắng/Thua</div>
                    <div class="status">Trạng Thái</div>
                </div>
                <div class="tableBody">
                    @foreach ($bets as $key => $bet)
                        <div class="tableRow {{ $bet->bet_status_name == 'Cược bất thường' ? 'background-cbt' : '' }}">
                            <div class="no">{{ $key + 1 }}</div>
                            <div class="date">
                                <div class="ref">Ref No.:{{ $bet->id }}</div>
                                <div>{{ $bet->date }}</div>
                            </div>
                            <div class="choice">
                                <div class="betInfo {{ $bet->bet_status_name == 'Cược bất thường' ? 'text-decoration' : '' }}">
                                    <div class="ticketType hiddenElement">
                                        <div class="smallBtn  primary icon-next hiddenElement"
                                            onclick="toggleComboList('103900524726', this);"></div> <span></span>
                                    </div>
                                    <div class="mainInfo">
                                        <div class="betDetial">
                                        </div>
                                    </div>
                                    @if ($bet->bet_kind == 'normal')
                                        <div id="103900524726" class="">
                                            <div class="mainInfo ">
                                                @if ($bet->bet_type == 'Điểm số chính xác')
                                                    <div class="betType">{{ $bet->bet_type }} - [{{ $bet->type }}]</div>
                                                    <div class="betDetial">                                                    
                                                        <div class="oddsDetail">
                                                            <span class="selectorName">{{ $bet->bet_odd }}<span
                                                                    class="hiddenElement"></span></span>
                                                            <span class="selectorScore">[{{ $bet->ss }}]</span>
                                                            <span
                                                                class="selectorOdds {{ $bet->bet_value < 0 ? 'accent' : '' }}">{{ $bet->bet_value }}</span>
                                                            <span class="selectorOther"></span>

                                                        </div>
                                                        <div class="otherDetail">

                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="betType">Bóng đá / {{ $bet->bet_type }}</div>
                                                    <div class="betDetial">
                                                        <div class="name">{{ $bet->bet_name }}</div>
                                                        <div class="oddsDetail">
                                                            <span class="selectorName">{{ $bet->bet_odd }}<span
                                                                    class="hiddenElement"></span></span>
                                                            <span class="selectorScore">[{{ $bet->ss }}]</span>
                                                            <span
                                                                class="selectorOdds {{ $bet->bet_value < 0 ? 'accent' : '' }}">{{ $bet->bet_value }}</span>
                                                            <span class="selectorOther"></span>

                                                        </div>
                                                        <div class="otherDetail">

                                                        </div>
                                                    </div>
                                                @endif

                                                <div class="matchInfo-line">                                                   
                                                    <div class="homeName" title="{{ $bet->home }}">
                                                        {{ $bet->home }}</div>
                                                    <div class="awayName" title="{{ $bet->away }}">
                                                        {{ $bet->away }}</div>
                                                    <div class="leagueName" title="{{ $bet->league_name }}">
                                                        {{ $bet->league_name }}</div>
                                                    <div></div>
                                                    <div></div>

                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div id="103900524726" class="">
                                            @foreach ($bet->bets as $index => $value)
                                                <div class="mainInfo">
                                                    <div class="betType">Bóng đá / {{ $value->bet_type }}</div>
                                                    <div class="betDetial">
                                                        <div class="name">{{ $value->bet_name }}</div>
                                                        <div class="oddsDetail">
                                                            <span class="selectorName">{{ $value->bet_odd }}<span
                                                                    class="hiddenElement"></span></span>
                                                            <span class="selectorScore">[{{ $value->ss }}]</span>
                                                            <span
                                                                class="selectorOdds {{ $value->bet_value < 0 ? 'accent' : '' }}">{{ $value->bet_value }}</span>
                                                            <span class="selectorOther"></span>

                                                        </div>
                                                        <div class="otherDetail">

                                                        </div>
                                                    </div>
                                                    <div class="matchInfo-line">
                                                        <div></div>
                                                        <div></div>
                                                        <div></div>
                                                        <div class="homeName" title="{{ $value->home }}">
                                                            {{ $value->home }}</div>
                                                        <div class="awayName" title="{{ $value->away }}">
                                                            {{ $value->away }}</div>
                                                        <div class="leagueName" title="{{ $value->league_name }}">
                                                            {{ $value->league_name }}</div>
                                                        <div></div>
                                                        <div></div>

                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class=""></div>
                                    <div class=""></div>
                                    <div class=""></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="odds">
                                <div class="point {{ $bet->rate < 0 ? 'accent' : '' }}">{{ $bet->rate }}</div>MY
                            </div>
                            <div class="stake">
                                <div class="strikeThrough"></div>{{ $bet->bet_amount }}
                            </div>
                            <div class="odds" style="font-weight: bold;">
                                <span class="{{ $bet->bet_profit < 0 ? 'accent' : '' }}">{{ $bet->bet_profit }}</span>
                                <br />
                                {{ $bet->bet_commission }}
                            </div>
                            <div class="status">
                                <div style="color: #606060; font-weight: bold;">{{ $bet->bet_status_name }}</div>
                                @if ($bet->bet_kind == 'normal')
                                    <div style="color: black; font-weight: bold;">KT: {{ $bet->last_ss }}</div>
                                @endif
                                @if ($bet->ip_address)
                                    <div>From:</div>
                                    <div>{{ $bet->ip_address }}</div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                @if (isset($betsInfo))
                    <div class="tableFooter">
                        <div class="tableFooterRow">
                            <div class="total">Tổng phụ</div>
                            <div class="stake"></div>
                            <div class="credit {{ $betsInfo->profit < 0 ? 'accent' : '' }}">
                                {{ format_number_pretty($betsInfo->profit) }}</div>
                            <div class="status"></div>
                        </div>
                        <div class="tableFooterRow">
                            <div class="total">Tổng phụ (Hoa Hồng)</div>
                            <div class="stake"></div>
                            <div class="credit">{{ format_number_pretty($betsInfo->commission, 2) }}</div>
                            <div class="status"></div>
                        </div>
                        <div class="tableFooterRow">
                            <div class="total">Tổng cộng</div>
                            <div class="stake"></div>
                            <div class="credit {{ $betsInfo->profit + $betsInfo->commission < 0 ? 'accent' : '' }}">
                                {{ format_number_pretty($betsInfo->profit + $betsInfo->commission) }}</div>
                            <div class="status"></div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="note">
                <div class="title">Lưu ý</div>
                <div class="txt">Xin lưu ý rằng thời gian hiển thị dựa trên GMT -4 giờ.</div>
            </div>

            <div class="popupPanel-large" id="MoreDiv" style="display: none">
                <div class="heading-default " id="MoreTitle">
                    <div class="floatRight">
                        <button id="MoreCloser" class="glyphIcon-large secondary icon-close" title="Close"></button>
                    </div>
                    <div id="MoreTitleValue" class="text" title=""></div>
                </div>
                <div class="contentArea">
                    <div id="oPopContainer"></div>
                </div>
            </div>
        </div>
    </div>
@stop
