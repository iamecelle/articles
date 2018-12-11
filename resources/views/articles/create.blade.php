@extends('layouts.app')

@section('content')

	@if(count($errors))
		<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				{{ $error }} <br>
			@endforeach
		</div>
	@endif

	{!! Form::open(['url' => 'articles']) !!}


		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ex. Article Title']) !!}

		<div class="form-group" >
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		</div>
		{!! Form::submit('Add New Article', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}

@stop