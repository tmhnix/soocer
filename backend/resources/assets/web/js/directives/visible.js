angular.module('todoApp').directive('visible',
  function () {
    return {
      restrict: 'A',

      link: function(scope, element, attributes) {
        scope.$watch(attributes.visible, function(value){
          element.css('visibility', value ? 'visible' : 'hidden');
        });
      }
    };
  }
);