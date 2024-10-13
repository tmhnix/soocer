angular.module('todoApp')
    .directive('eventItem', ['$templateCache', function ($templateCache) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment         
        scope: {
            //@ reads the attribute value, = provides two-way binding, & works with functions
            type: '@',
            event: '<',
            leagueName: '<'
        },
        template: $templateCache.get('elements/event-item/event-item.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            $scope.odd_kind = top.ODD_TYPE;
            $scope.onBet = function (odd_type, bet_type, type, bet_value) {
               var data = {TYPE: top.TYPE, event: $scope.event, league_name: $scope.leagueName, bet_type: bet_type, type: type, bet_value: bet_value, odd_type: odd_type};
               window.parent.postMessage(JSON.stringify({
                   data: data,
                   name: 'EVENT_BET',
                   to: 'leftFrame'
               }), '*');
               //$rootScope.$broadcast('EVENT_BET', {event: $scope.event, league_name: $scope.leagueName, odd: odd, type: type, value: value, name: name});
            }
            //$rootScope.$broadcast('DEMO');
            
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