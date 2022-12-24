@extends('layouts.app')

@section('content')
<div class="container-login-reg">
			<div class="wrap-regis100">
                <form method="POST" action="{{ route('partner.two.store') }}" class="regis100-form validate-form">
                @csrf
                    <span class="regis100-form-title p-b-43">
						Register as Partner
					</span>
                    <div class="form-horizontal">
                        <p class="sub-title">Business/Destinations Details</p>
                        <br>
                    <div class="wrap-regis-input100 validate-input">
                        <input placeholder="Name" id="business_name" type="text" class="form-control @error('business_name') is-invalid @enderror" name="business_name" value="{{ old('business_name') }}" required autocomplete="business_name" autofocus>
                                @error('business_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
                    <div class="wrap-regis-input100 validate-input">
                        <input placeholder="Location" id="business_location" type="text" class="form-control @error('business_location') is-invalid @enderror" name="business_location" value="{{ old('business_location') }}" required autocomplete="business_location" autofocus>
                                @error('business_location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="wrap-regis-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="business_email" placeholder="Email" type="email" class="form-control @error('business_email') is-invalid @enderror" name="business_email" value="{{ old('business_email') }}" required autocomplete="business_email">
                                @error('business_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="wrap-regis-input100 validate-input">
                        <input placeholder="Phone Number" id="business_phone_number" type="text" class="form-control @error('business_phone_number') is-invalid @enderror" name="business_phone_number" value="{{ old('business_phone_number') }}" required autocomplete="business_phone_number" autofocus>
                                @error('business_phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					<div class="wrap-regis-input100 validate-input">
                        <input style="display: flex; width: 672px;" placeholder="Description" id="business_description" type="text" class="form-control @error('business_description') is-invalid @enderror" name="business_description" value="{{ old('business_description') }}" required autocomplete="business_description" autofocus>
                                @error('business_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
                    <input type="hidden" name="level_user" id="level_user" class="form-control" value="2">
                    </div>

                    <div class="check-terms">
                        <input type="checkbox" class="checkbox">
                        <a style="color: #000" class="check-label">Hereby I agree to Terms of Services and Privacy Policy of Kembara Bumi</a>
                    </div>

					<div class="container-regis100-form-btn">
						<button type="submit" class="regis100-form-btn">
							Register
						</button>
					</div>
					<br>
				</form>
				
				<div class="regis100-img" style="background-image: url('{{ asset('assets/Style/image/bg-2.jpg') }}');">
				</div>
			</div>
		</div>
@endsection
