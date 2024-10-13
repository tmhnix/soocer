<!DOCTYPE html>
<!-- saved from url=(0023)http://m.cuoc8899.net/# -->
<html lang="en-US" data-lt-installed="true"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="Content-language" content="en">
    <title>viva88</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="google" value="notranslate">
    <link href="/assets/web/login-mobile/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/web/login-mobile/icon_home_screen.png?v=202004031055" rel="apple-touch-icon">
    <link href="/assets/web/login-mobile/addtohomescreen.css" rel="stylesheet" type="text/css">
    <link href="/assets/web/login-mobile/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/web/login-mobile/login.css" rel="stylesheet" id="loginCss" type="text/css">
    <link href="/assets/web/login-mobile/swiper.css" rel="stylesheet" type="text/css">
    <script src="/assets/web/login-mobile/bong88Setting.js"></script>
    <script src="/assets/web/login-mobile/NewPortal.js"></script>
    <script type="text/javascript">
        var _SkinMode = 0;
        var _isBefore = 1;
        var _myWindow = {};
        var _host = getDomainName(window.location.host);
        var _skinPath = 'viva88';
        var _Country = 'VN';
        var _Site = 'viva88';
        var _DisplaySite = 'viva88';
        var _SiteMode = 0
        var _FromGetLang = '';
        var _LandingTime = '2020,4,5,1,23,59,+8';
        var _UseLicSignUp = 'False';
        var _ForgetPasswordProcessType = '0';
        var _DisableSports = 'False';
        var _ATHSType = -1; // Null Type
        var _ath;
        var _GATag = '';
        var _SyncMessageTimerSec= '120000';
        var _Mesid= '4100304';
        var LangObj = loginLang['en-US'];
        var _lan = Cookie.get('_Mculture') ? Cookie.get('_Mculture') : "en-US";
        _lan = _FromGetLang.length > 0 ? _FromGetLang : _lan;
        Cookie.set("_Mculture", _lan, 365);
        var cookRememberMe = Cookie.get("rememberMe");
        var Remember = false;
        if (cookRememberMe != "" && cookRememberMe == 'true') {
            Remember = true;
        }
        var username = Cookie.get("UserName");
        var lastItem = "";
        if (username && username != "") {
            lastItem = username.split(",").length > 0 ? username.split(",")[0] : ""; //最得cookie第1個位置值作為預設
        }
        username = lastItem;

        var myAD = null;

        function moveCookie() {
            var ck = document.cookie;
            var cookieKeys = ["_Mculture", "rememberMe", "UserName"];
            for (var i = 0; i < cookieKeys.length; i++) {
                var key = cookieKeys[i];
                var arr = ck.match(new RegExp("(^| )" + key + "=([^;]*)(;|$)"));
                if (arr != null) {
                    var dd = new Date();
                    dd.setTime(dd.getTime());
                    var deltime = "expires=" + dd.toGMTString();
                    document.cookie = key + "=; " + deltime;
                    var d = new Date();
                    d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
                    var expires = "expires=" + d.toGMTString();
                    var command = key + "=" + unescape(arr[2]) + "; " + expires + "; path=/; domain=." + window._host;
                    document.cookie = command;
                }
            }
        }

        function moveHowToUse() {
            if (Storage.IsAvailable()) {
                var keys = ["HideHowToUse_"];
                if (Storage.get(keys[0] + username) == "true") {
                    var htu = Cookie.get("htu");
                    if (htu && htu != "") {
                        htu = htu.split(",");
                    }
                    else {
                        htu = [];
                    }
                    if (htu.indexOf(username) < 0) {
                        htu.push(username);
                        var d = new Date();
                        d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
                        var expires = "expires=" + d.toGMTString();
                        var command = "htu=" + htu.join(",") + "; " + expires + "; path=/; domain=." + window._host;
                        document.cookie = command;
                    }

                    Storage.remove(keys[0] + username);
                }
            }
        }

        function moveGesture() {
            if (Storage.IsAvailable()) {
                var keys = ["GSet_", "GFCnt", "gesNames", "gesTip"];
                if (Storage.get(keys[0] + username) == 1) {
                    var ges = Cookie.get("ges");
                    if (ges && ges != "") {
                        ges = ges.split(",");
                    }
                    else {
                        ges = [];
                    }
                    if (ges.indexOf(username) < 0) {
                        ges.push(username);
                        var d = new Date();
                        d.setTime(d.getTime() + (365 * 24 * 60 * 60 * 1000));
                        var expires = "expires=" + d.toGMTString();
                        var command = "ges=" + ges.join(",") + "; " + expires + "; path=/; domain=." + window._host;
                        document.cookie = command;
                    }

                    Storage.remove(keys[0] + username);
                }
            }
        }

        function StorageToCookie() {
            var storageKeys = {
                "htu": { moveFun: moveHowToUse },
                "ges": { moveFun: moveGesture }
            };
            for (x in storageKeys) {
                storageKeys[x].moveFun();
            }
        }

        function Init() {
            if (siteSetting.CPRTName) {
                document.getElementById("footerP").innerHTML = "© Copyright " + _LandingTime.substring(0, 4) + ". " + siteSetting.CPRTName + " All Rights Reserved.";
            }
            else {
                document.getElementById("footerP").innerHTML = "© Copyright " + _LandingTime.substring(0, 4) + ". All Rights Reserved.";
            }

            //try {
            //    var x = DomObj(_lan).innerText;
            //} catch (e) {
            //    var x = 'en-US';
            //}

            var myArray = [];
            myArray.push("en-US");
            myArray.push("zh-TW");
            myArray.push("vi-VN");

            var indexx = 0;
            for (var i = 0; i < myArray.length; i++) {
                var arrayItem = myArray[i];
                if (arrayItem.toLowerCase() == _lan.toLowerCase()) {
                    indexx = i;
                    break;
                }
            }
            //console.log('arrayItem:'+arrayItem+' indexx:'+indexx);
            var xx = DomObj('Langid');
            //console.log('text:'+DomObj('Langid').options[indexx].text+" value:"+DomObj('Langid').options[indexx].value);
            DomObj('Langid').text = arrayItem;
            DomObj('Langid').selectedIndex = indexx;
            DomObj("Lang").innerHTML = DomObj('Langid').options[indexx].text;
            DomObj('rememberMe').checked = Remember;
            if (Remember == true) {
                DomObj('Username').value = username;
            }
        }

        function makeCountDown(wcTime) {
            $("#wcContainer").attr("class", "worldCup-counter-group");
            $("#wcContainer").html("<div class='left-group'><span class='wc-counter-icon'></span><span id='WC2018' class='wc-counter-title'></span></div><div class='right-group'><div id='WCountDown' class='countdown'></div></div>");
            $("#WC2018").html(LangObj.wc8);
            require(["jquery", "jquery.time-to"], function ($) {
                $('#WCountDown').timeTo({
                    timeTo: wcTime,
                    displayDays: 2,
                    theme: "black",
                    displayCaptions: true,
                    fontSize: 15,
                    captionSize: 12,
                    callback: function () {
                        makeJoinFever();
                    }
                });
            });

            document.addEventListener('visibilitychange', function () {
                if (document.visibilityState == "visible") {
                    require(["jquery", "jquery.time-to"], function ($) {
                        $('#WCountDown').timeTo({
                            timeTo: wcTime,
                            displayDays: 2,
                            theme: "black",
                            displayCaptions: true,
                            fontSize: 15,
                            captionSize: 12
                        });
                    });
                }
            }, false);

            $("#wcContainer").bind("click", function () {
                ShowLoginDiv(true, "#Sports/s=1_2");
            });
        }

        function makeJoinFever() {
            $("#wcContainer").removeClass("worldCup-counter-group");
            $("#wcContainer").addClass("worldCup-counter-anipng");
            $("#wcContainer").html("<div class='anipng'></div>");

            $("#wcContainer").unbind("click").bind("click", function () {
                ShowLoginDiv(true, "#Sports/s=1_2");
            });
        }

        function loaded() {
            moveCookie();
            StorageToCookie();

            Init();
        };

        function isChrome() {
            var userAgent = navigator.userAgent || navigator.vendor || window.opera;
            if (userAgent.match(/Gecko\)\sChrome/i))
                return true
            else
                return false;
        }

        function PWAProcess() {
            // Show the prompt
            deferredPrompt.prompt();

            // Wait for the user to respond to the prompt
            deferredPrompt.userChoice.then(function (choiceResult) {
                if (choiceResult.outcome === 'accepted') {
                    console.log('User accepted the A2HS prompt');
                }
                else {
                    console.log('User dismissed the A2HS prompt');
                }

                deferredPrompt = null;
            });
        }

        if (siteSetting.openPWA == 1) {
            if (isChrome() == true && getMobileOperatingSystem() == "Android" && "serviceWorker" in navigator) {
                navigator.serviceWorker
                    .register("sw.js?v=20181106001")
                    .then(function (reg) {
                        console.log("Service Worker Registered ", reg);
                    })
                    .catch(function (err) {
                        console.log("Registration failed with " + err);
                    });
            }
            else {
                console.log("No Support Service Worker")
                _ATHSType = 0; // Normal Type
            }

            window.addEventListener('beforeinstallprompt', function (e) {
                _ATHSType = 1; // PWA Type
                // Prevent Chrome 67 and earlier from automatically showing the prompt
                e.preventDefault();
                // Stash the event so it can be triggered later.
                deferredPrompt = e;
                //_ath.show();  // For Browser Test
            });
        }
        else {
            _ATHSType = 0; // Normal Type
        }
    </script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="react" src="/assets/web/login-mobile/react.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="BeforeAD" src="/assets/web/login-mobile/BeforeAD.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="GestureClass" src="/assets/web/login-mobile/GestureClass.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="jquery" src="/assets/web/login-mobile/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="swiper.jquery" src="/assets/web/login-mobile/swiper.jquery.js"></script>
    <script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="BeforeSetting" src="/assets/web/login-mobile/BeforeSetting.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="GoToTop" src="/assets/web/login-mobile/CommonBundle.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="OneAnalytics" src="/assets/web/login-mobile/OneAnalytics.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="addtohomescreen" src="/assets/web/login-mobile/addtohomescreen.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="backbone" src="/assets/web/login-mobile/backbone-min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="touchswipe.min" src="/assets/web/login-mobile/jquery.touchSwipe.min.js"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="underscore" src="/assets/web/login-mobile/underscore-min.js"></script></head>
