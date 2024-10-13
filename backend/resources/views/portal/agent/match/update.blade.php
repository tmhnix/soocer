<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="portal">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Add new member</title>
    <link href="/assets/admin/css/themthanhvien_files/Agent.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/css/themthanhvien_files/MemberInfo.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" rel="stylesheet" type="text/css">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js"></script>

    <style>
        .match p{
            width: 120px;
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="minWidthCustomer">
    <div class="customerInfo">
        <div class="headerTab">Thông tin Chung</div>

        {!! Form::open(array('route' => array('portal.agent.match.updatePost', $id))) !!}
        <h4>Chọn Giải</h4>
        <div><input name="league_name" value="{{$event->league_name}}" disabled style="width: 400px;"/></div>

        <h4>Chủ nhà</h4>
        <div><input name="home" value="{{$event->home}}" disabled style="width: 400px;"/></div>

        <h4>Khách</h4>
        <div><input name="away" value="{{$event->away}}" disabled style="width: 400px;"/></div>

        <h4>Thời gian trận đấu</h4>
        <div><input name="time" value="{{$event->time}}" disabled type="text" style="width: 200px;"/></div>

        <h4>Tỉ số</h4>
        <div><input name="ss" type="text" value="{{$event->ss}}" style="width: 200px;"/></div>
        <h4> Trạng thái </h4>
        <div>
          <select name="status">
              <option value="0" @if($event->time_status == 0) selected @endif >Sắp diễn ra</option>
             <option value="1" @if($event->time_status == 1) selected @endif >Đang chạy</option>
              <option value="3" @if($event->time_status == 3) selected @endif >Hoàn thành</option>
          </select>
        </div>
        <br/>
        <h4>Cài đặt kèo</h4>
        @foreach($event->odds as $key => $odd)
        <ul>
            <li class="match">
                Kèo 1: <br/>
                <p>FT Handicap:</p>
                <input type="hidden" value="{{$odd->id}}" name="odds[{{$key}}][id]"/>
                <input placeholder="Kèo chấp" name="odds[{{$key}}][ft_hdp][handicap_value]" value="{{format_value_odds($odd['ft_hdp'])}}">
                <input placeholder="Nhà" name="odds[{{$key}}][ft_hdp][home_od]" value="{{$odd['ft_hdp']['home_od']}}">/
                <input placeholder="Khách" name="odds[{{$key}}][ft_hdp][away_od]" value="{{$odd['ft_hdp']['away_od']}}">
                <br/>
                <p>FT Tai/xỉu:</p>
                <input placeholder="Tỷ lệ kèo" name="odds[{{$key}}][ft_ou][handicap_value]" value="{{$odd['ft_ou']['handicap_value']}}"/>
                <input placeholder="Tài" name="odds[{{$key}}][ft_ou][over_od]" value="{{$odd['ft_ou']['over_od']}}"/>/
                <input placeholder="Xỉu" name="odds[{{$key}}][ft_ou][under_od]" value="{{$odd['ft_ou']['under_od']}}"/>
                <br/>
                <p>FT 1X2:</p>
                <input placeholder="Nhà" name="odds[{{$key}}][ft_1x2][home_od]" value="{{$odd['ft_1x2']['home_od']}}"/>
                <input placeholder="Hòa" name="odds[{{$key}}][ft_1x2][draw_od]" value="{{$odd['ft_1x2']['draw_od']}}"/>
                <input placeholder="Khách" name="odds[{{$key}}][ft_1x2][away_od]" value="{{$odd['ft_1x2']['away_od']}}"/><br/>
                <br/>
                <p>1H Handicap:</p>
                <input placeholder="Kèo chấp" name="odds[{{$key}}][hf_hdp][handicap_value]" value="{{format_value_odds($odd['hf_hdp'])}}">
                <input placeholder="Nhà" name="odds[{{$key}}][hf_hdp][home_od]" value="{{$odd['hf_hdp']['home_od']}}">/
                <input placeholder="Khách" name="odds[{{$key}}][hf_hdp][away_od]" value="{{$odd['hf_hdp']['away_od']}}">
                <br/>
                <p>1H Tai/xỉu:</p>
                <input placeholder="Tỷ lệ kèo" name="odds[{{$key}}][hf_ou][handicap_value]" value="{{$odd['hf_ou']['handicap_value']}}"/>
                <input placeholder="Tài" name="odds[{{$key}}][hf_ou][over_od]" value="{{$odd['hf_ou']['over_od']}}"/>/
                <input placeholder="Xỉu" name="odds[{{$key}}][hf_ou][under_od]" value="{{$odd['hf_ou']['under_od']}}"/>
                <br/>
                <p>1H 1X2:</p>
                <input placeholder="Nhà" name="odds[{{$key}}][hf_1x2][home_od]" value="{{$odd['hf_1x2']['home_od']}}"/>
                <input placeholder="Hòa" name="odds[{{$key}}][hf_1x2][draw_od]" value="{{$odd['hf_1x2']['draw_od']}}"/>
                <input placeholder="Khách" name="odds[{{$key}}][hf_1x2][away_od]" value="{{$odd['hf_1x2']['away_od']}}"/><br/>
            </li>
        </ul>
        @endforeach
        <div class="clearBlock"></div>
        <input type="submit" id="submit" value="Lưu" style="margin-bottom: 5px;" class="btn btn-refresh">
        {!! Form::close() !!}
    </div>
</div>
</div>
<script>
    jQuery('#datetimepicker').datetimepicker({
        minDate: new Date(),
        format:'Y-m-d H:i:00',
        mask: true
    });
</script>
</body>
</html>