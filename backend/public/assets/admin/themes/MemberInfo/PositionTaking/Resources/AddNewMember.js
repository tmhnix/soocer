﻿Fanex.PTEngine.CURRENT_CONTEXT = context;
Fanex.PTEngine.CURRENT_CONTEXT.ia3 = !customer.statusSetting.disableAutoMPT; // Allow auto PT master on member
if (context.siteName.toUpperCase() != "789Y") {
    Fanex.PTEngine.PT_STEP = 0.01;
}
var ptGrid = null;
ptGrid = new Fanex.PTEngine.PTGrid(customer.ptSetting);
var div = $('ptGridContainer');
ptGrid.Render(div);

var bettingLimit = null;
bettingLimit = new Fanex.PTEngine.BettingLimit(customer.bettingLimit);
ptGrid.ShowCloneHint = function () {
    if (this.copiedItem == null) {
        return;
    }
    var copiedElements = [0, this.items[0].items[0].items[0].items[0].element,
        this.items[1].items[0].items[0].items[0].element]; // Handicap of Soccer and Basketball
    var hint = Language.COPY_ALL_HINT.Format('<b>' + this.activeCopiedTitle + '</b>');
    var otherBetTypesOf = Language.OTHER_BET_TYPE_OF.Format(this.items[this.copiedItem.sportId - 1].name);
    hint = hint + '<div class="ul-position"><ul><li>' + otherBetTypesOf + '</li>';
    // Find all copied items to generate tooltip
    var count = this.items.length;
    var top = 0;
    for (var i = this.copiedItem.sportId; i < count; i++) {
        if (this.items[i].copiedItem != null && this.items[i].copiedItem.sportId == this.copiedItem.sportId) {
            hint += '<li>' + this.items[i].name + '</li>';
            top += 17;
        }
    }
    hint = hint + '</ul></div>';
    top = top + 110;
    // Show tooltip
    var hintclass = 'hint-pointer';
    var xpos = 0;
    var pointerXPos = 10;
    var pointerYPos = top - 2;
    var ypos = -top - 0;
    show(copiedElements[this.copiedItem.sportId], hint, xpos, pointerXPos, -top - 20, top + 20, top, 30000);
};
function show(elementInput, message, xPos, pointerXPos, yPos, pointerYPos, height, timeout) {
    // <span class="hint"><span>This is the message.<span><span class="hint-pointer">&nbsp;</span></span>
    var hint = document.getElementById('fHint');
    var hintPointer = null;
    if (hint == null) {
        var hint = document.createElement("SPAN");
        hint.className = 'hint';
        var hintMsg = document.createElement("SPAN");
        hint.appendChild(hintMsg);
        hintPointer = document.createElement("SPAN");
        hint.appendChild(hintPointer);
        hint.id = 'fHint';
        hint.style.top = '10px';
        hint.style.left = '10px';
        hint.style.zIndex = 999999;
        hint.onclick = function () { // Hide onclick
            hint.style.display = 'none';
        };
        document.body.appendChild(hint);
    };
    hintPointer = hint.lastChild;
    if (typeof hintclass == 'undefined') {
        hintclass = 'hint-pointer';
    }
    hintPointer.className = hintclass;
    hint.firstChild.innerHTML = message;
    if (this.timeOutHideTooltip) {
        clearTimeout(this.timeOutHideTooltip);
        this.timeOutHideTooltip = null;
    };
    if (typeof (timeout) == 'undefined') {
        timeout = 3000;
    }
    this.timeOutHideTooltip = setTimeout(function () {
        if (hint == null) {
            return;
        }
        hint.style.display = 'none';
    }, timeout); // Auto hide in 10s
    if (elementInput != null) {
        if (typeof xPos == 'undefined') {
            xPos = 0;
        }
        if (typeof pointerXPos == 'undefined') {
            pointerXPos = 10;
        }
        if (typeof yPos == 'undefined') {
            yPos = -45;
        }
        if (typeof (pointerYPos) == 'undefined') {
            pointerYPos = 38;
        }
        if (typeof (height) == 'undefined') {
            height = 18;
        }
        hint.style.height = height + 'px';
        hintPointer.style.left = (pointerXPos + 'px');
        hintPointer.style.top = (pointerYPos + 'px');
        var pos = Validators.utils.findPos(elementInput);
        hint.style.left = (pos[0] + xPos) + 'px';
        hint.style.top = (pos[1] + yPos) + 'px';
        elementInput.onchange = function () {
            hint.style.display = 'none';
        };
        elementInput.focus();
    };
    hint.style.display = 'block';
}
var bettingLimitContainer = $('bettingLimitContainer');
bettingLimit.Render(bettingLimitContainer);

