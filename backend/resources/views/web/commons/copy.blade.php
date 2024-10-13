<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="height: 100%">
<head>
  <title></title>
</head>
<body style="height: 100%">
<p id="loading">Loading ...</p>
<iframe src="https://mkt.zpisportbk.com" name="content" id="content" height="100%" 
style="height: 100%; width: 100%; margin-left: -203px;visibility: hidden;" frameborder="0"></iframe>
</body>
<script type="text/javascript">
	var type = getParameter("type");
	setTimeout(function () {
		loadSport(type);
		document.querySelector('#loading').style.display = 'none';
		document.querySelector('#content').style.visibility = 'visible';
	}, 3000);
	var currentType = null;

  function getParameter(paramName) {
    var searchString = window.location.search.substring(1),
    i, val, params = searchString.split("&");

    for (i=0;i<params.length;i++) {
      val = params[i].split("=");
      if (val[0] == paramName) {
        return val[1];
      }
    }
    return null;
  }

  function loadSport(type) {
  	if (currentType === type) {
  		return;
  	}
  	currentType = type;
  	var url = "https://mkt.zpisportbk.com/NBA.aspx?Sport=2&Market=t&DispVer=3&Game=0";
  	switch(type) {
  		case 'numberGame':
  			url = "https://mkt.zpisportbk.com/Bingo.aspx?Sport=161&Market=t&DispVer=3";
  			break;
  		case 'NBA':
  			url = "https://mkt.zpisportbk.com/NBA.aspx?Sport=2&Market=t&DispVer=3&Game=0";
  			break;
  		case 'Baseball':
  			url = "https://mkt.zpisportbk.com/Baseball.aspx?Sport=8&Market=t&DispVer=3&Game=0";
  			break;
  		case 'Hocky':
  			url = "https://mkt.zpisportbk.com/Tennis.aspx?Sport=4&Market=t&DispVer=3&Game=0";
  			break;
  		case 'Tennis':
  			url = "https://mkt.zpisportbk.com/Tennis.aspx?Sport=5&Market=t&DispVer=3&Game=0";
  			break;
  		case 'Volleyball':
  			url = "https://mkt.zpisportbk.com/Tennis.aspx?Sport=6&Market=t&DispVer=3&Game=0";
  			break;
  		case 'E-Sports':
  			url = "https://mkt.zpisportbk.com/Tennis.aspx?Sport=43&Market=t&DispVer=3&Game=0";
  			break;
  		case 'Motorsports':
  			url = "https://mkt.zpisportbk.com/Outright.aspx?Sport=11&Market=ot&DispVer=3&Game=0";
  			break;
  		case 'Snooker/Pool':
        url = "https://mkt.zpisportbk.com/Tennis.aspx?Sport=7&Market=t&DispVer=3&Game=0";
        break;
      case 'Golf':
        url = "https://mkt.zpisportbk.com/Tennis.aspx?Sport=10&Market=t&DispVer=3&Game=0";
        break;
      case 'Cricket':
        url = "https://mkt.zpisportbk.com/Tennis.aspx?Sport=50&Market=t&DispVer=3&Game=0";
        break;
      case 'Winner':
        url = "https://mkt.zpisportbk.com/Outright.aspx?Sport=1&Market=ot&DispVer=undefined&Game=0";
        break;
      case 'First Goal/Last Goal':
        url = "https://mkt.zpisportbk.com/FGLG.aspx?Sport=1&Market=t&DispVer=undefined&Game=0&Page=FGLG";
        break;
      case 'WinnerLast':
        url = "https://mkt.zpisportbk.com/Outright.aspx?Sport=0&Market=ot&DispVer=3&Game=0";
        break;
      case '1X2':
        url = "https://mkt.zpisportbk.com/1X2.aspx?Sport=1&Market=t&DispVer=undefined&Game=0&Page=1X2";
        break;
      case 'PhiTieu':
        url = "https://mkt.zpisportbk.com/Tennis.aspx?Sport=25&Market=t&DispVer=3&Game=0";
        break;
      case 'BAODUC':
        url = "https://mkt.zpisportbk.com/NBA.aspx?Sport=26&Market=t&DispVer=3&Game=0";
        break;
      case 'CorrectScore':
        url = "https://mkt.zpisportbk.com/CorrectScore.aspx?Sport=1&Market=t&DispVer=undefined&Game=0&Page=CS";
        break;
      case 'Oe':
        url = "https://mkt.zpisportbk.com/Oe.aspx?Sport=1&Market=t&DispVer=undefined&Game=0&Page=OE";
        break;
      case 'TG':
        url = "https://mkt.zpisportbk.com/Tg.aspx?Sport=1&Market=t&DispVer=undefined&Game=0&Page=TG";
        break;
      case 'HTFT':
        url = "https://mkt.zpisportbk.com/HTFT.aspx?Sport=1&Market=t&DispVer=undefined&Game=0&Page=HTFT";
        break;
      case 'HTFTOE':
        url = "https://mkt.zpisportbk.com/HTFTOE.aspx?Sport=1&Market=t&DispVer=undefined&Game=0&Page=HTFTOE";
        break;
      case 'FGLG':
  			url = "https://mkt.zpisportbk.com/FGLG.aspx?Sport=1&Market=t&DispVer=undefined&Game=0&Page=FGLG";
  			break;
  	}
  	window.content.frames.mainFrame.location = url;
  }
</script>
</html>