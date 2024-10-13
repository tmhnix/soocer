angular.module('todoApp').controller('HomeV2Controller', ['$route', '$scope', '$location', '$localStorage', 'leaguesAPI', '$templateCache',
    function($route, $scope, $location, $localStorage, leaguesAPI, $templateCache) {
        /**
         * Responsible for highlighting the currently active menu item in the navbar.
         *
         * @param route
         * @returns {boolean}
         */
        // ======== Init ==========
        // console.log($route.current.params);
        var params = $route.current.$$route.params;
        top.TYPE = params.TYPE || top.TYPE;
        top.ODD_TYPE = params.ODD_TYPE || top.ODD_TYPE;
        top.GAME_TYPE = params.GAME_TYPE || top.GAME_TYPE;

        $scope.TYPE = top.TYPE;
        $scope.loading = {
            leagues: false,
            upleagues: false,
        }
        $scope.menu = {
            showLeague: false,
            sports: false,
            showPromotions: true
        }
        $scope.leagueNumber = 0;
        $scope.leagueSelectNumber = 0;
        loadInplay();
        loadUpcoming();

        // ========= Events ========
        $scope.onrefreshUpcoming = function() {
            console.log('reload');
            loadUpcoming();
        }

        $scope.onrefreshInplay = function() {
            console.log('reload onrefreshInplay');
            loadInplay();
        }
        $scope.openLeague = _openLeague;
        $scope.goToToday = function() {
            $location.path('home');
        }

        $scope.goToParlay = function() {
                $location.path('parlay');
            }
            // ======== PRIVATE FUNCTION ==========

        function _openLeague() {
            $scope.menu.showLeague = !$scope.menu.showLeague;
        }

        function loadInplay() {
            $scope.loading.leagues = true;
            leaguesAPI.getV2InPlayLeagues(top.TYPE, top.GAME_TYPE).then(function(data) {
                _updateLeague('leagues', data);

                setTimeout(function() {
                    safeApply($scope, function() {
                        $scope.loading.leagues = false;
                        $scope.leagues.sort(function(itemA, itemB) {
                            return itemA.order - itemB.order;
                        });
                    })
                }, 3000);
            });
        }

        function loadUpcoming() {
            $scope.loading.upleagues = true;
            leaguesAPI.getV2UpcomingPlayLeagues(top.TYPE, top.GAME_TYPE).then(function(data) {
                _updateLeague('upleagues', data);
                setTimeout(function() {
                    safeApply($scope, function() {
                        $scope.loading.upleagues = false;
                        $scope.upleagues.sort(function(itemA, itemB) {
                            return itemA.order_upcoming - itemB.order_upcoming;
                        });
                    })
                }, 3000);
            });
        }

        function _updateLeague(name, data) {
            if (!$scope[name]) {
                return $scope[name] = data;
            }
            // check not exist remove
            $scope[name] = $scope[name].filter(function(league, index) {
                return data.findIndex(function(item) {
                    return item.id == league.id;
                }) > -1;
            });
            // var leagues = $scope.leagues;
            for (var i = 0; i < data.length; i++) {
                var league = data[i];
                var index = $scope[name].findIndex(function(item) {
                    return item.id == league.id;
                })
                if (index == -1) { // add more leagues
                    $scope[name].push(league);
                } else {
                    _updateEvent(name, index, league);
                }
            }
        }

        function _updateUpComingLeague(data) {
            safeApply($scope, function(argument) {
                $scope.upleagues = data;
            })
        }

        function _updateEvent(name, index, league) {
            angular.forEach(league, function(value, key) {
                if (key !== 'events') {
                    $scope[name][index][key] = league[key];
                }
            });

            $scope[name][index].events = $scope[name][index].events.filter(function(event, index) {
                return league.events.findIndex(function(item) {
                    return item.event_id == event.event_id;
                }) > -1;
            });

            // check update events
            for (var i = 0; i < league.events.length; i++) {
                var event = league.events[i];
                var check = $scope[name][index].events.findIndex(function(item) {
                    return item.event_id == event.event_id;
                })
                if (check == -1) {
                    $scope[name][index].events.push(event);
                } else {
                    _updateOdd(name, index, check, event);
                }
            }
        }

        function _updateOdd(name, index1, index, event) {
            var old = $scope[name][index1].events[index];
            angular.forEach(old, function(value, key) {
                if (key !== 'odds') {
                    $scope[name][index1].events[index][key] = event[key];
                }
            });

            $scope[name][index1].events[index].odds = $scope[name][index1].events[index].odds.filter(function(odd, index) {
                return event.odds.findIndex(function(item) {
                    return item.odd_id == odd.odd_id;
                }) > -1;
            });

            for (var i = 0; i < event.odds.length; i++) {
                var odd = event.odds[i];
                var check = $scope[name][index1].events[index].odds.findIndex(function(item) {
                    return item.odd_id == odd.odd_id;
                })
                if (check == -1) {
                    $scope[name][index1].events[index].odds.push(odd);
                } else {
                    _updateOddSub(name, index1, index, check, odd);
                }
            }
        }

        function _updateOddSub(name, index2, index1, index, odd) {
            var subold = $scope[name][index2].events[index1].odds[index];
            safeApply($scope, function() {
                angular.forEach(subold, function(value, key) {
                    $scope[name][index2].events[index1].odds[index][key] = odd[key];
                });
            })
        }

        function safeApply(scope, fn) {
            (scope.$$phase || !scope.$root || scope.$root.$$phase) ? fn(): scope.$apply(fn);
        }

        worldCup();

        function worldCup() {
            var targetDate = new Date('Tue Jun 14 2018 23:00:00 GMT+0800 (台北標準時間)');

            if (new Date() >= targetDate) {
                //$('.countdown').remove();
                $('#WCBanner').attr('class', 'worldcup-open');
                $('#countdown-3').remove();
            } else {
                $('#countdown-3').timeTo({
                    timeTo: new Date(targetDate),
                    displayDays: 2,
                    theme: "black",
                    displayCaptions: true,
                    fontFamily: 'Arail, sans-serif',
                    fontSize: 15,
                    captionSize: 12,
                    callback: function() {
                        //$('.countdown').remove();
                        $('#WCBanner').attr('class', 'worldcup-open');
                        $('#countdown-3').remove();
                    }
                });

                function getHiddenProp() {
                    var prefixes = ['webkit', 'moz', 'ms', 'o'];

                    // if 'hidden' is natively supported just return it
                    if ('hidden' in document) return 'hidden';

                    // otherwise loop over all the known prefixes until we find one
                    for (var i = 0; i < prefixes.length; i++) {
                        if ((prefixes[i] + 'Hidden') in document)
                            return prefixes[i] + 'Hidden';
                    }

                    // otherwise it's not supported
                    return null;
                }

                var visProp = getHiddenProp();
                if (visProp) {
                    var evtname = visProp.replace(/[H|h]idden/, '') + 'visibilitychange';
                    document.addEventListener(evtname, function() {
                        $('#countdown-3').timeTo(targetDate);
                    }, false);
                }
            }
        }
    }
]);