angular.module('todoApp').controller('NumberGameController', [
    '$scope',
    '$location',
    '$localStorage',
    'leaguesAPI',
    '$templateCache',
    function($scope, $location, $localStorage, leaguesAPI, $templateCache) {
        /**
         * Responsible for highlighting the currently active menu item in the navbar.
         *
         * @param route
         * @returns {boolean}
         */
        // ======== Init ==========
        $scope.loading = {
            leagues: false,
            upleagues: false
        }

        $scope.number_games = [
            {data: []},
            {data: []}
        ]

        _loadNumberGame();

        $scope.loadNumberGame = _loadNumberGame 

        $scope.checkOn = function (value, number) {
            return value.ball_numbers && value.ball_numbers.indexOf(number) >= 0;
        }

        $scope.betBingo = function (item, type, bet_position, bet_value, position, odd_type, ss) {
            var data = {TYPE: top.TYPE, event: item, step: item.step, odd_type: odd_type, bet_type: type, game_type: 'number_game', bet_value: bet_value, bet_position: bet_position, ss:ss};
            window.parent.postMessage(JSON.stringify({
                data: data,
                name: 'EVENT_BET',
                to: 'leftFrame'
            }), '*');
        }

        function _loadNumberGame() {
            $scope.loading = true;
            leaguesAPI.getNumberGames().then(function (data) {
                if (!data.number) {
                    $scope.number_games[1] = {
                        name: 'Number Game'
                    }
                }
                if (!data.turbo) {
                    $scope.number_games[0] = {
                        name: 'Turbo Number Game'
                    }
                }

                angular.forEach(data.turbo, function(value, key) {
                  $scope.number_games[0][key] = value;
                });

                angular.forEach(data.number, function(value, key) {
                  $scope.number_games[1][key] = value;
                });

                setTimeout(function () {
                  safeApply($scope, function () {
                     $scope.loading = false;
                  })
                }, 3000);
            })
        }

        function safeApply(scope, fn) {
            scope.$$phase || scope.$root.$$phase ? fn() : scope.$apply(fn)
        }
    }
])