@extends('main')

@section('title', '| View Post')

@section('content')

	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">

			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('body', 'Body:', array('class' => 'form-spacing-top')) }}
			{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}
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