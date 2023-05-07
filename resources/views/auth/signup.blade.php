@extends('template.logindesign')
@section('login')

<body class="body">

	<div class="sign section--bg" data-bg="import/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- registration form -->
						<form action="{{route('auth.register-user')}}" method="post" class="sign__form">
							@if(Session::has('Success'))
							<div class="alert alert-success">{{Session::get('success')}}</div>
							@endif
							@if(Session::has('fail'))
							<div class="aler alert-danger">{{Session::get('fail')}}</div>
							@endif
							@csrf

							<a href="{{url('/dashboard')}}" class="sign__logo">
								<img src="import/img/trans_sj_svg1.svg" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Name" value="{{old('name')}}">
								<span class="text-danger" class="sign__input">@error('name') {{$message}} @enderror</span>
							</div>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email" value=""{{old('email')}}">
								<span class="text-danger" class="sign__input">@error('email'){{$message}} @enderror</span>
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password">
								<span class="text-danger" class="sign__input">@error('password') {{$message}} @enderror</span>
							</div>
							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">I agree to the <a href="#">Privacy Policy</a></label>
							</div>
							
							<button class="sign__btn" type="submit">Sign up</button>

							<span class="sign__text">Already have an account? <a href="{{url('/signin')}}">Sign in!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection