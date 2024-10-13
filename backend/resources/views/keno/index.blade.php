<html><head>
<title>Keno</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="shortcut icon" type="image/png" href="public/image/favicon.png">
 <script type="text/javascript">
     function GetURLParameter(sParam) {
         var sPageURL = window.location.search.substring(1);
         var sURLVariables = sPageURL.split('&');
         for (var i = 0; i < sURLVariables.length; i++) {
             var sParameterName = sURLVariables[i].split('=');
             if (sParameterName[0] == sParam) {
                 return sParameterName[1];
             }
         }
     }

     var ct = GetURLParameter('ct');
     if (ct == 0) {
         document.write('<link rel="stylesheet" type="text/css" href="https://keno.garcade.net/keno/assets/css/app-12bet.css?v=1" />');
     }
     else if (ct == 1) {
         document.write('<link rel="stylesheet" media="screen" type="text/css" href="https://keno.garcade.net/keno/assets/css/app-lic.css?v=1" />');
     }
     else {
         document.write('<link rel="stylesheet" media="screen" type="text/css" href="https://keno.garcade.net/keno/assets/css/app-mbc.css?v=1" />');
     }



</script><link rel="stylesheet" media="screen" type="text/css" href="https://keno.garcade.net/keno/assets/css/app-mbc.css?v=1">
</head>
<body oncontextmenu="return false;">
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="icon-clock" viewBox="0 0 512 512">
<path d="m470 125l-98-82-28 33 98 82z m-303-50l-28-33-97 83 28 33z m100 98l-32 0 0 127 101 61 16-27-85-50z m-11-85c-107 0-193 86-193 191 0 105 86 191 193 191 106 0 193-86 193-191 0-105-87-191-193-191z m0 340c-82 0-150-67-150-149 0-82 68-149 150-149 82 0 150 67 150 149 0 83-68 149-150 149z"></path>
</symbol>
<symbol id="icon-close" viewBox="0 0 512 512">
<path d="m438 387l-131-131 131-131c14-14 14-36 0-50-15-15-37-15-51 0l-131 130-131-130c-14-15-36-15-50 0-15 14-15 36 0 50l130 131-130 131c-15 14-15 36 0 51 14 14 36 14 50 0l131-131 131 131c14 14 36 14 51 0 14-15 14-37 0-51z"></path>
</symbol>
<symbol id="icon-link" viewBox="0 0 380 380">
  <path d="M285.331,269.982c-3.436-2.309-8.097-1.394-10.408,2.043c-3.908,5.817-8.21,11.278-12.842,16.378
    c-12.32-9.994-26.125-18.052-40.946-24.014c0.592-2.608,1.164-5.25,1.695-7.956c0.798-4.064-1.85-8.007-5.914-8.805
    c-4.065-0.797-8.007,1.851-8.805,5.914c-0.389,1.982-0.803,3.928-1.228,5.856c-15.879-4.763-32.68-7.246-49.901-7.246
    c-17.166,0-33.988,2.498-49.909,7.285c-3.997-18.119-6.327-38.127-6.776-58.993h83.866c4.143,0,7.5-3.357,7.5-7.5
    s-3.357-7.5-7.5-7.5h-83.866c0.483-22.475,3.147-43.957,7.731-63.151c16.669,5.309,34.403,8.076,52.604,8.076
    c15.68,0,31.071-2.088,45.753-6.095c0.6,2.611,1.173,5.267,1.707,7.98c0.801,4.063,4.737,6.707,8.808,5.911
    c4.063-0.8,6.71-4.743,5.911-8.808c-0.651-3.306-1.352-6.531-2.092-9.69c14.792-5.502,28.652-13.048,41.09-22.476
    c4.598,5.032,8.873,10.417,12.763,16.152c2.326,3.429,6.99,4.319,10.417,1.997c3.428-2.325,4.322-6.989,1.997-10.417
    c-29.292-43.183-77.892-68.963-130.004-68.963C70.422,35.961,0,106.384,0,192.944s70.422,156.983,156.982,156.983
    c52.392,0,101.136-25.995,130.392-69.538C289.684,276.951,288.77,272.292,285.331,269.982z M251.348,299.034
    c-16.899,15.04-37.132,25.816-59.03,31.433c10.099-12.161,18.687-29.665,25.033-51.42
    C229.595,284.16,241.032,290.864,251.348,299.034z M156.982,267.152c15.975,0,31.54,2.334,46.215,6.805
    c-10.718,37.182-28.291,60.97-46.215,60.97c-13.778,0-27.831-14.305-38.554-39.245c-2.885-6.709-5.447-13.978-7.677-21.693
    C125.468,269.496,141.057,267.152,156.982,267.152z M104.648,301.608c4.999,11.626,10.72,21.301,16.985,28.865
    c-22.208-5.711-42.326-16.681-58.956-31.488c10.29-8.127,21.725-14.8,33.95-19.903C98.968,287.065,101.642,294.614,104.648,301.608
    z M160.633,115.37c-16.859,0-33.263-2.595-48.643-7.563c1.929-6.198,4.071-12.094,6.439-17.601
    c10.723-24.94,24.775-39.245,38.554-39.245c17.571,0,34.812,22.872,45.581,58.812C189.124,113.453,175.017,115.37,160.633,115.37z
     M97.942,102.479c-11.293-4.944-21.872-11.254-31.48-18.836c15.863-13.16,34.624-22.942,55.172-28.227
    c-6.266,7.564-11.987,17.239-16.985,28.865C102.191,89.998,99.958,96.089,97.942,102.479z M192.322,55.431
    c21.733,5.581,41.837,16.244,58.664,31.112c-10.427,7.651-21.92,13.877-34.147,18.558
    C210.548,84.156,202.149,67.266,192.322,55.431z M55.318,93.941c11.652,9.487,24.635,17.247,38.558,23.127
    c-5.117,20.793-8.079,44.079-8.582,68.377H15.198C17.055,149.945,32.016,117.863,55.318,93.941z M15.198,200.444h70.096
    c0.468,22.595,3.055,44.325,7.529,63.982c-14.802,5.954-28.595,14.001-40.883,23.947C30.572,264.874,16.964,234.201,15.198,200.444
    z"></path>
  <path d="M274.668,150.122c-24.942,0-45.235,20.293-45.235,45.235c0,4.143,3.357,7.5,7.5,7.5s7.5-3.357,7.5-7.5
    c0-16.672,13.563-30.235,30.235-30.235c4.143,0,7.5-3.357,7.5-7.5S278.811,150.122,274.668,150.122z"></path>
  <path d="M383.692,274.765l-33.284-33.284c-2.93-2.928-7.678-2.928-10.607,0c-2.929,2.93-2.929,7.678,0,10.607l27.981,27.98
    l-8.403,8.403l-41.421-41.422c1.51-1.269,2.981-2.598,4.393-4.01c12.736-12.736,19.75-29.671,19.75-47.683
    s-7.014-34.946-19.75-47.683s-29.671-19.75-47.683-19.75s-34.946,7.014-47.683,19.75s-19.75,29.671-19.75,47.683
    s7.014,34.946,19.75,47.683s29.671,19.75,47.683,19.75c10.788,0,21.182-2.534,30.527-7.289l48.881,48.881
    c1.465,1.464,3.385,2.196,5.304,2.196s3.839-0.732,5.304-2.196l19.01-19.01C386.621,282.443,386.621,277.694,383.692,274.765z
     M237.593,232.433c-9.903-9.903-15.357-23.07-15.357-37.075s5.454-27.172,15.357-37.075s23.07-15.357,37.075-15.357
    s27.172,5.454,37.075,15.357s15.357,23.07,15.357,37.075s-5.454,27.172-15.357,37.075s-23.07,15.357-37.075,15.357
    S247.496,242.336,237.593,232.433z"></path>
