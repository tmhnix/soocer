<html>
<head>
    <title>Đăng Nhập</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ elixir('portal/css/login-page.css') }}"/>
    <script type="application/javascript" src="{{ elixir('portal/js/all.js') }}"></script>
</head>
<body ng-app="portal" ng-controller="MainController">
    <div id="divLoading" style="display: none">
        <h2>
            Loading... please wait
        </h2>
    </div>
    <div id="mainholder" class="block-login">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/portal/login') }}">
            {{ csrf_field() }}
            <div class="box-lang">
                <div class="dropdown">
                    <span class="btn dropdown-toggle" type="button" id="langList" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="flag flag-vn" id="flag"></span>
                        <span id="lblLanguage">Tiếng Việt</span> 
                        <span class="caret"></span>
                        <input type="hidden" value="en-US" id="hidLanguage" name="hidLanguage">
                    </span>
                    <ul class="dropdown-menu" aria-labelledby="langList" id="language-ddl">
                        <li><a href="#"><span class="flag flag-en" data-language-code="en-US"></span>English</a></li>
                        <li><a href="#"><span class="flag flag-tw" data-language-code="zh-TW"></span>繁體中文</a></li>
                        <li><a href="#"><span class="flag flag-cn" data-language-code="zh-CN"></span>简体中文</a></li>
                        <li><a href="#"><span class="flag flag-jp" data-language-code="ja-JP"></span>日本語</a></li>
                        <li><a href="#"><span class="flag flag-th" data-language-code="th-TH"></span>ภาษาไทย</a></li>
                        <li><a href="#"><span class="flag flag-kr" data-language-code="ko-KR"></span>한국어</a></li>
                        <li><a href="#"><span class="flag flag-vn" data-language-code="vi-VN"></span>Tiếng Việt</a></li>
                    </ul>
                </div>
            </div>
            <h1 class="title login-text">Đăng nhập</h1>
            <div class="rowlg msg-error" errCode="0" id="errmsg"></div>
            <div class="rowlg">
                <input type="text" class="txt" placeholder="Tên đăng nhập"  id="txtUserName" name="username" tabindex="1" required/>
                <i class="icon-user"></i>
            </div>
            <div class="rowlg">
                <input type="<% login.showPassword ? 'text' : 'password' %>" class="txt" placeholder="Mật khẩu" id="txtPassWord" name="password" tabindex="2" autocomplete="off" required />
                <i class="icon-lock"></i>
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="rowlg checkbox">
                <label>
                    <input name="chb-showpass" ng-model="login.showPassword" type="checkbox"/> 
                    <span id="lbShowPass">Hiển thị mật khẩu</span>
                </label>
            </div>
            <div class="list-button">
                <input type="submit" class="btnLogin" value="Đăng Nhập" id="btnLogin" tabindex="5"/>
            </div>
        </form>
    </div>
</body>
</html>
