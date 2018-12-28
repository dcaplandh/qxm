@extends('layouts.global')
@section('title','Mis Proyectos')
@section('content')

  @foreach ($projects as $project)
    <h3>{{$project->name}}</h3>
    <p>Dirrección: {{$project->address->street??'sin aclarar'}}</p>
    <p>{{$project->inmediacy?'Con':'Sin'}} urgencia</p>
    <p>{{$project->f2f2f_budget?'Con':'Sin'}} presupuesto presencial</p>
  @endforeach

@endsection
