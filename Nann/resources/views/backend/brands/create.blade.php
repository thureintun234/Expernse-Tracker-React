@extends('backtemplate')

@section('content')
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Brands Create</h1>
		<a href="{{route('brands.index')}}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i>Back Brand </a>
	</div>
		<form class="row py-3" enctype="multipart/form-data" method="POST" action="{{route('brands.store')}}">
			@csrf
			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<input type="text" name="name" placeholder="Name" class="form-control {{ $errors->has('name') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('name')}}</span>
				</div>
				<div class="form-group">
					<input type="file" name="logo" placeholder="Logo" class="form-control-file {{ $errors->has('logo') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('logo')}}</span>
				</div>
				<button type="submit" class="btn btn-primary">Create</button>
			</div>
		</form>
	</div>
@endsection