</symbol>
</svg>
<div id="app" class="app"><div class="userbox"><div class="announcements-list"><div><a><svg class="icon-close"><use xlink:href="#icon-close"></use></svg></a> <h1>Thông báo</h1> <ul><li>
                Welcome to Keno, please have fun &amp; enjoy the game. Thank you.
            </li><li>
                How to Play Index Big Small: Forecast Result is raising or falling from mid point, select Index Big (Raising) Index Small (Falling) insert "Range" and "Bets", we suggest to set higher on Range and lower on Bets to maximize your profits in game. Thanks!
            </li><li>
                We're proud to bring a brand-new experience to you in Keno game. With additional Six (6) New Products [Mini Keno, Mini Keno 2, Four Seasons Keno] &amp; One (1) New Gametype [Index Big Small], more fun offered in our latest version. Please Enjoy!!
            </li></ul></div></div> <div class="marquee"><div id="marquee" class="active"><span><i>1</i>
              Welcome to Keno, please have fun &amp; enjoy the game. Thank you.
          </span><span><i>2</i>
              How to Play Index Big Small: Forecast Result is raising or falling from mid point, select Index Big (Raising) Index Small (Falling) insert "Range" and "Bets", we suggest to set higher on Range and lower on Bets to maximize your profits in game. Thanks!
          </span><span><i>3</i>
              We're proud to bring a brand-new experience to you in Keno game. With additional Six (6) New Products [Mini Keno, Mini Keno 2, Four Seasons Keno] &amp; One (1) New Gametype [Index Big Small], more fun offered in our latest version. Please Enjoy!!
          </span></div> <div id="marquee-mobile"><label>Thông báo:</label> <span>3</span></div></div> <div class="user-data"><label>Tài Khoản:</label> <span>ED066800003</span>
        &nbsp;
        <label class="hide-for-small">Số tiền có thể cược:</label> <span class="fund">
          UT 19
        </span></div></div> <div class="menu"><span class="logo"></span> <div class="links"><a>Bảng Cược</a> <a>Sao Kê</a> <a>Kết quả</a> <a>Quy định</a> <select><option value="0">English</option><option value="1">简体中文</option><option value="2">繁體中文</option><option value="3">ภาษาไทย</option><option value="4">Tiếng Việt</option><option value="5">Indonesian</option><option value="6">日本語</option><option value="7">한국어</option></select> <span>9:25:03 AM Mar 28, 2019 GMT +8</span></div><br> <div class="filters"><div class="filters-mode"><span class="filter-type">Chế độ:</span> <div class="filter-options"><label><input type="radio" value="standard"><em></em>Tiêu chuẩn</label> <label><input type="radio" value="simple"><em></em>Gọn nhẹ</label></div></div> <div class="filters-filter"><span class="filter-type">Lọc:</span> <div class="filter-options"><label><input type="radio" value="all"><em></em>Tất Cả</label> <label><input type="radio" value="open"><em></em>Đang xử lý</label> <label><input type="radio" value="rng"><em></em>RNG Keno</label> <label><input type="radio" value="mini-keno"><em></em>Mini Keno</label></div></div></div></div> <div id="products" class="products grid-x"><div id="gmbox-15" class="cell medium-6 large-4 active"><div class="product open-result standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-15.jpg&quot;);"></span> <span class="name">Max Keno</span> <a href="http://keno.garcade.net/kenoGarcade/max_keno.aspx" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Số rút ra 1903272125</div> <span class="product-status open-result"><div class="counter open-result"><span class="status-text">Công bố Kết quả</span> 0 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers active"><span class="number"><span></span></span><span class="number active"><span>5</span></span><span class="number active"><span>6</span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number active"><span>33</span></span><span class="number active"><span>41</span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number active"><span>55</span></span><span class="number active"><span>58</span></span><span class="number active"><span>62</span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number"><span></span></span> <span class="sum">260</span></div> <div class="thumbnail active"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-3"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-5"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">9.00</span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">2.30</span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">4.30</span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">2.30</span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">3.70</span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd winner"><span class="odd">9.20</span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd">2.40</span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><div><div class="roadmap-types grid-x small-up-6"><div class="cell"><span title="Tài/Xỉu" class="selected">T/X</span></div><div class="cell"><span title="Lẻ/Chẵn" class="">L/C</span></div><div class="cell"><span title="Chỉ số Tài/Xỉu" class="">Chỉ số</span></div><div class="cell"><span title="Rồng/Hổ" class="">R/H</span></div><div class="cell"><span title="Trên/Dưới" class="">T/D</span></div><div class="cell"><span title="Ngũ hành" class="">5E</span></div></div> <!----> <div class="stats"><span>
          Tài
          <span>51%</span></span><span>
          Xỉu
          <span>49%</span></span></div> <div class="grid-roadmap"><div class="rol"><span class="kb"><span title="Số rút ra 1903272050
