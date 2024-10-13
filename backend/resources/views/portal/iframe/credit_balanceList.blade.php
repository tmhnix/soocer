<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Hạn mức/Số dư</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/assets/admin/assets/bundles/common/common.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/assets/bundles/site-memberinfo/default.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/admin/site-memberinfo/assets/bundles/default.min.css" rel="stylesheet" type="text/css">

    <link href="/assets/admin/site-memberinfo/assets/bundles/credit-balance.min.css" rel="stylesheet" type="text/css">
    <style>
        .title {
            display: block;
            height: 22px;
            line-height: 22px;
            padding: 4px 6px;
            font-size: 14px;
            color: #000;
            margin-bottom: 13px;
            clear:both;
        }

        .title {
            position: relative;
        }

        .title span:last-child {
            position: absolute;
            right: 6px;   /* must be equal to parent's right padding */
        }
        .pagination {
            display: inline-block;
        }

        .pagination li {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination li.active {
            background-color: #4CAF50;
            color: white;
        }

        .pagination li:hover:not(.active) {background-color: #ddd;}
    </style>
    <script>
        function page(p){
            $("#page_input").val(p);
            $("#report-pager").data("pageindex",p);
            $('#creditBalanceForm').submit();
        }
    </script>
</head>

<body>

    <div class="page-title">
        <span>
            Hạn mức /Tín dụng của {{$current_type}}
            <span id="icon-information" class="icon icon-information-outline"></span>
        </span>

    </div>
    <form action="/portal/creditBalanceList" class="form-inline filter" id="creditBalanceForm" method="get" role="form">
        <div class="form-group">
            <label>T&#234;n đăng nhập</label>
            <input type="text" name="UserName" class="typeahead" data-provide="typeahead" autocomplete="off" placeholder="T&#234;n đăng nhập hoặc T&#234;n/Họ" value="{{$username}}" />
        </div>
        <div class="form-group">
            <label>Trạng th&#225;i</label>
            <select data-val="true" data-val-number="The field StatusId must be a number." data-val-required="The StatusId field is required." id="StatusId" name="StatusId">
                @foreach($status as $key => $item)
                    @if($key == $StatusId)         
                        <option selected="selected" value="{{$key}}">{{$item}}</option>
                    @else
                        <option value="{{$key}}">{{$item}}</option>   
                    @endif
                @endforeach 
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn-submit" id="btn-submit">X&#225;c nhận</button>
        </div>
        <input type="hidden" value="" name="CustId" id="autoSuggestionCustId" />
        <input type="hidden" value="2" name="CustLevelId" />
        <div class="columns-control-container">
            <div class="columns-control-hint hide" id="columns-control-hint">
                <p>Nhấp chuột phải tr&#234;n đầu cột để Ẩn/Hiện c&#225;c cột</p>
                <div>
                    <input type="checkbox" id="chkDontShowAgain" />
                    <label for="chkDontShowAgain">Kh&#244;ng hiển thị lại</label>
                </div>
            </div>
            <div class="columns-control hide" id="columns-control">
            </div>
        </div>
        <div class="top">
            <div class="title" style="font-size: 13px !important;">
                <span>
                    <label style="color: red;">*</span>Bạn được ph&#233;p chuyển khoản v&#224;o: Hằng ng&#224;y
                </span>
                <span>
                    <label>Số dòng 
                        <select name="paging" id="paging" onchange="this.form.submit()">
                            @foreach(["10","50","100","500"] as $item)
                                @if($item == $paging)         
                                    <option selected="selected" value="{{$item}}">{{$item}}</option>
                                @else
                                    <option value="{{$item}}">{{$item}}</option>   
                                @endif
                            @endforeach 
                        </select>
                    </label>
                </span>
            </div>
        </div>
        <div class="clear"></div>
        <input name="page_input" id="page_input" value="{{$page}}" hidden>
    </form>
    <div id="tbl-container">
        <table id="tbl-report" class="tblRpt tblRpt-bordered tblRpt-hover alternative-row-table hide">
            <thead>
                <tr>
                    <th id="column-no">Số lượng</th>
                    <th class="column-st">Trạng th&#225;i</th>
                    <th>T&#234;n đăng nhập</th>
                    <th class="column-fn">T&#234;n</th>
                    <th class="column-ln">Họ</th>
                    <th class="column-cd">Hạn mức t&#237;n dụng</th>
                    <th class="column-bl">Số dư</th>
                    <th class="column-yb">Số dư đến hết h&#244;m qua</th>
                    <th class="column-bc">Hạn mức khả dụng</th>
                    <th class="column-ot">Tiền chưa xử l&#253;</th>
                    <th class="column-crd">Ng&#224;y tạo</th>
                    <th class="column-ll">Lần đăng nhập cuối</th>
                    <th class="column-li">IP đăng nhập</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list as $key => $item)
                    <tr class="{{$key%2 == 0 ? 'even-row' : ''}}">
                        <td class="text-center">{{$page*$paging-$paging + $key + 1}}</td>
                        <td class="text-center column-st">{{$item->getStatusName()}}</td>
                        <td>
                            @if($current_type !== 'member')
                                <span class="username-credit" data-custid="{{$item->id}}"  style='cursor: pointer;color:#045ace !important' >
                                    {{$item->username}}
                                </span>
                            @else
                                <span >
                                    {{$item->username}}
                                </span>
                            @endif
                        </td>
                        <td class="column-fn">{{$item->last_name}}</td>
                        <td class="column-ln">{{$item->first_name}}</td>
                        <td class="text-right column-cd"> 
                            <a href="javascript:;" class="link creditlink" data-custid="{{$item->id}}" data-username="{{$item->username}}" data-levelid="1">{{$item->credit_line}}</a>
                        </td>
                        <td class="text-right column-bl">{{$item->wallet}}</td>
                        <td class="text-right column-yb">Nolimit</td>
                        <td class="text-right column-bc">
                            <a href="{!! route('portal.agent.member_runingbets', ['id' => $item->id]) !!}" class="link">{{$item->includeRuningAmount()}}</a>  
                        </td>
                        <td class="text-right column-ot"> 
                            {{$item->includeStake()}}
                        </td>
                        <td class="text-center text-sm column-crd">{{format_date_pretty($item->created_at)}}</td>
                        <td class="text-center text-sm column-ll">{{format_date_pretty($item->last_time_login)}}</td>
                        <td class="text-center text-sm column-li">
                            <a href="javascript:;" class="link iplink column-loginip">{{$item->last_ip_login}}</a>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="14">
                        <div id="report-pager" data-labelpage="Trang" data-labelof="tr&#234;n" data-labeldisplayitems="Hiển thị {from} đến {to} trong số {total} mục" data-pageindex="2" data-pagesize="2" data-totalrecords="7">
                        </div>

                    </td>
                </tr>
            </tfoot>
        </table>
        <div class="pagination">
            {!! $list->appends(Request::except('page'))->render() !!}
            <p>
            Displaying {{$list->count()}} of {{ $list->total() }} product(s).
            </p>
        </div>
    </div>
    <input type="hidden" value="" id="OldMainRootPath" />
    <input type="hidden" value="" id="CookiePrefix" />
    <input type="hidden" value="/potal/GivenCredit" id="GivenCreditLink" />
    <input type="hidden" value="Cập nhật hạn mức t&#237;n dụng" id="GivenCreditPopupTitle" />


    <div class="modal fade message-modal" id="report-legend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="icon icon-close close" data-dismiss="modal" aria-label="Điều Kiện Để Xo&#225; Hạn Mức Được Cấp"><span aria-hidden="true"></span></button>
                    <h4 class="modal-title">Điều Kiện Để Xo&#225; Hạn Mức Được Cấp</h4>
                </div>
                <div class="modal-body">
                    <div id="msg-content">
                        <p>- Bao gồm các Member chưa đăng nhập sau khi được tạo bởi Agent trong hơn 14 ngày.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/admin/assets/bundles/common/common.min.js" type="text/javascript"></script>
    <script src="/assets/admin/assets/bundles/site-memberinfo/default.min.js" type="text/javascript"></script>

    <script src="/assets/admin/assets/bundles/site-asset/numeral.min.js" type="text/javascript"></script>
    <script src="/assets/admin/assets/bundles/site-memberinfo/credit-balance.min.js" type="text/javascript"></script>
    <script src="/assets/admin/site-memberinfo/assets/bundles/credit-balance/credit-balance.min.js" type="text/javascript"></script>
</body>

</html>