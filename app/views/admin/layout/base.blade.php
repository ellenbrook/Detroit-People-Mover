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
  @include('admin.layout.partials.messages')
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  //Message display
	$(".alert").delay( 2000 ).fadeOut( 1000, function(){
		$(this).fadeOut(500, function(){
			$(this).hide();
		});
	});

  //Ask for delete confirmation
  $('input[data-toggle], button[data-toggle').click(function(e){
      var input = $(this);  
      var form = input.closest('form');

      input.prop('disabled', 'disabled');

      e.preventDefault();
        $('#confirmDelete').click(function(){
          $(form).unbind('submit').submit();

        });

      input.removeAttr('disabled');
  });


  //Show/hide Add Form
  $(".show-add-form").click(function(){
    $(".add-form").show("slow");
    $(this).hide("slow");
    $(".hide-add-form").show("slow");
  });

  $(".hide-add-form").click(function(){
    $(".add-form").hide("slow");
    $(this).hide("slow");
    $(".show-add-form").show("slow");
  });

});
</script>
</body>
</html>