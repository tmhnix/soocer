<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="/assets/admin/css/chuyenkhoan_files/Agent.css" rel="stylesheet" type="text/css">
  <link href="/assets/admin/css/chuyenkhoan_files/Transfer.css" rel="stylesheet" type="text/css">
  <style type="text/css"></style>
  <script>

  function chkChecked(n)
  {
   var arrChkItem = document.getElementsByName('chkitem');
   var arrCheckAll = document.getElementsByName('chkall');
   var count = 0;  
   //if (!arrChkItem) return;
   
   $("bttTransfer").className = 'btnSubmit';
   for (count; count < arrChkItem.length; count++) {
    
    arrChkItem[count].checked = false;
        /*if (arrChkItem[count].checked) {
            $("bttTransfer").className = 'btnSubmit';
            break;
          }*/
        }
    //alert(n);
    
    arrChkItem[n].checked = true;
    
     /*if(count == arrChkItem.length)
    {
        $("bttTransfer").className = 'btnSubmitDisable';
    }
   for (var i = 0; i < arrChkItem.length; i++) {
        if (!arrChkItem[i].checked) {
            arrCheckAll[0].checked = false;
            return;
        }
    }

    arrCheckAll[0].checked = true;*/
  }

  function getHTTPObject(){
    if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
    else if (window.XMLHttpRequest) return new XMLHttpRequest();
    else {
      alert("Your browser does not support AJAX.");
      return null;
    }
  }
  function getHTTPObject1(){
    if (window.ActiveXObject) return new ActiveXObject("Microsoft.XMLHTTP");
    else if (window.XMLHttpRequest) return new XMLHttpRequest();
    else {
      alert("Your browser does not support AJAX.");
      return null;
    }
  }
  function setOutputcomment()
  {
        //alert(httpObject.readyState);
        if(httpObject.readyState == 4)
        {
          
         //alert("Chuyển khoản không thành công");
          // alert(httpObject.responseText);
          
        }
      }
      function ck(m){
        httpObject = getHTTPObject();
        if (httpObject != null) {
         
        //alert(mn);
        httpObject.open("GET", "chuyen_ngay.php?id="+m, true);
        //alert("chạy");
        httpObject.send(null);
        httpObject.onreadystatechange = setOutputcomment; //chu?n b? chuy?n hóa sang chu?i kích ho?t tr?ng thái output
      }
    }
    function setOutputcomment1()
    {
      alert(httpObject.readyState);
      if(httpObject.readyState == 4)
      {
        
         //alert("Chuyển khoản không thành công");
         alert(httpObject.responseText);
         
       }
     }
     function ck1(m){
      httpObject1 = getHTTPObject1();
      if (httpObject1 != null) {
       
        //alert(mn);
        httpObject1.open("GET", "check.php?id="+m, true);
        
        httpObject1.send(null);
        httpObject1.onreadystatechange = setOutputcomment1; //chu?n b? chuy?n hóa sang chu?i kích ho?t tr?ng thái output
      }
    }
    
    
    
    
    
    
    function chuyen_khoan(n)
    {
      
      
      
      if($("bttTransfer").className == 'btnSubmitDisable')
        return;
      var mb = new Array();
      var a = confirm("Bạn muốn chuyển khoản?");
      if(a == false)
        return;
    //chuyen khoản
    var arrChkItem = document.getElementsByName('chkitem');
    for(var i=0;i<arrChkItem.length;i++)
    {
      
     if(arrChkItem[i].checked)
     {
      
      top.main.location = "check.php?id="+arrChkItem[i].value;
    }
            //mb[i] = ;
          }
    //for(i=0;i<mb.length;i++)
    //{
        //alert(mb[i]);
    //}
    //thành công
   // alert("Chuyển khoản thành công");
    //top.main.location.reload();
  }
  var httpObject = null;
  var httpObject1 = null;
  function xac_nhan()
  {
   var a = $('txtUserName').value;
    //alert(a);
    if(a.length == 9 || a.length == 0)
      return true;
    return false;
  }
  </script>
