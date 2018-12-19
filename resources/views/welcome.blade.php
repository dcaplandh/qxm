@extends('layouts.logout')
@section('title','QXM')
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

@section('content')


        <div class="flex-left position-ref full-height">

            <div class="content container-fluid"  style="margin-bottom: 22px!important;padding: 0;">

              @include('partials.carrousel')
            </div>

            <div class="container">

              {{--  VALORES --}}
            <div class="row valores">

              <div class="col-12 col-md-4 padding-cero">
                <div class="row">
                  <div class="col-5 offset-1 padding-cero">
                    <img src="/img/debit-card.png" alt="Tarjetas">
                  </div>
                  <div class="col-5 padding-cero">
                    <h3 class="text-left">Financia tus pagos</h3>
                    <h5 class="text-left">Pagá online con tarjetas y cuotas</h5>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4 padding-cero">
                <div class="row">
                  <div class="col-5 offset-1 padding-cero">
                    <img src="/img/24-hours.png" alt="Confianza y vericidad">
                  </div>
                  <div class="col-5 padding-cero">
                    <h3 class="text-left">Siempre disponible</h3>
                    <h5 class="text-left">Encontrá la solución a toda hora, ahorrando tiempo y dinero</h5>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4 padding-cero">
                <div class="row">
                  <div class="col-5 offset-1 padding-cero">
                    <img src="/img/reliability.png" alt="24 Horas">
                  </div>
                  <div class="col-5 padding-cero">
                    <h3 class="text-left">Máxima confianza</h3>
                    <h5 class="text-left">Profesionales verificados y aprobados por QXM</h5>
                  </div>
                </div>
              </div>

            </div>
              {{--  FIN VALORES --}}


                {{--  explicaciones  --}}
                <div class="row explain">

                  <div class="col-12 col-md-6 padding-cero">
                    <div class="explain-title explain-title-left explail-left">
                      ¡Conseguí un profesional a tu medida en 3 simples pasos!
                    </div>
                    <div class="row explain-text">
                      <div class="col-2"><span class="badge badge-danger explain-ball explail-left">1</span></div>
                      <div class="col-9 padding-cero">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="row explain-text">
                      <div class="col-2"><span class="badge badge-danger explain-ball explail-left">2</span></div>
                      <div class="col-9 padding-cero">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="row explain-text">
                      <div class="col-2"><span class="badge badge-danger explain-ball explail-left">3</span></div>
                      <div class="col-9 padding-cero">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                  </div>
                  <div class="col-11 col-md-5 explain-video-left">
                    <video width="100%" controls>
                      <source src="https://www.youtube.com/watch?v=gCLBvIyD2Bw">
                      Your browser does not support HTML5 video.
                    </video>
                  </div>



                </div>

                <div class="row explain">

                  <div class="col-11 col-md-5 explain-video-right">
                    <video width="100%" controls>
                      <source src="https://www.youtube.com/watch?v=gCLBvIyD2Bw">
                      Your browser does not support HTML5 video.
                    </video>
                  </div>
                  <div class="col-12 col-md-6 padding-cero">
                    <div class="explain-title  explain-title-right explail-right">
                      ¡Conseguí un profesional a tu medida en 3 simples pasos!
                    </div>
                    <div class="row explain-text">
                      <div class="col-2"><span class="badge badge-danger explain-ball explail-right">1</span></div>
                      <div class="col-9 padding-cero">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="row explain-text">
                      <div class="col-2"><span class="badge badge-danger explain-ball explail-right">2</span></div>
                      <div class="col-9 padding-cero">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                    <div class="row explain-text">
                      <div class="col-2"><span class="badge badge-danger explain-ball explail-right">3</span></div>
                      <div class="col-9 padding-cero">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                    </div>
                  </div>




                </div>

                {{--  fin explicaciones --}}
        </div>


  </div>

@include('partials.prices')

@include('partials.footer_logout')
@endsection
