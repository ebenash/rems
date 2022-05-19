@extends('layouts.empty', ['paceTop' => true])

@section('title', 'Login')

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
				<img src="{{asset('assets/img/logo/gtb-white.png')}}" height="50px"> {{ __('Login') }}
                <small>Please provide the following details to login</small>
			</div>
			{{-- <div class="icon">
				<i class="fa fa-lock"></i>
			</div> --}}
		</div>
		<!-- end brand -->
		<!-- begin login-content -->
		<div class="login-content">
			<form method="POST" action="{{ route('login') }}">
                @csrf
				<div class="form-group m-b-20">
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="form-group m-b-20">
                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="checkbox checkbox-css m-b-20 row">
                    <div class="text-left col-6">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="text-right col-6">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="display: inline !important">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
				</div>
				<div class="login-buttons">
					<button type="submit" class="btn btn-success btn-block btn-lg">{{ __('Sign me in') }}</button>
				</div>

				<div class="m-t-20">
                    @if (Route::has('register'))
					    Not a member yet? Click <a href="{{route('register')}}">here</a> to register.
                    @endif
				</div>
			</form>
		</div>
		<!-- end login-content -->
	</div>
	<!-- end login -->

	<!-- begin login-bg -->
	{{-- <ul class="login-bg-list clearfix">
		<li class="active"><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-17.jpg" style="background-image: url(/assets/img/login-bg/login-bg-17.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-16.jpg" style="background-image: url(/assets/img/login-bg/login-bg-16.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-15.jpg" style="background-image: url(/assets/img/login-bg/login-bg-15.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-14.jpg" style="background-image: url(/assets/img/login-bg/login-bg-14.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-13.jpg" style="background-image: url(/assets/img/login-bg/login-bg-13.jpg)"></a></li>
		<li><a href="javascript:;" data-click="change-bg" data-img="/assets/img/login-bg/login-bg-12.jpg" style="background-image: url(/assets/img/login-bg/login-bg-12.jpg)"></a></li>
	</ul> --}}
	<!-- end login-bg -->
@endsection

@push('scripts')
	<script src="/assets/js/demo/login-v2.demo.js"></script>
@endpush

