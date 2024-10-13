angular.module('todoApp')
    .directive('defineTextV2', ['$templateCache', function ($templateCache) {
    return {
        restrict: 'A', //E = element, A = attribute, C = class, M = comment
        link: function (scope, element, attrs) {
            scope.$watch(attrs.defineTextV2, function(value, oldValue){
                var timeout = null;
                element.removeClass('indicatorUp');
                element.removeClass('indicatorDown');
                if (value !== oldValue) {
                    if (value > oldValue) {
                        element.addClass('indicatorUp');
                    } else {
                        element.addClass('indicatorDown');
                    }
                }
                if (attrs.oddKind == 'decimal') {
                    value = convertMalayToDecimal(value);
                }

                // if(attrs.oddKind == 'saba') {
                //     value = convertSaba(value)
                // }
                if (value < 0) {
                    element.addClass('underdog');
                } else {
                    element.removeClass('underdog');
                }
            });
        }//DOM manipulation
    }
}]);