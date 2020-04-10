@extends('layout.layout')

@section('titulo','Modificar Servicio')

@section('contenido')
<h1 class="text-center">Modificar Servicio</h1>
<br><br>

@if ($errors->any())
    <div class="alert alert-danger">
        <div class="header"> <strong>Ups. =)</strong>Algo anda mal...</div>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
                
            @endforeach
        </ul>
    </div>
@endif

<br><br>

<form action="{{route('servicio.update', $servicio->id)}} " method="post">
    @csrf
    @method('PUT')

    
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Fecha: </label>
            <input type="date" class="form-control" name="fecha" value="{{$servicio->fecha}}">
        </div>
    </div>  

    <div class="form-row">
        <div class="form-group col-md-6">
            <label>descripcion:</label>
            <input type="text" class="form-control" name="descripcion" value="{{$servicio->descripcion}}">
        </div>
    </div>

    <div class="form-row">
        <button type="submit" class="btn btn-primary">Modificar Servicio</button>
    </div>

</form>
@endsection
