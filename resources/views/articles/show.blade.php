@extends('app')

@section('content')

		<h2>
			<a href=""> {{ $article->title }}</a>
		</h2>
		
		<div class="body">{{ $article->body }}</div>

@stop
