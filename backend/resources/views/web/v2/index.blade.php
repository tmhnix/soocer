<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="overflow-x:hidden" ng-app="todoApp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=1024" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<link rel="shortcut icon" href="https://i.vixcdn.com/Login/viva88/common/Images/favicon.ico?v=201911140312" type="image/x-icon">
    <base href="/">
    <meta charset="UTF-8">
    <title>viva88</title>
    <script type="application/javascript" src="{{ elixir('js/web-all.js') }}"></script>
    <script type="application/javascript" src="{{ elixir('js/templates.js') }}"></script>
    <link rel="stylesheet" href="{{ elixir('css/web-app.css')}}"/>
    <link rel="stylesheet" href="{{ elixir('css/web-all.css')}}"/>
    <script type="text/javascript">
    // Listen to message from child window
    bindEvent(window, 'message', function (e) {
        try{
            var data = JSON.parse(e.data);
            if (data.name == 'EVENT_GO_LOGIN') {
                window.location.href = '/login';
            } else if (data.name == 'EVENT_GO_LOGOUT') {
                window.location.href = '/logout';
            } else {
                var iframeEl = document.getElementById(data.to);
                iframeEl.contentWindow.postMessage(e.data, '*');
            }
        }catch(e) {
        };
    });
    </script>
    <style>
        [lang="vn"] .header-expand .logo {
            background-image: url("assets/web/images/v2/logo.svg?v=2") !important;
        }
    </style>
</head>
<frameset class="body" rows="*,0" cols="*" framespacing="0" frameborder="no" border="0">
  <!--   <frame src="/topmenu" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" -->>
    <!-- <frame src="/underodds" name="mainFrame" id="mainFrame">
    @yield('main')
</frameset> -->
</html>