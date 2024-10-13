function bindEvent(element, eventName, eventHandler) {
	if (element.addEventListener) {
		element.addEventListener(eventName, eventHandler, false);
	} else if (element.attachEvent) {
		element.attachEvent('on' + eventName, eventHandler);
	}
}
function SwitchSport(key, id) {
	if (id == '161') {
		top.mainFrame.location = '/bingo'
		top.leftFrame.gotoCurrentMenu('161_head');
		return;
	}
	if (id == '2') {
		return OpenGame('NBA');
	}
	if (id == '8') {
		return OpenGame('Baseball');
	}
	if (id == '4') {
		return OpenGame('Hocky');
	}
	if (id == '5') {
		return OpenGame('Tennis');
	}
	if (id == '6') {
		return OpenGame('Volleyball');
	}
	if (id == '43') {
		return OpenGame('E-Sports');
	}
	if (id == '11') {
		return OpenGame('Motorsports');
	}
	if (id == '7') {
		return OpenGame('Snooker/Pool');
	}
	if (id == '10') {
		return OpenGame('Golf');
	}
	if (id == '50') {
		return OpenGame('Cricket');
	}
	if (id == '1') {
		return OpenGame('Winner');
	}
	if (id == '0') {
		return OpenGame('WinnerLast');
	}
	if (id == '1X2') {
		return OpenGame('1X2');
	}
	if (id == '25') {
		return OpenGame('PhiTieu');
	}
	if (id == '26') {
		return OpenGame('BAODUC');
	}
	if (id == 'CorrectScore') {
		return OpenGame('CorrectScore');
	}
	if (id == 'Oe') {
		return OpenGame('Oe');
	}
	if (id == 'TG') {
		return OpenGame('TG');
	}
	if (id == 'HTFT') {
		return OpenGame('HTFT');
	}
	if (id == 'HTFTOE') {
		return OpenGame('HTFTOE');
	}
	if (id == 'FGLG') {
		return OpenGame('FGLG');
	}
	alert('Trò chơi tạm khoá, vui lòng liên hệ admin');
}

function ShowOdds(type, id) {
	if (type == 'P') {
		top.mainFrame.location = '/underoddsGroup'
		top.leftFrame.gotoCurrentMenu('1_P');
	} else if (type == 'A') {
		top.mainFrame.location = '/underodds'
		top.leftFrame.gotoCurrentMenu('1_A');
	} else {
		SwitchSport(type, id);
	}
}

function OpenGame(type) {
	type = type || 'numberGame';
	if (top.mainFrame.loadSport) {
		top.mainFrame.loadSport(type);
	} else {
		top.mainFrame.location = '/copy?type=' + type;
	}
}

function ShowWhatIsNews() {
	top.mainFrame.showSlides && top.mainFrame.showSlides();
}

function SwitchMenuType(argument) {

}
function SwitchVersion() {
	top.mainFrame.showTransition && top.mainFrame.showTransition();
}

function offNewVersionPopup() {
	top.mainFrame.promoNewVersionPopup && top.mainFrame.promoNewVersionPopup(true);
}

function openMenu(argument) {
}

function OpenGDLiveCasino(argument) {
	alert('Trò chơi tạm khoá, vui lòng liên hệ admin');
}

function OpenAllBet(argument) {
	alert('Trò chơi tạm khoá, vui lòng liên hệ admin');
}

function gotoSportsTodayPage() {
	top.mainFrame.location = '/underodds'
	top.leftFrame.gotoCurrentMenu('1_A');
}

function gotoParlay() {
	top.mainFrame.location = '/underoddsGroup'
	top.leftFrame.gotoCurrentMenu('1_P');
}
// main
function showSlides() {
	if ($('#MiniOddsNews').css('visibility') == 'hidden')
		$('#MiniOddsNews').css('visibility', 'visible').animate({
			opacity: 1
		}, 200);
	else
		$('#MiniOddsNews').css('visibility', 'hidden').animate({
			opacity: 0
		}, 200);
}
// left
function gotoCurrentMenu(id) {
	$('#1_body>div a').removeClass('current');
	$('#' + id + ' a').addClass('current')
}

function convertMalayToDecimal(item) {
	if (item < 0) {
		item = -1 / item;
	}
	return Math.round((item + 1) * 100) / 100;
}

function convertSaba(item) {
	return item != undefined ? HKOdds(item) : item;
}

function FloatAdd(n, t) {
	var r, u, i;
	try {
		r = n.toString().split(".")[1].length
	} catch (f) {
		r = 0
	}
	try {
		u = t.toString().split(".")[1].length
	} catch (f) {
		u = 0
	}
	return i = Math.pow(10, Math.max(r, u)),
		(FloatMul(n, i) + FloatMul(t, i)) / i
}

function FloatMul(n, t) {
	var i = 0
		, r = n.toString()
		, u = t.toString();
	try {
		i += r.split(".")[1].length
	} catch (f) { }
	try {
		i += u.split(".")[1].length
	} catch (f) { }
	return Number(r.replace(".", "")) * Number(u.replace(".", "")) / Math.pow(10, i)
}

function HKOdds(n) {
	return n < 0 && (n = FloatDiv(-1, n),
		n = FloatDiv(Floor(FloatMul(n, 100), 0), 100)),
		n
}

function FloatDiv(arg1, arg2) {
	var t1 = 0, t2 = 0, r1, r2;
	try {
		t1 = arg1.toString().split(".")[1].length
	} catch (n) { }
	try {
		t2 = arg2.toString().split(".")[1].length
	} catch (n) { }
	with (Math)
	return r1 = Number(arg1.toString().replace(".", "")),
		r2 = Number(arg2.toString().replace(".", "")),
		r1 / r2 * pow(10, t2 - t1)
}

function Floor(n, t) {
	if (n == null)
		return !1;
	var i = "^([-+]?[0-9]*.[0-9]{" + t + "})[0-9]*$";
	return parseFloat(n.toString().replace(new RegExp(i), function (n, t) {
		return t
	}))
}