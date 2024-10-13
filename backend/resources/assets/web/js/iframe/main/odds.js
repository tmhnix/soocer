var DIV = {
	inplay: $('#oTableContainer_L'),
	upcomming: $('#oTableContainer_D'),
};

function Event(data, type, league_id) {
	this.type = type;
	this.event_id = data.event_id;
	this.league_id = data.league_id;
	this.home = data.home;
	this.away = data.away;
	this.reds = data.reds;
	this.ss = data.ss;
	this.time = data.time;
	this.timer = data.timer;
	this.ft_1x2 = data.ft_1x2;
	this.ft_hdp = data.ft_hdp;
	this.ft_ou = data.ft_ou;
	this.hf_1x2 = data.hf_1x2;
	this.hf_hdp = data.hf_hdp;
	this.hf_ou = data.hf_ou;

	this.update = function (item) {
		var ROOT = DIV[this.type].find("#smart_e_"+this.event_id);
		console.log('Update', item.ss, this.ss);
		if (this.ss !== item.ss) {
			this.ss = item.ss;
			ROOT.find('.odd_ss').text(this.ss);
			ROOT.find('.odd_ss_parent').addClass('Odds_Upd');
		} else {
			ROOT.find('.odd_ss_parent').removeClass('Odds_Upd');
		}

		if (this.reds.home !== item.reds.home || this.reds.away !== item.reds.away) {
			this.reds = item.reds;
		}
	}

	this.removeEvent = function () {
		DIV[this.type].find("#smart_e_"+this.event_id).remove();
		delete this;
	}

	this.draw = function () {
		var strVar="";
		strVar += "<tbody class='smart_l_"+this.league_id+"' id='smart_e_"+this.event_id+"'><tr  class=\"bgcpe displayOn "+this.type+"\" >";
		strVar += "<td rowspan=\"2\" class=\"text_time inplay-hide\" >";
		strVar += "      <p define-text=\"event.ss\" >"+this.time+"<\/p>";
		strVar += "   <\/td>";
		strVar += "   <td rowspan=\"2\" nowrap=\"nowrap\" class=\"text_time odd_ss_parent upcomming-hide\">";
		strVar += "      <b class='odd_ss'>"+this.ss+"<\/b>        ";
		strVar += "      <div nowrap=\"nowrap\" style=\"color:red\">";
		strVar += "         <span class=\"displayOff\" title=\"In Running\"><b class=\"IsLive\">IR<\/b><\/span>";
		strVar += "         <span class=\"displayOn\">";
		strVar += "            <b class=\"LiveTime\">"+this.time+" <small class='"+(this.timer.added == 0 ? 'hide': '') +"' style=\"color: black\">+"+this.timer.added+"<\/small><\/b>";
		strVar += "            <span style=\"color:#566C9E\">";
		strVar += "            <\/span>";
		strVar += "         <\/span>";
		strVar += "      <\/div>";
		strVar += "   <\/td>";
		strVar += "   <td rowspan=\"2\" class=\"line_unR\" valign=\"top\">";
		strVar += "      <div class=\"UdrDogTeamClass\">";
		strVar += "         <span class=\"D_liveinfoM_23883982_H ng-binding\">"+this.home;
		strVar += "         <\/span>";
		strVar += "      <\/div>";
		strVar += "      <div class=\"FavTeamClass\"><span class=\"D_liveinfoM_23883982_A ng-binding\">"+this.away;
		strVar += "      <\/span><\/div>";
		strVar += "      <div class=\"HdpGoalClass\">Hòa<\/div>";
		strVar += "   <\/td>";
		strVar += "   <td align=\"right\" rowspan=\"2\" nowrap=\"nowrap\">";
		strVar += "      <span class=\"displayOn\">";
		strVar += "         <span title=\"Live Match\" style=\"display:inline-block;\">";
		strVar += "            <span class=\"iconOdds soccer\"><\/span>";
		strVar += "            <div id=\"lf23883982\" style=\"display:none; position:absolute; float:right;\"><\/div>";
		strVar += "         <\/span>";
		strVar += "         <a title=\"Add My Favorite\"><span name=\"fav_0123883982\" class=\"iconOdds favorite\"><\/span><\/a>";
		strVar += "      <\/span>";
		strVar += "   <\/td>";
		strVar += "   <td valign=\"top\" class=\"none_rline none_dline\">";
		strVar += "      <div class=\"line_divL HdpGoalClass ng-binding\">";
		strVar += "         "+this.ft_hdp.handicap_value;
		strVar += "      <\/div>";
		strVar += "      <div class=\"line_divR OddsDiv Odds_Upd\">";
		strVar += "         <a class=\"UdrDogOddsClass pointer FavOddsClass odd_ft_hdp_home_od\" ng-click=\"onBet('Handicap', 'ft_hdp', 'home', event.ft_hdp.home_od)\">"+this.ft_hdp.home_od+"<\/a><br>";
		strVar += "         <a class=\"UdrDogOddsClass pointer odd_ft_hdp_away_od\"  ng-click=\"onBet('Handicap', 'ft_hdp', 'away', event.ft_hdp.away_od)\">"+this.ft_hdp.away_od+"<\/a><br>";
		strVar += "      <\/div>";
		strVar += "   <\/td>";
		strVar += "   <td valign=\"top\" class=\"none_dline none_rline\">";
		strVar += "      <div class=\"line_divL HdpGoalClass ng-binding\" visible=\"event.ft_ou.handicap\" style=\"visibility: visible;\">";
		strVar += "         "+this.ft_ou.handicap;
		strVar += "         <br>u";
		strVar += "      <\/div>";
		strVar += "      <div class=\"line_divR OddsDiv Odds_Upd\">";
		strVar += "         <a class=\"UdrDogOddsClass pointer ng-binding FavOddsClass\" define-text=\"event.ft_ou.over_od\" ng-click=\"onBet('Over\/Under', 'ft_ou', 'home', event.ft_ou.over_od)\">"+this.ft_ou.over_od+"<\/a><br>";
		strVar += "         <a class=\"UdrDogOddsClass pointer ng-binding\" define-text=\"event.ft_ou.under_od\" ng-click=\"onBet('Over\/Under', 'ft_ou', 'away', event.ft_ou.under_od)\">"+this.ft_ou.under_od+"<\/a><br>";
		strVar += "      <\/div>";
		strVar += "   <\/td>";
		strVar += "   <td rowspan=\"2\" align=\"right\" valign=\"top\" class=\"tabt_R\">";
		strVar += "      <div class=\"line_divL line_divR UdrDogOddsClass\"> ";
		strVar += "         <a class=\"ng-binding\"><\/a><br>";
		strVar += "         <a class=\"ng-binding\"><\/a><br>";
		strVar += "         <a class=\"ng-binding\"><\/a>";
		strVar += "      <\/div>";
		strVar += "   <\/td>";
		strVar += "   <td valign=\"top\" class=\"none_rline none_dline\" ng-class=\"{'hide-span': event.time_position >= 2 &amp;&amp; false}\">";
		strVar += "      <div class=\"line_divL HdpGoalClass\">";
		strVar += "         <!-- ngIf: event.hf_hdp.handicap_team == 'home' -->";
		strVar += "         <span class=\"ng-binding\"><\/span>";
		strVar += "      <\/div>";
		strVar += "      <div class=\"line_divR OddsDiv \">";
		strVar += "          <a class=\"UdrDogOddsClass pointer\" define-text=\"event.hf_hdp.home_od\" ng-click=\"onBet('1H - Handicap', 'hf_hdp', 'home', event.hf_hdp.home_od)\">";
		strVar += "          <span class=\"ng-binding\"><\/span>";
		strVar += "         <\/a><br>";
		strVar += "         <a class=\"UdrDogOddsClass pointer\" define-text=\"event.hf_hdp.away_od\" ng-click=\"onBet('1H - Handicap', 'hf_hdp', 'away', event.hf_hdp.away_od)\"><span class=\"ng-binding\">";
		strVar += "         <\/span>";
		strVar += "         <\/a><br>";
		strVar += "      <\/div>";
		strVar += "   <\/td>";
		strVar += "   <td valign=\"top\" class=\"none_dline none_rline\" ng-class=\"{'hide-span': event.time_position >= 2}\">";
		strVar += "      <div class=\"line_divL HdpGoalClass\" visible=\"event.hf_ou.handicap\" style=\"visibility: hidden;\">";
		strVar += "         <span class=\"ng-binding\">";
		strVar += "         <br>u";
		strVar += "         <\/span>";
		strVar += "      <\/div>";
		strVar += "      <div class=\"line_divR OddsDiv\">";
		strVar += "         <a class=\"UdrDogOddsClass pointer\" define-text=\"event.hf_ou.over_od\" ng-click=\"onBet('1H - Over\/Under', 'hf_ou', 'home', event.hf_ou.over_od)\">";
		strVar += "         <span class=\"ng-binding\"><\/span>";
		strVar += "         <\/a><br>";
		strVar += "         <a class=\"UdrDogOddsClass pointer\" define-text=\"event.hf_ou.under_od\" ng-click=\"onBet('1H - Over\/Under', 'hf_ou', 'away', event.hf_ou.under_od)\">";
		strVar += "            <span class=\"ng-binding\"><\/span>";
		strVar += "         <\/a>";
		strVar += "         <br>";
		strVar += "      <\/div>";
		strVar += "   <\/td>";
		strVar += "   <td rowspan=\"2\" align=\"right\" valign=\"top\">";
		strVar += "      <div class=\"line_divL line_divR UdrDogOddsClass \">";
		strVar += "         <a class=\"ng-binding\"><\/a><br>";
		strVar += "         <a class=\"ng-binding\"><\/a><br>";
		strVar += "         <a class=\"ng-binding\"><\/a>";
		strVar += "      <\/div>";
		strVar += "   <\/td>";
		strVar += "   <td rowspan=\"2\" align=\"center\" class=\"breakLine\"><span class=\"displayOn\"><a style=\"cursor:pointer\" title=\"Score Map\"><span class=\"iconOdds scoreMap\"><\/span><\/a><a title=\"Statistic Information\"><span class=\"iconOdds stats\"><\/span><\/a><\/span><\/td>";
		strVar += "<\/tr>";
		strVar += "<tr id=\"e_23883982_1_2\" class=\"bgcpe "+this.type+"\">";
		strVar += "   <td colspan=\"2\" align=\"center\" class=\"none_rline none_lline none_tline\">";
		strVar += "      <span class=\"displayOn\">";
		strVar += "         <a href=\"#\" class=\"en_Point displayOff\" title=\"More Bet Types\"><span style=\"width:20px\"><\/span><\/a>";
		strVar += "         <a href=\"#\" class=\"btn redBg iconfast displayOff\" title=\"Fast Markets\">Fast<\/a>";
		strVar += "         <a href=\"#\" class=\"btn displayOff\" title=\"SuperLive\">SuperLive<\/a>";
		strVar += "      <\/span>";
		strVar += "   <\/td>";
		strVar += "   <td class=\"none_rline none_tline\" colspan=\"2\"><\/td>";
		strVar += "<\/tr>";
		strVar += "<tr>";
		strVar += "   <td class=\"moreBetType tag displayOff\" colspan=\"10\"><\/td>";
		strVar += "<\/tr><\/tbody>";

		$(strVar).insertAfter(DIV[this.type].find('.smart_l_'+this.league_id).last());
		
	}
}

