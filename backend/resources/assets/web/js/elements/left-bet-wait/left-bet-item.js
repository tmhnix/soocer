angular.module('todoApp')
    .directive('leftBetItem', ['$templateCache', function ($templateCache) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment
        scope: {
            'value': '<'
        },
        template: $templateCache.get('elements/left-bet-wait/left-bet-item.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
        }]
    }
}]);