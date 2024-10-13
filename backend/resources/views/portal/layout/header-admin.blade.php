<div id="banner_main">
  <div id="logo">
    <div id="text_logo"> <a href="javascript:true" target="main">
    	<img src="/assets/admin/images/icon_user_bg.png" style="position: absolute; top: 0px; left: 0px; z-index: -1; padding-left: 5px;" atl=""> <span class="userName" style="cursor: pointer;">{{$authUser->username}}</span> <br>
      <div style="font-size: 11px; padding-top: 5px; color: Black"> <span id="spanNickNameID">Biệt danh: </span>
                <a href="javascript:true" class="linkConfigNow" id="linkNickNameID" target="main"> <span style="white-space: nowrap; font-weight: bold"><span id="labelNickname">Cấu hình ngay</span></span></a>
              </div>
    </div>
  </div>
  <div id="banner">
    <div id="language"><a id="logout" href="{!! route('portal.logout') !!}">Đăng Xuất</a> <a id="Help" title="Giúp đỡ" href="##" target="_blank">Giúp đỡ</a>
      <div id="standLine">&nbsp;</div>
      <div id="language_box">
        <div class="langFlag langFlag_vi">
          <select id="selLanguage" style="margin-top: -1px">
            <option value="vi-VN">Tiếng Việt</option>
          </select>
        </div>
      </div>
    </div>
    <div id="button">
      <div id="button_main">
        <ul class="HeaderMenu">
          <li><a id="balance" class="active" href="{!! route('portal.admin.home') !!}">Trang chủ</a></li>
          <li><a id="transfer" href="javascript:Change2Menu('chuyenkhoan.php')" class="">Chuyển khoản</a></li>
          <li><a id="changepass" href="javascript:Change2Menu('baomat.php')">Bảo mật</a></li>
          <li><a id="viewlog" href="javascript:true">Nhật ký</a></li>
        </ul>
        <div id="clock"><span class="date">11:46:59 PM Tháng 1 19, 2018 GMT +7</span></div>
      </div>
      <div id="news_main">
        <div class="error">
          @if (isset($successMsg)))
               <p>{{$successMsg}}</p>
              @elseif (\Session::has('successMsg'))
              <p style="color: green">{!! \Session::get('successMsg') !!}</p>
              @endif
              @if (isset($errorMsg))
              <p>{{$errorMsg}}</p>
              @elseif (\Session::has('errorMsg'))
              <p>{!! \Session::get('errorMsg') !!}</p>
              @endif
        </div>
        <!-- <div id="button_top"><a id="privateMsgLnk" class="b_top" href="#">&nbsp;&nbsp;Tin nhắn cá nhân(0)</a></div> -->
<!--         <table class="width-100per">
          <tbody>
            <tr>
             <td>
               
             </td> 
              <td class="news">
                <div id="text_news_out" onclick="#">
                  <div id="text_news">
                    <div id="scroller">
                        <marquee><a id="topnews" href="#">Dear Valued Customer:[Keno] Kindly be informed that we have upgraded our display on "Road Statistic" located below every product games table. It is clickable to show more games type (B/S, O/E, D/T, U/D &amp; 5E) road statistic. Thank you! </a></marquee>
                    </div>
                  </div>
                </div></td>
              <td><div id="button_top"><a id="privateMsgLnk" class="b_top" href="#">&nbsp;&nbsp;Tin nhắn cá nhân(0)</a></div></td>
            </tr>
          </tbody>
        </table> -->
      </div>
    </div>
  </div>
</div>