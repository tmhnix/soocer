<div id="leftpanewrapper">
<div id="tab_menu">
   <div id="tab_menu_m">
      <a class="tab_menu01AC" style="cursor: default;">Menu</a>
   </div>
   <div id="tab_menu_L">
      <a class="tab_menu02" style="color:white" href="javascript:true;" id="lnkAccInfo" onclick="" target="menu"><span id="lblAccInfo">Thông tin</span></a>
   </div>
</div>
<div id="leftpane">
   <div class="top_left"></div>
   <div id="button_left">
      <div class="Bleft_Parent0">
         <a class="Bleft_Parent" href="javascript:MenuToggle('2');" id="a2"><span id="menu2">Báo cáo</span></a>
         <div id="div2" style="display: none;">
            <div class="Bleft_Sub0" id="SubMenu">
               <a class="Bleft_Sub" onclick="ChangeToMenu('chitietthangthua.php')" id="" target="main">Chi tiết thắng thua của thành viên</a>
               <a class="Bleft_Sub" href="../agent/chua_xu_ly.php" id="" target="main">Số tiền chưa xử lý của Member</a>
               <a class="Bleft_Sub" onclick="ChangeToMenu('../agent/cuochuy.php')" id="">Cược hủy/từ chối</a>
               <a class="Bleft_Sub" href="javascript:true;" id="LastBetMonitoring" onclick="ChangeToMenu('../agent/cuoc_chua_tinh.php')" target="main">Giám sát lượt cược gần nhất</a>
            </div>
         </div>
      </div>
   </div>
   <div id="button_left">
      <div class="Bleft_Parent0">
         <a class="Bleft_ParentAc"><span id="menu4">Thông tin thành viên</span></a>
         <div id="div4" style="display: block;">
            <div class="Bleft_Sub0"  id="SubMenu">
               <a class="Bleft_Sub" href="{!! route('portal.agent.member.list') !!}">Danh sách thành viên</a>
               <a class="Bleft_Sub" href="{!! route('portal.agent.member.create') !!}">Thêm member</a>
               <a class="Bleft_Sub">Hạn mức /Tín dụng</a>
               <a class="Bleft_Sub">Tài khoản phụ</a>
               <a class="Bleft_Sub">Position Taking (%)</a>
               <a class="Bleft_Sub">(%) PT của Casino</a>
               <a class="Bleft_Sub">(%) PT của Bingo</a>
               <a class="Bleft_Sub">Hoa hồng của thành viên</a>
            </div>
         </div>
      </div>
   </div>
</div>