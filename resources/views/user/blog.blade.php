<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Blog</title>

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

    <!--------------------------------------
HEADER
--------------------------------------->
<div class="container">
	<div class="jumbotron jumbotron-fluid mb-3 pl-0 pt-0 pb-0 position-relative">
		<div class="h-100 tofront">
			<div class="row justify-content-between">
				<div class="col-md-6 pt-6 pb-6 pr-6 align-self-center">
					<p class="text-uppercase font-weight-bold">
						<a href="{{ route('user.blogs') }}" style="color:#6C584C;">Travel Blogs</a>
					</p>
					<h1 class="display-4 secondfont mb-3 font-weight-bold">Eco-Tourism in East Java: An Immersive Experience</h1>
					<div class="loc">
                        <img src="{{ asset('assets/Style/image/logo-pin-loc.svg') }}" alt="" width="15" height="20">
                        <a href="{{ route('user.index') }}"><span class="ml-1">Ijen Crater</span></a>
                    </div>
                    <p class="mb-3">
                        There are many eco-tourism destinations in Indonesia, but East Java is one of the few places that offer a complete package, from accommodation to amenities to culinary specialties.
					</p>
                    <div class="rating-box">
                        <div class="rating-stars">
                            <img src="{{ asset('assets/Style/image/grey-star.svg') }}" alt="">
                            <div class="filled-star" style="width:91%"></div>
                        </div>
                        <span class="ml-1"><b>&nbsp4.5</b></span>
                    </div>
					<div class="d-flex align-items-center">
						<img class="rounded-circle" src="{{ asset('assets/Style/image/3.png') }}" width="50" height="50">
						<small class="ml-2">&nbspNadine Lee <span class="text-muted d-block">&nbsp5 December 2022 &middot; 5 min read</span>
						</small>
					</div>
				</div>
				<div class="col-md-6 pr-0">
					<img src="{{ asset('assets/Style/image/3.png') }}" width="550" height="500">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Header -->
    
<!--------------------------------------
MAIN
--------------------------------------->
<div class="container pt-4 pb-4">
	<div class="row justify-content-center">
		<div class="blog-content">
			<article class="article-post">
			<p>
                The first step to maximize your eco-tourism holiday is to book an eco-tourism accommodation, such as a homestay or an eco-resort. A homestay might not be as luxurious as a hotel, but it definitely allows you to immerse yourself in the local community and gets you closer to nature. Krowi Inn and Didu Homestay near Mount Ijen, and Istana Petani Homestay near Bromo-Tengger-Semeru National Park are some great lodging options. You can also choose Kaliandra Eco-Resort in Pasuruan or IstanaOmbak Eco-Resort in Pacitan if you’re looking for a luxury experience. 
            </p>
            <br>
			<p>
                Baluran National Park is a perfect destination for those who are looking for a Wild Western adventure. Situated in the easternmost part of Java Island, Baluran National Park is a large area consisting of open savannahs where rare wild animals, such as banteng (Javanese water buffaloes) kancil (small Java mouse-deer), peacocks, eagles, and macaques, roam freely. You can have a memorable safari experience in this park, and if you’re lucky, you will even spot deer running beside your vehicle. Offering astonishing landscapes, Baluran National Park is often dubbed the Africa of East Java.
            </p>
            <br>
            <div class="bd-pic">
                <div class="bp-item">
                    <img src="{{ asset('assets/Style/image/1.png') }}" alt="">
                </div>
                <div class="bp-item">
                    <img src="{{ asset('assets/Style/image/2.png') }}" alt="">
                </div>
                <div class="bp-item">
                    <img src="{{ asset('assets/Style/image/3.png') }}" alt="">
                </div>
            </div>
			<p>
                Hike up to the summit of Mount Ijen (2,368 asl) and climb down to the crater to see the rare blue fire that burns eternally. Mount Ijen is a huge active crater in Ijen National Park and is a source of sulfur for the local miners. Your pleasant hike will be rewarded with stunning views and a cool atmosphere.
            </p>
            <br>
			<p>
				East Java is home to many breathtaking waterfalls, such as Tlaga Gentong, Kapas Biru, Madakaripura, and others. Among these, Madakaripura Waterfall is known to be the most surreal one and stands out for its grandiose. Located near the village of Sapih, in the Lombang district, close to Bromo Tengger Semeru National Park, Madakaripura Waterfall is hidden at the end of a valley in the foothills of the Tengger mountain range. After a 3-hour drive from Surabaya, it takes a 20-minute scenic trek, which includes crossing rivers and traversing a rocky path, to reach this 200-meter-tall majestic waterfall. Although the waterfall is the main attraction here, the serene ambiance surrounded by nature will surely sweep you off your feet.
            </p>
			</article>
		</div>
	</div>
</div>
    
</body>
</html>