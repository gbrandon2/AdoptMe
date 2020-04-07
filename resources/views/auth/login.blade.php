@extends('layouts.login&signin')

@section('title')
<title>Log In Adoptme</title>
@endsection

@section('content')
<!-- Tabs Titles -->
<h2 class="fadeIn first">Login</h2>

<!-- Login Form -->
<form method="POST" action="{{ route('login') }}">
    @csrf
  <input type="text" id="email" class="fadeIn first @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"   autocomplete="email" autofocus placeholder="Email">
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  <input type="password" id="password" class="fadeIn second @error('password') is-invalid @enderror" name="password"  autocomplete="current-password" placeholder="Contrasena">
  @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>
  <input type="submit" class="fadeIn third" value="Log In">
</form>

<!-- Remind Passowrd -->
@if (Route::has('password.request'))
<div id="formFooter">
  <a class=" underlineHover btn" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a>
</div>
@endif
@endsection
