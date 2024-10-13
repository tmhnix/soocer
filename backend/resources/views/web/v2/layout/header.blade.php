<script language="JavaScript" type="text/javascript">
var strMonth = new Array('Tháng1', 'Tháng2', 'Tháng3', 'Tháng4', 'Tháng5', 'Tháng6', 'Tháng7', 'Tháng8', 'Tháng9', 'Tháng10', 'Tháng11', 'Tháng12');
var year = 2018;
var month = 3;
var day = 11;
var hrs = 23
var min = 1;
var sec = 51;
var lbl_private_message = "; <font color=green>Tin Nhắn Cá Nhân: </font>";
var pubmsg = "Attn:[E-Sports] Due to Player [Ggoong (Yu Byeong Jun)] did not participate, [League of Legends - LPL Spring (Player Kills on Map 2) - 11/3], all bets taken are considered REFUNDED. Parlay counted as one(1). Thank you!";
var primsg = "";
var count = 0;
var newmsg = "";//"Tin Nhắn";
var lbl_close = "ĐÓNG";
var _gmtTxt = "+8";
var res_SearchTeamName = "Search Team";
var current = new Date(new Date().toLocaleString("en-US", {timeZone: "Asia/Singapore"}));
Synctime(current.getFullYear(), current.getMonth() + 1, current.getDate(), current.getHours(), current.getMinutes(), current.getSeconds());
function getCount() {
  return count;
}

function clock(){
  sec++
  if (sec==60) {
    sec=0;
    min++;
  }
  if (min==60) {
    min=0;
    hrs++;
  }
  if (hrs==24) {
    hrs=0;
    sec=0;
    min=0;
    day++;
  }
  if (min<10) {
    strmin="0" + min
  }
  else
  {
    strmin=min
  }
  if (sec<10) {
    strsec="0" + sec
  }
  else
  {
    strsec=sec
  }

  if(!isDate(year,month,day))    //to next month
  {
    month++;
    day=1;
  }
  if(!isDate(year,month,day))    //to next year
  {
    year++;
    month=1;
    day=1;
  }

  if (hrs>=12) {
    stra="PM";
  }
  else {
    stra="AM"
  }
  if (hrs>=12) {
    strhrs=hrs-12
  }
  else {
    strhrs=hrs
  }
  var str = strhrs + ":" + strmin + ":" + strsec + " " + stra + "&nbsp;" + strMonth[month-1] + " " + day + ", " + year + " GMT "+_gmtTxt;
  var ttt = document.getElementById("clock");
  ttt.innerHTML = str;
}
setInterval("clock()",1000);
function Synctime(p_year,p_month,p_day,p_hour,p_min,p_sec)
{
  year = p_year;
  month = p_month;
  day = p_day;
  hrs = p_hour;
  min = p_min;
  sec = p_sec;
}

function isDate(TDY,TDM,TDD) //input 3 string
{   
  var BegDate = new Date(parseFloat(TDY)+"/"+TDM+"/"+TDD);  
  if (BegDate.getYear()<200) 
    var TBegYear=BegDate.getYear()+1900
  else var TBegYear=BegDate.getYear()
  if (TBegYear!=parseFloat(TDY) || BegDate.getMonth()+1!=parseFloat(TDM) || BegDate.getDate()!=parseFloat(TDD)) 
    return false; 
  else return true;     
}

function fncLogout() {
    window.localStorage.clear();
    window.location.href = '/logout';
}

</script>
<style type="text/css">
	[lang="vn"] .header-expand .logo {
            background-image: url("assets/web/images/v2/logo.svg?v=2") !important;
        }
