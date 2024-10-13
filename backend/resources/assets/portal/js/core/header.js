
function Change2Menu(url, name) {
    top.main.location =  url;
    SelectTopMenu(url, name);
}



function ClearActiveTab() {
    if (currentTab) currentTab.className = "";
}

// For keeping top menu selected correctly
var currentTab = null;

function SelectTopMenu(url, name) {
    var mainUrl = '';
    if (url) {
        mainUrl = url;
    } else if (top.main) {
        mainUrl = top.main.location.href;
    }

    var start = mainUrl.lastIndexOf('/');
    var end = mainUrl.lastIndexOf('?');
    if (end == -1) end = mainUrl.length;
	if (currentTab) currentTab.className = "";
    switch (name) {
        case 'home':
            currentTab = $("balance");
            break;
        case 'chuyenkhoan':
            currentTab = $("transfer");
            break;
        case 'secure':
		case 'ChangePassword.aspx':
            currentTab = $("changepass");
            break;
        case 'nhatky.php':
		case 'LogCustomerSetting.aspx':
            currentTab = $("viewlog");
            break;
        default:
            currentTab = null;
            break;
    }

    if (currentTab) currentTab.className = "active";
    else ClearActiveTab();
}



