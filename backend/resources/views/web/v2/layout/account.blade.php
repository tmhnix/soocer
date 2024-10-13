<style type="text/css">
  .personalAccount .heading .icon-refresh {
    float: none;
    position: absolute;
    right: 28px;
    color: #a1a1a1;
  }
</style>
<div ng-controller="AccountV2Controller" tabindex="-1" class="widgetPanel personalAccount" ng-class="{'openContent active': menu.account}">
    <div class="heading icon-account current">
        <div ng-click="menu.account=!menu.account" class="text"><% account.username %></div>
        <div class="floatRight">
   <div ng-class="{'spin': accountSetting.loading}" ng-click="loadInfo()" class="glyphIcon primary icon-refresh" title="Tải Lại"></div>
   <div class="Network" data-tag="tagNetWorkWidget" title="Kết nối mạng" data-open="">
      <div class="glyphIcon icon-widgetCollapse" data-tag="tagGlyphIconButton"></div>
      <div class="Network-btn">
         <div class="iconsymbol-Network iconsymbol-Network--full" data-tag="tagWifiSymbol">
            <svg class="iconsymbol-Network__size" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20">
               <path class="iconsymbol-Network__circle1" d="M2.522 7.443a12.912 12.912 0 0114.961-.02l.851-1.44a14.584 14.584 0 00-16.667.023z"></path>
               <path class="iconsymbol-Network__circle2" d="M3.883 8.736l.854 1.433a8.667 8.667 0 0110.53-.015l.851-1.438a10.308 10.308 0 00-12.235.02"></path>
               <path class="iconsymbol-Network__circle3" d="M6.134 11.45L7 12.904a4.387 4.387 0 016-.009l.865-1.457a6.039 6.039 0 00-7.731.012"></path>
               <path class="iconsymbol-Network__circle4" d="M10.522 16.296l.964-1.544A1.643 1.643 0 0010 13.796a1.643 1.643 0 00-1.486.956l.965 1.544s.26.326.521.326.522-.326.522-.326"></path>
            </svg>
         </div>
      </div>
      <div class="Network-content" data-tag="tagNetWorkContentArea">
         <div class="Network-title">
            <div class="iconsymbol-Network iconsymbol-Network--full" data-tag="tagWifiSymbol">
               <svg class="iconsymbol-Network__size" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20">
                  <path class="iconsymbol-Network__circle1" d="M2.522 7.443a12.912 12.912 0 0114.961-.02l.851-1.44a14.584 14.584 0 00-16.667.023z"></path>
                  <path class="iconsymbol-Network__circle2" d="M3.883 8.736l.854 1.433a8.667 8.667 0 0110.53-.015l.851-1.438a10.308 10.308 0 00-12.235.02"></path>
                  <path class="iconsymbol-Network__circle3" d="M6.134 11.45L7 12.904a4.387 4.387 0 016-.009l.865-1.457a6.039 6.039 0 00-7.731.012"></path>
                  <path class="iconsymbol-Network__circle4" d="M10.522 16.296l.964-1.544A1.643 1.643 0 0010 13.796a1.643 1.643 0 00-1.486.956l.965 1.544s.26.326.521.326.522-.326.522-.326"></path>
               </svg>
            </div>
            Kết nối mạng
         </div>
         <div class="info">Vui lòng chuyển sang dịch vụ mạng được đề xuất</div>
         <div class="Network-item active">
            <div class="txt">Đường 1 - Đang sử dụng</div>
            <div class="iconsymbol-Network iconsymbol-Network--full" data-tag="tagWifiSymbol">
               <svg class="iconsymbol-Network__size" xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20">
                  <path class="iconsymbol-Network__circle1" d="M2.522 7.443a12.912 12.912 0 0114.961-.02l.851-1.44a14.584 14.584 0 00-16.667.023z"></path>
                  <path class="iconsymbol-Network__circle2" d="M3.883 8.736l.854 1.433a8.667 8.667 0 0110.53-.015l.851-1.438a10.308 10.308 0 00-12.235.02"></path>
                  <path class="iconsymbol-Network__circle3" d="M6.134 11.45L7 12.904a4.387 4.387 0 016-.009l.865-1.457a6.039 6.039 0 00-7.731.012"></path>
                  <path class="iconsymbol-Network__circle4" d="M10.522 16.296l.964-1.544A1.643 1.643 0 0010 13.796a1.643 1.643 0 00-1.486.956l.965 1.544s.26.326.521.326.522-.326.522-.326"></path>
               </svg>
            </div>
         </div>
      </div>
   </div>
