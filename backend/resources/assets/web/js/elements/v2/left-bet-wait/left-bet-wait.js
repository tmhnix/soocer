angular.module('todoApp')
    .directive('leftBetWaitV2', ['$templateCache', 'leaguesAPI', function ($templateCache, leaguesAPI) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment
        template: $templateCache.get('elements/v2/left-bet-wait/left-bet-wait.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            // INIT
            var interval;
            var timeout;
            $scope.loadBets = loadBets;
            $scope.openBetList = openBetList;
            $scope.waitSetting = {
                type: 'betList',
                bet_number: 5,
                loading: false
            }
            $scope.waitData = {
                betList: [],
                waitingBets: [],
                voidTicket: [],
                voidTicketCaches: []
            }
            var waitingBetsCaches = [];
            $scope.loadBets();

            //EVENT_BET_SUCCESS
            $scope.$on('EVENT_BET_SUCCESS', _betSuccess);

            // scope function
            function _betSuccess(event, data) {
                if (data && data.status == 'pending') {
                    $scope.waitSetting.type = 'waitingBets';
                } else {
                    $scope.waitSetting.type = 'betList';
                }
                $scope.loadBets();
            }

            function loadBets() {
                if ($scope.waitSetting.loading) {
                    return;
                }
                $scope.waitSetting.bet_number = 0;
                interval && clearInterval(interval);
                timeout && clearInterval(timeout);
                $scope.waitSetting.loading = true;
                leaguesAPI.getInplayBets().then(function (data) {
                    var waitingBets = [];
                    var betList = [];
                    var voidTicket = [];
                    var voidTicketCaches = [];
                    data.map(function (item) {
                        if (item.status == 'pending') {
                            if (waitingBetsCaches.indexOf(item.id) == -1) {
                                waitingBetsCaches.push(item.id);    
                            }
                            waitingBets.push(item);
                        } else if (item.status == 'runing') {
                            betList.push(item);
                            if (waitingBetsCaches.indexOf(item.id) > -1) {
                                removeFromWaitBets(item.id);
                            }
                        } else {
                            if (waitingBetsCaches.indexOf(item.id) > -1) {
                                $rootScope.$broadcast('EVENT_ACCOUNT_REFRESH');
                                voidTicketCaches.push(item);
                            } 
                            voidTicket.push(item);
                        }
                    });

                    $scope.waitData.waitingBets = waitingBets;
                    $scope.waitData.betList = betList;
                    $scope.waitData.voidTicket = voidTicket;
                    $scope.waitData.voidTicketCaches = voidTicketCaches;
                    $scope.waitSetting.loading = false;
                    if (waitingBets.length > 0) {
                        startCountDown(5);
                    } else if (betList.length) {
                        reloadBets();
                    }
                });
            }

            function reloadBets() {
                console.log('Reload');
                timeout && clearTimeout(timeout);
                timeout = setTimeout(function () {
                    console.log('Reload 1');
                    $scope.$apply(function () {
                        $scope.loadBets();
                    });
                }, 1000 * 3 * 60);
            }

            function startCountDown(bet_number) {
                $scope.waitSetting.type = 'waitingBets';
                $scope.waitSetting.bet_number = bet_number;
                interval && clearInterval(interval);
                interval = setInterval(function () {
                    $scope.$apply(function () {
                        $scope.waitSetting.bet_number--;
                        if ($scope.waitSetting.bet_number === 0) {
                            clearInterval(interval);
                            $scope.loadBets();
                        }
                    });
                }, 800);
            }

            function removeFromWaitBets(val) {
                waitingBetsCaches = waitingBetsCaches.filter(function (id, index) {
                    return val !== id;
                });
                $rootScope.$broadcast('EVENT_ACCOUNT_REFRESH');
            }

            function openBetList(type) {
                waitingBetsCaches = waitingBetsCaches.filter(function (item, index) {
                    return $scope.waitData.voidTicketCaches.findIndex(function (val) {
                        return val.id == item;
                    }) == -1;
                });
                $scope.waitData.voidTicketCaches = [];
                $scope.waitSetting.type = type;
            }

            function safeApply(scope, fn) {
                (scope.$$phase || scope.$root.$$phase) ? fn() : scope.$apply(fn);
            }
        }]
    }
}]);