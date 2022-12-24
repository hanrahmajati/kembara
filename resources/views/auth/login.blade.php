@extends('layouts.app')

@section('content')
<div class="container-login-reg">
			<div class="wrap-login100">
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                        @csrf
					<span class="login100-form-title p-b-43">
						Login
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>

					<br>
                    @if (Route::has('password.request'))
                        <a class="forget-pw" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
					<br><br>
			
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>
					</div>
					<br>
					<p class="text-center">Not a member? <a data-toggle="tab" href="{{ route('register') }}">Register</a></p>
				</form>
				
				<div class="login100-img" style="background-image: url('{{ asset('assets/Style/image/bg-3.jpg') }}');">
				</div>
			</div>
</div>
@endsection
