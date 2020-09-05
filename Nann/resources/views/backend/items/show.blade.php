@extends('backtemplate')

@section('content')

	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Items Detail</h1>
		<a href="{{route('items.index')}}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i>Back Item </a>
		</div>
		<div class="row my-3">
			<div class="col-md-4">
				<img src="{{asset($item->photo1)}}" width="300" height="300">	
			</div>
			<div class="col-md-8">
				<table class="table">
						<tr>
							<td>Product Name</td>
							<td><strong>{{$item->name}}</strong></td>
						</tr>
						<tr>
							<td>Product Codeno</td>
							<td><strong>{{$item->codeno}}</strong></td>
						</tr>
						<tr>
							<td>Product Price</td>
							<td><strong>{{$item->price}}</strong></td>
						</tr>
						<tr>
							<td>Product Discount</td>
							<td><strong>{{$item->discount}}</strong></td>
						</tr>
						<tr>
							<td>Product Description</td>
							<td><strong>{{$item->description}}</strong></td>
						</tr>
						<tr>
							<td>Brand</td>
							<td><strong>{{$item->brand->name}}</strong></td>
						</tr>
						<tr>
							<td>Subcategory</td>
							<td><strong>{{$item->subcategory->name}}</strong></td>
						</tr>
						<tr>
							<td>Colors</td>
							<td>
								@foreach($item->colors as $color)
								<strong>{{$color->name}}</strong>,
								@endforeach
							</td>
						</tr>
						<tr>
							<td>Sizes</td>
							<td>
								@foreach($item->sizes as $size)
								<strong>{{$size->name}}</strong>,
								@endforeach
							</td>
						</tr>
				</table>
			</div>
		</div>
	</div>

@endsection