@extends('backtemplate')

@section('content')

<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Items</h1>
		<a href="{{route('items.create')}}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Item</a>
	</div>

	<!-- Color list table-->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Items List</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Price</th>
							<th>Brand</th>
							<th>Photo</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Price</th>
							<th>Brand</th>
							<th>Photo</th>
							<th>Actions</th>
						</tr>
					</tfoot>
					<tbody>
						@php $i=1;	@endphp
						@foreach($items as $item)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$item->name}}
								<a href="{{route('items.show',$item->id)}}"><span class="badge badge-info badge-pill" title="Item Detail">Detail</span></a>

								<a href="#" class="box" data-name='{{$item->name}}' data-photo='{{asset($item->photo1)}}' data-price='{{$item->price}}' data-desc='{{$item->description}}'><span class="badge badge-primary badge-pill" >Modal</span></a>
							</td>
							<td>{{$item->price}}</td>
							<td>{{$item->brand->name}}</td>
							<td><img src="{{asset($item->photo1)}}" width="100" height="100" alt="CategoryImage"></td>
							<td>
								<a href="{{route('items.edit',$item->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
								<form method="POST" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you Sure?')" class="d-inline-block">
									@csrf
									@method('DELETE')
									<div class="form-group">
										<span class="del"><i class="fas fa-trash" aria-hidden="true"></i></span>
										<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger del">
									</div>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


{{-- Detail Model --}}
	<div class="modal fade" id="mymodal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"></h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<img src="" class="img-fluid w-50 d-block mx-auto" id="photo">
						</div>
						<div class="col-md-6">
							Price: <strong id="price"></strong><br>
							Description: <strong id="desc"></strong>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('script')
	<script>
		$(document).ready(function(){
			$('.box').click(function(){
				var name =$(this).data('name');
				var photo =$(this).data('photo');
				var price =$(this).data('price');
				var desc =$(this).data('desc');

				$('.modal-title').text(name);
				$('#photo').attr('src',photo);
				$('#price').text(price);
				$('#desc').text(desc);
				$('#mymodal').modal('show');

			});
		});
	</script>
@endsection