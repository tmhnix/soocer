<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="todoApp">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>viva88</title>
    <link rel="shortcut icon" href="https://i.vixcdn.com/Login/viva88/common/Images/favicon.ico?v=201911140312"
        type="image/x-icon">
    <link href="/assets/web/css/v2/sports.css?v=5" rel="stylesheet" type="text/css">
    <link href="/assets/web/css/v2/mainv2.css?v=15" rel="stylesheet" type="text/css">
    <link href="/assets/web/css/v2/custom.css" rel="stylesheet" type="text/css">
    <script type="application/javascript" src="{{ elixir('js/web-all.js') }}"></script>
    <!--<script type="application/javascript" src="{{ elixir('js/templates.js') }}?v=3"></script>-->
    <script type="application/javascript" src="js/templates.js?v=19"></script>
    </script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <style>
        [lang="vn"] .header-expand .logo {
            background-image: url("assets/web/images/v2/logo.svg?v=2") !important;
        }
        .swiper-container {
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
        }
        
        .swiper-slide {
          text-align: center;
          font-size: 18px;
          background: #fff;
          height: calc((100% - 30px) / 2);
        
          /* Center slide text vertically */
          display: -webkit-box;
          display: -ms-flexbox;
          display: -webkit-flex;
          display: flex;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          -webkit-justify-content: center;
          justify-content: center;
          -webkit-box-align: center;
          -ms-flex-align: center;
          -webkit-align-items: center;
          align-items: center;
        }
        .promotionBoard .swiper-slide {
            display: flex;
            width: auto;
            height: auto;
        }
        .swiper-slide {
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
            height: 100%;
            position: relative;
            -webkit-transition-property: -webkit-transform;
            transition-property: -webkit-transform;
            -o-transition-property: transform;
            transition-property: transform;
            transition-property: transform, -webkit-transform;
        }
        [class*="c-event-card"] {
            --c-av-event-card-group-close: #545454;
            --c-av-event-card-group-close-hover: rgba(80,80,80,0.8);
            --c-av-event-card-group-close-hover-icon: rgba(255,255,255,0.85);
            --c-av-event-card-group-close-hover-shadow: rgba(255,255,255,0.4);
            --c-av-event-card-swiper-button: rgba(255,255,255,0.8);
            --c-av-event-card-swiper-button-shadow: #a3a3a3;
            --c-av-event-card-swiper-button-hover: #435f8b;
            --c-av-event-card-swiper-button-hover-icon: #fff;
            --c-av-event-card-match-team-name: #000;
            --c-av-event-card-hover: #5574a7;
            --c-av-event-card-bg: #fff;
            --c-av-event-card-border: rgba(0,0,0,0.15);
            --c-av-event-card-color-bg: #c6ced8;
            --c-av-event-card-match-score-color: #b53f39;
            --c-av-event-card-text-league-gradient-1: rgba(0,0,0,0.4);
            --c-av-event-card-text-league-gradient-2: rgba(255,255,255,0.2);
            --c-av-event-card-bets-bg: #5574a7;
            --c-av-event-card-bets-users-text: #435f8b;
            --c-av-event-card-bets-users-icon: #435f8b;
            --c-av-event-card-users-bg: rgba(255,255,255,0.3);
            --c-av-event-card-bets-text: rgba(0,0,0,0.8);
            --c-av-event-card-bets-icon: #000;
            --c-av-event-card-inplay-bg: #fff;
            --c-av-event-card-inplay-color-bg: #b53f39;
            --c-av-event-card-inplay-text-league-gradient-1: rgba(0,0,0,0.4);
            --c-av-event-card-inplay-text-league-gradient-2: rgba(255,255,255,0.2);
            --c-av-event-card-inplay-bets-users-text: #b53f39;
            --c-av-event-card-inplay-bets-users-icon: #b53f39;
            --c-av-event-card-inplay-bets-bg: #b53f39;
            --c-av-event-card-inplay-hover: #b53f39;
            --c-av-event-smallBtn-accent-hover: #b53f39;
            --c-av-event-card-team-name-red: #b53f39;
            --c-av-event-card-team-name-blue: #2556B3;
            --c-av-event-card-odds-hover-bg: #f5eeb8;
        }
        .c-event-card {
            background-color: var(--c-av-event-card-bg);
            border-color: var(--c-av-event-card-border);
        }
        .c-event-card {
            display: flex;
            flex-direction: column;
            --margin: .25rem;
            margin: 0 0.125rem;
            box-sizing: border-box;
            padding: 0.375rem 0.375rem 0.5rem;
            border: 1px solid;
            border-radius: 3px;
            position: relative;
            overflow: hidden;
            transition: all .3s ease;
        }
        .c-event-card:before {
            background-color: var(--c-av-event-card-color-bg);
        }
        .c-event-card:before {
            content: "";
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            left: 0;
            top: 0px;
            z-index: 0;
            opacity: 0.3;
            transform: skew(-31deg) translate(-64%, 0%);
        }
        .c-event-card__header {
            flex: 0 0 auto;
            cursor: pointer;
            z-index: 1;
        }
        .c-event-card * {
            box-sizing: border-box;
        }
        .c-event-card .c-text-league {
            display: flex;
            align-items: center;
        }
        [class*="c-text"] {
            --c-av-text-danger: #b53f39;
            --c-av-text-disabled: #545454;
            --c-av-text-mmr-positive: blue;
            --c-av-text-mmr-negative: red;
            --c-av-text-back: #ffffff;
            --c-av-text-back-bg: #78acff;
            --c-av-text-lay: #ffffff;
            --c-av-text-lay-bg: #d675c3;
            --c-av-text-yes: #ffffff;
            --c-av-text-yes-bg: #78acff;
            --c-av-text-no: #ffffff;
            --c-av-text-no-bg: #d675c3;
            --c-av-text-favor: #b53f39;
            --c-av-text-blue: #2556B3;
            --c-av-text-red: #b53f39;
            --c-av-text-minus: #b53f39;
            --c-av-text-forecast-win: #5dad00;
            --c-av-text-forecast-lose: red;
            --c-av-text-search-result: inherit;
            --c-av-text-search-result-bg: #feec6e;
            --c-av-text-select-league-search-result: inherit;
            --c-av-text-select-league-search-result-bg: #feec6e;
        }
        
        [class^="c-text-"] {
            word-break: break-word;
            font-family: var(--c-av-body-font-family);
        }
        .c-event-card .c-text-league:before {
            background: linear-gradient(to left, var(--c-av-event-card-text-league-gradient-1) 86.46%, var(--c-av-event-card-text-league-gradient-2) 100%);
        }
        .c-event-card .c-text-league:before {
            content: "";
            flex: 1;
            display: block;
            height: 1px;
        }
        .c-event-card .c-text-league .c-text {
            flex: 0 0 auto;
            display: -webkit-box;
            max-width: 10rem;
            padding: 0 0.375rem;
            word-break: break-all;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            text-overflow: ellipsis;
            overflow: hidden;
            z-index: 1;
        }
        .c-event-card .c-text-league:after {
            background: linear-gradient(to left, var(--c-av-event-card-text-league-gradient-2) 0%, var(--c-av-event-card-text-league-gradient-1) 13.54%);
        }
        .c-event-card .c-text-league:after {
            content: "";
            flex: 1;
            display: block;
            height: 1px;
        }
        .c-event-card__match {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            cursor: pointer;
        }
        .c-event-card__match [class*="c-event-card__team"] {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 37%;
            min-height: 2.25rem;
        }
        .c-event-card__match .c-team-name {
            color: var(--c-av-event-card-match-team-name);
        }
        .c-event-card__match .c-team-name {
            flex: 1;
            display: -webkit-box;
            padding: 0 0.125rem;
            text-align: center;
            text-overflow: ellipsis;
            word-break: break-word;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .c-team-name {
            word-break: break-word;
        }
        [class*="c-team"] {
            --c-av-team-text: #01122b;
            --c-av-team-blue: #2556B3;
            --c-av-team-red: #b53f39;
            --c-av-team-favor: #b53f39;
        }
        .c-event-card__match .c-team-flag {
            flex: 0 0 auto;
            width: 22px;
            height: 22px;
        }
        .c-event-card__match .c-team-flag:empty {
            display: none;
        }
        .c-event-card__info {
            flex: 0 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 3rem;
            max-width: 26%;
            padding: 0 0.125rem;
            text-align: center;
        }
        .c-match-time {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: column;
        }
        .c-event-card .c-match-time {
            min-height: 1.125rem;
        }
        .c-event-card .c-match-time {
            display: flex;
            flex-direction: column;
        }
        font[color="red"] {
            color: var(--c-av-font-red);
        }
        .c-event-card__match [class*="c-event-card__team"] {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 37%;
            min-height: 2.25rem;
        }
        .c-event-card-bets:before {
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 3px;
            position: absolute;
            left: 0;
            opacity: 0.3;
        }
        .c-event-card-bets:before {
            background-color: #5574a7;
        }
        .c-event-card-bets .c-btn--cashout {
            min-height: auto;
            border-radius: 50%;
            left: 0.25rem;
            right: auto;
        }
        .c-event-card-bets .c-btn {
            flex: 0 0 auto;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 0;
        }
        .c-btn {
            --c-av-bettype-btn-help-text: #fff;
        }
        .c-btn {
            --c-av-btn-default-text: #545454;
            --c-av-btn-default-bg: #cdcdcd;
            --c-av-btn-default-hover-bg: silver;
            --c-av-btn-default-img: none;
            --c-av-btn-default-hover-img: none;
            --c-av-btn-default-hover-filter: none;
            --c-av-btn-default-border-color: #cdcdcd;
            --c-av-btn-primary-text: #fff;
            --c-av-btn-primary-bg: transparent;
            --c-av-btn-primary-hover-bg: transparent;
            --c-av-btn-primary-img: linear-gradient(to bottom, #7591c1 0%, #5574a7 100%);
            --c-av-btn-primary-hover-img: linear-gradient(to bottom, #879fc9 0%, #6582b1 100%);
            --c-av-btn-primary-hover-filter: none;
            --c-av-btn-primary-border-color: transparent;
            --c-av-btn-secondary-text: #fff;
            --c-av-btn-secondary-bg: transparent;
            --c-av-btn-secondary-hover-bg: #ff942b;
            --c-av-btn-secondary-img: linear-gradient(to bottom, #ff942b 0%, #f77a00 100%);
            --c-av-btn-secondary-hover-img: none;
            --c-av-btn-secondary-hover-filter: none;
            --c-av-btn-secondary-border-color: transparent;
            --c-av-btn-bet-text: #fff;
            --c-av-btn-bet-bg: transparent;
            --c-av-btn-bet-hover-bg: #ff942b;
            --c-av-btn-bet-img: linear-gradient(to bottom, #ff942b 0%, #f77a00 100%);
            --c-av-btn-bet-hover-img: var(--c-av-btn-bet-img);
            --c-av-btn-bet-hover-filter: brightness(110%);
            --c-av-btn-bet-border-color: transparent;
            --c-av-btn-add-parlay-text: #fff;
            --c-av-btn-add-parlay-bg: transparent;
            --c-av-btn-add-parlay-hover-bg: transparent;
            --c-av-btn-add-parlay-img: linear-gradient(to bottom, #7591c1 0%, #5574a7 100%);
            --c-av-btn-add-parlay-hover-img: var(--c-av-btn-add-parlay-img);
            --c-av-btn-add-parlay-hover-filter: brightness(110%);
            --c-av-btn-add-parlay-border-color: transparent;
            --c-av-btn-disable-text: #a3a3a3;
            --c-av-btn-disable-bg: #cdcdcd;
            --c-av-btn-messange-border-color: transparent;
            --c-av-btn-focus-shadow-outline: rgba(0,0,0,0.25);
            --c-av-btn-focus-shadow-inline: #fff;
            --c-av-btn-clear-text: #545454;
            --c-av-btn-clear-hover-text: #fff;
            --c-av-btn-clear-hover-bg: #7c7c7c;
            --c-av-btn-fastmarket-text: #fff;
            --c-av-btn-fastmarket-bg: #b53f39;
            --c-av-btn-fastmarket-border: transparent;
            --c-av-btn-fastmarket-hover-text: #fff;
            --c-av-btn-fastmarket-hover-bg: #ca5d57;
            --c-av-btn-time-machine-text: #fff;
            --c-av-btn-time-machine-bg: transparent;
            --c-av-btn-time-machine-bg-img: linear-gradient(to bottom, #7591c1 0%, #5574a7 100%);
            --c-av-btn-time-machine-border: transparent;
            --c-av-btn-time-machine-hover-text: #fff;
            --c-av-btn-time-machine-hover-bg: transparent;
            --c-av-btn-time-machine-hover-bg-img: linear-gradient(to bottom, #879fc9 0%, #6582b1 100%);
            --c-av-btn-music-tv-icon-video-text: #fff;
            --c-av-btn-music-tv-icon-video-bg: #b53f39;
            --c-av-btn-more-lines-text: #545454;
        }
        .c-icon::before {
            line-height: 18px;
            font-size: 1.125rem;
        }
        .c-icon:not(.c-gc-icon)::before {
            font-family: "iconfont-classic";
        }
        .c-btn--cashout .c-icon--cashout::before {
            line-height: 1;
            font-size: 1rem;
            border-radius: 100%;
        }
        .c-event-card-bets .c-text {
            flex: 0 0 auto;
            max-width: calc( 100% - 40%);
            margin: 0 auto;
            font-weight: 500;
            text-align: center;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            z-index: 1;
        }
        .c-event-card-bets .c-text {
            color: var(--c-av-event-card-bets-text);
        }
        .c-event-card-bets__header .c-btn {
            padding: 0;
        }
        .c-event-card-bets .c-btn .c-icon:not(.c-icon--cashout) {
            font-weight: 600;
        }
        .c-event-card-bets .c-btn .c-icon:not(.c-icon--cashout) {
            color: var(--c-av-event-card-bets-icon);
        }
        .c-odds-button {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
            min-height: 1.375rem;
            position: relative;
            transition: .2s;
        }
        .c-event-card-bets__main .c-odds-button {
            flex: 1;
            min-width: 0;
        }
        .c-odds-button>.c-text-goal {
            margin-left: auto;
        }
        .c-event-card .c-odds-button>.c-text-goal {
            margin-left: 0;
        }
        .c-odds {
            flex: 0 0 auto;
            display: inline-flex;
            align-items: center;
            color: #01122b;
            font-weight: 700;
            position: relative;
        }
        [class^=c-text-goal]+.c-odds {
            justify-content: flex-end;
            margin-left: 0.25rem;
            min-width: 2.5rem;
        }
        .c-odds-button>.c-odds {
            background-color: rgba(255,255,255,0.4);
        }
        .c-odds-button>.c-odds {
            justify-content: flex-end;
            padding: 0 0.625rem 0 0.125rem;
            min-width: 3.25rem;
            min-height: inherit;
            background-color: rgba(255,255,255,0.4);
            border-radius: 3px;
            cursor: pointer;
        }
        .c-event-card-bets__main .c-odds-button .c-odds {
            justify-content: flex-end;
            padding: 0px;
            margin-left: auto;
            min-height: auto;
            background-color: transparent;
        }
        .c-event-card .c-odds-button>.c-odds {
            background-color: transparent !important;
            box-shadow: none !important;
        }
        .c-event-card-bets__main .c-odds-button {
            flex: 1;
            min-width: 0;
        }
        .c-odds-button+.c-odds-button {
            margin-top: 0.125rem;
        }
        .c-event-card .c-odds-button {
            display: flex;
            padding: 0 2px 0 4px;
            border-color: #dedede;
            border-width: 1px;
            border-style: solid;
            border-radius: 5px;
            cursor: pointer;
            background-color: #fff;
            padding: 0.25rem 0.75rem;
            border-width: 0;
        }
        .c-event-card-bets__main {
            display: flex;
        }
        .c-event-card-bets__main .c-odds-button+.c-odds-button {
            margin-top: 0px;
            margin-left: 0.275rem;
        }
        .c-event-card-bets__main .c-odds-button .c-odds {
            justify-content: flex-end;
            padding: 0px;
            margin-left: auto;
            min-height: auto;
            background-color: transparent;
        }
        .c-custom {
            font-size: 0.875rem;
        }
        .odd-bg-custom {
            background-color: #ffaf96 !important;
        }
        /*.swiper-button-prev {*/
        /*    background-color: rgba(255,255,255,0.8);*/
        /*    box-shadow: 0 0 0.2rem 0 #a3a3a3;*/
        /*}*/
        .swiper-button-prev {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M0%2C22L22%2C0l2.1%2C2.1L4.2%2C22l19.9%2C19.9L22%2C44L0%2C22L0%2C22L0%2C22z'%20fill%3D'%234c71ae'%2F%3E%3C%2Fsvg%3E") !important;
  width: 25px;
    height: 20px;
    z-index: 999999;
    left: 5px;
}

.swiper-button-next {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%2027%2044'%3E%3Cpath%20d%3D'M27%2C22L27%2C22L5%2C44l-2.1-2.1L22.8%2C22L2.9%2C2.1L5%2C0L27%2C22L27%2C22z'%20fill%3D'%234c71ae'%2F%3E%3C%2Fsvg%3E") !important;
  width: 25px;
    height: 20px;
    z-index: 999999;
    right: 5px;
}
.swiper-button-prev:after, .swiper-button-next:after {
    content: "";
}
                
    </style>
    
</head>

<body id="element" lang="vn">
    @include('socket')
    @include('web.v2.layout.header')
    <script type="text/javascript">
        setInterval(function() {
            var jqxhr = $.ajax("/alert")
                .done(function(data) {
                    $('#shownhe').hide();
                    if (data) {
                        $('#shownhe').show();
                        $('#shownhe').html(data);
                    }
                })
        }, 10000);
    </script>
    <h1 id="shownhe"
        style="font-size: 6em; color: red;position: absolute;z-index: 11111;background: white;height: 100%;"></h1>
    <div class="container">
        <div id="change_version" class="msg highlight active" style="display: none;">
            <div class="icon-switch"></div>
            <div class="msgText">
                <strong>Chuyển đổi ngay</strong>
                <div class="ani-loading"><span></span><span></span><span></span></div>
                <p>Vui lòng chờ trong giây lát</p>
            </div>
        </div>
        <div class="mainLayout">
            @include('web.v2.layout.left')
            <div id="mainArea" class="mainArea">
                <div ng-view></div>           
            </div>
            <script type="text/javascript">
                var item = "{{$req->ref}}"
                if (item == 'number_game') {
                    location = '/bingo';
                }
            </script>
            @include('web.v2.layout.right')
        </div>
    </div>
    @include('web.v2.layout.popup')


    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        $(function () {
            setTimeout(() => {
              slider();
              $('.swiper').show();
              
            }, 2000);
        });
        
        function slider()
        {
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                slidesPerColumn: 2,
                spaceBetween: 10,
                navigation: {
                  nextEl: ".swiper-button-next",
                  prevEl: ".swiper-button-prev",
                },
                loop: true,
                autoplay: {
                  delay: 2000,
                  disableOnInteraction: true,
                }
              });
            }
    </script>

</body>

</html>
