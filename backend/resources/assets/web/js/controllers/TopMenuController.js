angular.module('todoApp').controller('TopMenuController', ['$scope', '$location', '$localStorage', 'leaguesAPI', '$rootScope',
  function ($scope, $location, $localStorage, leaguesAPI, $rootScope) {
    

    $scope.logout = _logout;
    $scope.goBetList = _goBetList;
    $scope.goAccount = _goAccount;
    $scope.showHotNews = true;

    // $('#slides').slidesjs({
    //     width: 305,
    //     height: 165,
    //     navigation: false,
    //     play: {
    //       active: false,
    //     // [boolean] Generate the play and stop buttons.
    //     // You cannot use your own buttons. Sorry.
    //       effect: "slide",
    //     // [string] Can be either "slide" or "fade".
    //       interval: 3000,
    //     // [number] Time spent on each slide in milliseconds.
    //       auto: true,
    //     // [boolean] Start playing the slideshow on load.
    //       swap: true,
    //       // [boolean] show/hide stop and play buttons
    //       pauseOnHover: true,
    //       // [boolean] pause a playing slideshow on hover
    //       restartDelay: 2500
    //     // [number] restart delay on inactive slideshow
    //   }
    // })

    //  ======= PRIVATE =======
    function _logout(menu) {
      window.parent.postMessage(JSON.stringify({
        data: {},
        name: 'EVENT_GO_LOGOUT',
        to: 'main'
      }), '*');
    }

    function _goBetList() {
      window.parent.postMessage(JSON.stringify({
        data: {},
        name: 'EVENT_BET_SUCCESS',
        to: 'leftFrame'
      }), '*');

      $rootScope.$broadcast('EVENT_OPEN_BETLIST');
    }

    function _goAccount() {
      window.parent.postMessage(JSON.stringify({
        data: {
          account: 'full',
          sports: true
        },
        name: 'EVENT_MENU_SHOW',
        to: 'leftFrame'
      }), '*');
    }
  }
]);