3/28/2019 8:50:00 AM
Sum: 944" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1903272051
3/28/2019 8:51:00 AM
Sum: 808" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1903272052
3/28/2019 8:52:00 AM
Sum: 812" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1903272053
3/28/2019 8:53:00 AM
Sum: 616" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1903272054
3/28/2019 8:54:00 AM
Sum: 701" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1903272055
3/28/2019 8:55:00 AM
Sum: 754" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1903272056
3/28/2019 8:56:00 AM
Sum: 784" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1903272057
3/28/2019 8:57:00 AM
Sum: 779" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1903272058
3/28/2019 8:58:00 AM
Sum: 851" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1903272059
3/28/2019 8:59:00 AM
Sum: 864" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1903272100
3/28/2019 9:00:00 AM
Sum: 867" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1903272101
3/28/2019 9:01:00 AM
Sum: 757" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1903272102
3/28/2019 9:02:00 AM
Sum: 1039" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1903272103
3/28/2019 9:03:00 AM
Sum: 856" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1903272104
3/28/2019 9:04:00 AM
Sum: 902" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1903272105
3/28/2019 9:05:00 AM
Sum: 754" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1903272106
3/28/2019 9:06:00 AM
Sum: 834" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1903272107
3/28/2019 9:07:00 AM
Sum: 877" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1903272108
3/28/2019 9:08:00 AM
Sum: 750" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1903272109
3/28/2019 9:09:00 AM
Sum: 796" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1903272110
3/28/2019 9:10:00 AM
Sum: 760" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1903272111
3/28/2019 9:11:00 AM
Sum: 926" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1903272112
3/28/2019 9:12:00 AM
Sum: 755" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1903272113
3/28/2019 9:13:00 AM
Sum: 766" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1903272114
3/28/2019 9:14:00 AM
Sum: 935" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1903272115
3/28/2019 9:15:00 AM
Sum: 830" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1903272116
3/28/2019 9:16:00 AM
Sum: 930" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1903272117
3/28/2019 9:17:00 AM
Sum: 811" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1903272118
3/28/2019 9:18:00 AM
Sum: 732" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1903272119
3/28/2019 9:19:00 AM
Sum: 830" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1903272120
3/28/2019 9:20:00 AM
Sum: 810" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1903272121
3/28/2019 9:21:00 AM
Sum: 832" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1903272122
3/28/2019 9:22:00 AM
Sum: 821" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1903272123
3/28/2019 9:23:00 AM
Sum: 751" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1903272124
3/28/2019 9:24:00 AM
Sum: 792" class="type ks">X</span> <!----></span></div></div></div></div></div></div><div id="gmbox-16" class="cell medium-6 large-4 active"><div class="product start-betting standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-16.jpg&quot;);"></span> <span class="name">Max Keno 2</span> <a href="http://keno.garcade.net/kenoGarcade/max2_keno.aspx" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Số rút ra 1475395</div> <span class="product-status start-betting"><div class="counter start-betting active"><span class="status-text">Bắt đầu cá cược</span> 26 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"><span class="number active"><span>2</span></span><span class="number active"><span>9</span></span><span class="number active"><span>11</span></span><span class="number active"><span>18</span></span><span class="number active"><span>22</span></span><span class="number active"><span>23</span></span><span class="number active"><span>27</span></span><span class="number active"><span>28</span></span><span class="number active"><span>31</span></span><span class="number active"><span>35</span></span><span class="number active"><span>41</span></span><span class="number active"><span>43</span></span><span class="number active"><span>50</span></span><span class="number active"><span>57</span></span><span class="number active"><span>62</span></span><span class="number active"><span>71</span></span><span class="number active"><span>73</span></span><span class="number active"><span>76</span></span><span class="number active"><span>79</span></span><span class="number active"><span>80</span></span> <span class="sum">838</span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-2"><div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">9.00</span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd">2.30</span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">4.30</span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">2.30</span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">3.70</span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd winner"><span class="odd">2.40</span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><div><div class="roadmap-types grid-x small-up-6"><div class="cell"><span title="Tài/Xỉu" class="selected">T/X</span></div><div class="cell"><span title="Lẻ/Chẵn" class="">L/C</span></div><div class="cell"><span title="Chỉ số Tài/Xỉu" class="">Chỉ số</span></div><div class="cell"><span title="Rồng/Hổ" class="">R/H</span></div><div class="cell"><span title="Trên/Dưới" class="">T/D</span></div><div class="cell"><span title="Ngũ hành" class="">5E</span></div></div> <!----> <div class="stats"><span>
          Tài
          <span>50%</span></span><span>
          Xỉu
          <span>50%</span></span></div> <div class="grid-roadmap"><div class="rol"><span class="ks"><span title="Số rút ra 1475355
3/28/2019 8:45:30 AM
Sum: 778" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1475356
3/28/2019 8:46:30 AM
Sum: 913" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475357
3/28/2019 8:47:30 AM
Sum: 932" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1475358
3/28/2019 8:48:30 AM
Sum: 781" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1475359
3/28/2019 8:49:30 AM
Sum: 829" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1475360
3/28/2019 8:50:30 AM
Sum: 790" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1475361
3/28/2019 8:51:30 AM
Sum: 782" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1475362
3/28/2019 8:52:30 AM
Sum: 841" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475363
3/28/2019 8:53:30 AM
Sum: 887" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475364
3/28/2019 8:54:30 AM
Sum: 1102" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475365
3/28/2019 8:55:30 AM
Sum: 836" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1475366
3/28/2019 8:56:30 AM
Sum: 782" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1475367
3/28/2019 8:57:30 AM
Sum: 796" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1475368
3/28/2019 8:58:30 AM
Sum: 1065" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475369
3/28/2019 8:59:30 AM
Sum: 838" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475370
3/28/2019 9:00:30 AM
Sum: 961" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475371
3/28/2019 9:01:30 AM
Sum: 873" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475372
3/28/2019 9:02:30 AM
Sum: 843" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475373
3/28/2019 9:03:30 AM
Sum: 814" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1475374
3/28/2019 9:04:30 AM
Sum: 772" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1475375
3/28/2019 9:05:30 AM
Sum: 845" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475376
3/28/2019 9:06:30 AM
Sum: 825" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1475377
3/28/2019 9:07:30 AM
Sum: 726" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1475378
3/28/2019 9:08:30 AM
Sum: 698" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1475379
3/28/2019 9:09:30 AM
Sum: 770" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1475380
3/28/2019 9:10:30 AM
Sum: 720" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1475381
3/28/2019 9:11:30 AM
Sum: 755" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1475382
3/28/2019 9:12:30 AM
Sum: 768" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1475383
3/28/2019 9:13:30 AM
Sum: 868" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1475384
3/28/2019 9:14:30 AM
Sum: 794" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1475385
3/28/2019 9:15:30 AM
Sum: 1021" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475386
3/28/2019 9:16:30 AM
Sum: 818" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475387
3/28/2019 9:17:30 AM
Sum: 854" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1475388
3/28/2019 9:18:30 AM
Sum: 690" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1475389
3/28/2019 9:19:30 AM
Sum: 746" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 1475390
3/28/2019 9:20:30 AM
Sum: 686" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1475391
3/28/2019 9:21:30 AM
Sum: 891" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 1475392
3/28/2019 9:22:30 AM
Sum: 895" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 1475393
3/28/2019 9:23:30 AM
Sum: 764" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 1475394
3/28/2019 9:24:30 AM
Sum: 838" class="type kb">T</span> <!----></span></div></div></div></div></div></div><div id="gmbox-17" class="cell medium-6 large-4 active"><div class="product start-betting standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-17.jpg&quot;);"></span> <span class="name">Mini Keno</span> <a href="http://keno.garcade.net/kenoGarcade/mini_keno.aspx" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Số rút ra 563635</div> <span class="product-status start-betting"><div class="counter start-betting active"><span class="status-text">Bắt đầu cá cược</span> 11 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"><span class="number active"><span>5</span></span><span class="number active"><span>7</span></span><span class="number active"><span>9</span></span><span class="number active"><span>14</span></span><span class="number active"><span>20</span></span><span class="number active"><span>22</span></span><span class="number active"><span>23</span></span><span class="number active"><span>27</span></span><span class="number active"><span>31</span></span><span class="number active"><span>38</span></span> <span class="sum">196</span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-3"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="206~355" class="odd"><span class="odd">1.97</span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="55~205" class="odd winner"><span class="odd">1.93</span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="206~355" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="55~204" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">2.00</span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">8.00</span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">1.90</span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd">2.60</span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">3.30</span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">2.60</span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">3.70</span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="55~163" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="164~187" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="188~222" class="odd winner"><span class="odd">2.40</span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="223~246" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="247~355" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><div><div class="roadmap-types grid-x small-up-6"><div class="cell"><span title="Tài/Xỉu" class="selected">T/X</span></div><div class="cell"><span title="Lẻ/Chẵn" class="">L/C</span></div><div class="cell"><span title="Chỉ số Tài/Xỉu" class="">Chỉ số</span></div><div class="cell"><span title="Rồng/Hổ" class="">R/H</span></div><div class="cell"><span title="Trên/Dưới" class="">T/D</span></div><div class="cell"><span title="Ngũ hành" class="">5E</span></div></div> <!----> <div class="stats"><span>
          Tài
          <span>51%</span></span><span>
          Xỉu
          <span>49%</span></span></div> <div class="grid-roadmap"><div class="rol"><span class="kb"><span title="Số rút ra 563604
