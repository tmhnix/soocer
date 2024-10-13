angular.module('todoApp')
    .directive('defineText', ['$templateCache', function ($templateCache) {
    return {
        restrict: 'A', //E = element, A = attribute, C = class, M = comment
        link: function (scope, element, attrs) {
            scope.$watch(attrs.defineText, function(value, oldValue){
                var timeout = null;
                if (value !== oldValue) {
                    element.parent().addClass('Odds_Upd statusChanged');
                    timeout && clearTimeout(timeout);
                    timeout = setTimeout(function () {
                        element.parent().removeClass('Odds_Upd statusChanged');
                    }, 20000);
                }
                if (attrs.oddKind == 'decimal') {
                    value = convertMalayToDecimal(value);
                }
              
                if (value < 0) {
                    element.addClass('FavOddsClass');
                } else {
                    element.removeClass('FavOddsClass');
                }


            });
        }//DOM manipulation
    }
}]);