@extends('admin-template.page')
@section('title', 'Add New Post')
@section('activeposts', 'active')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Add New Post</h1>

<!-- Form Create -->
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<a href="{{ route('posts.index') }}" class="btn btn-sm btn-primary btn-icon-split">
			<span class="icon text-white-50">
				<i class="fas fa-chevron-circle-left"></i>
			</span>
			<span class="text">Back</span>
		</a>	
	</div>
	<div class="card-body">
		<form method="POST" enctype="multipart/form-data" action=" {{ route('posts.store') }} ">
			@csrf
			<div class="form-group">
				<label>Title</label>
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif
				@error('title')
				<div class="alert alert-danger" role="alert">
					{{ $message }}
				</div>
				@enderror
				<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
			</div>
			<div class="form-group">
				<label>Category</label>
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif
				@error('category')
				<div class="alert alert-danger" role="alert">
					{{ $message }}
				</div>
				@enderror
				<select type="text" name="category" class="form-control @error('category') is-invalid @enderror" value="{{old('category')}}">
					@foreach($categories as $result)
					<option value="{{ $result->id }}">{{ $result->name }} </option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Content</label>
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif
				@error('content')
				<div class="alert alert-danger" role="alert">
					{{ $message }}
				</div>
				@enderror
				<textarea type="text" name="content" class="form-control @error('content') is-invalid @enderror" value="{{old('content')}}"></textarea>
			</div>
			<div class="form-group">
				<label>Thumbnail</label>
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif
				@error('thumbnail')
				<div class="alert alert-danger" role="alert">
					{{ $message }}
				</div>
				@enderror
				<input type="file" name="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror" value="{{old('thumbnail')}}">
			</div>
			<div class="form-group">
				<button class="btn btn-success btn btn-block">
					<i class="fas fa-flag"></i>
					<span class="text">Add New Post</span>
				</button>
			</div>
		</form>
	</div>
</div>

@endsection