@extends('layouts.master')

@section('content')
 <div class="col-sm-8 blog-main">
<h2>Publish a Post</h2>
<hr/>
<form method="POST" action="/posts">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="blogTitle">Title : </label>
    <input type="text" class="form-control" id="blogTitle" name="title" >
  </div>

  <div class="form-group">
    <label for="blogBody">Body : </label>
    <textarea class="form-control" id="blogBody" name="body" ></textarea> 
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
  </div>


 @include('layouts.errors')
</form>
</div>


@endsection