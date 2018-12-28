@extends('layouts.global')
@section('title','Nuevo Proyecto')
@section('content')
<div class="container">
<div class="row">

  @include('partials.project_menu', ['active' => 'data'])

  <form method="post" action="" class="col-12 col-md-6">
  @csrf
  {{-- <h4>{{$project->name}}</h4> --}}
  <h5>Definir dirección y posibles fechas</h5>
  <div class="row">

    <div class="col-11">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre de dirección</label>
        <input name="name" type="text" class="form-control" placeholder="Ej: Casa de mis padres">
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert" style="display:block;">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">País</label>
        <input name="country" type="text" class="form-control" placeholder="Ej: Argentina">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Provincia</label>
        <input name="province" type="text" class="form-control" placeholder="Ej: Buenos Aires">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Barrio</label>
        <input name="estate" type="text" class="form-control" placeholder="Ej: Caballito">
      </div>

      <div class="row">
        <div class="col-9 col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Calle</label>
            <input name="street" type="text" class="form-control" placeholder="Ej: Rivadavia">
          </div>
        </div>
        <div class="col-2 col-md-4">
          <div class="form-group">
            <label for="exampleInputEmail1">Nro de Calle</label>
            <input name="street_number" type="text" class="form-control" placeholder="Ej: 1234">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-4 col-md-2">
          <div class="form-group">
            <label for="exampleInputEmail1">Piso</label>
            <input name="floor" type="text" class="form-control" placeholder="Ej: 2">
          </div>
        </div>
        <div class="col-4 col-md-2">
          <div class="form-group">
            <label for="exampleInputEmail1">Departamento</label>
            <input name="house" type="text" class="form-control" placeholder="Ej: A">
          </div>
        </div>
        <div class="col-11 col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">Aclaración</label>
            <input name="extra" type="text" class="form-control" placeholder="Ej: El portero no funciona.">
            <small id="emailHelp" class="form-text text-muted">Datos que faciliten el encuentro.</small>
          </div>
        </div>
      </div>

    </div>
    <div class="col-12">
      <input type="hidden" name="project_id" value="{{session('project_id')??old('project_id')}}">
      <hr><br>
      <button type="submit" class="btn btn-success">Publicar proyecto</button>
    </div>
  </div>


</form>
</div>
</div>
<script>
  function toggle(este){
    var element = este;
    var check = element.parentElement.querySelector('input[type=checkbox]');
    if(check.checked){
      check.checked = false;
      element.style.backgroundColor = '#e5e5e5';
    }else{
      check.checked = true;
      element.style.backgroundColor = '#00b72a';
    }
  }
</script>
@endsection
