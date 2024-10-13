var bettingLimit = null;
bettingLimit = new Fanex.PTEngine.BettingLimit(betting);
var bettingLimitContainer = $('bettingLimitContainer');
bettingLimit.Render(bettingLimitContainer);

var BetSettingModel = function () {
    this.saveCustomer = function () {
        if (!bettingLimit.Validate(_page ? _page.defaultMinBetValue : undefined)) return;
        if (bettingLimit) {
            betting = bettingLimit.Save();
            var text = JSON.stringify(betting);
            $("txtCustomerObject").value = text;
            var params = ajax.CreateParams('txtCustomerObject');

            function OnComplete(result) {
                var errMsg = result.errMsg;
                if (result.errCode == 0) {
                    age.UnLock();
                    ageMsg.Show(errMsg, 1);
                    if (window.top.customerListNew) {
                        top.successfulUpdatingCallbackAndReloadMainFrame();
                    }
                    else {
                        window.top.reloadPopUpSetting(3000);
                    }
                    window.scroll(0, 0);
                    return;
                }
                else {
                    age.UnLock();
                    ageMsg.Show(errMsg);
                    window.scroll(0, 0);
                    return;
                }
            }

            age.ReloadPage(30000);
            var submitUrl = "Handlers/UpdateBetSetting.ashx?targetCustId=" + context.targetCustId;

            ajax.PostJSON(
                submitUrl,
                params,
                OnComplete
            );
        }
    }
}

ko.applyBindings(new BetSettingModel());
RegisterStartUp(function () {
    Fanex.Customer.HideTitle();
});