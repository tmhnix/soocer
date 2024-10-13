<!DOCTYPE html>
<html ng-app="portal">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Tạo tài khoản phụ</title>
      <link href="/assets/admin/css/baomat_files/Agent.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/baomat_files/SubAccount.min.css" rel="stylesheet" type="text/css">
      <script type="application/javascript" src="{{ elixir('portal/js/all.js') }}"></script>
      <style type="text/css">
          .margin{
            margin: 10px
          }
      </style>
   </head>
   <body onload="showmessage('{{$errorMsg}}')">
      <div class="page_popup">
         <div id="diverrmsg" class="width-100per">
            <div id="spmsgerr" class="msgerr"></div>
         </div>
         {!! Form::open(array('route' => array('portal.agent.subaccountPost'))) !!}
         <input type="text" hidden name="username" value="{{$authUser->username}}SUB<%supper.selectedOne + '' + supper.selectedTwo%>">
         <table class="tblPop" ng-init="supper.selectedOne = '0'; supper.selectedTwo = '0'">
            <tbody>
               <tr>
                  <td>Tên đăng nhập</td>
                  <td>
                     {{$authUser->username}}Sub
                     <select name="number1" id="number1" required="" ng-model="supper.selectedOne" class="form-control margin" style="position: relative;">
                        <option selected="selected" value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                     </select>
                     <select name="number2" ng-model="supper.selectedTwo" required="" id="number2" class="form-control">
                        <option selected="selected" value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="0">0</option>
                     </select>
                  </td>
               </tr>
               <tr>
                  <td>Mật khẩu</td>
                  <td id="td_pass">
                     <input name="password" id="password" required="" class="form-control margin" type="password" maxlength="16" style="position: relative;"><span id="spnPwdIcon">&nbsp;</span><span id="spnInfoIco" class="infoIco" title="Mật khẩu phải gồm ít nhất 8 ký tự, không có khoảng trắng và phải có ít nhất 3 ký tự sau đây:
                     - Ký tự viết hoa [A-Z]
                     - Ký tự viết thường [a-z]
                     - Ký tự số [0-9]
                     - Ký tự đặc biệt (!,@,#,...)
                     Ví dụ : 59D7!4$h, 493abcDE
                     Lưu ý : Mật khẩu có phân biệt chữ hoa và chữ thường.">&nbsp;</span></td>
               </tr>
               <tr>
                  <td>Tên</td>
                  <td id="td_fname"><input name="first_name" required class="form-control margin" id="txtFirstName" type="text"></td>
               </tr>
               <tr>
                  <td>Họ</td>
                  <td id="td_lname"><input name="last_name" required class="form-control margin" id="txtLastName" type="text"></td>
               </tr>
               <tr>
                  <td colspan="2"><input type="submit" value=" Thêm " class="btnSubmit"></td>
               </tr>
            </tbody>
         </table>
         {!! Form::close() !!}
      </div>
      <div style="display: none; position: absolute; top: 0px; left: 0px; opacity: 0.5; background-color: white;">
         <div style="width: 100px; height: 100px; position: relative;"></div>
      </div>
      <script type="text/javascript">
      function showmessage(msg) {
        if (!!msg) {
          alert(msg);
        }
      }
    </script>
   </body>
</html>