@extends('layouts.plantilla')

@section('title','Cursos create')
    
@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <form action="{{route("cursos.store")}}" method="POST">
        @csrf
        
        <label>
            Nombre:
            <input type="text" name="name">
        </label>
        <br>
        <label>
            Descripcion:
            <textarea rows="5" name="descripcion"></textarea>
        </label>
        <br>
        <label>
            Categoria:
            <input type="text" name="categoria">
        </label>

        <input type="submit" value="Enviar form">
    </form>
@endsection
