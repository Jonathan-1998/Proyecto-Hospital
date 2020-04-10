@extends('layout.layout')

@section('titulo')
   Detalle de Servicio

@endsection

@section('contenido')
   <h1 class="text-center"> Detalle de servicio</h1> 
   <br><br>
   <div class="row">
    <h4>Fecha : </h4>
    <div class="col-sm-3">
    <p class="lead">{{$servicio->nombre}}</p>
</div>
</div>

<br>

<div class="row">
            <h4>Descripcion : </h4>
            <div class="col-sm-3">
            <p class="lead">{{$servicio->descripcion}}</p>
        </div>
</div>

<br><br>

<div class="row">
    <a href=" {{route('servicio.index')}}"><button class="btn btn-primary">Volver</button></a>
 </div>
@endsection