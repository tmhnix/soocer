<div class="error">
	@if (isset($successMsg))
	<p style="color: green">{{$successMsg}}</p>
	@elseif (\Session::has('successMsg'))
	<p style="color: green">{!! \Session::get('successMsg') !!}</p>
	@endif
	@if (isset($errorMsg))
	<p style="color: red">{{$errorMsg}}</p>
	@elseif (\Session::has('errorMsg'))
	<p style="color: red">{!! \Session::get('errorMsg') !!}</p>
	@endif

	
	<script type="text/javascript">

		@if (\Session::has('script'))
		{!! \Session::get('script') !!}
		@endif

		var message = '';
		var show = false
		@if (isset($successMsg))
			show = true;
			message = '{{$successMsg}}';
		@elseif (\Session::has('successMsg'))
			show = true;
			message = '{!! \Session::get('successMsg') !!}';
		@endif
		@if (isset($errorMsg))
			show = true;
			message = '{{$errorMsg}}';
		@elseif (\Session::has('errorMsg'))
			show = true;
			message = '{!! \Session::get('errorMsg') !!}';
		@endif
	</script>
</div>