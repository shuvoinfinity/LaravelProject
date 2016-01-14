@extends('layouts.master')

@section('content')


<h1> Edit List </h1>

@if(Session::has('message'))
	<div class = "alert alert-info"> 
			{{ Session::get('message')}}
	</div>
@endif

{!! Form::model($list, array('method' => 'put', 'route' => ['lists.update', $list->id], 'class' => 'form-group')) !!}

<div class = "form-group">
	{!! Form::label('List Name') !!}
	{!! Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your list name')) !!}
</div>

<div class = "form-group">
	{!! Form::label('List Description') !!}
	{!! Form::textarea('description', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your Description Here')) !!}
</div>

<div class="form-group">
	{!! Form::submit('Update List', array('class' => 'btn btn-primary')) !!}
</div>

{!! Form::close() !!}

@endsection