@extends('layaouts.app')

@section('titulo','listado de Docentes')

@section('contenido')

    <h3>Listado de docentes</h3>

    {{--foreach es un ciclo o bucle especial para trabajar con arrays--}}
    {{--recorderis: existen ciclos como while, for, do while, foreach--}}
    <div class="row">{{--tenemos la fila--}}
    @foreach ($doc as $diaz)
        {{--para llamar informacion de php basta con interpolar las variables usando la doble llave--}}

    
        <div class="col-sm">{{--Abrimos columna--}}
            <div class="card text-center" style="width: 18rem; margin-top:30px">
                <img class="card-img-top mx-auto d-block" height="130" width="130" style="margin:20px" src="{{Storage::url($diaz->foto)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$diaz->nombres}}</h5>
                    <p class="card-text">{{$diaz->apellidos}}</p>
                    <p class="card-text">{{$diaz->titulo}}</p>
                    <p class="card-text">{{$diaz->cursoAsociado}}</p>
                    <a href="/docentes/{{$diaz->id}}" class="btn btn-danger">Ver más</a>
                </div>
            </div>
        </div>
    
    @endforeach
    </div>

@endsection