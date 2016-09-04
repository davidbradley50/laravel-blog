@extends('main')

@section('title', '| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>

			<p class="lead">{{ $post->body }}</p>

			<div class="alert alert-{{ Session::get('msg-class') }}">
				{{ Session::get('message') }}
			</div>
		</div>
		<div class="col-md-4">
			<div class="well">
				<label>Url:</label>
				<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>

				<label>Category:</label>
				<p>{{ $post->category->name }}</p>

				<label>Created At:</label>
				<p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</a></p>

				<label>Last Updated:</label>
				<p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>

				<hr>

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
						{{-- <a href="#" class="btn btn-primary btn-block">Edit</a> --}}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<a href="{{ route('posts.index') }}" class="btn btn-default btn-block btn-h1-spacing"><< See All Posts</a>
					</div>
				</div>

			</div>
		</div>
	</div>

@endsection