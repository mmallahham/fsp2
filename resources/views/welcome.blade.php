
@extends('main.header') 
@section('content')

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<!-- Brand -->
<a class="navbar-brand" href="#">Navbar</a>

<!-- Toggler/collapsibe Button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
  <span class="navbar-toggler-icon"></span>
</button>

<!-- Navbar links -->
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link</a>
    </li> 
  </ul>
</div> 
</nav>
<div class="container">
  <div class="row">
    <div class="filler text-center">
      <div class=" bg-primary form-header">header </div>
      <p>Lorem ipsum...</p><br><br><br><br><br><br><br>
    </div>
  </div>
</div>
@endsection
