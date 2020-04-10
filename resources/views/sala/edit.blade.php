@extends('layout.layout')

@section('titulo','Modificar Sala')

@section('contenido')
<h1 class="text-center">Modificar Sala</h1>
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

<form action="{{route('sala.update', $sala->id)}} " method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
        <div class="form-group col-md-6">
            <label>Nombre de Sala:</label>
            <input type="text" class="form-control" name="nombre" value="{{$sala->nombre}}">
        </div>
    </div>

        <div class="form-row">
        <div class="form-group col-md-6">
            <label>Cantidad de camas:</label>
            <input type="number" class="form-control" name="cantidad_camas" value="{{$sala->cantidad_camas}}">
        </div>
    </div>  

    <div class="form-row">
        <button type="submit" class="btn btn-primary">Modificar Sala</button>
    </div>

</form>
@endsection