3/28/2019 8:54:15 AM
Sum: 208" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 563605
3/28/2019 8:55:15 AM
Sum: 228" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 563606
3/28/2019 8:56:15 AM
Sum: 199" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 563607
3/28/2019 8:57:15 AM
Sum: 211" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 563608
3/28/2019 8:58:15 AM
Sum: 179" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 563609
3/28/2019 8:59:15 AM
Sum: 204" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 563610
3/28/2019 9:00:15 AM
Sum: 158" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 563611
3/28/2019 9:01:15 AM
Sum: 212" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 563612
3/28/2019 9:02:15 AM
Sum: 153" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 563613
3/28/2019 9:03:15 AM
Sum: 197" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 563614
3/28/2019 9:04:15 AM
Sum: 201" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 563615
3/28/2019 9:05:15 AM
Sum: 234" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 563616
3/28/2019 9:06:15 AM
Sum: 183" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 563617
3/28/2019 9:07:15 AM
Sum: 231" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 563618
3/28/2019 9:08:15 AM
Sum: 244" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 563619
3/28/2019 9:09:15 AM
Sum: 245" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 563620
3/28/2019 9:10:15 AM
Sum: 213" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 563621
3/28/2019 9:11:15 AM
Sum: 159" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 563622
3/28/2019 9:12:15 AM
Sum: 248" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 563623
3/28/2019 9:13:15 AM
Sum: 238" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 563624
3/28/2019 9:14:15 AM
Sum: 113" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 563625
3/28/2019 9:15:15 AM
Sum: 199" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 563626
3/28/2019 9:16:15 AM
Sum: 157" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 563627
3/28/2019 9:17:15 AM
Sum: 228" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 563628
3/28/2019 9:18:15 AM
Sum: 229" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 563629
3/28/2019 9:19:15 AM
Sum: 201" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 563630
3/28/2019 9:20:15 AM
Sum: 218" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 563631
3/28/2019 9:21:15 AM
Sum: 208" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 563632
3/28/2019 9:22:15 AM
Sum: 196" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 563633
3/28/2019 9:23:15 AM
Sum: 207" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 563634
3/28/2019 9:24:15 AM
Sum: 152" class="type ks">X</span> <!----></span></div></div></div></div></div></div><div id="gmbox-24" class="cell medium-6 large-4 active"><div class="product start-betting standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-24.jpg&quot;);"></span> <span class="name">Mini Keno 2</span> <a href="http://keno.garcade.net/kenoGarcade/mini2_keno.aspx" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Số rút ra 567296</div> <span class="product-status start-betting"><div class="counter start-betting active"><span class="status-text">Bắt đầu cá cược</span> 41 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"><span class="number active"><span>3</span></span><span class="number active"><span>9</span></span><span class="number active"><span>12</span></span><span class="number active"><span>15</span></span><span class="number active"><span>16</span></span><span class="number active"><span>18</span></span><span class="number active"><span>19</span></span><span class="number active"><span>20</span></span><span class="number active"><span>31</span></span><span class="number active"><span>39</span></span> <span class="sum">182</span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-3"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="206~355" class="odd"><span class="odd">1.97</span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="55~205" class="odd winner"><span class="odd">1.93</span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="206~355" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="55~204" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">2.00</span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">8.00</span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">1.90</span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">2.60</span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.30</span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">2.60</span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">3.70</span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="55~163" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="164~187" class="odd winner"><span class="odd">4.60</span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="188~222" class="odd"><span class="odd">2.40</span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="223~246" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="247~355" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><div><div class="roadmap-types grid-x small-up-6"><div class="cell"><span title="Tài/Xỉu" class="selected">T/X</span></div><div class="cell"><span title="Lẻ/Chẵn" class="">L/C</span></div><div class="cell"><span title="Chỉ số Tài/Xỉu" class="">Chỉ số</span></div><div class="cell"><span title="Rồng/Hổ" class="">R/H</span></div><div class="cell"><span title="Trên/Dưới" class="">T/D</span></div><div class="cell"><span title="Ngũ hành" class="">5E</span></div></div> <!----> <div class="stats"><span>
          Tài
          <span>49%</span></span><span>
          Xỉu
          <span>51%</span></span></div> <div class="grid-roadmap"><div class="rol"><span class="kb"><span title="Số rút ra 567262
