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
        @csrf
        <input type="text" id="name" class="fadeIn first" name="name" placeholder="Name">
        <input type="text" id="email" class="fadeIn first" name="email" placeholder="Email">
        <input type="text" id="phone" class="fadeIn first" name="phone" placeholder="Phone">
        <input type="password" id="password" class="fadeIn second" name="password" placeholder="Password">
        <input type="password" id="password-confirm" class="fadeIn second" name="password-confirm" placeholder="Confirm Password">
        <input type="submit" class="fadeIn third" value="Sign In">
      </form>
    </div>
    <div id="foundation" class="container tab-pane fade"><br>
      <!-- Sign in Foundation Form -->
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" id="name" class="fadeIn first" name="name" placeholder="Foundation Name">
        <input type="text" id="email" class="fadeIn first" name="email" placeholder="Email">
        <input type="text" id="phone" class="fadeIn first" name="phone" placeholder="Phone">
        <input type="text" id="address" class="fadeIn first" name="address" placeholder="Address">
        <input type="text" id="password" class="fadeIn second" name="password" placeholder="Password">
        <input type="text" id="password" class="fadeIn second" name="password" placeholder="Confirm Password">
        <input type="submit" class="fadeIn third" value="Sign In">
      </form>
    </div>
  </div>
</div>
@endsection
