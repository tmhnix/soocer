<html><head>
<meta charset="utf8">
<script>
   $j=jQuery.noConflict();
min = 20;
max = 490;
function getHTTPObject(){
    if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
    else if (window.XMLHttpRequest) return new XMLHttpRequest();
    else {
    alert("Your browser does not support AJAX.");
    return null;
    }
}
ht = 1;
function RefreshParent() {
   if (window.opener != null && !window.opener.closed) {
      if(ht == 1)
         window.opener.location.reload();
   }

}
window.onbeforeunload = RefreshParent;
 function tren(){
    if(httpObject.readyState == 4){
        ht=1;
      close();
    }
 }
function UpdCredit() {
   var member=$j("#mb").val().replace(/("|')/g, "");
   var tien_sua=$j("#txtamout").val().replace(/("|')/g, "");
   console.log(member);
   console.log(tien_sua);
   if(tien_sua == ""){
      return;
   }
   if(tien_sua.length == 0){
      return;
   }
   if(tien_sua < min || tien_sua > max) {
      alert("Giá trị nhập vào không hợp lệ");
      return;
   }
   $j.ajax({
      type:'post',
      url:'http://bb8ag.com/agent/A_Sua.php',
      data:{id:member,tien_sua:tien_sua},
      contentType:'application/x-www-form-urlencoded; charset=UTF-8',
      cache: false,
      asyncBoolean:false,
      success:function(response){
         if(response=="thanh_cong"){
            alert("Cập nhât hạn mức tín dụng cho member "+member+" thành công");
            parent.opener.location.reload();
            window.close();
         }else{
            console.log(response);
            alert("Xay Ra Loi Cap Nhat. Cap Nhat Khong Thanh Cong");
         }
      }
   });
 }
function OnkeyUpAmt(a,e) {
    var isok = true;
    if (!e) e = window.event;
    var key = (e.keyCode) ? e.keyCode : e.which;
    if ((key < 48 || key > 57) && key != 8 && key != 13 && key != 0 && (key < 37 || key > 40)) {
        return false;
    }
    else {
      if (key == 13) {
         UpdCredit();
         return false;
      }
   }
}
var httpObject = null;
</script>
<style type="text/css">
   html {
   color: #171717;
   cursor: default;
   font-family: Tahoma,Arial,helvetica,sans-serif;
   font-size: 11px;
   margin: 0;
   text-align: left;
}
::-webkit-scrollbar

{

   height: 16px;

   overflow: visible;

   width: 16px;

}

::-webkit-scrollbar-button

{

   height: 0;

   width: 0;

}



::-webkit-scrollbar-track

{

   background-clip: padding-box;

   border: solid transparent;

   border-width: 0 0 0 4px;

}

::-webkit-scrollbar:vertical

{

   width: 11px;

}

::-webkit-scrollbar:horizontal

{

   height: 11px;

}

::-webkit-scrollbar-track:horizontal

{

   border-width: 4px 0 0;

}

::-webkit-scrollbar-track:hover

{

   background-color: rgba(0,0,0,.05);

   box-shadow: inset 1px 0 0 rgba(0,0,0,.1);

}

::-webkit-scrollbar-track:horizontal:hover

{

   box-shadow: inset 0 1px 0 rgba(0,0,0,.1);

}

::-webkit-scrollbar-track:active

{

   background-color: rgba(0,0,0,.05);

   box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);

}

::-webkit-scrollbar-track:horizontal:active

{

   box-shadow: inset 0 1px 0 rgba(0,0,0,.14),inset 0 -1px 0 rgba(0,0,0,.07);

}

::-webkit-scrollbar-thumb

{

   background-color: rgba(0,0,0,.2);

   background-clip: padding-box;

   border: solid transparent;

   border-width: 1px 1px 1px 6px;

   min-height: 28px;

   padding: 100px 0 0;

   box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset 0 -1px 0 rgba(0,0,0,.07);

}

::-webkit-scrollbar-thumb:horizontal

{

   border-width: 6px 1px 1px;

   padding: 0 0 0 100px;

   box-shadow: inset 1px 1px 0 rgba(0,0,0,.1),inset -1px 0 0 rgba(0,0,0,.07);

}

::-webkit-scrollbar-thumb:hover

{

   background-color: rgba(0,0,0,.4);

   box-shadow: inset 1px 1px 1px rgba(0,0,0,.25);

}

::-webkit-scrollbar-thumb:active

{

   background-color: rgba(0,0,0,0.5);

   box-shadow: inset 1px 1px 3px rgba(0,0,0,0.35);

}

::-webkit-scrollbar-corner

{

   background: transparent;

}

body::-webkit-scrollbar-track-piece

{

   background-clip: padding-box;

   background-color: #f5f5f5;

   border: solid #fff;

   border-width: 0 0 0 3px;

   box-shadow: inset 1px 0 0 rgba(0,0,0,.14),inset -1px 0 0 rgba(0,0,0,.07);

}

body::-webkit-scrollbar-track-piece

{

   border-width: 3px 0 0;

   box-shadow: none;

}

body::-webkit-scrollbar-thumb

{

   border-width: 1px 1px 1px 1px;

}

body::-webkit-scrollbar-thumb:horizontal

{

   border-width: 1px 1px 1px;

}

body::-webkit-scrollbar-corner

{

   background-clip: padding-box;

   background-color: #f5f5f5;

   border: solid #fff;

   border-width: 3px 0 0 3px;

   box-shadow: inset 1px 1px 0 rgba(0,0,0,.14);

}



body

{

   background: #f2f4f6 url(../Images/bg_conts.jpg) repeat-x top;

   background-attachment: fixed;

   background-color: #f5f6f8;

   margin: 0;

   padding: 2px;

}



input[type=button]

{

   -moz-border-radius: 3px;

   -webkit-border-radius: 3px;

   border-radius: 3px;

   font-size: 11px;

}



select

{

   font-size: 11px;

   height: 20px;

   margin-right: 7px;

   margin-top: 1px;

}



.btn

{

   background: url(../Images/bg_buttonsite.jpg) repeat-x top;

   border: 1px #4d4d4d solid;

   cursor: pointer;

   font-size: 11px;

   height: 19px;

   line-height: 15px;

   padding: 0 5px 2px;

}



.btn:hover

{

   background: url(../Images/bg_buttonsiteOV.jpg) repeat-x top;

   border: 1px #984d1a solid;

   color: #cc4800;

}



.editBtn

{

   background: url(../Images/edit.gif) repeat-x top;

   border: solid 0 #000;

   cursor: pointer;

   height: 17px;

   width: 17px;

}



.editBtnDisabled

{

   background: url(../Images/edit_disabled.gif) repeat-x top;

   border: solid 0 #000;

   cursor: pointer;

   height: 17px;

   width: 17px;

}



.viewBtn

{

   background: url(../Images/view_icon.gif) repeat-x top;

   border: solid 0 #000;

   cursor: pointer;

   height: 17px;

   width: 17px;

}



.viewMenuBtn

{

   background: url(../Images/sticky-arrow.png) repeat-x top;

   border: solid 0 #000;

   cursor: pointer;

   height: 17px;

   width: 17px;

}



.disabledBtn

{

   background: url(../Images/disable_icon.gif) repeat-x top;

   border: solid 0 #000;

   cursor: pointer;

   height: 17px;

   width: 17px;

}



.syncBtn

{

   background: url(../Images/sync.gif) repeat-x top;

   border: solid 0 #000;

   cursor: pointer;

   height: 17px;

   width: 17px;

}



.divHeader

{

   background: transparent url(../Images/bg_header01.jpg) no-repeat scroll left bottom;

   color: #9D1C1C;

   font-weight: 700;

   height: 22px;

   line-height: 18px;

   padding-left: 15px;

   text-transform: uppercase;

   width: 97%;

}



.tblRpt

{

   background-color: #B7B7B7;

}



.RptSubTitle

{

   background-color: #ffefde;

}



.RptTitle

{

   background-color: #fff;

   font-weight: 400 !important;

   height: 22px;

   text-align: center;

   text-transform: uppercase;

}



.RptHeader

{

   background: #6A6969 url(../Images/bg_header02.jpg) repeat-x scroll center top;

   color: #FFF;

   font-size: 12px !important;

   font-weight: 400 !important;

   height: 22px;

   text-align: center;

}



.RptHeader02

{

   background-color: #3f3f3f;

   color: #FFF;

   font-size: 12px !important;

   font-weight: 400 !important;

   text-align: center;

}



.RptHeader01

{

   background: url(../Images/bg_header04.jpg) repeat-x top;

   background-color: #e8e8e8;

   font-weight: 700;

   height: 22px;

   text-align: center;

}



.RptFooter

{

   background: url(../Images/bg_f01.jpg) repeat-x scroll center top #783819;

   color: #FFF;

   font-weight: 700;

}



.w-order

{

   color: #7d7d7d;

   font-weight: 400;

   text-align: right;

   width: 20px;

}



.l

{

   text-align: left;

}



.r

{

   text-align: right;

}



.c

{

   text-align: center;

}



.b

{

   font-weight: 700;

}



.bl_time

{

   color: #434343;

   font-size: 7pt !important;

   font-weight: 400;

   text-align: center;

}



.bg_white

{

   background-color: #fff;

}



.bg_eb

{

   background-color: #F7F0E4;

}



.bg_eb2

{

   background-color: #f7f0e4;

}



.MaskLoadingDiv

{

   background: url(../Images/loader3.gif);

}



.PwdError

{

   background: url(../Images/x5.gif);

   background-repeat: no-repeat;

   border-width: 0;

   display: inline-block;

   height: 16px;

   width: 16px;

}



.PwdSuccess

{

   background: url(../Images/tick.png);

   background-repeat: no-repeat;

   border-width: 0;

   display: inline-block;

   height: 16px;

   width: 16px;

}



.tick

{

   background: url("../Images/tick.png") no-repeat center top;

   padding-left: 5px;

   letter-spacing: 10px;

   font-size: 12px;

}



#page_main

{

   overflow-x: visible;

   overflow-y: visible;

   padding-bottom: 15px;

   padding-top: 7px;

}



#header_main

{

   background: url(../Images/bg_header01.jpg) no-repeat left bottom;

   color: #9d1c1c;

   font-weight: 700;

   height: 22px;

   line-height: 18px;

   min-width: 650px;

   padding-left: 15px;

   text-transform: uppercase;

   width: 97%;

}



.positive

{

   color: #036;

   font-weight: 700;

}



.negative

{

   color: #B50000;

   font-weight: 700;

}



.iplink

{

   color: #06C;

   text-decoration: none;

}



.iplink:hover

{

   color: #F60;

   text-decoration: none;

}



.ipnolink

{

   text-decoration: none;

}



.firstCol

{

   background-color: #D8FBE5;

   color: #FF5A00;

   text-transform: uppercase;

}



.warning li

{

   background: url(../Images/more.gif) no-repeat left;

   padding-left: 20px;

}



.warning ul

{

   color: #90979a;

   font-weight: 700;

   list-style: none;

   margin-left: 2px;

   padding-left: 2px;

}



.nowrap

{

   white-space: nowrap;

}



.tblPop

{

   background-color: #cdcdcd;

}



.header_popup

{

   background: url(../Images/icon_pop.jpg) no-repeat left;

   color: #862626;

   font-size: 11px;

   font-weight: 700;

   line-height: 25px;

   padding-left: 20px;

}



div.loading

{

   background: url(../Images/ajax-loader.gif) no-repeat scroll center top transparent;

   display: block;

   height: 23px;

   opacity: 1;

   width: 23px;

}



.hidden

{

   display: none;

}



element.style

{

   cursor: pointer;

}



.divEdit

{

   background: url(../../_GlobalResources/Images/edit.gif) no-repeat scroll 0 0 transparent;

   cursor: pointer;

   height: 17px;

   width: 17px;

}



td, span, div, a

{

   font-family: Tahoma,Arial,helvetica,sans-serif;

   font-size: 11px;

}



.loading1

{

   background: url(../../_GlobalResources/Images/ajax-loader.gif) no-repeat top;

   display: block;

   height: 32px;

   width: 32px;

}



div.divBoxRight

{

   float: right;

   padding-right: 4px;

   padding-top: 4px;

}



.AGEWnd

{

   -moz-border-radius: 3px 3px 2px 2px;

   -webkit-border-radius: 3px 3px 2px 2px;

   background-color: #eee;

   border: 1px solid #000;

   border-collapse: collapse;

   border-radius: 3px 3px 2px 2px 2px;

   margin: 0;

   padding: 0;

}



.AGEWndMask

{

   background-color: transparent;

   border: dashed 2px #999;

   border-style: dotted;

   cursor: move;

   z-index: 1002;

}



.AGEWndTitleMask

{

   -khtml-opacity: 0.01;

   -moz-opacity: .01;

   background-color: #727272;

   border: solid 0 #ff;

   border-style: none;

   cursor: move;

   filter: alpha(opacity=01);

   height: 20px;

   left: 0;

   margin: 0;

   opacity: 0.01;

   padding: 0;

   position: absolute;

   top: 0;

   z-index: 1002;

}



.AGEWndTable

{

   border: solid 0 transparent;

   cursor: default;

   margin: 0;

   padding: 0;

   table-layout: fixed;

   width: 100%;

}



.AGEWndTitle

{

   -moz-user-select: no;

   background: #000 url(../Images/bg_popup.jpg) repeat scroll 0 0;

   background-color: #727272;

   color: #fff;

   font-weight: 700;

   margin: 0;

   padding: 0;

}



.AGEWndTitleDiv

{

   font-size: 12px;

   font-weight: 700;

}



.AGEWndTitleText

{

   cursor: pointer;

   text-align: left;

}



.AGEWndTitleButton

{

   height: 20px;

   overflow: hidden;

   padding-right: 1px;

   text-align: right;

   width: 20px;

}



.AGEWndCloseButton

{

   background-image: url(../Images/x.jpg);

   cursor: pointer;

   display: block;

   height: 15px;

   line-height: 0;

   width: 15px;

}



.AGEWndNoPadding

{

   margin: 0;

   padding: 0;

}



.clssBackground

{

   background-color: #f8b72b;

}



.btnLeft

{

   background: url(../Images/b_left.gif) no-repeat left top;

   height: 22px;

   margin: 5px 0;

   min-width: 64px;

   padding: 0 0 0 3px;

}



.btnRight

{

   background: url(../Images/b_left.gif) no-repeat left top;

   height: 22px;

   margin: 5px 0;

   min-width: 64px;

   padding: 0 0 0 3px;

   float: right;

}



.btnMain

{

   background: url(../Images/b_right.gif) no-repeat right top;

   border: none;

   color: #333;

   cursor: pointer;

   display: block;

   float: left;

   font-size: 12px;

   font-weight: 700;

   height: 22px;

   min-width: 64px;

   padding: 0 24px 2px 12px;

}



.btnMain:hover

{

   background-position: 100% -22px;

   color: #000;

   cursor: pointer;

}



input[type=submit], input[type=reset], table

{

   -moz-border-radius: 3px;

   -webkit-border-radius: 3px;

   border-radius: 3px;

}



input[type=text], input[type=password]

{

   width: 120px;

}



.tblRpt td, .tblPop td

{

   line-height: 22px;

   padding-left: 2px;

   padding-right: 2px;

}

.successWarning

{

   background-image: url("../../../_GlobalResources/Images/tick.png");

   padding-left: 5px;

   background-repeat: no-repeat;

   letter-spacing: 10px;

   font-size: 12px;

}

.errorWarning

{

   background-image: url("../../../_GlobalResources/Images/x5.gif");

   padding-left: 5px;

   background-repeat: no-repeat;

   letter-spacing: 10px;

   font-size: 12px;

}

.successWarning2

{

   background-image: url("../../_GlobalResources/Images/tick.png");

   padding-left: 5px;

   background-repeat: no-repeat;

   letter-spacing: 10px;

   font-size: 12px;

}

.errorWarning2

{

   background-image: url("../../_GlobalResources/Images/x5.gif");

   padding-left: 5px;

   background-repeat: no-repeat;

   letter-spacing: 10px;

   font-size: 12px;

}

.loading2

{

   background-image: url(../../_MemberInfo/P2P/Resources/Images/loading.gif);

   background-repeat: no-repeat;

   background-position: center center;

}



button[disabled]:active, button[disabled],

input[type="reset"][disabled]:active,

input[type="reset"][disabled],

input[type="button"][disabled]:active,

input[type="button"][disabled],

input[type="submit"][disabled]:active,

input[type="submit"][disabled] {

    opacity:0.6;

    filter:alpha(opacity=60); /* For IE8 and earlier */

   color: #000;

   cursor: pointer;

}



.infoIco

{

   cursor: pointer;

   background: url("../../_GlobalResources/Images/info.png") no-repeat right;

   width: 20px;

}

            #header_main

{

   min-width: 350px;

   width: 350px;

}

            .jlhlebbhengjlhmcjebbkambaekglhkf {

            top:0px;

            left:0px;

            min-width:30px;

            max-width:300px;

            font-size:13px;

            font-family:arial,helvetica,sans-serif;

            opacity:.93;

            padding:0px;

            position:absolute;

            display:block;

            z-index:999997;

            font-style:normal;

            font-variant:normal;

            font-weight:normal;

            }



            #jlhlebbhengjlhmcjebbkambaekglhkf_up {

            text-align:center;

            padding:0px;

            margin:0px;

            }



            #jlhlebbhengjlhmcjebbkambaekglhkf_cont {

            background-color:#729FCF;

            font-family:arial,helvetica,sans-serif-webkit-box-shadow:#729FCF 0px 0px 2px;

            color:#FFFFFF;

            padding:7px;

            -webkit-border-radius:5px;

            }



            #jlhlebbhengjlhmcjebbkambaekglhkf_down {

            text-align:center;

            padding:0px;

            margin:0px;

            }

         </style>
