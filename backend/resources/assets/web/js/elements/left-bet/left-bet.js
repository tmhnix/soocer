angular.module('todoApp')
    .directive('leftBet', ['$templateCache', 'leaguesAPI', function ($templateCache, leaguesAPI) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment
        template: $templateCache.get('elements/left-bet/left-bet.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            console.log('render');
            $scope.settings = {
                show: false,
                auto: true,
                type: 'single'
            }

            var submit = false;

            $scope.data = {  
            };

            $scope.model = {
            }
            $scope.mulModel = {
            }

            $scope.mulBets = [];

            $scope.number = 10;
            var number = 10;
            var interval;
            // ====== EVENT =====
            $scope.$on('EVENT_BET', _runBet);
            $scope.$on('EVENT_UPDATE_MIN_MAX', _updateMinMax);
            $scope.$on('CANCEL_BOX_BET', _cancelBox);
            $scope.onChange = _onChange;
            $scope.onRefresh = _onRefresh;
            $scope.onDelete = _onDelete;
            $scope.backToHome = _cancelBox;
            $scope.switchBettingMode = _switchBettingMode;

            bindEvent(window, 'message', function (e) {
                var data = JSON.parse(e.data);
                if (data.name == 'EVENT_BET') {
                    safeApply($scope, function (argument) {
                        _runBet('EVENT_BET', data.data);
                    })
                }
            });

            // ========= function 
            function _runBet(event, data) {
                console.log(data);
                $scope.settings.show = true;
                $scope.settings.type = data.TYPE;
                $rootScope.$broadcast('EVENT_MENU_SHOW', {account: 'mini', sports: false});
                $rootScope.$broadcast('EVENT_ACCOUNT_REFRESH');
                $scope.error_message = '';

                var model = convertObj(data);
                if (data.TYPE == 'single') {
                    $scope.oldValue = null;
                    $scope.model = model;
                } else {
                    if (!$scope.model || !$scope.model.odd_id) { // init for single
                        $scope.oldValue = null;
                        $scope.model = model;                        
                    }
                    runMulti(model);
                }

                _switchBettingMode(data.TYPE);
            }

            function runMulti(data) {
                var index = $scope.mulBets.findIndex(function (item) {
                    return item.event_id == data.event_id;
                });
                if (index > -1) {
                    $scope.mulBets[index] = data
                } else {
                    $scope.mulBets.push(data);    
                }
            }

            function _onDelete(odd_id) {
                $scope.mulBets = $scope.mulBets.filter(function (item) {
                    return item.odd_id !== odd_id;
                });
            }

            function runSingle() {
                if (!$scope.settings.auto) {
                    return;
                }
                $scope.number = number;
                interval && clearInterval(interval);
                interval = setInterval(function () {
                    safeApply($scope, function () {
                        $scope.number--;
                        if ($scope.number == 0) {
                            console.log('DOne');
                            $scope.number = number;
                            $scope.onRefresh && $scope.onRefresh();
                        }
                    });
                }, 1000);
            }

            function convertObj(data) {
                if (data.game_type == 'number_game') {
                    $scope.game_name = "Number Game";
                    return {
                        is_game: true,
                        odd_name: _getOddGame(data),
                        odd_type: data.odd_type,
                        step: data.step,
                        odd: data.event[data.bet_type],
                        event_id: data.event.event_id,
                        event: data.event,
                        ss: data.ss,
                        odd_id: data.event.event_id,
                        bet_value: data.bet_value,
                        bet_type: data.bet_type,
                        bet_position: data.bet_position
                    }
                }
                $scope.game_name = "Bóng đá";
                return {
                    odd_name: _getOddName(data),
                    odd_type: data.odd_type,
                    odd: data.event[data.bet_type],
                    event_id: data.event.event_id,
                    event: data.event,
                    ss: data.event.ss,
                    odd_id: data.event.odd_id,
                    bet_value: data.bet_value,
                    bet_type: data.bet_type,
                    bet_position: data.type == 'home' ? 0 : 1
                };
            }

            function _getOddGame(data) {
                if (data.bet_position >= 80 && data.bet_position <= 154) {
                    return data.bet_position - 79;
                }
                switch (data.bet_position) {
                    case 30:
                        return 'Tài';
                    case 31:
                        return 'Xỉu';
                    case 33:
                        return 'Lẻ';
                    case 34:
                        return 'Chẳn';
                    case 43:
                        return 'Tài 37.5/Lẻ';
                    case 45:
                        return 'Tài 37.5/Chẳn';
                    case 44:
                        return 'Xỉu 37.5/Lẻ';
                    case 46:
                        return 'Xỉu 37.5/Chẳn';
                    case 74:
                        return '1, 6, 11, 16, 21, 26, 31, 36, 41, 46, 51, 56, 61, 66, 71';
                    case 75:
                        return '2, 7, 12, 17, 22, 27, 32, 37, 42, 47, 52, 57, 62, 67, 72';
                    case 76:
                        return '3, 8, 13, 18, 23, 28, 33, 38, 43, 48, 53, 58, 63, 68, 73';
                    case 77:
                        return '4, 9, 14, 19, 24, 29, 34, 39, 44, 49, 54, 59, 64, 69, 74';
                    case 78:
                        return '5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75';

                    case 48:
                        return '1~5';
                    case 49:
                        return '6~10';
                    case 50:
                        return '11~15';
                    case 51:
                        return '16~20';
                    case 52:
                        return '21~25';
                    case 53:
                        return '26~30';
                    case 54:
                        return '31~35';
                    case 55:
                        return '36~40';
                    case 56:
                        return '41~45';
                    case 57:
                        return '46~50';
                    case 58:
                        return '51~55';
                    case 59:
                        return '56~60';
                    case 60:
                        return '61~65';
                    case 61:
                        return '66~70';
                    case 62:
                        return '71~75';

                    case 64:
                        return '1~15';
                    case 65:
                        return '16~30';
                    case 66:
                        return '31~45';
                    case 67:
                        return '45~60';
                    case 68:
                        return '61~75';

                    case 70:
                        return '1~25';
                    case 71:
                        return '26~50';
                    case 72:
                        return '51~75';
                    default:
                        // code...
                        break;
                }
            }

            function _updateOdd(odd_id, odd) {
                $scope.mulBets.findIndex(function (item) {
                    if (item.odd_id == odd_id) {
                        item.event = odd;
                        item.bet_value = getOdd(odd, item);
                        return true;
                    }
                    return false;
                });
            }

            function _switchBettingMode(type) {
                $scope.settings.type = type;
                if (type == 'single') {
                    setTimeout(function (argument) {
                        $( "#BPstake" ).focus();
                    }, 800)
                    runSingle();
                } else {
                    setTimeout(function (argument) {
                        $( "#mulStake" ).focus();
                    }, 800)
                }
            }

            function _updateMinMax(event, data) {
                $scope.data.bongdamin = data.bongdamin;
                $scope.data.bongdamax = data.bongdamax;
            }

            function _onRefresh() {
                leaguesAPI.getEventById($scope.model.odd_id).then(function (value) {
                    $scope.model.event = value;
                    $scope.model.odd = $scope.model.event[$scope.model.bet_type];

                    $scope.oldValue = $scope.model.bet_value;
                    $scope.model.bet_value = getOdd($scope.model.event, $scope.model);

                    _checkChangeValue();
                });
            }

            function _onRefreshMul() {
                $scope.mulBets.map(function (item) {
                    leaguesAPI.getEventById(item.odd_id).then(function (value) {
                        safeApply($scope, function () {
                            _updateOdd(value.odd_id, value);
                        })
                    }); 
                });
            }

            function _checkChangeValue() {
                if (!$scope.model.bet_value || $scope.model.bet_value == '') {
                    $scope.error_message = 'Tỷ lệ cược đang được cập nhật!';
                } else if (!!$scope.oldValue && $scope.oldValue != $scope.model.bet_value) {
                    $scope.error_message = 'Tỷ lệ cược đã thay đổi từ <em>'+$scope.oldValue+'</em> Thành <em>'+$scope.model.bet_value+'</em>';
                }                
            }

            function getOdd(event, model) {
                var odd = event[model.bet_type];
                if (['ft_hdp', 'hf_hdp', 'hf_1x2', 'ft_1x2'].indexOf(model.bet_type) > -1) {
                    if (model.bet_position == 0) {
                        return odd['home_od'];
                    }

                    return model.bet_position == 1 ? odd['away_od'] : odd['draw_od'];
                }

                return model.bet_position == 0 ? odd['over_od'] : odd['under_od'];
            }

            function _onChange() {
                if ($scope.settings.auto) {
                    run();
                } else {
                    interval && clearInterval(interval);
                }
            }

            function _getOddName(data) {
                if (['ft_ou', 'hf_ou'].indexOf(data.bet_type) > -1) {
                    if (data.type == 'home') {
                        return 'Tài';
                    } else {
                        return 'Xỉu';
                    }
                    
                }
                return data.event[data.type];
            }

            function _cancelBox(argument) {
                $scope.settings.show = false;
                interval && clearInterval(interval);
            }

            $scope.betMulSubmit = function () {
                $scope.mul_error_message = '';
                if (!$scope.mulModel.bet_amount || $scope.mulModel.bet_amount <= 0) {
                    return $scope.mul_error_message = 'Bạn chưa nhập tiền cược!';
                }
                if ($scope.mulModel.bet_amount < $scope.data.bongdamin) {
                    $scope.mulModel.bet_amount = $scope.data.bongdamin;
                    $scope.mul_error_message = 'Tiền cược của bạn thấp hơn mức cược tối thiểu!';
                    return;
                }

                if ($scope.mulModel.bet_amount > $scope.data.bongdamax) {
                    $scope.mulModel.bet_amount = $scope.data.bongdamax;
                    $scope.mul_error_message = 'Tiền cược của bạn cao hơn mức cược tối đa!';
                    return;
                }

                var r = confirm("Bạn có chắc chắn muốn xử lý đặt cược không?");
                if (!r) {
                    return;
                }
                if (submit) {
                    return
                }
                submit = true;
                var data = {
                    bet_amount: $scope.mulModel.bet_amount,
                    bets: $scope.mulBets.map(function (item) {
                        return {
                            odd_id: item.odd_id,
                            bet_value: item.bet_value,
                            bet_position: item.bet_position,
                            bet_type: item.bet_type
                        }
                    })
                }
                leaguesAPI.createGroup(data).then(function (data) {
                    _cancelBox();
                    $scope.mulModel = {};
                    $scope.mulBets = [];
                    if (data.status == 'runing') {
                        alert('Đặt cược thành công. \nMã cược: ' + data.id);    
                    }
                    $rootScope.$broadcast('EVENT_BET_SUCCESS', data);
                    $rootScope.$broadcast('EVENT_ACCOUNT_REFRESH');
                    submit = false;
                }).catch(function (e) {
                    submit = false;
                    _onRefreshMul();
                    alert(e.data && e.data.msg || 'Có lỗi xảy ra, làm ơn reload page');
                });
            }

            $scope.betSubmit = function () {
                if (!$scope.model.bet_amount || $scope.model.bet_amount <= 0) {
                    return $scope.error_message = 'Bạn chưa nhập tiền cược!';
                }
                if ($scope.model.bet_amount < $scope.data.bongdamin) {
                    $scope.model.bet_amount = $scope.data.bongdamin;
                    $scope.error_message = 'Tiền cược của bạn thấp hơn mức cược tối thiểu!';
                    return;
                }

                if ($scope.model.bet_amount > $scope.data.bongdamax) {
                    $scope.model.bet_amount = $scope.data.bongdamax;
                    $scope.error_message = 'Tiền cược của bạn cao hơn mức cược tối đa!';
                    return;
                }

                if (!$scope.model.bet_value || $scope.model.bet_value == '') {
                    $scope.error_message = 'Tỷ lệ cược đang được cập nhật!';
                }

                var r = confirm("Bạn có chắc chắn muốn xử lý đặt cược không?");
                if (!r) {
                    return;
                }
                if (submit) {
                    return
                }
                submit = true;
                leaguesAPI.createBet($scope.model).then(function (data) {
                    _cancelBox();
                    $scope.model = {};
                    if (data.status == 'runing') {
                        alert('Đặt cược thành công. \nMã cược: ' + data.id);    
                    }
                    $rootScope.$broadcast('EVENT_BET_SUCCESS', data);
                    $rootScope.$broadcast('EVENT_ACCOUNT_REFRESH');
                    submit = false;
                }).catch(function (e) {
                    submit = false;
                    if (e && e.data && e.data.code == 'ODD_CHANGED') {
                        safeApply($scope, function () {
                            $scope.model.bet_value = e.data.data.newVal;  
                        })
                        if (!e.data.data.newVal) {
                            alert('Tỷ lệ cược đang được cập nhật!');
                        } else {
                            alert('Tỉ lệ thay đổi từ '+ e.data.data.oldVal +' đến ' + e.data.data.newVal);    
                        }
                    } else {
                        alert(e.data && e.data.msg || 'Có lỗi xảy ra, làm ơn reload page');
                    }
                });
            }

            function safeApply(scope, fn) {
                (scope.$$phase || scope.$root.$$phase) ? fn() : scope.$apply(fn);
            }
        }]
    }
}]);