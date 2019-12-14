<!doctype html>
{{--this is the layout page for the whole project--}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

{{--	this shows whatever is marked @section('title') in other files
		if there is no title marked, it shows the second field as default (laravel project)
--}}
	<title>@yield('title', 'Laravel project')</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn````.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

	<div class="container">
		@include('nav')
{{--		at the part of the code, show whatever is marked @section('content') in the other files. almost all files 			use this --}}
		@yield('content')
	</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>