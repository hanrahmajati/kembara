<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Blogs</title>

     <!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/Style/image/logoKB.png') }}">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/style.css') }}">

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
            </nav><a {{ Auth::user()->name }}</a>
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

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Travel Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <section id="blog" class="section-100">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="blog-card">
                        <a href="{{ route('user.blog') }}" class="pic-link">
						    <img src="{{ asset('assets/Style/image/1.png') }}" alt="" class="blog-thumbnail">
                        </a>
						<div class="blog-container">
							<h4><b>Travel to Jungle</b></h4>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ullam, reprehenderit? Praesentium doloribus soluta, quia.</p>
							<hr>
							<p>By <a href="#!">Nadine Lee</a> <span class="pull-right">3 Dec 2022</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-card">
                        <a href="{{ route('user.blog') }}" class="pic-link">
						    <img src="{{ asset('assets/Style/image/2.png') }}" alt="" class="blog-thumbnail">
                        </a>
                        <div class="blog-container">
                            <h4><b>Travel to Bromo</b></h4>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ullam, reprehenderit? Praesentium doloribus soluta, quia.</p>
							<hr>
							<p>By <a href="#!">Auguste Comte</a> <span class="pull-right">1 Dec 2022</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-card">
                        <a href="{{ route('user.blog') }}" class="pic-link">
						    <img src="{{ asset('assets/Style/image/3.png') }}" alt="" class="blog-thumbnail">
                        </a>
                        <div class="blog-container">
                            <h4><b>Travel to Ijen</b></h4>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ullam, reprehenderit? Praesentium doloribus soluta, quia.</p>
							<hr>
							<p>By <a href="#!">Taylor Swift</a> <span class="pull-right">28 Nov 2022</span></p>
						</div>
					</div>
				</div>
                <div class="col-md-4">
					<div class="blog-card">
						<img src="{{ asset('assets/Style/image/1.png') }}" alt="" class="blog-thumbnail">
						<div class="blog-container">
                            <h4><b>Travel to Jungle</b></h4>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ullam, reprehenderit? Praesentium doloribus soluta, quia.</p>
							<hr>
							<p>By <a href="#!">Nadine Lee</a> <span class="pull-right">25 Nov 2022</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-card">
						<img src="{{ asset('assets/Style/image/2.png') }}" alt="" class="blog-thumbnail">
						<div class="blog-container">
                            <h4><b>Travel to Bromo</b></h4>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ullam, reprehenderit? Praesentium doloribus soluta, quia.</p>
							<hr>
							<p>By <a href="#!">Chaeryeon Lee</a> <span class="pull-right">20 Nov 2022</span></p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-card">
						<img src="{{ asset('assets/Style/image/3.png') }}" alt="" class="blog-thumbnail">
						<div class="blog-container">
                            <h4><b>Travel to Ijen</b></h4>
							<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, ullam, reprehenderit? Praesentium doloribus soluta, quia.</p>
							<hr>
							<p>By <a href="#!">Jessica Reynolds</a> <span class="pull-right">15 Nov 2022</span></p>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
		</div>
        <div class="text-center">
            <a href="#!" class="btn-blog">More</a>
        </div>
	</section>
</body>
</html>