document.querySelector('label[for="closed"]').style.display = 'none';
document.getElementById('closed').style.display = 'none';

Fanex.Customer.CheckPassword = function (pwdElement, iconElementId) {
    if (pwdElement == null) return true;
    var isPwd = IsMemberPassword(pwdElement.value);
    var iconElement = $(iconElementId);

    if (!iconElement) return false;

    if (isPwd) {
        var hint = document.getElementById('fHintDown');
        if (hint) {
            hint.display = 'none';
        }

        iconElement.className = 'PwdSuccess';
    }
    else {
        this.ValidateMessage($("password"), Language.ALERT_PASSWORD_REQUIRE, -415, 420, true, 54, 'down', 8000);
        iconElement.className = 'PwdError';
    }

    return isPwd;
}

//console.log(customer);
/*
Bind customer information to customer JSON object by knockout.js
Render PTGrid
*/
var CustomerModel = function (customer) {
    var uplineUserName = customer.userName;
    // Set label MaxCredit
    customer.agentMaxCreditTemp = String.prototype.FormatNumber(customer.maxCredit);
    customer.maxCredit = 0;
    customer.credit = String.prototype.FormatNumber(customer.credit);

    if (context.targetCustId == 0 && customer.credit == "0") customer.credit = "";

    this.saveCustomer = function () {
        if (!Fanex.Customer.CheckInfoValue()) return;
        if (!bettingLimit.Validate(_page ? _page.defaultMinBetValue : undefined)) return;

        // For Check Edit Postion Taking
        if (context.targetCustId == 0) {
            // Re-set value for customer object
            customer.userName = uplineUserName + Fanex.Customer.SetAutoUserName();
            customer.group = $("group").value;
        }
        customer.commissionSetting.playerDiscount = $("discountAsian").value;
        customer.commissionSetting.playerDiscount1x2 = $("discount1x2").value;
        customer.commissionSetting.playerDiscountCs = $("discountCS").value;
        if (parseBool2(isShowMyanmarOdds)) {
            customer.commissionSetting.playerDiscountMyanmarOdds = $("oddsPercentage").value;
        }
        customer.credit = Fanex.RoundNumber(parseFloat($("credit").value, true), 1); // Fix bug for IE7

        try {
            customer.password = $("password").value.encrypt();
        }
        catch (ex) {

        }
        // Add more .....

        if (ptGrid) {
            customer.ptSetting = ptGrid.Save();
            customer.bettingLimit = bettingLimit.Save();
            var text = JSON.stringify(customer);
            $("txtCustomerObject").value = text;
            var params = ajax.CreateParams('txtCustomerObject');

            function AddNewMemberComplete(result) {
                window.scroll(0, 0);

                var errMsg = result.errMsg;
                if (result.errCode == 0) {
                    ageMsg.Hide();
                    var splitName = errMsg.split(',');
                    var username = splitName[0];
                    var custid = splitName[1];
                    var isCS = splitName[2];
                    var isDisableKeno = splitName[3];
                    var userId = splitName[4];
                    var subAccId = splitName[5];

                    var url = age.GetBaseUrl() + "MemberInfo/RedirectPT.aspx?username=" + username + "&custid=" + custid
                        + "&userId=" + userId + "&subAccId=" + subAccId + "&iscs=" + isCS + "&isDisableKeno" + isDisableKeno
                        + "&isedit=false" + "&insert=true";

                    setTimeout(function () { parent.location.href = url; }, 4000);
                }
                else {
                    age.UnLock();
                    if (result.errCode == "5") {
                        Fanex.Customer.NewMember.ReLoadNewCaptcha();
                        $("textBoxCaptcha").value = "";
                        $('textBoxCaptcha').focus();
                    }
                    ageMsg.Show(errMsg);
                    return;
                }
            }

            function AgentUpdateMemberComplete(result) {
                window.scroll(0, 0);
                if (result.errCode == 0) {
                    age.UnLock();
                    ageMsg.Show(result.errMsg, 1);

                    if (_page.CallBack) {
                        eval(_page.CallBack);
                    }
                    else if (window.top.customerListNew) {
                        top.successfulUpdatingCallbackAndReloadMainFrame();
                    }
                    else {
                        window.top.reloadPopUpSetting(3000);
                    }
                }
                else {
                    age.UnLock();
                    if (result.errCode == 101) {
                        age.SignOut();
                    }
                    ageMsg.Show(result.errMsg);
                    return;
                }
            }

            age.ReloadPage(30000);
            // Post with return result in JSON format
            var urlSubmit;
            if (context.targetCustId > 0 && context.targetRoleId == 1) { // Agent update member
                urlSubmit = "../Handlers/AgentUpdateMember.ashx";
                OnComplete = AgentUpdateMemberComplete;
            }
            else {
                if ($("textBoxCaptcha") && $("textBoxCaptcha").value != "") {
                    urlSubmit = "../Handlers/SaveNewMember.ashx?captchaCode=" + $("textBoxCaptcha").value;
                }
                else {
                    urlSubmit = "../Handlers/SaveNewMember.ashx";
                }
                OnComplete = AddNewMemberComplete;
            }

            ajax.PostJSON(
                urlSubmit,
                params,
                OnComplete
            );
        }
    };
};

