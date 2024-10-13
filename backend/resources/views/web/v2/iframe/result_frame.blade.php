@extends('web.v2.iframe.template')
@section('menu', 'result')
@section('main')
<script type="text/javascript" src="/assets/web/js/Scripts/calendar.js?v201805101111"></script>
<script type="text/javascript" src="/assets/web/js/Scripts/calendar-en.js?v201805101111"></script>
<script type="text/javascript" src="/assets/web/js/Scripts/calendar-setup.js?v201805101111"></script>
<script src="/assets/web/js/Scripts/jquery-2.1.4.min.js?v201805101111"></script>
<script>
  function dateChanged(calendar) {
   if (calendar.dateClicked) {
    var y = calendar.date.getFullYear();
                var m = calendar.date.getMonth(); // integer, 0..11
                var d = padLeft(calendar.date.getDate(), 2); // integer, 1..31
                var selob = document.getElementById("selDate");
                selob.innerHTML = (m + 1) + "/" + d + "/" + y;
                $("#selectDate").val(y + '-' +(m + 1) + "-" + d);
                $("#rusultContainer").html("<div class='preloader-secondary'><div class='spin'></div>");
                document.formResult.submit();
             }
          }

          function padLeft(str, length) {
            if (str.toString().length >= length)
             return str;
          else
             return padLeft("0" + str, length);
       }

       function dateSubmit(datediff) {
         var dateValue = 86400000 * datediff;
         var today = new Date();

         var displayDateValue = today.getTime() + dateValue;
         var newDate = new Date();
         newDate.setTime(displayDateValue);

         var displayfield = newDate.getFullYear() + '-'+ (newDate.getMonth() + 1) + "-" + padLeft(newDate.getDate(), 2);
         $("#selectDate").val(displayfield);
         $("#rusultContainer").html("<div class='preloader-secondary'><div class='spin'></div>");
         document.formResult.submit();
      }

      function ClickSelecter(id) {

            //if (document.getElementById(id + '_Div').className.indexOf('disable') > -1) return;
            var obj = document.getElementById(id + '_Menu');

            var ClickOutSelecter = function (e) {
             e = e || window.event;
             var dom = e.srcElement || e.target;
             if (dom.id != id + "_Div" && dom.id != id + "_Menu") {
              if (obj != null) obj.style.visibility = 'hidden';
              $(document).unbind('click', ClickOutSelecter);
           }
        };
        if (obj != null) {
          $(document).unbind('click', ClickOutSelecter);
          if (obj.style.visibility == 'visible') {
           obj.style.visibility = 'hidden';
        } else {
           obj.style.visibility = 'visible';
           $(document).bind('click', ClickOutSelecter);
        }
     }
  }
  function SelectChange(type, value) {
   if (type == 1)
    $("#selectSid").val(value);
 else if (type == 2)
    $("#selectLid").val(value);
 else if (type == 3)
    $("#selectSeaid").val(value);
 $("#rusultContainer").html("<div class='preloader-secondary'><div class='spin'></div>");
 document.formResult.submit();
}

function OpenSoccerDetail(event,mId) {
   if ($("#Detail_" + mId).hasClass("hiddenElement")) {
    $("#Detail_" + mId).removeClass("hiddenElement");
    $(event).removeClass("primary");
    $(event).addClass("specialC");
    $(event).attr("title", "Collapse More Info");

    $.ajax({
     type: "POST",
     url: "/Result/SoccerDetail",
     data: { matchId: mId },
     dataType: "html",
     async: true,
     cache: false,
     success: function (result) {
                        //alert(result);
                        $("#Detail_" + mId).html(result);
                        //alert($("#SoccerDetail_" + mId).html());
                     },
                     failure: function (response) {
                        alert(response.d);
                     }
                  });
 }
 else {
    $(event).addClass("primary");
    $(event).removeClass("specialC");
    $(event).attr("title", "Expand More Info");
    $("#Detail_" + mId).addClass("hiddenElement");
    $("#Detail_" + mId).html("<div class='preloader-secondary'><div class='spin'></div>");
 }
}

