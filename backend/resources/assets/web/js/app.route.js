angular.module('todoApp')
    .config(['$routeProvider', function ($routeProvider) {
        $routeProvider.when('/', {
            name: 'home',
            controller: 'HomeV2Controller',
            templateUrl: '/underodds',
            params: {
                TYPE: 'single',
                ODD_TYPE: 'malay',
                GAME_TYPE: 'socer'
            }
        }).when('/correct_score', {
            name: 'correct_score',
            controller: 'HomeV2Controller',
            templateUrl: '/correct_score',
            params: {
                TYPE: 'single',
                ODD_TYPE: 'malay',
                GAME_TYPE: 'socer'
            }
        })
        .when('/saba_game', {
            name: 'saba_game',
            controller: 'HomeV2Controller',
            templateUrl: '/saba_game',
            params: {
                TYPE: 'single',
                ODD_TYPE: 'saba',
                GAME_TYPE: 'saba'
            }
        })
        .when('/parlay', {
            name: 'parlay',
            controller: 'HomeV2Controller',
            templateUrl: '/underodds',
            params: {
                TYPE: 'multiple',
                ODD_TYPE: 'decimal',
                GAME_TYPE: 'socer'
            }
        }).when('/bingo', {
            name: 'bingo',
            controller: 'HomeV2Controller',
            templateUrl: '/bingo',
            params: {
                TYPE: 'multiple',
                ODD_TYPE: 'decimal'
            }
        }).otherwise({
            redirectTo: '/'
        });
    }]);