@extends('layouts.global')
@section('title','QXM - Login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6">
            <div class="">
                <h2 class="text-center font-weight-bold font-italic">Ingresar</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row d-flex justify-content-center">
                            <label for="email" class="col-12 col-form-label text-center">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row d-flex justify-content-center">
                            <label for="password" class="col-12 col-form-label text-center">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">



                                <button type="submit" class="btn btn-danger btn-pink">
                                    Iniciar sesión
                                </button>



                            </div>
                        </div>
                    </form>

                </div>
                <div class="text-center">
                  <h6 class="text-center">¿Aún no tenés una cuenta? <a href="/register">Registrate</a></h6>
                  @if (Route::has('password.request'))
                      <a class="btn btn-link text-center" href="{{ route('password.request') }}">
                          No recuerdo mi contraseña
                      </a>
                  @endif
                </div>
            </div>
        </div>
    </div>
@endsection
