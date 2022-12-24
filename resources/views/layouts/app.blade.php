<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEMBARA</title>

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/Style\image\logoKB.png') }}">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
	
	<div class="limiter">
    @yield('content')
	</div>
</body>
</html>
