@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
	{{-- {!! Html::style('css/parsley.css') !!} --}}

	<!-- parley and select 2 libraries -->
	<link rel="stylesheet" href="{{ URL::asset('css/parsley.css') }}" >
	<link rel="stylesheet" href="{{ URL::asset('css/select2.min.css') }}" >
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<script>
		tinymce.init({
			selector: 'textarea',
			plugins: "link code image imagetools",
			menubar: false,
		});
	</script>

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

				{{ Form::label('tags', 'Tags:', array('class' => 'form-spacing-top')) }}
				<select class="form-control select2-multi" name="tags[]" multiple="multiple">
					<option value="">Please select a tag...</option>
					@foreach($tags as $tag)
						<option value="{{ $tag->id }}">{{ $tag->name }}</option>
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
	{{-- {!! Html::script('js/parsley.min.js') !!} --}}

	<!-- Include parsley library for form validation -->
	<script src="{{ URL::asset('js/parsley.min.js') }}"></script>
	<!-- Include select 2 library for multi select -->
	<script src="{{ URL::asset('js/select2.min.js') }}"></script>

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>
@endsection