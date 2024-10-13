angular.module('todoApp').filter('range', function() {
  return function(input, total) {
    if (!total) return input;
    total = parseInt(total);

    for (var i=0; i<total; i++) {
      input.push(i);
    }

    return input;
  };
}).filter('to_trusted', ['$sce', function($sce){
  return function(text) {
    return $sce.trustAsHtml(text);
  };
}]).filter('oddName', function(){
  return function(data) {
    if (['ft_ou', 'hf_ou'].indexOf(data.bet_type) > -1) {
      if (data.bet_position == 0) {
        return 'Tài';
      } else {
        return 'Xỉu';
      }
    }
    return data.event[data.bet_position == 0 ? 'home' : 'away'];
  };
}).filter('betType', function(){
  return function(data) {
    switch (data.bet_type) {
      case 'ft_ou':
        return 'Tài/Xỉu';
      case 'hf_ou':
        return '1H Tài/Xỉu';
      case 'ft_hdp':
        return 'Handicap';
      case 'hf_hdp':
        return '1H Handicap';
      default:
        return 'Handicap';
        break;
    }
  };
})
.filter('handicapValue', function(){
  return function(item) {
    if (item.bet_type == 'game_next_ou') {
      return 37.5;
    }
    if (!item.odd) return;
    if (['ft_ou', 'hf_ou'].indexOf(item.bet_type) > -1) {
     return item.odd.handicap_value; 
    }
    
    if(item.event.saba) {
      // if(item.odd.handicap_team == 'home') {
        return (item.bet_position == 0 ? -1: 1) * parseFloat(item.odd.handicap_value);
      // }
      // return parseFloat(item.odd.handicap_value);
      
    } else {
      return ((item.odd.handicap_team == 'home' ? -1 : 1) * (item.bet_position == 0 ? 1: -1)) * parseFloat(item.odd.handicap_value);
    }
    
  };
})
.filter('betsValue', function(){
  return function(bets) {
    if (!bets || !bets.length) return 0;
    var result = 1;
    bets.map(function (value) {
      result *= convertMalayToDecimal(parseFloat(value.bet_value));
    });
    return Math.abs(Math.round(result * 100)/ 100);
  };
})
.filter('safeHtml', ['$sce', function($sce){
  return function(item) {
    return $sce.trustAsHtml(item)
  };
}])
.filter('payAmount', function(){
  return function(item) {
    if (item.bet_value == '' || !item.bet_amount) {
      return '';
    }
    var amount = Math.abs(item.bet_value);
    return (amount + 1) * item.bet_amount;
  };
})
.filter('statusVn', function(){
  return function(item, type) {
    if (type == 'cancel') {
      return 'Hoàn Phí';
    }
    if (type == 'runing'){
      return 'Đang chạy';
    }
    if (type == 'pending'){
      return 'Đang chờ';
    }
    var vns = {
      'won': 'Thắng',
      'lose': 'Thua',
      'draw': 'Hòa'
    }
    return vns[item];
  };
}).filter('timeStatus', function(){
  return function(item, type) {
    var vns = {
      0: 'Đang chạy',
      1: 'Đang chạy',
      2: 'Đang cập nhật',
      3: 'Hoàn thành'
    }
    return vns[item];
  };
})
