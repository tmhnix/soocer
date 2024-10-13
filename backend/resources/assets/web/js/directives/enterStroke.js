// Reacts upon enter key press.
angular.module('todoApp').directive('enterStroke',
  function () {
    return function (scope, element, attrs) {
      element.bind('keydown keypress', function (event) {
        if (event.which === 13) {
          scope.$apply(function () {
            scope.$eval(attrs.enterStroke);
          });
          event.preventDefault();
        }
      });
    };
  }
);