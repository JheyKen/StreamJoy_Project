@extends('template.logindesign')
@section('login')

<body class="body">

	<div class="sign section--bg" data-bg="import/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						
						<form method="POST" action="{{route('auth.register-user')}}" class="sign__form">
						@csrf

							<a href="{{url('/dashboard')}}" class="sign__logo">
								<img src="import/img/trans_sj_svg1.svg" alt="">
							</a>

							<div class="sign__group">

                                <input placeholder="{{ __('Email Address or Username') }}" type="text" id="username" type="username" class="sign__input @error('username') is-invalid @enderror @error('email') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
								

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
							</div>

							<div class="sign__group">
								<input placeholder="{{ __('Password') }}" id="password" type="password" class="sign__input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
								
								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            	@enderror

							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked" {{ old('remember') ? 'checked' : '' }}>
								<label for="remember">Remember Me</label>
							</div>
							
							<button class="sign__btn" type="submit">{{ __('Sign In') }}</button>

							<span class="sign__text">Don't have an account? <a href="{{url('/signup')}}">Sign up!</a></span>
							@if (Route::has('password.request'))
							<span class="sign__text"><a href="{{url('/signin')}}">Forgot password?</a></span>
						</form>
						@endif
					
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection