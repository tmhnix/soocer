angular.module('todoApp').controller('HomeController', ['$scope', '$location', '$localStorage', 'leaguesAPI', '$templateCache',
  function ($scope, $location, $localStorage, leaguesAPI, $templateCache) {
    /**
     * Responsible for highlighting the currently active menu item in the navbar.
     *
     * @param route
     * @returns {boolean}
     */
    // ======== Init ==========
    $scope.loading = {
      leagues: false,
      upleagues: false,
    }
    $scope.menu = {
      showLeague: false,
      sports: false
    }
    $scope.leagueNumber = 0;
    $scope.leagueSelectNumber = 0;
    loadInplay();
    loadUpcoming();

    // ========= Events ========
    $scope.onrefreshUpcoming = function () {
        console.log('reload');
        loadUpcoming();
    }

    $scope.onrefreshInplay = function () {
        console.log('reload onrefreshInplay');
        loadInplay();
    }
    $scope.openLeague = _openLeague;
    $scope.changeVersion = _changeVersion;
    // ======== PRIVATE FUNCTION ==========
    
    function _openLeague() {
      $scope.menu.showLeague = !$scope.menu.showLeague;
    }

    function _changeVersion() {
      SwitchVersion();
      offNewVersionPopup();
      leaguesAPI.changeVersion().then(function () {
        setTimeout(function () {
          // top.window.location.reload();
          top.window.location.href = "/";
        }, 1500);
      });
    }
    
    function loadInplay() {
      $scope.loading.leagues = true;
      leaguesAPI.getInPlayLeagues(top.TYPE).then(function (data) {
        _updateLeague('leagues', data);

        setTimeout(function () {
          safeApply($scope, function () {
            $scope.loading.leagues = false;
            $scope.leagues.sort(function (itemA, itemB) {
              return itemA.order - itemB.order;
            });
          })
        }, 3000);
      });
    }

    function loadUpcoming() {
      $scope.loading.upleagues = true;
      leaguesAPI.getUpcomingPlayLeagues(top.TYPE).then(function (data) {
        _updateLeague('upleagues', data);
        setTimeout(function () {
          safeApply($scope, function () {
            $scope.loading.upleagues = false;
            $scope.upleagues.sort(function (itemA, itemB) {
              return itemA.order_upcoming - itemB.order_upcoming;
            });
          })
        }, 3000);
      });
    }

    function _updateLeague(name, data) {
      if (!$scope[name]) {
        return $scope[name] = data;
      }
      // check not exist remove
      $scope[name] = $scope[name].filter(function (league, index) {
        return data.findIndex(function (item) {
          return item.id == league.id;
        }) > -1;
      });
      // var leagues = $scope.leagues;
      for (var i = 0; i < data.length; i++) {
        var league = data[i];
        var index = $scope[name].findIndex(function (item) {
          return item.id == league.id;
        })
        if (index == -1) { // add more leagues
          $scope[name].push(league);
        } else {
          _updateEvent(name, index, league);
        }
      }
    }

    function _updateUpComingLeague(data) {
      safeApply($scope, function (argument) {
         $scope.upleagues = data;
      })
    }

    function _updateEvent(name, index, league) {
        angular.forEach($scope[name][index], function(value, key) {
          if (key !== 'events') {
            $scope[name][index][key] = league[key];
          }
        });

        $scope[name][index].events = $scope[name][index].events.filter(function (event, index) {
          return league.events.findIndex(function (item) {
            return item.odd_id == event.odd_id;
          }) > -1;
        });

        // check update events
        for (var i = 0; i < league.events.length; i++) {
          var event = league.events[i];
          var check = $scope[name][index].events.findIndex(function (item) {
            return item.odd_id == event.odd_id;
          })
          if (check == -1) {
            $scope[name][index].events.push(event);
          } else {
            _updateOdd(name, index, check, event);
          }
        }
      }

      function _updateOdd(name, index1, index, event) {
       var old = $scope[name][index1].events[index];
        safeApply($scope, function () {
          angular.forEach(old, function(value, key) {
            $scope[name][index1].events[index][key] = event[key];
          });

          $scope[name][index1].events.sort(function (A, B) {
            return A.order - B.order;
          });
        })
      }

      function safeApply(scope, fn) {
        (scope.$$phase || scope.$root.$$phase) ? fn() : scope.$apply(fn);
      }
  }
]);
