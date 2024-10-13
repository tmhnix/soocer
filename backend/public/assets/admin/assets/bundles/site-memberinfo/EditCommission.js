﻿if (commission.roleId == 1) {
    $("textBoxDiscountAsian").value = commission.discount;
    $("textBoxDiscount1x2").value = commission.discount1x2;
    $("textBoxDiscountCS").value = commission.discountCS;


    Fanex.PTEngine.PT_SetSelect($("discountAsian"), 0, commission.discount, Fanex.PTEngine.COMMISSION_STEP, commission.playerDiscount);
    Fanex.PTEngine.PT_SetSelect($("discount1x2"), 0, commission.discount1x2, Fanex.PTEngine.COMMISSION_STEP, commission.playerDiscount1x2);
    Fanex.PTEngine.PT_SetSelect($("discountCS"), 0, commission.discountCS, Fanex.PTEngine.COMMISSION_STEP, commission.playerDiscountCs);
    if (parseBool2(isShowMyanmarOdds)) {
        $("textBoxDiscountMyanmarOdds").value = commission.discountMyanmarOdds;
        Fanex.PTEngine.PT_SetSelect($("oddsPercentage"), 0, commission.discountMyanmarOddsMax, Fanex.PTEngine.COMMISSION_STEP, commission.playerDiscountMyanmarOdds);
    }
}
else {
    Fanex.PTEngine.PT_SetSelect($("groupA"), 0, commission.groupAMax, Fanex.PTEngine.COMMISSION_STEP, commission.groupA);
    Fanex.PTEngine.PT_SetSelect($("discount1x2"), 0, commission.discount1x2Max, Fanex.PTEngine.COMMISSION_STEP, commission.discount1x2);
    Fanex.PTEngine.PT_SetSelect($("discountCS"), 0, commission.discountCSMax, Fanex.PTEngine.COMMISSION_STEP, commission.discountCS);
    if (parseBool2(isShowMyanmarOdds)) {
        Fanex.PTEngine.PT_SetSelect($("oddsPercentage"), 0, commission.discountMyanmarOddsMax, Fanex.PTEngine.COMMISSION_STEP, commission.discountMyanmarOdds);
    } else {
        Fanex.PTEngine.PT_SetSelect($("groupB"), 0, commission.groupBMax, Fanex.PTEngine.COMMISSION_STEP, commission.groupB);
        Fanex.PTEngine.PT_SetSelect($("groupC"), 0, commission.groupCMax, Fanex.PTEngine.COMMISSION_STEP, commission.groupC);
        Fanex.PTEngine.PT_SetSelect($("groupD"), 0, commission.groupDMax, Fanex.PTEngine.COMMISSION_STEP, commission.groupD);
    }
};

function updateCommission(updateUrl) {
    if (commission.roleId == 1) {
        commission.playerDiscount = $("discountAsian").value;
        commission.playerDiscount1x2 = $("discount1x2").value;
        commission.playerDiscountCs = $("discountCS").value;

        if (parseBool2(isShowMyanmarOdds)) {
            commission.playerDiscountMyanmarOdds = $("oddsPercentage").value;
        }
    }
    else {
        Fanex.Customer.SetValueCommissionSettings(commission);
    }
    age.ReloadPage(3000);

    var data = JSON.stringify(commission);
    ajax.PostJSON(updateUrl, data, function onComplete(result) {
        var errMsg = result.errMsg;
        if (result.errCode == 0) {
            age.UnLock();
            AddPopupHeight(50);
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
            AddPopupHeight(50);
            ageMsg.Show(errMsg);
            window.scroll(0, 0);
            return;
        }
    });
}

RegisterStartUp(function () {
    Fanex.Customer.HideTitle();
});