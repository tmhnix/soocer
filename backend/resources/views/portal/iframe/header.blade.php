<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Header</title>
<link rel="stylesheet" href="{{ elixir('portal/css/all.css') }}"/>

<style type="text/css">
#marqueeMessage{
    position: absolute;
    display: inline-block;
    top: 5px;
    left: 245px;
    right: 20px;
    overflow: hidden;
    height: 16px;    
}    
#scroller{
    position: absolute;
    white-space: nowrap;
}
.HeaderMenu{
    position: relative;
}
</style>
<script type="text/javascript">
function time() {
   var today = new Date();
   var dd = today.getDate();
   var mm = today.getMonth()+1; //January is 0!
   var yyyy = today.getFullYear();
   var h=today.getHours();
   var m=today.getMinutes();
   var s=today.getSeconds();
   var p=' AM';
   if (h>11)
   {
        p = ' PM';
   }
    if (h>12)
   {
        h = h-12; 
   }
   m=checkTime(m);
   s=checkTime(s);
   nowTime = h+":"+m+":"+s;
   if(dd<10)
   {
       // dd='0'+dd
   } 
   if(mm<10)
   {
       // mm='0'+mm
   } 
   today = 'Tháng '+ mm+' '+dd+', '+yyyy;

   tmp='<span class="date">'+ nowTime + p +' '+today+' GMT +7</span>';

   document.getElementById("clock").innerHTML=tmp;

   clocktime=setTimeout("time()","1000","JavaScript");
   function checkTime(i)
   {
      if(i<10){
     i="0" + i;
      }
      return i;
   }
}
</script>

</head>
<body onload="time(); SelectTopMenu()">
@include('portal.messsage')
<div id="banner_main">
  <div id="logo">
    <div id="text_logo"> <a href="javascript:true" target="main">
    	<img id="logoProfileImg" src="/assets/admin/images/avatar_default.png" alt="" height="48" width="48" title="Nhấn vào đây để Sửa Hình Đại Diện" style="border: 0px solid white;position: absolute; top: 13px; left: 10px; z-index: 1"> </a> <img src="icon_user_bg.png" style="position: absolute; top: 0px; left: 0px; z-index: -1; padding-left: 5px;" atl=""> <span class="userName" style="cursor: pointer;">{{$authUser->username}}</span> <br>
      <div style="font-size: 11px; padding-top: 5px; color: Black"> <span id="spanNickNameID">Biệt danh: </span>
                <a href="javascript:true" class="linkConfigNow" id="linkNickNameID" target="main"> <span style="white-space: nowrap; font-weight: bold"><span id="labelNickname">Cấu hình ngay</span> <img src="icondown.gif" width="10px" height="7px" border="0" id="iconSetNickname" style="display: none"></span></a>
              </div>
    </div>
  </div>
  <div id="banner" >
    <div id="language"><a id="logout" href="javascript:top.age.SignOut()">Đăng Xuất</a> <a id="Help" title="Giúp đỡ" href="##" target="_blank">Giúp đỡ</a>
      <div id="standLine">&nbsp;</div>
      <div id="language_box">
        <div class="langFlag langFlag_vi">
          <select id="selLanguage" style="margin-top: -1px">
            <option value="vi-VN">Tiếng Việt</option>
          </select>
        </div>
      </div>
      <div id="clock"><span class="date">6:42:28 AM Tháng 3 23, 2018 GMT +7</span></div>
    </div>
    <div id="button" style="background: white;">
      <!--<div id="g_left">&nbsp;</div>
      <div id="g_right">&nbsp;</div>-->
      <div id="button_main" style="background:white" >
        <div id="Popup_top" style="display: none;">
          <div id="Popup_line"><a onclick="javascript:ShowPopupTop(false)" style="cursor: pointer;"><img alt="Close" src="icon_close.jpg" width="14px" height="14px" border="0" title="Close"></a></div>
          <div style="height: 60px; width: auto;">
            <div id="Popup_contents" class="messageBlock"></div>
            <div id="Popup_contents2" class="messageBlock"></div>
          </div>
        </div>
        <ul class="HeaderMenu">
          <li><a id="balance" class="active" href="javascript:Change2Menu('{!! route('portal.agent.agentHome') !!}', 'home')">Trang chủ</a></li>
          <li><a id="transfer" href="javascript:Change2Menu('{!! route('portal.agent.chuyenkhoan') !!}', 'chuyenkhoan')" class="">Chuyển khoản</a></li>
          <li><a id="changepass" href="javascript:Change2Menu('{!! route('portal.agent.secure') !!}', 'secure')">Bảo mật</a></li>
          <div id="marqueeMessage">
        <span id="scroller"  >
            <span id="movebets-message" class="maquee movebets-message"></span>
            <span id="public-message" class="maquee live-message" messagetype="2">
                <marquee behavior="scroll" direction="left"><font color="red">Do gần đây công ty phát hiện thành viên của nhiều đại lý liên quan các loại hình thức cá cược bất thường khác nhau hoặc Hành vi gian lận ( Đánh hàng theo nhóm. Đánh hàng sập giá, cá cược theo nhóm , buôn com ,sử dụng phần mềm cá cược, bất kỳ hành vi nào ảnh hưởng đến hoạt động bình thường của công ty vv...) Công ty thông báo đến quý đại lý , nếu bất kỳ thành viên nào bị công ty phát hiện và phán quyết rằng có cá cược bất thường ảnh hưởng tới hoạt động bình thường của công ty , Công ty sẽ hủy vé cược bất kể cược đó đã có thắng thua , trước giờ quyết toán của công ty mà không cần thông báo trước , đồng thời , công ty sẽ không chịu trách nhiệm tất cả những thiệt hại gây ra ! Vui lòng chuyển thông tin này cho cấp dưới của bạn, Xin cám ơn. </font>. </span></marquee>
            <span id="private-message" class="maquee live-message"></span>
        </span>
    </div>
        </ul>
        
      </div>
      <!--<div id="news_main">-->
      <!--  <table class="width-100per">-->
      <!--    <tbody>-->
      <!--      <tr> -->
      <!--        <td class="news">-->
      <!--          <div id="text_news_out" onclick="#">-->
      <!--            <div id="text_news">-->
      <!--              <div id="scroller">-->
      <!--                  <marquee><a id="topnews" href="#">Dear Valued Customer:[Keno] Kindly be informed that we have upgraded our display on "Road Statistic" located below every product games table. It is clickable to show more games type (B/S, O/E, D/T, U/D &amp; 5E) road statistic. Thank you! </a></marquee>-->
      <!--              </div>-->
      <!--            </div>-->
      <!--          </div></td>-->
      <!--        <td><div id="button_top"><a id="privateMsgLnk" class="b_top" href="#">&nbsp;&nbsp;Tin nhắn cá nhân(0)</a></div></td>-->
      <!--      </tr>-->
      <!--    </tbody>-->
      <!--  </table>-->
      <!--</div>-->
    </div>
  </div>
</div>
<div id="divPopupAd" style="display: none">Temporary need this tag for other pages work</div>
<script type="application/javascript" src="{{ elixir('portal/js/core.js') }}"></script>

</body>
</html>