@extends('layouts.app')
<head>
    <title>Login Adoptme</title>
    <!-- Style Sheet -->
    <link rel="stylesheet" href="/login&signin.css">
</head>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="wrapper fadeInDown">
              <div id="formContent">

                <!-- Tabs Titles -->
                <h2 class="fadeIn first">Login</h2>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                  <input type="text" id="email" class="fadeIn first form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}"  required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                  <input type="text" id="password" class="fadeIn second form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
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

                  <input type="submit" class="fadeIn third btn btn-primary" value="Log In">

                </form>


<!-- Remind Passowrd 
                <form method="POST" action="{{ route('login') }}">
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                </form>-->

                <!-- Remind Passowrd -->
                @if (Route::has('password.request'))
                <div id="formFooter">            
                        <a class=" underlineHover btn" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                @endif

              </div>
            </div>



        </div>
    </div>
</div>
@endsection
