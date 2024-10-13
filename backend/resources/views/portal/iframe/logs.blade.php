<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">

    <title>Bet List</title>
    <link href="/assets/admin/css/chitietthangthua_files/Agent.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/chitietttmb_files/BetList.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/chitietthangthua_files/DateRangeSelect.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/chitietthangthua_files/jscal2.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/chitietthangthua_files/steel.min.css" rel="stylesheet" type="text/css">
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
        Lịch sử hoạt động
    </div>

    <div id="spData">
        <form method="get" action="" id="frm" name="frm">
            <table>
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
                                                                <input alt="" id="fdate_trigger" onclick="javascript:return false;" src="/assets/admin/images/calendar.png" style="width: 30px;cursor: pointer" title="Date selector" type="image"><!-- <img alt="" src="/_GlobalResources/Images/cal.gif" id="fdate_trigger" title="Date selector"style="margin: 0px; cursor: pointer" /> -->
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
                                                                <input type="image" alt="" src="/assets/admin/images/calendar.png" id="tdate_trigger" title="Date selector" style="width: 30px;cursor: pointer" onclick="javascript:return false;">
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
                                                    <input class="btn" id="dToday" onclick="top.main.location='?start_date={{$today}}&end_date={{$today}}'" style="width: 100px" type="button" value="{{$today}}">&nbsp;
                                                    <input class="btn" id="dYesterday" onclick="top.main.location='?start_date={{$yesterday}}&end_date={{$yesterday}}'" style="width: 100px" type="button" value="{{$yesterday}}">
                                                </td>
                                                <td valign="top">
                                                    <div class="" id="loading" style="float: left;">
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="warning l" id="dvMsg" style="margin-bottom: 5px; margin-top: 10px; padding:0 2px;">
                            <ul>
                                <li>
                                    <span id="spMsg">
                                    Bạn có thể xem dữ liệu báo cáo từ {{$firstDate}} đến {{$today}}.
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
        </form>
        <table id="hor-minimalist-a">
            <thead>
                <tr>
                    <th style="width: 20px;">#</th>
                    <th style="width: 110px;">Thành viên</th>
                    <th style="width: 110px;">Thời gian</th>
                    <th style="width: 50px;">Loại</th>
                    <th>Thay đổi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($logs as $key => $value)
                <tr id="{{$value->id}}">
                    <td class="w-order">{{$key + 1}}</td>
                    <td class="w-order">
                     <a class="downline_link">
                      {{$value->user_name}}
                  </a>
                    </td>

                    <td class="c nonbreak">
                        Ref No: 
                        @if($value->type == 'update_bet')
                        <a href="{!! route('portal.web.updateBetInSaoke', ['id' => $value->related_id]) !!}">{{$value->related_id}}</a>
                        @elseif($value->type == 'update_event')
                        <a href="{!! route('portal.web.updateEvent', ['id' => $value->related_id]) !!}">{{$value->related_id}}</a>
                        @else
                        {{$value->related_id}}
                        @endif
                        <div class="time">{{$value->created_at}}</div>
                    </td>

                    <td class="bl_underdog nonbreak">
                        <span class="oddstype">{{$value->getTypeName()}}</span>
                    </td>

                    <td class="r bl_evt">
                        <div>
                            <div class="">
                                <div class="bettype">
                                    {{$value->bet_type}}
                                </div>
                                @foreach($value->extra as $item)
                                <div class="match">
                                    <span>{{$item['name']}}</span>
                                    <span>:</span>
                                    <span>{{$item['from']}}</span>
                                    @if($value->type !== 'delete_bet')
                                    <span> => </span>
                                    <span>{{$item['to']}}</span>
                                    @endif
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
               <tr>
                  <td colspan="8">
                     {{ $logs->links() }}
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