<body id="element" onload="loaded();" onclick="ResetMessage();" style="">
<input name="__tk" type="hidden" id="__tk" runat="server" value="25af24e5101e12442e84c7f0f30f0ecd51c9266f558ba1">
<input id="detecas-analysis" name="detecas-analysis" value="{&quot;startTime&quot;:1586021005112,&quot;version&quot;:&quot;2.0.3&quot;,&quot;exceptions&quot;:[],&quot;executions&quot;:[],&quot;storages&quot;:[],&quot;devices&quot;:[],&quot;enable&quot;:true}" type="hidden">
<div id="loginPage" class="main pageBeforeLogin">
    <div class="header">
        <div class="main-bar lobby-head-bar before-login">
            <div class="logo"></div>
            <a id="LoginDiv" class="btn btn-orange" onclick="ShowLoginDiv();">Login</a>
        </div>
    </div>
    <div id="portalContent" class="content">
        <div id="portalScroller" class="content-scroller">
            <div class="swiper-wrap">
                <div id="swiperB4Top" class="swiper-container swiper-container-horizontal swiper-container-android"><div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-active" style="width: 375px;"><a><img id="slide0" src="/assets/web/login-mobile/pm_Nagavip.jpg" tagid="vip" tag="" winid="PNRLog"></a></div><div class="swiper-slide swiper-slide-next" style="width: 375px;"><a><img id="slide1" src="/assets/web/login-mobile/ad_lotto.jpg" tagid="Lotto" tag="Lotto/"></a></div><div class="swiper-slide" style="width: 375px;"><a><img id="slide2" src="/assets/web/login-mobile/pm_virtual_H5.jpg" tagid="nvs" tag="Sports/s=180"></a></div></div></div>
                <div id="scrollbarB4Top" class="swiper-scrollbar">
                    <div class="swiper-scrollbar-drag" style="transform: translate3d(0px, 0px, 0px); transition-duration: 0ms; width: 125px;"></div>
                </div>
            </div>
            <div id="productIcons" class="product-list">
                <ul>
                    <li id="pLId0">
                        <div id="pdtGroup0" class="product-group" tag="Sports/s=0">
                            <div id="pdtImg0" class="product-img sports" style="background-image: url(&quot;/assets/web/login-mobile/product_sports.jpg&quot;);"></div>
                            <div id="productId0" tag="s1" class="product-name" tagname="lbl_Sports">Sports</div>
                        </div>
                    </li>
                    <li id="pLId1">
                        <div id="pdtGroup1" class="product-group" tag="Sports/FastMarket/">
                            <div id="pdtImg1" class="product-img fastmarket" style="background-image: url(&quot;/assets/web/login-mobile/product_fastmarket.jpg&quot;);"></div>
                            <div id="productId1" tag="f1" class="product-name" tagname="lbl_fastmarkets">Fast Markets</div>
                        </div>
                    </li>
                    <li id="pLId2">
                        <div id="pdtGroup2" class="product-group" tag="Sports/s=2">
                            <div id="pdtImg2" class="product-img basketball" style="background-image: url(&quot;/assets/web/login-mobile/product_basketball.jpg&quot;);"></div>
                            <div id="productId2" tag="b1" class="product-name" tagname="lbl_2">Basketball</div>
                        </div>
                    </li>
                    <li id="pLId3">
                        <div id="pdtGroup3" class="product-group" tag="Sports/s=43">
                            <div id="pdtImg3" class="product-img esports" style="background-image: url(&quot;/assets/web/login-mobile/product_esports.jpg&quot;);"></div>
                            <div id="productId3" tag="e1" class="product-name" tagname="lbl_ESports">E-Sports</div>
                        </div>
                    </li>
                    <li id="pLId4">
                        <div id="pdtGroup4" class="product-group" tag="Sports/s=5">
                            <div id="pdtImg4" class="product-img tennis" style="background-image: url(&quot;/assets/web/login-mobile/product_tennis.jpg?.51172v=202004031055&quot;);"></div>
                            <div id="productId4" tag="t1" class="product-name" tagname="lbl_5">Tennis</div>
                        </div>
                    </li>
                    <li id="pLId5">
                        <div id="pdtGroup5" class="product-group" tag="Sports/s=9">
                            <div id="pdtImg5" class="product-img badminton" style="background-image: url(&quot;/assets/web/login-mobile/product_badminton.jpg?.58713v=202004031055&quot;);"></div>
                            <div id="productId5" tag="b2" class="product-name" tagname="lbl_9">Badminton</div>
                        </div>
                    </li>
                    <li id="pLId6">
                        <div id="pdtGroup6" class="product-group" tag="Sports/s=8">
                            <div id="pdtImg6" class="product-img baseball" style="background-image: url(&quot;/assets/web/login-mobile/product_baseball.jpg?.02287v=202004031055&quot;);"></div>
                            <div id="productId6" tag="b3" class="product-name" tagname="lbl_8">Baseball</div>
                        </div>
                    </li>
                    <li id="pLId7">
                        <div id="pdtGroup7" class="product-group" tag="Sports/s=50">
                            <div id="pdtImg7" class="product-img cricket" style="background-image: url(&quot;/assets/web/login-mobile/product_cricket.jpg?.03459v=202004031055&quot;);"></div>
                            <div id="productId7" tag="cricket" class="product-name" tagname="lbl_27">Cricket</div>
                        </div>
                    </li>
                    <li id="pLId8">
                        <div id="pdtGroup8" class="product-group" tag="Sports/s=6">
                            <div id="pdtImg8" class="product-img volleyball" style="background-image: url(&quot;/assets/web/login-mobile/product_volleyball.jpg&quot;);"></div>
                            <div id="productId8" tag="v3" class="product-name" tagname="lbl_6">Volleyball</div>
                        </div>
                    </li>






                </ul>
            </div>
            <ul class="list-group spacing">
                <div class="mobile-more">
                    <div id="sbHeader" class="mobile-more-title">What's More on Mobile?</div>
                    <div class="swiper-mask">
                        <div id="swiperContainer" class="swiper-container-more swiper-container-horizontal">
                            <div class="swiper-wrapper" style="transform: translate3d(-1236px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide0" src="/assets/web/login-mobile/mobile-more-1.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle1">Gesture Password</h2><p id="sbContent1">Safe and useful, your quickest way to have fun!</p></div><div class="right-area"><a id="sbBtn1" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide1" src="/assets/web/login-mobile/mobile-more-2.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle2">Just for you</h2><p id="sbContent2">Popular and recommended games just for you.</p></div><div class="right-area"><a id="sbBtn2" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide2" src="/assets/web/login-mobile/mobile-more-3.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle3">Adaptive Interface</h2><p id="sbContent3">User interface for any model of your phone !</p></div><div class="right-area"><a id="sbBtn3" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="3" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide3" src="/assets/web/login-mobile/mobile-more-4.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle4">Multi Bet Option</h2><p id="sbContent4">You can place many bets at once with multi bet option!</p></div><div class="right-area"><a id="sbBtn4" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide0" src="/assets/web/login-mobile/mobile-more-1.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle1">Gesture Password</h2><p id="sbContent1">Safe and useful, your quickest way to have fun!</p></div><div class="right-area"><a id="sbBtn1" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide1" src="/assets/web/login-mobile/mobile-more-2.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle2">Just for you</h2><p id="sbContent2">Popular and recommended games just for you.</p></div><div class="right-area"><a id="sbBtn2" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide" data-swiper-slide-index="2" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide2" src="/assets/web/login-mobile/mobile-more-3.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle3">Adaptive Interface</h2><p id="sbContent3">User interface for any model of your phone !</p></div><div class="right-area"><a id="sbBtn3" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide" data-swiper-slide-index="3" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide3" src="/assets/web/login-mobile/mobile-more-4.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle4">Multi Bet Option</h2><p id="sbContent4">You can place many bets at once with multi bet option!</p></div><div class="right-area"><a id="sbBtn4" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide0" src="/assets/web/login-mobile/mobile-more-1.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle1">Gesture Password</h2><p id="sbContent1">Safe and useful, your quickest way to have fun!</p></div><div class="right-area"><a id="sbBtn1" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide1" src="/assets/web/login-mobile/mobile-more-2.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle2">Just for you</h2><p id="sbContent2">Popular and recommended games just for you.</p></div><div class="right-area"><a id="sbBtn2" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide2" src="/assets/web/login-mobile/mobile-more-3.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle3">Adaptive Interface</h2><p id="sbContent3">User interface for any model of your phone !</p></div><div class="right-area"><a id="sbBtn3" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="margin-right: 10px;"><div class="mobile-more-image"><img id="bSlide3" src="/assets/web/login-mobile/mobile-more-4.jpg"></div><div class="bottom-block"><div class="left-area"><h2 id="sbTitle4">Multi Bet Option</h2><p id="sbContent4">You can place many bets at once with multi bet option!</p></div><div class="right-area"><a id="sbBtn4" class="btn btn-orange" onclick="ShowLoginDiv(true, &quot;#&quot;);">Try it</a></div></div></div></div><div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets" id="swiperContainer-pagination"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div></div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
    <div class="before-login-footer">
        <a id="desktop" href="{!! route('web.login', ['type' => 'desktop']) !!}">Desktop</a>
        <p id="footerP">© Copyright 2020. viva88.com. All Rights Reserved.</p>
    </div>
