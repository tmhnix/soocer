angular.module('todoApp')
    .directive('mulBetItem', ['$templateCache', 'leaguesAPI', function ($templateCache, leaguesAPI) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment
        scope: {
            'item': '<',
            'onDelete': '<'
        },
        template: $templateCache.get('elements/left-bet/mul-bet-item.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            $scope.onDeleteItem = function () {
                $scope.onDelete && $scope.onDelete($scope.item.odd_id);
            }
        }]
    }
}]);