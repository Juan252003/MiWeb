@extends('layaouts.app')

@section('titulo','Registrar docente')

@section('contenido')

    <br>
    <h3>росіяни мк</h3>
    <br>
    <form action="/docentes" method="POST" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
            @foreach ($errors->all() as $alerta)
                <div class="alert alert-danger" role="alert">
                    <ul>
                        <li>{{$alerta}}</li>
                    </ul>
                </div>
                
            @endforeach
        @endif

        <div class="form-group">
            <label for="nombredocente">Nombre del Docente</label>
            <input name="nombres" type="text" class="form-control" id="nombredocente">
        </div>
        <div class="form-group">
            <label for="apellidodocente">Apellidos del Docente</label>
            <input name="apellidos" type="text" class="form-control" id="apellidodocente">
        </div>
        <div class="form-group">
            <label for="foto">Cargar Foto del docente</label>
            <br>
            <input name="foto" type="file" id="foto">
        </div>
        <div class="form-group">
            <label for="titulo">Titulo del Docente</label>
            <input name="titulo" type="text" class="form-control" id="titulo">
        </div>
        <div class="form-group">
            <label for="cursoasociado">Curso del Docente</label>
            <input name="cursoAsociado" type="text" class="form-control" id="cursoasociado">
        </div>
        <button type="submit" class="btn btn-danger">Registrar</button>
    </form>

@endsection