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
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/styles.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
	
	<div class="limiter">
    <h4>{{ Auth::user()->name }}<h4>
        <br>
        <h2>Your are ADMIN</h2>
        <br>
        <div>
        <a class="login-btn" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="ni ni-spaceship text-info"></i>{{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </div>
	</div>
</body>
</html>