3/28/2019 8:51:45 AM
Sum: 214" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 567263
3/28/2019 8:52:45 AM
Sum: 259" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 567264
3/28/2019 8:53:45 AM
Sum: 210" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 567265
3/28/2019 8:54:45 AM
Sum: 154" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 567266
3/28/2019 8:55:45 AM
Sum: 209" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 567267
3/28/2019 8:56:45 AM
Sum: 199" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 567268
3/28/2019 8:57:45 AM
Sum: 214" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 567269
3/28/2019 8:58:45 AM
Sum: 275" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 567270
3/28/2019 8:59:45 AM
Sum: 177" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 567271
3/28/2019 9:00:45 AM
Sum: 188" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 567272
3/28/2019 9:01:45 AM
Sum: 175" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 567273
3/28/2019 9:02:45 AM
Sum: 229" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 567274
3/28/2019 9:03:45 AM
Sum: 222" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 567275
3/28/2019 9:04:45 AM
Sum: 194" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 567276
3/28/2019 9:05:45 AM
Sum: 163" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 567277
3/28/2019 9:06:45 AM
Sum: 176" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 567278
3/28/2019 9:07:45 AM
Sum: 279" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 567279
3/28/2019 9:08:45 AM
Sum: 256" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 567280
3/28/2019 9:09:45 AM
Sum: 159" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 567281
3/28/2019 9:10:45 AM
Sum: 181" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 567282
3/28/2019 9:11:45 AM
Sum: 244" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 567283
3/28/2019 9:12:45 AM
Sum: 187" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 567284
3/28/2019 9:13:45 AM
Sum: 209" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 567285
3/28/2019 9:14:45 AM
Sum: 163" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 567286
3/28/2019 9:15:45 AM
Sum: 176" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 567287
3/28/2019 9:16:45 AM
Sum: 240" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 567288
3/28/2019 9:17:45 AM
Sum: 226" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 567289
3/28/2019 9:18:45 AM
Sum: 166" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 567290
3/28/2019 9:19:45 AM
Sum: 175" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 567291
3/28/2019 9:20:45 AM
Sum: 175" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 567292
3/28/2019 9:21:45 AM
Sum: 215" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 567293
3/28/2019 9:22:45 AM
Sum: 184" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 567294
3/28/2019 9:23:45 AM
Sum: 175" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 567295
3/28/2019 9:24:45 AM
Sum: 182" class="type ks">X</span> <!----></span></div></div></div></div></div></div><div id="gmbox-19" class="cell medium-6 large-4 active"><div class="product start-betting standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-19.jpg&quot;);"></span> <span class="name">Xuân</span> <a href="http://keno.garcade.net/kenoGarcade/season_spring.aspx" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Số rút ra 751438</div> <span class="product-status start-betting"><div class="counter start-betting active"><span class="status-text">Bắt đầu cá cược</span> 26 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"><span class="number active"><span>1</span></span><span class="number active"><span>7</span></span><span class="number active"><span>27</span></span><span class="number active"><span>29</span></span><span class="number active"><span>30</span></span><span class="number active"><span>31</span></span><span class="number active"><span>32</span></span><span class="number active"><span>34</span></span><span class="number active"><span>36</span></span><span class="number active"><span>37</span></span><span class="number active"><span>39</span></span><span class="number active"><span>46</span></span><span class="number active"><span>53</span></span><span class="number active"><span>61</span></span><span class="number active"><span>63</span></span><span class="number active"><span>64</span></span><span class="number active"><span>67</span></span><span class="number active"><span>73</span></span><span class="number active"><span>76</span></span><span class="number active"><span>79</span></span> <span class="sum">885</span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">9.00</span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">2.30</span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">4.30</span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">2.30</span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">3.70</span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd">2.40</span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd winner"><span class="odd">4.60</span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><div><div class="roadmap-types grid-x small-up-6"><div class="cell"><span title="Tài/Xỉu" class="selected">T/X</span></div><div class="cell"><span title="Lẻ/Chẵn" class="">L/C</span></div><div class="cell"><span title="Chỉ số Tài/Xỉu" class="">Chỉ số</span></div><div class="cell"><span title="Rồng/Hổ" class="">R/H</span></div><div class="cell"><span title="Trên/Dưới" class="">T/D</span></div><div class="cell"><span title="Ngũ hành" class="">5E</span></div></div> <!----> <div class="stats"><span>
          Tài
          <span>48%</span></span><span>
          Xỉu
          <span>52%</span></span></div> <div class="grid-roadmap"><div class="rol"><span class="kb"><span title="Số rút ra 751397
3/28/2019 8:54:45 AM
Sum: 824" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 751398
3/28/2019 8:55:30 AM
Sum: 643" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 751399
3/28/2019 8:56:15 AM
Sum: 860" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 751400
3/28/2019 8:57:00 AM
Sum: 739" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 751401
3/28/2019 8:57:45 AM
Sum: 789" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 751402
3/28/2019 8:58:30 AM
Sum: 830" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 751403
3/28/2019 8:59:15 AM
Sum: 639" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 751404
3/28/2019 9:00:00 AM
Sum: 842" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 751405
3/28/2019 9:00:45 AM
Sum: 764" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 751406
3/28/2019 9:01:30 AM
Sum: 777" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 751407
3/28/2019 9:02:15 AM
Sum: 739" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 751408
3/28/2019 9:03:00 AM
Sum: 759" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 751409
3/28/2019 9:03:45 AM
Sum: 754" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 751410
3/28/2019 9:04:30 AM
Sum: 773" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 751411
3/28/2019 9:05:15 AM
Sum: 939" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751412
3/28/2019 9:06:00 AM
Sum: 843" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751413
3/28/2019 9:06:45 AM
Sum: 933" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751414
3/28/2019 9:07:30 AM
Sum: 814" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 751415
3/28/2019 9:08:15 AM
Sum: 752" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 751416
3/28/2019 9:09:00 AM
Sum: 688" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 751417
3/28/2019 9:09:45 AM
Sum: 823" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751418
3/28/2019 9:10:30 AM
Sum: 830" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751419
3/28/2019 9:11:15 AM
Sum: 973" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751420
3/28/2019 9:12:00 AM
Sum: 820" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751421
3/28/2019 9:12:45 AM
Sum: 962" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 751422
3/28/2019 9:13:30 AM
Sum: 768" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 751423
3/28/2019 9:14:15 AM
Sum: 837" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 751424
3/28/2019 9:15:00 AM
Sum: 758" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 751425
3/28/2019 9:15:45 AM
Sum: 884" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751426
3/28/2019 9:16:30 AM
Sum: 903" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751427
3/28/2019 9:17:15 AM
Sum: 959" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751428
3/28/2019 9:18:00 AM
Sum: 955" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 751429
3/28/2019 9:18:45 AM
Sum: 637" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 751430
3/28/2019 9:19:30 AM
Sum: 620" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 751431
3/28/2019 9:20:15 AM
Sum: 720" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 751432
3/28/2019 9:21:00 AM
Sum: 799" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 751433
3/28/2019 9:21:45 AM
Sum: 831" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751434
3/28/2019 9:22:30 AM
Sum: 831" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751435
3/28/2019 9:23:15 AM
Sum: 885" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 751436
3/28/2019 9:24:00 AM
Sum: 993" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 751437
3/28/2019 9:24:45 AM
Sum: 766" class="type ks">X</span> <!----></span></div></div></div></div></div></div><div id="gmbox-20" class="cell medium-6 large-4 active"><div class="product open-result standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-20.jpg&quot;);"></span> <span class="name">Hạ</span> <a href="http://keno.garcade.net/kenoGarcade/season_Summer.aspx" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Số rút ra 756660</div> <span class="product-status open-result"><div class="counter open-result"><span class="status-text">Công bố Kết quả</span> 0 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers active"><span class="number active"><span>3</span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number active"><span>26</span></span><span class="number"><span></span></span><span class="number active"><span>31</span></span><span class="number active"><span>36</span></span><span class="number"><span></span></span><span class="number active"><span>45</span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number active"><span>62</span></span><span class="number"><span></span></span><span class="number"><span></span></span><span class="number active"><span>71</span></span><span class="number active"><span>73</span></span><span class="number"><span></span></span><span class="number"><span></span></span> <span class="sum">347</span></div> <div class="thumbnail active"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-2"><div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-3"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">9.00</span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">2.30</span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">4.30</span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">2.30</span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">3.70</span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd winner"><span class="odd">9.20</span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd">2.40</span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><div><div class="roadmap-types grid-x small-up-6"><div class="cell"><span title="Tài/Xỉu" class="selected">T/X</span></div><div class="cell"><span title="Lẻ/Chẵn" class="">L/C</span></div><div class="cell"><span title="Chỉ số Tài/Xỉu" class="">Chỉ số</span></div><div class="cell"><span title="Rồng/Hổ" class="">R/H</span></div><div class="cell"><span title="Trên/Dưới" class="">T/D</span></div><div class="cell"><span title="Ngũ hành" class="">5E</span></div></div> <!----> <div class="stats"><span>
          Tài
          <span>50%</span></span><span>
          Xỉu
          <span>50%</span></span></div> <div class="grid-roadmap"><div class="rol"><span class="ks"><span title="Số rút ra 756631
