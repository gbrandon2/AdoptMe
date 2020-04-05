@extends('layouts.login&signin')

@section('title')
<title>Log In Adoptme</title>
@endsection

@section('content')
<!-- Tabs Titles -->
<h2 class="fadeIn first">Login</h2>

<!-- Login Form -->
<form>
  <input type="text" id="login" class="fadeIn first" name="login" placeholder="Email">
  <input type="text" id="password" class="fadeIn second" name="login" placeholder="Password">
  <input type="submit" class="fadeIn third" value="Log In">
</form>

<!-- Remind Passowrd -->
<div id="formFooter">
  <a class="underlineHover" href="#">Forgot Password?</a>
</div>
@endsection
