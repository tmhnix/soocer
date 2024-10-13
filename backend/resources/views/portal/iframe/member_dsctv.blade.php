<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="../dsctv_files/Agent.css" rel="stylesheet" type="text/css">
  <link href="../dsctv_files/Reports.css" rel="stylesheet" type="text/css">
  <link href="../dsctv_files/BetList.css" rel="stylesheet" type="text/css">
  <script type="text/javascript">

  function OnchangeData1(n)
  {
   if(n==1)
   {
    top.main.location="tbhntv.php?member=ZXTE3D000";
  }
  else if(n==3)
  {
    top.main.location="ddrtv.php?member=ZXTE3D000";
  }
}
function ll(n)
{

  top.main.location=n;
}
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
<style type="text/css"></style>

</head>
<body>
@include('portal.messsage')
  <form id="frmmain" method="get">
  <div id="page_main">
    <div id="header_main">Danh sách cược - ZXTE3D000</div>
    <table border="0" cellpadding="0" cellspacing="0">
      <tbody>
        <tr>
          <td><div id="box_header">
              <table style="width: 100%">
                <tbody>
                  <tr>
                    <td><link href="../dsctv_files/DateRangeSelect.css" rel="stylesheet" type="text/css">
                      <script src="../dsctv_files/DateRangeSelect.js" type="text/javascript"></script><script type="text/javascript">var max_server_date = '9/18/2014';</script>
                      <div id="spDateTimeSearch">
                        <table cellpadding="0" cellspacing="0" border="0">
                          <tbody>
                            <tr style="height: 32px;">
                              <td id="td2" style="padding-left: 6px;" class="l"><span id="Span1">
                                <select id="idoption" onchange="OnchangeData1(this.value)">
                                  
                                  <option value="1">Thông báo hằng ngày</option>
                                  <option value="2" selected="">Danh sách cược</option>
                                  <option value="3">Danh sách cược ( đang diễn ra )</option>
                                </select>
                                </span></td>
                              <td id="tdfdatetext" style="padding-left: 6px;" class="l"><span id="spfdatetext">Từ:</span></td>
                              <td id="tdFromDateCal" class="l"><span id="spFromDateCal">
                                <link href="../dsctv_files/jscal2.css" rel="stylesheet" type="text/css">
                                <link href="../dsctv_files/steel.css" rel="stylesheet" type="text/css">
                                <script src="../dsctv_files/jscal2.js" type="text/javascript"></script><script src="../dsctv_files/en.js" type="text/javascript"></script>
                                
                                <input type="hidden" name="member" value="ZXTE3D000">
                                <table cellpading="0" cellspacing="0" border="0">
                                  <tbody>
                                    <tr>
                                      <td><input id="fdate" name="ngay1" "class="date_no" value="04/04/2018" type="text" size="13" readonly="readonly"></td>
                                      <td><input type="image" alt="" src="../dsctv_files/cal.gif" id="fdate_trigger" title="Date selector" style="margin: 0px; cursor: pointer" onclick="javascript:return false;">
                                        <!-- <img alt="" src="/_GlobalResources/Images/cal.gif" id="fdate_trigger" title="Date selector"style="margin: 0px; cursor: pointer" /> --></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <script type="text/javascript">function CalendarOnSelect() {if($("ddlSelectDate"))$("ddlSelectDate").value = 8;}var fdate = Calendar.setup({animation:false,trigger: "fdate_trigger",inputField: "fdate",min: 20180101,max: 20180405,dateFormat: "%m/%d/%Y",weekNumbers:true,onSelect: function() {CalendarOnSelect();this.hide();}});</script></span></td>
                              <td id="tdtdatetext" class="l">&nbsp;&nbsp; <span id="sptdatetext">đến:</span></td>
                              <td id="tdToDateCal" class="l"><span id="spToDateCal">
                                <table cellpading="0" cellspacing="0" border="0">
                                  <tbody>
                                    <tr>
                                      <td><input id="tdate" name="ngay2" class="date_no" value="04/05/2018" type="text" size="13" readonly="readonly"></td>
                                      <td><input type="image" alt="" src="../dsctv_files/cal.gif" id="tdate_trigger" title="Date selector" style="margin: 0px; cursor: pointer" onclick="javascript:return false;">
                                        <!-- <img alt="" src="/_GlobalResources/Images/cal.gif" id="tdate_trigger" title="Date selector"style="margin: 0px; cursor: pointer" /> --></td>
                                    </tr>
                                  </tbody>
                                </table>
                               
                                <script type="text/javascript">function CalendarOnSelect() {if($("ddlSelectDate"))$("ddlSelectDate").value = 8;}var tdate = Calendar.setup({animation:false,trigger: "tdate_trigger",inputField: "tdate",min: 20180101 ,max: 20180405,dateFormat: "%m/%d/%Y",weekNumbers:true,onSelect: function() {CalendarOnSelect();this.hide();}});</script></span></td>
                              <td class="l">&nbsp;&nbsp;
                                <input type="submit" class="btn" style="width: 55px" id="dSubmit" value="Xác nhận">
                                &nbsp;
                                <input type="button" id="dToday" class="btn" style="width: 80px" value="04/04/2018" onclick="ll('dsctv.php?member=ZXTE3D000&amp;ngay3=2018-04-04')">
                                &nbsp;
                                <input type="button" id="dYesterday" class="btn" style="width: 80px" value="04/05/2018" onclick="ll('dsctv.php?member=ZXTE3D000&amp;ngay3=2018-04-05')"></td>
                              <td valign="top"><div id="loading" class="" style="float: left;"></div></td>
                            </tr>
                          </tbody>
                        </table> 
                      </div></td>
                    <td align="right"></td>
                  </tr>
                </tbody>
              </table>
              <div id="reportFilter">
                <input type="checkbox" id="chk_all" name="chk_all" onclick="CheckAll()">
                <label for="chk_all">Tất cả</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="chk_showsb" name="chk_showsb" onclick="IsCheck()" checked="">
                <label for="chk_showsb">SB</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="chk_showcasino" name="chk_showcasino" onclick="IsCheck()">
                <label for="chk_showcasino">Casino</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="chk_showrb" name="chk_showrb" onclick="IsCheck()" checked="">
                <label for="chk_showrb">Racing</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="chk_showng" name="chk_showng" onclick="IsCheck()">
                <label for="chk_showng">Number Game</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="chk_showbi" name="chk_showbi" onclick="IsCheck()">
                <label for="chk_showbi">Bingo</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="chk_showp2p" name="chk_showp2p" onclick="IsCheck()">
                <label for="chk_showp2p">Poker</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="chk_showlivecasino" name="chk_showlivecasino" onclick="IsCheck()">
                <label for="chk_showlivecasino">Live Casino</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="chk_showvs" name="chk_showvs" onclick="IsCheck()">
                <label for="chk_showvs">Virtual Sports</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="chk_showkeno" name="chk_showkeno" onclick="IsCheck()">
                <label for="chk_showkeno">Keno</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="hidden" name="FilterPostback" id="FilterPostback" value="postback">
              </div>
              <div id="dvMsg" class="warning l" style="margin-bottom: 5px; margin-top: 10px; padding:0 2px;">
                <ul>
                </ul>
              </div>
            </div></td>
        </tr>
        <tr>
          <td><table id="hor-minimalist-a">
              <thead>
                <tr>
                  <th style="width: 20px;">#</th>
                  <th style="width: 110px;">Thời gian</th>
                  <th>Lựa chọn</th>
                  <th style="width: 50px;">Tỷ lệ</th>
                  <th style="width: 50px;">Tiền cược</th>
                  <th style="width: 50px;">Thắng-thua</th>
                  <th style="width: 75px;">Trạng thái</th>
                  <th style="width: 85px;">PT của Agent/ <br>
                    Hoa hồng</th>
                </tr>
              </thead>
              <tbody>
                                                                            <tr class="bl_footertotal" id="tr_footer">
                                              <td class="r" colspan="5"><div>
                                                <div>Tổng cược (Thắng/Thua):</div>
                                                <div>Tổng cược (Hoa hồng):</div>
                                                <div>Tổng cộng:</div>
                                              </div></td>
                                              <td class="r"><div>
                                                <div class="bl_footertotal"><font>0.00</font></div>
                                                <div class="bl_footertotal">0.00</div>
                                                <div class="bl_footertotal"><font>0.00</font></div>
                                              </div></td>
                                              <td colspan="2"></td>
                                            </tr>

                                          </tbody> 
                                        </table></td>
                                      </tr>
                                      <tr>
                                        <td><div class="comm_note">
                                          <div class="title"><span></span></div>
                                          <div class="content"></div>
                                        </div></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                              
                              <script src="../dsctv_files/Core.js" type="text/javascript"></script><script src="../dsctv_files/AGEWnd.js" type="text/javascript"></script><script src="../dsctv_files/BetList.js" type="text/javascript"></script><script src="../dsctv_files/Reports.js" type="text/javascript"></script><script src="../dsctv_files/OutstandingDetail.js" type="text/javascript"></script><script type="text/javascript">var _page = {'FilterCollection':['chk_all','chk_showsb','chk_showcasino','chk_showrb','chk_showng','chk_showbi','chk_showp2p','chk_showlivecasino','chk_showvs','chk_showkeno'],'FilterStatusCollection':['','on','','on','','','','','',''],'CustId':15586197,'fdate':'8/7/2014','tdate':'9/18/2014','page':'1','option':'4'};</script>
                              <div style="display: none; position: absolute; top: 0px; left: 0px; opacity: 0.5; background-color: white;">
                                <div style="width: 100px; height: 100px; position: relative;"></div>
                              </div>
                            
                            </form><div style="display: none; position: absolute; top: 0px; left: 0px; opacity: 0.5; background-color: white;"><div style="width: 100px; height: 100px; position: relative;"></div></div></body></html>