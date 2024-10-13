
document.onmousedown = function (event) {
    if (ageWnd.createdElement) {
        top.popupManager.close();
    }
};


window.isCommProductSelectorClicked = false;
function commView(url) {
    if (window.isCommProductSelectorClicked) {
        age.DelayReloadPage(window.rootUrl + url, 1);
    }

    window.isCommProductSelectorClicked = !window.isCommProductSelectorClicked;
}

function commProductDropdownBlur() {
    window.isCommProductSelectorClicked = false;
}

function commProductChanged(element) {
    var isRedirect = navigator.userAgent.match(/iPad/i) != null || navigator.userAgent.indexOf("Safari") > -1;
    if (isRedirect) {
        var url = element.value;
        age.DelayReloadPage(window.rootUrl + url, 1);
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

document.addEventListener('DOMContentLoaded', function () {
    correctCheckValueOnDropdown("dropdown-product");
    $("dropdown-product").blur();
}, false);


