angular.module('todoApp').controller('LeftV2Controller', ['$scope', '$location', '$localStorage', 'leaguesAPI', '$templateCache',
  function ($scope, $location, $localStorage, leaguesAPI, $templateCache) {

    $scope.menu = {
      account: false,
      sports: true
    }

    $scope.onChangeVersion = function () {
      $('#change_version').show();
      leaguesAPI.changeVersion().then(function () {
        setTimeout(function () {
          window.location.reload();
        }, 1500);
      });
    }
  }
]);
