<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	.flash {
		padding: 1em;
		border: 2px solid green;
	}
	</style>
</head>
<body>
	@if(Session::get('flash_message'))
		<div class="flash">{{ Session::get('flash_message') }}</div>
	@endif
	<div class="container">@yield('content')</div>
</body>
</html>