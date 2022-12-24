<html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Pick a Date</title>
            <link rel="icon" type="image/png" href="{{ asset('assets/Style\image\logo.png') }}">
            <!-- style -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
            <link rel="stylesheet" href="{{ asset('assets/Style/bookingStyle2.css') }}">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        </head>
        <body>
            <!--header-->
            <header>
                <img class="logo" src="{{ asset('assets/Style/image/logo.png') }}" alt="logo" width="65" height="52">
                <nav>
                    <h4>Adventurous Ijen Crater</h4>
                </nav>
                <a class="cta" href="Booking.html"><img src="{{ asset('assets/Style/image/back.png') }}" width="6" height="13"></a>
            </header>
            <!-- end header-->

            <div class="container">
                <form method="POST" action="{{ route('booking.store.one') }}">
                @csrf
                    <!-- picker date -->
                    <div class="tanggal">
                        <h6>Select date</h6>
                        
                            <input class="form-control" type="datetime-local" name="date" placeholder="Select Date">
                        
                    </div>
                    <!-- end picker date -->
                <div class="checkout">
                    <!-- harga -->
                    <h6>Quantity</h6>
                    <div class="card">
                    <div class="card-body">
                        <div class="teks">
                            <h5>PRICE</h5>
                            <h5 class="price" data-price="{{$package->price}}">Rp{{$package->price}},00</h5>
                        </div>
                        <div class="button-container ">
                                <button class="cart-qty-minus decrease-btn" type="button" value="-">-</button>
                                <input type="text" name="quantity" min="0" class="quantity form-control" value="0"/>
                                <button class="cart-qty-plus increase-btn" type="button" value="+">+</button>
                        </div>					
                    </div>
                    </div>
                    <div class="teks2">
                        <div class="totalPay">
                            <h5>TOTAL PAYMENT</h5>
                        </div>
                        <div class="hrg">
                            <h5 class="total">Rp<span id="total">0</span>,00</h5>                          
                            <input type="hidden" name="total_payment" class="form-control" id="result" value="0">
                        </div>
                    </div>
                </div>
                <!-- end harga -->
                <input type="hidden" name="id_package" class="form-control" value="{{$package->id}}">
                <input type="hidden" name="status" class="form-control" value="Unpaid">
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn">BOOK NOW</button>
                </div>
                </form>
            </div>
            <!-- script2an -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
            <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
            <script src="{{ asset('assets/js/script.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
            <script>
                config = {
                    enableTime: true,
                    dateFormat: "Y-m-d",
                    altInput: true,
                    altFormat: "F j, Y"
                }
                flatpickr("input[type=datetime-local]",config);
            </script>

            <!-- end script2an -->
        </body>
    </html>