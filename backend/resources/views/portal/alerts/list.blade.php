<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="portal">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link href="/assets/admin/css/dstv_files/Agent.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/CustomerList.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/IcoEdit_Control.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/IconEditMulti_Control.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/IcoOther_Control.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/IcoStatus.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/IcoViewDownline_Control.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/MenuPopup_Control.min.css" rel="stylesheet" type="text/css">
      <script type="application/javascript" src="{{ elixir('portal/js/all.js') }}"></script>
      <style type="text/css">
        .pagination{
          display: inline-flex;
          list-style: none;
          font-size: 18px;
        }
        .pagination li{
          padding-right: 10px; 
        }
      </style>
      <style type="text/css">
         #element_to_pop_up { display:none; }
      </style>
      <link href="/assets/admin/css/dstv_files/SearchUserName_Control.min.css" rel="stylesheet" type="text/css">
      <link href="/assets/admin/css/dstv_files/styles.min.css" rel="stylesheet" type="text/css">
   </head>
   <body>
    @include('portal.messsage')
    <button> <a href="{!! route('portal.agent.alerts.add') !!}">Thêm</a></button>
    <table class="table" style="margin-top: 30px;">
        <thead>
          <tr>
            <th>Username</th>
            <th>Nội Dung</th>
            <th width="100" style="text-align: center;">#</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($list as $i => $item)
              <tr style="line-height: 2">
                <td width=100>{{$item->username}}</td>
                <td>{{$item->msg}}</td>
                <td width=100 style="text-align: center;">
                    <a style="color: red" href="{!! route('portal.agent.alerts.delete', ['id'=> $item->id]) !!}">Xóa</a>
                </td>
              </tr>
              @endforeach
        </tbody>
      </table>
  </body>