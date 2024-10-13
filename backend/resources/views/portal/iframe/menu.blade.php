<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>
      Menu
    </title>
    <link rel="stylesheet" href="{{ elixir('portal/css/all.css') }}"/>
    <style type="text/css">
    #leftpanewrapper a.no-action {
      /*color: #d2d2d2;*/
      /*display: none;*/
    }
    .Bleft_Sub{
      cursor: pointer;
    }
    #leftpane{
      margin-top: 5px;
    }
    .icons {
      position: relative;
      left: -22px;
      margin-right: -18px;
    }
    .Bleft_Parent0 {
    display: block;
    width: 100%;
    line-height: 25px;
    font-weight: bold;
    padding: 9px 8px 1px 0px;
    }
    a.Bleft_Parent.nosub:after {
        content: "";
    }
    </style>
  </head>
  <body>
  <div id="leftpanewrapper">
      <script>
      function ChangeToMenu(url) {
        top.main.location =  url;
      }
      function MenuToggle(index) {
        var subMenu = $('div' + index);
        subMenu.style.display = (subMenu.style.display == 'none') ? 'block' : 'none';
        var aMenu = $('a' + index);
        aMenu.className = (aMenu.className == 'Bleft_Parent') ? 'Bleft_ParentAc' : 'Bleft_Parent';
      }
    </script>
    <div id="tab_menu">
      <div id="tab_menu_m">
        <a class="tab_menu01AC" style="cursor: default;">Menu</a>
      </div>

      <div id="tab_menu_L">
        <a class="tab_menu02" style="color:white" href="javascript:true;" id="lnkAccInfo" onclick="" target="menu"><span id="lblAccInfo">Thông tin</span></a>
      </div>
    </div>

    <div id="leftpane">
      <div id="button_left">
        <div class="Bleft_Parent0">
          <a class="Bleft_Parent" href="javascript:MenuToggle('2');" id="a2">
            <span id="menu2">Báo cáo</span></a>

          <div id="div2" style="display: none">
            <div class="Bleft_Sub0" id="SubMenu">
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.member_chua_xu_ly') !!}')" id="" target="main">Số tiền chưa xử lý</a>
              <a class="Bleft_Sub "  id="" onclick="" target="main">Thắng thua của thành viên</a>
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.win_lose_details') !!}')" id="" target="main">Chi tiết thắng thua</a>
              <a class="Bleft_Sub"  id="" onclick="" target="main">Chi tiết thắng thua theo trận</a>
              <a class="Bleft_Sub"  id="" onclick="" target="main">Phân tích hệ số thắng thua</a>
              <a class="Bleft_Sub"  id="" onclick="" target="main">Thắng thua hiện tại của Casino</a>
              <a class="Bleft_Sub"  id="" onclick="" target="main">Thắng thua hiện tại của Bingo</a>
              <a class="Bleft_Sub"  id="" onclick="" target="main">Thắng thua theo trận</a>
              <a class="Bleft_Sub"  id="" onclick="" target="main">Thắng thua theo loại cược</a>
              <a class="Bleft_Sub"  id="" onclick="" target="main">Hoa hồng theo loại cược</a>
              <a class="Bleft_Sub"  id="" onclick="" target="main">Hoa hồng cho Racing</a>
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.cancel_void') !!}')" id="">Cược hủy/từ chối</a>
              <a class="Bleft_Sub"  id="LastBetMonitoring" onclick="ChangeToMenu('{!! route('portal.agent.bets_runing') !!}')" target="main">Giám sát lượt cược gần nhất</a>
              <a class="Bleft_Sub"  id="" onclick="" target="main">Sao kê</a>
              <a class="Bleft_Sub"  id="" onclick="" target="main">Kết quả</a>
            </div>
          </div>
        </div>
      </div>

      <div id="button_left">
        <div class="Bleft_Parent0">
          <a class="Bleft_Parent" href="javascript:MenuToggle('4');" id="a4"><span id="menu4">Thông tin thành viên</span></a>

          <div id="div4" style="display: none;">
            <div class="Bleft_Sub0" id="SubMenu">
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.createMember') !!}')" id="" target="main">Thêm thành viên</a>
              @if(!$authUser->isSub())
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.listSubs') !!}')"  id="subacc" target="main">Tài khoản phụ</a>
              @endif
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.listMember') !!}')" id="" target="main">Danh sách thành viên</a>
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.CreditBalanceList')!!}')" id="" target="main">Hạn mức /Tín dụng</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Position Taking (%)</a>
              <a class="Bleft_Sub no-action" id="cs" onclick="" target="main">(%) PT của Casino</a>
              <a class="Bleft_Sub no-action" id="bgPT" onclick="" target="main">(%) PT của Bingo</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Hoa hồng của thành viên</a>
            </div>
          </div>
        </div>
      </div>
      <div id="button_left">
        <div class="Bleft_Parent0">
          <a class="Bleft_Parent" href="javascript:MenuToggle('6');" id="a6">
            <span class="icons icon-statistics"></span>
            <span id="menu6"> Danh sách cược</span></a>
          <div id="div6" style="display: none;">
            <div class="Bleft_Sub0" id="SubMenu">
              <a class="Bleft_Sub no-action" id="subacc" target="main">Cược mới nhất</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Cược bị hủy</a>
              <a class="Bleft_Sub no-action" id="cs" onclick="" target="main">Tỉ số chính xác</a>
              <a class="Bleft_Sub no-action" id="bgPT" onclick="" target="main">Cá cược tổng hợp</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Giữ sạch lưới</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Nhân đôi cơ hội</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Cả hai/Một/Không Đội Nào Ghi Bàn</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">To win to nil</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Cược Chấp 3 Chiều</a>
            </div>
          </div>
        </div>
      </div>
      <div id="button_left">
        <div class="Bleft_Parent0">
          <a class="Bleft_Parent" href="javascript:MenuToggle('7');" id="a7">
            <span class="icons icon-contactus"></span>
            <span id="menu7"> Tổng cược và dự đoán</span></a>
          <div id="div7" style="display: none;">
            <div class="Bleft_Sub0" id="SubMenu">
              <a class="Bleft_Sub no-action" id="subacc" target="main">Cược chấp/Tài Xỉu/Trực tuyến</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Moneyline</a>
              <a class="Bleft_Sub no-action" id="cs" onclick="" target="main">Lẻ/Chẵn + 1x2 + DND</a>
              <a class="Bleft_Sub no-action" id="bgPT" onclick="" target="main">Tổng Số Bàn Thắng</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Cược Thắng</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Hiệp 1/Toàn trận</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Bàn Thắng Đầu/Cuối</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Home/Draw/Away No Bet</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Number Game</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Bullfighting</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">1 X 2</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Score Map</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Lô Đề</a>
            </div>
          </div>
        </div>
      </div>
      <div id="button_left">
        <div class="Bleft_Parent0">
          <a class="Bleft_Parent nosub" href="javascript:MenuToggle('8');" id="a8">
            <span class="icons icon-refresh"></span>
            Chuyển khoản
          </a>
        </div>
      </div>
      <div id="button_left">
        <div class="Bleft_Parent0">
          <a class="Bleft_Parent" href="javascript:MenuToggle('9');" id="a9">
            <span class="icons icon-hamburger"></span>
            <span id="menu9"> Nhật Ký</span></a>
          <div id="div9" style="display: none;">
            <div class="Bleft_Sub0" id="SubMenu">
              <a class="Bleft_Sub no-action" id="subacc" target="main">Thiết lập</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Trạng thái</a>
              <a class="Bleft_Sub no-action" id="cs" onclick="" target="main">Tiến dụng</a>
              <a class="Bleft_Sub no-action" id="bgPT" onclick="" target="main">Đăng nhập</a>
            </div>
          </div>
        </div>
      </div>
      <div id="button_left">
        <div class="Bleft_Parent0">
          <a class="Bleft_Parent" href="javascript:MenuToggle('10');" id="a10">
            <span class="icons icon-message"></span>
            <span id="menu10">Thông báo</span></a>
          <div id="div10" style="display: none;">
            <div class="Bleft_Sub0" id="SubMenu">
              <a class="Bleft_Sub no-action" id="subacc" target="main">Thông dụng</a>
              <a class="Bleft_Sub no-action" id="" onclick="" target="main">Special</a>
              <a class="Bleft_Sub no-action" id="cs" onclick="" target="main">Cập nhật</a>
              <a class="Bleft_Sub no-action" id="bgPT" onclick="" target="main">Tin nhắn cá nhân</a>
            </div>
          </div>
        </div>
      </div>
    
      @if($authUser->can('edit_keo_*'))
      <div id="button_left">
        <div class="Bleft_Parent0">
          <a class="Bleft_Parent" href="javascript:MenuToggle('5');" id="a3">
            <span id="menu5">Quản trị</span></a>

          <div id="div5" style="display: none;">
            <div class="Bleft_Sub0" id="SubMenu">
              @if($authUser->can('edit_keo_treo'))
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.event_pending') !!}')" id="" target="main">Xử lý kèo treo</a>
              @endif
              @if($authUser->can('edit_keo_treo'))
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.bet_pending') !!}')" id="" target="main">Xử lý kèo cược (bet) treo</a>
              @endif
              @if($authUser->can('edit_keo_dang_da'))
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.bets_all') !!}')" id="" target="main">Sửa kèo đang đá</a>
              @endif
              @if($authUser->can('edit_keo_sao_ke'))
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.bets_in_saoke') !!}')" id="" target="main">Sửa kèo trong sao kê</a>
              @endif
              @if($authUser->can('edit_keo_logs'))
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.logs') !!}')" id="" target="main">Lịch sử hoạt động</a>
              @endif
              @if($authUser->isAdmin())
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.match.list') !!}')" id="" target="main">Danh sách trận ảo</a>
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.delete') !!}')" id="" target="main">Xóa dữ liệu</a>
              <a class="Bleft_Sub" onclick="ChangeToMenu('{!! route('portal.agent.alerts') !!}')" id="" target="main">Thông báo mật</a>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
  <script type="application/javascript" src="{{ elixir('portal/js/core.js') }}"></script>
  </div>
</body>
</html>