function OpenBingoDetail(event, mId, type) {
   if ($("#Detail_" + mId).hasClass("hiddenElement")) {
    $("#Detail_" + mId).removeClass("hiddenElement");
    $(event).removeClass("primary");
    $(event).addClass("specialC");
    $.ajax({
     type: "POST",
     url: "/Result/BingoDetail",
     data: { matchId: mId, displayType: type },
     dataType: "html",
     async: true,
     cache: false,
     success: function (result) {
      $("#Detail_" + mId).html(result);
   },
   failure: function (response) {
      alert(response.d);
   }
});
 }
 else {
    $(event).addClass("primary");
    $(event).removeClass("specialC");
    $("#Detail_" + mId).addClass("hiddenElement");
    $("#Detail_" + mId).html("<div class='preloader-secondary'><div class='spin'></div>");
 }
}

function OpenLiveCasinoDetail(event, mId, mName, sData, rData) {
   if ($("#Detail_" + mId).hasClass("hiddenElement")) {
    $("#Detail_" + mId).removeClass("hiddenElement");
    $(event).removeClass("primary");
    $(event).addClass("specialC");
    $.ajax({
     type: "POST",
     url: "/Result/LiveCasinoDetail",
     data: {
      matchId: mId,
      matchName: mName,
      scoreData: sData,
      resultData: rData
   },
   dataType: "html",
   async: true,
   cache: false,
   success: function (result) {
      $("#Detail_" + mId).html(result);
   },
   failure: function (response) {
      alert(response.d);
   }
});
 }
 else {
    $(event).addClass("primary");
    $(event).removeClass("specialC");
    $("#Detail_" + mId).addClass("hiddenElement");
    $("#Detail_" + mId).html("<div class='preloader-secondary'><div class='spin'></div>");
 }
}

function OpenTennisDetail(event, mId) {
   if ($("#Detail_" + mId).hasClass("hiddenElement")) {
    $("#Detail_" + mId).removeClass("hiddenElement");
    $(event).removeClass("primary");
    $(event).addClass("specialC");
 }
 else {
    $(event).addClass("primary");
    $(event).removeClass("specialC");
    $("#Detail_" + mId).addClass("hiddenElement");
 }
}

function onKeyPressSelecter(id, e) {
   var selected = $('#' + id +' > .dropdownPanel > .keySelected');
   $('#' + id +' > .dropdownPanel > .keySelected').removeClass("keySelected");
   var c = String.fromCharCode(e.keyCode).toUpperCase();

   if (e.keyCode == 13) {
    selected.click();
    return;
 }

 if (e.keyCode == 38) {
    if (selected.prev().length != 0) {
     SetScrollAndSelected(id, selected.prev());
  }
  return false;
}
if (e.keyCode == 40) {
 if (selected.next().length != 0) {
  SetScrollAndSelected(id, selected.next());
}
return false;
}

if (selected.length == 0) {
 $('#' + id + ' > .dropdownPanel > .content').each(function () {
  if (c == $(this).text().substring(0, 1)) {
   SetScrollAndSelected(id, $(this));
   return false;
}
});
}

var isFindPrev = true;
var isFindSelf = true;
selected.nextAll().each(function () {
 if (c == $(this).text().substring(0, 1)) {
  SetScrollAndSelected(id, $(this));
  isFindPrev = false;
  isFindSelf = false;
  return false;
}
});

if (isFindPrev) {
 if (c == selected.prevAll().last().text().substring(0, 1)) {
  SetScrollAndSelected(id, selected.prevAll().last());
  return false;
}
selected.prevAll().last().nextUntil($(this)).each(function () {
  if (c == $(this).text().substring(0, 1)) {
   SetScrollAndSelected(id, $(this));
   isFindSelf = false;
   return false;
}
});
}

if (isFindSelf) {
 if (c == selected.text().substring(0, 1)) {
  SetScrollAndSelected(id, selected);
}
}
}

function onOver(id, e) {
   $('#' + id + ' > .dropdownPanel > .keySelected').removeClass("keySelected");
   $(e).addClass("keySelected");
}

function onOut(e) {
   $(e).removeClass("keySelected");
}

function SetScrollAndSelected(id, selected) {
   selected.addClass("keySelected");
}

