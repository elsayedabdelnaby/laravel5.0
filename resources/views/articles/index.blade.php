@extends('app')

@section('content')
	<h1>Articles</h1>

	<hr>

	@foreach($articles as $article)
		<h2>{{ $article->title }}</h2>
		<div class="body">{{ $article->body }}</div>
	@endforeach
	
@stop
