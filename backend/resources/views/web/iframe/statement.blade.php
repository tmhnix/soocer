<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="todoApp">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Statement</title>
      <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/M_UnderOver.css?v=201802011053" rel="stylesheet" type="text/css">
      <script type="application/javascript" src="{{ elixir('js/web-all.js') }}"></script>
      <script type="application/javascript" src="{{ elixir('js/templates.js') }}"></script>
      <link rel="stylesheet" href="{{ elixir('css/web-app.css') }}" />
      <link rel="stylesheet" href="{{ elixir('css/web-all.css')}}" />
      <style type="text/css">
         <!--
            #Layer1 {
              position:absolute;
              left:1px;
              top:20px;
              width:424px;
              height:311px;
              z-index:1;
            }
            -->
      </style>
   </head>
   <body class="statement">
      <div class="titleBar">
         <div class="title">Sao Kê</div>
         <div class="right">
            <a onclick="javascript:location.reload()" id="btnRefresh_D" class="button" title="Tải Lại">
               <span>
                  <div class="icon-refresh" title="Tải Lại"></div>
               </span>
            </a>
         </div>
      </div>
      <div class="tabbox">
         <div class="tabbox_F">
            <table class="oddsTable info" width="100%" cellpadding="0" cellspacing="0" border="0">
               <tbody>
                  <tr>
                     <th width="80" align="left">Ngày</th>
                     <th width="280" align="left" class="even">Ghi chú</th>
                     <th width="110" align="right">Tiền cược</th>
                     <th width="100" align="right" class="even">Tín dụng/Ghi nợ</th>
                     <th width="100" align="right">Hoa hồng</th>
                     <th width="100" align="right" class="even">Tài Khoản</th>
                  </tr>
                  @foreach($betsDone as $key=> $value)
                  <tr class="{{$key%2 == 0 ? 'bgcpe' : 'bgcpelight'}}" onclick="javascript:window.location.href='{!! route('web.statementDetails', ['date'=>$value->date, 'type'=> 'done', 'game_type' => $value->game_type]) !!}'" style="cursor: pointer;">
                     <td>{{$value->date}}</td>
                     <td class="TextStyle03">BET {{$value->game_type == 'bongda' ? 'Bóng đá' : 'Number Game'}}<br>- Đã xử lý ({{$value->count}})</td>
                     <td align="right" text-red>{{format_number_pretty($value->stake)}}</td>
                     <td align="right" text-red>{{format_number_pretty($value->profit)}}</td>
                     <td align="right" text-red>{{format_number_pretty($value->commission)}}</td>
                     <td align="right" text-red>{{format_number_pretty($value->profit + $value->commission)}}</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
      <div class="titleBar">
         <div class="title">Cược hủy</div>
      </div>
      <div class="tabbox">
         <div class="tabbox_F">
            <table class="oddsTable info" width="100%" cellpadding="0" cellspacing="0" border="0">
               <tbody>
                  <tr>
                     <th width="80" align="left">Ngày</th>
                     <th width="280" align="left" class="even">Ghi chú</th>
                     <th width="110" align="right">Tiền cược</th>
                     <th width="100" align="right" class="even">Tín dụng/Ghi nợ</th>
                     <th width="100" align="right">Hoa hồng</th>
                     <th width="100" align="right" class="even">Tài Khoản</th>
                  </tr>
                  @foreach($betsCancel as $key=> $value)
                  <tr class="{{$key%2 == 0 ? 'bgcpe' : 'bgcpelight'}}" onclick="javascript:window.location.href='{!! route('web.statementDetails', ['date'=>$value->date, 'type'=> 'cancel']) !!}'"  style="cursor: pointer;">
                     <td>{{$value->date}}</td>
                     <td class="TextStyle03">BET<br>- Cược hủy ({{$value->count}})</td>
                     <td align="right" text-red>{{format_number_pretty($value->stake)}}</td>
                     <td align="right" text-red>{{format_number_pretty($value->profit)}}</td>
                     <td align="right" text-red>{{format_number_pretty($value->commission)}}</td>
                     <td align="right" text-red>{{format_number_pretty($value->profit + $value->commission)}}</td>
                  </tr>
                  @endforeach
               </tbody>
            </table>
         </div>
      </div>
      <div class="note">
         <div class="noteBorder">
            <div class="title"><span>Lưu ý</span></div>
            <div class="content">Xin lưu ý rằng thời gian hiển thị dựa trên GMT -4 giờ.</div>
         </div>
      </div>
   </body>
</html>