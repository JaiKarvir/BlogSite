
@extends('layouts.master')
@section('content')

<div class="col-sm-8 blog-main">

@foreach($posts as $post)
<div class="blog-post">
		<h2 class="blog-post-title">
			<a href="/posts/{{ $post->id}}">
			{{ $post->title }}
			</a>
		</h2>
		
		<p>{{ $post->body }}</p>
	</div>
@endforeach

</div>
@endsection