</head>


<body id="bdSearch" onload="showmessage('{{$errorMsg}}')">
@include('portal.messsage')   
{!! Form::model(array('route' => array('portal.web.updateWalletPost', $user->id))) !!}
<table cellpadding="0" cellspacing="1" class="tblPop c" width="100%">
   <tbody>
      <tr class="bg_eb2">
         <td class="r b" style="width: 35%;">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UT:
         </td>
         <td class="l">
            <input style="padding-left: 5px; text-align: right; width: 130px;" type="number" min="{{ceil($min)}}" max="{{floor($max)}}" name="txtamout" id="txtamout" value="{{$user->credit_line}}" maxlength="14"> &lt;= {{floor($max)}}       </td>
      </tr>
      <tr class="bg_eb2">
         <td>
         </td>
         <td align="left">
            <input type="submit" value="Gửi" class="btn">
            &nbsp;
            <input type="button" value="Hủy" onclick="ht=0;parent.close();" class="btn">
         </td>
      </tr>
        <tr>
            <td colspan="2" style="color: red;margin-top: 5px;"><center></center></td>
        </tr>
   </tbody>
</table>
{!! Form::close() !!}
<script type="text/javascript">
      function showmessage(msg) {
        if (!!msg) {
          alert(msg);
        }
      }
    </script>
</body></html>