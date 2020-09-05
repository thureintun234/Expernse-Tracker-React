@extends('backtemplate')

@section('content')
	<div class="container-fluid">
		<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Items Create</h1>
		<a href="{{route('items.index')}}" class="d-none d-sm-inline-block btn btn-primary shadow-sm"><i class="fas fa-backward fa-sm text-white-50"></i>Back Item </a>
	</div>
		<form class="row py-3" enctype="multipart/form-data" method="POST" action="{{route('items.store')}}">
			@csrf
			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<input type="text" name="codeno" placeholder="codeno" class="form-control {{ $errors->has('codeno') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('codeno')}}</span>
				</div>
				<div class="form-group">
					<input type="text" name="name" placeholder="Name" class="form-control {{ $errors->has('name') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('name')}}</span>

				</div>
				<div class="form-group">
					<input type="file" name="photo1" placeholder="Photo" class="form-control-file {{ $errors->has('photo1') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('photo1')}}</span>
				</div>
				<div class="form-group">
					<input type="file" name="photo2" placeholder="Photo" class="form-control-file {{ $errors->has('photo2') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('photo2')}}</span>
				</div>
				<div class="form-group">
					<input type="number" name="price" placeholder="Price" class="form-control {{ $errors->has('price') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('price')}}</span>
				</div>
				<div class="form-group">
					<input type="number" name="discount" placeholder="Discount" class="form-control {{ $errors->has('discount') ? 'border border-danger' : '' }}">
					<span style="color:red;">{{$errors->first('discount')}}</span>
				</div>
				<div class="form-group">
					<textarea class="form-control {{ $errors->has('description') ? 'border border-danger' : '' }}" placeholder="message" name="description"></textarea>
					<span style="color:red;">{{$errors->first('description')}}</span>
				</div>
				<div class="form-group">
					<select class="form-control" name="category">
						<optgroup label="Choose Category">
							@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" name="brand">
						<optgroup label="Choose Brand">
							@foreach($brands as $brand)
							<option value="{{$brand->id}}">{{$brand->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" name="subcategory">
						<optgroup label="Choose Subcategory">
							@foreach($subcategories as $subcategory)
							<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control multipleselect" name="colors[]" multiple="multiple">
						<optgroup label="Choose Color">
							@foreach($colors as $color)
							<option value="{{$color->id}}">{{$color->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control multipleselect" name="sizes[]" multiple="multiple">
						<optgroup label="Choose Size">
							@foreach($sizes as $size)
							<option value="{{$size->id}}">{{$size->name}}</option>
							@endforeach
						</optgroup>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Create</button>
		</form>
	</div>
@endsection

@section('script')
<script type="text/javascript">
		$(document).ready(function() {
			$('.multipleselect').select2();
		});
	</script>
@endsection