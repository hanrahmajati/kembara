@extends('layouts.app')

@section('content')
<div class="container-login-reg">
			<div class="wrap-regis100">
                <form method="POST" action="{{ route('register') }}" class="regis100-form validate-form">
                @csrf
					<span class="regis100-form-title p-b-43">
						Register
					</span>
                    <div class="form-horizontal">
                    <div class="wrap-regis-input100 validate-input">
                        <input placeholder="Full Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
                    <div class="wrap-regis-input100 validate-input">
                        <input placeholder="Birth Date" id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" value="{{ old('birth_date') }}" required autocomplete="birth_date" autofocus>
                                @error('birth_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="wrap-regis-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="wrap-regis-input100 validate-input">
                        <input placeholder="Username" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
                    <div class="wrap-regis-input100 validate-input">
                        <input placeholder="Address" id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
                    <div class="wrap-regis-input100 validate-input">
                        <input placeholder="Phone Number" id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
                                @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="wrap-regis-input100 validate-input" data-validate="Password is required">
                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
                    <div class="wrap-regis-input100 validate-input" data-validate="Password is required">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
					</div>
                    </div>

					<div class="container-regis100-form-btn">
						<button type="submit" class="regis100-form-btn">
							Register
						</button>
					</div>
					<br>
				<p class="text-center">Register as <a data-toggle="tab" href="{{ route('partner.registerOne') }}">Partner</a> instead.</p>
				</form>
				
				<div class="regis100-img" style="background-image: url('{{ asset('assets/Style/image/bg-4.jpg') }}');">
				</div>
			</div>
		</div>
@endsection
