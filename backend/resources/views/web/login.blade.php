<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <html xmlns="http://www.w3.org/1999/xhtml" data-lt-installed="true">
      <head>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
         <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
         <title>viva88</title>
         {{-- <link href="https://i.vixcdn.com/template/sportsbook/public/css/global.css?v=201810110554" rel="stylesheet" type="text/css"> --}}
         <link href="https://i.vixcdn.com/Login/viva88/common/css/login.css?v=202111090339" rel="stylesheet" type="text/css">
         <link rel="shortcut icon" href="https://i.vixcdn.com/Login/viva88/common/Images/favicon.ico?v=201911140312" type="image/x-icon">
         <link href="https://i.vixcdn.com/template/sportsbook/public/css/jquery.colorbox/appDownload.css?v=201405220620" rel="stylesheet" type="text/css">
         <script language="JavaScript" type="text/javascript" src="https://i.vixcdn.com/commJS/jquery.min.js?v=201206260354"></script>
         <script language="JavaScript" type="text/javascript" src="https://i.vixcdn.com/commJS/jquery.colorbox-min.js?v=201304230727"></script>
         <script language="JavaScript" type="text/javascript" src="https://i.vixcdn.com/commJS/common.js?v=201608170600"></script>
         <script language="JavaScript" type="text/javascript" src="https://i.vixcdn.com/commJS/Auth.js?v=202104200650"></script>
         <script language="JavaScript" type="text/javascript" src="https://i.vixcdn.com/commJS/ping.js?v=201301020620"></script>
         <script language="JavaScript" type="text/javascript" src="https://i.vixcdn.com/commJS/jquery.time-to.js?v=201805030759"></script>
         <script language="JavaScript" type="text/javascript" src="https://i.vixcdn.com/commJS/swiper.min.js?v=2021060611"></script>
         <script type="text/javascript">
            $(function () {
                // Banner 輪播
                var Swiper1 = new Swiper('.lobby-banner__container > div', {
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.lobby-banner__pagination > div',
                        type: 'bullets',
                        clickable: true,
                    },
                    effect: 'silde',
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false
                    },
                    preloadImages: true,
                    loop: true,
                    speed: 800
                });
                // 關閉登入面板
                $("[demo-close-popup]").on("touchstart, click", function (event) {
                    event.stopPropagation();
                    $(".login-popup").removeClass("is-show");
                    $(".overlay").removeClass("is-show");
                    clearunameerr();
                    clearupwderr();
                });


                $(window).resize(function () {
                    if (window.innerWidth > 768) {
                        $(".login-popup").removeClass("is-show");
                        $(".overlay").removeClass("is-show");
                    }
                });

                $(".iconthin-visibility,.iconthin-visibility-off").on("touchstart, click", function (event) {
                    var targetInput = $(".login-popup input[name='txtPW']");
                    event.stopPropagation();
                    if (targetInput.attr('type') == 'password') {
                        targetInput.prop('type', 'text');
                    } else if (targetInput.attr('type') == 'text') {
                        targetInput.prop('type', 'password');

                    }

                })


                $(".login__item-account .iconthin-visibility,.login__item-account .iconthin-visibility-off").on("touchstart, click", function (event) {
                    var targetInput = $(".login__item-account input[name='txtPW']");

                    event.stopPropagation();
                    if (targetInput.attr('type') == 'password') {
                        targetInput.prop('type', 'text');
                    } else if (targetInput.attr('type') == 'text') {
                        targetInput.prop('type', 'password');

                    }
                })

            });


         </script>
         <script type="text/javascript">
            var EnableRandomLogin = false;
                  var loginTimeOut;
            var RandomMin =2;
            var RandomMax =10;
            var IsSmartPhone = false;
            var IsIphone = false;
            var userAgent = navigator.userAgent.toLowerCase();
            var FromMode = getUrlParameter('fromMode');
            var unlabel = "Tên Truy Cập";
            var tmpun = "Tên Truy Cập";
              var pwlabel = "Mật Khẩu";
              var isStyle1 = false;
            var cssTimer;

            if (userAgent.indexOf('iphone') != -1) {
                IsIphone = true;
            }
            if (userAgent.indexOf('android') != -1 && userAgent.indexOf('mobile') != -1) {
                IsSmartPhone = true;
            }
            function getUrlParameter(parameterName) {
                  var strQuery = location.search.substring(1);

                  var paramName = parameterName + "=";

                  if (strQuery.length > 0) {
                      begin = strQuery.indexOf(paramName);

                      if (begin != -1) {
                          begin += paramName.length;

                          end = strQuery.indexOf("&", begin);
                          if (end == -1) end = strQuery.length

                          return unescape(strQuery.substring(begin, end));
                      }
                      return "null";
                  }
              }

              function domainName() {
                  var dotIndex = location.hostname.indexOf(".");
                  var domainname = location.hostname.substring(dotIndex + 1);
                  return domainname;

              }

              var error_username = "Vui lòng nhập tên người dùng";
              var error_password = "Vui lòng nhập mật khẩu";
              var error_validation = "Vui lòng nhập thông tin xác thực";
              var topFrameTimeOut;
              // Changed language
              function changeLan(selValue) {
                  document.frmChangeLang.hidSelLang.value = selValue;
                  document.frmLogin.hidubmit.value = '';
                  document.frmChangeLang.submit();
              }
              function makeSelectItemByValue(selectId, sOptionValue) {
                  var oSelect = document.getElementById(selectId);
                  for (index = 0; index < oSelect.length; index++) {
                      if (oSelect[index].value == sOptionValue) {
                          oSelect[index].selected = true;
                          break;
                      }
                  }
              }
              var i = 0;
              function reloadValidatecode() {
                  i++;
                  document.getElementById('validateCode').src = 'login_code.aspx?' + i;
              }

              function AutoRefreshHeadPage() {
                  ping("detecResponseTime.aspx", function (pingResult) { if (pingResult.status == 'success') document.getElementById('detecResTime').value = pingResult.ackTime }, true);
                  clearTimeout(topFrameTimeOut);
                  //reloadValidatecode();
                  topFrameTimeOut = window.setTimeout("AutoRefreshHeadPage()", 30000);
              }
         </script>
         <script>
            $(document).ready(function () {
                // langMenu for iPad
                // is Pad
                if (CheckIsIpad()) {
                    $("body").addClass("isPad");
                    $("#notipadlangmenu").hide();
                    $("#ipadlangmenu").show();
                    $(".langMenu li").click(function () {
                        changeLan($(this).attr("lang"));
                        $(this).addClass("selected");
                    })
                }

                AutoRefreshHeadPage();

                document.getElementById('footerP').innerHTML = "&copy; Copyright " + new Date().getFullYear() + " viva88.com. All Rights Reserved."
            });

            function setUserNameData(object)
            {
                if (object.value == unlabel) {
                    object.value = '';
                } else {
                    object.value = tmpun;
                }
            }
            function checkUserNameData(object)
            {
            if (object.value==''){
              object.value=unlabel;
            //	object.className = '';
            }else{
              tmpun = object.value;
            //object.className = 'text-focus';
            }
            }
            function checkPWData(object)
            {
            if (object.value=='')
            {
            object.value=pwlabel;
            object.type='text';
            }
            }
            function setFocus()
            {
                var objID =  document.getElementById('txtID');

            if (objID.value != unlabel)
               {
                  objID.placeholder = 'Tên Truy Cập';
              // objID.className = 'text-focus';
            document.getElementById('txtPW').focus();
            document.getElementById('RMME').checked=false;
            }
            else
            {
               //objID.className = '';

                   objID.placeholder = '';
                   objID.focus();
            }
            }
            function setPWDXXX(isRWD){
               var obj = isRWD ? document.getElementById('popuptxtPW') : document.getElementById('txtPW');
            //if(obj == null) {return;}
            if(obj.value != pwlabel){
             //  obj.type = 'password';
            }
                }
            function setRememberMe() {
               if (document.getElementById('RMME').checked == true) {
                   document.getElementById('RMME').checked == false;
               }
               else {
                   document.getElementById('RMME').checked == true;
               }
            }
            function closeUpdatePopupAlert() {
            $("#updatePopupAlert").remove();
            }
            function isIE(){
            var userAgent = navigator.userAgent; //取得瀏覽器的userAgent
            var isIE = userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1; //判斷是否IE<11
            var isEdge = userAgent.indexOf("Edge") > -1 && !isIE; //判斷是否IE的Edge
            var isIE11 = userAgent.indexOf('Trident') > -1 && userAgent.indexOf("rv:11.0") > -1;
            if(isIE) {
            var reIE = new RegExp("MSIE (\\d+\\.\\d+);");
            reIE.test(userAgent);
            var fIEVersion = parseFloat(RegExp["$1"]);
            if(fIEVersion == 7) {
            return true;
            } else if(fIEVersion == 8) {
            return true;
            } else if(fIEVersion == 9) {
            return true;
            } else if(fIEVersion == 10) {
            return true;
            } else {
            return true;//IE版本<=7
            }
            }
            else if(isIE11) {
            return true; //IE11
            }
            else{
            return false;//不是IE
            }
            }

            var _LoginAttention = null;
            function changeMobile () {
               var url = window.location.hostname;
               window.location.href = 'https://m.'+ window.location.hostname;
            }
            function openloginremind() {
                if (window.innerWidth <= 768) {
                    isStyle1 = true;
                    $(".login-popup").addClass("is-show");
                    $(".overlay").addClass("is-show");
                } else {
                    if (!$('#loginremind').hasClass('is-open')) {
                        $('#loginremind').addClass('is-open');
                    }
                    else {
                        clearTimeout(_LoginAttention);
                    }
                    _LoginAttention = setTimeout(function () {
                        $('#loginremind').removeClass('is-open');
                    }, 5000);
                }
            }

            function closeLoginAttention(e) {
                    switch (e.target.className) {
                        case 'header__col':
                        case 'text':
                        case 'lobby-product':
                        case 'lobby-product__info':
                        case 'lobby-product__name':
                        case 'lobby-product__intro':
                        case 'footer__item':
                        case 'la':
                        case 'iconthin-sport1':
                        case 'iconthin-sport43':
                        case 'iconthin-sport2':
                        case 'iconthin-sport161':
                        case 'iconthin-sport8':
                        case 'iconthin-sport180':
                        case 'iconthin-sport202':
                            break;
                        default:
                            if ($('#loginremind').hasClass('is-open')) {
                                clearTimeout(_LoginAttention);
                                $('#loginremind').removeClass('is-open');
                            }
                            break;
                    }
            }



            function gotoLandingPage() {
            var lang = 'vn';
            var landingPage = "landingPage.html";
            if (lang == "vn")
            landingPage = "landingPage_vn.html";
            window.location = "./ExternalLandingPage/" + landingPage;
            }
         </script>
         <script>
            function clearunameerr() {
                $("#popupunameerr").removeClass("is-open");
            }
            function clearupwderr() {
                $("#popupupwderr").removeClass("is-open");
            }

            function clickLoginX(e) {
                if (window.innerWidth <= 768) {
                    isStyle1 = true;
                    $(".login-popup").addClass("is-show");
                    $(".overlay").addClass("is-show");
                } else {
                    isStyle1 = false;
                    return (callSubmitX('', 'D',false));
                }
            }

            function gotoSabaScore() {
                var lang = 'vn';
                var landingPage = "https://www.sabasports.com/category/board.html?skin=243d66&v=" + (new Date()).getTime();
                if (lang == "vn")
                    landingPage = "https://vn.sabasports.com/lich-thi-dau/?skin=243d66&v=" + (new Date()).getTime();
                else if (lang == "zhcn" || lang == "ch" || lang == "cs")
                    landingPage = "https://www.sabasports.cn/category/board.html?skin=243d66&v=" + (new Date()).getTime();
                window.open(landingPage, "sabaScore");
            }

            @if ($errors->has('password'))
            alert('{{ $errors->first('password') }}')
            @endif
         </script>
         <!-- nivo-slider -->
         <link href="https://i.vixcdn.com/template/bong88/public/css/nivo-slider.css?v=201309170928" rel="stylesheet" type="text/css">
         <script type="text/javascript" src="https://i.vixcdn.com/commJS/jquery.nivo.slider.pack.js"></script>
         <script type="text/javascript">
            $(window).load(function () {
                $('#slider').nivoSlider({
                    effect: 'boxRandom',
                    pauseTime: 6000
                });
                $('#slider2').nivoSlider({
                    effect: 'fade',
                    pauseTime: 8000,
                    directionNav: true
                });
            });
         </script>
         <!--  dropdown show/hide for demo  -->
         <script type="text/javascript">
            $(document).ready(function () {
                if (EnableRandomLogin) {
                    $("#loginRow").hide();
                    $("#loadingTxt").show();
                    //$("#overlay1").show();
                    //$("#overlay2").show();
                    var logintime = Math.ceil(Math.random() * (RandomMax - RandomMin + 1) + RandomMin - 1) * 1000;
                    if (loginTimeOut != null && typeof loginTimeOut != 'undefined') {
                        clearTimeout(loginTimeOut);
                        loginTimeOut = null;
                    }
                    loginTimeOut = window.setTimeout(function () {
                        //$("#overlay1").hide();
                        //$("#overlay2").hide();
                        $("#loadingTxt").hide();
                        $("#loginRow").show();
                    }, logintime);
                }
                switch ($("body").attr('Lang')) {
                    case "zhcn":
                    case "cs":
                        //$("#weltitle").html('嗨! 您好!');
                        //$("#welload").html('正在载入...');
                        $("#loadingTxt").html('载入中，请稍待…');

                        break;
                    case "ch":
                        //$("#weltitle").html('嗨! 歡迎!');
                        //$("#welload").html('載入中...');
                        $("#loadingTxt").html('載入中，請稍待…');
                        break;
                    case "vn":
                        //$("#weltitle").html('Xin Chào!');
                        //$("#welload").html('đang tải...');
                        $("#loadingTxt").html('đang tải, vui lòng đợi...');
                        break;
                }


                $(".dropdown > span").click(function () {
                    $(".dropdown ul").toggle();
                });

                $(".dropdown ul li").click(function () {
                    var text = $(this).html();
                    $(".dropdown > span").html(text);
                    $(".dropdown ul").hide();
                    //changeLan( $(this).value);
                    changeLan(this.id);
                });

                $(document).bind('click', function (e) {
                    var $clicked = $(e.target);
                    if (!$clicked.parents().hasClass("dropdown"))
                        $(".dropdown ul").hide();
                });
                $("\x69\x6e\x70\x75\x74\x5b\x6e\x61\x6d\x65\x5e\x3d\x27\x6c\x6c\x71\x27\x5d")['\x76\x61\x6c'](window["\x70\x61\x72\x73\x65\x49\x6e\x74"]($("\x69\x6e\x70\x75\x74\x5b\x6e\x61\x6d\x65\x5e\x3d\x27\x70\x70\x27\x5d")['\x76\x61\x6c']()) + window["\x70\x61\x72\x73\x65\x49\x6e\x74"]($("\x69\x6e\x70\x75\x74\x5b\x6e\x61\x6d\x65\x5e\x3d\x27\x6b\x31\x27\x5d")['\x76\x61\x6c']()));
            });
         </script>
         <style type="text/css">
            .logoDemo {
            background-image: url(./template/bong88/public/images/layout/logo_bong88_DM.png?v=20140502);
            background-repeat: no-repeat;
            float: left;
            width: 190px;
            height: 55px;
            margin-top: 6px;
            margin-left: 5px;
            }
            /* [lang="vn"] .logo::before {
             background-image: url("assets/web/images/v2/logo.svg?v=1") !important;
            } */


         </style>
      </head>
      <body class="" lang="vn" onload="setFocus();">
         <div class="header">
            <div class="header__main">
               <div class="header__logo">
                  <span class="logo"></span>
               </div>
               <div class="header__login">
                  <div class="login">
                     {!! Form::open(array('route' => 'web.loginPost', 'id' => 'frmLogin', 'class' => 'login__form')) !!}
                     <div class="login__item-account">
                        <div class="textfield">
                           <input id="txtID" name="username" maxlength="20" type="text" class="textfield__input" placeholder="" oninput="clearunameerr();" onfocus="javascript:setUserNameData(this);" onblur="javascript:checkUserNameData(this);" value="Tên Truy Cập">
                        </div>
                        <div class="textfield">
                           <input id="txtPW" name="password" maxlength="12" class="textfield__input" type="password" placeholder="Mật Khẩu" oninput="clearupwderr();" onfocus="setPWDXXX();" value="">
                           <i class="iconthin-visibility"></i>
                           <i class="iconthin-visibility-off"></i>
                        </div>
                        <input id="PF" name="PF" type="hidden" value="Default">
                        <div class="login__option">
                           <label class="checkbox" onclick="setRememberMe();">
                           <input type="checkbox" id="RMME" name="RMME" value="on">
                           <i class="icon icon-checkbox"></i><span class="text">Ghi Nhớ?</span>
                           </label>
                        </div>
                        <div id="loginremind" class="login__remind">Vui lòng đăng nhập để chơi</div>
                     </div>
                     <div class="login__item-btn" >
                        <a class="btn btn-highlight" onclick="clickLoginX(event, this)" login-open-popup="login-open-popup" ><span class="text" >Đăng nhập</span> </a>
                     </div>
                     <div class="login__item-btn">
                        <a class="btn btn-secondary"><span class="text">Tham gia ngay</span></a>
                     </div>
                     {!! Form::close() !!}
                  </div>
               </div>
            </div>
            <div class="header__nav">
               <div class="header__col" onclick="openloginremind();">
                  <span class="text">Thể Thao</span>
               </div>
               <div class="header__col" onclick="openloginremind();">
                  <span class="text">Thể Thao Ảo</span>
               </div>
               <div class="header__col" onclick="openloginremind();">
                  <span class="text">Thể Thao Điện Tử</span>
               </div>
               <div class="header__col" onclick="openloginremind();">
                  <span class="text">Number Game</span>
               </div>
               <div class="header__col" onclick="openloginremind();">
                  <span class="text">Trò Chơi</span>
               </div>
               <div class="header__col" onclick="openloginremind();">
                  <span class="text">RNG Keno</span>
               </div>
            </div>
         </div>
         <div class="lobby">
            <div class="lobby-banner">
               <div class="lobby-banner__container">
                  {{-- <div class="swiper swiper-container-horizontal swiper-container-wp8-horizontal">
                     <div class="swiper-button-next">
                        <i class="iconthin-arrow-right"></i>
                     </div>
                     <div class="swiper-button-prev">
                        <i class="iconthin-arrow-left"></i>
                     </div>
                     <div id="MainBanner" class="swiper-wrapper" style="transition-duration: 800ms; transform: translate3d(-8960px, 0px, 0px);">
                        <div class="swiper-slide swiper-slide-duplicate" onmouseover="" style="cursor: pointer; width: 1792px;" data-swiper-slide-index="7"><a onclick="javascript:window.open('VendorGame.aspx?bType=One789','banner','width=1024,height=768');" style="background-image: url(/assets/web/images/v2/banners/banners_MAIN_209.jpg)"></a></div>
                        <div class="swiper-slide" data-swiper-slide-index="0" style="width: 1792px;"><a style="background-image: url(/assets/web/images/v2/banners/banners_MAIN_210.jpg)"></a></div>
                        <div class="swiper-slide" data-swiper-slide-index="1" style="width: 1792px;"><a style="background-image: url(/assets/web/images/v2/banners/banners_MAIN_211.jpg)"></a></div>
                        <div class="swiper-slide" data-swiper-slide-index="2" style="width: 1792px;"><a style="background-image: url(/assets/web/images/v2/banners/banners_MAIN_250.jpg)"></a></div>
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="3" style="width: 1792px;"><a style="background-image: url(/assets/web/images/v2/banners/banners_MAIN_234.jpg)"></a></div>
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="4" style="width: 1792px;"><a style="background-image: url(/assets/web/images/v2/banners/banners_MAIN_256.jpg)"></a></div>
                        <div class="swiper-slide swiper-slide-next" onmouseover="" style="cursor: pointer; width: 1792px;" data-swiper-slide-index="5"><a onclick="javascript:window.open('VendorGame.aspx?bType=Choang','banner','width=1024,height=768');" style="background-image: url(/assets/web/images/v2/banners/banners_MAIN_257.jpg)"></a></div>
                        <div class="swiper-slide" onmouseover="" style="cursor: pointer; width: 1792px;" data-swiper-slide-index="6"><a onclick="javascript:window.open('VendorGame.aspx?bType=Naga','banner','width=1024,height=768');" style="background-image: url(/assets/web/images/v2/banners/banners_MAIN_258.jpg)"></a></div>
                        <div class="swiper-slide" onmouseover="" style="cursor: pointer; width: 1792px;" data-swiper-slide-index="7"><a onclick="javascript:window.open('VendorGame.aspx?bType=One789','banner','width=1024,height=768');" style="background-image: url(/assets/web/images/v2/banners/banners_MAIN_209.jpg)"></a></div>
                        <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="width: 1792px;"><a style="background-image: url(/assets/web/images/v2/banners/banners_MAIN_210.jpg)"></a></div>
                     </div>
                  </div> --}}

                  <div class="swiper swiper-container-horizontal swiper-container-wp8-horizontal">
                     <div class="swiper-button-next">
                       <i class="iconthin-arrow-right"></i>
                     </div>
                     <div class="swiper-button-prev">
                       <i class="iconthin-arrow-left"></i>
                     </div>
                     <div id="MainBanner" class="swiper-wrapper"
                       style="transition-duration: 800ms; transform: translate3d(-10172px, 0px, 0px);">
                       <div class="swiper-slide swiper-slide-duplicate" onmouseover="" style="cursor: pointer; width: 2543px;"
                         data-swiper-slide-index="8"><a
                           onclick="javascript:window.open('VendorGame.aspx?bType=Naga','banner','width=1024,height=768');"
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_140.jpg?v=20220712165910)"></a>
                       </div>
                       <div class="swiper-slide" data-swiper-slide-index="0" style="width: 2543px;"><a
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_334.jpg?v=20220921072031)"></a>
                       </div>
                       <div class="swiper-slide" data-swiper-slide-index="1" style="width: 2543px;"><a
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_329.jpg?v=20220912040521)"></a>
                       </div>
                       <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 2543px;"><a
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_330.jpg?v=20220912040521)"></a>
                       </div>
                       <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" style="width: 2543px;"><a
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_321.jpg?v=20220712165910)"></a>
                       </div>
   
                       <div class="swiper-slide" onmouseover="" style="cursor: pointer; width: 2543px;" data-swiper-slide-index="4"><a
                           onclick="javascript:window.open('VendorGame.aspx?bType=Choang','banner','width=1024,height=768');"
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_320.jpg?v=20220712165910)"></a>
                       </div>
                       
                       <div class="swiper-slide" onmouseover="" style="cursor: pointer; width: 2543px;" data-swiper-slide-index="5"><a
                           onclick="javascript:window.open('VendorGame.aspx?bType=Choang','banner','width=1024,height=768');"
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_313.jpg?v=20220712165910)"></a>
                       </div>
                       
                       <div class="swiper-slide" onmouseover="" style="cursor: pointer; width: 2543px;" data-swiper-slide-index="6"><a
                           onclick="javascript:window.open('VendorGame.aspx?bType=Choang','banner','width=1024,height=768');"
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_276.jpg?v=20220712165910)"></a>
                       </div>
                       
                       <div class="swiper-slide" onmouseover="" style="cursor: pointer; width: 2543px;" data-swiper-slide-index="7"><a
                           onclick="javascript:window.open('VendorGame.aspx?bType=Choang','banner','width=1024,height=768');"
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_190.jpg?v=20220712165910)"></a>
                       </div>
                       
                       <div class="swiper-slide" onmouseover="" style="cursor: pointer; width: 2543px;" data-swiper-slide-index="8"><a
                           onclick="javascript:window.open('VendorGame.aspx?bType=Choang','banner','width=1024,height=768');"
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_140.jpg?v=20220712165910)"></a>
                       </div>
                       
                       <div class="swiper-slide" onmouseover="" style="cursor: pointer; width: 2543px;" data-swiper-slide-index="9"><a
                           onclick="javascript:window.open('VendorGame.aspx?bType=Choang','banner','width=1024,height=768');"
                           style="background-image: url(https://i.vixcdn.com/Login/viva88/vn/Images/Banners/banners_MAIN_334.jpg?v=20220921072031)"></a>
                       </div>
                     </div>
                   </div>
               </div>
               <div class="lobby-banner__pagination">
                  <div class="swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
               </div>
            </div>
            <div class="lobby__container">
               <div class="lobby-products">
                  <div class="lobby-product" onclick="openloginremind();">
                     <img class="la" src="https://i.vixcdn.com/Login/viva88/common/Images/Product_Soccer.jpg?v=202105200411" onclick="openloginremind();">
                     <div class="lobby-product__info" onclick="openloginremind();">
                        <span class="lobby-product__name">Bóng đá</span>
                        <span class="lobby-product__intro">Đặt cược và đắm mình trong môn thể thao phổ biến nhất thế giới</span>
                     </div>
                  </div>
                  <div class="lobby-product" onclick="openloginremind();">
                     <img class="la" src="https://i.vixcdn.com/Login/viva88/common/Images/SabaClub.jpg?v=202108030728" onclick="openloginremind();">
                     <div class="lobby-product__info" onclick="openloginremind();">
                        <span class="lobby-product__name">Cổng Game SABA</span>
                        <span class="lobby-product__intro">Cổng game Việt cho người Việt!Cổng game Việt cho người Việt!</span>
                     </div>
                  </div>
                  <div class="lobby-product" onclick="gotoSabaScore();">
                     <i class="iconthin-saba"></i>
                     <a class="btn-saba-score">
                     <span class="text">Tỷ số Saba</span>
                     <i class="iconthin-arrow-right"></i>
                     </a>
                  </div>
                  <div class="lobby-product" onclick="openloginremind();">
                     <img class="la" src="https://i.vixcdn.com/Login/viva88/common/Images/Product_Basketball.jpg?v=202105200411" onclick="openloginremind();">
                     <div class="lobby-product__info" onclick="openloginremind();">
                        <span class="lobby-product__name">Bóng rổ</span>
                        <span class="lobby-product__intro">Những cú Swish hoàn hảo </span>
                     </div>
                  </div>
                  <div class="lobby-product" onclick="openloginremind();">
                     <img class="la" src="https://i.vixcdn.com/Login/viva88/common/Images/sport_esports.jpg?v=202105200411" onclick="openloginremind();">
                     <div class="lobby-product__info" onclick="openloginremind();">
                        <span class="lobby-product__name">Thể Thao Điện Tử</span>
                        <span class="lobby-product__intro">Đặt cược vào các đội yêu thích trong các giải đấu trực tuyến hàng đầu</span>
                     </div>
                  </div>
                  <div class="lobby-product" onclick="openloginremind();">
                     <img class="la" src="https://i.vixcdn.com/Login/viva88/common/Images/Product_VirtualSports.jpg?v=202105200411" onclick="openloginremind();">
                     <div class="lobby-product__info" onclick="openloginremind();">
                        <span class="lobby-product__name">Thể Thao Ảo</span>
                        <span class="lobby-product__intro">Tận hưởng các trận đấu trực tuyến mà không phải chờ đợi</span>
                     </div>
                  </div>
                  <div class="lobby-product" onclick="openloginremind();">
                     <img class="la" src="https://i.vixcdn.com/Login/viva88/common/Images/Product_NumberGame.jpg?v=202105200411" onclick="openloginremind();">
                     <div class="lobby-product__info" onclick="openloginremind();">
                        <span class="lobby-product__name">Number Game</span>
                        <span class="lobby-product__intro">Đặt cược vào những con số may mắn</span>
                     </div>
                  </div>
                  <div class="lobby-product" onclick="openloginremind();">
                     <img class="la" src="https://i.vixcdn.com/Login/viva88/common/Images/Product_Gaming.jpg?v=202105200411" onclick="openloginremind();">
                     <div class="lobby-product__info" onclick="openloginremind();">
                        <span class="lobby-product__name">Trò Chơi</span>
                        <span class="lobby-product__intro">Slot, card và table game cùng rất nhiều lựa chọn</span>
                     </div>
                  </div>
                  <div class="lobby-product" onclick="openloginremind();">
                     <img class="la" src="https://i.vixcdn.com/Login/viva88/common/Images/Product_Keno.jpg?v=202105200411" onclick="openloginremind();">
                     <div class="lobby-product__info" onclick="openloginremind();">
                        <span class="lobby-product__name">RNG Keno</span>
                        <span class="lobby-product__intro">10+ RNG Keno games</span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer">
            <div class="footer__nav">
               <div class="footer__col">
                  <div class="footer__heading">
                     <span class="text">Nền Tảng</span>
                  </div>
                  <div class="footer__item" onclick="changeMobile();">
                     <span class="text">ĐT di động</span>
                  </div>
               </div>
               <div class="footer__col">
                  <div class="footer__heading">
                     <span class="text">Sản Phẩm</span>
                  </div>
                  <div class="footer__item" onclick="openloginremind();">
                     <span class="text">Thể Thao</span>
                  </div>
                  <div class="footer__item" onclick="openloginremind();">
                     <span class="text">Thể Thao Ảo</span>
                  </div>
                  <div class="footer__item" onclick="openloginremind();">
                     <span class="text">Thể Thao Điện Tử</span>
                  </div>
                  <div class="footer__item" onclick="openloginremind();">
                     <span class="text">Number Game</span>
                  </div>
                  <div class="footer__item" onclick="openloginremind();">
                     <span class="text">Trò Chơi</span>
                  </div>
                  <div class="footer__item" onclick="openloginremind();">
                     <span class="text">RNG Keno</span>
                  </div>
               </div>
               <div class="footer__col">
                  <div class="footer__heading">
                     <span class="text">Ngôn Ngữ</span>
                  </div>
                  <div class="footer__item" onclick="changeLan('vn');">
                     <span class="text">Tiếng Việt</span>
                  </div>
                  <div class="footer__item" onclick="changeLan('en');">
                     <span class="text">English</span>
                  </div>
                  <div class="footer__item" onclick="changeLan('ch');">
                     <span class="text">繁體中文</span>
                  </div>
                  <div class="footer__item" onclick="changeLan('jp');">
                     <span class="text">日本語</span>
                  </div>
               </div>
            </div>
            <div class="footer__copyright" id="footerP">© Copyright 2021 viva88.com. All Rights Reserved.</div>
            <form id="frmChangeLang" name="frmChangeLang" method="post" action="login888.aspx?fromMode=1">
               <input id="hidSelLang" name="hidSelLang" type="hidden">
            </form>
            <script type="text/javascript" src="//sc.detecas.com/di/activator.ashx"></script>
         </div>
         <div class="overlay"></div>
         <div class="login-popup">
            <div class="login__close">
               <a class="btn btn-icon" demo-close-popup="">
               <i class="icon icon-clear"></i>
               </a>
            </div>
            {!! Form::open(array('route' => 'web.loginPost', 'id' => 'popupfrmLogin', 'class' => 'loginArea')) !!}
               <div class="login__form">
                  <div class="login__item-heading">
                     <span class="text">Đăng nhập </span>
                  </div>
                  <div class="login__item">
                     <div class="textfield">
                        <input id="popuptxtID" name="username" maxlength="30" class="textfield__input" type="text" placeholder="Tên Truy Cập" oninput="clearunameerr();" onfocus="javascript:setUserNameData(this);" onblur="javascript:checkUserNameData(this);" value="Tên Truy Cập">
                        <div id="popupunameerr" class="tooltip tooltip--top">
                           <div class="tooltip__inner">
                              <i class="icon icon-danger"></i>
                              <span class="text">Vui lòng nhập tên người dùng</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="login__item">
                     <div class="textfield">
                        <input id="popuptxtPW" name="password" maxlength="12" class="textfield__input" type="password" placeholder="Mật Khẩu" onfocus="setPWDXXX(true);" oninput="clearupwderr();setPWDXXX(true);" value="">
                        <div id="popupupwderr" class="tooltip tooltip--top">
                           <div class="tooltip__inner">
                              <i class="icon icon-danger"></i>
                              <span class="text">Vui lòng nhập mật khẩu</span>
                           </div>
                        </div>
                        <i class="iconthin-visibility"></i>
                        <i class="iconthin-visibility-off"></i>
                     </div>
                  </div>
                  <div class="login__item-option">
                     <label class="checkbox" onclick="setRememberMe();">
                     <input type="checkbox" id="popupRMME" name="RMME" value="on">
                     <i class="icon icon-checkbox"></i><span class="text">Ghi Nhớ?</span>
                     </label>
                  </div>
                  <div class="login__item-btn" onclick="return(callSubmitX('','D',true));">
                     <a class="btn btn-highlight" demo-login-msg="demo-login-msg">
                     <span class="text">Đăng nhập</span>
                     </a>
                  </div>
               </div>
            {!! Form::close() !!}
         </div>
         <div id="updatePopupAlert" class="c-modal">
            <div class="c-modal__overlay"></div>
            <div class="c-modal__content">
               <div class="c-modal__close" demo-close-popup="demo-close-popup">
                  <i class="c-modal__icon-clear" onclick="closeUpdatePopupAlert()"></i>
               </div>
               <div id="UpgradeTitle" class="c-modal__title">
                  Upgrade Browser for Full Experience
               </div>
               <p id="UpgradeContext1" class="c-modal__p">We are planning to end our support for Internet Explorer<br> on 7/23/2020. </p>
               <p id="UpgradeContext2" class="c-modal__p">To get the best experience with us, make sure you are using<br> one of these supported browsers.</p>
               <div class="c-modal__download">
                  <div class="c-modal__item">
                     <img class="c-modal__img" src="Login/_global/common/Images/browser_Firefox.png?v=20200709001" alt="">
                     <a class="c-modal__btn" href="https://support.mozilla.org/kb/update-firefox-latest-version">
                     <i class="c-modal__icon-download"></i>
                     <span class="c-modal__text">FireFox</span>
                     </a>
                  </div>
                  <div class="c-modal__item">
                     <img class="c-modal__img" src="Login/_global/common/Images/browser_Chrome.png?v=20200709001" alt="">
                     <a class="c-modal__btn" href="https://www.google.com/chrome/browser/desktop/">
                     <i class="c-modal__icon-download"></i>
                     <span class="c-modal__text">Chrome</span>
                     </a>
                  </div>
                  <div class="c-modal__item">
                     <img class="c-modal__img" src="Login/_global/common/Images/browser_edge.png?v=20200709001" alt="">
                     <a class="c-modal__btn" href="https://www.microsoft.com/zh-tw/edge">
                     <i class="c-modal__icon-download"></i>
                     <span class="c-modal__text">Edge</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <script>
            //check mobile
            if (!(IsSmartPhone || IsIphone)) {
            	$("#mobile-promo").remove();
            	$("#mobile-login").remove();
            }
               else {
            	//$("#mobile-login .btn").css("display", "block");

            	$("#txtID").on("focus", function () {
            		if (cssTimer) {
            			clearTimeout(cssTimer);
            			cssTimer = null;
            		}
            		$(".mobile-promo").addClass("in");
            		$(".mobile-promo_group").animate({ scrollLeft: 0 }, 500);
            		$(".ani-btn").addClass("hidden");
            	});

            	$("#txtPW").on("focus", function () {
            		if (cssTimer) {
            			clearTimeout(cssTimer);
            			cssTimer = null;
            		}
            		$(".mobile-promo").addClass("in");
            		$(".mobile-promo_group").animate({ scrollLeft: 500 }, 500);
            		$(".ani-btn").addClass("hidden");
            	});

            	$("input").on("blur", function () {
            		var self = this;
            		cssTimer = setTimeout(function () {
            			$(self).siblings(".mobile-promo").removeClass("in");
            			$(".ani-btn").removeClass("hidden");
            		}, 150);
            	});
            }

               $.ajax({
                   url: "getBeforeLoginBannerSetting.ashx",
                   async: false,
                   cache: false,
                   type: "GET",
                   dataType: "json",
                   data: {
                       Lang: 'vn',
                       platform: 'd'
                   },
                   success: function (data) {
                       if (data != "" && data != null) {
                           if (typeof (data.FullBanner) != "undefined") {
                               var FullBanner = "";
                               for (var i = 0; i < data.FullBanner.length; i++) {
                                   if (data.FullLink[i].length > 0) {
                                       FullBanner = FullBanner + "<div class='swiper-slide' onmouseover='' style='cursor: pointer;'><a onclick=" + data.FullLink[i] + " style='background-image: url(" + data.FullBanner[i] + ")'></a></div>";
                                   }
                                   else {
                                       FullBanner = FullBanner + "<div class='swiper-slide'><a style='background-image: url(" + data.FullBanner[i] + ")'></a></div>";
                                   }

                               }
                               $("#MainBanner").html(FullBanner);
                           }
                           if (typeof (data.RightSmallBanner) != "undefined") {
                               var RightSmallBanner = "";
                               for (var i = 0; i < data.RightSmallBanner.length; i++) {
                                   RightSmallBanner = RightSmallBanner + "<a><img src='" + data.RightSmallBanner[i] + "' /></a>";
                               }
                               $("#slider2").html(RightSmallBanner);
                           }
            			if(isIE())
            				$("#updatePopupAlert").addClass("is-show");
            			if('vn' == "ch"){
            				$("#UpgradeTitle").html("升級體驗");
            				$("#UpgradeContext1").html("我們將於 7/23/2020 起終止支援Internet Explorer。");
            				$("#UpgradeContext2").html("請使用其他瀏覽器，以獲得最佳瀏覽體驗。");
            			}
            			else if('vn' == "zhcn" || 'vn' == "cs"){
            				$("#UpgradeTitle").html("升级体验");
            				$("#UpgradeContext1").html("我们将于 7/23/2020 起終止支援Internet Explorer。");
            				$("#UpgradeContext2").html("请使用其他浏览器，以获得最佳浏览体验。");
            			}
                       }
                   }
               });
         </script>
         <div id="cboxOverlay" style="display: none;"></div>
         <div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
            <div id="cboxWrapper">
               <div>
                  <div id="cboxTopLeft" style="float: left;"></div>
                  <div id="cboxTopCenter" style="float: left;"></div>
                  <div id="cboxTopRight" style="float: left;"></div>
               </div>
               <div style="clear: left;">
                  <div id="cboxMiddleLeft" style="float: left;"></div>
                  <div id="cboxContent" style="float: left;">
                     <div id="cboxTitle" style="float: left;"></div>
                     <div id="cboxCurrent" style="float: left;"></div>
                     <button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button>
                     <div id="cboxLoadingOverlay" style="float: left;"></div>
                     <div id="cboxLoadingGraphic" style="float: left;"></div>
                     <button type="button" id="cboxClose"></button>
                  </div>
                  <div id="cboxMiddleRight" style="float: left;"></div>
               </div>
               <div style="clear: left;">
                  <div id="cboxBottomLeft" style="float: left;"></div>
                  <div id="cboxBottomCenter" style="float: left;"></div>
                  <div id="cboxBottomRight" style="float: left;"></div>
               </div>
            </div>
            <div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
         </div>
         <div id="_ud" style="position: absolute; width: 1px; height: 1px; overflow: hidden; display: block; z-index: -10; opacity: 0.1;"></div>
      </body>
      <script>
      function callSubmitX(BDValue, f,RWDForVivaBong) {
          var idobj;
          // var CFSLowerKey;
          var CFSKey;
          var EnCryptData;
          var pwobj;
          var codeobj;
          var hidubmit;

          $("#unameerr").removeClass("is-open");
          $("#upwderr").removeClass("is-open");

          idobj = RWDForVivaBong ? document.getElementById('popuptxtID') : document.getElementById('txtID');


      	if (idobj.value == '' || idobj.value == unlabel) {
      	    if (typeof (isStyle2) != 'undefined' && isStyle2) {
      			idobj.focus();
      			$("#err_div").addClass("is-show");
                  $("#err_msg").text(error_username);
      		}
      		else {
      		    idobj.focus();
      		    if (typeof (isStyle1) != 'undefined' && isStyle1) {
                      $("#unameerr").toggleClass("is-open");

                      if (RWDForVivaBong) {
                          $(".login-popup #popupunameerr").toggleClass("is-open");
                      }
      		    }
      		    else {
      		        alert(error_username);
      		    }
      		}
              return false;
          }

          pwobj = RWDForVivaBong ? document.getElementById('popuptxtPW'): document.getElementById('txtPW');

      	if (pwobj.value == '' || pwobj.value == pwlabel) {
      	    if (typeof (isStyle2) != 'undefined' && isStyle2) {
      			pwobj.focus();
      			$("#err_div").addClass("is-show");
      			$("#err_msg").text(error_password);
      		}
      		else {
      		    pwobj.focus();
      		    if (typeof (isStyle1) != 'undefined' && isStyle1) {
                      $("#upwderr").toggleClass("is-open");

                      if (RWDForVivaBong) {

                          $("#popupupwderr").toggleClass("is-open");
                      }
      		    }
      		    else {
      		        alert(error_password);
      		    }
      		}
              return false;
          }


          if (RWDForVivaBong) {
              document.getElementById('popupfrmLogin').submit();
          } else {
              document.getElementById('frmLogin').submit()
          }

          return false;
      }
      </script>
   </html>
