angular.module('todoApp').factory('leaguesAPI', ['$http',
    function ($http) {
        return {
            getInPlayLeagues: function (type) {
                return $http.get('/api/leagues/inplay?type=' + type).then(function (data) {
                    return data.data.data;
                });
            },
            getNumberGames: function (type) {
                return $http.get('/api/number_games').then(function (data) {
                    return data.data.data;
                });
            },
            getV2InPlayLeagues: function (type, game_type) {
                return $http.get('/api/v2/leagues/inplay?type=' + type + '&game_type=' + game_type).then(function (data) {
                    return data.data.data;
                });
            },
            getUpcomingPlayLeagues: function (type) {
                return $http.get('/api/leagues/upcoming?type=' + type).then(function (data) {
                    return data.data.data;
                });
            },
            getV2UpcomingPlayLeagues: function (type, game_type) {
                return $http.get('/api/v2/leagues/upcoming?type=' + type + '&game_type=' + game_type).then(function (data) {
                    return data.data.data;
                });
            },
            getInPlayLeaguesById: function ($id) {
                return $http.get('/api/leagues/inplay/' + $id).then(function (data) {
                    return data.data.data;
                });
            },
            getEventById: function ($id, $type) {
                return $http.get('/api/events/' + $id + '/' + $type).then(function (data) {
                    return data.data.data;
                });
            },
            createBet: function (data) {
                var url = '/api/bets';
                if (data.is_game) {
                    url = '/api/games';
                }
                return $http.post(url, data).then(function (data) {
                    return data.data.data;
                });
            },
            createGroup: function (data) {
                return $http.post('/api/bets/group', data).then(function (data) {
                    return data.data.data;
                });
            },
            getInplayBets: function () {
                return $http.get('api/bets/inplay').then(function (data) {
                    return data.data.data;
                });
            },
            getHistoriesBets: function () {
                return $http.get('api/bets/histories').then(function (data) {
                    return data.data.data;
                });
            },
            getLeagues: function () {
                return $http.get('api/leagues').then(function (data) {
                    return data.data.data;
                });
            },
            getAccountInfo: function () {
                return $http.get('api/account').then(function (data) {
                    return data.data.data;
                });
            },
            changeVersion: function () {
                return $http.get('api/version/change').then(function (data) {
                    return data.data.data;
                });
            },
            getInplayCorrectScore: function () {
                return $http.get('api/v2/correct_score').then(function (data) {
                    return data.data.data;
                });
            }
        }
    }
]);