<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link rel="stylesheet" href="import/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="import/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="import/css/owl.carousel.min.css">
	<link rel="stylesheet" href="import/css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="import/css/nouislider.min.css">
	<link rel="stylesheet" href="import/css/ionicons.min.css">
	<link rel="stylesheet" href="import/css/plyr.css">
	<link rel="stylesheet" href="import/css/photoswipe.css">
	<link rel="stylesheet" href="import/css/default-skin.css">
	<link rel="stylesheet" href="import/css/main.css">

	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="import/icon/fav_sj.png" sizes="32x32">
	<link rel="apple-touch-icon" href="import/icon/fav_sj.png">
	<link rel="apple-touch-icon" sizes="72x72" href="import/icon/fav_sj.png">
	<link rel="apple-touch-icon" sizes="114x114" href="import/icon/fav_sj.png">
	<link rel="apple-touch-icon" sizes="144x144" href="import/icon/fav_sj.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>StreamJoy</title>

</head>
<body class="body">
	
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="index.html" class="header__logo">
								<img src="import/img/trans_sj_svg1.svg" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="{{url('/dashboard')}}" role="button">Home</a>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="{{url('/movielist')}}" role="button">List of Movie</a>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a href="{{url('/pricing')}}" class="header__nav-link">Pricing Plan</a>
								</li>

								<!-- dropdown -->
								<li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										<li><a href="{{url('/about')}}">About</a></li>
										<li><a href="{{url('/faq')}}">FAQ</a></li>
										<li><a href="{{url('/404')}}">404</a></li>
									</ul>
								</li>
								<!-- end dropdown -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>
								
								<ul class="header__nav">
									<li class="dropdown header__nav-item">
										<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

										{{ Auth::user()->name }}
											
										</a>
								

										<ul class="dropdown-menu header__dropdown-menu" href="{{ route('logout') }}" aria-labelledby="dropdownMenuMore" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											
											<a href="#">Sign up</a>

												<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
													@csrf
												</form>

										</ul>
									</li>
								</ul>
								
							</div>
							
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->


@yield('content')


    <!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Resources</h6>
					<ul class="footer__list">
						<li><a href="{{url('/about')}}">About Us</a></li>
						<li><a href="{{url('/pricing')}}">Pricing Plan</a></li>
						<li><a href="{{url('/help')}}">Help</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Legal</h6>
					<ul class="footer__list">
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Security</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-12 col-sm-4 col-md-3">
					<h6 class="footer__title">Contact</h6>
					<ul class="footer__list">
						<li><a href="Mobile: +639709218338">+63-9709-218-338</a></li>
						<li><a href="Gmail:streamjoy@gmail.com">streamjoy@gmail.com</a></li>
					</ul>
					<ul class="footer__social">
						<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
						<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
						<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
						<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer copyright -->
				<div class="col-12">
					<div class="footer__copyright">
						<small><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></small>

						<ul>
							<li><a href="#">Terms of Use</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<!-- end footer copyright -->
			</div>
		</div>
	</footer>
	<!-- end footer -->

	<!-- JS -->
	<script src="import/js/jquery-3.3.1.min.js"></script>
	<script src="import/js/bootstrap.bundle.min.js"></script>
	<script src="import/js/owl.carousel.min.js"></script>
	<script src="import/js/jquery.mousewheel.min.js"></script>
	<script src="import/js/jquery.mCustomScrollbar.min.js"></script>
	<script src="import/js/wNumb.js"></script>
	<script src="import/js/nouislider.min.js"></script>
	<script src="import/js/plyr.min.js"></script>
	<script src="import/js/jquery.morelines.min.js"></script>
	<script src="import/js/photoswipe.min.js"></script>
	<script src="import/js/photoswipe-ui-default.min.js"></script>
	<script src="import/js/main.js"></script>
</body>

</html>