angular.module('todoApp')
    .directive('textRed', ['$templateCache', function ($templateCache) {
    return {
        restrict: 'A', //E = element, A = attribute, C = class, M = comment
        link: function (scope, element, attrs) {
            if (parseFloat(element[0].innerText) < 0) {
                element.addClass('FavOddsClass');
            } else {
                element.addClass('UdrDogOddsClass');
            }
            // scope.$watch(attrs.defineText, function(value, oldValue){
            //     var timeout = null;
            //     if (value !== oldValue) {
            //         element.parent().addClass('Odds_Upd');
            //         timeout && clearTimeout(timeout);
            //         timeout = setTimeout(function () {
            //             element.parent().removeClass('Odds_Upd');
            //         }, 20000);
            //     }
            //     if (value < 0) {
            //         element.addClass('FavOddsClass');
            //     } else {
            //         element.removeClass('FavOddsClass');
            //     }
            // });
        }//DOM manipulation
    }
}]);