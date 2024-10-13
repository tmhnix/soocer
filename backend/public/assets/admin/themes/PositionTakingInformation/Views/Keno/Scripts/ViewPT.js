$(document).ready(function () {
    viewPTManagement.initPage();
});

var ViewPTManagement = function () {
    var self = this;
    self.DomElements = {
        boxHeader: null,
        pagingControl: null
    };
    self.cachedData = {
        getPositionInfoCriteria: {
            PageSize: 0,
            PageIndex: 0
        },

        positionTakingList: null,
        lastParam: null
    };
    self.Enums = {
        RoleId: {
            Member: 1,
            Agent: 2,
            Master: 3,
            Super: 4
        }
    };

    self.PageSizeList = bootstrapData.PageSizeList;
    self.PositionInfo = bootstrapData.PositionInfo;
    self.initPage = function () {
        $("#arrayCustID").val(bootstrapData.PositionInfo.CustomerInfo.CustId);

        self.removeElement();
        self.cacheElement();
        self.renderPagingControl();

        self.cachedData.getPositionInfoCriteria = {
            PageSize: self.PositionInfo.PageSize,
            PageIndex: self.PositionInfo.PageIndex
        };

        self.cachedData.positionTakingList = self.PositionInfo;
        self.renderPositionInfo(self.PositionInfo);
    };

    self.cacheElement = function () {
        self.DomElements.boxHeader = $("#box_header");
        self.DomElements.pagingControl = $("#tblHeader .pagingcontrol");
        self.DomElements.mainTable = $("#tblMain");
        self.DomElements.mainTableHeader = self.DomElements.mainTable.find("thead");
        self.DomElements.mainTableBody = self.DomElements.mainTable.find("tbody");
        self.DomElements.pagingFooter = self.DomElements.mainTable.find("#pagingcontrol-footer");
        self.DomElements.viewPageContainer = $(".viewpage-container");
    };
    self.removeElement = function () {
        self.DomElements.boxHeader = $("#box_header");

        if (!cachedData.isShowNumberGame) {
            self.DomElements.boxHeader.find("#radNumberGame").remove();
            self.DomElements.boxHeader.find("label[for='radNumberGame']").remove();
        }
        
        if (!cachedData.isShowVirtualSports) {
            self.DomElements.boxHeader.find("#radVirtualSports").remove();
            self.DomElements.boxHeader.find("label[for='radVirtualSports']").remove();
        }

        if (!cachedData.isShowKeno) {
            self.DomElements.boxHeader.find("#radKeno").remove();
            self.DomElements.boxHeader.find("label[for='radKeno']").remove();
        }

        if (!cachedData.isShowGoldDeluxe) {
            self.DomElements.boxHeader.find("#radGoldDeluxe").remove();
            self.DomElements.boxHeader.find("label[for='radGoldDeluxe']").remove();
        }
    };
    self.renderPagingControl = function () {
        if (!self.PositionInfo ||
            !self.PositionInfo.BetTypes ||
            self.PositionInfo.BetTypes.length == 0) {
            self.DomElements.pagingControl.empty();
            return;
        }

        var controlHtml = '';
        controlHtml += viewResources.Page_Size;
        controlHtml += '<select id="sel_PagingTop" name="sel_PagingTop">';
        var pageSizeLength = self.PageSizeList.length;
        for (var i = 0; i < pageSizeLength; i++) {
            var pageSize = self.PageSizeList[i];
            var isSelected = self.PositionInfo.PageSize == pageSize ? 'selected="selected" ' : '';
            controlHtml += '<option value="' + pageSize + '"' + isSelected + '>' + pageSize + '</option>';
        }

        controlHtml += '</select>';
        self.DomElements.pagingControl.empty().append(controlHtml);

        self.DomElements.pagingDropdown = $("#tblHeader .pagingcontrol #sel_PagingTop");
        self.DomElements.pagingDropdown.unbind("change");
        self.DomElements.pagingDropdown.change(function () {
            self.cachedData.getPositionInfoCriteria.PageIndex = 1;
            self.getPositionInfo(parseInt($(this).val()), self.cachedData.getPositionInfoCriteria.PageIndex);
        });
    };

    self.renderPositionInfo = function (positionInfoResult) {
        if (!positionInfoResult ||
            !positionInfoResult.BetTypes ||
            positionInfoResult.BetTypes.length == 0) {
            return;
        }

        self.cachedData.getPositionInfoCriteria.PageSize = positionInfoResult.PageSize;
        self.cachedData.getPositionInfoCriteria.PageIndex = positionInfoResult.PageIndex;
        self.renderPositionInfoHeader(positionInfoResult);

        if (!positionInfoResult.CustomerList || positionInfoResult.CustomerList.length === 0) {
            var trNoInfo = "<tr class='no_info'>\
            <td colspan='" + (positionInfoResult.BetTypes.length + (positionInfoResult.CustomerInfo.RoleId == self.Enums.RoleId.Super ? 2 : 3)) + "'>\
             " + viewResources.noInfo + "</td></tr>";
            self.DomElements.mainTableBody.empty().append(trNoInfo);
            self.DomElements.pagingFooter.addClass("display-none");
            self.DomElements.viewPageContainer.addClass("display-none");
        }
        else {
            self.renderPositionInfoBody(positionInfoResult);
            self.renderPositionInfoFooter(positionInfoResult);
        }
    };
    self.renderPositionInfoHeader = function (positionInfoResult) {
        var headerContent = '';
        if (bootstrapData.PositionInfo.CustomerInfo.RoleId == self.Enums.RoleId.Agent) {
            headerContent = self.renderPositionInfoHeaderAgentOnMember(positionInfoResult);
        }
        else {
            switch (positionInfoResult.CustomerInfo.RoleId) {
                case self.Enums.RoleId.Super:
                    headerContent = self.renderPositionInfoHeaderSuper(positionInfoResult);
                    break;
                case self.Enums.RoleId.Master:
                    headerContent = self.renderPositionInfoHeaderMaster(positionInfoResult);
                    break;
                case self.Enums.RoleId.Agent:
                    headerContent = self.renderPositionInfoHeaderAgent(positionInfoResult);
                    break;
            }
        }

        self.DomElements.mainTableHeader.empty().append(headerContent);
    };
    self.renderPositionInfoHeaderSuper = function (positionInfoResult) {
        var headerContent = '';
        var betTypeLength = positionInfoResult.BetTypes.length;
        headerContent += '<tr id="headerBottom" class="RptHeader">';
        headerContent += ' <td>' + viewResources.Symbol_No + '</td>';
        headerContent += ' <td>' + viewResources.Username + '</td>';
        for (var i = 0; i < betTypeLength; i++) {
            var betType = positionInfoResult.BetTypes[i];
            headerContent += '<td>' + betType.Name + '</td>';
        }

        headerContent += '</tr>';
        return headerContent;
    };
    self.renderPositionInfoHeaderMaster = function (positionInfoResult) {
        var headerContent = '';
        var betTypeLength = positionInfoResult.BetTypes.length;
        headerContent += '<tr id="headerBottom" class="RptHeader">';
        headerContent += ' <td>' + viewResources.Symbol_No + '</td>';
        headerContent += ' <td>' + viewResources.Username + '</td>';
        headerContent += ' <td></td>';
        for (var i = 0; i < betTypeLength; i++) {
            var betType = positionInfoResult.BetTypes[i];
            headerContent += '<td>' + betType.Name + '</td>';
        }

        headerContent += '</tr>';
        return headerContent;
    };
    self.renderPositionInfoHeaderAgent = function (positionInfoResult) {
        var headerContent = '';
        var betTypeLength = positionInfoResult.BetTypes.length;
        headerContent += '<tr id="headerBottom" class="RptHeader">';
        headerContent += ' <td>' + viewResources.Symbol_No + '</td>';
        headerContent += ' <td>' + viewResources.Username + '</td>';
        headerContent += ' <td></td>';
        for (var i = 0; i < betTypeLength; i++) {
            var betType = positionInfoResult.BetTypes[i];
            headerContent += '<td>' + betType.Name + '</td>';
        }

        headerContent += '</tr>';
        return headerContent;
    };
    self.renderPositionInfoHeaderAgentOnMember = function (positionInfoResult) {
        var headerContent = '';
        var betTypeLength = positionInfoResult.BetTypes.length;
        headerContent += '<tr id="headerBottom" class="RptHeader">';
        headerContent += ' <td>' + viewResources.Symbol_No + '</td>';
        headerContent += ' <td>' + viewResources.Username + '</td>';
        for (var i = 0; i < betTypeLength; i++) {
            var betType = positionInfoResult.BetTypes[i];
            headerContent += '<td>' + betType.Name + '</td>';
        }

        headerContent += '</tr>';
        return headerContent;
    };

    self.renderPositionInfoBody = function (positionInfoResult) {
        var bodyContent = '';
        if (bootstrapData.PositionInfo.CustomerInfo.RoleId == self.Enums.RoleId.Agent) {
            bodyContent = self.renderPositionInfoBodyAgentOnMember(positionInfoResult);
        }
        else {
            switch (positionInfoResult.CustomerInfo.RoleId) {
                case self.Enums.RoleId.Super:
                    bodyContent = self.renderPositionInfoBodySuper(positionInfoResult);
                    break;
                case self.Enums.RoleId.Master:
                    bodyContent = self.renderPositionInfoBodyMaster(positionInfoResult);
                    break;
                case self.Enums.RoleId.Agent:
                    if (bootstrapData.PositionInfo.CustomerInfo.RoleId == self.Enums.RoleId.Super) {
                        bodyContent = self.renderPositionInfoBodySuperOnAgent(positionInfoResult);
                    }
                    else {
                        bodyContent = self.renderPositionInfoBodyMasterOnAgent(positionInfoResult);
                    }
                    break;
            }
        }

        self.DomElements.mainTableBody.empty().append(bodyContent);
        self.DomElements.mainTableBody.find('tr').hover(function () {
            $(this).addClass('BgOver');
        }, function () {
            $(this).removeClass('BgOver');
        });
    };
    self.renderPositionInfoBodySuper = function (positionInfoResult) {
        var bodyContent = '';
        var custLength = positionInfoResult.CustomerList.length;
        var betTypeLength = positionInfoResult.BetTypes.length;
        var startIndex = positionInfoResult.PageSize * (positionInfoResult.PageIndex - 1);

        for (var i = 0; i < custLength; i++) {
            var custPt = positionInfoResult.CustomerList[i];

            bodyContent += '<tr class="' + self.customerStatusRowCss(custPt.CustomerInfo) + '">';

            bodyContent += '<td>' + (startIndex + i + 1) + '</td>';
            bodyContent += '<td class="l">' +
                    '<a href="#" onclick="viewPTManagement.viewDownlinePTList(' + '\'' + custPt.CustomerInfo.CustId + '\'' + ');">' +
                        custPt.CustomerInfo.CustName +
                    '</a>' +
                '</td>';

            for (var j = 0; j < betTypeLength; j++) {
                var ptValue = numeral(custPt.PositionTakingList[j].Value);
                bodyContent += '<td>' + ptValue + '</td>';
            }

            bodyContent += '</tr>';
        }

        return bodyContent;
    };
    self.renderPositionInfoBodyMaster = function (positionInfoResult) {
        var bodyContent = '';
        var custLength = positionInfoResult.CustomerList.length;
        var betTypeLength = positionInfoResult.BetTypes.length;
        var j;
        var ptValue;
        var startIndex = positionInfoResult.PageSize * (positionInfoResult.PageIndex - 1);

        for (var i = 0; i < custLength; i++) {           
            var custPt = positionInfoResult.CustomerList[i];
            bodyContent += '<tr class="' + self.customerStatusRowCss(custPt.CustomerInfo) + '">';

            var rowspan = 2;
            bodyContent += '<td rowspan="' + rowspan + '">' + (startIndex + i + 1) + '</td>';
            bodyContent += '<td rowspan="' + rowspan + '" class="l">' +
                    '<a href="#" onclick="viewPTManagement.viewDownlinePTList(' + '\'' + custPt.CustomerInfo.CustId + '\'' + ');">' +
                        custPt.CustomerInfo.CustName +
                    '</a>' +
                '</td>';

            var masterPT = custPt.UplineInfo[0];
            bodyContent += '<td class="firstCol">M</td>';
            for (j = 0; j < betTypeLength; j++) {
                ptValue = numeral(masterPT.PositionTakingList[j].Value);
                bodyContent += '<td>' + ptValue + '</td>';
            }

            bodyContent += '</tr>';

            bodyContent += '<tr class="' + self.customerStatusRowCss(custPt.CustomerInfo) + '">';
            bodyContent += '<td class="firstCol">A</td>';
            for (j = 0; j < betTypeLength; j++) {
                ptValue = numeral(custPt.PositionTakingList[j].Value);
                bodyContent += '<td>' + ptValue + '</td>';
            }

            bodyContent += '</tr>';
        }

        return bodyContent;
    };
    self.renderPositionInfoBodySuperOnAgent = function (positionInfoResult) {
        var bodyContent = '';
        var custLength = positionInfoResult.CustomerList.length;
        var betTypeLength = positionInfoResult.BetTypes.length;
        var j;
        var ptValue;
        var startIndex = positionInfoResult.PageSize * (positionInfoResult.PageIndex - 1);

        for (var i = 0; i < custLength; i++) {
            var custPt = positionInfoResult.CustomerList[i];

            bodyContent += '<tr class="' + self.customerStatusRowCss(custPt.CustomerInfo) + '">';

            var rowspan = 3;
            bodyContent += '<td rowspan="' + rowspan + '">' + (startIndex + i + 1) + '</td>';
            bodyContent += '<td rowspan="' + rowspan + '" class="l">' +
                    '<a href="javascript:;" onclick="viewPTManagement.editMemberPTList(' +
                        '\'' + custPt.CustomerInfo.CustId + '\',' +
                        '\'' + custPt.CustomerInfo.CustName + '\'' + ');">' +
                        custPt.CustomerInfo.CustName +
                    '</a>' +
                '</td>';

            var superPT = custPt.UplineInfo[0];
            bodyContent += '<td class="firstCol">S</td>';
            for (j = 0; j < betTypeLength; j++) {
                ptValue = numeral(superPT.PositionTakingList[j].Value);
                bodyContent += '<td>' + ptValue + '</td>';
            }

            bodyContent += '</tr>';

            var masterPT = custPt.UplineInfo[1];
            bodyContent += '<tr class="' + self.customerStatusRowCss(custPt.CustomerInfo) + '">';
            bodyContent += '<td class="firstCol">M</td>';
            for (j = 0; j < betTypeLength; j++) {
                ptValue = numeral(masterPT.PositionTakingList[j].Value);
                bodyContent += '<td>' + ptValue + '</td>';
            }

            bodyContent += '</tr>';

            bodyContent += '<tr class="' + self.customerStatusRowCss(custPt.CustomerInfo) + '">';
            bodyContent += '<td class="firstCol">A</td>';
            for (j = 0; j < betTypeLength; j++) {
                ptValue = numeral(custPt.PositionTakingList[j].Value);
                bodyContent += '<td>' + ptValue + '</td>';
            }

            bodyContent += '</tr>';
        }

        return bodyContent;
    };
    self.renderPositionInfoBodyMasterOnAgent = function (positionInfoResult) {
        var bodyContent = '';
        var custLength = positionInfoResult.CustomerList.length;
        var betTypeLength = positionInfoResult.BetTypes.length;
        var j;
        var ptValue;
        var startIndex = positionInfoResult.PageSize * (positionInfoResult.PageIndex - 1);

        for (var i = 0; i < custLength; i++) {
            var custPt = positionInfoResult.CustomerList[i];
            bodyContent += '<tr class="' + self.customerStatusRowCss(custPt.CustomerInfo) + '">';

            var rowspan = 2;
            bodyContent += '<td rowspan="' + rowspan + '">' + (startIndex + i + 1) + '</td>';
            bodyContent += '<td rowspan="' + rowspan + '" class="l">' +
                    '<a href="javascript:;" onclick="viewPTManagement.editMemberPTList(' +
                        '\'' + custPt.CustomerInfo.CustId + '\',' +
                        '\'' + custPt.CustomerInfo.CustName + '\'' + ');">' +
                        custPt.CustomerInfo.CustName +
                    '</a>' +
                '</td>';

            var masterPT = custPt.UplineInfo[1];
            bodyContent += '<td class="firstCol">M</td>';
            for (j = 0; j < betTypeLength; j++) {
                ptValue = numeral(masterPT.PositionTakingList[j].Value);
                bodyContent += '<td>' + ptValue + '</td>';
            }

            bodyContent += '</tr>';

            bodyContent += '<tr class="' + self.customerStatusRowCss(custPt.CustomerInfo) + '">';
            bodyContent += '<td class="firstCol">A</td>';
            for (j = 0; j < betTypeLength; j++) {
                ptValue = numeral(custPt.PositionTakingList[j].Value);
                bodyContent += '<td>' + ptValue + '</td>';
            }

            bodyContent += '</tr>';
        }

        return bodyContent;
    };
    self.renderPositionInfoBodyAgentOnMember = function (positionInfoResult) {
        var bodyContent = '';
        var custLength = positionInfoResult.CustomerList.length;
        var betTypeLength = positionInfoResult.BetTypes.length;
        var startIndex = positionInfoResult.PageSize * (positionInfoResult.PageIndex - 1);

        for (var i = 0; i < custLength; i++) {
            var custPt = positionInfoResult.CustomerList[i];
            bodyContent += '<tr class="' + self.customerStatusRowCss(custPt.CustomerInfo) + '">';

            bodyContent += '<td>' + (startIndex + i + 1) + '</td>';
            bodyContent += '<td class="l">' +
                    '<a href="javascript:;" onclick="viewPTManagement.editMemberPTList(' +
                        '\'' + custPt.CustomerInfo.CustId + '\',' +
                        '\'' + custPt.CustomerInfo.CustName + '\'' + ');">' +
                        custPt.CustomerInfo.CustName +
                    '</a>' +
                '</td>';

            for (var j = 0; j < betTypeLength; j++) {
                var ptValue = numeral(custPt.PositionTakingList[j].Value);
                bodyContent += '<td>' + ptValue + '</td>';
            }

            bodyContent += '</tr>';
        }

        return bodyContent;
    };

    self.renderPositionInfoFooter = function (positionInfoResult) {
        if (positionInfoResult.TotalPage <= 1) {
            self.DomElements.pagingFooter.addClass("display-none");

            self.DomElements.viewPageContainer.addClass("display-none");
            self.DomElements.viewPageContainer.attr("colspan", 2);
            return;
        }

        if (bootstrapData.PositionInfo.CustomerInfo.RoleId == self.Enums.RoleId.Agent) {
            self.renderPositionInfoFooterAgentOnMember(positionInfoResult);
        }
        else {
            switch (positionInfoResult.CustomerInfo.RoleId) {
                case self.Enums.RoleId.Super:
                    self.renderPositionInfoFooterSuper(positionInfoResult);
                    break;
                case self.Enums.RoleId.Master:
                    self.renderPositionInfoFooterMaster(positionInfoResult);
                    break;
                case self.Enums.RoleId.Agent:
                    self.renderPositionInfoFooterAgent(positionInfoResult);
                    break;
            }
        }
    };
    self.renderPositionInfoFooterSuper = function (positionInfoResult) {
        var pagingControlContent = self.renderFooterPaging(positionInfoResult.PageIndex, positionInfoResult.TotalPage);
        self.DomElements.viewPageContainer.attr("colspan", positionInfoResult.BetTypes.length + 2);
        self.DomElements.viewPageContainer.empty().append(pagingControlContent);
        self.cacheFooterPagingElements();
        self.DomElements.pagingFooter.removeClass("display-none");
        self.DomElements.viewPageContainer.removeClass("display-none");
    };
    self.renderPositionInfoFooterMaster = function (positionInfoResult) {
        var pagingControlContent = self.renderFooterPaging(positionInfoResult.PageIndex, positionInfoResult.TotalPage);
        self.DomElements.viewPageContainer.attr("colspan", positionInfoResult.BetTypes.length + 3);
        self.DomElements.viewPageContainer.empty().append(pagingControlContent);
        self.cacheFooterPagingElements();
        self.DomElements.pagingFooter.removeClass("display-none");
        self.DomElements.viewPageContainer.removeClass("display-none");
    };
    self.renderPositionInfoFooterAgent = function (positionInfoResult) {
        var pagingControlContent = self.renderFooterPaging(positionInfoResult.PageIndex, positionInfoResult.TotalPage);
        self.DomElements.viewPageContainer.attr("colspan", positionInfoResult.BetTypes.length + 3);
        self.DomElements.viewPageContainer.empty().append(pagingControlContent);
        self.cacheFooterPagingElements();
        self.DomElements.pagingFooter.removeClass("display-none");
        self.DomElements.viewPageContainer.removeClass("display-none");
    };
    self.renderPositionInfoFooterAgentOnMember = function (positionInfoResult) {
        var pagingControlContent = self.renderFooterPaging(positionInfoResult.PageIndex, positionInfoResult.TotalPage);
        self.DomElements.viewPageContainer.attr("colspan", positionInfoResult.BetTypes.length + 2);
        self.DomElements.viewPageContainer.empty().append(pagingControlContent);
        self.cacheFooterPagingElements();
        self.DomElements.pagingFooter.removeClass("display-none");
        self.DomElements.viewPageContainer.removeClass("display-none");
    };

    self.getPositionInfo = function (pageSize, pageIndex) {
        var criteria = {
            PageSize: pageSize,
            PageIndex: pageIndex,
            CustId: self.cachedData.positionTakingList ?
                self.cachedData.positionTakingList.CustomerInfo.CustId :
                0,
            RoleId: self.cachedData.positionTakingList ?
                self.cachedData.positionTakingList.CustomerInfo.RoleId :
                0
        };

        self.cachedData.lastParam = criteria;
        $.ajax({
            type: "POST",
            url: window.rootUrl + "KenoPositionTakingInformation/GetPositionTaking",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: JSON.stringify(criteria),
            success: function (rs) {
                self.cachedData.positionTakingList = rs;
                self.renderPositionInfo(rs);
            }
        });
    };
    self.renderFooterPaging = function (pageIndex, totalPage) {
        var pagingControlContent = '';
        pagingControlContent += '<div class="pagingContainer">';
        pagingControlContent += '<span class="icon pagingFirst" type="button"' +
            (pageIndex == 1 ? ' disabled="disabled"' : ' onclick="viewPTManagement.firstPaging();"') + '></span>';
        pagingControlContent += '<span class="icon pagingPrev " type="button"' +
            (pageIndex == 1 ? ' disabled="disabled"' : ' onclick="viewPTManagement.previousPaging();"') + '></span>';

        pagingControlContent += '<span class="pagingSeperator"></span>';
        pagingControlContent += viewResources.Page;
        pagingControlContent += '<input class="pagingCurrent" type="text"' +
            ' onkeyup="viewPTManagement.doEnterPaging(event, this);"' +
            ' value="' + pageIndex + '"' +
            ' maxlength="' + totalPage.toString().length + '"/>';
        pagingControlContent += viewResources.of + ' ' + totalPage;
        pagingControlContent += '<span class="pagingSeperator"></span>';

        pagingControlContent += '<span class="icon pagingNext " type="button"' +
             (pageIndex == totalPage ? ' disabled="disabled"' : ' onclick="viewPTManagement.nextPaging()"') + '></span>';
        pagingControlContent += '<span class="icon pagingLast " type="button"' +
             (pageIndex == totalPage ? ' disabled="disabled"' : ' onclick="viewPTManagement.lastPaging()"') + ' ></span>';

        pagingControlContent += '</div>';
        return pagingControlContent;
    };
    self.cacheFooterPagingElements = function () {
        self.DomElements.pagingCurrent = self.DomElements.viewPageContainer.find(".pagingCurrent");
        self.DomElements.pagingFirst = self.DomElements.viewPageContainer.find(".pagingFirst");
        self.DomElements.pagingPrev = self.DomElements.viewPageContainer.find(".pagingPrev");
        self.DomElements.pagingNext = self.DomElements.viewPageContainer.find(".pagingNext");
        self.DomElements.pagingLast = self.DomElements.viewPageContainer.find(".pagingLast");
    };
    self.firstPaging = function () {
        var selectedPageIndex = 1;
        self.DomElements.pagingCurrent.val(selectedPageIndex);
        self.getPositionInfo(self.cachedData.getPositionInfoCriteria.PageSize, selectedPageIndex);
    };
    self.nextPaging = function () {
        var selectedPageIndex = parseInt(self.cachedData.positionTakingList.PageIndex) + 1;
        self.DomElements.pagingCurrent.val(selectedPageIndex);
        self.getPositionInfo(self.cachedData.getPositionInfoCriteria.PageSize, selectedPageIndex);
    };
    self.doEnterPaging = function (event, pagingCurrentTextBox) {
        var keyCode = event.which;
        if (keyCode != 13) {
            return;
        }

        var selectedPageIndex = parseInt($(pagingCurrentTextBox).val());
        if (selectedPageIndex < 1) {
            selectedPageIndex = 1;
        }
        else if (self.cachedData.positionTakingList &&
            self.cachedData.positionTakingList.TotalPage < selectedPageIndex) {
            selectedPageIndex = self.cachedData.positionTakingList.TotalPage;
        }

        self.DomElements.pagingCurrent.val(selectedPageIndex);
        self.getPositionInfo(self.cachedData.getPositionInfoCriteria.PageSize, selectedPageIndex);
    };
    self.previousPaging = function () {
        var selectedPageIndex = parseInt(self.cachedData.positionTakingList.PageIndex) - 1;
        self.DomElements.pagingCurrent.val(selectedPageIndex);
        self.getPositionInfo(self.cachedData.getPositionInfoCriteria.PageSize, selectedPageIndex);
    };
    self.lastPaging = function () {
        var selectedPageIndex = self.cachedData.positionTakingList.TotalPage;
        self.DomElements.pagingCurrent.val(selectedPageIndex);
        self.getPositionInfo(self.cachedData.getPositionInfoCriteria.PageSize, selectedPageIndex);
    };
    self.viewDownlinePTList = function (custId) {
        var downlineId = self.getDirectDownlineId(self.cachedData.positionTakingList.CustomerInfo.RoleId);
        var criteria = {
            PageSize: self.cachedData.positionTakingList ?
                self.cachedData.positionTakingList.PageSize :
                0,
            PageIndex: 1,
            CustId: custId,
            RoleId: downlineId
        };

        self.cachedData.lastParam = criteria;
        $.ajax({
            type: "POST",
            url: window.rootUrl + "KenoPositionTakingInformation/GetPositionTaking",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: JSON.stringify(criteria),
            success: function (rs) {
                self.cachedData.positionTakingList = rs;
                self.renderPositionInfo(rs);
            }
        });
    };
    self.reloadPTList = function () {
        $.ajax({
            type: "POST",
            url: window.rootUrl + "KenoPositionTakingInformation/GetPositionTaking",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            data: JSON.stringify(self.cachedData.lastParam),
            success: function (rs) {
                self.cachedData.positionTakingList = rs;
                self.renderPositionInfo(rs);
            }
        });
    };
    self.getDirectDownlineId = function (roleId) {
        switch (roleId) {
            case self.Enums.RoleId.Super:
                return self.Enums.RoleId.Master;
            case self.Enums.RoleId.Master:
                return self.Enums.RoleId.Agent;
            case self.Enums.RoleId.Agent:
                return self.Enums.RoleId.Member;
            default:
                return self.Enums.RoleId.Member;
        }
    };
    self.getRoleName = function (roleId) {
        switch (roleId) {
            case self.Enums.RoleId.Super:
                return "Super";
            case self.Enums.RoleId.Master:
                return "Master";
            case self.Enums.RoleId.Agent:
                return "Agent";
            default:
                return "";
        }
    };

    self.editMemberPTList = function (custId, custName) {
        var roleName = self.getRoleName(bootstrapData.PositionInfo.CustomerInfo.RoleId);
        var url = "customer/" + roleName + "EditMember?";
        url += $.param({
            custid: custId,
            username: custName,
            isMultipleEdit: 0,
            userId: bootstrapData.PositionInfo.CustomerInfo.CustId,
            subAccid: 0,
            isViewPt: true
        });

        if (top.popupManager) {
            var popupWidth = 1040;
            top.popupManager.openByRelativeUrl(url, '', popupWidth);
        }
    };
    self.customerStatusRowCss = function (customerInfo) {
        if (!customerInfo.Enabled) {
            return 'disabled-row'
        }

        if (customerInfo.Closed) {
            return customerInfo.ClosedReason.ClassName;
        }

        if (customerInfo.Suspended) {
            return 'suspended-row';
        }

        if (customerInfo.LockedAccess.IsLocked) {
            return customerInfo.LockedAccess.ClassName
        }

        return '';
    };
};

var viewPTManagement = new ViewPTManagement();