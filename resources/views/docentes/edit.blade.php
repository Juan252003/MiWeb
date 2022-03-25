@extends('layaouts.app')

@section('titulo', 'Editar Docentes')

@section('contenido')

    <br>
    <h3 class="text-center">изменить курс</h3>
    <br>
    <form action="/docentes/{{$doc->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')  
        @csrf
        <div class="form-group">
            <label for="nombredocente">Modifique el nombre del Docentes</label>
            <input name="nombres" type="text" class="form-control" id="nombredocente" value="{{$doc->nombres}}">
        </div>
        <div class="form-group">
            <label for="apellidosdocente">Modifique los apellidos del Docente</label>
            <input name="apellidos" type="text" class="form-control" id="descripcion" value="{{$doc->apellidos}}">
        </div>
        <div class="form-group">
            <label for="foto">Cargar Nueva foto</label>
            <br>
            <input name="foto" type="file" id="foto">
        </div>
        <div class="form-group">
            <label for="titulo">Modifique titulo del docente</label>
            <input name="titulo" type="text" class="form-control" id="titulo" value="{{$doc->titulo}}">
        </div>
        <div class="form-group">
            <label for="cursoasociado">Modifique el curso del Docentes</label>
            <input name="cursoAsociado" type="text" class="form-control" id="cursoasociado" value="{{$doc->cursoAsociado}}">
        </div>

        <button type="submit" class="btn btn-danger">Actualizar</button>
    </form>

@endsection