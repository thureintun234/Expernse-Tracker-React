<!DOCTYPE html>
<html>
<head>
	<title>Nann Fashion Store | Fashion Products</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Girl Dress,Fashion Designs,Beautiful Bug,Girl's Accessories">
	<meta name="author" content="Shadow">
	<script type="text/javascript" src="{{asset('frontend/bootstrap/js/jquery.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-master/slick/slick.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/slick-master/slick/slick-theme.css')}}">
	<style>
		.slider {
			width: 80%;
			margin: 40px auto;
		}

		.slick-slide {
			margin: 0px 20px;
		}

		.slick-prev:before,
		.slick-next:before {
			color: #8a0606;
		}

		.slick-slide {
			transition: all ease-in-out .3s;
			opacity: .2;
		}

		.slick-active {
			opacity:1;
		}

	</style>
</head>
<body>

	<!-- header start -->

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-12">
					<div class="btn-group">
						<button class="btn border dropdown-toggle my-md-4 my-2 text-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Currency</button>
						<div class="dropdown-menu">
							<a href="" class="dropdown-item">USD</a>
							<a href="" class="dropdown-item">MMK</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12 text-center">
					<h2 class="my-md-3 site-title text-white"><a href="{{route('home')}}" class="text-white text-decoration-none">Nann Fashion</a></h2>
				</div>
				<div class="col-md-4 col-12 text-right">
					<p class="my-md-4 header-links">
						<a href="" class="px-2">LogIn</a>
						<a href="" class="px-1">Register</a>
					</p>
				</div>	
			</div>
		</div>

		<div class="container-fluid p-0">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="{{route('home')}}">
					<img src="{{asset('frontend/images/logo.png')}}" style="width:40px" class="img-fluid">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">PRODUCTS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">SALE</a>
						</li>
					</ul>
					<div class="navbar-nav ml-auto">
						<li class="nav-item">
							<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="site_search">
						</li>
						<li class="nav-item border rounded-circle mx-2 cart-icon">
							<i class="fas fa-shopping-cart p-2"></i>
						</li>
					</div>
				</div>
			</nav>
		</div>
	</header>

	<!-- header end -->


	<!-- main start -->
	<main class="container-fluid my-5">
		<div class="row">

		@yield('sidebar')
		
		@yield('content')

		</div>
	</main>

	<!-- main end -->



<!---------- Start Our service blog ----------->
	<section>
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h2 class="text-center text-secondary">Our Services</h2>
				<hr class="divider">
				<div class="row py-3">
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<i class="fas fa-truck-moving fa-3x"></i>
							</div>
							<div class="col-md-8 col-sm-8">
								<p>Door to Door Delivery
									<small class="text-muted">On-time delivery</small>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<i class="fas fa-store fa-3x"></i>
							</div>
							<div class="col-md-8 col-sm-8">
								<p>Customer Service
									<small class="text-muted">hotline-09797474923</small>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<i class="far fa-money-bill-alt fa-3x"></i>
							</div>
							<div class="col-md-8 col-sm-8">
								<p>Cash On Delivery
									<small class="text-muted">Online Payment</small>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-6">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<i class="fas fa-hourglass-half fa-3x"></i>
							</div>
							<div class="col-md-8 col-sm-8">
								<p>100% Satifying <br>
									<small class="text-muted">3 days return</small>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!---------- End Our service blog ----------->



	<!-- Start Footer Blog -->
	<footer class="bg-dark py-4">
		<div class="container text-monospace text-center">
			<p class="m-0 text-light text-muted">Copyright By &copy;<span class="text-danger"> Nann Fashion</span>. All Right Reserved | Design By &hearts; <a href="http://thureintun.me" class="text-decoration-none">Shadow</a></p>
		</div>
	</footer>




<script type="text/javascript" src="{{asset('frontend/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/slick-master/slick/slick.js')}}"></script>
@yield('script')

<script>
	$(document).ready(function(){
		$('.slick_slider').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 3,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	})
</script>
</body>
</html>