@extends('fronttemplate')

@section('content')
<div class="container">
	<h2 class="text-center py-5 text-muted">Item Detail Page</h2>
	<div class="row">
		<div class="col-md-4">
			<img src=" {{asset($items->photo1)}}" width="300" height="300">
		</div>
		<div class="col-md-8">
			<form>
				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-5 col-form-label">Product Name</label>
					<div class="col-sm-5">
						<strong>{{$items->name}}</strong>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-5 col-form-label">Product Price</label>
					<div class="col-sm-7">
						<strong>{{$items->price}}</strong>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-5 col-form-label">Product Description</label>
					<div class="col-sm-7">
						<strong>{{$items->description}}</strong>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputEmail3" class="col-sm-5 col-form-label">Qty</label>
					<div class="col-sm-7">
						<input type="number" name="qty" id="qty" class="form-control w-25 d-inline-block">
					</div>
				</div>
			</form>
			<a href="" class="btn btn-success btn-sm d-inline-block">Add To Cart</a>
			<a href="" class="btn btn-info btn-sm d-inline-block">Wishlist</a>
		</div>
	</div>
</div>
</div>

@endsection