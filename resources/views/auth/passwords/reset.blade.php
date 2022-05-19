

@extends('layouts.empty', ['paceTop' => true])

@section('title', 'Reset Password')

@section('content')
	<!-- begin login-cover -->
	<div class="login-cover">
		<div class="login-cover-image" style="background-image: url(/assets/img/login-bg/login-bg-14.jpg)" data-id="login-cover-image"></div>
		<div class="login-cover-bg"></div>
	</div>
	<!-- end login-cover -->

	<!-- begin login -->
	<div class="login login-v2" data-pageload-addclass="animated fadeIn">
		<!-- begin brand -->
		<div class="login-header">
			<div class="brand">
				<img src="{{asset('assets/img/logo/gtb-white.png')}}" height="50px"> {{ __('Reset Password') }}
                <small>Please provide the following details to login</small>
			</div>
			{{-- <div class="icon">
				<i class="fa fa-lock"></i>
			</div> --}}
		</div>
		<!-- end brand -->
		<!-- begin login-content -->
		<div class="login-content">
			<form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
				<div class="form-group m-b-20">
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="form-group m-b-20">
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="form-group m-b-20">
                    <input id="password-confirm" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
				</div>

				<div class="login-buttons">
					<button type="submit" class="btn btn-success btn-block btn-lg">{{ __('Reset Password') }}</button>
				</div>
			</form>
		</div>
		<!-- end login-content -->
	</div>
	<!-- end login -->
@endsection

