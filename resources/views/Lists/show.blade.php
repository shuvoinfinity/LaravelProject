@extends('layouts.master')
@section('content')
<div class="page-header">
  <h1>Name: <small> {{$list->name or 'Your Name'}} </small></h1>
</div>
<p >
	Created on: {{$list->created_at}}
	Last Modified: {{$list->updated_at}} <br\>
</p>

<blockquote>
<p>
	Description: {{$list->description}}
</p>
</blockquote>

<h2>tasks</h2>

@if($list->tasks->count()>0)
<ul>
	@foreach($list->tasks as $task)
	<li>
		{{$task->name}}
	</li>
	<li>
		{{$task->description}}
	</li>
	@endforeach
</ul>
@else
<p>
	you haven't created any tasks.
	<a href="{{URL::route('lists.tasks.create', [$list->id])}}" class='btn btn-primary'>
		Create a task
	</a>
</p>
@endif
@endsection