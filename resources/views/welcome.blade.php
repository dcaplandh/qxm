<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            body{
              margin:0;
              padding:0;
            }
            .carrusel{
              height:80vh;
            }
            .container-fluid{
              padding: 0!important;
              margin:0!important;
            }
            .valores img{
              width: 60%;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        </head>
    <body>
        <div class="flex-left position-ref full-height">
            <div class="flex-start">
              <a href="/">
                <img style="width:200px;" src="/img/logo.jpg" alt="QPM">
              </a>
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content container-fluid"  style="margin-bottom:22px!important">

              @include('partials.carrousel')
            </div>

            <div class="container">

            <div class="row valores">
              <div class="col-12 col-md-4">
                <div class="row">
                  <div class="col-6">
                    <img src="/img/tiempos.jpg" alt="24 horas">
                  </div>
                  <div class="col-6">
                    <h3 class="text-left">Siempre disponible</h3>
                    <h5 class="text-left">Encontrá la solución a toda hora, ahorrando tiempo y dinero</h5>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="row">
                  <div class="col-6">
                    <img src="/img/confianza.jpg" alt="confianza">
                  </div>
                  <div class="col-6">
                    <h3 class="text-left">Máxima confianza</h3>
                    <h5 class="text-left">Profesionales verificados y aprobados por QPM</h5>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4">
                <div class="row">
                  <div class="col-6">
                    <img src="/img/tarjetas.jpg" alt="pagos">
                  </div>
                  <div class="col-6">
                    <h3 class="text-left">Financia tus pagos</h3>
                    <h5 class="text-left">Pagá online con tarjetas y cuotas</h5>
                  </div>
                </div>
              </div>
            </div>




        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>
