<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="portal">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Add new member</title>
<link href="/assets/admin/css/themthanhvien_files/Agent.min.css" rel="stylesheet" type="text/css">
<link href="/assets/admin/css/themthanhvien_files/MemberInfo.min.css" rel="stylesheet" type="text/css">
<script type="application/javascript" src="{{ elixir('portal/js/all.js') }}"></script>
<style>
.maincontent_box {
    background-color: #faf8dd;
    border: 1px solid #bcba7d;
    margin: 10px 0px;
    max-height: 200px;
    overflow: auto;
}
.maincontent_box .alertwarning {
    border: none;
    margin-top: 0;
}.alertwarning {
    color: #7e3d00;
}.alertwarning {
    line-height: 20px;
    padding: 8px 8px 4px 31px;
    text-align: left;
    position: relative;
    vertical-align: middle;
    -webkit-box-sizing: border-box;
    -khtml-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
}


.headerPositionTaking {
    width: 996px;
}
.headerTab, .headerBetSetting, .headerPositionTaking {
    background-color: #666;
    color: #fff;
    font-weight: bold;
    padding: 0 8px;
}
.headerPositionTaking {
    height: 30px;
    line-height: 26px;
}
@media only screen and (min-width: 600px) {
   .headerPositionTaking {
    width: 100%;
   }
   .headerBetSetting {
      width: 100%
   }
   .minWidthCustomer {
      width: 100%;
   }
}
.positionTaking {
    border-bottom: 1px solid #cecece;
    border-left: 1px solid #cecece;
    border-right: 1px solid #cecece;
    float: left;
    min-width: 902px;
    padding: 12px;
    width: 100%;
}
#ptGridContainer {
    min-width: 971px;
}
.PTGrid {
    font-family: Roboto, Arial, Tahoma, helvetica, sans-serif;
    font-size: 13px;
}.PTGrid {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    border: 0;
    border-style: none;
    box-sizing: border-box;
    cursor: default;
    font-family: Tahoma,Arial,helvetica,sans-serif;
    font-size: 11px;
    line-height: 18px;
    margin: 0;
    min-width: 800px;
    padding: 0;
}.PTSport {
    background: #666;
    border-bottom: 1px solid #cecece;
    border-right: 1px solid #cecece;
    border-top: 1px solid #cecece;
    position: relative;
    float: none;
    display: table;
    width: 100%;
}.PTSport {
    float: left;
    margin: 0 0 10px;
    padding: 0;
    width: 100%;
}.PTSportLabel {
    border-left: 1px solid #cecece;
    border-top: 0 none;
    color: #fff;
    line-height: 30px;
    width: 220px;
    padding-right: 24px;
}[class^="customerInfoBlock"], [class^="customerInfoViewBlock"], [class^="commissionBlock"], [class^="commissionViewBlock"], [class^='PTSportLabe'], .BetTypeLabel, .BetTypeHeader, .BetTypeHeader2, .BetTypeHeaderActive, .BettingLimitHeaderCopied, .BettingLimitHeaderCopiedActive {
    height: 30px;
    line-height: 24px;
}.PTSportLabel {
    clear: both;
    color: #fff;
    cursor: pointer;
    float: left;
    font-weight: 700;
    height: 18px;
    line-height: 18px;
    padding: 2px;
    text-indent: 5px;
    vertical-align: middle;
    width: 120px;
}[class^='PTSportLabe'] {
    background-color: #666;
    padding-right: 72px;
    white-space: nowrap;
}.PTSport .PTSportCopiedActive, .PTSport .PTSportCopied, .PTSport .PTSportEdit, .PTSport .PTSportEditCopied {
    background: none;
    float: right;
    margin-top: 4px;
    width: 22px;
    position: relative;
}.PTSportCopied {
    cursor: pointer;
    height: 20px;
    line-height: 20px;
    margin: 2px 2px 0 0;
    padding: 0;
}.PTCheckCopied {
    height: 1px;
    overflow: hidden;
    position: absolute;
    visibility: hidden;
    width: 1px;
}.PTGroupSet2 {
    clear: both;
    margin: 0;
    overflow: hidden;
    padding: 0;
    background-color: #f8f0e5;
}.PTGroupSet {
    display: table;
    clear: both;
    margin: 0;
    padding: 0;
}.PTGroupSet .GroupSetLabel, .PTGroupSet .PTGroup2 {
    display: table-cell;
    float: none;
    min-width: 100px;
}.GroupSetLabel {
    border-left: 1px solid #cecece;
    border-top: 1px solid #cecece;
    min-width: 65px;
    background-color: #fae7d3;
    padding: 0 4px;
    text-align: right;
    vertical-align: middle;
    margin: 0;
}.PTGroup2 {
    background-color: #f8f0e5;
    float: none;
    margin: 0;
    padding: 0;
}.PTGroup {
    background-color: #f8f0e5;
    clear: both;
    margin: 0;
    padding: 0;
}.PTBox {
    float: left;
    margin: 0;
    padding: 0;
    text-align: center;
}.BetTypeHeader2, .BetTypeHeaderActive {
    border-left: 1px solid #cecece;
    border-top: 1px solid #cecece;
    background: none;
    height: 25px;
    position: relative;
    -webkit-box-sizing: content-box;
    -khtml-box-sizing: content-box;
    -moz-box-sizing: content-box;
    -o-box-sizing: content-box;
    box-sizing: content-box;
}.BetTypeHeader2{
        cursor: pointer;
    margin: 0;
    padding: 2px;
    vertical-align: middle;
}.BetTypeHeader2 .PTCheckCopied, .BetTypeHeaderActive .PTCheckCopied {
    position: relative;
    right: 0;
    height: 24px;
    width: 24px;
    top: 2px;
    overflow: initial;
    visibility: visible;
    position: absolute;
}.BetTypeHeader2 .PTCheckCopied input[type='checkbox'], .BetTypeHeaderActive .PTCheckCopied input[type='checkbox'] {
    visibility: hidden;
}.BetTypeSelect, .BetTypeLabel, .BetTypeCheckbox {
    border-left: 1px solid #cecece;
    border-top: 1px solid #cecece;
}.BetTypeSelect {
    height: 30px;
    line-height: 22px;
}.BetTypeSelect, .BetTypeLabel {
    margin: 0;
    padding: 2px;
    vertical-align: middle;
}.PTSport .BetTypeSelect * {
    display: inline-block;
    vertical-align: middle;
}.PTSport .PTSelect {
    width: 62px;
}.PTSport .BetTypeSelect select option {
    display: block;
}.PTSport .BetTypeSelect * {
    display: inline-block;
    vertical-align: middle;
}select option {
    padding: 4px;
}.PTSport .BetTypeSelect .BtnPTDown {
    background-position: -3px -4px;
    margin-right: 2px;
    margin-left: 2px;
    width: 22px;
}.PTSport .BetTypeSelect .BtnPTDown, .PTSport .BetTypeSelect .BtnPTUp, .PTSport .BetTypeSelect .BtnPTSub, .PTSport .BetTypeSelect .BtnPTAdd, .PTSport .BetTypeSelect #idConfirm_popupFooter #idConfirm_yesButton, #idConfirm_popupFooter .PTSport .BetTypeSelect #idConfirm_yesButton, .PTSport .BetTypeSelect #idConfirm_popupFooter #idConfirm_noButton, #idConfirm_popupFooter .PTSport .BetTypeSelect #idConfirm_noButton {
    background: url(Images/buttons.png) no-repeat;
    display: inline-block;
    height: 22px;
    margin-right: 2px;
    padding: 0;
}.minWidthCustomer input[type=button] {
    background-color: transparent;
    border: none;
    box-shadow: none;
}








