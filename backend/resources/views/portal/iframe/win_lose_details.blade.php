<!DOCTYPE html>
<html>
   <head>
      <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
      <title>CHI TIẾT THẮNG THUA THÀNH VIÊN</title>
      <link href="/portal/css/all.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/chitietthangthua_files/Agent.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/chitietthangthua_files/Reports.min.css" rel="stylesheet" type="text/css">
      <style type="text/css">
         .jlhlebbhengjlhmcjebbkambaekglhkf {top: 0px; left: 0px;min-width: 30px;max-width: 300px;font-size: 13px;font-family: arial, helvetica, sans-serif;opacity: .93;padding:0px;position:absolute;display:block;z-index: 999997;font-style: normal;font-variant: normal;font-weight: normal;}#jlhlebbhengjlhmcjebbkambaekglhkf_up{text-align: center;padding:0px;margin: 0px;}#jlhlebbhengjlhmcjebbkambaekglhkf_cont{background-color: #729FCF;font-family: arial, helvetica, sans-serif-webkit-box-shadow: #729FCF 0px 0px 2px;color: #FFFFFF;padding:7px;-webkit-border-radius: 5px;}#jlhlebbhengjlhmcjebbkambaekglhkf_down{text-align: center;padding:0px;margin: 0px;}
      </style>
      <style type="text/css">
         .jlhlebbhengjlhmcjebbkambaekglhkf {top: 0px; left: 0px;min-width: 30px;max-width: 300px;font-size: 13px;font-family: arial, helvetica, sans-serif;opacity: .93;padding:0px;position:absolute;display:block;z-index: 999997;font-style: normal;font-variant: normal;font-weight: normal;}#jlhlebbhengjlhmcjebbkambaekglhkf_up{text-align: center;padding:0px;margin: 0px;}#jlhlebbhengjlhmcjebbkambaekglhkf_cont{background-color: #729FCF;font-family: arial, helvetica, sans-serif-webkit-box-shadow: #729FCF 0px 0px 2px;color: #FFFFFF;padding:7px;-webkit-border-radius: 5px;}#jlhlebbhengjlhmcjebbkambaekglhkf_down{text-align: center;padding:0px;margin: 0px;}
      </style>
      <link href="/assets/admin/css/chitietthangthua_files/DateRangeSelect.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/chitietthangthua_files/jscal2.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/chitietthangthua_files/steel.min.css" rel="stylesheet" type="text/css">
      <style>
         .color-red {
            color: red!important;
         }
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
         
      </style>
      <script>
         var dau = 120;
         function load()
         {

         if(dau == 0)
         {
           top.main.location.reload();
         }
         document.getElementById("time").innerHTML = "Làm mới ("+ dau+ ")";
         if(document.getElementById("time1").checked == true)
         {
           if(dau > 0)
           {
               dau--;
           }
         }
         setTimeout(load,1000);
         }
      </script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.31/moment-timezone-with-data.min.js"></script>
      <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      <script src="https://use.fontawesome.com/785b3c3b57.js"></script>
      <script>
         moment.tz.setDefault("America/New_York");
      </script>
   </head>
   <body onload="load()">
      @include('portal.messsage')
      <div id="page_main">
         <div id="header_main">
            CHI TIẾT THẮNG THUA CỦA {{$current_type}} - ({{$user->username}})
         </div>
         <form method="get" action="" id="frm" name="frm" style="overflow-x: scroll;height: 96vh">
            <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
               <input type="hidden" name="id" value="{{$user->id}}">
               <tbody>
                  <tr>
                     <td>
                        <div id="box_header">
                           <table style="width: 100%">
                              <tbody>
                                 <tr>
                                    <td>
                                       <script src="/assets/admin/js/chitietthangthua_files/DateRangeSelect.js" type="text/javascript"></script><script type="text/javascript">
                                          var max_server_date = '11/6/2014';
                                       </script>
                                       <div id="spDateTimeSearch">
                                          <table border="0" cellpadding="0" cellspacing="0">
                                             <tbody>
                                                <tr style="height: 32px;">
                                                   <td class="l" id="tdfdatetext" style="padding-left: 6px;">
                                                      <span id="spfdatetext">Từ:</span>
                                                   </td>
                                                   <td class="l" id="tdFromDateCal">
                                                      <span id="spFromDateCal">
                                                      </span>
                                                      <script src="/assets/admin/js/chitietthangthua_files/jscal2.js" type="text/javascript"></script>
                                                      <script src="/assets/admin/js/chitietthangthua_files/en.js" type="text/javascript"></script>
                                                      <table border="0" cellspacing="0">
                                                         <tbody>
                                                            <tr>
                                                               <td>
                                                                  <input class="date_no" id="fdate" name="start_date" readonly="readonly" size="13" type="text" value="{{$req->start_date}}">
                                                               </td>
                                                               <td>
                                                                  <input alt="" id="fdate_trigger" onclick="javascript:return false;" class="icon-calendar" src="/assets/admin/images/calen.png" style="width: 30px;cursor: pointer" title="Date selector" type="image"><!-- <img alt="" src="/_GlobalResources/Images/cal.gif" id="fdate_trigger" title="Date selector"style="margin: 0px; cursor: pointer" /> -->
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <span id="spFromDateCal">
                                                         <script type="text/javascript">
                                                            function CalendarOnSelect() {if($("ddlSelectDate"))$("ddlSelectDate").value = 8;}var fdate = Calendar.setup({animation:false,trigger: "fdate_trigger",inputField: "fdate",min: 20180101, max: {{date('Ymd')}},dateFormat: "%m/%d/%Y",weekNumbers:true,onSelect: function() {CalendarOnSelect();this.hide();}});
                                                         </script>
                                                      </span>
                                                   </td>
                                                   <td class="l" id="tdtdatetext">
                                                      &nbsp;&nbsp;
                                                      <span id="sptdatetext"> đến:</span>
                                                   </td>
                                                   <td class="l" id="tdToDateCal">
                                                      <span id="spToDateCal">
                                                      </span>
                                                      <table border="0" cellspacing="0">
                                                         <tbody>
                                                            <tr>
                                                               <td>
                                                                  <input id="tdate" name="end_date" class="date_no" value="{{$req->end_date}}" type="text" size="13" readonly="readonly">
                                                               </td>
                                                               <td>
                                                               <input type="image" alt="" src="/assets/admin/images/calen.png" id="tdate_trigger" title="Date selector" style="width: 30px;cursor: pointer" onclick="javascript:return false;">
                                                               {{-- <input type="image" alt="" id="tdate_trigger" class="icon-calendar" title="Date selector" style="width: 30px;cursor: pointer" onclick="javascript:return false;"> --}}
                                                               </td>
                                                            </tr>
                                                         </tbody>
                                                      </table>
                                                      <script type="text/javascript">
                                                         function CalendarOnSelect() {if($("ddlSelectDate"))$("ddlSelectDate").value = 8;}var tdate = Calendar.setup({animation:false,trigger: "tdate_trigger",inputField: "tdate",min: 20180101,max: {{date('Ymd')}},dateFormat: "%m/%d/%Y",weekNumbers:true,onSelect: function() {CalendarOnSelect();this.hide();}});
                                                      </script>
                                                   </td>
                                                   <td class="l">
                                                      &nbsp;&nbsp;<input class="btn" id="dSubmit" onclick="" style="" type="submit" value="Xem">&nbsp;
{{--                                                      <input class="btn" id="dToday" onclick="top.main.location='?id={{$user->id}}&start_date={{$today}}&end_date={{$today}}'" style="width: 100px" type="button" value="{{$today}}">&nbsp;--}}
{{--                                                      <input class="btn" id="dYesterday" onclick="top.main.location='?id={{$user->id}}&start_date={{$yesterday}}&end_date={{$yesterday}}'" style="width: 100px" type="button" value="{{$yesterday}}">--}}
                                                   </td>
                                                   <td>
                                                      <div id="reportrange" style="background: #0b599c; color: white; cursor: pointer; padding: 6px 5px; border: 1px solid #ccc; width: 100%">
                                                         <!--<i class="fa fa-calendar"></i>&nbsp;-->
                                                         <span>Today</span>&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-down" aria-hidden="true"></i>
                                                      </div>

                                                      <script type="text/javascript">
                                                         $(function() {

                                                            var startDate = moment('{{$req->start_date}}', 'MM/DD/YYYY');
                                                            var endDate = moment('{{$req->end_date}}', 'MM/DD/YYYY');

                                                            var name = '{{$req->name}}';
                                                            if (startDate.format('MM/DD/YYYY') === endDate.format('MM/DD/YYYY') && name === '') {
                                                               $('#reportrange span').html('Hôm nay');
                                                            } else {
                                                               if (name) {
                                                                  $('#reportrange span').html(name);
                                                               } else {
                                                                  $('#reportrange span').html('Ngày riêng biệt');
                                                               }
                                                            }


                                                            function cb(start, end, name) {
                                                               const startStr = start.format('MM/DD/YYYY')
                                                               const endStr = end.format('MM/DD/YYYY')
                                                               top.main.location=`?id={{$user->id}}&start_date=${startStr}&end_date=${endStr}&name=${name}`;
                                                            }

                                                            $('#reportrange').daterangepicker({
                                                               startDate: startDate,
                                                               endDate: endDate,
                                                               locale: {
                                                                  "customRangeLabel": "Ngày riêng biệt",
                                                               },
                                                               ranges: {
                                                                  'Hôm nay': [moment(), moment()],
                                                                  'Hôm qua': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                                                  'Tuần này': [moment().startOf('isoWeek'), moment().endOf('isoWeek')],
                                                                  'Tuần trước': [moment().subtract(1, 'week').startOf('isoWeek'), moment().subtract(1, 'week').endOf('isoWeek')],
                                                                  'Tháng này': [moment().startOf('month'), moment().endOf('month')],
                                                                  'Tháng trước': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
                                                                  'Từ tháng trước': [moment().subtract(1, 'month').startOf('month'), moment()]
                                                               }
                                                            }, cb);

                                                            // cb(start, end);
                                                         });
                                                      </script>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </td>
                                    <td align="right">
                                       <input type="checkbox" id="time1" onclick="" checked="true">
                                       <label for="time1" style="color: #999; text-transform: none;font-weight:bold;line-height:18px;" id="time">Làm mới (1)</label>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           <div class="warning l" id="dvMsg" style="margin-bottom: 5px; margin-top: 10px; padding:0 2px;">
                              <ul>
                                 <li><span id="spMsg">
                                    Bạn có thể xem dữ liệu báo cáo từ {{$start_date}} đến {{$end_date}}. Để xem chi tiết, nhấn
                                    <a href="#" onclick=""> Xem chi tiết</a></span>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <div id="tbl-container">
                           <div id="boderRight">
                              <table border="0" cellpadding="0" cellspacing="1" class="tblRpt" id="tbl-rpt" style="min-width: 800px; display: table;" width="100%">
                                 <tbody>
                                    <tr class="RptTitle" id="rowTitle">
                                       <td colspan="11" id="content_title">Chi tiết thắng thua thành viên <span id="spSumaryDate">{{$req->start_date}}--&gt;{{$req->end_date}}</span></td>
                                    </tr>
                                    <tr class="RptHeader">
                                       <td rowspan="2">Tài khoản</td>
                                       <td rowspan="2">Họ</td>
                                       <td rowspan="2">Tên</td>
                                       <td rowspan="2">No. of
                                          Ticket
                                       </td>
                                       <td rowspan="2">Tiền Cược</td>
                                       <td rowspan="2">Gross Comm</td>
                                       <td colspan="3">Thành viên</td>
                                       <td colspan="3">Agent</td>
                                       <td rowspan="2">Company</td>
                                    </tr>
                                    <tr class="RptHeader02">
                                       <td>Thắng / Thua</td>
                                       <td>Hoa hồng</td>
                                       <td>Tổng cộng</td>
                                       <td>Thắng / Thua</td>
                                       <td>Hoa hồng</td>
                                       <td>Tổng cộng</td>
                                    </tr>
                                    @foreach($betsDone as $value)
                                    <tr onmouseout="this.style.backgroundColor='#F6F8F9'" onmouseover="this.style.backgroundColor='#f8ff8d'" style="background-color: rgb(246, 248, 249);">
                                       <td class="left_normal">
                                          @if($current_type !== 'member')
                                          <a
                                          href="{!! route('portal.agent.win_lose_details', ['id' => $value->user_id, 'start_date' => $req->start_date, 'end_date' => $req->end_date]) !!}"
                                          >
                                             @if($authUser->canViewOnline())
                                             <span class="dot-icon {{$value->online ? 'online': ''}}"></span>
                                             @endif
                                             {{$value->username}}
                                       </a>
                                       @else
                                             <a
                                                     href="{!! route('portal.agent.chitietttmb', ['id' => $value->user_id, 'start_date' => $req->start_date, 'end_date' => $req->end_date]) !!}"
                                             >
                                                @if($authUser->canViewOnline())
                                                <span class="dot-icon {{$value->online ? 'online': ''}}"></span>
                                                @endif
                                                {{$value->username}}
                                             </a>
{{--                                       <span class="downline_link" onclick="top.main.location='chitietttmb?id={{$value->user_id}}&amp;start_date={{$req->start_date}}&amp;end_date={{$req->end_date}}'">--}}
{{--                                          {{$value->username}}--}}
{{--                                       </span>--}}
                                       @endif
                                       </td>
                                       <td class="left_normal">
                                          {{$value->first_name}}
                                       </td>
                                       <td class="left_normal">
                                          {{$value->last_name}}
                                       </td>
                                       <td>{{($sum['number_ticket'] +=$value->number_ticket) ? $value->number_ticket : 0}}</td>
                                       <td>{{($sum['stake'] +=$value->stake) ? $value->stake : 0}}</td>
                                       <td>0.00</td>
                                       <td class="{{$value->profit > 0 ? '' : 'color-red'}}">{{($sum['profit'] +=$value->profit) ? $value->profit : 0}}</td>
                                       <td>{{($sum['commission'] +=$value->commission) ? $value->commission : 0}}</td>
                                       <td class="b {{$value->total = $value->commission + $value->profit}} {{$value->total > 0 ? '' : 'color-red'}}">{{$value->total}}</td>
                                       <td class="altercol">0.00</td>
                                       <td class="altercol">0.00</td>
                                       <td class="altercol_bold">
                                          0.00
                                       </td>
                                       <td class="{{$sum['total'] +=$value->total}} {{$value->total < 0 ? '' : 'color-red'}}">{{$value->total ? $value->total * -1 : 0}}</td>
                                    </tr>
                                    @endforeach
                                    <tr class="RptFooter">
                                       <td class="l">Tổng cộng</td>
                                       <td></td>
                                       <td></td>
                                       <td>{{$sum['number_ticket']}}</td>
                                       <td>{{$sum['stake']}}</td>
                                       <td>0.00</td>
                                       <td>{{$sum['profit']}}</td>
                                       <td>{{$sum['commission']}}</td>
                                       <td>{{$sum['total']}}</td>
                                       <td class="altercol_master">
                                          0.00
                                       </td>
                                       <td class="altercol_master">
                                          0.00
                                       </td>
                                       <td class="altercol_master">
                                          0.00
                                       </td>
                                       <td>{{$sum['total'] * -1}}</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
         </form>
      </div>
   </body>
</html>
