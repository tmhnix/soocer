<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

    <title>Bet List</title>
    <link href="/assets/admin/css/chitietttmb_files/Agent.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/chitietttmb_files/BetList.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        .jlhlebbhengjlhmcjebbkambaekglhkf {top: 0px; left: 0px;min-width: 30px;max-width: 300px;font-size: 13px;font-family: arial, helvetica, sans-serif;opacity: .93;padding:0px;position:absolute;display:block;z-index: 999997;font-style: normal;font-variant: normal;font-weight: normal;}#jlhlebbhengjlhmcjebbkambaekglhkf_up{text-align: center;padding:0px;margin: 0px;}#jlhlebbhengjlhmcjebbkambaekglhkf_cont{background-color: #729FCF;font-family: arial, helvetica, sans-serif-webkit-box-shadow: #729FCF 0px 0px 2px;color: #FFFFFF;padding:7px;-webkit-border-radius: 5px;}#jlhlebbhengjlhmcjebbkambaekglhkf_down{text-align: center;padding:0px;margin: 0px;}
    </style>
    <style type="text/css">
        .pagination{
          display: inline-flex;
          list-style: none;
          font-size: 18px;
        }
        .pagination li{
          padding-right: 10px; 
        }
      </style>
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

        function httpGetAsync(theUrl, callback) {
          var xmlHttp = new XMLHttpRequest();
          xmlHttp.onreadystatechange = function() { 
            if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
              callback(xmlHttp.responseText);
          }
          xmlHttp.open("GET", theUrl, true); // true for asynchronous 
          xmlHttp.send(null);
        }

        function onDeleteItem(id) {
          var r = confirm('Bạn chắc chắn muốn xóa item '+ id);
          if (r) {
            httpGetAsync('api/bets/'+id+'/delete' , function () {
              location.reload();  
            })
          }
        }
    </script>
</head>

