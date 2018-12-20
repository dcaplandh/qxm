@extends('layouts.master')
@section('title','Nuevo Proyecto')
@section('content')
<div class="container">
<div class="row">
  <div class="col-12 col-md-3">
    <ul class="list-group">
      <li class="list-group-item active">Mis Proyectos</li>
      <li class="list-group-item">Dapibus ac facilisis in</li>
      <li class="list-group-item">Morbi leo risus</li>
      <li class="list-group-item">Porta ac consectetur ac</li>
      <li class="list-group-item">Vestibulum at eros</li>
    </ul>
  </div>
  <form method="post" action="" class="col-12 col-md-6">
  @csrf
  <div class="row">
    <div class="col-11 col-md-6">
      <div class="form-group">
        <label for="exampleFormControlInput1">Nombre del proyecto</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" id="exampleFormControlInput1" placeholder="Ej: Reparación de techo">
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>
    </div>
    <div class="col-11 col-md-4">
      <div class="form-group">
        <label for="exampleFormControlInput1">Fecha límite de subasta</label>
        <input type="date" name="end_date" value="{{old('end_date')}}" class="form-control {{ $errors->has('end_date') ? ' is-invalid' : '' }}" id="exampleFormControlInput1" placeholder="Ej: Reparación de techo">
        @if ($errors->has('end_date'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('end_date') }}</strong>
            </span>
        @endif
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-11">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Descripción</label>
        <textarea name="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}" id="exampleFormControlTextarea1" rows="3">{{old('description')}}</textarea>
        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
            </span>
        @endif
      </div>
    </div>
  </div>

  <div class="col-12 col-md-5">
    <div class="form-check" style="display:inline;">
      <input class="form-check-input" name="f2f_budget[]" type="checkbox" value="0" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Necesito presupuesto presencial
      </label>
    </div>

    <div class="form-check">
      <input class="form-check-input" name="inmediacy[]" type="checkbox" value="0" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">
        Urgencia! (menos de 24hs)
      </label>
    </div>
  </div>
  <div class="col-12 col-md-5">
    <button type="submit" class="btn btn-success">Crear proyecto</button>
  </div>


</form>
</div>
</div>
@endsection
