@extends('main')

@section('title', '| New Post')

@section('stylesheets')
	<!-- Default Laravel way to include css files -->
	{{-- <link rel="stylesheet" href="{{ URL::asset('css/parsley.css') }}" > --}}

	<!-- parley library CSS -->
	{!! Html::style('css/parsley.css') !!}
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			{!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}
				{{ Form::label('title', 'Title:') }}
				{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('slug', 'Slug:', array('class' => 'form-spacing-top')) }}
				{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

				{{ Form::label('category_id', 'Category:', array('class' => 'form-spacing-top')) }}
				<select class="form-control" name="category_id">
					<option value="">Please select a category...</option>
					@foreach($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
				</select>

				{{ Form::label('body', 'Body:', array('class' => 'form-spacing-top')) }}
				{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

				{{ Form::submit('Create Post', array('class' => 'btn btn-block btn-lg btn-success', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>

@endsection


@section('scripts')
	<!-- Default Laravel way to include js files -->
	{{-- <script src="{{ URL::asset('js/parsley.min.js') }}"></script> --}}

	<!-- Include parsley library for form validation -->
	{!! Html::script('js/parsley.min.js') !!}
@endsection