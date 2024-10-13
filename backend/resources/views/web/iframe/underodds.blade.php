<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="todoApp">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>UnderOver</title>
    <link href="https://ssl-1-1.bongstatic.com/template/sportsbook/public/css/M_UnderOver.css?v=201802011053" rel="stylesheet" type="text/css">
    <script type="application/javascript" src="{{ elixir('js/web-all.js') }}"></script>
    <script type="application/javascript" src="{{ elixir('js/templates.js') }}"></script>

    <link rel="stylesheet" href="{{ elixir('css/web-app.css') }}"/>
    <link rel="stylesheet" href="{{ elixir('css/web-all.css')}}"/>
    <style type="text/css">
        .ipColor {
            color: #045ace;
            font-family: Tahoma;
            font-size: 10px;
            font-weight: 600;
        }
        .iplink:hover {
            color: #f60;
            text-decoration: none;
        }
        #Layer1 {
          position:absolute;
          left:1px;
          top:20px;
          width:424px;
          height:311px;
          z-index:1;
        }
    </style>
    <style type="text/css">
    .promoNewVersion{
        position: fixed;
        width: 100%;
        height: 100vh;
        left: 0;
        top: 0;
        z-index: 999999;
    }

    .promoNewVersion .content{
        font-family: Tahoma, "Microsoft YaHei", "Microsoft JhengHei";
        font-size: 12px;
        width: 492px;
        padding: 5px;
        border: 3px solid #fff;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
        text-align: center;
        position: absolute;
        top: 230px;
        margin-top: -220px;
        left: 145px;
    }

    .promoNewVersion .close{
        background: url(https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/layout/icon_UI01.png) 132px -18px;
        position: absolute;
        right: -10px;
        top: -10px;
        width: 16px;
        height: 16px;
        border-radius: 16px;
        border: 3px solid #fff;
        background-color: #ccc;
        color: #fff;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    .promoNewVersion .close:hover{
        background-color: #666;
    }

    .promoNewVersion h1.title{
        color: #f27321;
        margin-top: 0;
    }

    .promoNewVersion ul{
        list-style: none;
        text-align: left;
        margin-left: 5.3em;
    }

    .promoNewVersion li{
        background: url(https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/layout/welcom-icon.png) left top no-repeat;
        padding: 0 10px 6px 30px;
        font-size: 16px;
    }

    .promoNewVersion .btnAera{
        padding: 0 10px;
    }

    .promoNewVersion .btnAera > div{
        padding: 8px;
        cursor: pointer;
    }
    .promoNewVersion .btnAera > div:hover{
        opacity: .8;
    }
    .promoNewVersion .btnAera > div.btn{
        display: inline-block;
        color: #fff;
        font-size: 1.5em;
        box-sizing: border-box;
        border-radius: 3px;
        width: 72%;
        background-color: #7490c3;
    }

    .promoNewVersion .btnAera > div.second{
        width: 25%;
        background-color: #b1b1b1;
        margin-left: 1%;
    }
    .promoNewVersion .btnAera > div.third{
        color: #bebebe;
        text-align: right;
        padding: 4px 8px 2px;
        text-decoration: underline;
    }
    </style>
    <script type="text/javascript">
        top.TYPE = '{{$type}}';
        top.ODD_TYPE = '{{$odd_type}}';

        function showTransition() {
            $('#SiteTransitionTip').show();
        }

        function callNewVersion(argument) {
            $('#SwitchNewVersionTip').show();

            setTimeout(function (argument) {
                $('#SwitchNewVersionTip').hide();                
            }, 3000);
        }

        function promoNewVersionPopup(bool, show) {
            if (bool) {
                $('#PromoNewVersionPopup').hide();    
            } else {
                $('#PromoNewVersionPopup').show();    
            }

            if (show) {
                HidePromoPage();
                callNewVersion();
            }
        }

        function checkMain() {
            if (typeof(Storage) !== "undefined") {
                init();            
            }    
        }

        function init(argument) {
            if (!checkIfNew()) {
                promoNewVersionPopup();
            }   
        }

        function checkIfNew() {
            return getStoreValue('KEY_VERSION_V1') || sessionStorage.getItem('KEY_VERSION_V1');
        }

        function PromoDoNotShowAgain() {
            localStorage.setItem('KEY_VERSION_V1', 'DONTSHOW');
            promoNewVersionPopup(true);
        }

        function HidePromoPage(argument) {
            sessionStorage.setItem('KEY_VERSION_V1', 'DONTSHOW');
        }

        function getStoreValue(key) {
            return localStorage.getItem(key);
        }

        function setStoreValue(key) {
            return localStorage.setItem(key);
        }

        function mobileAndTabletcheck() {
            var check = false;
            (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
        };
    </script>
</head>

<body id="UnderOver" lang="vn" ng-controller="HomeController" onload="checkMain()">
    <div id="SiteTransitionTip" class="site-transiton" style="display: none;">
        <div class="site-transiton__item">
            <span class="icon-switch"></span>
        </div>
        <div class="site-transiton__item">
            <strong>Chuyển qua Mới Phiên bản</strong>
            <span class="preloader-dots"></span>
            <p>Vui lòng chờ trong giây lát</p>
        </div>
    </div>
    <div id="SwitchNewVersionTip" class="SwitchVer" style="display: none;">
        <div class="tips">
            <div class="content info">
                <p>BẤM NGAY để thử phiên bản mới!</p>
            </div>
        </div>
    </div>
    <div id="PromoNewVersionPopup" class="promoNewVersion" style="display: none;">
        <div class="content">
            <div class="close" title="ĐÓNG" onclick="javascript:promoNewVersionPopup(true, true);"></div>
            <img src="https://ssl-1-1.bongstatic.com/template/sportsbook/public/images/layout/welcom.png?v=20161216">
            <h1 class="title">Giới thiệu Phiên bản mới</h1>
            <ul>
                <li>Cập nhật Tỷ lệ cược liên tục bởi công nghệ Push</li>
                <li>Cược nhanh</li>
                <li>Thiết Kế Web Có Độ Phản Hồi Cao</li>
            </ul>
            <div class="btnAera">
                <div class="btn" ng-click="changeVersion()">HÃY THỬ NGAY BÂY GIỜ</div>
                <div class="btn second" onclick="javascript:promoNewVersionPopup(true, true);">Để sau</div>
                <div class="third" id="poptoms2_DoNotShowAgain" onclick="javascript:PromoDoNotShowAgain();">Không hiển thị nữa</div>
            </div>
        </div>
    </div>
    <!-- sidebar End -->
    <div id="MainFly" class="MainFly GV">
        <script type="text/javascript">
            setInterval(function () {
                var jqxhr = $.ajax( "/alert" )
              .done(function(data) {
                $('#shownhe').hide();
                if (data) {
                    $('#shownhe').show();
                    $('#shownhe').html(data);
                }
              })
            }, 10000);
        </script>
        <h1 id="shownhe" style="font-size: 6em; color: red;position: absolute;z-index: 11111;background: white;height: 100%;"></h1>
        <div id="column1" class="titleBar">
            <div class="title">{{$type == 'multiple' ? 'Cá cược tổng hợp' : 'Sự kiện hôm nay'}}</div>
            <div class="right">
                <a id="btnSwitchBack" href="javascript:LiveInfoBackButton();trailblazer.gvend();" class="button mark" style="display:none" title="Trở Về"><span>Trở Về</span></a>
                
                @if ($type === 'multiple')
                <a ng-click="openLeague()" class="button selectLeague" style="display:inline-block;" title="Chọn Giải Đấu">
                   <span>
                      <div id="League_New" class="">
                         <div id="SelLeagueIcon" class="displayOff">
                            <div class="icon">
                            </div>
                         </div>
                         <div class="events">
                            <div class="normal">(</div>
                            <div id="CustSelL" class="selected displayOff">0</div>
                            <div id="AllSelL" class="displayOn"><% leagueSelectNumber %></div>
                            <div class="normal">/</div>
                            <div id="TotalLeagueCnt" class="normal"><% leagueNumber %></div>
                            <div class="normal">)</div>
                         </div>
                         Giải
                      </div>
                      <div id="League_Old" class="displayOff">
                         Chọn Giải Đấu
                      </div>
                   </span>
                </a>
                <a id="b_SwitchToParlay" href="javascript:ShowOdds('A')" class="button mark" style="display: block;" title="Hôm nay">
                    <span>Hôm nay</span>
                </a>
                <a href="MixParlayHelp.aspx?r_sport=1" target="MixParlayHelp" class="button" title="Trợ giúp"><span>Trợ giúp</span></a>
                @endif
                @if ($type === 'single')
                <a id="b_SwitchToParlay" href="javascript:ShowOdds('P')" class="button mark" style="display: block;" title="Cá cược tổng hợp">
                    <span>Cá cược tổng hợp</span>
                </a>
                
                
                <div id="selLeagueType_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('selLeagueType',event);return false;" onclick="onClickSelecter('selLeagueType');return false;" class="button select icon">
                    <input type="hidden" name="selLeagueType" id="selLeagueType" value="0">
                    <span id="selLeagueType_Txt" title="Tất Cả Trận Đấu"><div id="selLeagueType_Icon" class="icon_All"></div></span>
                    <ul id="selLeagueType_menu" class="submenu">
                        <li title="Tất Cả Trận Đấu" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('selLeagueType',this,'0',true);changeLeagueType(0);">
                            <div class="icon_All"></div>Tất Cả Trận Đấu</li>
                        <li title="Các Trận Đấu Chính" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('selLeagueType',this,'1',true);changeLeagueType(1);">
                            <div class="icon_Main"></div>Các Trận Đấu Chính</li>
                    </ul>
                </div>

                <span id="Tbl_TimeRange" style="display:">
                <div id="HourContainer_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('HourContainer',event);return false;" onclick="onClickSelecter('HourContainer');return false;" class="button select">
                    <input type="hidden" name="HourContainer" id="HourContainer" value="15">
                    <span id="HourContainer_Txt" title="00:00~04:00">Tất cả</span>
                <ul id="HourContainer_menu" class="submenu">
                    <li id="HourSpan0" title="Tất Cả" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('HourContainer',this,'HourSpan0',false);HourLinkClick(this,0);">Tất Cả</li>
                    <li id="HourSpan3" title="12:00~16:00" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('HourContainer',this,'HourSpan3',false);HourLinkClick(this,3);" style="display: none;">12:00~16:00</li>
                    <li id="HourSpan7" title="16:00~20:00" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('HourContainer',this,'HourSpan7',false);HourLinkClick(this,7);" style="display: none;">16:00~20:00</li>
                    <li id="HourSpan11" title="20:00~00:00" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('HourContainer',this,'HourSpan11',false);HourLinkClick(this,11);" style="display: none;">20:00~00:00</li>
                    <li id="HourSpan15" title="00:00~04:00" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('HourContainer',this,'HourSpan15',false);HourLinkClick(this,15);">Now~04:00</li>
                    <li id="HourSpan19" title="04:00~08:00" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('HourContainer',this,'HourSpan19',false);HourLinkClick(this,19);">04:00~08:00</li>
                    <li id="HourSpan23" title="08:00~12:00" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('HourContainer',this,'HourSpan23',false);HourLinkClick(this,23);">08:00~12:00</li>
                </ul>
            </div>

            </span>
            <div id="aSorter_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('aSorter',event);return false;" onclick="onClickSelecter('aSorter');return false;" class="button select icon">
                <input type="hidden" name="aSorter" id="aSorter" value="0">
                <span id="aSorter_Txt" title="Lựa chọn bình thường"><div id="aSorter_Icon" class="icon_NO"></div></span>
                <ul id="aSorter_menu" class="submenu">
                    <li title="Chọn Lựa Theo Thời Gian" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('aSorter',this,'1',true);">
                        <div class="icon_ST"></div>Chọn Lựa Theo Thời Gian</li>
                    <li title="Lựa chọn bình thường" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('aSorter',this,'0',true);">
                        <div class="icon_NO"></div>Lựa chọn bình thường</li>
                </ul>
            </div>
            <a ng-click="openLeague()" class="button selectLeague" style="display:inline-block;" title="Chọn Giải Đấu">
          <span>
            <div id="League_New" class="">
              <div id="SelLeagueIcon" class="displayOff">
                <div class="icon">
                </div>
              </div>
              <div class="events">
                <div class="normal">(</div><div id="CustSelL" class="selected displayOff">0</div><div id="AllSelL" class="displayOn"><% leagueSelectNumber %></div><div class="normal">/</div><div id="TotalLeagueCnt" class="normal"><% leagueNumber %></div><div class="normal">)</div>
              </div>
              Giải</div>
            <div id="League_Old" class="displayOff">
              Chọn Giải Đấu</div>
            </span>
            </a>
            <div id="disstyle_Div" tabindex="6" hidefocus="" onkeypress="onKeyPressSelecter('disstyle',event);return false;" onclick="onClickSelecter('disstyle');return false;" class="button select icon">
                <input type="hidden" name="disstyle" id="disstyle" value="3">
                <span id="disstyle_Txt" title="Dòng Kép"><div id="disstyle_Icon" class="icon_DL"></div></span>
                <ul id="disstyle_menu" class="submenu" style="visibility: hidden;">
                    <li title="Một Dòng" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('disstyle',this,'1',true);changeDisplayMode('1','viva88.com'); parent.focus();">
                        <div class="icon_SL"></div>Một Dòng</li>
                    <li title="Dòng Kép" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('disstyle',this,'3',true);changeDisplayMode('3','viva88.com'); parent.focus();">
                        <div class="icon_DL"></div>Dòng Kép</li>
                    <li title="Toàn Thời Gian" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('disstyle',this,'1F',true);changeDisplayMode('1F','viva88.com'); parent.focus();">
                        <div class="icon_FT"></div>Toàn Thời Gian</li>
                    <li title="Hiệp 1" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('disstyle',this,'1H',true);changeDisplayMode('1H','viva88.com'); parent.focus();">
                        <div class="icon_HT"></div>Hiệp 1</li>
                </ul>
            </div>



            <div id="selOddsType_Div" tabindex="6" hidefocus="" class="button select icon">
                <input type="hidden" name="selOddsType" id="selOddsType" value="4">
                <span id="selOddsType_Txt" title="Malay Odds"><div id="selOddsType_Icon" class="icon_MY"></div></span>
                <ul id="selOddsType_menu" class="submenu">
                    <li title="Hong Kong Odds" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('selOddsType',this,'2',true);changeOddsType_ou(2);">
                        <div class="icon_HK"></div>Hong Kong Odds</li>
                    <li title="Decimal Odds" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('selOddsType',this,'1',true);changeOddsType_ou(1);">
                        <div class="icon_Dec"></div>Decimal Odds</li>
                    <li title="Malay Odds" onmouseover="onOver(this)" onmouseout="onOut(this)" onclick="setSelecter('selOddsType',this,'4',true);changeOddsType_ou(4);">
                        <div class="icon_MY"></div>Malay Odds</li>
                </ul>
            </div>
            @endif

            <a id="btnRefresh_D" ng-class="{'disable': loading.upleagues}" loading="loading.upleagues" on-refresh="onrefreshUpcoming" refresh-item number='90' class="button" title="Tải Lại">
               <!-- <span>
                  <div class="icon-refresh" title="Tải Lại"></div>
                  74
               </span> -->
            </a>
            <a on-refresh="onrefreshInplay" ng-class="{'disable': loading.leagues}" loading="loading.leagues" refresh-item number='20' id="btnRefresh_L" class="button" style="" title="Trực tiếp">
            </a>
        </div>
    </div>
    @include('web.commons.right')
    <div id="MiddleLiveInfo" class="MainTVInfo" style="display: none; color:#e8eff5">
        <div class="loadiframe"><iframe id="MiddleLiveInfoFrame" src="" scrolling="no" frameborder="0" style="height: 417px;"></iframe></div>
    </div>
    </div>

    <popup-league show="menu.showLeague" league-number="leagueNumber" league-select-number="leagueSelectNumber"></popup-league>
    <!--?????? Start-->
    <div style="display:none">



        <div id="SelLeague">
            <select id="LF" name="LF" onchange="SelectChange();">
          
          
          <option value="0" style="font-size:small;" selected="">--- No League---</option>
              
        </select>
        </div>


        <span id="tdSelPeriod" style="display:none">
      <select id="selPeriod" onchange="changePeriod(this.options[this.selectedIndex].value); parent.focus();" class="select_Line" style="font-size: 11px; color: #FF0000;">
        <option value="1">Albl_10beforeA</option>
        <option value="2">Albl_10afterA</option>
        <option value="0">Tất Cả Các Trận Đấu</option>
      </select>
      </span>





    </div>
    <!--?????? End-->

    <div class="column3" id="column2">
        <div id="OddsTr" style="display: block;">
            <div id="divSelectDate" class="board" style="display:none">
                <ul class="panelInfo">
                    <li><span class="title" onclick="selectDate(this,'');" style="cursor:pointer;color:#003399">Albl_allA</span></li>
                    <li><span class="title" onclick="selectDate(this,'Adate_1A');" style="cursor:pointer;color:AspnSelectDate_Color_1A">Aday_1A Amonth_1A(Aweek_1A)</span></li>
                    <li><span class="title" onclick="selectDate(this,'Adate_2A');" style="cursor:pointer;color:AspnSelectDate_Color_2A">Aday_2A Amonth_2A(Aweek_2A)</span></li>
                    <li><span class="title" onclick="selectDate(this,'Adate_3A');" style="cursor:pointer;color:AspnSelectDate_Color_3A">Aday_3A Amonth_3A(Aweek_3A)</span></li>
                    <li><span class="title" onclick="selectDate(this,'Adate_4A');" style="cursor:pointer;color:AspnSelectDate_Color_4A">Aday_4A Amonth_4A(Aweek_4A)</span></li>
                    <li><span class="title" onclick="selectDate(this,'Adate_5A');" style="cursor:pointer;color:AspnSelectDate_Color_5A">Aday_5A Amonth_5A(Aweek_5A)</span></li>
                    <li><span class="title" onclick="selectDate(this,'Adate_6A');" style="cursor:pointer;color:AspnSelectDate_Color_6A">Aday_6A Amonth_6A(Aweek_6A)</span></li>
                    <li><span class="title" onclick="selectDate(this,'Adate_7A');" style="cursor:pointer;color:AspnSelectDate_Color_7A">Aday_7A Amonth_7A(Aweek_7A)</span></li>
                </ul>
            </div>
            <div class="tabbox" id="tabbox">
                <div class="tabbox_F" id="oTableContainer_L" ng-show="leagues.length">
                    <table id="tmplTable" class="oddsTable" width="100%" cellpadding="0" cellspacing="0" border="0">
                  <thead>
                     <tr>
                        <th width="6%" nowrap="">Time</th>
                        <th width="34%" colspan="2" align="left" class="even">Event</th>
                        <th style="min-width:78px;max-width:90px;" nowrap="nowrap" class="text-ellipsis" title="Full Time Handicap">FT. HDP</th>
                        <th style="min-width:78px;max-width:90px;" nowrap="nowrap" class="text-ellipsis" title="Full Time Over/Under">FT. O/U</th>
                        <th style="min-width:48px;max-width:60px;" nowrap="nowrap" class="text-ellipsis" title="Full Time 1X2">FT. 1X2</th>
                        <th style="min-width:78px;max-width:90px;" nowrap="nowrap" class="even tabt_L text-ellipsis" title="Half Time Handicap">1H. HDP</th>
                        <th style="min-width:78px;max-width:90px;" nowrap="nowrap" class="even text-ellipsis" title="Half Time Over/Under">1H. O/U</th>
                        <th style="min-width:48px;max-width:60px;" nowrap="nowrap" class="even text-ellipsis" title="Half Time 1X2">1H. 1X2</th>
                        <th width="1%" nowrap="nowrap"></th>
                     </tr>
                  </thead>
                  <tbody ng-repeat-start="league in leagues">
                     <tr id="l_43" valign="middle" style="cursor:pointer">
                        <td class="tabtitle"></td>
                        <td colspan="8" valign="middle" class="tabtitle"><span title="Add My Favorite"><span id="fav_43" class="iconOdds favorite"></span></span><% ::league.name %></td>
                        <td colspan="1" class="tabtitle" align="right">
                           <a on-refresh="onrefreshInplay" ng-class="{'disable': loading.leagues}" loading="loading.leagues" refresh-item type="inplay" number='20' name="btnRefresh_L" class="btnIcon right" style="" title="Trực tiếp">
                           </a>
                        </td>
                     </tr>
                  </tbody>
                  <tbody class="hover-yello" ng-repeat-end ng-repeat="event in league.events" league-name="league.name" event="event" type="inplay" event-item>
                  </tbody>
               </table>
                </div>
                <div class="tabbox_F" id="oTableContainer_D" ng-show="upleagues.length">
               <table id="tmplTable" class="oddsTable" width="100%" cellpadding="0" cellspacing="0" border="0">
                  <thead>
                     <tr>
                        <th width="6%" nowrap="">Time</th>
                        <th width="34%" colspan="2" align="left" class="even">Event</th>
                        <th style="min-width:78px;max-width:90px;" nowrap="nowrap" class="text-ellipsis" title="Full Time Handicap">FT. HDP</th>
                        <th style="min-width:78px;max-width:90px;" nowrap="nowrap" class="text-ellipsis" title="Full Time Over/Under">FT. O/U</th>
                        <th style="min-width:48px;max-width:60px;" nowrap="nowrap" class="text-ellipsis" title="Full Time 1X2">FT. 1X2</th>
                        <th style="min-width:78px;max-width:90px;" nowrap="nowrap" class="even tabt_L text-ellipsis" title="Half Time Handicap">1H. HDP</th>
                        <th style="min-width:78px;max-width:90px;" nowrap="nowrap" class="even text-ellipsis" title="Half Time Over/Under">1H. O/U</th>
                        <th style="min-width:48px;max-width:60px;" nowrap="nowrap" class="even text-ellipsis" title="Half Time 1X2">1H. 1X2</th>
                        <th width="1%" nowrap="nowrap"></th>
                     </tr>
                  </thead>
                  <tbody ng-repeat-start="league in upleagues">
                     <tr id="l_3" valign="middle" style="cursor:pointer">
                        <td class="tabtitle"></td>
                        <td colspan="8" class="tabtitle"><span title="Add My Favorite"><span id="fav_3" class="iconOdds favorite"></span></span><% ::league.name %></td>
                        <td colspan="1" class="tabtitle" align="right">
                           <a ng-class="{'disable': loading.upleagues}" loading="loading.upleagues" on-refresh="onrefreshUpcoming" refresh-item type="inplay" number='20' name="btnRefresh_D" class="btnIcon right" style="" title="Trực tiếp">
                           </a>
                        </td>
                     </tr>
                  </tbody>
                  <tbody class="hover-yello" ng-repeat-end ng-repeat="event in league.events" league-name="league.name" event="event" event-item>
                  </tbody>
             </table>
         </div>
    </div>
    </div>
    <div>
        <ul class="footer-menu">
            <li><a target="DF_Information">Cách sử Dụng</a></li>
            <li style="display: none">|</li>
        </ul>
        <div style="width:780px; font-size: 9px; font-family: Arial; color: #666666; text-align: center; line-height: 45px;">© Copyright 2018. All Rights Reserved.</div>
    </div>
    <script type="text/javascript">
        var item = "{{$req->ref}}"
        if (item == 'number_game') {
            location = '/bingo';
        }
    </script>
</body></html>