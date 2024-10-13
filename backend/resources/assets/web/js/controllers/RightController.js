angular.module('todoApp').controller('RightController', ['$scope', '$location', '$localStorage', 'leaguesAPI', '$templateCache',
  function ($scope, $location, $localStorage, leaguesAPI, $templateCache) {
    /**
     * Responsible for highlighting the currently active menu item in the navbar.
     *
     * @param route
     * @returns {boolean}
     */
    $scope.rightOpen = false;
    
    setTimeout(function (argument) {
      safeApply($scope, function () {
        $scope.openSlide();
      });
    }, 2000);
    $scope.openSlide = function (argument) {
      $scope.rightOpen = !$scope.rightOpen;
    }

    $('#slides').slidesjs({
        width: 305,
        height: 165,
        navigation: false,
        play: {
          active: false,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
          effect: "slide",
        // [string] Can be either "slide" or "fade".
          interval: 3000,
        // [number] Time spent on each slide in milliseconds.
          auto: true,
        // [boolean] Start playing the slideshow on load.
          swap: true,
          // [boolean] show/hide stop and play buttons
          pauseOnHover: true,
          // [boolean] pause a playing slideshow on hover
          restartDelay: 2500
        // [number] restart delay on inactive slideshow
      }
    })

    var swiper = new Swiper('.swiper-container', {
      width:275,
      height:105,
      autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: '.arrow-left',
        prevEl: '.arrow-right',
      }
    });
    
    function safeApply(scope, fn) {
      (scope.$$phase || scope.$root.$$phase) ? fn() : scope.$apply(fn);
    }
  }
]);
