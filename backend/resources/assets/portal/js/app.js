angular.module('portal', [
  'ngRoute',
  'ngResource',
  'ngStorage'
  ], ['$interpolateProvider', function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
  }]);