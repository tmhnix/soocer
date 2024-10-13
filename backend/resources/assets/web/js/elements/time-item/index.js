angular.module('todoApp')
    .directive('timeItem', ['$templateCache', function ($templateCache) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment         
        scope: {
            //@ reads the attribute value, = provides two-way binding, & works with functions
            time: '='
        },
        template: $templateCache.get('elements/time-item/index.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            $scope.$watch('time', function (newVal) {
              startTime();
            });

            var time = null;
            function startTime() {
               time && clearInterval(time);
               time = setInterval(function () {
                 if ($scope.time <= 0) {
                  $scope.time = 0;
                  clearInterval(time);
                  return;
                 }
                 safeApply($scope, function () {
                  $scope.time--;
                 })
              }, 1000) 
            }

            function safeApply(scope, fn) {
                scope.$$phase || scope.$root.$$phase ? fn() : scope.$apply(fn)
            }
        }]
    }
}]);