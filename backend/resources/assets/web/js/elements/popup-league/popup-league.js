angular.module('todoApp')
    .directive('popupLeague', ['$templateCache', 'leaguesAPI', function ($templateCache, leaguesAPI) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment
        scope: {
            //@ reads the attribute value, = provides two-way binding, & works with functions
            show: '=',
            leagueNumber: '=',
            leagueSelectNumber: '='
        },
        template: $templateCache.get('elements/popup-league/popup-league.html'), //'/popupLeague.template'
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            leaguesAPI.getLeagues().then(function (data) {
                safeApply($scope, function () {
                    $scope.leagueNumber = data.length;
                    var leagues = [];
                    var item = {};
                    data.forEach(function (val, index) {
                        if (index%2 == 0) {
                            item = {};
                            item.left = val;
                        } else {
                            item.right = val;
                            leagues.push(item);
                        }
                    });
                    $scope.leagues = leagues;
                })
            });
            $scope.closeLeague = function (argument) {
                $scope.show = false;
            }

            function safeApply(scope, fn) {
                (scope.$$phase || scope.$root.$$phase) ? fn() : scope.$apply(fn);
            }
        }]
    }
}]);