</script>
<form name="formResult" method="get" action="/resultFrame.aspx">
  <input id="selectDate" type="hidden" value="07-06-2021" name="date">
  <!-- <input id="selectSid" type="hidden" value="1" name="selectSid">
  <input id="selectLid" type="hidden" value="-1" name="selectLid">
  <input id="selectSeaid" type="hidden" value="0" name="selectSeaid"> -->
</form>
<div class="account">
 <div class="content">
  <div class="caption">
   <div class="mainTitle icon-result">Kết Quả</div>
</div>
<ul class="tabNav-BottomLine">
   <li class="active" onclick="location.href='/resultFrame.aspx'">Kết Quả</li>
   <li class="" onclick="location.href = '/Result/Outright'" style="visibility: hidden;">Cược Thắng</li>
   <li class="" onclick="location.href = '/Result/Keno'" style="visibility: hidden;">Keno</li>
   <li class="" onclick="location.href = '/Result/KenoLottery'" style="visibility: hidden;">Xổ số</li>
   <li class="" onclick="location.href = '/Result/N7'" style="visibility: hidden;"> Lô Đề </li>
</ul>
<div class="filterBlock">
   <div class="filterRow">
    <div id="f_trigger_a" class="filter dropdown-Date ">
     <div class="selected  ">
      <span class="txt" id="selDate">/ / /</span>
      <script type="text/javascript">
       Calendar.setup({
        inputField: "selDate",
        ifFormat: "mm/dd/y",
        button: "f_trigger_a",
        flatCallback: dateChanged,
        singleClick: true
     });
  </script>
</div>
</div>
<button onclick="dateSubmit(0)" class="filter" title="Hôm Nay">Hôm Nay</button>
<button onclick="dateSubmit(-1)" class="filter" title="Hôm Qua">Hôm Qua</button>
</div>
<div class="filterRow">
 <div id="ddSport" class="filter dropdown-flexible noHover" tabindex="1" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectDropdown(event,'ddSport');">
  <div class="selected" title="Bóng đá"><span class="txt">Bóng đá</span></div>
  <div class="dropdownPanel">
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'1');">Bóng đá</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'161');">Number Game</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'192');">Giải vô địch bóng đá thế giới ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'190');">Giải đấu Bóng đá Ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'191');">Quốc gia Bóng đá Ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'180');">Bóng đá Ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'193');">Bóng rổ ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'181');">Đua Ngựa Ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'182');">Đua Chó Ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'183');">Đua xe mô tô ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'184');">Đua xe Ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'185');">Đua xe đạp ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'186');">Quần Vợt Ảo</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'2');">Bóng rổ</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'8');">Bóng chày</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'5');">Quần vợt</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'9');">Cầu lông</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'6');">Bóng chuyền</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'11');">Thể Thao Môtô</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'50');">Cricket</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'44');">Quyền Thái</div>
     <div class="content" tabindex="1" onmouseover="onOver('ddSport',this)" onmouseout="onOut(this)" onkeydown="onKeyPressSelecter('ddSport',event); return false;" onclick="SelectChange(1,'26');">Bóng bầu dục</div>
  </div>