</head>
<body>
  @include('portal.messsage')
  <table id="tblMain">
    <tbody>
      <tr>
        <td><div id="title_header">MULTIPLE TRANSFER &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:getPrint('print');"></a></div></td>
      </tr>
      <tr>
        <td><div id="box_header" style="width:100%">
          <link href="/assets/admin/css/chuyenkhoan_files/SearchUserName_Control.css" rel="stylesheet" type="text/css">
          <table id="tblSearch" cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <form action="" method="post" onsubmit="return xac_nhan();"></form>
                <tr>
                  <td>Username</td>
                  <td><input list="member" placeholder="Username or First/Last Name" style="width: 145px; position: relative;" class="text_italic" name="txtUserName" id="txtUserName" autocomplete="off">
                    <datalist id="member">
                    </datalist>
                  </td>
                  <td>Status</td>
                  <td><div id="box_option">
                    <select id="statusFilter" name="statusFilter" style="position: relative;">
                      <option value="0">All</option>
                      <option value="1" selected="">Open</option>
                      <option value="2">Suspended</option>
                      <option value="3">Closed</option>
                      <option value="4">Disabled</option>
                    </select>
                  </div>
                  <div id="box_checking_filter">
                    <input type="checkbox" id="chkYesterdayBalance" name="chkYesterdayBalance" disabled="">
                    All yesterday balance</div>
                    <div style="width:65px; float:right; text-align:right">
                      <input id="dSubmit" type="submit" value="Submit" class="buttonSubmit" onclick="">
                    </div>
                    <div class="shadow" id="shadow" style="position: absolute; top: 68px; left: 74px; visibility: hidden;">
                      <div class="output" id="output"><script src="../chuyenkhoan_files/SearchUserName_Control.js" type="text/javascript"></script><script src="../chuyenkhoan_files/autocomplete.js" type="text/javascript"></script></div>
                    </div></td>
                  </tr>
                
              </tbody>
            </table>
            <table id="tblMessage">
              <tbody>
                <tr>
                  <td><span class="warning">
                    <ul>
                      <li>You are allowed to transfer on Daily</li>
                    </ul>
                  </span></td>
                </tr>
              </tbody>
            </table>
          </div></td>
        </tr>
        <tr>
          <td>
          </td>
          </tr>
          <tr>
            <td><div id="page_main">
              <link href="/assets/admin/css/chuyenkhoan_files/PagingHeader.css" rel="stylesheet" type="text/css">
              <table id="tblHeader" cellspacing="0" cellpadding="0">
                <tbody>
                  <tr>
                    <td class="bgleft">&nbsp;&nbsp;
                      <div id="bttTransfer" class="btnSubmitDisable" onclick="chuyen_khoan(this)">Transfer
                        <div class="arrowIco"></div>
                      </div></td>
                      <td class="bgcenter">&nbsp;
                        <link href="http://bb8ag.com/chuyenkhoan_files/Paging.css" rel="stylesheet" type="text/css">
                        <script src="http://bb8ag.com/chuyenkhoan_files/Paging.js" type="text/javascript"></script>
                        <div id="_PagingTop" class="pagingHiden" pagesize="500" currentindex="1" rowcount="0" pagecount="0">
                          <input disabled="" id="btnFirst_PagingTop" type="button" onclick="_PagingTop.First()" class="icon pagingFirst pagingDisable">
                          <input disabled="" id="btnPrev_PagingTop" type="button" onclick="_PagingTop.Move(-1)" class="icon pagingPrev pagingDisable">
                          <span class="pagingSeperator"></span>Page
                          <input id="txt_PagingTop" type="text" class="pagingCurrent" maxlength="4" size="2" value="1" onkeydown="_PagingTop.DoEnter(event, '_PagingTop.Go()')">
                          of 0<span class="pagingSeperator"></span>
                          <input {disablednext}="" id="btnNext_PagingTop" type="button" onclick="_PagingTop.Move(1)" class="icon pagingNext">
                          <input {disabledlast}="" id="btnLast_PagingTop" type="button" onclick="_PagingTop.Last()" class="icon pagingLast">
                        </div>
                        <script type="text/javascript">var _PagingTop = new Paging('_PagingTop');</script></td>
                        <td class="bgright">Page Size:
                          <select id="sel_PagingTop" name="sel_PagingTop" onchange="_PagingTop.SetPageSize(this.value)">
                            <option value="10">10</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="500" selected="">500</option>
                          </select></td>
                        </tr>
                      </tbody>
                    </table>
                    <div id="print">
                      <table id="tblTransferList" cellspacing="1" cellpadding="0">
                        <thead>
                          <tr class="Header">
                            <th style="width: 3%;">#</th>
                            <th style="width: 5%;"><input id="chkall" name="chkall" type="checkbox" disabled="" onclick="CheckAll();">
                              <br>
                              Yesterday</th>
                              <th style="width: 12%;">Username</th>
                              <th style="width: 11%;">Yesterday Balance</th>
                              <th style="width: 11%;">Balance</th>
                              <th style="width: 11%;">Outstanding</th>
                              <th style="width: 11%;">Given Credit</th>
                              <th style="width: 12%;">First Name</th>
                              <th style="width: 12%;">Last Name</th>
                              <th style="width: 12%;">Username</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot>
                                                          <tr>
                                <td class="SubTitle" colspan="13" style="padding: 3px 0px 3px 0px">No information is available</td>
                              </tr>
                                                              </tfoot>
                              </table>
                            </div>
                          </div></td>
                        </tr>
                      </tbody>
                    </table>
                    <div id="divTransferMulti" class="divMenuPopup">
                      <div id="tr_transfer"><a class="LinkPopup" href="javascript:;" id="transfer" value="0">Only this page</a></div>
                      <div id="tr_transferAll"><a class="LinkPopup" href="javascript:;" id="transferAll" value="0">All page</a></div>
                    </div>
                  </body>
                </html>