#header_main {
    border-bottom: none;
    background: white;
    padding-top: 5px;
}
#button_hr {
    border-bottom: solid 1px #cecece;
    display: inline-block;
    width: 100%;
        background: white;
}
#tab_hr ul {
    font-weight: bold;
    list-style-type: none;
    margin: 0;
    padding: 0;
}
#tab_hr li {
    float: left;
    margin-right: 12px;
    padding: 0;
    position: relative;
}
#tab_hr .current {
    border-bottom: 2px solid black;
}
#tab_hr a {
    color: #333;
    float: left;
    text-decoration: none;
}
#tab_hr a span {
    color: #333;
    font-weight: bold;
    float: left;
    padding: 12px 20px 11px;
}
#tab_hr a:after {
    content: '';
    display: block;
    height: 3px;
    left: 0;
    width: 0;
    background: transparent;
    position: absolute;
    bottom: -2px;
    -webkit-transition: width .5s ease,background-color .5s ease;
    -khtml-transition: width .5s ease,background-color .5s ease;
    -moz-transition: width .5s ease,background-color .5s ease;
    -o-transition: width .5s ease,background-color .5s ease;
    transition: width .5s ease,background-color .5s ease;
}
</style>
<script>y=0;</script>
<script>
max =  {{$wallet}};
tc = 0;
 $(document).ready(function(){
        $('#submitx').click(function(form){
          console.log(form.valid());
          var mk = document.getElementById("password").value;
          var hm1 = document.getElementById("credit").value;
          var hm1 = document.getElementById("credit").value;

          var hm=parseInt(hm1);
          if(mk=="")
          {
            $(".msgerr").html("Mật khẩu phải được nhập");
            $("#password").focus();
            return false;
          }
          if(hm1=="")
          {
            $(".msgerr").html("Hạn mức phải được nhập");
            $("#credit").focus();
            return false;
          }
					if(tc==0)
					{
						$(".msgerr").html("Hãy chọn tài khoản khác");
              $("#selectedThree").focus();
						return false;	
					}
					if(mk.length ==0  )
						return true;
                    if(mk.length <4)
					{
						$(".msgerr").html("Mật khẩu phải trên 4 kí tự");
              $("#password").focus();
						return false;	
					}
                    if(hm1.length ==0 )
						return true;					
                    if(isNaN(hm)==true){
						$(".msgerr").html("Hạn mức phải là số");
                        $("#credit").focus();
						return false;
					}
                    else
                    {
                        if(hm > max)
                        
                        {
                            $(".msgerr").html("Hạn mức phải nhở hơn "+max);
                            $("#credit").focus();
                            return false;
                        }
                    }
                    
					
					
							
							return true;
						
					
					
				})
				 $('#submit1').click(function(){
         var mk = document.getElementById("password").value;
         var hm1 = document.getElementById("credit").value;

         var hm=parseInt(hm1);

         if(tc==0)
         {
          $(".msgerr").html("Hãy chọn tài khoản khác");
          return false;	
        }
        if(hm1=="")
        {
          $(".msgerr").html("Hạn mức phải được nhập");
          $("#credit").focus();
          return false;
        }
        if(mk.length ==0  )
          return true;
        if(mk.length <4)
        {
          $(".msgerr").html("Mật khẩu phải trên 4 kí tự");
          fc = 1;
          return false;	
        }
        if(hm1.length ==0 )
          return true;					
        if(isNaN(hm)==true){
          $(".msgerr").html("Hạn mức phải là số");
          $("#credit").focus();
          return false;
        }
        else
        {
          if(hm > max)
          {
            $(".msgerr").html("Hạn mức phải nhỏ hơn "+max);
            $("#credit").focus();
            return false;
          }
        }
        return true;
					
					
				})
 })
	function checkPass()
	{	
		
		if(typeof(winRef) == 'undefined' || winRef.closed){
			winRef = window.open("test1.php", "nameWindow", "toolbar=yes, scrollbars=yes, resizable=yes, top=10, left=110, width=400, height=400");
		} else {
		 	winRef.focus();
		}
	
	}
	function mabaomat()
	{	
		
		var mbm = prompt("Enter your security code here", "");
		if( mbm == null)
		{
			
		}
		else 
		{ 
			if(mbm == "")
			{
				alert("You have entered right security code!!!");
				document.getElementById("changeInfo").submit();
			}
		
			else
			{
				alert("You have entered wrong security code!!!");
				
			}
		}
	}
	function kiemtra(n)
	{
	    
		
			if(y==0)
			{
				tc=1;
				$('#kt').attr('src','tick.png');
			}
			else
			{
				
				var d = 'ZXTE2N'+a+b+c;
				var fl = 0;
				for (var i = 0; i< y ; i++ )
				{
					
					if(thanhvien[i]==d)
					{
						fl=1;
						break;	
					}	
				}
				if(fl==1)
				{
					
						tc=0;
						$('#kt').attr('src','x5.gif');
                       if(n==1)
                         $("#selectedOne").focus();
                     if(n==2)
                        $("#selectedTwo").focus();
                      if(n==3)
                        $("#selectedThree").focus();					
			}
				else
				{
					
						tc=1;
						$('#kt').attr('src','tick.png');
					
				}
			}
		
	}
	function hh(n){
	 	
		$("#discountAsian").val(n);
		$("#discount1x2").val(n);
		$("#discountCS").val(n);
		$("#discountHRFixOdds").val(n);
		$("#discountNumber").val(n);
	}
	function one(n)
	{
		a = n;
		kiemtra(1);
		
	}
	function two(n)
	{
		b=n;
		
		kiemtra(2);
	}
	function three(n)
	{
		c=n;
		kiemtra(3);
       
	}
	function sua()
	{
		return false;
	}