3/28/2019 9:03:15 AM
Sum: 764" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 756632
3/28/2019 9:04:00 AM
Sum: 864" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 756633
3/28/2019 9:04:45 AM
Sum: 696" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 756634
3/28/2019 9:05:30 AM
Sum: 672" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 756635
3/28/2019 9:06:15 AM
Sum: 803" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 756636
3/28/2019 9:07:00 AM
Sum: 891" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 756637
3/28/2019 9:07:45 AM
Sum: 967" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 756638
3/28/2019 9:08:30 AM
Sum: 883" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 756639
3/28/2019 9:09:15 AM
Sum: 653" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 756640
3/28/2019 9:10:00 AM
Sum: 878" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 756641
3/28/2019 9:10:45 AM
Sum: 623" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 756642
3/28/2019 9:11:30 AM
Sum: 718" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 756643
3/28/2019 9:12:15 AM
Sum: 739" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 756644
3/28/2019 9:13:00 AM
Sum: 899" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 756645
3/28/2019 9:13:45 AM
Sum: 789" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 756646
3/28/2019 9:14:30 AM
Sum: 855" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 756647
3/28/2019 9:15:15 AM
Sum: 672" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 756648
3/28/2019 9:16:00 AM
Sum: 899" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 756649
3/28/2019 9:16:45 AM
Sum: 725" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 756650
3/28/2019 9:17:30 AM
Sum: 812" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 756651
3/28/2019 9:18:15 AM
Sum: 765" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 756652
3/28/2019 9:19:00 AM
Sum: 711" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 756653
3/28/2019 9:19:45 AM
Sum: 965" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 756654
3/28/2019 9:20:30 AM
Sum: 908" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 756655
3/28/2019 9:21:15 AM
Sum: 835" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 756656
3/28/2019 9:22:00 AM
Sum: 731" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 756657
3/28/2019 9:22:45 AM
Sum: 787" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 756658
3/28/2019 9:23:30 AM
Sum: 750" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 756659
3/28/2019 9:24:15 AM
Sum: 902" class="type kb">T</span> <!----></span></div></div></div></div></div></div><div id="gmbox-21" class="cell medium-6 large-4 active"><div class="product start-betting standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-21.jpg&quot;);"></span> <span class="name">Thu</span> <a href="http://keno.garcade.net/kenoGarcade/season_autumn.aspx" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Số rút ra 760168</div> <span class="product-status start-betting"><div class="counter start-betting active"><span class="status-text">Bắt đầu cá cược</span> 11 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"><span class="number active"><span>3</span></span><span class="number active"><span>7</span></span><span class="number active"><span>12</span></span><span class="number active"><span>14</span></span><span class="number active"><span>16</span></span><span class="number active"><span>18</span></span><span class="number active"><span>22</span></span><span class="number active"><span>23</span></span><span class="number active"><span>29</span></span><span class="number active"><span>30</span></span><span class="number active"><span>31</span></span><span class="number active"><span>32</span></span><span class="number active"><span>37</span></span><span class="number active"><span>54</span></span><span class="number active"><span>57</span></span><span class="number active"><span>63</span></span><span class="number active"><span>66</span></span><span class="number active"><span>72</span></span><span class="number active"><span>77</span></span><span class="number active"><span>80</span></span> <span class="sum">743</span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-2"><div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-3"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">9.00</span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">2.30</span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">4.30</span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">2.30</span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">3.70</span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd winner"><span class="odd">4.60</span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd">2.40</span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><div><div class="roadmap-types grid-x small-up-6"><div class="cell"><span title="Tài/Xỉu" class="selected">T/X</span></div><div class="cell"><span title="Lẻ/Chẵn" class="">L/C</span></div><div class="cell"><span title="Chỉ số Tài/Xỉu" class="">Chỉ số</span></div><div class="cell"><span title="Rồng/Hổ" class="">R/H</span></div><div class="cell"><span title="Trên/Dưới" class="">T/D</span></div><div class="cell"><span title="Ngũ hành" class="">5E</span></div></div> <!----> <div class="stats"><span>
          Tài
          <span>49%</span></span><span>
          Xỉu
          <span>51%</span></span></div> <div class="grid-roadmap"><div class="rol"><span class="ks"><span title="Số rút ra 760119
