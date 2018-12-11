@extends('layouts.app')

@section('content')
	

	<h2>Title: {{$article->title}}</h2>
	@if(count($errors))
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['method' => 'put']) !!}

		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'ex. Article Title']) !!}

		<div class="form-group" >
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body', $article->body, ['class' => 'form-control']) !!}
		</div>
		{!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}
@stop