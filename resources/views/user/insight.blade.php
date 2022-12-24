<!doctype html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Insight Page</title>

        <!-- Favicons -->
	    <link rel="icon" type="image/png" href="{{ asset('assets/Style/image/logoKB.png') }}">

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/insightStyle.css') }}">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

	</head>
	<body>
		<!--nav-->
		<header>
			<img class="logo" src="{{ asset('assets/Style/image/logoKB.png') }}" alt="logo" width="65" height="52">
			<div class="search-box">
					<div class="search-input">
						<input type="text" class="input" placeholder="Find another destinations">
					</div>
			</div>
			<nav>
				<h4>Adventurous Ijen Crater</h4>
			</nav>
			<a class="cta" href="{{ route('user.destinasi') }}"><img src="{{ asset('assets/Style/image/back.png') }}" width="6" height="13"></a>
		</header>
		<!-- end nav-->

		<!-- content -->
		<div class="container">
			<div class="row gx-2">
				<div class="col gx-3">
					<div class="leftside">
						<div class="judul">
							<h1>Adventurous Ijen Crater</h1>
							<span>
								<img src="{{ asset('assets/Style/image/vec3.png') }}" alt="logo" width="20" height="20">
								Banyuwangi, Bondowoso
							</span>
						</div>
						<div class="desc">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Porttitor non magna vestibulum congue fringilla. Nulla eget eget malesuada habitant venenatis. Mi nunc etiam a sed. Neque, vitae mattis amet adipiscing in. Nibh eget mauris elit, posuere faucibus ultricies.</p>
						</div>
						<div class="card">
						  <div class="card-body">
						    <h5>Facts</h5>
						    <div class="body1">
							    <img src="{{ asset('assets/Style/image/api.png') }}" width= "17" height="19" style="margin-right: 10px;">
							    <p>A Home to the Phenomenal Blue Fire</p>
							</div>
							<div class="isi">
								<p>The beauty of Ijen Crater has been recognized across the world. In March 2016, this magical lake has been included in UNESCO’s World Biosphere Reserves.</p>
							</div>
						  </div>
						</div>
						<a href="{{ route('booking.package') }}">Packages</a>
					</div>
				</div>
				<div class="col gx-3">
					<div class="rightside">
						<center>
							<img src="{{ asset('assets/Style/image/3.png') }}" width="360" height="475">
						</center>
						
					</div>
				</div>
			</div>
		</div>
		<!-- end content -->

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>