3/28/2019 8:48:30 AM
Sum: 759" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760120
3/28/2019 8:49:15 AM
Sum: 772" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 760121
3/28/2019 8:50:00 AM
Sum: 859" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760122
3/28/2019 8:50:45 AM
Sum: 844" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760123
3/28/2019 8:51:30 AM
Sum: 823" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760124
3/28/2019 8:52:15 AM
Sum: 852" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760125
3/28/2019 8:53:00 AM
Sum: 856" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760126
3/28/2019 8:53:45 AM
Sum: 812" class="type kb">T</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 760127
3/28/2019 8:54:30 AM
Sum: 832" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 760128
3/28/2019 8:55:15 AM
Sum: 791" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 760129
3/28/2019 8:56:00 AM
Sum: 870" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 760130
3/28/2019 8:56:45 AM
Sum: 724" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760131
3/28/2019 8:57:30 AM
Sum: 756" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760132
3/28/2019 8:58:15 AM
Sum: 762" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 760133
3/28/2019 8:59:00 AM
Sum: 813" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760134
3/28/2019 8:59:45 AM
Sum: 933" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 760135
3/28/2019 9:00:30 AM
Sum: 733" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760136
3/28/2019 9:01:15 AM
Sum: 807" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760137
3/28/2019 9:02:00 AM
Sum: 809" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 760138
3/28/2019 9:02:45 AM
Sum: 954" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760139
3/28/2019 9:03:30 AM
Sum: 949" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760140
3/28/2019 9:04:15 AM
Sum: 863" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760141
3/28/2019 9:05:00 AM
Sum: 823" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760142
3/28/2019 9:05:45 AM
Sum: 923" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 760143
3/28/2019 9:06:30 AM
Sum: 779" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760144
3/28/2019 9:07:15 AM
Sum: 795" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760145
3/28/2019 9:08:00 AM
Sum: 771" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 760146
3/28/2019 9:08:45 AM
Sum: 825" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760147
3/28/2019 9:09:30 AM
Sum: 873" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 760148
3/28/2019 9:10:15 AM
Sum: 713" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760149
3/28/2019 9:11:00 AM
Sum: 721" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760150
3/28/2019 9:11:45 AM
Sum: 803" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760151
3/28/2019 9:12:30 AM
Sum: 702" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 760152
3/28/2019 9:13:15 AM
Sum: 1080" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760153
3/28/2019 9:14:00 AM
Sum: 912" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760154
3/28/2019 9:14:45 AM
Sum: 890" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760155
3/28/2019 9:15:30 AM
Sum: 839" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760156
3/28/2019 9:16:15 AM
Sum: 937" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760157
3/28/2019 9:17:00 AM
Sum: 906" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 760158
3/28/2019 9:17:45 AM
Sum: 717" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760159
3/28/2019 9:18:30 AM
Sum: 743" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760160
3/28/2019 9:19:15 AM
Sum: 777" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 760161
3/28/2019 9:20:00 AM
Sum: 987" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 760162
3/28/2019 9:20:45 AM
Sum: 794" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 760163
3/28/2019 9:21:30 AM
Sum: 794" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 760164
3/28/2019 9:22:15 AM
Sum: 927" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760165
3/28/2019 9:23:00 AM
Sum: 853" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 760166
3/28/2019 9:23:45 AM
Sum: 851" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 760167
3/28/2019 9:24:30 AM
Sum: 743" class="type ks">X</span> <!----></span></div></div></div></div></div></div><div id="gmbox-22" class="cell medium-6 large-4 active"><div class="product start-betting standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-22.jpg&quot;);"></span> <span class="name">Đông</span> <a href="http://keno.garcade.net/kenoGarcade/season_winter.aspx" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Số rút ra 757924</div> <span class="product-status start-betting"><div class="counter start-betting active"><span class="status-text">Bắt đầu cá cược</span> 26 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"><span class="number active"><span>2</span></span><span class="number active"><span>7</span></span><span class="number active"><span>11</span></span><span class="number active"><span>13</span></span><span class="number active"><span>18</span></span><span class="number active"><span>25</span></span><span class="number active"><span>30</span></span><span class="number active"><span>32</span></span><span class="number active"><span>35</span></span><span class="number active"><span>37</span></span><span class="number active"><span>47</span></span><span class="number active"><span>51</span></span><span class="number active"><span>60</span></span><span class="number active"><span>62</span></span><span class="number active"><span>63</span></span><span class="number active"><span>70</span></span><span class="number active"><span>71</span></span><span class="number active"><span>73</span></span><span class="number active"><span>74</span></span><span class="number active"><span>76</span></span> <span class="sum">857</span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell winner"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell winner"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd">1.95</span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">9.00</span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">1.95</span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd">2.30</span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd winner"><span class="odd">4.30</span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">2.30</span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd winner"><span class="odd">3.70</span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd">3.70</span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd">4.60</span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd">2.40</span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd winner"><span class="odd">4.60</span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd">9.20</span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><div><div class="roadmap-types grid-x small-up-6"><div class="cell"><span title="Tài/Xỉu" class="selected">T/X</span></div><div class="cell"><span title="Lẻ/Chẵn" class="">L/C</span></div><div class="cell"><span title="Chỉ số Tài/Xỉu" class="">Chỉ số</span></div><div class="cell"><span title="Rồng/Hổ" class="">R/H</span></div><div class="cell"><span title="Trên/Dưới" class="">T/D</span></div><div class="cell"><span title="Ngũ hành" class="">5E</span></div></div> <!----> <div class="stats"><span>
          Tài
          <span>50%</span></span><span>
          Xỉu
          <span>50%</span></span></div> <div class="grid-roadmap"><div class="rol"><span class="ks"><span title="Số rút ra 757895
