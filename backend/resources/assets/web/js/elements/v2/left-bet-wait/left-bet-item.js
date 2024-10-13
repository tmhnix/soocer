angular.module('todoApp')
    .directive('leftBetItemV2', ['$templateCache', function ($templateCache) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment
        scope: {
            'value': '<'
        },
        template: $templateCache.get('elements/v2/left-bet-wait/left-bet-item.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
        }]
    }
}]);