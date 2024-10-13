angular.module('todoApp')
.filter('numberOdd', ['$filter', function($filter) {
  return function(input, fractionSize) {
    if (!input || input == '') return '';
    if (top.ODD_TYPE == 'decimal') {
      input = convertMalayToDecimal(input);
    }
    // if (top.ODD_TYPE == 'saba') {
    //   input = convertSaba(input);
    // }
    return $filter('number')(input, fractionSize);
  };
}])
.filter('numberPretty', ['$filter', function($filter) {
  return function(input, fractionSize) {
    if (!input || input == '') return 0;
    var val = $filter('number')(input, fractionSize);
    while ((val.charAt(val.length - 1) == '0' || val.charAt(val.length - 1) == '.') && val.indexOf('.') > 0) {
    	val = val.substr(0, val.length - 1);
    }
    return val;
  };
}]);