angular.module('todoApp').filter('timer', function() {
  return function(input) {
  	if (!input || input.tm == 0 && String(input.tt) == '0') {
  		return '!Live';
  	}
  	var hh = 1;
  	if (input.tm < 45 || input.ta > 0 && input.tm < 55) {
  		hh = 1;
  	} else if (input.tm >= 45 && input.tm < 55 && String(input.tt) == 0) {
  		hh = 0;
  	} else {
  		hh = 2;
  	}
    return hh == 0 ? 'H.Time' : hh + 'H ' + (input.tm - (hh == 2 ? 45 : 0)) + '\'';
  }
});