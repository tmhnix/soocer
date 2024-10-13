angular.module('todoApp', [
  'ngRoute',
  'ngResource',
  'ngStorage',
  'ngSanitize',
  'templates'
  ], ['$interpolateProvider', function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
  }]).config(['$httpProvider', function ($httpProvider) {
  	 $httpProvider.interceptors.push('RequestsErrorHandler');
  }])
