<html class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Statement</title>
  <link rel="shortcut icon" href="/assets/web/images/favicon.ico" type="image/x-icon" />
  <link href="/assets/web/css/v2/sports.css" type="text/css" rel="stylesheet">
  <link href="/assets/web/css/v2/mainv2.css?v=15" rel="stylesheet" type="text/css">
  <link href="/assets/web/css/v2/custom.css" rel="stylesheet" type="text/css">
  <style>
        .header-expand .logo {
            background-image: url("assets/web/images/v2/logo.svg?v=2") !important;
        }
    </style>
</head>
<body>
  <div>
    <header class="logoNavigationOnly">
      <div class="header-expand header-belt">
        <div class="logo "></div>
        <div class="header-belt-main">
          <ul class="nav-main">

            <li class="{{$__env->yieldContent('menu') == 'betList' ? 'active': ''}} ul-nav-main" style="color: white;">
              <span class="icon-betList" onclick="location.href='/statement_details.aspx'">Bảng Cược</span>
           </li>
           <li class="{{$__env->yieldContent('menu') == 'statement' ? 'active': ''}} ul-nav-main" style="color: white;">
              <span class="icon-statement" onclick="location.href='/statement.aspx?type=soccer'">Sao Kê</span>
           </li>
           <li class="{{$__env->yieldContent('menu') == 'result' ? 'active': ''}} ul-nav-main" style="color: white;" >
              <span class="icon-result" onclick="location.href='/resultFrame.aspx'">Kết Quả</span>
           </li>

           <li class="{{$__env->yieldContent('menu') == 'message' ? 'active': ''}} ul-nav-main" style="color: white;" >
            <span class="icon-message" onclick="location.href='/message'">Nhật Ký Tin Nhắn</span>
         </li>

         <li class="{{$__env->yieldContent('menu') == 'preferences' ? 'active': ''}} ul-nav-main" style="color: white;" >
            <span class="icon-preferences " onclick="location.href = '/UserProfile_Change_Password.aspx'">Tùy thích/Tự Chọn</span>
         </li>

      </ul>
   </div>
</div>
</header>
</div>

@yield('main')

<footer class="copyrightOnly">
 <!--start-->
 <div class="copyright">© Copyright 2022 . viva88 . All Rights Reserved.</div>
 <!--end-->
</footer>

</body></html>