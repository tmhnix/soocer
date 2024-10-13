<!DOCTYPE html>
<html>

<head>
</head>
<body>
	<div style="padding-left: 20px;">
		<p>Xóa từ ngày {{$oneMonth}} trờ về trước: còn lại {{$number}}</p>
		@if($count >=0)
		<p>Đã xóa {{$count}}</p>
		@endif
		{!! Form::model(null, array('route' => array('portal.agent.delete'))) !!}
			<button type="submit">Xóa</button>	
		{!! Form::close() !!}
	</div>
</body>
</html>