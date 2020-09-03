@extends('backtemplate')

@section('content')
<div class="container-fluid">
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Colors</h1>
		<a href="{{route('colors.create')}}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Add Color</a>
	</div>

	<!-- Color list table-->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary">Colors List</h6>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Photo</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Photo</th>
							<th>Actions</th>
						</tr>
					</tfoot>
					<tbody>
						@php $i=1;	@endphp
						@foreach($colors as $color)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$color->name}}</td>
							<td><img src="{{asset($color->photo)}}" width="100" height="100" alt="CategoryImage"></td>
							<td>
								<a href="{{route('colors.edit',$color->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
								<form method="POST" action="{{route('colors.destroy',$color->id)}}" onsubmit="return confirm('Are you Sure?')" class="d-inline-block">
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
@endsection

