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

        {!! Form::open(array('route' => 'portal.agent.match.create')) !!}
        <h4>Chọn Giải</h4>
        <div><input name="league_name" list="league_suggestions" style="width: 400px;"/></div>

        <h4>Chủ nhà</h4>
        <div><input name="home" list="league_suggestions" style="width: 400px;"/></div>

        <h4>Khách</h4>
        <div><input name="away" list="league_suggestions" style="width: 400px;"/></div>

        <h4>Thời gian</h4>
        <div><input name="time" id="datetimepicker" type="text" style="width: 200px;"/> Giờ Việt Nam</div>
        <datalist id="league_suggestions">
            @foreach($leagues as $league)
                <option value="{{$league->name}}">
            @endforeach
        </datalist>
        <br/>
        <h4>Cài đặt kèo</h4>
        <ul>
            <li class="match">
                Kèo 1: <input type="checkbox" checked value="1" name="odds[0][checked]"/><br/>
                <p>FT Handicap:</p>
                    <input placeholder="Kèo chấp" name="odds[0][ft_hdp][handicap_value]">
                    <input placeholder="Nhà" name="odds[0][ft_hdp][home_od]">/
                    <input placeholder="Khách" name="odds[0][ft_hdp][away_od]">
                <br/>
                <p>FT Tai/xỉu:</p>
                    <input placeholder="Tỷ lệ kèo" name="odds[0][ft_ou][handicap_value]"/>
                    <input placeholder="Tài" name="odds[0][ft_ou][over_od]"/>/
                    <input placeholder="Xỉu" name="odds[0][ft_ou][under_od]"/>
                <br/>
                <p>FT 1X2:</p>
                    <input placeholder="Nhà" name="odds[0][ft_1x2][home_od]"/>
                    <input placeholder="Hòa" name="odds[0][ft_1x2][draw_od]"/>
                    <input placeholder="Khách" name="odds[0][ft_1x2][away_od]"/><br/>
                <br/>
                <p>1H Handicap:</p>
                    <input placeholder="Kèo chấp" name="odds[0][hf_hdp][handicap_value]">
                    <input placeholder="Nhà" name="odds[0][hf_hdp][home_od]">/
                    <input placeholder="Khách" name="odds[0][hf_hdp][away_od]">
                <br/>
                <p>1H Tai/xỉu:</p>
                    <input placeholder="Tỷ lệ kèo" name="odds[0][hf_ou][handicap_value]"/>
                    <input placeholder="Tài" name="odds[0][hf_ou][over_od]"/>/
                    <input placeholder="Xỉu" name="odds[0][hf_ou][under_od]"/>
                    <br/>
                <p>1H 1X2:</p>
                    <input placeholder="Nhà" name="odds[0][hf_1x2][home_od]"/>
                    <input placeholder="Hòa" name="odds[0][hf_1x2][draw_od]"/>
                    <input placeholder="Khách" name="odds[0][hf_1x2][away_od]"/><br/>
            </li>
        </ul>
        <ul>
            <li class="match">
                Kèo 2: <input type="checkbox" checked value="1" name="odds[1][checked]"/><br/>
                <p>FT Handicap:</p>
                <input placeholder="Kèo chấp" name="odds[1][ft_hdp][handicap_value]">
                <input placeholder="Nhà" name="odds[1][ft_hdp][home_od]">/
                <input placeholder="Khách" name="odds[1][ft_hdp][away_od]">
                <br/>
                <p>FT Tai/xỉu:</p>
                <input placeholder="Tỷ lệ kèo" name="odds[1][ft_ou][handicap_value]"/>
                <input placeholder="Tài" name="odds[1][ft_ou][over_od]"/>/
                <input placeholder="Xỉu" name="odds[1][ft_ou][under_od]"/>
                <br/>
                <p>FT 1X2:</p>
                <input placeholder="Nhà" name="odds[1][ft_1x2][home_od]"/>
                <input placeholder="Hòa" name="odds[1][ft_1x2][draw_od]"/>
                <input placeholder="Khách" name="odds[1][ft_1x2][away_od]"/><br/>
                <br/>
                <p>1H Handicap:</p>
                <input placeholder="Kèo chấp" name="odds[1][hf_hdp][handicap_value]">
                <input placeholder="Nhà" name="odds[1][hf_hdp][home_od]">/
                <input placeholder="Khách" name="odds[1][hf_hdp][away_od]">
                <br/>
                <p>1H Tai/xỉu:</p>
                <input placeholder="Tỷ lệ kèo" name="odds[1][hf_ou][handicap_value]"/>
                <input placeholder="Tài" name="odds[1][hf_ou][over_od]"/>/
                <input placeholder="Xỉu" name="odds[1][hf_ou][under_od]"/>
                <br/>
                <p>1H 1X2:</p>
                <input placeholder="Nhà" name="odds[1][hf_1x2][home_od]"/>
                <input placeholder="Hòa" name="odds[1][hf_1x2][draw_od]"/>
                <input placeholder="Khách" name="odds[1][hf_1x2][away_od]"/><br/>
            </li>
        </ul>
        <div class="clearBlock"></div>
        <input type="submit" id="submit" value="Thêm" style="margin-bottom: 5px;" class="btn btn-refresh">
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