@extends('animal.layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-image: url(
            https://i.pinimg.com/1200x/da/86/ef/da86efb61b8e45d8dbaaa0835e6b608d.jpg);
        }
    </style>
</head>

@section('content')
        <h2 class="titulo">Actualiza un personaje</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('animal.update',$animal->id) }}" >
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label for="txtNombre">Nombre:</label>
            <input type="text" class="form-control" id="txtNombre" placeholder="Nombre" name="txtNombre" value="{{ $animal->nombre }}">
        </div>
        <div class="form-group">
            <label for="txtRaza">Tipo:</label>
            <input type="text" class="form-control" id="txtRaza" placeholder="Tipo" name="txtRaza" value="{{ $animal->raza }}">
        </div>
        <div class="form-group">
            <label for="txtDescripcion">Descripción:</label>
            <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="10" placeholder="Descripción">{{ $animal->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="txtImagen">Imagen:</label>
            <input type="text" class="form-control" id="txtImagen" placeholder="Imagen" name="txtImagen" value="{{ $animal->imagen }}">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
        <a class="btn btn-primary" href="{{ url('animal') }}"> Volver</a>
    </form>
@endsection