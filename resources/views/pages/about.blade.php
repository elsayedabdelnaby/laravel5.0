@extends('app')

@section('content')
    <h1>About Me: Elsayed Alaraby</h1>
    @if (count($people))
    <h3>People I Like:</h3>
    <ul>
    	@foreach($people as $person)
    		<li>{{ $person }}</li>
    	@endforeach
    </ul>
    @endif
    <p>
    	is WebDeveloper, CRM Specialist & Trainer
    </p>
@stop