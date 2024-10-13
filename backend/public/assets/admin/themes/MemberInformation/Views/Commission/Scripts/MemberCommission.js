

window.isCommProductOptionClicked = false;
function commView(url) {
    if (window.isCommProductOptionClicked) {
        age.DelayReloadPage(window.rootUrl + url, 1);
    }

    window.isCommProductOptionClicked = !window.isCommProductOptionClicked;
}

function commProductDropdownBlur() {
    window.isCommProductOptionClicked = false;
}

function commProductChanged(element) {
    var isRedirect = navigator.userAgent.match(/iPad/i) != null || navigator.userAgent.indexOf("Safari") > -1;
    if (isRedirect) {
        window.isCommProductOptionClicked = false;
        var url = $(element).val();
        age.DelayReloadPage(window.rootUrl + url, 1);
    }
}

function correctCheckValueOnDropdown(dropdownId) {
    var dropdown = $("#" + dropdownId)[0];
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
                    $("#" + dropdownId).val(option.value);
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

$(document).ready(function () {
    correctCheckValueOnDropdown("dropdown-product");
});
