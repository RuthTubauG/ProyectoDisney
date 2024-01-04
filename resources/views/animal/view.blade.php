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


<div id="padre">
    @section('content')
        <h2 class="titulo">CRUD PERSONAJES DISNEY &#129293;</h2>

        <div class="card">
            <h1>{{ $animal->id }}</h1>
                <h3>{{ $animal->nombre }}</h3>
                <h4>{{ $animal->raza }}</h4>
                <p>{{ $animal->descripcion }}</p>
                <img class="img" src='{{ $animal->imagen }}' alt="error">
        </div>
        <a class="btn btn-default" href="{{ url('animal') }}"> Volver</a>

    @endsection
</div>