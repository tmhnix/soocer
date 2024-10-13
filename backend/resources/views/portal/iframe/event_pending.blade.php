<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Kết quả</title>
<link href="/assets/admin/css/M_UnderOver.css?v=201802011053" rel="stylesheet" type="text/css">
<style type="text/css">
    .league{
        font-size: 10px;
        font-weight: bold;
    }
    .result{
        color: blue;
        cursor: pointer;
    }
    .result:hover{
        text-decoration: underline;
    }
</style>
</head>
<body id="Result" style="padding-bottom:5px">
<div class="">
  <form action="Result.aspx" method="post" name="form1" target="ResultMain">
   <div class="titleBar">
      <div class="title">Trận đấu bị treo</div>
    </div>
    <div id="ResultItem" class="tabbox" style="display: block"> 
      
      <div class="tabbox_F"> 
<table class="oddsTable info" width="100%" cellpadding="0" cellspacing="0" border="0">

    <tbody>
    <tr>
        <th width="110" align="left" nowrap="">Thời Gian Bắt Đầu</th>
        <th align="left" class="even">Trận đấu</th>
        <th width="95" style="white-space:nowrap;">Hiệp 1</th>
        <th width="80" style="white-space:nowrap;" class="even">Chung cuộc</th>
        <th width="30" align="left">Thời gian treo</th>
        <th width="90" align="left" colspan="2">Trạng Thái</th>
    </tr>
    @foreach($events as $event)
    <tr class="bgcpe" onmouseover="this.className='trbgov'" onmouseout="this.className='bgcpe'">
        <td nowrap="nowrap">2021-00:00 GMT+8</td>
        <td>
            {{$event->home}} -vs- <b>{{$event->away}}</b>
            <br/>
            <div class="league">{{$event->league_name}}</div>
        </td>
        <td align="center"><strong>{{$event->hf_ss}}</strong></td>
        <td align="center"><strong>{{$event->ss}}</strong></td>
        <td align="center"><strong>{!! $event->time !!}</strong></td>
        <td width="13" align="center"><div class="displayOn"><span title="Info" class="iconOdds info" onclick="ViewSoccerDetail(this,'54098_273111_294918_detail','24716771');"></span></div></td>
        <td width="77" nowrap="nowrap">
            <strong>Treo</strong>
            <div class="result" 
            onclick="window.open('http://ls.1266366.com/index.aspx?clientid=846&flag=ls&language=en&clientmatchid={{$event->event_id}}','_blank')"
            >Kết quả
            </div>
            <a class="LinkPopup" style="color: #045ace; cursor: pointer;font-weight: 600;text-decoration: underline;" href="{!! route('portal.web.updateEvent', ['id' => $event->id]) !!}">Sửa kèo</a>
        </td>
    </tr>
    @endforeach
    <tr id="54098_295052_295021_detail" class="displayOff">
        <td colspan="6" class="moreBetType">
           <div class="MoreTable">
           </div>
        </td>
    </tr>
    
</tbody></table>
 </div>
       
    </div>
    <div class="note">
        <div class="noteBorder">
            <div class="title"><span>Lưu ý</span></div>
            <div class="content">Xin lưu ý rằng thời gian hiển thị dựa trên GMT -4 giờ.</div> 
        </div>
    </div>
  </form>
</div>

</body></html>