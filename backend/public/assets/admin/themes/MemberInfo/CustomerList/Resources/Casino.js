//Edit Casino's Positontaking
function EditRnGCasino(custId, uplineId, username, actionOn, isMultipleEdit) {
    var url = "";

    if (isMultipleEdit == 0) {
        $("arrayCustID").value = custId;
        $("arrayUserName").value = "";
    }
    else {
        custId = GetCustID("chkid");
    }

    if ($("arrayCustID").value.indexOf('^') == -1) {
        isMultipleEdit = 0;
    }

    switch (_page.roleid) {
        case 4: // Super
            if (actionOn == "Master") {
                url += "Master/EditMaster?id=" + custId + "&uplineId=" + uplineId + "&username=" + username;
            }
            else if (actionOn == "ViewAgent") {
                url += "Agent/ViewAgentBySuper?id=" + custId + "&uplineid=" + uplineId + "&username=" + username;
            }
            else if (actionOn == "Member") {
                url += "Member/EditMemberBySuper?id=" + custId + "&uplineid=" + uplineId + "&username=" + username;
            }
            else {
                return;
            }
            break;
        case 3: // Master
            if (actionOn == "Agent") {
                url += "Agent/EditAgent?id=" + custId + "&uplineid=" + uplineId + "&username=" + username;
            }
            else if (actionOn == "Member") {
                url += "Member/EditMemberByMaster?id=" + custId + "&uplineid=" + uplineId + "&username=" + username;
            }
            else {
                return;
            }
            break;
        case 2: // Agent
            if (actionOn == "Member") {
                url += "customer/EditMember?id=" + custId + "&uplineid=" + uplineId + "&username=" + username;
            }
            else {
                return;
            }
            break;
    }

    var popW = 1160;
    top.popupManager.openByRelativeUrl(url, '', popW);
    clearPopupSubtitle();
}