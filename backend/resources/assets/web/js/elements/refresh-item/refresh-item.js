angular.module('todoApp')
    .directive('refreshItem', ['$templateCache', function ($templateCache) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment         
        scope: {
            //@ reads the attribute value, = provides two-way binding, & works with functions
            number: '@',
            type: '@',
            onRefresh: '<',
            loading: '<'
        },
        template: $templateCache.get('elements/refresh-item/refresh-item.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            console.log('init');
            var number = $scope.number;
            var interval = null;
            run();

            $scope.$watch('loading', function(value, oldValue){
                if (value) {
                    $scope.number = '';
                    interval && clearInterval(interval);
                } else {
                    run();
                }
            });

            $scope.$on('$destroy', function() {
                interval && clearInterval(interval);
            });

            $scope.reload = function (argument) {
                if (!$scope.loading) {
                    $scope.onRefresh && $scope.onRefresh();
                }
            }

            function safeApply(scope, fn) {
                (scope.$$phase || scope.$root.$$phase) ? fn() : scope.$apply(fn);
            }

            function run() {
                if ($scope.type == 'inplay') return;
                $scope.number = number;
                interval = setInterval(function () {
                    safeApply($scope, function () {
                        $scope.number--;
                        if ($scope.number == 0) {
                            console.log('DOne');
                            $scope.number = number;
                            $scope.onRefresh && $scope.onRefresh();
                        }
                    });
                }, 1000);
            }
            // $scope.title = '5 anh em';
        }], //Embed a custom controller in the directive
        link: function (scope, element, attrs) {
            // setTimeout(function (argument) {
            //     scope.$apply(function (argument) {
            //           scope.title = '5 anh em'; 
            //     });
            // }, 5000);
        }//DOM manipulation
    }
}]);