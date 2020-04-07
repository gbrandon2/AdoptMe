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
      <a class="nav-link active" data-toggle="tab" href="#person">Persona</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#foundation">Fundacion</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="person" class="container tab-pane active"><br>
      <!-- Sign In Person Form -->
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" id="name" class="fadeIn first" name="name" placeholder="Nombre">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" id="email" class="fadeIn first" name="email" placeholder="Email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" id="phone" class="fadeIn first" name="phone" placeholder="Telefono">
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" id="password" class="fadeIn second" name="password" placeholder="Contrasena">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" id="password-confirm" class="fadeIn second" name="password-confirm" placeholder="Confirmar Contrasena">
        <input type="submit" class="fadeIn third" value="Sign In">
      </form>
    </div>
    <div id="foundation" class="container tab-pane fade"><br>
      <!-- Sign in Foundation Form -->
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" id="name" class="fadeIn first" name="name" placeholder="Nombre de la Fundacion">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" id="email" class="fadeIn first" name="email" placeholder="Email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" id="phone" class="fadeIn first" name="phone" placeholder="Telefono">
        @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="text" id="address" class="fadeIn first" name="address" placeholder="Direccion">
        @error('address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" id="password" class="fadeIn second" name="password" placeholder="Contrasena">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input type="password" id="password-confirm" class="fadeIn second" name="password-confirm" placeholder="Confirmar Contrasena">
        <input type="submit" class="fadeIn third" value="Sign In">
      </form>
    </div>
  </div>
</div>
@endsection
