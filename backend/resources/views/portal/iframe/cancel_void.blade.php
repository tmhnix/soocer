<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>VOID/REJECTED BET LIST (LAST 1 WEEK)</title>
<link href="/assets/admin/css/cuochuy_files/Reports.min.css" rel="stylesheet" type="text/css">
<link href="/assets/admin/css/cuochuy_files/BetList.min.css" rel="stylesheet" type="text/css">
<style type="text/css"></style>

</head>
<body>
@include('portal.messsage')
<form id="frmCancelBetList" method="get">
  <div class="bl_title">Danh sách đặt cược bị Hủy/ Từ Chối (cách đây 1 tuần )
    <div class="divBoxRight">
      
    </div>
  </div>
  <div id="content">
    <table id="hor-minimalist-a">
      <thead>
        <tr>
          <th style="width: 20px;">#</th>
          <th style="width: 110px;">Thành viên</th>
          <th style="width: 110px;">Thời gian</th>
          <th>Lựa chọn</th>
          <th style="width: 50px;">Tỷ lệ</th>
          <th style="width: 50px;">Tiền cược</th>
          <th style="width: 75px;">Trạng thái</th>
        </tr>
      </thead>
      <tbody>
        @foreach($bets as $item)
        <tr style="text-decoration: line-through;">
          <td style="width: 20px;text-align: center;">Ref No:{{$item->id}}</td>
          <td style="width: 110px;text-align: center;">{{$item->username}}</td>
          <td style="width: 110px;text-align: center;">{{$item->date}}</td>
          <td>
            <div>
              <div class="">
                <span class="underdog">{{$item->bet_name}} 
                  <span class="handicap">{{$item->bet_amount}}</span>
                  <span>[{{$item->ss}}]</span></span>
                  <div class="bettype">{{$item->bet_type}}</div>
                  <div class="match">
                    <span>{{$item->home}}</span><span>&nbsp;-&nbsp;vs&nbsp;-&nbsp;</span><span>{{$item->away}}</span>
                  </div>

                <div class="league">
                  <span class="sport">Bóng đá</span><span class="leagueName">&nbsp;{{$item->league_name}}</span>
                </div>
              </div>
            </div>
          </td>
          <td style="width: 50px;"><font color="#B50000">{{$item->bet_value}}</font><br>MY</td>
          <td style="width: 50px;">{{$item->bet_amount}}</td>
          <td style="width: 75px;text-align: center;">Đã Hủy</td>
          <td style="width: 75px;text-align: center;">Đã Hủy <br> HT: {{$item->last_ss}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</form>
</body>
</html>