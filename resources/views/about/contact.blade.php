@extends('layouts.master')

@section('content')
<h2> Contact Todoparrot </h2>

{{-- <ul>

	@foreach($errors->all() as $error)
	<li> {{$error}} </li>
	@endforeach

</ul> 
--}}

{!! Form::open( array( 'route' => 'contact_store', 'class' => 'form')) !!}

<div class = "form-group">
	{!! Form::label('Your Name') !!}
	{!! Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your name')) !!}

</div>

<div class = "form-group">
	{!! Form::label('Your Email') !!}
	{!! Form::text('email', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your email Address')) !!}
	
</div>

<div class = "form-group">
	{!! Form::label('Your Message') !!}
	{!! Form::textarea('message', null, array('required', 'class' => 'form-control', 'placeholder' => 'Your mesasge')) !!}
	
</div>

<div class = "form-group">
	{!! Form::submit('Contact Us!', array('class' => 'btn btn-primary')) !!}
	
</div>

{!! Form::close() !!}

@endsection