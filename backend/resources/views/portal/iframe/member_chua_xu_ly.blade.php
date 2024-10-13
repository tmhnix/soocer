<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MEMBER OUTSTANDING</title>
<link href="/assets/admin/css/chua_xu_ly_files/Agent.min.css" rel="stylesheet" type="text/css">
<link href="/assets/admin/css/chua_xu_ly_files/Reports.min.css" rel="stylesheet" type="text/css">

<style type="text/css">

.jlhlebbhengjlhmcjebbkambaekglhkf {

  top: 0px;

  left: 0px;

  min-width: 30px;

  max-width: 300px;

  font-size: 13px;

  font-family: arial, helvetica, sans-serif;

  opacity: .93;

  padding: 0px;

  position: absolute;

  display: block;

  z-index: 999997;

  font-style: normal;

  font-variant: normal;

  font-weight: normal;

}

#jlhlebbhengjlhmcjebbkambaekglhkf_up {

  text-align: center;

  padding: 0px;

  margin: 0px;

}

#jlhlebbhengjlhmcjebbkambaekglhkf_cont {

  background-color: #729FCF;

font-family: arial, helvetica, sans-serif-webkit-box-shadow: #729FCF 0px 0px 2px;

  color: #FFFFFF;

  padding: 7px;

  -webkit-border-radius: 5px;

}

#jlhlebbhengjlhmcjebbkambaekglhkf_down {

  text-align: center;

  padding: 0px;

  margin: 0px;

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

var dau = 90;

function load() {
    if(dau == 0) {

        top.main.location.reload();

    }
    document.getElementById("time").innerHTML = "Làm mới ("+ dau+ ")";
    if(document.getElementById("time1").checked == true) {
        if(dau > 0) {
            dau--;
        }
    }
    setTimeout(load,1000);
}

</script>

</head>

<body style="padding-left: 10px;" onload="load()">
@include('portal.messsage')
<form id="frmmain" method="get" action="./chua_xu_ly_files/chua_xu_ly.htm">

  <div id="page_main">

    <div id="header_main">

      <div style="width: 690px"><span style="float:left">Số  tiền chưa xử lý của {{$current_type}}</span><span class="right_box">

        <input type="button" value="Reset" id="f5" onclick="top.main.location.reload();" style="width: 70px; height: 20px;">

        <input type="checkbox" id="time1" onclick="" checked="true">

        <label for="time1" style="color: #999; text-transform: none;font-weight:bold;line-height:18px;" id="time">Làm mới (70)</label>
        &nbsp;</span>
      </div>

    </div>

    <div style="width: 100%; padding: 5px 0px;">

      <div id="tbl-container">

        <div id="boderRight">

          <table class="tblRpt " width="700" style="display: table;" border="0" cellpadding="0" cellspacing="1" id="tbl-rpt">

            <tbody>

              <tr class="RptHeader">

                <td width="100px" rowspan="2" columnname="UserName">Tài khoản</td>

                <td colspan="2" title="Sportsbook - Racing - Number Game - Live Casino - Virtual Sports - Keno">Số  tiền chưa xử lý</td>
              

              </tr>

              <tr class="RptHeader02">

                <td width="120px" columnname="outstanding">Thành viên</td>

                <td width="120px" columnname="positiontaking">Agent</td>
              

              </tr>

              @foreach($betsRuning as $value)
              <tr bgcolor="#F6F8F9" onmouseover="this.style.backgroundColor='#f8ff8d'" onmouseout="this.style.backgroundColor='#F6F8F9'" style="background-color: rgb(246, 248, 249);">

                <td>
                  @if($authUser->canViewOnline())
                  <span class="dot-icon {{$value->online ? 'online': ''}}"></span>
                  @endif
                  {{$value->username}}
                </td>

                <td>
                  @if($current_type !== 'member')
                  <a 
                  href="{!! route('portal.agent.member_chua_xu_ly', ['id' => $value->user_id]) !!}"
                  >{{format_number_pretty($value->stake)}}
                </a>
                @else
                <span class="downline_link" onclick="top.main.location='/portal/member_runingbets?id={{$value->user_id}}';">{{format_number_pretty($value->stake)}}
                  </span>
                @endif

                </td>
                <td></td>

              </tr>
              @endforeach
              
              <tr class="RptFooter" style="display: none;">

                <td class="l">Total</td>

                {{-- <td></td>

                <td></td>

                <td></td>

                <td></td>

                <td></td>

                <td></td>

                <td></td>

                <td></td> --}}

              </tr>

            </tbody>

          </table>

        </div>

      </div>

    </div>

  </div>

</form>
</body>
</html>