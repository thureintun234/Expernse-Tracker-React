@extends('backtemplate')

@section('content')
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Colors Create</h1>
		<a href="{{route('colors.index')}}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i>Back Color </a>
	</div>
		<form class="row py-3" enctype="multipart/form-data" method="POST" action="{{route('colors.store')}}">
			@csrf
			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<input type="text" name="name" placeholder="Name" class="form-control {{ $errors->has('name') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('name')}}</span>
				</div>
				<div class="form-group">
					<input type="file" name="photo" placeholder="Photo" class="form-control-file {{ $errors->has('photo') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('photo')}}</span>
				</div>
				<button type="submit" class="btn btn-primary">Create</button>
			</div>
		</form>
	</div>
@endsection