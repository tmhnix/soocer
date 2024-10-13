angular.module('todoApp').controller('LeftController', ['$scope', '$location', '$localStorage', 'leaguesAPI', '$templateCache',
  function ($scope, $location, $localStorage, leaguesAPI, $templateCache) {
    /**
     * Responsible for highlighting the currently active menu item in the navbar.
     *
     * @param route
     * @returns {boolean}
     */
    $scope.menu = {
      account: 'full',
      sports: true
    }

    $scope.onMenuAccount = _onMenuAccount;
    $scope.changeVersion = _changeVersion;
    $scope.onMenuSports = _onMenuSports;
    $scope.$on('EVENT_MENU_SHOW', function (event, data) {
      angular.forEach(data, function(value, key) {
        $scope.menu[key] = value;
      });
    });

    bindEvent(window, 'message', function (e) {
      var data = JSON.parse(e.data);
      if (data.name == 'EVENT_MENU_SHOW') {
        safeApply($scope, function (argument) {
          angular.forEach(data.data, function(value, key) {
            $scope.menu[key] = value;
          });  
        })
      }
    });

    //  ======= PRIVATE =======
    function _changeVersion() {
      SwitchVersion();
      leaguesAPI.changeVersion().then(function () {
        setTimeout(function () {
          top.window.location.reload();
        }, 1500);
      });
    }
    function _onMenuAccount(menu) {

      $scope.menu.account = menu;
    }

    function _onMenuSports() {
      $scope.menu.sports = !$scope.menu.sports;
    }
    function safeApply(scope, fn) {
      (scope.$$phase || scope.$root.$$phase) ? fn() : scope.$apply(fn);
    }
  }
]);
