@extends('layaouts.app')

@section('titulo', 'Editar curso')

@section('contenido')

    <br>
    <h3 class="text-center">изменить курс</h3>
    <br>
    <form action="/cursos/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
        @method('PUT')  
        @csrf
        <div class="form-group">
            <label for="nombrecurso">Modifique el nombre del Curso</label>
            <input name="nombre" type="text" class="form-control" id="nombrecurso" value="{{$cursito->nombre}}">
        </div>
        <div class="form-group">
            <label for="descripcion">Modifique la Descripcion del Curso</label>
            <input name="descripcion" type="text" class="form-control" id="descripcion" value="{{$cursito->descripcion}}">
        </div>
        <div class="form-group">
            <label for="imagen">Cargar Nueva Imagen</label>
            <br>
            <input name="imagen" type="file" id="imagen">
        </div>
        <button type="submit" class="btn btn-danger">Actualizar</button>
    </form>

@endsection