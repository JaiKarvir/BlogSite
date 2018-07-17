<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
  <a class="navbar-brand" href="#">Blogging Site</a>


  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="/about">About us</a>
    </li>

@if(!Auth::check())
    <div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Sign In/Up
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/login">Sign In</a>
        <a class="dropdown-item" href="/register">Register</a>
      </div>
    </div>
@else
 <li class="nav-item">
      <a class="nav-link" href="/posts/create">Create Post</a>
    </li>
<div class="dropdown">
      <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       Welcome {{ Auth::user()->name}}
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="/logout">Logout</a>
      </div>
    </div>
 @endif
  </ul>

</nav>