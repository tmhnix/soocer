<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Code</title>
    <link href="/assets/admin/css/baomat_files/Agent.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">
            .jlhlebbhengjlhmcjebbkambaekglhkf {
                top: 0px;
                left: 0px;
                min-width: 30px;
                max-width: 300px;
                font-size: 13px;
                font-family: arial, helvetica, sans-serif;
                opacity: .93;
                padding: 0px;
                position: absolute;
                display: block;
                z-index: 999997;
                font-style: normal;
                font-variant: normal;
                font-weight: normal;
            }
            #jlhlebbhengjlhmcjebbkambaekglhkf_up {
                text-align: center;
                padding: 0px;
                margin: 0px;
            }
            #jlhlebbhengjlhmcjebbkambaekglhkf_cont {
                background-color: #729FCF;
                font-family: arial, helvetica, sans-serif-webkit-box-shadow: #729FCF 0px 0px 2px;
                color: #FFFFFF;
                padding: 7px;
                -webkit-border-radius: 5px;
            }
            #jlhlebbhengjlhmcjebbkambaekglhkf_down {
                text-align: center;
                padding: 0px;
                margin: 0px;
            }
        </style>
        <script>
            function check()
            {
                var a = document.getElementById("op").value;
                var b = document.getElementById("np").value;
                var c = document.getElementById("ncp").value;
                if(a.length == 0 || b.length == 0 || c.length == 0)
                    return true;
                if(a.length < 6 || b.length < 6 || c.length < 6)
                {
                    alert("Mã bảo vệ phải có 6 ký tự");
                    document.getElementById("op").focus();
                    return false;
                }
                if(b != c)
                {
                    alert("Nhập lại mật khẩu không đúng");
                    document.getElementById("ncp").focus();
                    return false;
                }

            }

        </script>
    </head>
    <body onload="document.getElementById('op').focus();showmessage('{{$errorMsg}}')">
        @include('portal.messsage')
        <div id="page_main">
            <div id="header_main">
                <a id="linkChangeSC" name="linkChangeSC" href="{!! route('portal.agent.secure') !!}">Mật khẩu&nbsp;|&nbsp;</a>
                Mã bảo mật
            </div>
            <br>
            <div style="width: 370px">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" id="diverrmsg" style="display: none;">
                    <tbody>
                        <tr>
                            <td id="msg_1_1" class="emsg_1_1">&nbsp;</td>
                            <td id="msg_1_2" class="emsg_1_2">&nbsp;</td>
                            <td id="msg_1_3" class="emsg_1_3">&nbsp;</td>
                        </tr>
                        <tr>
                            <td id="msg_2_1" valign="top" class="emsg_2_1">&nbsp;</td>
                            <td valign="top" id="spmsgerr" class="msgerr">                                                            </td>
                            <td id="msg_2_2" class="emsg_2_2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td id="msg_3_1" class="emsg_3_1">&nbsp;</td>
                            <td id="msg_3_2" class="emsg_3_2">&nbsp;</td>
                            <td id="msg_3_3" class="emsg_3_3">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <table width="370" border="0" cellpadding="0" cellspacing="1" class="tblRpt">
                <tbody>
                    <tr>
                        <td colspan="2" class="RptHeader bg_eb"> Đổi mã bảo mật </td>
                    </tr>
                    {!! Form::open(array('route' => array('portal.agent.secure_codePost'), 'onsubmit' => 'return check();')) !!}
                        <tr class="bg_eb">
                            <td>Mã bảo mật cũ</td>
                            <td class="l"><input id="op" type="password" name="op" maxlength="6" required=""></td>
                        </tr>
                        <tr class="bg_eb">
                            <td class="l" width="40%">Mã bảo mật mới</td>
                            <td class="l"><input id="np" type="password" name="np" maxlength="6" required="">
                                <span id="spnNewPwdIcon">&nbsp;</span></td>
                        </tr>
                        <tr class="bg_eb">
                            <td class="l">Nhập lại mã bảo mật mới</td>
                            <td class="l"><input id="ncp" type="password" name="ncp" maxlength="6" required="">
                                <span id="spnConfirmPwdIcon">&nbsp;</span></td>
                        </tr>
                        <tr>
                            <td class="bg_eb c" colspan="2">
                                <input type="submit" value="Gửi" class="btn">
                                &nbsp;
                                <input type="reset" value="Làm sạch" class="btn"></td>
                        </tr>
                    {!! Form::close() !!}
                </tbody>
            </table>
            <p>
                <span style="color: red">*</span> Mã Bảo Mật bao gồm 6 ký tự số, phải chứa ít nhất 2 ký tự khác nhau và không phải là các số liên tiếp nhau. <br/>
                Ví dụ: không cho phép 123456, 456789, 765432, v.v.
                <br/>
            </p>
            <div style="width: 370px; padding: 2px; margin-top: 12px;">

            </div>
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