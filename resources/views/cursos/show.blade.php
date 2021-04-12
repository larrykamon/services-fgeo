@extends('layouts.plantilla')

@section('title',$curso->name)
    
@section('content')
    <h1>Bienvenido al curso: {{$curso->name}}</h1>
    
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <br>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
@endsection
