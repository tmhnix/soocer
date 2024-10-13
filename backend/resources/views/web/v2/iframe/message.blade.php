@extends('web.v2.iframe.template')
@section('menu', 'message')
@section('main')
<form name="formMessageHistory" method="post" action="/Message/MessageHistory">
    <input id="sDate" type="hidden" value="5/8/2020" name="sDate">
    <input id="eDate" type="hidden" value="5/6/2021" name="eDate">
    <input id="SelectMsgType" type="hidden" value="0" name="SelectMsgType">
</form>
<div class="account">
    <div class="content">
        <div class="caption">
            <div class="mainTitle icon-message" title="Nhật Ký Tin Nhắn">Nhật Ký Tin Nhắn</div>
        </div>
        <ul class="tabNav-BottomLine">
            <li class="active" onclick="SelectChange(0);">Thông Báo Thông Thường</li>
            <li class="" onclick="SelectChange(1);">Thông Báo Đặc Biệt</li>
            <li class="" onclick="SelectChange(2);">Tin Nhắn Cá Nhân</li>

        </ul>
        <div class="filterBlock ">
            <div class="filterRow">
                <div id="f_trigger_a" class="filter dropdown-Date">
                    <div class="selected">
                        <span class="txt" id="selsDate">5/8/2020</span>
                        <script type="text/javascript">
                            Calendar.setup({
                                inputField: "selsDate",
                                ifFormat: "mm/dd/y",
                                button: "f_trigger_a",
                                flatCallback: sDateChanged,
                                singleClick: true
                            });
                        </script>
                    </div>
                </div>
                <div class="txt"></div>
                <div id="f_trigger_b" class="filter dropdown-Date">
                    <div class="selected">
                        <span class="txt" id="seleDate">5/6/2021</span>
                        <script type="text/javascript">
                            Calendar.setup({
                                inputField: "seleDate",
                                ifFormat: "mm/dd/y",
                                button: "f_trigger_b",
                                flatCallback: eDateChanged,
                                singleClick: true
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div id="MessageContainer" class="MessageContainer">
            <div class="accountTable-verticalAlignTop">
                <div class="tableHead">
                    <div class="no">đội khách không</div>
                    <div class="points-small">ID</div>
                    <div class="date">Ngày</div>
                    <div class="text-auto">Tin nhắn</div>
                </div>
                <div class="tableBody">
                    <div class="tableRow">
                        <div class="no">1</div>
                        <div class="points-small">737927</div>
                        <div class="date">05/11/2020 11:02:51 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Motor Sport] Due to Player [Sergey Sirotkin] did not participate, [F1 - Spain Grand Prix Practice 1 (Head to Head) - 11/5], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">2</div>
                        <div class="points-small">737923</div>
                        <div class="date">05/11/2020 10:40:31 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "Green Gully Cavaliers U20 -vs- Heidelberg United U20" [AUSTRALIA VICTORIA PREMIER LEAGUE U20 - 11/5] has been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">3</div>
                        <div class="points-small">737917</div>
                        <div class="date">05/11/2018 10:01:30 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Muay Thai] Due to match cancelled "Farnumchai Nitipattanaikwam -vs- Fahsingoen Sitphetmanee" [Muay Thai - Lumpinee Boxing Stadium - 11/5], all bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">4</div>
                        <div class="points-small">737900</div>
                        <div class="date">05/11/2018 08:25:52 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Basketball] Due to match Cancelled "Mt Gambier Pioneers -vs- Nunawading Spectres" [South East Australia League - 11/5], all bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">5</div>
                        <div class="points-small">737885</div>
                        <div class="date">05/11/2018 07:16:26 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Basketball] Due to disruption in Live broadcast, the match between "BA CoE -vs- Kilsyth Cobras" [South East Australia League - 11/5*Live*] this match will be removed from our website. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">6</div>
                        <div class="points-small">737884</div>
                        <div class="date">05/11/2018 07:14:26 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "Oakleigh Cannons -vs- Hume City" [AUSTRALIA VICTORIA PREMIER LEAGUE - 11/5*Live*], we faced disruption in our broadcast from 11/5 6:56:13 PM - 6:59:19 PM As a result tickets placed during the disrupted period were REJECTED. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">7</div>
                        <div class="points-small">737864</div>
                        <div class="date">05/11/2018 05:00:27 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] Due to disruption in Live broadcast, the match between "Green Gully Cavaliers U20 -vs- Heidelberg United U20" [AUSTRALIA VICTORIA PREMIER LEAGUE U20 - 11/5*Live*] this match will be removed from our website. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">8</div>
                        <div class="points-small">737862</div>
                        <div class="date">05/11/2018 04:59:53 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[E-Sports] The match between "ArkAngel -vs- Eclipse" [CS:GO - ESL One Cologne (Match Winner) - 11/5] have been cancelled as Official announced "ArkAngel" as the winner. Therefore, all bets taken are considered REFUNDED. Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">9</div>
                        <div class="points-small">737832</div>
                        <div class="date">05/11/2018 01:01:27 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[E-Sports] The match between "HEY -vs- 5balls" [CS:GO - Stream.me Gauntlet (Match Winner) - 10/5] have been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">10</div>
                        <div class="points-small">737807</div>
                        <div class="date">05/10/2018 05:05:04 PM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "CA River Plate -vs- Estudiantes La Plata" [ARGENTINA SUPER LIGA - 10/5] &amp; "Deportivo Tristan Suarez -vs- Defensores de Belgrano" [ARGENTINA PRIMERA B METROPOLITANA (PLAY OFF) - 10/5] have been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">11</div>
                        <div class="points-small">737806</div>
                        <div class="date">05/10/2018 04:54:38 PM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "AO Kerkyra U20 -vs- Platanias FC U20" [GREECE SUPER LEAGUE U20 - 9/5] has been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">12</div>
                        <div class="points-small">737797</div>
                        <div class="date">05/10/2018 01:54:58 PM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] There's a mistranslated word in Chinese version "Hassleholms IF -vs- IFK Hassleholm", please switch to Chinese version for more detail of the mistranslated word. Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">13</div>
                        <div class="points-small">737790</div>
                        <div class="date">05/10/2018 01:03:59 PM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "Norway U17 -vs- Slovenia U17" [UEFA U17 CHAMPIONSHIP (IN ENGLAND)(2x40 mins) - 10/5*Live*], we faced disruption in our broadcast from 10/5 8:23:12 PM - 8:26:39 PM As a result tickets placed during the disrupted period were REJECTED. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">14</div>
                        <div class="points-small">737759</div>
                        <div class="date">05/10/2018 09:01:46 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Muay Thai] Due to match cancelled "Aikphipop Mor.Krungthepthonburi -vs- Karuehart Sitchefboonthum" [Muay Thai - Rajadamnern Boxing Stadium - 10/5], all bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">15</div>
                        <div class="points-small">737755</div>
                        <div class="date">05/10/2018 08:51:28 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "Norway U17 -vs- Slovenia U17" [UEFA U17 CHAMPIONSHIP (IN ENGLAND)(2x40 mins) - 10/5*Live*], we faced disruption in our broadcast from 10/5 8:30:45 PM - 8:37:15 PM As a result tickets placed during the disrupted period were REJECTED. this match will be removed from our website. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">16</div>
                        <div class="points-small">737729</div>
                        <div class="date">05/10/2018 03:37:01 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[E-Sports] The match between "Grayhound Gaming -vs- Dark Sided" &amp; "Dark Sided -vs- Grayhound Gaming" [CS:GO - ESL Australia &amp; NZ Championship - 10/5] have been cancelled as Official announced "Dark Sided" as the winner. Therefore, all bets taken are considered REFUNDED. Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">17</div>
                        <div class="points-small">737717</div>
                        <div class="date">05/10/2018 12:17:57 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] Due to in progress of investigation details on match between "AO Kerkyra U20 -vs- Platanias FC U20" [GREECE SUPER LEAGUE U20 - 9/5] statement will be moved to 10/5 (GMT -4). including all affected special product. Please refer to result section for more details. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">18</div>
                        <div class="points-small">737684</div>
                        <div class="date">05/09/2018 05:41:41 PM</div>
                        <div class="text-auto">
                            <div class="">Dear Valued Customer:[System] At the following time, 10/5/2018 (Thursday) from 1:00 PM - 3:00 PM We will be performing server maintenance. There will be no market open temporarily. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">19</div>
                        <div class="points-small">737673</div>
                        <div class="date">05/09/2018 02:30:49 PM</div>
                        <div class="text-auto">
                            <div class="">Attn:[E-sports] Due to wrong result displayed, the match between "G2 Esports -vs- mousesports" [CS:GO - Esports Championship Series - 9/5] has been re-settled. The actual result is "16-7" instead of "7-16". Kindly double check your statement again. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">20</div>
                        <div class="points-small">737671</div>
                        <div class="date">05/09/2018 02:27:33 PM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] Due to irregular playing time (2 X 30 minutes) on match between "Al Nassr Riyadh -vs- Valencia CF" [CLUB FRIENDLY - 9/5], all bets taken are considered REFUNDED. (Except those products which have been determined the win loss). Parlay counted as (1). Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">21</div>
                        <div class="points-small">737664</div>
                        <div class="date">05/09/2018 01:48:50 PM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Outright] Due to player [Paul Casey] withdrawal, [ Golf - PGA Tour - The Players Championship (Winner) - 10/5], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">22</div>
                        <div class="points-small">737655</div>
                        <div class="date">05/09/2018 12:26:35 PM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "Drogheda United U19 -vs- Longford Town U19" [IRELAND DIVISION U19 - 7/5] has been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">23</div>
                        <div class="points-small">737645</div>
                        <div class="date">05/09/2018 11:14:31 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "SC Wiener Neustadt -vs- SV Kapfenberger" [AUSTRIA ERSTE LIGA - 11/5*Early*] is playing at Neutral ground, all bets taken are still considered VALID. Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">24</div>
                        <div class="points-small">737618</div>
                        <div class="date">05/09/2018 08:46:23 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[E-Sports] Due to team [Carnage Esports] withdrawal, [CS:GO - ESL Australia &amp; NZ Championship - 9/5], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">25</div>
                        <div class="points-small">737587</div>
                        <div class="date">05/09/2018 05:09:34 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Badminton] Due to wrong result displayed, the match between "Ajay Jayaram (IND) -vs- Riichi Takeshita (JPN)" [Australian Open Men Singles (Set Handicap) - 9/5] has been re-settled. The actual result is "2nd Set: 20-22, Total Points: 59-63 &amp; Total Set: 1-2" instead of "2nd Set: 22-20, Total Points: 44-40 &amp; Total Set: 2-0". Kindly double check your statement again. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">26</div>
                        <div class="points-small">737581</div>
                        <div class="date">05/09/2018 04:54:13 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Badminton] Due to Player retirement, "Francis Alwin (IND)/K. Nandagopal (IND) -vs- Tae In Jung (KOR)/Hwi Tae Kim (KOR)" [Australian Open Men Doubles (Set Handicap) - 9/5], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">27</div>
                        <div class="points-small">737570</div>
                        <div class="date">05/09/2018 03:23:33 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Tennis] Due to Player retirement, "Aleksandr Nedovyesov (KAZ) -vs- Cem Ilkel (TUR)" [ATP Challenger - Karshi - 9/5], all bets taken are considered REFUNDED (Except Set 1 &amp; Set 2 Winner). Parlay counted as one(1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">28</div>
                        <div class="points-small">737566</div>
                        <div class="date">05/09/2018 03:01:59 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[E-Sports] The match between "G2 Esports -vs- EnVyUs" &amp; "EnVyUs -vs- G2 Esports" [CS:GO - Esports Championship Series - 8/5] have been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">29</div>
                        <div class="points-small">737564</div>
                        <div class="date">05/09/2018 02:50:07 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Baseball] The match between "Tohoku Rakuten Golden Eagles (N) -vs- Chiba Lotte Marines" [Nippon Professional Baseball - 9/5] have been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">30</div>
                        <div class="points-small">737551</div>
                        <div class="date">05/09/2018 12:54:34 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] Due to in progress of investigation details on match between "Drogheda United U19 -vs- Longford Town U19" [IRELAND DIVISION U19 - 7/5] statement will be moved to 9/5 (GMT -4). including all affected special product. Please refer to result section for more details. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">31</div>
                        <div class="points-small">737535</div>
                        <div class="date">05/08/2018 09:34:03 PM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "Sportivo Italiano -vs- San Martin De Burzaco" &amp; "Club Lujan -vs- JJ Urquiza" [ARGENTINA PRIMERA C - 8/5] has been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">32</div>
                        <div class="points-small">737512</div>
                        <div class="date">05/08/2018 02:46:14 PM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] Due to disruption in Live broadcast, the match between "Club Lujan -vs- JJ Urquiza" [ARGENTINA PRIMERA C - 8/5*Live*] this match will be removed from our website. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">33</div>
                        <div class="points-small">737490</div>
                        <div class="date">05/08/2018 11:38:13 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "Al Quwa Al Jawiya (N) -vs- Al Ahed" [AFC CUP - 8/5*Live*], we faced disruption in our broadcast from 8/5 11:23:04 PM - 11:28:06 PM As a result tickets placed during the disrupted period were REJECTED. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">34</div>
                        <div class="points-small">737463</div>
                        <div class="date">05/08/2018 09:30:20 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] Due to disruption in Live broadcast, the match between "Rotherham United (R) -vs- Hartlepool United (R)" [ENGLISH CENTRAL RESERVE LEAGUE - 8/5*Live*] this match will be removed from our website. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">35</div>
                        <div class="points-small">737460</div>
                        <div class="date">05/08/2018 09:21:26 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Muay Thai] Due to wrong result displayed, the match between "Prabpairee Phukongyatseub U-domsuk -vs- Kangwannoi Thor.Muanglangsuan" [Muay Thai - Lumpinee Boxing Stadium - 8/5] has been re-settled. The actual result is "5-0" instead of "1-0". Kindly double check your statement again. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">36</div>
                        <div class="points-small">737457</div>
                        <div class="date">05/08/2018 09:06:30 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[E-Sports] The match between "Virtue Gaming -vs- Isurus Gaming" &amp; "Isurus Gaming -vs- Virtue Gaming" [CS:GO - ESL Brazil Premier League - 7/5] have been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">37</div>
                        <div class="points-small">737420</div>
                        <div class="date">05/08/2018 06:03:40 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Baseball] The match between "Hiroshima Toyo Carp -vs- Yokohama DeNA BayStars" [Nippon Professional Baseball - 8/5] have been postponed. All bets taken are considered REFUNDED. Parlay counted as one (1). Thank you!</div>
                        </div>
                    </div>
                    <div class="tableRow">
                        <div class="no">38</div>
                        <div class="points-small">737413</div>
                        <div class="date">05/08/2018 05:30:25 AM</div>
                        <div class="text-auto">
                            <div class="">Attn:[Soccer] The match between "MFK Dubnica U19 -vs- MSK Puchov U19" [SLOVAKIA II LIGA SD U19 ZSFZ - 8/5*Live*], we faced disruption in our broadcast from 8/5 5:18:51 PM - 5:22:19 PM As a result tickets placed during the disrupted period were REJECTED. Sorry for the inconvenience caused!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="note">
            <div class="title">Lưu ý</div>
            <div class="txt">Xin lưu ý rằng thời gian hiển thị dựa trên GMT -4 giờ.</div>
        </div>
    </div>
</div>

@stop