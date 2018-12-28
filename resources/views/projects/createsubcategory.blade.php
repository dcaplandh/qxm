@extends('layouts.global')
@section('title','Nuevo Proyecto')
@section('content')
  <link href="/css/multi.css" rel="stylesheet" />
  <script src="/js/multi.js"></script>
<div class="container">
<div class="row">
@php
  if($project){
    session(['types' => $project->types]);
  }
@endphp
  @include('partials.project_menu', ['active' => 'sub'])

  <form method="post" action="" class="col-12 col-md-6">
  @csrf
  {{-- <h4>{{$project->name}}</h4> --}}
  <h5>Seleccionar subcategorías</h5>
  <div class="row">
    @if ($errors->has('subtypes'))
        <span class="invalid-feedback" role="alert" style="display:block;">
            <strong>{{ $errors->first('subtypes') }}</strong>
        </span>
    @endif
    <div class="col-12">
      <select name="subtypes[]" multiple="multiple" id="subtypes">
        @foreach (session('types') as $type)
          @foreach ($type->subtypes as $sub)
            <option value="{{$sub->id}}">{{$type->name}} - {{$sub->name }}</option>
          @endforeach
        @endforeach
        <button type="button" onclick="toggle(this)" class="btn btn-default btn-circle">
          <img src="/img/gas.png" alt="Gasista">
        </button>
        <input type="checkbox" value="1" name="types[]" style="display:none">
    </div>

    <div class="col-12">
      <input type="hidden" name="project_id" value="{{session('project_id')??old('project_id')}}">
      <hr><br>
      <button type="submit" class="btn btn-success">Asignar subcategorías</button>
    </div>
  </div>


</form>
</div>
</div>
<script>
    var select = document.getElementById('subtypes');
    multi(select, {
        enable_search: false
    });
</script>
@endsection