</style>
<div id="header" class="header-showFull" ng-controller="TopMenuController">
	<header class="header-expand" >
		<noscript ></noscript>
		<div class="header-belt" >
			<div class="logo " ></div>
			<div class="header-belt-main" >
				<div class="header-belt-main-tool" >
					<div class="messages" >
						<div class="messages-marquee" >
							<script type="text/javascript">
								var intervals = [0, -16, -33, -49, -64, -81];
								var position = 0;
								setInterval(function () {
									position ++;
									if (position >= intervals.length) {
										position = 0;
									}
									console.log(position);
									$('.messages-marquee-text').css('transform', 'translateY('+intervals[position]+'px)')
								}, 4000);
							</script>
							<div class="messages-marquee-text" data-reactid=".0.1.1.0.0.0.0" style="transform: translateY(0px); transition-duration: 600ms; transition-timing-function: ease;">
								<span style="color:#e5e7ee;"> Do gần đây công ty phát hiện nhiều thành viên liên quan các loại hình thức cá cược bất thường khác nhau hoặc Hành vi gian lận ( Đánh hàng theo nhóm , Đánh hàng sập giá, cá cược theo nhóm , buôn com ,sử dụng phần mềm cá cược, bất kỳ hành vi nào ảnh hưởng đến hoạt động bình thường của công ty vv...) Công ty thông báo đến quý  thành viên , nếu quý thành viên nào bị công ty phát hiện và phán quyết rằng có cá cược bất thường ảnh hưởng tới hoạt động bình thường của công ty , Công ty có quỵền hủy các vé cược bất thường đó , đồng thời công ty sẽ không chịu trách nhiệm tất cả những thiệt hại gây ra ! Xin cám ơn quý khách . 	</span>
								<br >
								<span style="color:#e5e7ee;">Do gần đây công ty phát hiện nhiều thành viên liên quan các loại hình thức cá cược bất thường khác nhau hoặc Hành vi gian lận ( Đánh hàng theo nhóm , Đánh hàng sập giá, cá cược theo nhóm , buôn com ,sử dụng phần mềm cá cược, bất kỳ hành vi nào ảnh hưởng đến hoạt động bình thường của công ty vv...) Công ty thông báo đến quý  thành viên , nếu quý thành viên nào bị công ty phát hiện và phán quyết rằng có cá cược bất thường ảnh hưởng tới hoạt động bình thường của công ty , Công ty có quỵền hủy các vé cược bất thường đó , đồng thời công ty sẽ không chịu trách nhiệm tất cả những thiệt hại gây ra ! Xin cám ơn quý khách . 	</span>
							</div>
						</div>
						<div class="messages-rightArea" >
							<div class="message icon-message" title="Tin Nhắn Cá Nhân" ></div>
							<div class="alertArea" >
								<div class="alert hiddenElement" ></div>
							</div>
						</div>
					</div>
					<div class="dropdown tool language" >
						<div class="selected" title="Tiếng Việt" >Tiếng Việt</div>
						<div class="dropdownPanel" >
							<div class="content" >English</div>
							<div class="content" >繁體中文</div>
							<div class="content" >日本語</div>
							<div class="content" >Tiếng Việt</div>
						</div>
					</div>
					<a href="javascript:void(0)" class="logout" onclick="fncLogout()" title="Đăng Xuất" >Đăng Xuất</a>
				</div>
				<ul class="nav-main nav-main_noBottomRadius" >
					<li id="TopMenuSport" class=" active" >
						<span class="" style="color:#d45549" >Thể Thao</span>
					</li>
					<li id="TopMenuVirtualSportGroup" class="" >
						<span class="" >Thể Thao Ảo</span>
						<ul class="nav-main-sub" >
							<li id="TopMenuVirtualSport" class="" >
								<span class="nav-main-sub-Item" >Thể Thao Ảo</span>
							</li>
							<li id="TopMenuBVSL" class="" >
								<span class="nav-main-sub-Item" >Giải đấu Bóng đá Ảo</span>
								<span class="smallBtn flexible icon-new" >Mới</span>
							</li>
							<li id="TopMenuBVSL" class="" >
								<span class="nav-main-sub-Item" >Quốc gia Bóng đá Ảo</span>
								<span class="smallBtn flexible icon-new" >Mới</span>
							</li>
						</ul>
					</li>
					<li id="TopMenuVirtualSportGroup" class="" >
						<span class="" >Thể Thao Điện Tử</span>
					</li>
					<noscript ></noscript>
					<li id="TopMenuNumberGame" style="display:none" class="" >
					    <div class="nav-mark-new" >Mới</div>
						<span class="" ><a style="color: #545454; text-decoration: none;" href="{!! route('web.number_game') !!}">Number Game</a></span>
						<!--{!! route('web.number_game') !!}-->
					</li>
					<li id="TopMenuCasinoGroup" class="" >
						<span class="" >Live Casino</span>
						<ul class="nav-main-sub" >
							<noscript ></noscript>
							<li id="TopMenuGD" class="" >
								<span class="nav-main-sub-Item" >Gold Deluxe</span>
							</li>
							<li id="TopMenuAllBet" class="" >
								<span class="nav-main-sub-Item" >Allbet</span>
							</li>
						</ul>
					</li>
					<li id="TopMenuGamingGroup" class="" >
						<span class="" >Sòng bạc</span>
						<ul class="nav-main-sub" >
							<li id="TopMenuCasino" class="" >
								<span class="nav-main-sub-Item" >Trò chơi</span>
							</li>
							<li id="TopMenuGG" class="" >
								<span class="nav-main-sub-Item" >Bắn cá</span>
							</li>
						</ul>
					</li>
					<li id="TopMenuKenoGroup" class="" >
						<span class="" >Keno/Xổ số</span>
						<ul class="nav-main-sub" >
							<li id="TopMenuKeno" class="" >
								<span class="nav-main-sub-Item" >Keno</span>
							</li>
							<li id="TopMenuKenoLottery" class="" >
								<span class="nav-main-sub-Item" >Xổ số</span>
								<span class="smallBtn flexible icon-new" >Mới</span>
							</li>
						</ul>
					</li>
					<li id="TopMenuN7" class="" >
						<div class="nav-mark-new" >Thuần Việt</div>
						<span class="" >Cổng Game SABA</span>
					</li>
					<noscript ></noscript>
				</ul>
			</div>
		</div>
		<div class="header-topBar" >
			<div class="header-time" id="clock" >09:18:23 AM Apr 24, 2018 GMT +8</div>
			
			<div class="header-search" >
				<input class="header-search-input" id="searchTeamTxt" placeholder="Tìm Kiếm Đội" >
				<div id="searchTextClear" title="Xóa nội dung" class="smallBtn inactive icon-clear hiddenElement" ></div>
				<div class="header-search-button icon-search" title="Tìm kiếm" ></div>
				<div id="searchTeamAlertLength" class="hint-absolute hiddenElement" >
					<div title="" class="glyphIcon accent lineCircle-accent icon-warning" ></div>
					<div class="content" >Sử dụng 3 ký tự hoặc nhiều hơn để tìm kiếm</div>
				</div>
				<div id="searchTeamAlertNoResult" class="hint-absolute hiddenElement" >
					<div title="" class="glyphIcon accent lineCircle-accent icon-warning" ></div>
					<div class="content" >No results found</div>
				</div>
			</div>
			<div class="header-dataArea" >
				<!-- <div id="betList" ng-click="goBetList()" class="data icon-betList" title="Bảng Cược" > -->
				<div id="betList" ng-click="goBetList()" class="data" title="Bảng Cược" >
					<span class="data-text" >Bảng Cược</span>
				</div>
				<div id="allStatement" onclick="window.open('{!! route('web.statement') !!}')" class="data" title="Sao Kê" >
					<span class="data-text">Sao Kê</span>
				</div>
				<div id="result" onclick="window.open('{!! route('web.resultFrame') !!}')" class="data" title="Kết quả">
					<span class="data-text">Kết quả</span>
				</div>
				<div id="preferences" onclick="window.open('{!! route('web.profileChangePwd') !!}')" class="data" title="Tùy thích/Tự Chọn" >
					<span class="data-text">Tùy thích/Tự Chọn</span>
				</div>
			</div>
		</div>
	</header>
</div>
