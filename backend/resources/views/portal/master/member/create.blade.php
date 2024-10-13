@extends('portal.template')
@section('module', 'master')
@section('main')
{!! Form::open(array('route' => 'portal.master.member.createPost')) !!}
  <div class="minWidthCustomer">
    <center><br><div id="spmsgerr" style="color: red; font-size: medium;" class="msgerr"></div> 
    </center>
    <div class="pt7">
      <div class="btnLeft"> 
      <input type="submit" id="submit" value="Thêm" style="margin-bottom: 5px;" class="btn btn-refresh">
    </div>
    <input type="text" hidden name="username" value="{{$authUser->username}}<%supper.selectedOne + '' + supper.selectedTwo%>">
    <div class="customerInfo">
      <div class="headerTab">Thông tin Chung</div>
      <div class="clearBlock">
        <div class="customerInfoBlock1">Tài khoản <% supper.select %></div>
        <div class="customerInfoBlock2">
          <b><span>{{$authUser->username}}</span></b>
          <select id="selectedOne" ng-model="supper.selectedOne" required name="One" style="position: relative;">
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
         
           <!-- <span id="msgIcon">
            <img id="kt" src="x5.gif" alt="">
          </span> -->
        </div>
        <div class="customerInfoBlock3">Mật Khẩu</div>
        <div class="customerInfoBlock4" id="divPassword" title="">
          <div class="float_l">
            <input id="password" autocomplete="off" name="password" class="textBoxInfo" type="password" maxlength="10" style="position: relative;" required="required">
          </div>
          <div class="float_l pt3"><span id="spnNewPwdIcon">&nbsp;</span></div>
        </div>
      </div>
      <div class="clearBlock">
        <div class="customerInfoBlock1">Tên</div>
        <div class="customerInfoBlock2">
          <input id="firstName" name="first_name" type="text" class="textBoxInfo" maxlength="50">
        </div>
        <div class="customerInfoBlock3">Họ</div>
        <div class="customerInfoBlock4">
          <input id="lastName" type="text" name="last_name" class="textBoxInfo" maxlength="50">
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
        <div class="commissionBlock2 commissionHeader"> Hoa hồng cho Master</div>
        <div class="commissionBlock2 commissionHeader"> Hoa hồng cho Agent </div>
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
    </div>
   
    <div class="clearBlock"></div>
    <div class="pt7">
      <div class="btnLeft">
         <input type="submit" id="submit1" name="them" class="btn btn-refresh" value="Thêm">
      </div>
    </div>
  </div>
  {!! Form::close() !!}
@stop  