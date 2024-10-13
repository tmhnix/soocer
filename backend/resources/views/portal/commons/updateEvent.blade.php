<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>
         Tùy chỉnh {{$event->id}}
      </title>
      <style type="text/css">
      </style>
      <style type="text/css">
         {
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
         background: #6A6969;
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
         }
         .PwdError
         {
         background-repeat: no-repeat;
         border-width: 0;
         display: inline-block;
         height: 16px;
         width: 16px;
         }
         .PwdSuccess
         {
         background-repeat: no-repeat;
         border-width: 0;
         display: inline-block;
         height: 16px;
         width: 16px;
         }
         .tick
         {
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
         color: #862626;
         font-size: 11px;
         font-weight: 700;
         line-height: 25px;
         padding-left: 20px;
         }
         div.loading
         {
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
         height: 22px;
         margin: 5px 0;
         min-width: 64px;
         padding: 0 0 0 3px;
         }
         .btnRight
         {
         height: 22px;
         margin: 5px 0;
         min-width: 64px;
         padding: 0 0 0 3px;
         float: right;
         }
         .btnMain
         {
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
         padding-left: 5px;
         background-repeat: no-repeat;
         letter-spacing: 10px;
         font-size: 12px;
         }
         .errorWarning
         {
         padding-left: 5px;
         background-repeat: no-repeat;
         letter-spacing: 10px;
         font-size: 12px;
         }
         .successWarning2
         {
         padding-left: 5px;
         background-repeat: no-repeat;
         letter-spacing: 10px;
         font-size: 12px;
         }
         .errorWarning2
         {
         padding-left: 5px;
         background-repeat: no-repeat;
         letter-spacing: 10px;
         font-size: 12px;
         }
         .loading2
         {
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
         #page_popup{
            padding-left: 20px;
         }

         .note {
           border-radius: 3px;
           border: #dcdcdc 1px solid;
           margin-bottom: 10px;
        }
        .note .noteBorder {
           border-radius: 3px;
           background-color: #f0f0f0;
           border: #fff 1px solid;
        }
        .note .title {
           background-color: #9f9f9f;
           float: left;
           padding-right: 5px;
           margin-top: -2px;
           margin-left: 15px;
        }
        .note .title span {
           background-color: #9f9f9f;
           display: block;
           margin-left: -5px;
           padding-left: 10px;
           padding-right: 5px;
           line-height: 18px;
           color: #FFFFFF;
        }
        .note .title+.content {
           margin-top: 25px;
        }
        .note .content {
           line-height: 1.7em;
           margin: 10px 20px;
        }
      </style>
   </head>
   <body id="bdSearch">
        <div id="page_popup">
         @include('portal.messsage')
         <table width="100%" cellpadding="0" cellspacing="1" border="0">
            <tbody>
               <tr>
                  <td class="l">
                     <div id="header_main">
                        Tùy chỉnh trận đấu {{$event->id}}
                     </div>
                     <div>
                        {{$event->home}} - vs - {{$event->away}}
                        <br/>
                        {!! $event->time !!}
                        <br/>
                        {{$event->league_name}}
                        <br/>
                        {{$event->status_name}}
                     </div>
                  </td>
               </tr>
               <tr>
                  <td align="center">
                     <table border="0" cellpadding="0" cellspacing="0" width="100%" id="diverrmsg" style="display: none;">
                        <tbody>
                           <tr>
                              <td id="msg_1_1" class="emsg_1_1">
                                 &nbsp;
                              </td>
                              <td id="msg_1_2" class="emsg_1_2">
                                 &nbsp;
                              </td>
                              <td id="msg_1_3" class="emsg_1_3">
                                 &nbsp;
                              </td>
                           </tr>
                           <tr>
                              <td id="msg_2_1" valign="top" class="emsg_2_1">
                                 &nbsp;
                              </td>
                              <td valign="top" id="spmsgerr" class="msgerr">
                              </td>
                              <td id="msg_2_2" class="emsg_2_2">
                                 &nbsp;
                              </td>
                           </tr>
                           <tr>
                              <td id="msg_3_1" class="emsg_3_1">
                                 &nbsp;
                              </td>
                              <td id="msg_3_2" class="emsg_3_2">
                                 &nbsp;
                              </td>
                              <td id="msg_3_3" class="emsg_3_3">
                                 &nbsp;
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </td>
               </tr>
               <tr>
                  <td align="center">
                    {!! Form::model(array('route' => array('portal.web.updateBetPost', $id))) !!}
                     <table width="100%" align="center" cellpadding="0" cellspacing="1" border="0" class="tblRpt">
                        <tbody>
                           <tr class="RptHeader">
                              <td colspan="2" align="center">
                                 Thay đổi trận
                              </td>
                           </tr>
                          <tr class="bg_eb2">
                              <td class="r" style="width: 160px;">
                                 Trạng thái:
                              </td>
                              <td id="td_confirmpass" class="l">
                                 <select name="time_status">
                                    <option value="2" {{$event->time_status == 2 ? 'selected' : ''}}>Đang Treo</option>
                                    <option value="3" {{$event->time_status == 3 ? 'selected' : ''}}>Hoàn thành</option>
                                    <!-- <option value="4">Tạm Hoãn</option> -->
                                    <option value="5" {{$event->time_status == 5 ? 'selected' : ''}}>Hoàn Phí</option>
                                 </select>
                              </td>
                           </tr>
                           <tr class="bg_eb2">
                              <td class="r" style="width: 160px;">
                                 Thứ tự bàn thắng/phạt góc
                              </td>
                              <td id="td_confirmpass" class="l" style="width: 200px;">
                                 <input type="text" value="{{implode(',',$event->extra['ss'])}}" name="list_ss" maxlength="1000">
                                 0: Nhà,
                                 1: Khách
                              </td>
                           </tr>
                           <tr class="bg_eb2">
                              <td class="r" style="width: 160px;">
                                 Tỉ số hiệp 1:
                              </td>
                              <td id="td_confirmpass" class="l">
                                 <input type="text" value="{{$event->hf_ss}}" name="hf_ss" maxlength="10" required>
                              </td>
                           </tr>
                           <tr class="bg_eb2">
                              <td class="r" style="width: 160px;">
                                 Tỉ số hiệp 2:
                              </td>
                              <td id="td_confirmpass" class="l">
                                 <input type="text" value="{{$event->ss}}" name="ss" maxlength="10" required>
                              </td>
                           </tr>
                           <tr class="bg_eb2 c">
                              <td colspan="2">
                                 <input type="submit" id="btnSubmit" name="submit" value="Xác nhận" class="btn">
                                 &nbsp;
                                 <input type="reset" id="btnCancel" value="Reset" class="btn">
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     {!! Form::close() !!}
                  </td>
               </tr>
               <tr>
                  <td>
                  </td>
               </tr>
            </tbody>
         </table>
         <div class="note">
          <div class="noteBorder">
            <div class="title"><span>Lưu ý</span></div>
            <div class="content">Mọi thay đổi của bạn sẽ được lưu lại để đối chiếu sau này</div> 
         </div>
      </div>
      </div>
   </body>
</html>