function League(data, type) {
	this.div_id = null;
	this.type = type;
	this.league_id = data.league_id;
	this.name = data.name;
	this.events = data.events.map(function (item) {
		return new Event(item, this.type, this.league_id);
	}.bind(this));

	this.update = function (item) {
		var ids = [];
		item.events.forEach(function (event) {
			var old = this.findById(event.event_id);
			if (old) {
				ids.push(old.event_id);
				old.update(event);
			} else {
				var newEvent = new Event(event, this.type, this.league_id);
				ids.push(newEvent.event_id);
				this.events.push(newEvent);
				newEvent.draw();
			}
		}.bind(this));

		this.events.length !== ids.length && (this.events = this.events.filter(function (item) {
			if (ids.indexOf(item.event_id) == -1) {
				item.removeEvent();
				return false;
			}
		}));
	}

	this.findById = function (event_id) {
		for (var i = this.events.length - 1; i >= 0; i--) {
			if (this.events[i].event_id == event_id) {
				return this.events[i];
			}
		}
		return null;
	}

	this.removeLeague = function () {
		DIV[this.type].find("#smart_l_"+this.league_id).remove();
		delete this;
	}

	this.draw = function () {
		if (!this.div_id) {
			var strVar="";
			strVar += "<tbody class='smart_l_"+this.league_id+"' id='smart_l_"+this.league_id+"'>";
			strVar += "    <tr valign='middle' style='cursor:pointer'>";
			strVar += "    <td class=\"tabtitle\"><\/td>";
			strVar += "    <td colspan=\"8\" valign=\"middle\" class=\"tabtitle\"><span title=\"Add My Favorite\"><span id=\"fav_43\" class=\"iconOdds favorite\"><\/span><\/span>"+this.name+"<\/td>";
			strVar += "    <td colspan=\"1\" class=\"tabtitle\" align=\"right\">";
			strVar += "    	<a on-refresh=\"onrefreshInplay\" ng-class=\"{'disable': loading.leagues}\" loading=\"loading.leagues\" refresh-item type=\"inplay\" number='20' name=\"btnRefresh_L\" class=\"btnIcon right\" style=\"\" title=\"Trực tiếp\">";
			strVar += "      <\/a>";
			strVar += "     <\/td>";
			strVar += "     <\/tr>";
			strVar += "<\/tbody>";
			console.log(DIV[this.type].find('#tmplTable'));
			DIV[this.type].find('#tmplTable').append(strVar).delay(4000);
			this.events.forEach(function (item) {
				item.draw();
			});
		}
		
	}
}

League.inplay = [];
League.upcomming = [];

League.addAllAndDraw = function (type, data) {
	var ids = [];
	data.forEach(function (item) {
		var old = League.findById(type, item.league_id);
		if (old) {
			ids.push(old.league_id);
			old.update(item);
		} else {
			var newLeague = new League(item, type);
			ids.push(newLeague.league_id);
			League[type].push(newLeague);
			newLeague.draw();
		}
	});
	League[type].length !== ids.length && (League[type] = League[type].filter(function (item) {
		if (ids.indexOf(item.league_id) == -1) {
			item.removeLeague();
			return false;
		}
	}));
}

League.findById = function (type, league_id) {
	if (!League[type]) return;
	for (var i = League[type].length - 1; i >= 0; i--) {
		if (League[type][i].league_id == league_id) {
			return League[type][i];
		}
	}
	return null;
}