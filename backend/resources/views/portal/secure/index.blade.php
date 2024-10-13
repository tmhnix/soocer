<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    
    <link href="/assets/admin/v2/css/common.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/v2/css/security-agent.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/v2/css/security.min.css" rel="stylesheet" type="text/css">
    <title>Mã bảo mật</title>
</head>
<body>

<div style="margin: auto; padding: 30px;">
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active">
        <a>Tạo Mã bảo mật</a>
    </li>
</ul>
<div class="tab-content">
    <div role="tabpanel" class="tab-pane active">
        <div id="status-message" class="msg-content display-none">
            <div id="status-message-content" class="msg"></div>
        </div>
        <div class="block" id="container">
            {!! Form::open(array('route' => array('portal.agent.init_securePost'))) !!}
           <!--  <form class="form-SC form-validation"> -->
                <div class="form-group">
                    <label>Mã bảo mật</label>
                    <input type="password" autocomplete="off" class="txt form-control" name="code" id="txtSecCode" maxlength="6">
                    <i class="validation"></i>
                </div>
                <div class="form-group">
                    <label>Xác nhận mã bảo mật mới</label>
                    <input type="password" autocomplete="off" class="txt form-control" name="recode" id="txtConfirmSecCode" maxlength="6">
                    <i class="validation"></i>
                </div>
                <!-- <div class="form-group">
                    <label><input type="checkbox" id="showSCchk">Xem Mã Bảo Mật</label>
                </div> -->
                <div class="form-group">
                    <input type="submit" class="btn-submit" value="Xác nhận">
                    <input type="reset" value="Reset">
                </div>
            {!! Form::close() !!}
        </div>
        <div class="rules">
            <p><span class="note-red">*</span>Mã Bảo Mật bao gồm 6 ký tự số, phải chứa ít nhất 2 ký tự khác nhau và không phải là các số liên tiếp nhau.</p>
            <ul>
                <li>Ví dụ: không cho phép 123456, 456789, 765432, v.v.</li>
            </ul>
            <!-- <a href="https://mb.b8ag.com/site-main/SecurityCode/LearnMore" target="_blank" class="learn-more">Vui lòng tìm hiểu thêm tại đây</a> -->
        </div>
    </div>
</div>
<input id="securitycode-token" name="securitycode-token" type="hidden" value="vkpwg9">
<input id="security-salt" name="security-salt" type="hidden" value="85f85701ddd28ba9c3aefede09053b85">
<input id="hashkey" name="hashkey" type="hidden" value="zi1ly5">
<input id="oldMainRootPath" name="oldMainRootPath" type="hidden" value="/ex-main/">
<input id="mainRootPath" name="mainRootPath" type="hidden" value="/site-main/">

</div>
</body></html>