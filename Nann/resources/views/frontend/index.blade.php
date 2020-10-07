@extends('fronttemplate')

@section('content')

	<!-- carousel -->
		<div class="container-fluid p-0">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active carousel-position">
						<img src="{{asset('frontend/images/carousel1.jpg')}}" class="d-block w-100" alt="...">
						<div class="img-overlay"></div>	
						<div class="carousel-caption">
							<button class="btn btn-danger btn-lg">Shop Now</button>
						</div>
					</div>
					<div class="carousel-item">
						<img src="{{asset('frontend/images/carousel2.jpg')}}" class="d-block w-100" alt="...">
						<div class="img-overlay"></div>	
						<div class="carousel-caption">
							<button class="btn btn-danger btn-lg">Shop Now</button>
						</div>
					</div>
					<div class="carousel-item">
						<img src="{{asset('frontend/images/carousel3.jpg')}}" class="d-block w-100" alt="...">
						<div class="img-overlay"></div>	
						<div class="carousel-caption">
							<button class="btn btn-danger btn-lg">Shop Now</button>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>


		<!-- Categories -->
	<div class="container-fluid my-5">
		<div class="row">
			<div class="col-md-2 text-center">
				<a href="" class="text-secondary wrapper text-decoration-none">
					<span class="fa-stack fa-3x">
					  <i class="fas fa-circle fa-stack-2x"></i>
					  <i class="fas fa-tshirt fa-stack-1x fa-inverse"></i>
					</span>
					<p class="text-secondary font-weight-bold">Shirt</p>
				</a>
			</div>
			<div class="col-md-2 text-center">
				<a href="" class="text-secondary wrapper text-decoration-none">
					<span class="fa-stack fa-3x">
					  <i class="fas fa-circle fa-stack-2x"></i>
					  <i class="fas fa-shopping-bag fa-stack-1x fa-inverse"></i>
					</span>
					<p class="text-secondary font-weight-bold">Bug</p>
				</a>
			</div>
			<div class="col-md-2 text-center">
				<a href="" class="text-secondary wrapper text-decoration-none">
					<span class="fa-stack fa-3x">
					  <i class="fas fa-circle fa-stack-2x"></i>
					  <i class="fas fa-hat-cowboy fa-stack-1x fa-inverse"></i>
					</span>
					<p class="text-secondary font-weight-bold">Hat</p>
				</a>
			</div>
			<div class="col-md-2 text-center">
				<a href="" class="text-secondary wrapper text-decoration-none">
					<span class="fa-stack fa-3x">
					  <i class="fas fa-circle fa-stack-2x"></i>
					  <i class="fab fa-canadian-maple-leaf fa-stack-1x fa-inverse"></i>
					</span>
					<p class="text-secondary font-weight-bold">TRADITIONAL</p>
				</a>
			</div>
			<div class="col-md-2 text-center">
				<a href="" class="text-secondary wrapper text-decoration-none">
					<span class="fa-stack fa-3x">
					  <i class="fas fa-circle fa-stack-2x"></i>
					  <i class="fas fa-gift fa-stack-1x fa-inverse"></i>
					</span>
					<p class="text-secondary font-weight-bold">Package</p>
				</a>
			</div>
			<div class="col-md-2 text-center">
				<a href="" class="text-secondary wrapper text-decoration-none">
					<span class="fa-stack fa-3x">
					  <i class="fas fa-circle fa-stack-2x"></i>
					  <i class="fas fa-ellipsis-h fa-stack-1x fa-inverse"></i>
					</span>
					<p class="text-secondary font-weight-bold">OTHERS</p>
				</a>
			</div>
		</div>
	</div>



	<!-- New Arrival -->
	<div class="container my-5">
		<h2 class="text-center text-secondary py-5">New Arrival Products</h2>
		<div class="row">
			@foreach($items as $item)
			<div class="col-md-2 col-sm-4">
				<div class="card">
					<a href="{{route('itemdetail',$item->id)}}" target="_blank">
						<img src="{{$item->photo1}}" width="200" height="200" class="card-img-top">
					</a>
					<div class="card-body text-center border-top">
						<h5 class="card-title text-secondary">{{$item->name}}</h5>
						<p class="card-text text-secondary">
						{{$item->description}}<br>
						<small class="text-muted font-weight-bold">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
						</p>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>

	<!-- End New Arrival -->


	<!-- Banner  -->

		<div class="container">
			<div class="row jumbotron">
				<div class="col-md-7">
					<img src="{{asset('frontend/images/bannerphoto.jpg')}}" class="img-fluid">
				</div>
				<div class="col-md-5 text-center">
					<h3 class="py-3">Banner Header</h3>
					<p class="text-justify">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>


	<!-- End Banner -->






		<!-- first slider -->
		<div class="container my-5">
			<h2 class="text-center text-secondary pt-5">Available Products</h2>
			<div class="slick_slider slider">
				@foreach($items as $item)
				<div class="text-center w-100">
					<a href="{{route('itemfilter')}}">
						<div class="card">
							<img src="{{$item->photo1}}" class="card-img-top">
							<div class="card-body border-top">
								<a href="" class="text-muted">
									<button class="btn btn-danger">{{$item->name}}</button>
								</a>
							</div>
						</div>
					</a>
				</div>
				@endforeach

			</div>
		</div>

@endsection