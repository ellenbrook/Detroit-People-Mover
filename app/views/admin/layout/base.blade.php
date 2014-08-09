<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  {{ HTML::style('/css/adminPanelMain.css'); }}
</head>
<body>
  @include('admin.layout.partials.nav')

<div class="container">

  @yield('content')

</div> <!--container!-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  
<script>
$(document).ready(function(){
	$(".alert-success").delay( 900 ).fadeOut( 1000, function(){
		$(this).fadeOut(500, function(){
			$(this).css({"visibility":"hidden", display:'block'}).slideUp();
		});
	});
});
</script>
</body>
</html>