3/28/2019 9:03:45 AM
Sum: 572" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 757896
3/28/2019 9:04:30 AM
Sum: 750" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 757897
3/28/2019 9:05:15 AM
Sum: 861" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 757898
3/28/2019 9:06:00 AM
Sum: 807" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 757899
3/28/2019 9:06:45 AM
Sum: 997" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 757900
3/28/2019 9:07:30 AM
Sum: 1087" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 757901
3/28/2019 9:08:15 AM
Sum: 956" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 757902
3/28/2019 9:09:00 AM
Sum: 731" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 757903
3/28/2019 9:09:45 AM
Sum: 882" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 757904
3/28/2019 9:10:30 AM
Sum: 935" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 757905
3/28/2019 9:11:15 AM
Sum: 963" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 757906
3/28/2019 9:12:00 AM
Sum: 843" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 757907
3/28/2019 9:12:45 AM
Sum: 757" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 757908
3/28/2019 9:13:30 AM
Sum: 853" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 757909
3/28/2019 9:14:15 AM
Sum: 767" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 757910
3/28/2019 9:15:00 AM
Sum: 808" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 757911
3/28/2019 9:15:45 AM
Sum: 918" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 757912
3/28/2019 9:16:30 AM
Sum: 723" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 757913
3/28/2019 9:17:15 AM
Sum: 829" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 757914
3/28/2019 9:18:00 AM
Sum: 980" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 757915
3/28/2019 9:18:45 AM
Sum: 599" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 757916
3/28/2019 9:19:30 AM
Sum: 734" class="type ks">X</span> <!----></span><span class="ks"><span title="Số rút ra 757917
3/28/2019 9:20:15 AM
Sum: 730" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 757918
3/28/2019 9:21:00 AM
Sum: 853" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 757919
3/28/2019 9:21:45 AM
Sum: 799" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 757920
3/28/2019 9:22:30 AM
Sum: 910" class="type kb">T</span> <!----></span><span class="kb"><span title="Số rút ra 757921
3/28/2019 9:23:15 AM
Sum: 857" class="type kb">T</span> <!----></span></div><div class="rol"><span class="ks"><span title="Số rút ra 757922
3/28/2019 9:24:00 AM
Sum: 773" class="type ks">X</span> <!----></span></div><div class="rol"><span class="kb"><span title="Số rút ra 757923
3/28/2019 9:24:45 AM
Sum: 866" class="type kb">T</span> <!----></span></div></div></div></div></div></div><div id="gmbox-23" class="cell medium-6 large-4"><div class="product closed standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-23.jpg&quot;);"></span> <span class="name">Nhật Bản</span> <a href="http://keno.garcade.net/" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Thị trường đã Đóng</div> <span class="product-status closed"><div class="counter closed"><span class="status-text">Thị trường đã Đóng</span> 0 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"> <span class="sum"></span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd"><span class="odd"></span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd"></span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd"></span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd"></span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><!----></div></div></div><div id="gmbox-3" class="cell medium-6 large-4"><div class="product closed standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-3.jpg&quot;);"></span> <span class="name">Nước Slovakia</span> <a href="https://eklubkeno.etipos.sk/Archive.aspx" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Thị trường đã Đóng</div> <span class="product-status closed"><div class="counter closed"><span class="status-text">Thị trường đã Đóng</span> 0 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"> <span class="sum"></span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd"><span class="odd"></span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd"></span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd"></span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd"></span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><!----></div></div></div><div id="gmbox-4" class="cell medium-6 large-4"><div class="product closed standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-4.jpg&quot;);"></span> <span class="name">Canada</span> <a href="http://lotto.bclc.com/winning-numbers/keno-and-keno-bonus.html" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Thị trường đã Đóng</div> <span class="product-status closed"><div class="counter closed"><span class="status-text">Thị trường đã Đóng</span> 0 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"> <span class="sum"></span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd"><span class="odd"></span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd"></span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd"></span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd"></span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><!----></div></div></div><div id="gmbox-5" class="cell medium-6 large-4"><div class="product closed standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-5.jpg&quot;);"></span> <span class="name">Tây Canada</span> <a href="http://www.wclc.com/winning-numbers/keno.htm" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Thị trường đã Đóng</div> <span class="product-status closed"><div class="counter closed"><span class="status-text">Thị trường đã Đóng</span> 0 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"> <span class="sum"></span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd"><span class="odd"></span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd"></span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd"></span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd"></span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><!----></div></div></div><div id="gmbox-8" class="cell medium-6 large-4"><div class="product closed standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-8.jpg&quot;);"></span> <span class="name">Nước Ohio</span> <a href="http://www.ohiolottery.com/WinningNumbers/KenoDrawings/KenoDrawingsArchive.aspx" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Thị trường đã Đóng</div> <span class="product-status closed"><div class="counter closed"><span class="status-text">Thị trường đã Đóng</span> 0 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"> <span class="sum"></span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd"><span class="odd"></span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd"></span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd"></span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd"></span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><!----></div></div></div><div id="gmbox-11" class="cell medium-6 large-4"><div class="product closed standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-11.jpg&quot;);"></span> <span class="name">Kentucky</span> <a href="http://www.kylottery.com/apps/draw_games/keno/keno_pastwinning.html" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Thị trường đã Đóng</div> <span class="product-status closed"><div class="counter closed"><span class="status-text">Thị trường đã Đóng</span> 0 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"> <span class="sum"></span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd"><span class="odd"></span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd"></span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd"></span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd"></span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><!----></div></div></div><div id="gmbox-13" class="cell medium-6 large-4"><div class="product closed standard"><div class="product-header"><div class="product-name"><span class="avatar" style="background-image: url(&quot;assets/avatar/product-13.jpg&quot;);"></span> <span class="name">Michigan</span> <a href="https://www.michiganlottery.com/club_keno_info" target="_blank" title="Official Site"><svg class="icon-link"><use xlink:href="#icon-link"></use></svg></a><br> Thị trường đã Đóng</div> <span class="product-status closed"><div class="counter closed"><span class="status-text">Thị trường đã Đóng</span> 0 <svg class="icon-clock"><use xlink:href="#icon-clock"></use></svg></div> <div class="flipping-numbers"> <span class="sum"></span></div> <div class="thumbnail"><div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-2"><div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-3"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-4"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div> <div class="grid-x small-up-5"><div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div> <div class="cell"></div></div></div></span></div> <div class="product-odds"><!----> <div class="odds"><div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~810" class="odd"><span class="odd"></span> <span class="stake"></span>
        Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn
      </a> <!----></div></div> <div class="grid-x small-up-2 active"><div class="cell oddbox"><a title="811~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Tài
      </a> <!----></div> <div class="cell oddbox"><a title="210~809" class="odd"><span class="odd"></span> <span class="stake"></span>
        Chỉ số Xỉu
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Rồng
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        DT-Hòa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Hổ
      </a> <!----></div></div> <div class="grid-x small-up-3 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Trên
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Giữa
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Dưới
      </a> <!----></div></div> <div class="grid-x small-up-4 active"><div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài lẻ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Lẻ Nhỏ
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Tài chẵn
      </a> <!----></div> <div class="cell oddbox"><a class="odd"><span class="odd"></span> <span class="stake"></span>
        Chẵn nhỏ
      </a> <!----></div></div> <div class="grid-x small-up-5 active"><div class="cell oddbox"><a title="210~695" class="odd"><span class="odd"></span> <span class="stake"></span>
        Kim
      </a> <!----></div> <div class="cell oddbox"><a title="696~763" class="odd"><span class="odd"></span> <span class="stake"></span>
        Mộc
      </a> <!----></div> <div class="cell oddbox"><a title="764~855" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thủy
      </a> <!----></div> <div class="cell oddbox"><a title="856~923" class="odd"><span class="odd"></span> <span class="stake"></span>
        Hỏa
      </a> <!----></div> <div class="cell oddbox"><a title="924~1410" class="odd"><span class="odd"></span> <span class="stake"></span>
        Thổ
      </a> <!----></div></div></div></div> <div class="product-roadmap"><!----></div></div></div></div></div>
<!-- <script src="http://keno.garcade.net/keno/assets/js/vendors.js"></script>
<script src="http://keno.garcade.net/keno/assets/js/locales.js?v=1"></script>
<script src="http://keno.garcade.net/keno/assets/js/settings.js?v=190124"></script>
<script src="http://keno.garcade.net/keno/assets/js/config.js?v=1"></script>
<script src="http://keno.garcade.net/keno/assets/js/app.js?v=3"></script> -->

</body></html>