    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Payment</title>

        <!-- Favicons -->
        <link rel="icon" type="image/png" href="{{ asset('assets/Style\image\logoKB.png') }}">

        <!-- style -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/Style/style.css') }}">

            <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
            <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{config('midtrans.server_key')}}"></script>
            <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    </head>
    <body>
        <div class="top-header">
            <img class="logo-kanan" src="{{ asset('assets/Style/image/logo.png') }}" alt="logo" width="65" height="52">
            <div class="back-prev">
                <h4>Payment</h4>
            </div>
            <a class="cta" href="Booking3.html"><img src="{{ asset('assets/Style/image/back.png') }}" width="6" height="13"></a>
        </div>

        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-sm-12">
                    <div class="split left-70">
                        <div class="method-pick">
                            <div class="total-pay">
                                <p class="title-total">Total Payment</h4>
                                <p class="total-desc">Rp{{$booking->total_payment}},00</h4>
                            </div>
                            <div class="select-m">
                                <p class="judul-code">Booking Details</p>
                                <ul id="menu" style="cursor: pointer; width:70%;">
                                    <li>
                                    <input id="check01" type="checkbox" name="menu"/>
                                    <label for="check01">Package</label>
                                    <ul class="submenu">
                                        <li>
                                        {{$booking->package->name}}
                                        </li>
                                        <li>
                                        {{$booking->quantity}} tickets
                                        </li>
                                        <li>{{$booking->date}}</li>
                                    </ul>
                                    </li>
                                    <li>
                                    <input id="check02" type="checkbox" name="menu"/>
                                    <label for="check02">Contact Details</label>
                                    <ul class="submenu">
                                        <li>
                                        {{$booking->name}}
                                        </li>
                                        <li>
                                        {{$booking->email}}
                                        </li>
                                        <li>
                                        {{$booking->phone_number}}
                                        </li>
                                    </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="split right-30">
                        <div class="off-disc">
                            <div class="discount">
                                <label for="discount">Use Offers to Get Discount</label>
                                <div class="input-dsc">
                                <input type="text" placeholder="Promo or Gift Code" name="discount" id="discount">
                                <a href="#"><button class="btn-dsc">Apply</button></a>
                            </div>
                            </div>
                            <button class="btn-pay-fin" id="pay-button">Pay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function () {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                window.snap.pay('{{$snapToken}}', {
                onSuccess: function(result){
                    /* You may add your own implementation here */
                    alert("payment success!");
                    window.location.href = '/package';
                    console.log(result);
                },
                onPending: function(result){
                    /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                },
                onError: function(result){
                    /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                },
                onClose: function(){
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                }
                })
            });
            </script>
    </body>
    </html>