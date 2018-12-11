@extends('layouts.app')

@section('content')

	@include('articles._error')

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