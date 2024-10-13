var IsMaster = false;
var IsAgent = false;
var IsMember = false;
var UplineRoleId = 4;
var UMError = 90014;

function CustomerController($scope, $element) {
    $.ajaxSetup({
        beforeSend: function (xhr) {
            var antiXSRFToken = document.getElementsByName("__RequestVerificationToken");
            if (antiXSRFToken.length > 0) {
                xhr.setRequestHeader("__RequestVerificationToken", antiXSRFToken[0].value);
            }
        }
    });

    $scope.CustomerModel = customerModel;
    $scope.Enabled = !customerModel.casinoDisabled;
    $scope.Level = '';
    $scope.IsMaster = false;
    $scope.IsAgent = false;
    $scope.IsMember = false;
    $scope.IsSuper = false;
    $scope.CustomerModel.maxTransferFormated = !$scope.CustomerModel.casinoSync && $scope.CustomerModel.roleId == 4 ? $scope.CustomerModel.defaultTransferCredit.formatNumber() : $scope.CustomerModel.maxTransferCredit.formatNumber();
    $scope.CustomerModel.memberWinLimit.maximumLossFormated = $scope.CustomerModel.memberWinLimit.maximumLoss.formatNumber();
    $scope.IsSuperMasterOnMember = ($scope.CustomerModel.uplineRoleId == 4 || $scope.CustomerModel.uplineRoleId == 3) && $scope.CustomerModel.roleId == 1;

    $scope.CustomerModel.casinoEnabled = !customerModel.casinoDisabled && (customerModel.casinoSync || !customerModel.uplineDisabledCasino);
    $scope.IsDisabledHtml = $scope.IsSuperMasterOnMember || $scope.CustomerModel.uplineDisabledCasino || ($scope.CustomerModel.casinoEnabled && $scope.CustomerModel.roleId != 1);
    $scope.IsDownlinesDisabledHtml = customerModel.casinoDisabled || !$scope.CustomerModel.casinoDisabledDownline;
    $scope.IsCrossLine = roleId - $scope.CustomerModel.roleId > 1;
    UplineRoleId = roleId;

    switch ($scope.CustomerModel.roleId) {
        case 1:
            $scope.IsMember = true;
            IsMaster = false;
            IsAgent = false;
            IsMember = true;
            break;
        case 2:
            $scope.Level = resources.lbagent;
            $scope.IsAgent = true;
            IsMaster = false;
            IsAgent = true;
            IsMember = false;
            break;
        case 3:
            $scope.Level = resources.lbmaster;
            $scope.IsMaster = true;
            IsMaster = true;
            IsAgent = false;
            IsMember = false;
            break;
        default:
            $scope.Level = resources.lbsuper;
            $scope.IsSuper = true;
            IsMaster = false;
            IsAgent = false;
            IsMember = false;
            break;
    }

    if ($scope.IsSuper) {
        customerModel.maxTransferCreditLimit = 0;
    }

    $('#downline').each(function (i, item) {
        $(item).html($scope.Level)
    });

    $scope.EnableClicked = function () {
        $scope.IsDownlinesDisabledHtml = !$scope.CustomerModel.casinoEnabled;

        if (!$scope.CustomerModel.casinoEnabled) {
            $scope.CustomerModel.casinoEnabledDownline = false;
            $scope.CustomerModel.casinoDisabledDownline = true;
        }
    },

        $scope.GetCurrentWinLimit = function () {
            if ($scope.CustomerModel.roleId != 1) {
                return;
            }

            try {
                Fanex.CustomerSetting.Core.BlockUI();
            }
            catch (e) {
            }

            $.ajax({
                url: toUrl('customer/GetCurrentWinLimit'),
                data: {
                    id: $scope.CustomerModel.ibcCustID,
                    groupName: ''
                }
            }).success(function (result) {
                if (result.errorCode == 0) {
                    var buildWinLossHandler = function (initArray, current, percent, maxAmount) {
                        if (percent >= 100 || percent == -2 || percent > 0) { // >= 100 or N/A or specific
                            if (percent >= 100 || percent == -2) {
                                initArray.push('<font style="color: red">');
                            }
                            initArray.push(percent == -2 ? "N/A" : percent.toFixed(2).formatNumber() + "%");
                            if (percent >= 100 || percent == -2) {
                                initArray.push('</font>');
                            }

                            initArray.push('&nbsp;&nbsp;');
                            initArray.push('(');
                            if (current >= maxAmount && maxAmount != 0) {
                                initArray.push('<font style="color: red">');
                            }
                            initArray.push(current.toFixed(2).formatNumber());
                            if (current >= maxAmount && maxAmount != 0) {
                                initArray.push('</font>');
                            }
                            initArray.push('/');
                            if (maxAmount <= 0) {
                                initArray.push('<font style="color: red">');
                            }
                            initArray.push(maxAmount.toFixed(2).formatNumber());
                            if (maxAmount <= 0) {
                                initArray.push('</font>');
                            }
                            initArray.push(')');
                        }
                        else if (percent == -1) { // Unlimited
                            initArray.push(resources.lblunlimited);
                        }
                        else { // 0%
                            initArray.push('0%');
                        }

                        return '<p style="margin:3px 0;line-height:1.2;">' + initArray.join('') + '</p>';
                    };

                    var currentWinLoss = result.result;

                    var winningHtml = buildWinLossHandler(
                        [resources.winning, ':&nbsp;&nbsp;'],
                        currentWinLoss.currentAmount,
                        currentWinLoss.winPercent,
                        currentWinLoss.maxWinAmount);

                    var losingHtml = buildWinLossHandler(
                        [resources.losing, ':&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'],
                        currentWinLoss.currentAmount * -1,
                        currentWinLoss.lossPercent,
                        currentWinLoss.maxLossAmount);

                    var $currentWinLimit = $('#currentWinLimit');
                    $currentWinLimit
                        .attr('style', '')
                        .unbind('click')
                        .html(winningHtml + losingHtml);
                }
                else {
                    var $errMsg = $('#errMsg');
                    $errMsg
                        .html(result.errorMessage.formatErrorMessage())
                        .show();
                }
            }).error(function (data) {
                if (typeof console != 'undefined')
                    console.log(data);
            }).complete(function (data) {
                try {
                    Fanex.CustomerSetting.Core.UnBlockUI();
                }
                catch (e) {
                }
            });
        }

    $scope.SaveCurrentWinLimit = function () {
        var custids;
        var usernames;
        var isMultipleEdit;
        var syncStatuses;

        if (custids == null || custids == undefined) {
            var elementByCustids = window.top.frames["main"].document.getElementById('arrayCustID');
            if (elementByCustids != null) {
                custids = elementByCustids.value.split('^');
                custids.pop();
                usernames = window.top.frames["main"].document.getElementById('arrayUserName').value.split('^');
                usernames.pop();
                syncStatuses = window.top.frames["main"].document.getElementById('arrayStatusRnCasino').value.split('^');
                syncStatuses.pop();
            }
        }

        isMultipleEdit = custids != null && custids != undefined && custids.length > 1 ? true : false;

        UpdateWinLossMessage = '';
        HasError = false;
        if (isMultipleEdit) {
            if (confirm(resources.editMultipleWinLossLimit)) {
                try {
                    Fanex.CustomerSetting.Core.BlockUI();
                }
                catch (e) {
                }

                ProcessUpdateWinLossLimit(0, custids, usernames, JSON.stringify($scope.CustomerModel.memberWinLimit), syncStatuses);
            }
        }
        else {
            try {
                Fanex.CustomerSetting.Core.BlockUI();
            }
            catch (e) {
            }

            ProcessUpdateWinLossLimit(null, custids, usernames, JSON.stringify($scope.CustomerModel.memberWinLimit), syncStatuses);
        }
    }

    var UpdateWinLossMessage = '';
    var HasError = false;
    var ProcessUpdateWinLossLimit = function (index, custIds, usernames, winLossLimit, syncStatuses) {
        var custId = index == null ? $scope.CustomerModel.ibcCustID : custIds[index];
        var username = index == null ? $scope.CustomerModel.userName : usernames[index];
        if (index != null && index >= custIds.length) {
            $('#errMsg')
                .html(UpdateWinLossMessage)
                .show();

            try {
                Fanex.CustomerSetting.Core.UnBlockUI();
                if (!HasError) {
                    var timeout = setTimeout(function () {
                        clearTimeout(timeout);
                        document.location.reload(true)
                    }, 3000);
                }
            }
            catch (e) {
            }

            return;
        }

        if (index == null && !$scope.CustomerModel.casinoSync) {
            HasError = true;
            UpdateWinLossMessage += '<div><div class="EnrichUserName">' + username + ':</div><div class="EnrichErrmsg">Not casino\'s Customer.</div></div>';
            try {
                $('#errMsg')
                    .html(UpdateWinLossMessage)
                    .show();

                Fanex.CustomerSetting.Core.UnBlockUI();
            }
            catch (e) {
            }
        }
        else if (index != null && index < custIds.length && syncStatuses[index] == "0") {
            HasError = true;
            UpdateWinLossMessage += '<div><div class="EnrichUserName">' + username + ':</div><div class="EnrichErrmsg">Not casino\'s Customer.</div></div>';
            ProcessUpdateWinLossLimit(++index, custIds, usernames, winLossLimit, syncStatuses);
        }
        else {
            $.ajax({
                url: toUrl('WinLossLimit/Update'),
                type: 'post',
                data: {
                    custId: custId,
                    userId: userId,
                    subAccId: subAccId,
                    winLimit: winLossLimit,
                    roleId: $scope.CustomerModel.roleId
                }
            }).success(function (result) {
                if (result.errorCode == 0) {
                    UpdateWinLossMessage += '<div><div class="EnrichUserName">' + username + ':</div><div class="EnrichSuccmsg">' + resources.successful + '</div></div>';
                }
                else {
                    HasError = true;
                    UpdateWinLossMessage += '<div><div class="EnrichUserName">' + username + ':</div><div class="EnrichErrmsg">' + result.errorMessage + '</div></div>';
                }
                if (index == null || index == custIds.length - 1 || result.errorCode == UMError) {
                    var err = result.errorCode == UMError ?
                        '<div class="EnrichErrmsg">' + result.errorMessage.formatErrorMessage() + '</div>' :
                        UpdateWinLossMessage;
                    $('#errMsg')
                        .html(err)
                        .show();

                    try {
                        Fanex.CustomerSetting.Core.UnBlockUI();
                        if (!HasError && index == null) {
                            if (window.top.customerListNew) {
                                top.customerListPopup.successfulUpdatingCallback();
                            }
                            else {
                                window.top.reloadPopUpSetting(3000);
                            }
                        }
                        else if (!HasError) {
                            var timeout = setTimeout(function () {
                                clearTimeout(timeout);
                                document.location.reload(true)
                            }, 3000);
                        }
                    }
                    catch (e) {
                    }
                }
                else {
                    ProcessUpdateWinLossLimit(++index, custIds, usernames, winLossLimit, syncStatuses);
                }
            }).error(function (data) {
                HasError = true;
                UpdateWinLossMessage += '<div><div class="EnrichUserName">' + username + ':</div><div class="EnrichErrmsg">Not casino\'s Customer.</div></div>';
                if (index == null || index == custIds.length - 1) {
                    $('#errMsg')
                        .html(UpdateWinLossMessage)
                        .show();

                    try {
                        Fanex.CustomerSetting.Core.UnBlockUI();
                    }
                    catch (e) {
                    }
                }
                else {
                    ProcessUpdateWinLossLimit(++index, custIds, usernames, winLossLimit, syncStatuses);
                }
            });
        }
    }
}