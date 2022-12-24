<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kembara Bumi</title>

    <!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/Style/image/logoKB.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/styles.css') }}">

     <!-- Scripts -->
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <main id="eventmain">
        <div id="event">
            <a href=""><  &nbsp &nbsp Event Calendar </a>
            <img src="{{ asset('assets/Style/image/logo kembara bumi 2.png') }}" width="92" height="90" alt="">
        </div>
        <p id="date">&nbsp; Select Date</p>
        <div class="container">
            <div class="calendar">
                <img src="{{ asset('assets/Style/image/Calendar.png') }}" alt="">
            </div>
            <div class="sch">
                <div class="sch-card">
                    <h2>Festival Lembah Ijen</h2>
                    <div class="date">
                        <div class="jam">
                            <img src="{{ asset('assets/Style/image/ic_twotone-access-time-filled.png') }}" alt=""><p>16.00 -22.00</p>
                        </div>
                        <div class="tanggal">
                            <img src="{{ asset('assets/Style/image/Vector.png') }}" alt=""><p>18-19 May</p>
                        </div>  
                    </div>
                    <p class="details">Enjoy gandrung dance, traditional dance from Banyuwangi.</p>
                    <div class="book">
                        <p>START FROM Rp350.000,00</p>
                        <a href="#">DETAILS</a>
                        <button>Book</button>
                    </div>
                </div>
                <div class="sch-card">
                    <h2>Eksotika Bromo Festival </h2>
                    <div class="date">
                        <div class="jam">
                            <img src="{{ asset('assets/Style/image/ic_twotone-access-time-filled.png') }}" alt=""><p>16.00 -22.00</p>
                        </div>
                        <div class="tanggal">
                            <img src="{{ asset('assets/Style/image/Vector.png') }}" alt=""><p>18 May</p>
                        </div>  
                    </div>
                    <p class="details">Enjoy a music festival and see beautiful Bromo Mountain.</p>
                    <div class="book">
                        <p>START FROM Rp200.000,00</p>
                        <a href="#">DETAILS</a>
                        <button>Book</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>