</div>
    </div>
    <!-- <div class="heading icon-account current" title="TV71B9AC003">
      <div class="text">TV71B9AC003<div class="glyphIcon primary icon-refresh" title="Tải Lại"></div></div>
    </div> -->
    <!-- <div class="creditArea" >
        <div class="infoGroup creditInfo" >
            <div class="infoRow" >
                <div class="infoTitle" title="Hạn Mức" >Hạn Mức</div>
                <div class="infoItem" >
                    <span class="currency">UT</span>
                    <span><% account.wallet | numberPretty:2 %></span>
                </div>
                <div class="glyphIcon primary icon-refresh" ng-class="{'spin': accountSetting.loading}"  title="Tải Lại" ng-click="loadInfo()"></div>
            </div>
        </div>
    </div> -->
    <div class="creditArea">
      <div class="infoGroup creditInfo"><div class="infoRow"><div class="infoTitle" title="Hạn Mức">Hạn Mức</div>
      <div class="infoItem"><span class="currency">UT</span><% account.wallet | numberPretty:2 %></div></div>
      <div class="infoRow"><div class="infoTitle" title="Số dư">Số dư</div>
         <div class="infoItem" ng-class="{'accent': account.profit < 0}">
        <span class="currency">UT</span><% account.profit | numberPretty:2 %></div>
      </div></div></div>

    <div id="AccountList" class="contentArea">
   <div class="mainSection">
      <div class="panelFunction">
         <div class="floatLeft">
            <label title="Chỉ Hạn Mức" class="">
               <input type="checkbox" id="" value="on">
               <div class="checkbox"></div>
            </label>
         </div>
         <div class="floatRight">
            <div class="largeBtn iconOnly icon-preferences"></div>
            <div class="largeBtn iconOnly secondary icon-refresh" ng-click="loadInfo()" ng-class="{'spin': accountSetting.loading}" title=""></div>
         </div>
      </div>
      <div class="detailAccount">
         <div class="infoGroup creditInfo">
            <div class="infoRow">
               <div class="infoTitle" title="Tên Truy Cập">Tên Truy Cập</div>
               <div class="infoItem">
                    <% account.username %>
               </div>
            </div>
            <div class="infoRow">
               <div class="infoTitle" title="Số dư">Số dư</div>
               <div class="infoItem" ng-class="{'accent': account.profit < 0}">
                <% account.profit | numberPretty:2 %>
               </div>
            </div>
            <div class="infoRow">
               <div class="infoTitle" title="Chưa xử lý">Chưa xử lý</div>
               <div class="infoItem">
                <% account.runing_amount_today | numberPretty:2 %>
               </div>
            </div>
            <div class="infoRow">
               <div class="infoTitle" title="Chưa xử lý">Chưa xử lý tồn</div>
               <div class="infoItem">
                <% account.runing_amount_not_today | numberPretty:2 %>
               </div>
            </div>
            <div class="infoRow">
               <div class="infoTitle" title="Net Position">Net Position</div>
               <div class="infoItem">
                  <div class="smallBtn primary icon-help" title="Trợ giúp"></div>
               </div>
            </div>
            <div class="infoRow">
               <div class="infoTitle" title="Hạn Mức">Hạn Mức</div>
               <div class="infoItem">
                <% account.wallet | numberPretty:2 %>
               </div>
            </div>
            <div class="infoRow">
               <div class="infoTitle" title="Hạn Mức Tín Dụng">Hạn Mức Tín Dụng</div>
               <div class="infoItem">
                <% account.credit_line | numberPretty:2 %>
               </div>
            </div>
         </div>
         <div class="infoGroup loginInfo">
            <div class="infoRow">
               <div class="infoTitle" title="Truy cập gần nhất">Truy cập gần nhất</div>
               <div class="infoItem"><% account.last_time_login %></div>
            </div>
            <div class="infoRow">
               <div class="infoTitle" title="Giao Dịch Gần Nhất">Giao Dịch Gần Nhất</div>
               <div class="infoItem"><% account.last_time_bet %></div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>