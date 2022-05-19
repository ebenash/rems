
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
                <small>Please provide the following details to rest your password</small>
			</div>
			{{-- <div class="icon">
				<i class="fa fa-lock"></i>
			</div> --}}
		</div>
		<!-- end brand -->
		<!-- begin login-content -->
		<div class="login-content">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
			<form method="POST" action="{{ route('password.email') }}">
                @csrf
				<div class="form-group m-b-20">
                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="login-buttons">
					<button type="submit" class="btn btn-success btn-block btn-lg">{{ __('Send Password Reset Link') }}</button>
				</div>

				<div class="m-t-20 text-right">
                    @if (Route::has('login'))
					    Return to <a href="{{route('login')}}">login</a> page.
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



