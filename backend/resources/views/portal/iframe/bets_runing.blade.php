<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Bet List</title>
      <link href="/assets/admin/css/Bet_List_files/clone_ticket.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/Bet_List_files/table_w.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/Bet_List_files/button.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/Bet_List_files/oddsFamily.css" rel="stylesheet" type="text/css">
      <script language="JavaScript" type="text/javascript" src="/assets/admin/js/Bet_List_files/jquery.min.js"></script>
      <script language="javascript" src="/assets/admin/js/Bet_List_files/common.js"></script>
      <style>
           .dot-icon{
               background-color: #bbb;
               height: 8px;
               width: 8px;
               border-radius: 50%;
               display: inline-block;
           }
           .dot-icon.online {
               background-color: #42b72a;
           }
           .btn-clone-ticket {
                background: #0b599c;
                color: #fff;
                
                border: none;
                cursor: pointer;
                height: 28px;
                outline: none;
                margin-right: 8px;
                padding-left: 16px;
                padding-right: 16px;
                white-space: nowrap;
                -webkit-border-radius: 1px;
                -khtml-border-radius: 1px;
                -moz-border-radius: 1px;
                -ms-border-radius: 1px;
                -o-border-radius: 1px;
                border-radius: 1px;
                -webkit-box-shadow: 0 2px 2px rgb(0 0 0 / 30%);
                -khtml-box-shadow: 0 2px 2px rgba(0,0,0,.3);
                -moz-box-shadow: 0 2px 2px rgba(0,0,0,.3);
                -ms-box-shadow: 0 2px 2px rgba(0,0,0,.3);
                -o-box-shadow: 0 2px 2px rgba(0,0,0,.3);
                -webkit-box-sizing: border-box;
                -khtml-box-sizing: border-box;
                -moz-box-sizing: border-box;
                -ms-box-sizing: border-box;
                -o-box-sizing: border-box;
            }
      </style>
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
      @include('portal.iframe.clone_ticket')
      @include('portal.messsage')
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
                     <th width="100" align="left" class="even">Thành viên</th>
                     <th width="115" align="left">Thời gian</th>
                     <th width="260" align="left" class="even">Lựa chọn</th>
                     <th width="55" align="right">Tỷ lệ</th>
                     <th width="55" align="right" class="even">Tiền cược</th>
                     <th width="110" align="left">Trạng thái</th>
                  </tr>
                  @foreach($bets as $key => $value)
                  @if(!$value->is_group)
                  <tr valign="top" class="{{$key%2 == 0 ? 'bgcpelight' : 'bgcpe'}}">
                     <td align="center" valign="top">{{$key + 1}}</td>
                     <td align="center" valign="top">
                         @if($authUser->canViewOnline())
                         <span class="dot-icon {{$value->online ? 'online': ''}}"></span>
                         @endif
                         {{$value->username}}</td>
                     <td valign="top" nowrap="">
                        <div><strong>Ref No:{{$value->id}}</strong></div>
                        <div>{{$value->date}}</div>
                     </td>
                     <td valign="top">
                        <div class="TextStyle01"></div>
                        <div class="multiple">
                           <div class="TextStyle01 ">{{$value->game_type}} / {{$value->bet_type}}</div>
                           <div class="FavTeamClass" title="">
                              {{$value->bet_name}}
                           </div>
                           <span class="TextStyle03 "> {{$value->bet_odd}}</span><span class="TextStyle01 ">[{{$value->ss}}]</span><span class=" "></span>
                           @if(!$value->number_code)
                           <div class="TextStyle04">{{$value->home}} -vs- {{$value->away}}<br>
                           </div>
                           @else
                           <div class="TextStyle04">No. {{$value->number_code}}<br>
                           </div>
                           @endif
                           <span class="TextStyle04 "> {{$value->league_name}}</span>
                           <div>
                                <input type="button" value="Nhân bản" class="btn-clone-ticket" onclick="">
                           </div>
                        </div>
                     </td>
                     <td align="right" valign="top" nowrap="nowrap"><span class="UdrDogOddsClass" style="color: {{$value->rate < 0 ? '#B50000': ''}}">
                        {{$value->rate}}
                        </span><br>
                        <span class="TextStyle03">MY</span>
                     </td>
                     <td align="right" valign="top" class="UdrDogOddsClass">{{$value->bet_amount}}<br>
                     </td>
                     <td align="left" valign="top" class="TextStyle03">
                        Đang chạy<br>
                        <div class="ipColor">{{$value->ip_address}}</div>
                     </td>
                  </tr>
                  @else
                  <tr id="{{$value->id}}" valign="top" class="{{$key%2 == 0 ? 'bgcpelight' : 'bgcpe'}}">
                    <td align="center" valign="top">{{$key + 1}}</td>
                    <td align="center" valign="top">{{$value->username}}</td>

                    <td valign="top" nowrap="">
                        <div><strong>Ref No:{{$value->id}}</strong></div>
                        <div>{{$value->date}}</div>
                     </td>

                    <td class="r bl_evt">
                        <div>
                            <a href="javascript:showP('{{$value->id}}')" onclick="" id="hidden0">Cược tổng hợp</a><br>
                            <br>

                            <div id="divEvent_{{$value->id}}" style="display: none;">
                                @foreach($value->bets as $index =>  $bet)
                                <div class="ticketList">
                                    <div class="">
                                        <span class="TextStyle01">{{$bet->bet_name}}<span class="handicap"><span class="odds"> {{$bet->bet_odd}} [{{$bet->ss}}]@ {{$bet->bet_value}}</span>
                                        </span>
                                        <span class="favorite"></span></span>

                                        <div class="TextStyle03">
                                            {{$bet->bet_type}}
                                            <br>
                                            {{$bet->last_ss}}
                                        </div>

                                        <div class="TextStyle04">
                                            <span>{{$bet->home}}</span>
                                            <span>&nbsp;-&nbsp;vs&nbsp;-&nbsp;</span>
                                            <span>{{$bet->away}}</span>
                                        </div>

                                        <div class="league">
                                            <span class="sport">Bóng đá</span><span class="leagueName">&nbsp;{{$bet->league_name}}</span>
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

                    <td align="right" valign="top" nowrap="nowrap"><span class="UdrDogOddsClass" style="color: {{$value->rate < 0 ? '#B50000': ''}}">
                        {{$value->rate}}
                        </span><br>
                        <span class="TextStyle03"></span>
                     </td>

                    <td align="right" valign="top" class="UdrDogOddsClass">{{$value->bet_amount}}<br>
                     </td>
                     <td align="left" valign="top" class="TextStyle03">
                        Đang chạy<br>
                        <div class="ipColor"></div>
                     </td>
                </tr>
                @endif
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </body>
</html>