<body style="margin-left: 10px;">
    @include('portal.messsage')
    <div class="bl_title">
        Danh sách cược thành viên - {{$user->username}}
    </div>

    <div id="spData">
      <form action="" method="get">
         <tr>
            <td>
               <div id="box_header" style="width:100%">
                  <table id="tblSearch" cellpadding="0" cellspacing="0" border="0">
                     <tbody>
                        <tr>
                           <td>Mã cược</td>
                           <td>
                              <input placeholder="Id" style="width: 145px; position: relative;" class="text_italic" value="{{$req->ref_id}}" name="ref_id" id="ref_id" autocomplete="off">
                           </td>
                           <td>Trạng thái</td>
                           <td>
                              <div id="box_option">
                                 <select id="statusFilter" name="bet_status">
                                    <option value="" >Tất cả</option>
                                    <option value="won" {{$req->bet_status == 'won' ? 'selected' : ''}}>Thắng</option>
                                    <option value="lose" {{$req->bet_status == 'lose' ? 'selected' : ''}}>Thua</option>
                                    <option value="draw" {{$req->bet_status == 'draw' ? 'selected' : ''}}>Hòa</option>
                                 </select>
                              </div>
                           </td>
                           <td>Phân loại</td>
                           <td>
                              <div id="box_option">
                                 <select id="statusFilter" name="type">
                                    <option value="" >Tất cả</option>
                                    <option value="main" {{$req->type == 'main' ? 'selected' : ''}}>Kèo</option>
                                    <option value="conner" {{$req->type == 'conner' ? 'selected' : ''}}>Góc</option>
                                 </select>
                              </div>
                           </td>
                           <td>
                              <!-- <div style="width: 76px; float:right; text-align:right">
                                 <input style="width: 100%" type="reset" value="Reset" class="buttonSubmit">
                              </div> -->
                              <div style="width: 76px; float:right; text-align:right">
                                 <input style="width: 100%" id="dSubmit" type="submit" value="Xác nhận" class="buttonSubmit">
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </td>
         </tr>
      </form>
        <table id="hor-minimalist-a">
            <thead>
                <tr>
                    <th style="width: 20px;">#</th>
                    <th style="width: 110px;">Thành viên</th>
                    <th style="width: 110px;">Thời gian</th>
                    <th>Lựa chọn</th>
                    <th style="width: 50px;">Tỷ lệ</th>

                    <th style="width: 50px;">Tiền cược</th>

                    <th style="width: 50px;">Thắng-thua</th>

                    <th style="width: 75px;">Trạng thái</th>

                    <th style="width: 85px;">PT của Agent/<br> Hoa hồng</th>
                </tr>
            </thead>

            <tbody>
                @foreach($bets as $key => $value)
                @if(!$value->is_group)
                <tr id="{{$value->id}}">
                    <td class="w-order">{{$key + 1}}</td>
                    <td class="w-order">
                     <a class="downline_link" href="{!! route('portal.agent.bets_in_saoke', ['id' => $value->user_id]) !!}">
                      {{$value->username}}
                  </a>
                    </td>

                    <td class="c nonbreak">
                        Ref No: <a href="{!! route('portal.web.updateBetInSaoke', ['id' => $value->id]) !!}">{{$value->id}}</a>
                        <div class="time">{{$value->date}}</div>
                        <div style="color: red; cursor: pointer;" onclick="onDeleteItem({{$value->id}})">x</div>
                    </td>

                    <td class="r bl_evt">
                        <div>
                            <div class="">
                                @if($value->bet_type_raw == 'correct_score')
                                <span class="underdog">
                                    {{$value->bet_type}} [{{$value->type}}]                                    
                                </span>
                                  <div class="bettype">
                                      <span class="favorite" style="color: #B50000;"> [{{$value->ss}}]</span>
                                  </div>
                                @else
                                <span class="underdog">
                                  {{$value->bet_name}}
                                  <span class="handicap">{{$value->bet_odd}}</span>
                                  <span class="favorite" style="color: #B50000;"> {{$value->ss}}</span>
                              </span>

                                <div class="bettype">
                                    {{$value->bet_type}} 
                                </div>
                                @endif

                                @if(!$value->number_code)
                                <div class="match">
                                  <span>{{$value->home}}</span><span>&nbsp;-&nbsp;vs&nbsp;-&nbsp;</span><span>{{$value->away}}</span>
                                </div>
                                @else
                                <div class="match">
                                  <span>No. {{$value->number_code}}</span>
                                </div>
                                @endif

                                <div class="league">
                                    <span class="sport">{{$value->game_type}}</span>
                                    <span class="leagueName">&nbsp;{{$value->league_name}}</span>
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="bl_underdog nonbreak">
                       <span class="underdog">
                        <font color="{{$value->rate < 0 ? '#B50000': ''}}">{{$value->rate}}</font>
                        </span>
                        <br>
                        <span class="oddstype">MY</span>
                    </td>
                    <td class="bl_underdog"><span class="stake">{{$value->bet_amount}}</span></td>

                    <td class="r nonbreak">
                        <div>
                            <span class="bl_underdog">
                              <font color="{{$value->bet_profit < 0 ? '#B50000': ''}}">{{$value->bet_profit}}</font>
                            </span>
                        </div>

                        <div>{{number_format($value->bet_commission, 2)}}</div>
                    </td>

                    <td class="c">
                        <div class="status">
                            {{$value->bet_status_name}}
                        </div>
                        <!-- onclick="window.open('http://www.nowgoal.com/schedule.htm?f=ft1','_blank')" -->
                        <div class="result" 
                        onclick="window.open('http://ls.1266366.com/index.aspx?clientid=846&flag=ls&language=en&clientmatchid={{$value->event_id}}','_blank')"
                        >Kết quả
                        </div>
                        <div class="ip">
                            <br>
                            <div class="iplink" onclick="">
                                {{$value->last_ss}}
                            </div>
                        </div>
                    </td>

                    <td class="r">
                        <div class="div_pt">
                            0%<br>
                            <span class="bl_underdog">0.00</span><br>
                        </div>0.25%<br> 0.00
                        <br>
                    </td>
                </tr>
                @else
                <tr id="{{$value->id}}">
                    <td class="w-order">{{$key + 1}}</td>
                    <td class="w-order">
                       <a class="downline_link" href="{!! route('portal.agent.bets_in_saoke', ['id' => $value->user_id]) !!}">
                          {{$value->username}}
                      </a>
                  </td>
                    <td class="c nonbreak">
                        Ref No: <a href="{!! route('portal.web.updateBetInSaoke', ['id' => $value->id]) !!}">{{$value->id}}</a>
                        <div class="time">
                            {{$value->date}}
                        </div>
                    </td>

                    <td class="r bl_evt">
                        <div>
                            <a href="javascript:showP('{{$value->id}}')" onclick="" id="hidden0">Cược tổng hợp</a><br>
                            <br>

                            <div id="divEvent_{{$value->id}}" style="display: none;">
                                @foreach($value->bets as $index =>  $bet)
                                <div class="ticketList">
                                    <div class="">
                                        Ref No: <a href="{!! route('portal.web.updateBetInSaoke', ['id' => $bet->id]) !!}">{{$bet->id}}</a><br/>
                                        <span class="favorite">{{$bet->bet_name}}<span class="handicap"><span class="odds"> {{$bet->bet_odd}} [{{$bet->ss}}]@ {{$bet->bet_value}}</span>
                                        </span>
                                        <span class="favorite"></span></span>

                                        <div class="bettype">
                                            {{$bet->bet_type}}
                                            <br>
                                            {{$bet->last_ss}}
                                        </div>

                                        <div class="match">
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

                    <td class="bl_underdog nonbreak">
                        <span class="underdog">
                          <font color="{{$value->rate < 0 ? '#B50000': ''}}">{{$value->rate}}</font>
                        </span>
                        <br>
                        <span class="oddstype"></span>
                    </td>

                    <td class="bl_underdog"><span class="stake">{{$value->bet_amount}}</span></td>

                    <td class="r nonbreak">
                        <div>
                            <span class="bl_underdog">
                              <font color="{{$value->bet_profit < 0 ? '#B50000': ''}}">{{$value->bet_profit}}</font>
                            </span>
                        </div>

                        <div>{{number_format($value->bet_commission, 2)}}</div>
                    </td>

                    <td class="c">
                        <div class="status">
                            {{$value->bet_status_name}}
                        </div>

                        <!-- <div class="result">
                            Kết quả
                        </div> -->
                        <div class="ip">
                            <br>
                            <div class="iplink" onclick="">
                                {{$value->ip_address}}
                            </div>
                        </div>
                    </td>

                    <td class="r">
                        <div class="div_pt">
                            0%<br>
                            <span class="bl_underdog">0.00</span><br>
                        </div>0.25%<br> 0.00
                        <br>
                    </td>
                </tr>
                @endif
                @endforeach
            </tbody>
            <tfoot>
               <tr>
                  <td colspan="8">
                     {{ $array->links() }}
                  </td>
               </tr>
            </tfoot>
        </table>
    </div>

    <div class="comm_note">
        <div class="title">
            <span>Ghi chú</span>
        </div>

        <div class="content">
            <!--Com. is rounded for reference only. Therefore, Subtotal Com. amount
   may be different from the sum of Com. when it sums all the actual
   Com. amounts.-->
        </div>
    </div>
</body>
</html>