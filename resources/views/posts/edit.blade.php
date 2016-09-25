@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheets')

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
		<div class="col-md-12">
			<div class="alert alert-{{ Session::get('msg-class') }}">
				{{ Session::get('message') }}
			</div>
		</div>
	</div>

	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
		<div class="col-md-8">

			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('slug', 'Slug:', array('class' => 'form-spacing-top')) }}
			{{ Form::text('slug', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5', 'maxlength' => '255')) }}

			{{ Form::label('category_id', "Category:", array('class' => 'form-spacing-top')) }}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}

			{{ Form::label('tags', 'Tags:', array('class' => 'form-spacing-top')) }}
			{{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}

			{{ Form::label('featured_image', 'Update Featured Image:', ['class' => 'form-spacing-top']) }}
			{{ Form::file('featured_image') }}

			{{ Form::label('body', 'Body:', array('class' => 'form-spacing-top')) }}
			{{ Form::textarea('body', $post->body, array('class' => 'form-control', 'required' => '')) }}
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-horizontal">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>

				<div class="row">
					<div class="col-sm-6">
			{{-- 			{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!} --}}
						<a href="{{ route('posts.show', ['id' => $post->id]) }}" class="btn btn-primary btn-block">Cancel</a>
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-block')) }}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection


@section('scripts')
	<!-- Include select 2 library for multi select -->
	<script src="{{ URL::asset('js/select2.min.js') }}"></script>
	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');
	</script>
@endsection