</div>
<div id="ddLeague" class="filter dropdown-flexible noHover" tabindex="2" onkeydown="onKeyPressSelecter('ddLeague', event); return false;" onclick="SelectDropdown(event, 'ddLeague');">
  <div class="selected" title="Tất cả giải đấu"><span class="txt">Tất cả giải đấu</span></div>
  <div class="dropdownPanel">
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'-1');">Tất cả giải đấu</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'399');">ALGERIA 1ST DIVISION</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'58865');">ARGENTINA RESERVE LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'7621');">AUSTRALIA BRISBANE PREMIER LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'11779');">AUSTRALIA BRISBANE PREMIER LEAGUE RESERVE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'70774');">AUSTRALIA FOOTBALL QUEENSLAND PREMIER LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'44924');">AUSTRALIA GOLD COAST PREMIER LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'48620');">AUSTRALIA QUEENSLAND NATIONAL WOMENS PREMIER LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'11711');">AUSTRALIA VICTORIA PREMIER LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'53018');">AUSTRALIA VICTORIA PREMIER LEAGUE 2</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'62862');">AUSTRALIA VICTORIA PREMIER LEAGUE 2 U20</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'48370');">AUSTRALIA VICTORIA PREMIER LEAGUE U20</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'59555');">AZERBAIJAN DIVISION 1</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'63625');">BELGIUM UEFA EUROPA LEAGUE (PLAY OFF)</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'63759');">BULGARIA FIRST PROFESSIONAL LEAGUE (PLAY OFF)</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'13836');">BULGARIA U19 LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'247');">CHINA FOOTBALL SUPER LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'49262');">CZECH REPUBLIC 1ST DIVISION</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'51075');">CZECH REPUBLIC U19 LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'37066');">FOUR NATIONS TOURNAMENT U16 (IN SERBIA)</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'73691');">FOUR NATIONS WOMEN TOURNAMENT (IN GEORGIA)</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'63879');">INDONESIA LIGA 1</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'8529');">ISRAEL LEUMIT LEAGUE (PLAY OFF)</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'17056');">ISRAEL LIGA ALEF (PLAY OFF)</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'789');">JORDAN PRO LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'1085');">KOREA NATIONAL LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'8740');">KOREA WOMEN K-LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'10199');">LATVIA VIRSLIGA</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'8842');">LITHUANIA 1 LYGA</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'784');">MALAYSIA PREMIER LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'771');">MALAYSIA SUPER LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'43855');">POLAND CENTRAL JUNIOR LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'53115');">ROMANIA LIGA I (PLAY OFF)</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'666');">RUSSIA 2ND DIVISION</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'668');">RUSSIA U21 CHAMPIONSHIP</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'73875');">SLOVAKIA CUP (IN SLOVAKIA)</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'13139');">SOUTH AUSTRALIA PREMIER LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'53899');">SOUTH AUSTRALIA STATE LEAGUE 1</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'28732');">SWEDEN U19 ALLSVENSKAN</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'62950');">THAILAND LEAGUE 1</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'62952');">THAILAND LEAGUE 2</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'73437');">UEFA U17 CHAMPIONSHIP (IN ENGLAND)(2x40 mins)</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'2370');">UKRAINE 1ST LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'25668');">UKRAINE YOUTH CHAMPIONSHIP U19</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'63485');">UKRAINE YOUTH CHAMPIONSHIP U21 (PLAY OFF)</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'71803');">UZBEKISTAN SUPER LEAGUE</div>
    <div class="content" tabindex="2" onmouseover="onOver('ddLeague',this)" onmouseout="onOut(this)" onclick="SelectChange(2,'38452');">VIETNAM NATIONAL CUP</div>
 </div>
</div>
</div>
</div>
<div id="rusultContainer" class="rusultContainer">
 <div class="accountTable">
  <div class="tableHead">    
   <div class="date-small" title="Thời Gian Bắt Đầu">Thời Gian Bắt Đầu</div>
   <div class="team" title="Trận Đấu">Trận Đấu</div>
   <div class="points" title="Hiệp 1">Hiệp 1</div>
   <div class="points" title="Chung Cuộc">Chung Cuộc</div>
   <div class="other"></div>
   <div class="status" title="Trạng Thái">Trạng Thái</div>
</div>
<div class="tableBody">
@foreach($leagues as $league)
<span class="leagueName">{{$league->name}}</span>
@foreach($league->events as $key=>$event)
<div class="tableRow">
   <div class="date-small">{{$event->updated_at}}</div>
   <div class="team">
    <div class="name">{{$event->home}}</div>
    <div>-vs-</div>
    <div class="name">{{$event->away}}</div>
 </div>
 <div class="points">{{$event->hf_ss}}</strong></div>
 <div class="points">{{$event->ss}}</div>
 <div class="other">
 </div>
 <div class="status">
    <div class="focus">{{$event->timeStatus()}}</div>
 </div>
</div>
@endforeach
@endforeach
<span id="Detail_25147869" class="expandArea hiddenElement">
 <div class="preloader-secondary">
  <div class="spin"></div>
</div>
</span>


</div>
</div>
</div>
<div class="note">
   <div class="title">Lưu ý</div>
   <div class="txt">Xin lưu ý rằng thời gian hiển thị dựa trên GMT -4 giờ.</div>
</div>
</div>
</div>
@stop