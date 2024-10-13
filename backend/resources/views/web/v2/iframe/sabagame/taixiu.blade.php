<script src="./build/js/web-all-a3819688ae.js"></script>
<div id="TaixiuContainer" class="TaixiuContainer">
  <div class="accountTable">
    <div class="tableHead">
      <div class="date-smaller">Phiên</div>
      <div class="time">Thời gian</div>
      <div class="turnover">Chẳn</div>
      <div class="credit">Lẻ</div>
      <div class="credit">3 Đỏ</div>
      <div class="credit">4 Đỏ</div>
      <div class="credit">3 Trắng</div>
      <div class="credit">4 Trắng</div>
      <div class="other">Thắng</div>
    </div>
    <div class="tableBody">
    </div>

  </div>
</div>
<script>
  const cookies = document.cookie.split(';');
  const laravel_session = cookies[1].trim().split('laravel_session=');
  $.ajax({
    method: 'get',
    url: "api/sabagame/history/{{ $game }}",
    headers: {
      'session': laravel_session[1],
      'domain':  window.location.protocol + '//' + window.location.host
    }
  }).done(function() {

  });
  let data = [{
      "tralai": 20000,
      "thanhtoan": true,
      "win": true,
      "betwin": 0,
      "bot": true,
      "_id": "61cb4707ecb35559e82bad3c",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 107,
      "bet": 20000,
      "select": true,
      "time": "2021-12-28T17:19:03.702Z",
      "__v": 0
    },
    {
      "tralai": 1630000,
      "thanhtoan": true,
      "win": false,
      "betwin": 0,
      "bot": true,
      "_id": "61cb46b6ecb35559e82babcb",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 106,
      "bet": 1630000,
      "select": false,
      "time": "2021-12-28T17:17:42.904Z",
      "__v": 0
    },
    {
      "tralai": 50000,
      "thanhtoan": true,
      "win": false,
      "betwin": 0,
      "bot": true,
      "_id": "61cb4666ecb35559e82baa5b",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 105,
      "bet": 50000,
      "select": true,
      "time": "2021-12-28T17:16:22.016Z",
      "__v": 0
    },
    {
      "tralai": 60000,
      "thanhtoan": true,
      "win": false,
      "betwin": 0,
      "bot": true,
      "_id": "61cb4615ecb35559e82ba8e9",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 104,
      "bet": 60000,
      "select": true,
      "time": "2021-12-28T17:15:01.281Z",
      "__v": 0
    },
    {
      "tralai": 50000,
      "thanhtoan": true,
      "win": false,
      "betwin": 0,
      "bot": true,
      "_id": "61cb45c4ecb35559e82ba76b",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 103,
      "bet": 50000,
      "select": false,
      "time": "2021-12-28T17:13:40.373Z",
      "__v": 0
    },
    {
      "tralai": 900000,
      "thanhtoan": true,
      "win": false,
      "betwin": 0,
      "bot": true,
      "_id": "61cb4573ecb35559e82ba5cd",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 102,
      "bet": 900000,
      "select": true,
      "time": "2021-12-28T17:12:19.425Z",
      "__v": 0
    },
    {
      "tralai": 700000,
      "thanhtoan": true,
      "win": true,
      "betwin": 0,
      "bot": true,
      "_id": "61cb4522ecb35559e82ba45a",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 101,
      "bet": 700000,
      "select": false,
      "time": "2021-12-28T17:10:58.517Z",
      "__v": 0
    },
    {
      "tralai": 500000,
      "thanhtoan": true,
      "win": true,
      "betwin": 0,
      "bot": true,
      "_id": "61cb44d1ecb35559e82ba2e4",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 100,
      "bet": 500000,
      "select": true,
      "time": "2021-12-28T17:09:37.602Z",
      "__v": 0
    },
    {
      "tralai": 150000,
      "thanhtoan": true,
      "win": false,
      "betwin": 0,
      "bot": true,
      "_id": "61cb4480ecb35559e82ba174",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 99,
      "bet": 150000,
      "select": false,
      "time": "2021-12-28T17:08:16.843Z",
      "__v": 0
    },
    {
      "tralai": 120000,
      "thanhtoan": true,
      "win": true,
      "betwin": 0,
      "bot": true,
      "_id": "61cb4430ecb35559e82b9fd2",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 98,
      "bet": 120000,
      "select": true,
      "time": "2021-12-28T17:06:56.145Z",
      "__v": 0
    },
    {
      "tralai": 230000,
      "thanhtoan": true,
      "win": true,
      "betwin": 0,
      "bot": true,
      "_id": "61cb43dfecb35559e82b9e40",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 97,
      "bet": 230000,
      "select": false,
      "time": "2021-12-28T17:05:35.265Z",
      "__v": 0
    },
    {
      "tralai": 250000,
      "thanhtoan": true,
      "win": true,
      "betwin": 0,
      "bot": true,
      "_id": "61cb438eecb35559e82b9cd0",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 96,
      "bet": 250000,
      "select": true,
      "time": "2021-12-28T17:04:14.420Z",
      "__v": 0
    },
    {
      "tralai": 600000,
      "thanhtoan": true,
      "win": false,
      "betwin": 0,
      "bot": true,
      "_id": "61cb433decb35559e82b9b4f",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 95,
      "bet": 600000,
      "select": true,
      "time": "2021-12-28T17:02:53.615Z",
      "__v": 0
    },
    {
      "tralai": 120000,
      "thanhtoan": true,
      "win": true,
      "betwin": 0,
      "bot": true,
      "_id": "61cb42edecb35559e82b99e3",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 94,
      "bet": 120000,
      "select": false,
      "time": "2021-12-28T17:01:33.804Z",
      "__v": 0
    },
    {
      "tralai": 510000,
      "thanhtoan": true,
      "win": true,
      "betwin": 0,
      "bot": true,
      "_id": "61cb429becb35559e82b9848",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 93,
      "bet": 510000,
      "select": false,
      "time": "2021-12-28T17:00:11.962Z",
      "__v": 0
    },
    {
      "tralai": 700000,
      "thanhtoan": true,
      "win": true,
      "betwin": 0,
      "bot": true,
      "_id": "61cb424becb35559e82b96b5",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 92,
      "bet": 700000,
      "select": false,
      "time": "2021-12-28T16:58:51.145Z",
      "__v": 0
    },
    {
      "tralai": 40000,
      "thanhtoan": true,
      "win": false,
      "betwin": 0,
      "bot": true,
      "_id": "61cb41faecb35559e82b95f9",
      "uid": "61cb41595828c966f4877a91",
      "name": "12345678911",
      "phien": 91,
      "bet": 40000,
      "select": false,
      "time": "2021-12-28T16:57:30.389Z",
      "__v": 0
    }
  ];

  data.forEach((row) => {
    let r = ' <div class="tableRow-pointer" style="cursor: pointer;">';
    r += '<div class="date-smaller">'+ row.phien +'</div>';
    r += '<div class="time">'+ row.time +'</div>';
    r += '<div class="turnover">'+ (row.select ? 'Chẳn' : 'Lẻ') +'</div>';
    r += '<div class="credit">'+ row.bet +'</div>';
    r += '<div class="commission">'+ (row.win ? 'Thắng' : 'Thua') +'</div>';
    r += '<div class="balance">'+ row.tralai +'</div>';
    r += '<div class="other">'+ row.betwin +'</div>';
    r += '</div>'
    $('.tableBody').append(r);
  })
</script>