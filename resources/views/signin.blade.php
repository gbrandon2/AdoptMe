@extends('layouts.login&signin')

@section('title')
<title>Sign In Adoptme</title>
@endsection

@section('content')
<div class="container">
  <h2 class="fadeIn first">Sign In</h2>
  <br>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs fadeIn first" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#person">Person</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#foundation">Foundation</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="person" class="container tab-pane active"><br>
	    <!-- Sign In Person Form -->
	    <form method="POST" action="{{ route('register') }}">
	      <input type="text" id="name" class="fadeIn first" name="login" placeholder="Name">
	      <input type="text" id="email" class="fadeIn first" name="login" placeholder="Email">
	      <input type="text" id="phone" class="fadeIn first" name="login" placeholder="Phone">
	      <input type="text" id="password" class="fadeIn second" name="login" placeholder="Password">
	      <input type="text" id="password" class="fadeIn second" name="login" placeholder="Confirm Password">
	      <input type="submit" class="fadeIn third" value="Sign In">
	    </form>
    </div>
    <div id="foundation" class="container tab-pane fade"><br>
	    <!-- Sign in Foundation Form -->
	    <form>
	      <input type="text" id="login" class="fadeIn first" name="login" placeholder="Foundation Name">
	      <input type="text" id="login" class="fadeIn first" name="login" placeholder="Email">
	      <input type="text" id="login" class="fadeIn first" name="login" placeholder="Phone">
	      <input type="text" id="login" class="fadeIn first" name="login" placeholder="Address">
	      <input type="text" id="password" class="fadeIn second" name="login" placeholder="Password">
	      <input type="text" id="password" class="fadeIn second" name="login" placeholder="Confirm Password">
	      <input type="submit" class="fadeIn third" value="Sign In">
	    </form>
    </div>
  </div>
</div>
@endsection
