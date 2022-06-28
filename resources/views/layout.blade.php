<!-- layout.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel 8 CRUD Tutorial</title>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>

	<div class="container">
		@yield('content')
	</div>

	<script src="{{ asset('js/app.js') }}" type="text/js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#game-search").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#games-table tbody tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>

</body>
</html>