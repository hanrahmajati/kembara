<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEMBARA</title>

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{ asset('assets/Style/image/logoKB.png') }}">

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/Style/styles.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
<header>
        <nav id="pesan">
            <img id="logo" src="{{ asset('assets/Style/image/logoKB.png') }}" width="76" height="64" alt="">
            <div class="user">
                <img id="logo2" src="{{ asset('assets/Style/image/Group 222.png') }}" width="85" height="85" alt="">
                <p>{{ Auth::user()->name }}</p>
                <a class="login-btn" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="ni ni-spaceship text-info"></i>{{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            
        </nav>
    </header>
    <main>
        <div class="pesanan">
            <h2>Account Verification</h2>
            <h2>Booking Verification</h2>
            <h2>Shopping Verification</h2>
            <div class="card-pesan">
                <h3>User 123098889102</h3>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>: Layla Majnun</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>: 089999989765</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: lalalayla@example.com</td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td>: 15/12/2000</td>
                    </tr>
                </table>
                <button>Verify</button>
            </div>
            <div class="card-pesan">
                <h3>User 123098889102</h3>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>: Layla Majnun</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>: 089999989765</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: lalalayla@example.com</td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td>: 15/12/2000</td>
                    </tr>
                </table>
                <button>Verify</button>
            </div>
            <div class="card-pesan">
                <h3>User 123098889102</h3>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>: Layla Majnun</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>: 089999989765</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: lalalayla@example.com</td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td>: 15/12/2000</td>
                    </tr>
                </table>
                <button>Verify</button>
            </div>
            <div class="card-pesan">
                <h3>User 123098889102</h3>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>: Layla Majnun</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>: 089999989765</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: lalalayla@example.com</td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td>: 15/12/2000</td>
                    </tr>
                </table>
                <button>Verify</button>
            </div>
            <div class="card-pesan">
                <h3>User 123098889102</h3>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>: Layla Majnun</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>: 089999989765</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: lalalayla@example.com</td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td>: 15/12/2000</td>
                    </tr>
                </table>
                <button>Verify</button>
            </div>
            <div class="card-pesan">
                <h3>User 123098889102</h3>
                <table>
                    <tr>
                        <td>Name</td>
                        <td>: Layla Majnun</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>: 089999989765</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>: lalalayla@example.com</td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td>: 15/12/2000</td>
                    </tr>
                </table>
                <button>Verify</button>
            </div>
        </div>
    </main>
</body>
</html>
