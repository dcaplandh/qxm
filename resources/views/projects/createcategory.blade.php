@extends('layouts.global')
@section('title','Nuevo Proyecto')
@section('content')
<div class="container">
<div class="row">
  @include('partials.project_menu', ['active' => 'category'])
  <form method="post" action="" class="col-12 col-md-6">
  @csrf
  {{-- <h4>{{$project->name}}</h4> --}}
  <h5>Seleccionar categoría</h5>
  <div class="row">
    @if ($errors->has('types'))
        <span class="invalid-feedback" role="alert" style="display:block;">
            <strong>{{ $errors->first('types') }}</strong>
        </span>
    @endif
    <div class="col-12 col-sm-6 col-md-4 col-xl-3 servicio-img">
        <button type="button" onclick="toggle(this)" class="btn btn-default btn-circle">
          <img src="/img/gas.png" alt="Gasista">
        </button>
        <input type="checkbox" value="1" name="types[]" style="display:none">
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-xl-3 servicio-img">
        <button type="button" onclick="toggle(this)" class="btn btn-default btn-circle">
          <img src="/img/plomeria.png" alt="plomeria">
        </button>
        <input type="checkbox" value="2" name="types[]" style="display:none">
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-xl-3 servicio-img">
        <button type="button" onclick="toggle(this)" class="btn btn-default btn-circle">
          <img src="/img/cerrajeria.png" alt="cerrajeria">
        </button>
        <input type="checkbox" value="6" name="types[]" style="display:none">
    </div>
    <div class="col-12">
      <input type="hidden" name="project_id" value="{{session('project_id')??old('project_id')}}">
      <hr><br>
      <button type="submit" class="btn btn-success">Asignar categorías</button>
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
