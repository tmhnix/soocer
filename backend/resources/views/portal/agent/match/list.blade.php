<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bet List</title>
    <link href="/assets/admin/css/Bet_List_files/table_w.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/Bet_List_files/button.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/Bet_List_files/oddsFamily.css" rel="stylesheet" type="text/css">
    <script language="JavaScript" type="text/javascript" src="/assets/admin/js/Bet_List_files/jquery.min.js"></script>
    <script language="javascript" src="/assets/admin/js/Bet_List_files/common.js"></script>
    <script type="text/javascript">
        var timer=30;
        var loadPage=self.setInterval(function() {
            reLoad();
        }, 1000);
        function reLoad(){
            if(timer==0){
                window.location.reload()
                timer=30;
            }else{
                jQuery("#reloading").html("Đang Theo Dõi ("+timer+")");
            }
            timer++;
        }
    </script>
    <script>
        function showP(n)
        {
            var a = 'divEvent_' + n;
            var divEvent = document.getElementById(a);
            if (divEvent.style.display == 'none') {
                divEvent.style.display = '';
            }
            else
            {
                divEvent.style.display = 'none';
            }
        }
    </script>
    <style type="text/css">
        .line {
            margin-top: 5px;
            margin-bottom: 5px;
            width: 100%;
            text-align: left;
            border-bottom: 1px solid rgb(160, 160, 160);
            overflow: hidden;
        }
    </style>
</head>
<body>
@include('portal.messsage')
<div><a class="btn btn-default" href="{!! route('portal.agent.match.clone') !!}">Thêm mới</a></div>
<div class="titleBar">
    <div class="title">Cược chưa xử lý</div>
    <div class="right">
        <a id="rfbu" href="#" target="_self" onclick="window.print()" class="button"><span>Print This Page</span></a>
        <a id="rfbu" href="#" target="_self" onclick="//window.location.reload()" class="button"><span id="reloading">Đang Theo Dõi (376)</span></a>
        <a onclick="this.className='button disable';" href="" id="btnRefresh_D" class="button" title="Refresh">
               <span>
                  <div class="icon-refresh" title="Refresh"></div>
               </span>
        </a>
    </div>
</div>
<div class="tabbox">
    <div class="tabbox_F">
        <table class="oddsTable info" width="100%" cellpadding="0" cellspacing="0" border="0">
            <tbody>
            <tr>
                <th width="20">No.</th>
                <th width="400" align="left" class="even">Trận đấu</th>
                <th width="115" align="left">Thời gian</th>
                <th width="260" align="left" class="even">Cược</th>
                <th width="100" align="left" class="even">Trạng thái</th>
                <th width="110" align="left">Trạng thái</th>
            </tr>
            @foreach($events as $key => $value)
                <tr id="{{$value->id}}" valign="top" class="{{$key%2 == 0 ? 'bgcpelight' : 'bgcpe'}}">
                    <td align="center" valign="top">{{$key + 1}}</td>
                    <td align="center" valign="top">{{$value->league_name}}
                        <br/> <b>{{$value->home}}</b> - <b>{{$value->away}}</b>
                    </td>

                    <td valign="top" nowrap="">
                        <div>{!!$value->time !!}</div>
                    </td>

                    <td class="r bl_evt">
                        <div>
                            <a href="javascript:showP('{{$value->id}}')" onclick="" id="hidden0">Danh sách cược ({{count($value->bets)}})</a><br>
                            <br>

                            <div id="divEvent_{{$value->id}}" style="display: none;">
                                @foreach($value->bets as $index => $bet)
                                    <div class="ticketList">
                                        <div class="">
                                        <span class="TextStyle01">{{$bet->getJson()->bet_name}}<span class="handicap"><span class="odds"> {{$bet->getJson()->bet_odd}} [{{$bet->getJson()->ss}}]@ {{$bet->getJson()->bet_value}}</span>
                                        </span>
                                        <span class="favorite"></span></span>

                                            <div class="TextStyle03">
                                                {{$bet->getJson()->bet_type}}
                                                <br>
                                                {{$bet->getJson()->last_ss}}
                                            </div>

                                            <div class="league">
                                                <span class="sport">User: </span><span class="leagueName">&nbsp;{{$bet->user->username}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    @if($index != sizeOf($value->bets) -1)
                                        <div class="line" style=""></div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </td>

                    <td align="left" valign="top">{{$value->timeStatus()}}<br>
                    </td>
                    <td align="left" valign="top" class="TextStyle03">
                        @if($value->status == 'active')
                        <div><a class="btn btn-default" href="{!! route('portal.agent.match.update', ['id' => $value->id]) !!}">Cập nhật</a></div>
                        <br>
                        @endif
                        <div class="ipColor"></div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>