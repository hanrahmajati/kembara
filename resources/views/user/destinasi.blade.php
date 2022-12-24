<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kembara Bumi</title>

    <!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/Style/image/logoKB.png') }}">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/styledest.css') }}">

     <!-- Scripts -->
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  </head>
  <body>

	<!--nav2-->
	<header class="sticky-top">
    <a href="{{ route('user.index') }}"><img class="logo" src="{{ asset('assets/Style/image/logoKB.png') }}" alt="logo" width="70" height="57"></a>
		<nav>
			<ul class="nav">
				<li><a href="{{ route('user.destinasi') }}">Destinasi</a></li>
				<li><a href="{{ route('user.blogs') }}">Travel Blog</a></li>
				<li><a href="{{ route('user.eventCalendar') }}">Event</a></li>
				<li><a href="#">Promo</a></li>
				<li><a href="{{ route('user.shop') }}">Shop</a></li>
			</ul>
		</nav>
		<a {{ Auth::user()->name }}</a>
        <a class="button" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="ni ni-spaceship text-info"></i><button>{{ __('Logout') }}</button>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
	</header>
	<!--end nav2-->

	<h2>Cari destinasi yang kamu inginkan!</h2>


	<!-- search -->
	<div class="container">
		<div class="search-box">
			<div class="search-icon">
				<img src="{{ asset('assets/Style/image/Vector.png') }}" width="18" height="18" alt="ikon">
			</div>
			<div class="search-input">
				<input type="text" class="input" placeholder="Temukan destinasi impianmu!">
			</div>
		</div>
	</div>
	<!-- end search -->

	<!-- list wisata -->
	<section id="wisata" class="mt-5 mb-5 overflow-hidden">
		<div class="container position-relative">
			<div class="row">
				<div class="col-12 d-flex justify-content-start">
					<div class="card-list me-3 position-relative">
						<img src="{{ asset('assets/Style/image/1.png') }}" width="275" height="385">

						<div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
							<div class="position-absolute top-50 start-50 translate-middle text-center w-100">
								<h4>Baluran National Park</h4>
								<span>
									<img src="{{ asset('assets/Style/image/vec2.png') }}" alt="logo" width="12" height="12">
									East Java</span>
									<br>
									<a href="{{ route('user.insight') }}">More</a>
							</div>
						</div>
					</div>
					<div class="card-list me-3 position-relative">
						<img src="{{ asset('assets/Style/image/2.png') }}" width="275" height="385">

						<div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
							<div class="position-absolute top-50 start-50 translate-middle text-center w-100">
								<h4>Bromo Tengger</h4>
								<span>
									<img src="{{ asset('assets/Style/image/vec2.png') }}" alt="logo" width="12" height="12">
									East Java
								</span>
								<br>
								<a href="{{ route('user.insight') }}">More</a>
							</div>
						</div>
					</div>
					<div class="card-list me-3 position-relative">
						<img src="{{ asset('assets/Style/image/3.png') }}" width="275" height="385">

						<div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
							<div class="position-absolute top-50 start-50 translate-middle text-center w-100">
								<h4>Ijen Crater</h4>
								<span>
									<img src="{{ asset('assets/Style/image/vec2.png') }}" alt="logo" width="12" height="12">
									Banyuwangi, Bondowoso
								</span>
								<br>
								<a href="{{ route('user.insight') }}">More</a>
							</div>
						</div>
					</div>
					<div class="card-list me-3 position-relative">
						<img src="{{ asset('assets/Style/image/4.png') }}" width="275" height="385">

						<div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
							<div class="position-absolute top-50 start-50 translate-middle text-center w-100">
								<h4>Coban</h4>
								<span>
									<img src="{{ asset('assets/Style/image/vec2.png') }}" alt="logo" width="12" height="12">
									Unknown
								</span>
								<br>
								<a href="{{ route('user.insight') }}">More</a>
							</div>
						</div>
					</div>
					<div class="card-list me-3 position-relative">
						<img src="{{ asset('assets/Style/image/5.png') }}" width="275" height="385">

						<div class="overlay position-absolute top-0 bottom-0 start-0 end-0 w-100 h-100">
							<div class="position-absolute top-50 start-50 translate-middle text-center w-100">
								<h4>Ngadas Village</h4>
								<span>
									<img src="{{ asset('assets/Style/image/vec2.png') }}" alt="logo" width="12" height="12">
									Malang
								</span>
								<br>
								<a href="{{ route('user.insight') }}">More</a>
							</div> 
						</div>
					</div>
				</div>
			</div>
			<button class="button-left position-absolute start-0 top-50 translate-middle-y">
				<img src="{{ asset('assets/Style/image/kiri.png') }}" width="16" height="26" alt="ikon">
			</button>
			<button class="button-right position-absolute end-0 top-50 translate-middle-y">
				<img src="{{ asset('assets/Style/image/kanan.png') }}" width="16" height="26" alt="ikon">
			</button>
		</div>
	</section>
	<!-- end list wisata -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>