</div>
<div id="divLogin" class="login-block">
    {!! Form::open(array('route' => 'web.loginPost', 'id' => 'formInputx', 'class' => 'loginPanel', 'style' => 'display: block;')) !!}
        <div class="form-group">
            <div class="inputPanel">
                <div class="select-group form-control">
                    <i class="icon icon-arrow-bottom dark"></i>
                    <span class="value" id="Lang">English</span>
                    <select id="Langid" onchange="redovalidator();" onfocus="cleanUP();">
                        <option value="en-US" id="en-US">English</option>
                        <option value="zh-TW" id="zh-TW">繁體中文</option>
                        <option value="vi-VN" id="vi-VN">Tiếng Việt</option>
                    </select>
                </div>
                <input id="Username" name="username" class="form-control" type="text" placeholder="Username" value="" onkeyup="CheckGesture();">
                <input id="Password" name="password" class="form-control" type="password" placeholder="Password" onfocus="CheckGesture();">
                <div id="GestureToggle" class="btn btn-gesture-password" style="display:none;" onclick="CreateGesture();">
                    <i class="icon icon-gesture-password"></i>
                </div>
            </div>
            @if ($errors->has('password'))
            <script>
                setTimeout(() => {
                    ShowLoginDiv();
                }, 1000)
            </script>
            <div id="warringMessageFade" class="tooltip bottom fade in" role="tooltip">
                <div class="tooltip-arrow"></div>
                <div class="tooltip-inner" id="warringMessage">{{ $errors->first('password') }}</div>
            </div>
            @endif
            <div class="box">
                <div class="checkbox rememberMe">
                    <input id="rememberMe" type="checkbox" class="icon icon-checkbox" onclick="CheckGesture();">
                    <label for="rememberMe" id="lbl_rememberMe">Remember Me?</label>
                </div>
            </div>
            <button id="LoginBtn" type="submit" class="btn btn-primary btn-block btn-login" data-toggle="modal">Login</button>
        </div>
    {!! Form::close() !!}
</div>
<div id="divLoginBack" class="modal-backdrop backdrop-beforelogin" style="display: none;" onclick="ShowLoginDiv(false, &#39;&#39;);"></div>
<div id="loading" class="loading" style="display: none;"><i class="icon-loading"><span></span><span></span><span></span><span></span></i></div>

<div class="gotoTop"><i class="icon icon-gototop"></i></div><div id="_ud" style="position: absolute; width: 1px; height: 1px; overflow: hidden; display: block; z-index: -10; opacity: 0.1;"></div></body>
</html>
