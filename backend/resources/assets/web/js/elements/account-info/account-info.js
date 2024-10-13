angular.module('todoApp')
    .directive('accountInfo', ['$templateCache', 'leaguesAPI', function ($templateCache, leaguesAPI) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment
        scope: {
            show: '='
        },
        template: $templateCache.get('elements/account-info/account-info.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            // INIT
            $scope.loadInfo = loadInfo;
            $scope.onMenuAccount = onMenuAccount;
            $scope.accountSetting = {
                loading: false
            }
            loadInfo();

            //EVENT_BET_SUCCESS
            $scope.$on('EVENT_ACCOUNT_REFRESH', loadInfo);

            // bindEvent(window, 'message', function (e) {
            //     var data = JSON.parse(e.data);
            //     if (data.name == 'EVENT_ACCOUNT_REFRESH') {
            //         safeApply($scope, function (argument) {
            //             $rootScope.$broadcast('EVENT_MENU_SHOW', {account: 'mini', sports: false});
            //             $rootScope.$broadcast('CANCEL_BOX_BET');
            //             _betSuccess();
            //         })
            //     }
            // });

            // scope function            

            function loadInfo() {
                if ($scope.accountSetting.loading) {
                    return;
                }
                
                $scope.accountSetting.loading = true;
                leaguesAPI.getAccountInfo().then(function (data) {
                    $scope.account = data;
                    $rootScope.$broadcast('EVENT_UPDATE_MIN_MAX', data);
                    safeApply($scope, function () {
                        $scope.accountSetting.loading = false;    
                    });
                });
            }

            function onMenuAccount(show) {
                $scope.show = show;
            }

            function safeApply(scope, fn) {
                (scope.$$phase || scope.$root.$$phase) ? fn() : scope.$apply(fn);
            }
        }]
    }
}]);