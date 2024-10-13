@extends('web.v2.iframe.template')
@section('menu', 'statement')
@section('main')
<div class="account">
  <!--start-->
  <div class="content">

    <div class="caption">
      <div class="filterArea ">
        <div class="filter icon-print hiddenElement " title="Print This Page "></div>
        <div class="filter icon-refresh  " title="Tải Lại" onclick="window.location.reload();"> </div>
      </div>
      <div class="mainTitle icon-statement">Sao Kê</div>
    </div>
    <ul class="tabNav-BottomLine">
      <li class="@php if($type== 'soccer') echo 'active'; @endphp" onclick="location.href='/statement.aspx?type=soccer'">Bóng đá</li>
      <li class="@php if($type== 'sabagame') echo 'active'; @endphp" onclick="location.href='/statement.aspx?type=sabagame'">Sabagame</li>
    </ul>
    @if($type== 'soccer')
    <div id="SockerContainer" class="SockerContainer">
      <div class="accountTable">
        <div class="tableHead">
          <div class="date-smaller">Ngày</div>
          <div class="remark">Ghi Chú</div>
          <div class="turnover">Lượng tiền</div>
          <div class="credit">Tín Dụng/Ghi Nợ</div>
          <div class="commission">Hoa Hồng</div>
          <div class="balance">Tài Khoản</div>
          <div class="other"></div>
        </div>
        <div class="tableBody">
          @foreach($betsDone as $key=> $value)
          <div class="tableRow-pointer" onclick="javascript:window.location.href='{!! route('web.statementDetails', ['date'=>$value->date, 'type'=> 'done']) !!}'" style="cursor: pointer;">
            <div class="date-smaller">
              <div>{{date('D', strtotime($value->date))}}</div>
              <div>{{$value->date}}</div>
            </div>
            <div class="remark">
              <div>BET</div>
              <div>- Đã xử lý ({{$value->count}})</div>
            </div>
            <div class="balance">{{format_number_pretty($value->stake)}}</div>
            <div class="balance {{$value->profit < 0 ? 'accent' : ''}}">{{format_number_pretty($value->profit)}}</div>
            <div class="commission">{{format_number_pretty($value->commission)}}</div>
            <div class="balance {{$value->profit + $value->commission < 0 ? 'accent' : ''}}">{{format_number_pretty($value->profit + $value->commission)}}</div>
            <div class="other">
              <div class="smallBtn  primary icon-next" title=""></div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    @elseif($type == 'sabagame')
      @include('web.v2.iframe.sabagame')
    @endif
    <div class="note">
      <div class="title">Lưu ý</div>
      <div class="txt">Xin lưu ý rằng thời gian hiển thị dựa trên GMT +8 giờ.</div>
    </div>

  </div>
  <!--end-->
</div>
@stop