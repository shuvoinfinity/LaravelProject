<!doctype html>
<html lang= "en">
	<head>
		<meta charset="UTF-8">
		<title>{{$title or 'Welcome to ToDoParrot'}}</title>
		<link rel="stylesheet"href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> </script>
	</head>
	<body>

		<div class = "container">
			<div class = "col-md-9">
				@yield('content')
			</div>
		

			<div class = "col-md-3">
				@section('advertisement')
				<p>
					Please call for Advertisement!! on $5 only.
				</p>
				@show
			</div>
		</div>
		

		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js">


		
	</body>
</html>