@extends('layouts.master')

@section('content')
		<h1>Welcome to TODOParrot</h1>
			
			<u>
				@foreach($datas as $data)
					<li>
						{{$data}}
					</li>
				@endforeach
			</u>
			<hr>

			@if (count($lists) > 1)
			<ul>
				@foreach ($lists as $list)
				<li>{{ $list }}</li>
				@endforeach
			</ul>
			@elseif (count($lists) == 1)
			<p>
				You have one list: {{ $lists[0] }}.
			</p>
			@else
			<p>You don't have any lists saved.</p>
			@endif
		</ul>
@endsection

@section('advertisement')
	<table class= "table boederless">
		@foreach($datas as $data)
			@include('row', array('link'=> $data))
		@endforeach
	</table>
	<p>
		Buy Space
	</p>
@endsection
