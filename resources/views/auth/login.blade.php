@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="wrap-form-signin">
        <form method="POST" action="{{ route('login') }}" class="form-signin">
            @csrf

            <a href="{{ url('/') }}">
                <img class="mb-4 d-block mr-auto ml-auto" src="{{ asset('images/grindda-logo.png')}}" class="img-fluid" alt="" width="200">
            </a>

            <div class="form-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Dirección de correo electrónico" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="form-group p-2">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label text-muted" for="remember">
                                {{ __('Recuérdame') }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link d-block text-right" href="{{ route('password.request') }}">
                            <small>{{ __('Olvidaste tu contraseña?') }}</small>
                        </a>
                    @endif
                </div>
            </div>

            <div class="form-group mb-0">
                <button type="submit" class="btn btn-primary">
                    {{ __('Iniciar sesión') }}
                </button>
            </div>
            <p class="small-text muted mt-5 text-center">
                &copy; <span class="company">SENNOVA</span> {{ date('Y') }}
            </p>
        </form>
    </div>
</div>
@endsection
