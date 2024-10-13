angular.module('todoApp')
    .directive('leftSports', ['$templateCache', 'leaguesAPI', function ($templateCache, leaguesAPI) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment
        scope: {
            //@ reads the attribute value, = provides two-way binding, & works with functions
            show: '='
        },
        template: $templateCache.get('elements/left-sports/left-sports.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            $scope.onMenuSports = function () {
                $scope.show = !$scope.show;
            }
        }]
    }
}]);