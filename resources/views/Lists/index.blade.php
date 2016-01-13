@extends('layouts.master')

@section('content')
<h1>
	Lists
</h1>
@if($lists->count() > 0)
<ul>
	@foreach($lists as $list)
		<li>{{$list->name}}</li>
		{{--<li>{{$list->description}}</li>--}}
	@endforeach
</ul>
@else
<p>
	No list found!. Please try again;
</p>
@endif
@endsection