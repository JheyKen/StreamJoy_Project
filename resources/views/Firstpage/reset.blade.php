@extends('template.logindesign')
@section('login')

<body class="body">

	<div class="sign section--bg" data-bg="import/img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">

                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

						<!-- registration form -->
						<form method="POST" action="{{route('Firstpage.reset')}}" class="sign__form">
                        @csrf

							<a href="{{url('/dashboard')}}" class="sign__logo">
								<img src="import/img/trans_sj_svg1.svg" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email">

                                <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password">
							</div>
							
							<button class="sign__btn" type="button">Sign up</button>

							<span class="sign__text">Already have an account? <a href="{{url('/signin')}}">Sign in!</a></span>
						</form>
						<!-- registration form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection