<input id="oldMainRootPath" name="oldMainRootPath" type="hidden" value="{{ env('URL_oldMainRootPath') }}">
<input data-val="true" data-val-number="The field OnUserId must be a number."
    data-val-required="The OnUserId field is required." id="onUserId" name="onUserId" type="hidden" value="951135578">
<input id="mainRootPath" name="mainRootPath" type="hidden" value="{{ env('URL_mainRootPath') }}">
<input id="passwordHash" name="passwordHash" type="hidden" value="zpsr">
<input id="howToUseRootPath" name="howToUseRootPath" type="hidden" value="{{ env('URL_howToUseRootPath') }}">
<input id="memberInfoRootPath" name="memberInfoRootPath" type="hidden" value="{{ env('URL_memberInfoRootPath') }}">
<input id="accountInfoRootPath" name="accountInfoRootPath" type="hidden" value="{{ env('URL_accountInfoRootPath') }}">
<input id="subPageAccess" name="subPageAccess" type="hidden" value="[D][L][E][C][B][H][G][A]">
<input data-val="true" data-val-required="The IsInternalWebVPN field is required." id="isInternalWebVPN" name="isInternalWebVPN" type="hidden" value="False">
<input id="currentURLCookieName" name="currentURLCookieName" type="hidden" value="108398198">
<input data-val="true" data-val-required="The IsShowIntroduction field is required." id="isShowIntroduction" name="isShowIntroduction" type="hidden" value="True">
<input id="userLevel" name="userLevel" type="hidden" value="agent">
<input data-val="true" data-val-required="The IsSubAccount field is required." id="isSubAccount" name="isSubAccount" type="hidden" value="True">
<input id="subUserId" name="subUserId" type="hidden" value="1556660">
<input id="userId" name="userId" type="hidden" value="52572250">
<input data-val="true" data-val-required="The IsEnabledOtp field is required." id="isEnabledOtp" name="isEnabledOtp" type="hidden" value="False">
<input id="messageRootPath" name="messageRootPath" type="hidden" value="{{ env('URL_messageRootPath') }}">
<input id="exTotalBetsForecastRootPath" name="exTotalBetsForecastRootPath" type="hidden" value="{{ env('URL_exTotalBetsForecastRootPath') }}">
<input data-val="true" data-val-required="The IsInternal field is required." id="isInternal" name="isInternal" type="hidden" value="0">
<input data-val="true" data-val-required="The RequiredNetworkSpeedCalculation field is required." id="requiredNetworkSpeedCalculation" name="requiredNetworkSpeedCalculation" type="hidden" value="0">
<input data-val="true" data-val-required="The DisableMessages field is required." id="disableMessages" name="disableMessages" type="hidden" value="0">
<input data-val="true" data-val-required="The ShowOldCustomerList field is required." id="showOldCustomerList" name="showOldCustomerList" type="hidden" value="1">
<input data-val="true" data-val-number="The field UMAnnouncementPopupClientIntervalInMinutes must be a number." data-val-required="The UMAnnouncementPopupClientIntervalInMinutes field is required."
    id="UMAnnouncementPopupClientIntervalInMinutes" name="UMAnnouncementPopupClientIntervalInMinutes" type="hidden" value="60">
<div id="announcement-modal" class="modal fade announcement-modal visible-mobile" role="dialog" aria-labelledby="myModalLabel" style="opacity: 1; overflow: visible;">
    <div class="modal-dialog ex-modal">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="icon icon-close close" data-dismiss="modal" aria-label="Đóng"><span
                        aria-hidden="true"></span></button>
                <h4 class="modal-title" id="result-detailt-title"><span class="icon icon-announcements"></span>Thông
                    báo!</h4>
            </div>
            <div class="modal-body" id="announcementModalBody">
                <iframe frameborder="0" allowtransparency="true" marginheight="0" marginwidth="0" scrolling="no"
                    id="annoucement-iframe" src="/admin/Announcement/Popup"></iframe>
            </div>
        </div>
    </div>
</div>
<input id="no-info" name="no-info" type="hidden" value="Thông tin chưa được cập nhật">
<div class="modal fade" id="data-processing-popup" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-float modal-progress" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="icon icon-close close" data-dismiss="modal" aria-label="Đóng"><span
                        aria-hidden="true"></span></button>
                <h4 class="modal-title" id="myModalLabel"><span class="icon-progress"></span>Thông báo xử lý dữ liệu
                </h4>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" aria-labelledby="um-message-popup-label" id="um-message-popup">
    <div class="modal-dialog modal-float modal-maintenance" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="icon icon-close close" data-dismiss="modal" aria-label="Đóng"><span
                        aria-hidden="true"></span></button>
                <h4 class="modal-title" id="um-message-popup-label"><span class="icon-under-maintenance"></span>Thông
                    báo bảo trì</h4>
            </div>
            <div class="modal-body">
                <p>Kính gửi Quý khách hàng,</p>
                <div>Sau đây là lịch bảo trì hệ thống (theo GMT +8) và trong khoảng thời gian này, những tính năng sau
                    tạm thời gián đoạn:</div>
                <ul id="um-message-popup-body"></ul>
                <div>Chúng tôi xin lỗi vì sự bất tiện gây ra.</div>
            </div>
            <div class="modal-footer">
                <label><input type="checkbox" id="chb-um">Không hiển thị lại</label>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/admin/assets/bundles/common/common.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('assets/admin/assets/bundles/site-main/default.min.js') }}" type="text/javascript">
</script>
<script src="{{ asset('assets/admin/site-main/assets/bundles/default-index.min.js') }}"
    type="text/javascript"></script>
<div style="display: none; top: 0px; left: 0px;">
    <div style="width: 100px; height: 100px; position: relative;"></div>
</div>
<script> </script>
<div id="modal-draggable-mask" style="display:none;"></div>
<div role="log" aria-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible">
   
</div>