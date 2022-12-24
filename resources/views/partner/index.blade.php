<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEMBARA</title>

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/Style/image/logoKB.png') }}">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/styles.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<main id="eventmain">
        <div id="add">
            <div class="prof-mit" style="margin-left:0;">
        <a>{{ Auth::user()->name }}</a>
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
            <img id="logo-add" src="{{ asset('assets/Style/image/logo kembara bumi 2.png') }}" width="56" height="55" alt="">
        </div>
        <div class="cont">
            <div class="left">
                <img src="{{ asset('assets/Style/image/Rectangle 17 (1).png') }}" alt="">
            </div>
            <div class="right">
                <div class="title">
                    <h1>Adventurous Ijen Crater</h1>
                    <div class="edit">
                        <img src="{{ asset('assets/Style/image/Group 33.png') }}" alt="">
                    </div>
                </div>
                <img src="{{ asset('assets/Style/image/Group 37.png') }}" alt="">
                <div class="loc">
                    <div class="lokasi">
                        <img src="{{ asset('assets/Style/image/ci_location.png') }}" alt="">
                        <p>Banyuwangi, Bondowoso</p>
                    </div>       
                    <div class="edit">
                        <img src="{{ asset('assets/Style/image/Group 33.png') }}" alt="">
                    </div>
                </div>
                <h3>Description</h3>
                <div class="desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae beatae, laborum magni, id totam nam ab 
                        voluptates non obcaecati sapiente molestias, aperiam fuga hic impedit porro minus minima! Maiores, ab.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed corporis suscipit veritatis, quae consequuntur 
                    nobis deserunt voluptate dignissimos, porro, autem est adipisci. Nam alias asperiores harum velit culpa cumque natus?</p>
                    <div class="edit">
                        <img src="{{ asset('assets/Style/image/Group 33.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="package">
            <h2>Packages</h2>
            <div class="card-add">
                <p>Adventurous Ijen Crater - Full package with accommodations</p>
                <img src="{{ asset('assets/Style/image/Group 33.png') }}" alt="">
            </div>
            <div class="card-add">
                <p>Adventurous Ijen Crater - Day Trip</p>
                <img src="{{ asset('assets/Style/image/Group 33.png') }}" alt="">
            </div>
            <div class="card-tambah">
                <img id="tambah" src="{{ asset('assets/Style/image/image_6-removebg-preview.png') }}" alt="">
                <p>Add New Package</p>
            </div>
        </div>
    </main>
	
</body>
</html>
