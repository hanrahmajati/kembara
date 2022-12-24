<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Shop</title>

        <!-- Favicons -->
	    <link rel="icon" type="image/png" href="{{ asset('assets/Style/image/logoKB.png') }}">

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/shopStyle.css') }}">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])

	</head>
	<body>
			<!--header-->
			<header>
				<img class="logo" src="{{ asset('assets/Style/image/logoKB.png') }}" alt="logo" width="65" height="52">
				<nav>
					<h4>Cinderamata</h4>
				</nav>
				<a class="cta" href="#"><img src="{{ asset('assets/Style/image/back.png') }}" width="6" height="13"></a>
			</header>
			<!-- end header-->

			<!-- content -->
			<div class="container">
				<div class="row gx-2">
					<div class="col gx-3">
						<div class="leftside">							
							<div class="card">
							  <div class="card-body">
							    <h5>Toko Gerabah</h5>
								    <span>
										<img src="{{ asset('assets/Style/image/vec3.png') }}" alt="logo" width="22" height="22">
										Kampung Keramik, Malang
									</span><br>
									<center>
										<img src="{{ asset('assets/Style/image/keramik.png') }}" width="350" height="250" style="margin-top: 20px;"><br>
										<a href="Booking3.html" class="btn">VISIT</a>
									</center>
									
										
															
							  </div>
							</div>									
						</div>
					</div>

					<div class="col gx-3">
						<div class="rightside">
							<div class="card">
							  <div class="card-body">
							    <h5>Kerajinan Batu Marmer</h5>
								    <span>
										<img src="{{ asset('assets/Style/image/vec3.png') }}" alt="logo" width="22" height="22">
										Tulungagung
									</span><br>
									<center>
										<img src="{{ asset('assets/Style/image/marmer.png') }}" width="350" height="250" style="margin-top: 20px;"><br>
										<a href="Booking3.html" class="btn">VISIT</a>
									</center>				
							  </div>
							</div>
							<div class="d-grid gap-2 d-md-flex justify-content-md-end">
								<a class="cart" href="#"><img src="{{ asset('assets/Style/image/ikoncart.png') }}" width="60" height="60"></a>
							</div>						
						</div>
					</div>
				</div>
			</div>
			<!-- end content -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	</body>
</html>