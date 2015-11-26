<!DOCTYPE html>
<html>
<head>
	<title>Pizza Net</title>
	<link rel="stylesheet" type="text/css" href="/foundation-6/css/foundation.css">
</head>
<body>
	@include('main.header')
	@if(Session::has('success'))
	<div class="callout success" data-closable>
	  	<h5>Notificacion</h5>
	  	<p>{{Session::get('success')}}</p>
	  	<button class="close-button" data-close aria-label="Dismiss alert">&times;</button>
	</div>
	@endif

	@if(count($errors)>0)
	<div class="alert callout" data-closable>
	  	<h5>Error</h5>
	  	<p>{{$errors->first()}}</p>
	  	<button class="close-button" data-close aria-label="Dismiss alert">&times;</button>
	</div>
	@endif

	@yield('body')
	<script type="text/javascript" src="/foundation-6/js/jquery.min.js"></script>
	<script type="text/javascript" src="/foundation-6/js/what-input.min.js"></script>
	<script type="text/javascript" src="/foundation-6/js/foundation.min.js"></script>
	<script type="text/javascript">
		$(document).foundation();
	</script>
</body>
</html>