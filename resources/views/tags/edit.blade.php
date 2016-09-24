@extends('main')

@section('title', "| Edit Tag")

@section('content')

	<div class="row">
		<div class="col-md-8">

			{{ Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT"]) }}

				{{ Form::label('name', "Title") }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				{{ Form::submit('Save Changes', array('class' => 'btn btn-success form-spacing-top')) }}


			{{ Form::close() }}
		</div>
	</div>

@endsection