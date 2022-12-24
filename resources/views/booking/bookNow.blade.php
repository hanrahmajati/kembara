<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Booking</title>

            <!-- Favicons -->
            <link rel="icon" type="image/png" href="{{ asset('assets/Style/image/logo.png') }}">
            <!-- style -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <link rel="stylesheet" href="{{ asset('assets/Style/bookingStyle3.css') }}">
        </head>
        <body>
            <!--header-->
            <header>
                <img class="logo" src="{{ asset('assets/Style/image/logo.png') }}" alt="logo" width="65" height="52">
                <nav>
                    <h4>Booking Summary</h4>
                </nav>
                <a class="cta" href="Booking2.html"><img src="{{ asset('assets/Style/image/back.png') }}" width="6" height="13"></a>
            </header>
            <!-- end header-->
            
            <!-- cotnent -->
            <div class="container">
                <div class="row gx-2">
                    <div class="col gx-3">
                        <div class="leftside">
                            <h6>Contact Details</h6>
                            <form method="POST" action="{{ route('booking.bookNow.store') }}">
                            @csrf
                            <input class="form-control" type="text" name="name" placeholder="Full Name" aria-label="default input example">
                            <input class="form-control" type="text" name="email" placeholder="Email" aria-label="default input example">
                            <input class="form-control" type="text" name="phone_number" placeholder="Phone Number" aria-label="default input example">
                            <div class="d-grid gap-2">
                                    <a href="Booking3.html" class="btn">ADD AS GUEST</a>
                            </div>

                            <div class="detail">
                                <h6>Guest(s) Details</h6>
                                <div class="guest-details">
                                    <h6>Guests 1</h6>
                                    <input class="form-control" type="text" placeholder="Full Name" aria-label="default input example">
                                    <input class="form-control" type="text" placeholder="Email" aria-label="default input example">
                                    <h6>Guests 2</h6>
                                    <input class="form-control" type="text" placeholder="Full Name" aria-label="default input example">
                                    <input class="form-control" type="text" placeholder="Email" aria-label="default input example">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col gx-3">
                        <div class="rightside">
                            <h6>Booking Details</h6>
                            <div class="card">
                            <div class="card-body">
                                <h5>{{$booking->package->name}}</h5>
                                <div class="body1">
                                    <img src="{{ asset('assets/Style/image/jam.png') }}" width= "17" height="17" style="margin-right: 8px;">
                                    <p>{{$booking->package->time}}</p>							 
                                </div>
                                <div class="body2">
                                    <img src="{{ asset('assets/Style/image/cal.png') }}" width="17" height="17" style="margin-right: 8px;">
                                    <p>{{$booking->date}}</p>
                                </div>
                                <div class="body3">
                                    <img src="{{ asset('assets/Style/image/tiket.png') }}" width= "17" height="17" style="margin-right: 8px;">
                                    <p>{{$booking->quantity}} tickets</p>							 
                                </div>
                                <div class="totalPay">
                                    <h5>TOTAL PAYMENT</h5>
                                    <h5>Rp{{$booking->total_payment}},00</h5>
                                </div>
                            </div>
                            </div>
                            <div class="d-grid gap-2">
                            <button type="submit" class="btn">CONTINUE</button>
                            </div>
</form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end content -->
        </body>
    </html>