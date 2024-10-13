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
   <body>
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
                     <th width="110" align="right"></th>
                  </tr>
                  @foreach($bets as $key => $item)
                  <tr valign="top" class="{{$key%2 == 0 ? 'bgcpelight' : 'bgcpe'}}">
                     <td align="center" valign="top">{{$key + 1}}</td>
                     <td align="center" valign="top">{{$item->username}}</td>
                     <td valign="top" nowrap="">
                        <div><strong>Ref No:{{$item->id}}</strong></div>
                        <div>{{$item->date}}</div>
                        <!-- <div style="color: red; cursor: pointer;" >x</div> -->
                     </td>
                     <td valign="top">
                        <div class="TextStyle01"></div>
                        <div class="multiple">
                           <div class="TextStyle01 ">{{$item->game_type}} / {{$item->bet_type}}</div>
                           <div class="FavTeamClass" title="">
                              {{$item->bet_name}}
                           </div>
                           <span class="TextStyle03 "> {{$item->bet_odd}}</span><span class="TextStyle01 ">[{{$item->ss}}]</span><span class=" "></span>
                           <div class="TextStyle04">
                            @if(!$item->number_code)
                            {{$item->home}} -vs- {{$item->away}}
                            @else
                            No. {{$item->number_code}}
                            <br>
                            @endif
                           </div>

                           <span class="TextStyle04 "> {{$item->league_name}}</span>
                        </div>
                     </td>
                     <td align="right" valign="top" nowrap="nowrap"><span class="UdrDogOddsClass" style="color: #B50000">
                        {{$item->bet_value}}
                        </span><br>
                        <span class="TextStyle03">MY</span>
                     </td>
                     <td align="right" valign="top" class="UdrDogOddsClass">{{$item->bet_amount}}<br>
                     </td>
                     <td align="left" valign="top" class="TextStyle03">
                        Đang chạy<br>
                        <div class="ipColor">{{$item->ip_address}}</div>
                     </td>
                     <td align="left" valign="top" class="TextStyle03">
                       <a class="LinkPopup" style="color: #045ace; cursor: pointer;font-weight: 600;text-decoration: underline;" href="{!! route('portal.web.updateBet', ['id' => $item->id]) !!}">Sửa kèo</a>
                        <div class="LinkPopup" style="color: red; cursor: pointer;font-weight: 600;text-decoration: underline;" onclick="onDeleteItem({{$item->id}})">Xóa kèo</div>
                     </td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
   </body>
</html>