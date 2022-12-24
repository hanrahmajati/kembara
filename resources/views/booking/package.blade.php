<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Booking</title>
            <link rel="icon" type="image/png" href="Style\image\logo.png">
            <!-- style -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('assets/Style/bookingStyle.css') }}">
        </head>
        <body>
            <!--nav-->
            <header>
                <img class="logo" src="{{ asset('assets/Style/image/logo.png') }}" alt="logo" width="65" height="52">
                <div class="search-box">
                        <div class="search-input">
                            <input type="text" class="input" placeholder="Find another destinations">
                        </div>
                </div>
                <nav>
                    <h4>Adventurous Ijen Crater</h4>
                </nav>
                <a class="cta" href="Destination Page.html"><img src="{{ asset('assets/Style/image/back.png') }}" width="6" height="13"></a>
            </header>
            <!-- end nav-->
            <!-- nav2 -->
            <menu>
                <ul>
                <li><a href="#">Location</a></li>
                <li><a href="#">Description</a></li>
                <li><a href="#">Facts</a></li>
                <li><a href="#">Packages</a></li>
                <li><a href="#">Travel Blog</a></li>
                <li><a href="#">Reviews</a></li>
                </ul>
            </menu>
            <!-- end nav2 -->
            <!--end nav-->

            <!-- content -->
            <div class="container">
                <h4>Packages</h4>
                <!-- card -->
                @foreach ($package as $data)
                <div class="card" style="width: auto; height: auto; margin-top: 28px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->name }}</h5>
                    <div class="body1">
                        <img src="{{ asset('assets/Style/image/jam.png') }}" width= "17" height="17" style="margin-right: 8px;">
                        <p>{{ $data->time }}</p>
                        <a class="pick" href="Booking2.html"><img src="{{ asset('assets/Style/image/cal.png') }}" width="17" height="17" style="margin-right: 8px; margin-left: 35px;">Pick a date</a>
                    </div>
                    <p class="card-text">{{ $data->description }}</p>
                    <h6>START FROM Rp{{ $data->price }},00</h6>
                    <!-- book button -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="package/book/{{ $data->id }}" class="btn">BOOK</a>
                    </div>
                    <!-- end book button -->
                </div>
                </div>
                <!-- end card -->
                @endforeach
            </div>
            <!-- end content -->

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        </body>
    </html>