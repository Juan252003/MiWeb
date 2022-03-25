{{--Para poder heredar la plantilla necesito usar @extends--}}
@extends('layaouts.app')

@section('titulo','Crear registro')

@section('contenido')

    <br>
    <h3>росіяни мк</h3>
    <br>
    <form action="/cursos" method="POST" enctype="multipart/form-data">
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
            <label for="nombrecurso">Nombre del Curso</label>
            <input name="nombre" type="text" class="form-control" id="nombrecurso">
        </div>
        <div class="form-group">
            <label for="descripcion">Descripcion del Curso</label>
            <input name="descripcion" type="text" class="form-control" id="descripcion">
        </div>
        <div class="form-group">
            <label for="imagen">Cargar Imagen</label>
            <br>
            <input name="imagen" type="file" id="imagen">
        </div>
        <button type="submit" class="btn btn-danger">Crear</button>
    </form>

@endsection
{{---
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <title>Laravel</title>
    </head>

    <body>
        --}}
        {{--Bootstrap requiere un dic container para mostrar 
        los elementos centrados y ordenados--}}
        {{--
        <div class="container">
            <br>
            <h3>Crear nuevo Cursos</h3>
            <br>
            <form action="/cursos" method="post">
                @csrf
                <div class="form-group">
                    <label for="nombrecurso">Nombre del Curso</label>
                    <input name="nombre" type="text" class="form-control" id="nombrecurso">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion del Curso</label>
                    <input name="descripcion" type="text" class="form-control" id="descripcion">
                </div>
                <button type="submit" class="btn btn-danger">Crear</button>
            </form>
        </div>

    </body>
</html>
--}}