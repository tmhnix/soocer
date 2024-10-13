angular.module('todoApp')
    .directive('numbeGames', ['$templateCache', 'leaguesAPI', function ($templateCache, leaguesAPI) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment
        scope: {
            list: '='
        },
        template: $templateCache.get('elements/numbe-games/index.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            /**
             * Responsible for highlighting the currently active menu item in the navbar.
             *
             * @param route
             * @returns {boolean}
             */
            // ======== Init ==========

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

            function safeApply(scope, fn) {
                scope.$$phase || scope.$root.$$phase ? fn() : scope.$apply(fn)
            }
        }]
    }
}]);