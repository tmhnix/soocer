<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="todoApp">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Statement</title>
    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/M_UnderOver.css?v=201802011053"
        rel="stylesheet" type="text/css">
    <script type="application/javascript" src="{{ elixir('js/web-all.js') }}"></script>
    <script type="application/javascript" src="{{ elixir('js/templates.js') }}"></script>
    <link rel="stylesheet" href="{{ elixir('css/web-app.css') }}" />
    <link rel="stylesheet" href="{{ elixir('css/web-all.css') }}" />
    <style type="text/css">
        .iplink {
            color: #045ace !important;
            font-family: Tahoma;
            font-size: 10px;
            font-weight: 100;
        }

        .iplink:hover {
            color: #f60;
            text-decoration: none;
        }

    </style>
</head>

<body ng-controller="BetsController" ng-init="bets={{ json_encode($bets) }}" class="statement-detail">
    <div>
        <div class="titleBar">
            <div class="title">Chi tiết kết quả cược</div>
            <div class="right">
                <a href="{!! route('web.statement') !!}" class="button mark"><span>Trở về</span></a>
                <a id="rfbu" target="_self" onclick="window.print()" class="button"><span>In trang</span></a>
                <a onclick="javascript:location.reload()" id="btnRefresh_D" class="button" title="Refresh"><span>
                        <div class="icon-refresh" title="Refresh"></div>
                    </span>
                </a>
            </div>
        </div>
        <div class="tabbox_F">
            <table class="oddsTable info" width="100%" cellpadding="0" cellspacing="0" border="0">
                <tbody>
                    <tr>
                        <th width="22">Số</th>
                        <th width="115" align="left" class="even">Ngày</th>
                        <th width="250" align="left">Chọn</th>
                        <th width="80" align="right" class="even">Tỷ lệ</th>
                        <th width="60" align="right">Tiền cược</th>
                        <th width="60" align="right" class="even">Thắng/ thua</th>
                        <th width="105" align="left">Trạng thái</th>
                    </tr>
                    <tr valign="top" ng-class="{'bgcpe': key%2 == 0, 'bgcpelight': key%2 == 1}"
                        ng-repeat="(key, bet) in bets">
                        <td align="center" valign="top">1</td>
                        <td valign="top" nowrap="">
                            <div><strong>Ref No:<% bet.id %></strong></div>
                            <div><% bet.date %></div>
                        </td>
                        <td valign="top" ng-if="bet.bet_kind =='normal'">
                            <div class="TextStyle01"></div>
                            <div class="multiple">
                                <div class="TextStyle01 "><%::bet.game_type%> / <% ::bet.bet_type %> </div>
                                <div>
                                    <div class="FavTeamClass" ng-class="{'UdrDogTeamClass': bet.bet_position == 1}">
                                        <% ::bet.bet_name %></div>
                                </div>
                                <span class="TextStyle03"><% ::bet.bet_odd  %></span>
                                <span class="TextStyle01">[<% ::bet.ss %>]</span> @<span class="UdrDogOddsClass"
                                    define-text='bet.bet_value'><% ::bet.bet_value | number:2 %></span>
                                <div class="TextStyle04 " ng-if="!bet.number_code"><% ::bet.home %> -vs-
                                    <% ::bet.away %><br></div>
                                <div class="TextStyle04 " ng-if="bet.number_code">No. <% ::bet.number_code %><br>
                                </div>
                                <span class="TextStyle04 "><% ::bet.league_name %></span>
                            </div>
                        </td>
                        <td valign="top" ng-if="bet.bet_kind =='group'">
                            <div id="Detail_" class="TextStyle01">Cá cược tổng hợp</div>
                            <div class="multiple" ng-repeat="(key, value) in bet.bets">
                                <div ng-if="bet.bet_type_raw != 'correct_score'">
                                    <div class="TextStyle01 ">Bóng đá / <% ::value.bet_type %> </div>
                                    <div class="FavOddsClass" style="color: #b50000;" title=""><% ::value.bet_name %>
                                    </div>
                                    <span class="TextStyle03 "> </span><span
                                        class="TextStyle01 "><% ::value.bet_odd  %></span><span
                                        class="UdrDogOddsClass "> @ <% ::value.bet_value | number:2 %></span>
                                </div>
                                <div class="TextStyle04 "><% ::value.home %> -vs- <% ::value.away %>
                                    <br>
                                </div>
                                <div class="TextStyle04 "><% ::value.league_name %>
                                    <br>
                                </div>
                            </div>
                        </td>
                        <td align="right" valign="top" nowrap="nowrap"><span class="UdrDogOddsClass"
                                define-text='bet.rate'><% bet.rate | numberPretty:2 %></span><br>
                            <span class="TextStyle03" ng-if="bet.bet_kind =='normal'">MY</span>
                        </td>
                        <td align="right" valign="top" class="UdrDogOddsClass">
                            <% ::bet.bet_amount | numberPretty:2 %><br></td>
                        <td align="right" valign="top"><span class="UdrDogOddsClass"
                                define-text='bet.bet_profit'><% ::bet.bet_profit | numberPretty:2 %></span><br><b><% ::bet.bet_commission | numberPretty:2 %></b>
                        </td>
                        <td align="left" valign="top" class="TextStyle03" style="text-transform: capitalize;">
                            <% ::bet.bet_status_name %><br>
                            <div style="color: black" ng-show="bet.last_ss">
                                KT: <% ::bet.last_ss %>
                            </div>
                            <div class="ipColor">
                                <a target="_blank" href="http://cqcounter.com/whois/?query=<% ::bet.ip_address %>"
                                    class="iplink"><% ::bet.ip_address %></a>
                            </div>
                        </td>
                    </tr>
                    @if (isset($betsInfo))
                        <tr class="Total">
                            <td colspan="5" align="right" class="none_rline none_Bline">
                                <div>Tổng phụ</div>
                            </td>
                            <td align="right" class="none_rline none_Bline bgGray">
                                <div class="UdrDogOddsClass" text-red>{{ format_number_pretty($betsInfo->profit) }}
                                </div>
                            </td>
                            <td class="none_Bline">&nbsp;</td>
                        </tr>
                        <tr class="Total">
                            <td colspan="5" align="right" class="none_rline none_Bline">
                                <div>Tổng phụ (Com.)</div>
                            </td>
                            <td align="right" class="none_rline none_Bline bgGray">
                                <div>{{ format_number_pretty($betsInfo->commission, 2) }}</div>
                            </td>
                            <td class="none_Bline">&nbsp;</td>
                        </tr>
                        <tr class="Total">
                            <td colspan="5" align="right" class="none_rline">
                                <div>Tổng cộng</div>
                            </td>
                            <td align="right" class="none_rline bgGray">
                                <div class="UdrDogOddsClass" text-red>
                                    {{ format_number_pretty($betsInfo->profit + $betsInfo->commission) }}</div>
                            </td>
                            <td>&nbsp;</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div>
        <div
            style="width: 780px; font-size: 9px; font-family: Arial; color: #666666;  margin-top: 10px;float: left;text-align: center;">
            © Copyright 2010-2016. . All Rights Reserved.
        </div>
    </div>
</body>

</html>