Fanex.Customer.NewMember = {
    // Edit PT Member on account Info
    OnRedirectToPage: function () {
        top.reloadPage();
        age.DelayReloadPage('../../../_MemberInfo/CustomerList/Agent/MemberList.aspx');
    },

    // Check or UnCheck Close Status
    Closed: function (checkBoxClose, currentStatusClose) {
        if (checkBoxClose.checked == true && checkBoxClose.checked != currentStatusClose) {
            if (!confirm(Language.ALERT_CONFIRM_CLOSE_MEMBER)) {
                customer.statusSetting.closed = false;
                checkBoxClose.checked = false;
            }
        }
        else if (checkBoxClose.checked == false && checkBoxClose.checked != currentStatusClose) {
            if (!confirm(Language.ALERT_CONFIRM_CLOSE_MEMBER)) {
                customer.statusSetting.closed = true;
                checkBoxClose.checked = true;
            }
        }
    },

    // Load Group Commission
    LoadGroupCommission: function (selectId, currencyId, siteName) {
        var listGroupCommission;
        // If Currency name is Won
        if (parseBool2(isShowMyanmarOdds)) {
            listGroupCommission = new Array("a");
        } else if (currencyId == 45) {
            listGroupCommission = new Array("dea", "deb", "dec", "ded");
        }
        else if (siteName == "IBSBET") {
            listGroupCommission = new Array("a", "b", "c", "d", "indoa", "indob", "indoc", "indod");
        }
        else {
            listGroupCommission = new Array("a", "b", "c", "d", "hka", "hkb", "hkc", "hkd");
        }

        for (var i = 0; i < listGroupCommission.length; i++) {
            var selectedOpt = document.createElement("option");
            selectedOpt.text = selectedOpt.value = listGroupCommission[i];
            selectId.options.add(selectedOpt);
        }
    },

    // Set Asian HDP, OU, OE selected value Commission for Member
    SelectedAsianCommissionMember: function (value) {
        Fanex.PTEngine.PT_SetSelect(document.getElementById("discountAsian"), 0, value, Fanex.PTEngine.COMMISSION_STEP, value);
    },

    // Change Group Commission
    ChangeGroupCommission: function (group) {
        if ((group.options[group.selectedIndex].text == "a") || (group.options[group.selectedIndex].text == "hka")
            || (group.options[group.selectedIndex].text == "indoa") || (group.options[group.selectedIndex].text == "dea")) {
            $("textBoxDiscountAsian").value = commission.groupA;
            this.SelectedAsianCommissionMember(commission.groupA)
        }
        if ((group.options[group.selectedIndex].text == "b") || (group.options[group.selectedIndex].text == "hkb")
            || (group.options[group.selectedIndex].text == "indob") || (group.options[group.selectedIndex].text == "deb")) {
            $("textBoxDiscountAsian").value = commission.groupB;
            this.SelectedAsianCommissionMember(commission.groupB)
        }
        if ((group.options[group.selectedIndex].text == "c") || (group.options[group.selectedIndex].text == "hkc")
            || (group.options[group.selectedIndex].text == "indoc") || (group.options[group.selectedIndex].text == "dec")) {
            $("textBoxDiscountAsian").value = commission.groupC;
            this.SelectedAsianCommissionMember(commission.groupC)
        }
        if ((group.options[group.selectedIndex].text == "d") || (group.options[group.selectedIndex].text == "hkd")
            || (group.options[group.selectedIndex].text == "indod") || (group.options[group.selectedIndex].text == "ded")) {
            $("textBoxDiscountAsian").value = commission.groupD;
            this.SelectedAsianCommissionMember(commission.groupD)
        }
    },
    ReLoadNewCaptcha: function () {
        var objDate = new Date();
        $("imgCaptCha").src = "../../../_Authorization/Handlers/Captcha.ashx?code=" + objDate.getMilliseconds();
    }
}
var commission = customer.commissionSetting;
/* Render Commission to selected*/
if (context.targetCustId == 0) {
    Fanex.Customer.SetNextCustomer($("selectedOne"), $("selectedTwo"), $("selectedThree"), customer.newUserName);
    $("textBoxDiscountAsian").value = commission.groupA;
    Fanex.Customer.NewMember.LoadGroupCommission($("group"), context.currencyId, context.siteName);

    Fanex.PTEngine.PT_SetSelect($("discountAsian"), 0, commission.groupAMax, Fanex.PTEngine.COMMISSION_STEP, commission.groupA);
    Fanex.PTEngine.PT_SetSelect($("discount1x2"), 0, commission.discount1x2Max, Fanex.PTEngine.COMMISSION_STEP, commission.discount1x2);
    Fanex.PTEngine.PT_SetSelect($("discountCS"), 0, commission.discountCSMax, Fanex.PTEngine.COMMISSION_STEP, commission.discountCS);
    var minMyanmarOdds = 0;
    if (parseBool2(isShowMyanmarOdds)) {
        Fanex.PTEngine.PT_SetSelect($("oddsPercentage"), minMyanmarOdds, commission.discountMyanmarOddsMax, Fanex.PTEngine.COMMISSION_STEP, commission.discountMyanmarOdds);
    }
}
else {
    $("textBoxDiscountAsian").value = commission.discount;
    Fanex.PTEngine.PT_SetSelect($("discountAsian"), 0, commission.discount, Fanex.PTEngine.COMMISSION_STEP, commission.playerDiscount);
    Fanex.PTEngine.PT_SetSelect($("discount1x2"), 0, commission.discount1x2, Fanex.PTEngine.COMMISSION_STEP, commission.playerDiscount1x2);
    Fanex.PTEngine.PT_SetSelect($("discountCS"), 0, commission.discountCS, Fanex.PTEngine.COMMISSION_STEP, commission.playerDiscountCs);
    if (parseBool2(isShowMyanmarOdds)) {
        Fanex.PTEngine.PT_SetSelect($("oddsPercentage"), 0, commission.discountMyanmarOddsMax, Fanex.PTEngine.COMMISSION_STEP, commission.playerDiscountMyanmarOdds);
    }
    currentStatusClose = customer.statusSetting.closed;
}

ko.applyBindings(new CustomerModel(customer));

RegisterStartUp(function () {
    if (context.targetCustId == 0) {
        age.addEvent($('group'), 'change', function () {
            Fanex.Customer.NewMember.ChangeGroupCommission($('group'));
        });
    }
    else {
        age.addEvent($('closed'), 'click', function () {
            Fanex.Customer.NewMember.Closed($('closed'), currentStatusClose);
        });
    }

    var divPwd = $('divPassword');
    if (divPwd) {
        divPwd.title = '';
        $('password').maxLength = 10;
    }

    if ($('maxCredit') && $('maxCredit').innerHTML == '') {
        $('maxCredit').innerHTML = 0;
    }

    Fanex.Customer.CheckingUsernameExisted(customer.userName, 'selectedOne', 'selectedOne', 'selectedTwo', 'selectedThree', 'msgIcon');
    Fanex.Customer.CheckingUsernameExisted(customer.userName, 'selectedTwo', 'selectedOne', 'selectedTwo', 'selectedThree', 'msgIcon');
    Fanex.Customer.CheckingUsernameExisted(customer.userName, 'selectedThree', 'selectedOne', 'selectedTwo', 'selectedThree', 'msgIcon');
});