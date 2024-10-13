// Overwrite DelayReloadPage in old Core.js
function DelayReloadPage(Url) {
    age.DelayReloadPage(Url);
}

//Start: View Downline
function ViewSB(type, custId, userName) {
    window.location.href = 'SportbookPositionTakingList.aspx?type=' + type + '&custid=' + custId + '&USER=' + userName;
}

function ViewNG(type, custId, userName) {
    window.location.href = 'NumberGamePositionTakingList.aspx?type=' + type + '&custid=' + custId + '&USER=' + userName;
}

function ViewCS(type, custid, user) {
    document.location.href = 'CasinoPositionTakingList.aspx?type=' + type + '&custid=' + custid + '&USER=' + user;
}

function ViewVS(type, custid, user) {
    document.location.href = 'VirtualSportsPositionTakingList.aspx?type=' + type + '&custid=' + custid + '&USER=' + user;
}
//End: View Downline

//For Sportbook & Number Game
function EditMember_Single(cid, user, agentid, roleId) {
    if (!isFinishLoading) {
        alert('Page is loading!');
        return;
    }

   var URL = "customer/AgentEditMember?"; //V1
    var popW = 930;
    if (roleId == '4') {
        URL = "customer/SuperEditMember?";
    }

    if (roleId == '3') {
        URL = "customer/MasterEditMember?";
    }

    URL += "m=0";
    URL += "&custid=" + cid;
    URL += "&USER=" + user;
    URL += '&agentid=' + agentid;

    if ($("arrayCustID")) {
        $("arrayCustID").value = "";
        $("arrayUserName").value = "";
    }

    top.popupManager.openByRelativeUrl(URL, '', popW);
}

function EditCS(cid) {
    var URL = "admin/customer/PositionTakingCS?custid=" + cid + "&isupdate=false";
    var popW = 980;
    top.popupManager.openByRelativeUrl(URL, '', popW);
    clearPopupSubtitle();
}

function EditMemberVS(custids, username, roleId) {
    var URL = "customer/VirtualSportsEditSingle?";
    URL += "custid=" + custids;
    URL += "&username=" + username;
    URL += "&roleid=1&isMult=0";

    var popW = 920;
    top.popupManager.openByRelativeUrl(URL, '', popW);
    clearPopupSubtitle();
}

RegisterStartUp(function () {
    if (_page.error == true) {
        ageMsg.Show(_page.messageError);
    }
});

window.isProductOptionClicked = false;
function ptView(url) {
    if (window.isProductOptionClicked) {
        window.location.href = window.rootUrl + url;
    }

    window.isProductOptionClicked = !window.isProductOptionClicked;
}

function ptProductDropdownBlur() {
    window.isProductOptionClicked = false;
}

function ptProductChanged(element) {
    var isRedirect = navigator.userAgent.match(/iPad/i) != null || navigator.userAgent.indexOf("Safari") > -1;
    if (isRedirect) {
        var url = element.value;
        location.href = window.rootUrl + url;
    }
}

function correctCheckValueOnDropdown(dropdownId) {
    var dropdown = $(dropdownId);
    if (!dropdown) {
        return;
    }

    var findSelected = false;
    for (var i = 0; i < dropdown.length; i++) {
        var option = dropdown[i];
        var attributeLength = option.attributes.length;
        for (var j = 0; j < attributeLength; j++) {
            var attr = option.attributes[j];
            if (attr.name == "selected") {
                if (attr.value == "selected") {
                    dropdown.selectedIndex = i;
                    dropdown.value = option.value;
                    findSelected = true;
                }

                break;
            }
        }

        if (findSelected) {
            break;
        }
    }
}

function clearPopupSubtitle(hasSubTitle) {
    (top.clearPopupSubtitle || function () { })(hasSubTitle);
}

top.window.successfulUpdatingCallback = function (isPartialUpdate, isMultipleUpdate) {
    window.top.reloadPopUpSetting();
}

var isFinishLoading = false;
document.addEventListener('DOMContentLoaded', function () {
    correctCheckValueOnDropdown("dropdown-product");
    isFinishLoading = true;
}, false);

function getEditSettingPopUpLeft() {
    var accountInfoWidth = top.isNewSite ? top.$('.sidebar').width() : top.menu.innerWidth;
    return accountInfoWidth + 8;
}

function clearPopupSubtitle(hasSubTitle) {
    (top.clearPopupSubtitle || function () { })(hasSubTitle);
}
