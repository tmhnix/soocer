@extends('portal.template')

@section('title', 'Danh sách thông báo khẩn')
@section('module', 'master')
@section('main')
<div marginwidth="0" marginheight="0">
<table>
  <tbody>
    <tr>
      <td><div id="title_header">Danh sách Thành viên</div></td>
    </tr>
    <tr>
    	<td><div id="box_header" style="width:100%">
    		<link href="../dstv_files/SearchUserName_Control.min.css" rel="stylesheet" type="text/css">
    		<link href="../dstv_files/styles.min.css" rel="stylesheet" type="text/css">
    		<table id="tblSearch" cellpadding="0" cellspacing="0" border="0">
    			<tbody>
    				<tr>
    					<td>Tài khoản</td>
    					<td><input list="member" placeholder="Tên đăng nhập" style="width: 145px; position: relative;" class="text_italic" name="txtUserName" id="txtUserName" autocomplete="off">
    						<datalist id="member">
    							<option value="BID000">DEMO</option>
    							<option value="BID003">DEMO</option>
    							<option value="BID010">LE DINH DAM</option>
    							<option value="BID06E">DAM LE DINH</option>
    						</datalist></td>
    						<td>Trạng thái</td>
    						<td><div id="box_option">
    							<select id="statusFilter" name="statusFilter">
    								<option value="0">Tất cả</option>
    								<option value="1">Mở</option>
    								<option value="2">Bị đình chỉ</option>
    								<option value="3">Bị khóa</option>
    								<option value="4">Vô hiệu hóa</option>
    							</select>
    						</div>
    						<div style="width:65px; float:right; text-align:right">
    							<input id="dSubmit" type="button" data-toggle="modal" data-target="#myModal" value="Xác nhận" class="buttonSubmit" onclick="">
    						</div>
    						</td>
    					</tr>
    				</tbody>
    			</table>
    		</div></td>
    </tr>
    <tr>
      <td><div id="page_main">
          <table id="tblHeader" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td style="float: right;" class="bgright">Dung lượng trang
                  <select id="sel_PagingTop" name="sel_PagingTop">
                    <option value="10">10</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="500" selected="">500</option>
                  </select></td>
              </tr>
            </tbody>
          </table>
          <table id="tblCustomerList" class="tblRpt width-100per">
            <thead>
              <tr class="RptHeader">
                <th id="headerNo" rowspan="2" userid="15366409" subaccid="0">No.</th>
                <th rowspan="2" isdirectdownline="1" isshowdcom="False"><div onclick="RenderMulti(this,'MultiPopup','Agent','15366409','15366409');" class="btnEditMult" id="EdiMulti"></div></th>
                <th rowspan="2">Tài khoản</th>
                <th rowspan="2">Trạng thái</th>
                <th rowspan="2">Tùy chỉnh</th>
                <th rowspan="2" style="white-space: pre-line;">Nhân đôi hoa hồng</th>
                <th rowspan="2">Biệt danh</th>
                <th rowspan="2">Tên</th>
                <th rowspan="2">Họ</th>
                <th rowspan="2">Nhóm</th>
                <th colspan="7" class="header_comm">Hoa hồng</th>
                <th rowspan="2">Ngày tạo</th>
                <!-- <th rowspan="2">IP đăng nhập</th> -->
              </tr>
              <tr class="header">
                <th>A Comm 1</th>
                <th>A Comm 2</th>
                <th>A Comm 3</th>
                <th>P Comm 1</th>
                <th>P Comm 2</th>
                <th>P Comm 3</th>
                <th>Number Game</th>
              </tr>
            </thead>
            <tbody>
            	@foreach ($list as $i => $item)
            	<tr class="RowBgOpen">
            		<td>{{$i + 1}}</td>
            		<td><input type="checkbox" name="chkid" value="KP39MATH000"></td>
            		<td>{{$item->username}}</a></td>
            		<td><div id="IdStatus"><span class="text" title="Mở">
            		Mở                </span><span onclick="sua_ngay1('BID000');ShowPopup(this);" class="arrow" title="Trạng thái">&nbsp;&nbsp;&nbsp;</span></div></td>
            		<td align="center"><div title="Tùy chỉnh" class="divOther" onclick="sua_ngay('BID000');ShowFrmUpdOthers(this,'divUpdOthers')"></div></td>
            		<td><div class="bkgDcommDisallowed"><a onclick="">Đóng</a></div></td>
            			<td class="l"></td>
            			<td class="l">{{$item->first_name}}</td>
            			<td class="l">{{$item->last_name}}</td>
            			<td>{{$item->group}}</td>
            			<td>{{$item->discountAsian}}</td>
            			<td>{{$item->discount1x2}}</td>
                        <td>{{$item->discountCS}}</td>
                        <td>{{$item->discountHRFixOdds}}</td>
                        <td>{{$item->discountNumber}}</td>
            			<td>{{$item->discountNumber}}</td>
            			<td>{{$item->discountNumber}}</td>
            			<td class="bl_time">{{$item->created_at}}</td>
            			<!-- <td><a href="#" class="iplink">27.64.77.247</a></td> -->
            		</tr>
            		@endforeach
                   </tbody>
            <tfoot>
            	<tr>
            		<td colspan="14">{{ $list->links() }}</td>
            	</tr>
            </tfoot>
          </table>
        </div></td>
    </tr>
  </tbody>
</table>
</div>
@stop