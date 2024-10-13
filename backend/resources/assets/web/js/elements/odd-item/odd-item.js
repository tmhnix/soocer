angular.module('todoApp')
    .directive('oddItem', ['$templateCache', function ($templateCache) {
    return {
        restrict: 'EA', //E = element, A = attribute, C = class, M = comment         
        scope: {
            //@ reads the attribute value, = provides two-way binding, & works with functions
            type: '@',
            odd: '<',
            key: '<',
            event: '<',
            leagueName: '<'
        },
        template: $templateCache.get('elements/odd-item/odd-item.html'),
        controller: ['$scope', '$rootScope', function ($scope, $rootScope) {
            $scope.odd_kind = top.ODD_TYPE;
            $scope.onBet = function (odd_type, bet_type, type, bet_value) {
                // if(bet_type == 'correct_score') {
                //     alert('Tính năng đang được phát triển.');
                //     return;
                // }
                if ((bet_type == 'ft_1x2' || bet_type == 'hf_1x2') && top.TYPE == 'multiple') {
                    return
                }
                var data = {TYPE: top.TYPE, event: $.extend({}, $scope.odd, $scope.event, {odds: null, $$hashKey: null}), league_name: $scope.leagueName, bet_type: bet_type, type: type, bet_value: bet_value, odd_type: odd_type};
                $rootScope.$broadcast('EVENT_BET', data);
            }

            $scope.openMatch = function (argument) {
                window.open('http://ls.1266366.com/index.aspx?clientid=846&flag=lcw&language=en&clientmatchid='+$scope.odd.event_id+'&t=S');
            }
            $scope.openLive = function (argument) {
                function popupwindow(url, title, w, h) {
                    var left = (screen.width / 2) - (w / 2);
                    var top = (screen.height / 2) - (h / 2);
                    return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
                  }
                  popupwindow("/live/" + $scope.event.event_id + "/" + $scope.event.live_id, $scope.event.away + " - " + $scope.event.home, 800, 500)
            }
            $scope.openStatic = function (argument) {
                window.open('http://ls.1266366.com/index.aspx?clientid=846&flag=ls&language=vi&clientmatchid='+$scope.odd.event_id);
            }
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