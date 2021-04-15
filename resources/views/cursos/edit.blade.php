@extends('layouts.plantilla')

@section('title','Cursos edit')
    
@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    <form action="{{route("cursos.update", $curso)}}" method="POST">
        @csrf
        
        @method('put')

        <label>
            Nombre:
            <input type="text" name="name" value="{{$curso->name}}">
        </label>
        <br>
        <label>
            Descripcion:
            <textarea rows="5" name="descripcion">{{$curso->descripcion}}</textarea>
        </label>
        <br>
        <label>
            Categoria:
            <input type="text" name="categoria" value="{{$curso->categoria}}">
        </label>

        <input type="submit" value="Enviar form">
    </form>
@endsection