</script>
</head>
<body onload="kiemtra(3)">
  @include('portal.messsage')
  {!! Form::open(array('route' => 'portal.agent.createMemberPost')) !!}
  <div class="minWidthCustomer">
    
    <div id="header_main">Tạo Member mới</div>
    <div id="button_hr"><div id="tab_hr">
        <ul>
        <li id="IdCurr0" class=""><a href="#" onclick="SearchAndCopy.ActiveMenuTab(0, 2)"><span>Tìm và sao chép</span></a>
        </li>
    <li id="IdCurr1" class="current"><a href="#" onclick="SearchAndCopy.ActiveMenuTab(1, 2)"><span>Thiết lập đầy đủ</span></a>
    </li>
    <li id="IdCurr2" class=""><a href="" onclick=""><span>Mã QR</span></a><a id="qr-info" href="/site-messages/StaticMessage/File?id=129373" target="_blank" class="icon-information-outline"></a>
    </li>
    </ul></div></div>
    <div class="pt7">
      <div class="btnLeft"> 
      <input type="submit" id="submit" value="Thêm" style="margin-bottom: 5px;" class="btn btn-refresh">
    </div>
   <div class="maincontent_box"><div class="alertwarning">Vui lòng dùng Sportsbook 2 để thiết lập Giới Hạn Cược và PT cho E-Sports</div></div>
   <div class="maincontent_box"><div class="alertwarning">Để ngăn không cho Member đặt cược, hãy thiết lập giá trị Cược Nhỏ Nhất / Cược Lớn Nhất/ Cược Tối Đa Cho 1 Trận là 0 / 0 / 0 (chỉ dành cho Cược Thể Thao).</div></div>
    <input type="text" hidden name="username" value="{{$authUser->user_type !=='admin' ? $authUser->username : ''}}<%supper.selectedOne + '' + supper.selectedTwo + '' + supper.selectedThree%>">
    <input type="text" hidden name="selectedOne" required="" value="<%supper.selectedOne%>">
    <input type="text" hidden name="selectedTwo" required="" value="<%supper.selectedTwo%>">
    @if(!$authUser->isAdmin())
    <input type="text" hidden name="selectedThree" required="" value="<%supper.selectedThree%>">
    @endif
    <div class="customerInfo">
      <div class="headerTab">Thông tin Chung</div>
      <div class="clearBlock">
        <div class="customerInfoBlock1">Tài khoản <% supper.select %></div>
        <div class="customerInfoBlock2">
          @if(!$authUser->isAdmin())
          <b><span>{{$authUser->username}}</span></b>
          @endif
          <select id="selectedOne" ng-model="supper.selectedOne" required name="One" style="position: relative;">
            <option value=""></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="H">H</option>
            <option value="I">I</option>
            <option value="J">J</option>
            <option value="K">K</option>
            <option value="L">L</option>
            <option value="M">M</option>
            <option value="N">N</option>
            <option value="O">O</option>
            <option value="P">P</option>
            <option value="Q">Q</option>
            <option value="R">R</option>
            <option value="S">S</option>
            <option value="T">T</option>
            <option value="U">U</option>
            <option value="V">V</option>
            <option value="W">W</option>
            <option value="X">X</option>
            <option value="Y">Y</option>
            <option value="Z">Z</option>
          </select>
          <select id="selectedTwo" ng-model="supper.selectedTwo" required name="Two">
            <option value=""></option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="H">H</option>
            <option value="I">I</option>
            <option value="J">J</option>
            <option value="K">K</option>
            <option value="L">L</option>
            <option value="M">M</option>
            <option value="N">N</option>
            <option value="O">O</option>
            <option value="P">P</option>
            <option value="Q">Q</option>
            <option value="R">R</option>
            <option value="S">S</option>
            <option value="T">T</option>
            <option value="U">U</option>
            <option value="V">V</option>
            <option value="W">W</option>
            <option value="X">X</option>
            <option value="Y">Y</option>
            <option value="Z">Z</option>
          </select>
          @if(!$authUser->isAdmin())
          <select id="selectedTwo" ng-model="supper.selectedThree" required name="Three">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>
            <option value="F">F</option>
            <option value="G">G</option>
            <option value="H">H</option>
            <option value="I">I</option>
            <option value="J">J</option>
            <option value="K">K</option>
            <option value="L">L</option>
            <option value="M">M</option>
            <option value="N">N</option>
            <option value="O">O</option>
            <option value="P">P</option>
            <option value="Q">Q</option>
            <option value="R">R</option>
            <option value="S">S</option>
            <option value="T">T</option>
            <option value="U">U</option>
            <option value="V">V</option>
            <option value="W">W</option>
            <option value="X">X</option>
            <option value="Y">Y</option>
            <option value="Z">Z</option>
          </select>
          @endif
        </div>
        <div class="customerInfoBlock3">Mật Khẩu</div>
        <div class="customerInfoBlock4" id="divPassword" title="">
          <div class="float_l">
            <input id="password" autocomplete="new-password" name="password" class="textBoxInfo" type="password" style="position: relative;" required="required">
          </div>
          <div class="float_l pt3"><span id="spnNewPwdIcon">&nbsp;</span></div>
        </div>
      </div>
      <div class="clearBlock">
        <div class="customerInfoBlock1">Tên</div>
        <div class="customerInfoBlock2">
          <input id="firstName" name="first_name" type="text" required class="textBoxInfo" maxlength="50">
        </div>
        <div class="customerInfoBlock3">Họ</div>
        <div class="customerInfoBlock4">
          <input id="lastName" type="text" name="last_name" required class="textBoxInfo" maxlength="50">
        </div>
      </div>
      <div class="clearBlock">
        <div class="customerInfoBlock1">Điện thoại</div>
        <div class="customerInfoBlock2">
          <input id="phone" type="text" class="textBoxInfo" name="home_mobile" maxlength="50">
        </div>
        <div class="customerInfoBlock3">Điện thoại di động</div>
        <div class="customerInfoBlock4">
          <input id="mobilePhone" type="text" class="textBoxInfo" name="phone" maxlength="50">
        </div>
      </div>
      <div class="clearBlock">
        <div class="customerInfoBlock1">Hạn mức được cấp</div>
        <div class="customerInfoBlock2">
          <input type="number" id="credit" min=0 max="{{$authUser->wallet}}" maxlength="14" class="textBoxCredit textBoxInfo" name="wallet" required="required">
          <span class="hide">&gt;=<span id="minCredit">0</span></span>&lt;= <span id="maxCredit">{{$authUser->wallet}}</span>
        </div>
        <div class="customerInfoBlock3">Fax</div>
        <div class="customerInfoBlock4">
          <input id="fax" type="text" class="textBoxInfo" name="fax" maxlength="50">
        </div>
      </div>
      <div class="clearBlock">
        <div class="customerInfoBlock1">Nhóm</div>
        <div class="customerInfoBlock2">
          <select id="group" name="group">
            <option value="AA">AA</option>
          </select>
        </div>
        <div class="customerInfoBlock3">
          <label for="closed">Bị khóa</label>
        </div>
        <div class="customerInfoBlock4">
          <input name="closed" id="closed" type="checkbox">
        </div>
      </div>
      <div class="clearBlock">
        <div class="customerInfoBlock1">
          <label for="suspended">Bị đình chỉ</label>
        </div>
        <div class="customerInfoBlock2">
          <input name="suspended" id="suspended" type="checkbox">
        </div>
        <div class="customerInfoBlock3">
          <label></label>
        </div>
        <div class="customerInfoBlock4">
          
        </div>
      </div>
    </div>
    <div class="commission">
      <div class="headerTab"> Hoa hồng </div>
      <div class="clearBlock">
        <div class="commissionBlock1 commissionHeader"> </div>
        <div class="commissionBlock2 commissionHeader"> Hoa hồng cho Agent</div>
        <div class="commissionBlock2 commissionHeader"> Hoa hồng cho Member </div>
      </div>
      <div class="clearBlock">
        <div class="commissionBlock1"> Asian HDP, OU, OE </div>
        <div class="commissionBlock2">
          <input type="text" value="0.0025" id="textBoxDiscountAsian" class="textBoxComm" disabled="true">
        </div>
        <div class="commissionBlock2">
          <select id="discountAsian" name="discountAsian" class="widthGroup">
            <option value="0.0025">0.0025</option>
            
            <option value="0">0</option>
          </select>
        </div>
      </div>
      <div class="clearBlock">
        <div class="commissionBlock1">1 X 2</div>
        <div class="commissionBlock2">
          <input type="text" value="0.0025" id="textBoxDiscount1x2" class="textBoxComm" disabled="true">
        </div>
        <div class="commissionBlock2">
          <select id="discount1x2" name="discount1x2" class="widthGroup">
            <option value="0.0025">0.0025</option>
           
            <option value="0">0</option>
          </select>
        </div>
      </div>
      <div class="clearBlock">
        <div class="commissionBlock1">Loại cược khác</div>
        <div class="commissionBlock2">
          <input type="text" value="0.0025" id="textBoxDiscountCS" class="textBoxComm" disabled="true">
        </div>
        <div class="commissionBlock2">
          <select id="discountCS" name="discountCS" class="widthGroup">
            <option value="0.0025">0.0025</option>
            
            <option value="0">0</option>
          </select>
        </div>
      </div>
      <div class="clearBlock">
        <div class="commissionBlock1">Number Game Comm</div>
        <div class="commissionBlock2">
          <input type="text" value="0.0025" id="textBoxDiscountNumber" class="textBoxComm" disabled="true">
        </div>
        <div class="commissionBlock2">
          <select id="discountNumber" name="discountNumber" onchange="hh(this.value);" class="widthGroup">
            <option value="0.0025">0.0025</option>
            
            <option value="0">0</option>
          </select>
        </div>
      </div>
      <div class="clearBlock">
        <div class="commissionBlock1">HR Fixed Odds</div>
        <div class="commissionBlock2">
          <input type="text" value="0.0025" id="textBoxDiscountHRFixedOdds" class="textBoxComm" disabled="true">
        </div>
        <div class="commissionBlock2">
          <select id="discountHRFixOdds" name="discountHRFixOdds" class="widthGroup">
            <option value="0.0025">0.0025</option>
            
            <option value="0">0</option>
          </select>
        </div>
      </div>
      <div class="clearBlock"></div>
    </div>
    <div class="clearBlock"></div>
    <br>
    <div class="headerBetSetting">Tiền Cược</div>
    <div id="bettingLimitContainer">
    <div class="BettingLimit">
    <table border="0.9" style="width: 100%;">
    <tbody><tr>
        <td width="25%"></td>
        <td width="25%">Cược nhỏ nhất</td>
        <td width="25%">Cược lớn nhất</td>
        <td width="25%">Cược tối đa cho 1 trận</td>
    </tr>
    <tr>
        <td style="border: 1px;">Bóng đá</td>
        <td><input style="text-align: right;" name="bongdamin" class="BettingLimitTextBox" min="1" max="1000000" value="1" maxlength="14" type="number" required=""> &gt;=1</td>
        <td><input style="text-align: right;" name="bongdamax" class="BettingLimitTextBox" min="0" max="1000000" value="1000000" maxlength="14" type="number" required=""> &lt;=1000000</td>
        <td><input style="text-align: right;" name="bongdaper" class="BettingLimitTextBox" min="0" max="1000000" value="1000000" maxlength="14" type="number" required=""> &lt;=1000000</td>
    </tr>
    <tr>
        <td>Bóng rổ</td>
        <td><input style="text-align: right;" name="bongromin" class="BettingLimitTextBox" min="1" max="1000000" value="1" maxlength="14" type="number" required=""> &gt;=1</td>
        <td><input style="text-align: right;" name="bongromax" class="BettingLimitTextBox" min="0" max="1000000" value="1000000" maxlength="14" type="number" required=""> &lt;=1000000</td>
        <td><input style="text-align: right;" name="bongroper" class="BettingLimitTextBox" min="0" max="1000000" value="1000000" maxlength="14" type="number" required=""> &lt;=1000000</td>
    </tr>
    <tr>
        <td>Quần vợt</td>
        <td><input style="text-align: right;" name="bauducmin" class="BettingLimitTextBox" min="1" max="1000000" value="1" maxlength="14" type="number" required=""> &gt;=1</td>
        <td><input style="text-align: right;" name="bauducmax" class="BettingLimitTextBox" min="0" max="1000000" value="1000000" maxlength="14" type="number" required=""> &lt;=1000000</td>
        <td><input style="text-align: right;" name="bauducper" class="BettingLimitTextBox" min="0" max="1000000" value="1000000" maxlength="14" type="number" required=""> &lt;=1000000</td>
    </tr>
    
    </tbody></table>
    
    
    
    </div>
    <br>
    <div class="headerPositionTaking">Position Taking<a class="infoIco" href="../../../PositionTakingInformation/PositionTakingBetTypeReference" target="_blank" title="Click to view PT Info"></a></div>
    <div class="positionTaking">
   <div id="ptGridContainer">
      <div class="PTGrid">
         <div class="PTSport">
            <div class="PTSportLabel" style="">Bóng Đá</div>
            <div class="PTSportCopied" title="Sao chép tất cả thiết lập PT của  Bóng Đá  Cược Chấp ( ngoại trừ Number Game )"><input type="checkbox" name="cp$1" id="cp$1" class="PTCheckCopied"></div>
            <div class="PTGroupSet2" style="display: block;">
               <div class="PTGroupSet">
                  <div title="Dead Ball" class="GroupSetLabel" style="line-height: 103px; height: 103px;">Chưa bắt đầu</div>
                  <div class="PTGroup2">
                     <div class="PTGroup">
                        <div id="e$1$1$0" class="PTBox">
                           <div title="Sao chép từ Cược Chấp" class="BetTypeHeader2" style="min-width: 140px;">
                              Cược Chấp
                              <div class="PTCheckCopied"><input type="checkbox" name="c$1$1$1" id="c$1$1$1"></div>
                           </div>
                           <div class="BetTypeSelect" style="min-width: 140px;">
                              <select class="PTSelect" name="a1$1$1$0" id="a1$1$1$0">
                                 <option value="0">0</option>
                              </select>
                              <input type="button" class="BtnPTDown"><input type="button" class="BtnPTUp"><input type="button" class="BtnPTSub"><input type="button" class="BtnPTAdd">
                           </div>
                        </div>
                        <div id="e$1$3$0" class="PTBox">
                           <div title="Tài/Xỉu" class="BetTypeHeader" style="min-width: 110px;">Tài/Xỉu</div>
                           <div class="BetTypeSelect" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$3$0" id="a1$1$3$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$1$7$0" class="PTBox">
                           <div title="Hiệp 1 - Cược Chấp" class="BetTypeHeader" style="min-width: 110px;">Hiệp 1 - Cược Chấp</div>
                           <div class="BetTypeSelect" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$7$0" id="a1$1$7$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$1$8$0" class="PTBox">
                           <div title="Hiệp 1 - Tài/Xỉu" class="BetTypeHeader" style="min-width: 110px;">Hiệp 1 - Tài/Xỉu</div>
                           <div class="BetTypeSelect" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$8$0" id="a1$1$8$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$1$2$0" class="PTBox">
                           <div title="Lẻ/Chẵn" class="BetTypeHeader" style="min-width: 110px;">Lẻ/Chẵn</div>
                           <div class="BetTypeSelect" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$2$0" id="a1$1$2$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$1$9999$0" class="PTBox">
                           <div title="Cược Khác" class="BetTypeHeader" style="min-width: 105px;">Cược Khác</div>
                           <div class="BetTypeSelect BetTypeBottomBorder" style="min-width: 105px;">
                              <select class="PTSelect" name="a1$1$9999$0" id="a1$1$9999$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="PTGroup">
                        <div id="e$1$5$0" class="PTBox">
                           <div title="Sao chép từ 1 X 2" class="BetTypeHeader2" style="min-width: 140px;">
                              1 X 2
                              <div class="PTCheckCopied"><input type="checkbox" name="c$5$1$1" id="c$5$1$1"></div>
                           </div>
                           <div class="BetTypeSelect" style="min-width: 140px;">
                              <select class="PTSelect" name="a1$1$5$0" id="a1$1$5$0">
                                 <option value="0">0</option>
                              </select>
                              <input type="button" class="BtnPTDown"><input type="button" class="BtnPTUp"><input type="button" class="BtnPTSub"><input type="button" class="BtnPTAdd">
                           </div>
                        </div>
                        <div id="e$1$4$0" class="PTBox">
                           <div title="Tỷ Số Chính Xác" class="BetTypeHeader" style="min-width: 110px;">Tỷ Số Chính Xác</div>
                           <div class="BetTypeSelect" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$4$0" id="a1$1$4$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$1$6$0" class="PTBox">
                           <div title="Tổng Số Bàn Thắng" class="BetTypeHeader" style="min-width: 110px;">Tổng Số Bàn Thắng</div>
                           <div class="BetTypeSelect" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$6$0" id="a1$1$6$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$1$9$0" class="PTBox">
                           <div title="Cược Tổng Hợp" class="BetTypeHeader" style="min-width: 110px;">Cược Tổng Hợp</div>
                           <div class="BetTypeSelect" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$9$0" id="a1$1$9$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$1$10$0" class="PTBox PTBoxRightBorder">
                           <div title="Cược Thắng" class="BetTypeHeader" style="min-width: 110px;">Cược Thắng</div>
                           <div class="BetTypeSelect BetTypeBottomBorder" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$10$0" id="a1$1$10$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="PTGroupSet">
                  <div title="Live Ball" class="GroupSetLabel" style="line-height: 49px; height: 49px;">Trực Tiếp</div>
                  <div class="PTGroup2">
                     <div class="PTGroup">
                        <div id="e$1$1$1" class="PTBox">
                           <div title="Sao chép từ Cược Chấp" class="BetTypeHeader2" style="min-width: 140px;">
                              Cược Chấp
                              <div class="PTCheckCopied"><input type="checkbox" name="c$1$1$0" id="c$1$1$0"></div>
                           </div>
                           <div class="BetTypeSelect" style="min-width: 140px;">
                              <select class="PTSelect" name="a1$1$1$1" id="a1$1$1$1">
                                 <option value="0">0</option>
                              </select>
                              <input type="button" class="BtnPTDown"><input type="button" class="BtnPTUp"><input type="button" class="BtnPTSub"><input type="button" class="BtnPTAdd">
                           </div>
                        </div>
                        <div id="e$1$3$1" class="PTBox">
                           <div title="Tài/Xỉu" class="BetTypeHeader" style="min-width: 110px;">Tài/Xỉu</div>
                           <div class="BetTypeSelect" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$3$1" id="a1$1$3$1">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$1$7$1" class="PTBox">
                           <div title="Hiệp 1 - Cược Chấp" class="BetTypeHeader" style="min-width: 110px;">Hiệp 1 - Cược Chấp</div>
                           <div class="BetTypeSelect" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$7$1" id="a1$1$7$1">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$1$8$1" class="PTBox PTBoxRightBorder">
                           <div title="Hiệp 1 - Tài/Xỉu" class="BetTypeHeader" style="min-width: 110px;">Hiệp 1 - Tài/Xỉu</div>
                           <div class="BetTypeSelect" style="min-width: 110px;">
                              <select class="PTSelect" name="a1$1$8$1" id="a1$1$8$1">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div style="clear: both;"></div>

         <div class="PTSport">
            <div class="PTSportLabel">Bóng Bầu Dục Mỹ</div>
            <div class="PTSportCopiedInactive"><input type="checkbox" name="cp$3" id="cp$3" class="PTCheckCopied"></div>
            <div class="PTGroupSet2" style="display: block;">
               <div class="PTGroupSet">
                  <div class="PTGroup2">
                     <div class="PTGroup">
                        <div id="e$3$1$0" class="PTBox">
                           <div title="Sao chép từ Cược Chấp" class="BetTypeHeader2" style="min-width: 140px;">
                              Cược Chấp
                              <div class="PTCheckCopied"><input type="checkbox" name="c$1$3$1" id="c$1$3$1"></div>
                           </div>
                           <div class="BetTypeSelect" style="min-width: 140px;">
                              <select class="PTSelect" name="a1$3$1$0" id="a1$3$1$0">
                                 <option value="0">0</option>
                              </select>
                              <input type="button" class="BtnPTDown"><input type="button" class="BtnPTUp"><input type="button" class="BtnPTSub"><input type="button" class="BtnPTAdd">
                           </div>
                        </div>
                        <div id="e$3$3$0" class="PTBox">
                           <div title="Tài/Xỉu" class="BetTypeHeader" style="min-width: 60px;">Tài/Xỉu</div>
                           <div class="BetTypeSelect" style="min-width: 60px;">
                              <select class="PTSelect" name="a1$3$3$0" id="a1$3$3$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$3$2$0" class="PTBox">
                           <div title="Lẻ/Chẵn" class="BetTypeHeader" style="min-width: 60px;">Lẻ/Chẵn</div>
                           <div class="BetTypeSelect" style="min-width: 60px;">
                              <select class="PTSelect" name="a1$3$2$0" id="a1$3$2$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$3$20$0" class="PTBox">
                           <div title="Moneyline" class="BetTypeHeader" style="min-width: 140px;">Moneyline</div>
                           <div class="BetTypeSelect" style="min-width: 140px;">
                              <select class="PTSelect" name="a1$3$20$0" id="a1$3$20$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$3$10$0" class="PTBox">
                           <div title="Cược Thắng" class="BetTypeHeader" style="min-width: 90px;">Cược Thắng</div>
                           <div class="BetTypeSelect" style="min-width: 90px;">
                              <select class="PTSelect" name="a1$3$10$0" id="a1$3$10$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div style="clear: both;"></div>
         <div class="PTSport">
            <div class="PTSportLabel">Quần Vợt</div>
            <div class="PTSportCopiedInactive"><input type="checkbox" name="cp$5" id="cp$5" class="PTCheckCopied"></div>
            <div class="PTGroupSet2" style="display: block;">
               <div class="PTGroupSet">
                  <div class="PTGroup2">
                     <div class="PTGroup">
                        <div id="e$5$1$0" class="PTBox">
                           <div title="Sao chép từ Cược Chấp" class="BetTypeHeader2" style="min-width: 140px;">
                              Cược Chấp
                              <div class="PTCheckCopied"><input type="checkbox" name="c$1$5$1" id="c$1$5$1"></div>
                           </div>
                           <div class="BetTypeSelect" style="min-width: 140px;">
                              <select class="PTSelect" name="a1$5$1$0" id="a1$5$1$0">
                                 <option value="0">0</option>
                              </select>
                              <input type="button" class="BtnPTDown"><input type="button" class="BtnPTUp"><input type="button" class="BtnPTSub"><input type="button" class="BtnPTAdd">
                           </div>
                        </div>
                        <div id="e$5$3$0" class="PTBox">
                           <div title="Tài/Xỉu" class="BetTypeHeader" style="min-width: 60px;">Tài/Xỉu</div>
                           <div class="BetTypeSelect" style="min-width: 60px;">
                              <select class="PTSelect" name="a1$5$3$0" id="a1$5$3$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$5$2$0" class="PTBox">
                           <div title="Lẻ/Chẵn" class="BetTypeHeader" style="min-width: 60px;">Lẻ/Chẵn</div>
                           <div class="BetTypeSelect" style="min-width: 60px;">
                              <select class="PTSelect" name="a1$5$2$0" id="a1$5$2$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$5$20$0" class="PTBox">
                           <div title="Moneyline" class="BetTypeHeader" style="min-width: 140px;">Moneyline</div>
                           <div class="BetTypeSelect" style="min-width: 140px;">
                              <select class="PTSelect" name="a1$5$20$0" id="a1$5$20$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$5$9999$0" class="PTBox">
                           <div title="Cược Khác" class="BetTypeHeader" style="min-width: 90px;">Cược Khác</div>
                           <div class="BetTypeSelect BetTypeBottomBorder" style="min-width: 90px;">
                              <select class="PTSelect" name="a1$5$9999$0" id="a1$5$9999$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                        <div id="e$5$10$0" class="PTBox">
                           <div title="Cược Thắng" class="BetTypeHeader" style="min-width: 90px;">Cược Thắng</div>
                           <div class="BetTypeSelect" style="min-width: 90px;">
                              <select class="PTSelect" name="a1$5$10$0" id="a1$5$10$0">
                                 <option value="0">0</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
    
    </div>
   
    <div class="clearBlock"></div>
    <div class="pt7">
      <div class="btnLeft">
         <input type="submit" id="submit1" name="them" class="btn btn-refresh" value="Thêm">
      </div>
    </div>
  </div>
  {!! Form::close() !!}

</body></html>