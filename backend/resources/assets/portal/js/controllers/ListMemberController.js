angular.module('portal').controller('ListMemberController',
    ['Api', '$scope', '$location', '$window', '$localStorage',
        function (Api, $scope, $location, $window, $localStorage) {
            $scope.showPopup = _showPopup;
            $scope.showFrmUpdOthers = _showFrmUpdOthers;
            $scope.closePopup = _closePopup;
            $scope.closePopupInfo = _closePopupInfo;
            $scope.updateStatus = _updateStatus;
            $scope.menuPopupAction = _menuPopupAction;
            $scope.currentId = null;
            $scope.currentName = null;
            var currentStatus = null;

            var list = $('.check-online');
            var ids = [];

            for (var i = 0; i < list.length; i++) {
                var item = list[i];
                var id = $(item).attr('data-id');
                ids.push(id);
            }

            // if (ids.length) {
            //     setInterval(function () {
            //         checkOnline(ids);
            //     }, 5000);
            // }

            // function checkOnline (ids) {
            //     Api.checkOnline(ids.join(',')).then(function (items) {
            //         items.forEach(function (item) {
            //             if (item.online) {
            //                 $('#online-' + item.id).attr('class', 'check-online dot-icon online');
            //             } else {
            //                 $('#online-' + item.id).attr('class', 'check-online dot-icon');
            //             }
            //         });
            //     });
            // }

            function _updateStatus () {
                if (currentStatus === $scope.status) {
                    return _closePopup();
                }
                Api.updateUserStatus($scope.currentId, $scope.status).then(function (data) {
                    $window.location.reload();
                }).catch(function (e) {
                    if (e && e.data && e.data.redirect) {
                        window.open(e.data.redirect, '_self');
                    } else {
                        alert(e && e.data && e.data.msg);
                    }

                    _closePopup();
                });
            }

            function _menuPopupAction (action, id) {
                _closePopupInfo();
                var child = null;
                if (action == 'password') {
                    child = $window.open('/portal/users/' + $scope.currentId + '/changepwd', '_blank');
                } else if (action == 'editInfo') {
                    child = $window.open('/portal/users/' + $scope.currentId + '/updateMember', '_blank');
                } else if (action == 'betSetting') {
                    $window.open('/portal/users/' + $scope.currentId + '/updateBetsMember', '_blank');
                } else if (action == 'commission') {
                    $window.open('/portal/users/' + $scope.currentId + '/updateCommission', '_blank');
                } else if (action == 'permission') {
                    $window.open('/portal/users/' + $scope.currentId + '/updatePermission', '_blank');
                } else if (action == 'secure_code') {
                    var alert = confirm('Bạn có muốn reset mã bảo vệ của tài khoản ' + $scope.currentName.toUpperCase() + ' này?');
                    if (alert) {
                        $window.open('/portal/users/' + $scope.currentId + '/secure_code', '_self');
                    }
                } else if (action == 'delete') {
                    var $alert = confirm('Bạn có muốn xóa tài khoản ' + $scope.currentName.toUpperCase() + ' này?');
                    if ($alert) {
                        Api.deleteUser($scope.currentId).then(function () {
                            $window.location.reload();
                        });
                    }
                }

                if (child) {
                    var timer = setInterval(checkChild, 500);
                }
                function checkChild () {
                    if (child.closed) {
                        $window.location.reload();
                        clearInterval(timer);
                    }
                }
            }

            function _showPopup ($event, id, status, name) {
                _closePopupInfo();
                $scope.currentId = id;
                $scope.currentName = name;
                $scope.status = status;
                currentStatus = status;
                var el = $event.currentTarget;
                el.style.position = 'relative';
                var pos = _getPosition(el);
                document.getElementById('Popup').style.top = (pos.offsetTop - 35) + 'px';
                document.getElementById('Popup').style.left = (pos.offsetLeft + 17) + 'px';
                document.getElementById('Popup').style.display = 'block';
            }

            function _showFrmUpdOthers ($event, id, name) {
                $scope.currentId = id;
                $scope.currentName = name;
                _closePopup();
                var el = $event.currentTarget;
                var div = document.getElementById('divUpdOthers');
                if (document.getElementById('tr_racingPT') && document.getElementById('tr_racingPT').style.display == 'none') {
                    document.getElementById('tr_racingPT').style.display = 'block';
                }
                if (document.getElementById('tr_casinoPT') && document.getElementById('tr_casinoPT').style.display == 'none') {
                    document.getElementById('tr_casinoPT').style.display = 'block';
                }
                if (document.getElementById('tr_bingoPT') && document.getElementById('tr_bingoPT').style.display == 'none') {
                    document.getElementById('tr_bingoPT').style.display = 'block';
                }
                if (document.getElementById('tr_p2pPT') && document.getElementById('tr_p2pPT').style.display == 'none') {
                    document.getElementById('tr_p2pPT').style.display = 'block';
                }
                if (document.getElementById('tr_livecasinoPT') && document.getElementById('tr_livecasinoPT').style.display == 'none') {
                    document.getElementById('tr_livecasinoPT').style.display = 'block';
                }
                if (document.getElementById('tr_virtualsportPT') && document.getElementById('tr_virtualsportPT').style.display == 'none') {
                    document.getElementById('tr_virtualsportPT').style.display = 'block';
                }
                document.getElementById('tr_kenoPT').style.display = 'block';

                el.style.position = 'relative';
                var pos = _getPosition(el);
                div.style.top = (pos.offsetTop - 35) + 'px';
                div.style.left = (pos.offsetLeft + 17) + 'px';

                document.getElementById('divUpdOthers').style.display = 'block';
            }


            function _closePopup () {
                document.getElementById('Popup').style.display = 'none';
            }

            function _closePopupInfo () {
                document.getElementById('divUpdOthers').style.display = 'none';
            }

            function _getPosition (element) {
                var left = 0;
                var top = 0;
                if (element.offsetParent) {
                    while (element) {
                        left += element.offsetLeft;
                        top += element.offsetTop;
                        element = element.offsetParent;
                    }
                }
                return {
                    offsetLeft: left,
                    offsetTop: top
                };
            }
        }
    ]);
