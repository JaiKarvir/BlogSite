	@extends('layouts.master')

	@section('content')
	<div class="col-sm-8 blog-main">
		<h1>{{ $post->title }}</h1>
		<p>{{ $post->body }}</p>
		

		<div class="comments">
			<ul class="list-group">
				@foreach($post->comments as $comment)

				<li class="list-group-item">
					<strong> {{ $comment->created_at->diffForHumans() }} : &nbsp </strong>
					{{ $comment->body }}	
				</li>
				@endforeach
			</ul>
		</div>
		
		<hr/>
		
		<div class="card">
			<div class="card-body">
				<form method="POST" action="/posts/{{ $post->id }}/comments">
					{{ csrf_field() }}
					<div class="form-group">
						<textarea class="form-control" id="comment" name="comment" placeholder="Your comment here" ></textarea> 
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Add Comment</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	@endsection