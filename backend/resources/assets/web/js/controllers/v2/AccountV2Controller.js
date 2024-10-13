angular.module('todoApp').controller('AccountV2Controller', ['$scope', '$location', '$localStorage', 'leaguesAPI', '$templateCache', '$rootScope',
  function ($scope, $location, $localStorage, leaguesAPI, $templateCache, $rootScope) {
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
                  setTimeout(function () {
                    $scope.accountSetting.loading = false;
                  }, 2000);
                });
              });
            }

            function onMenuAccount(show) {
              $scope.show = show;
            }

            function safeApply(scope, fn) {
              (scope.$$phase || scope.$root.$$phase) ? fn() : scope.$apply(fn);
            }
  }
]);
