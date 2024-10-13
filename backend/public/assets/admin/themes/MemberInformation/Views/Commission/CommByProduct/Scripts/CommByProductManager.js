var commByProductManager;
$(document).ready(function () {
    commByProductManager.initPage();
});

var CommByProductManager = function () {
    var self = this;
    self.domElements = {
        tableCommissionHeader: null,
        tableCommissionBody: null,
        agentList: null
    };

    self.initPage = function () {
        self.cacheElements();
        self.bindEvents();
    };
    self.cacheElements = function () {
        self.domElements.tableCommissionHeader = $('#tblMain thead');
        self.domElements.tableCommissionBody = $('#tblMain tbody');
        self.domElements.agentList = $('#AgentList');
    };
    self.bindEvents = function () {
        self.domElements.agentList.change(function () {
            var agentId = $(this).val();
            var formData = {
                agentId: agentId
            };
            if (agentId === '0') {
                formData.masterId = $('#MasterList').val();
            }

            self.getCommission(formData);
        });

        $('#MasterList').change(function () {
            var masterId = $(this).val();
            self.getCommission({
                masterId: masterId
            });
        });
    };
    self.getCommission = function (formData) {
        formData.productId = productId;
        $.ajax({
            type: 'GET',
            url: window.rootUrl + 'MemberInformation/Commission/CommByProductByMasterAgent?' + $.param(formData),
            responseType: 'json',
            beforeSend: function (jqXHR, settings) {
                age.Lock(true);
            },
            success: function (data, textStatus, jqXHR) {
                if (formData.masterId && data.AgentList) {
                    self.renderAgentList(data.AgentList);
                }

                self.renderCommission(data);
            },
            complete: function (jqXHR, textStatus) {
                age.UnLock();
            }
        });
    };
    self.renderAgentList = function (agentList) {
        var html = '';

        var agent;
        for (var i = 0, max = agentList.length; i < max; i++) {
            agent = agentList[i];
            html += '<option value="' + agent.Id + '">' + agent.Name + '</option>';
        }

        self.domElements.agentList.html(html);
    }
    self.renderCommission = function (data) {
        var commissions = data.Commissions;
        var html = '';
        var dataLength = commissions ? commissions.length : 0;
        var sportLength = data.Sports.length;
        if (dataLength === 0) {
            html += '<tr class="bg_white">\
                        <td colspan="' + (6 + sportLength * 3) + '">' + viewResources.noInfo + '</td>\
                     </tr>';
        }
        else {
            var number, comm, rowClass;
            for (var i = 0; i < dataLength; i++) {
                number = i + 1;
                comm = commissions[i];
                if (!comm.IsEnabled) {
                    rowClass = 'disabled-row';
                }
                else if (comm.IsClosed) {
                    rowClass = comm.ClosedReason.ClassName;
                }
                else if (comm.IsSuspended) {
                    rowClass = 'suspended-row';
                }
                else if (comm.LockedAccess.IsLocked) {
                    rowClass = comm.LockedAccess.ClassName;
                }
                else {
                    rowClass = number % 2 === 0 ? 'even-row' : 'odd-row';
                }

                html += '<tr class="' + rowClass + '">\
                            <td class="w-order">' + number + '</td>\
                            <td class="l">' + comm.Username + '</td>\
                            <td class="l">' + comm.FirstName + '</td>\
                            <td class="l">' + comm.LastName + '</td>';
                for (var j = 0; j < sportLength; j++) {
                    var sport = comm.SportCommissions[j];
                    html += '<td class="columnComm">' + self.numberFormat(sport.MasterDiscount, 2) + '</td>\
                           <td class="columnComm">' + self.numberFormat(sport.AgentDiscount, 2) + '</td>\
                           <td class="columnComm">' + self.numberFormat(sport.PlayerDiscount, 2) + '</td>';
                }

                html += '<td class="r">' + self.numberFormat(comm.Credit, 2) + '</td>\
                       <td class="l">' + comm.Username + '</td>\
                   </tr>';
            }
        }

        self.renderCommissionHeader(data);
        self.domElements.tableCommissionBody.html(html);
    };

    self.renderCommissionHeader = function (data) {
        var sportLength = data.Sports.length;
        var isAgent = data.RoleId == 2;
        var visibleLevelCount = isAgent ? 2 : 3;

        var html = '';
        html += '<tr class="RptHeader nowrap">\
                        <td colspan="4">&nbsp;</td>';
        for (var i = 0; i < sportLength; i++) {
            var sport = data.Sports[i];
            html += '<td colspan="' + visibleLevelCount + '">' + sport.Name + ' (%)</td>';
        }

        html += '<td colspan="2">&nbsp;</td>\
            </tr>\
            <tr class="RptHeader02">\
                <td class="w-order">#</td>\
                <td>' + viewResources.username + '</td>\
                <td>' + viewResources.firstname + '</td>\
                <td>' + viewResources.lastname + '</td>';
        for (var i = 0; i < sportLength; i++) {
            if (!isAgent) {
                html += '<td title="' + viewResources.master + '" class="colHdr2">M</td>';
            }

            html += '<td title="' + viewResources.agent + '" class="colHdr2">A</td>';
            html += '<td title="' + viewResources.member + '" class="colHdr2">P</td>';
        }

        html += '<td>' + viewResources.credit + '</td>';
        html += '<td>' + viewResources.username + '</td>';
        self.domElements.tableCommissionHeader.html(html);
    };
    self.numberFormat = function (numberValue, decDigits) {
        return numberValue.toFixed(decDigits);
    };
};

commByProductManager = new CommByProductManager();