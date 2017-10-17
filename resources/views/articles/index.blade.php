@extends('app')

@section('content')
	<h1>Articles</h1>

	<hr>

	@foreach($articles as $article)
		<h2>
			<a href=""> {{ $article->title }}</a>
		</h2>
		
		<div class="body">{{ $article->body }}</div>
	@endforeach

@stop
