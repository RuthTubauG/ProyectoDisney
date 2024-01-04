@extends('animal.layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            background-image: url(
            https://i.pinimg.com/1200x/da/86/ef/da86efb61b8e45d8dbaaa0835e6b608d.jpg);
        }
    </style>
</head>

<section id="inicio">
        <div class="contenido">
            <header>
                <div class="contenido-header">
                <div class="imagen-izquierda">
                    <a href="{{ url('/') }}">
                        <img id="logo" src="https://www.edigitalagency.com.au/wp-content/uploads/Disney-logo-white-png.png" alt="Logo">
                    </a>
                </div>

                    <nav id="nav" class="">
                        <ul id="links">
                        <li><a href="{{ url('/') }}" class="seleccionado" onclick="seleccionar(this)">INICIO</a></li>
                            <li><a href="{{ url('animal') }}" onclick="seleccionar(this)">PERSONAJES</a></li>
                            <li><a href="{{ url('juguetes') }}" onclick="seleccionar(this)">JUGUETES</a></li>
                            <li><a href="{{ url('disfraces') }}" onclick="seleccionar(this)">DISFRACES</a></li>
                            <li><a href="{{ url('peliculas') }}" onclick="seleccionar(this)">PELÍCULAS</a></li>
                        </ul>
                    </nav>
                    <div id="icono-nav" onclick="responsiveMenu()">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                    <div class="redes">
                        <i class="fa-solid fa-magnifying-glass fa-xl" style="color: #ffffff;"></i>
                        <i class="fa-solid fa-bag-shopping fa-xl" style="color: #ffffff;"></i>
                    </div>
                </div>
            </header>
        </div>
    </section>

    <h2 class="titulo">PERSONAJES DISNEY &#129293;</h2>
@section('content')
    <a class="btn btn-success" href="{{ route('animal.create') }}">Añadir</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div id="padre">
        @php
        @endphp
        @foreach ($animals as $animal)

        <div class="card">
            <h1>{{ $animal->id }}</h1>
                <h3>{{ $animal->nombre }}</h3>
                <h4>{{ $animal->raza }}</h4>
                <p>{{ $animal->descripcion }}</p>
                <img class="img" src='{{ $animal->imagen }}' alt="error">
                    <form action="{{ route('animal.destroy',$animal->id) }}" method="POST" onsubmit="return confirmarEliminacion()">
                        <a class="btn btn-info" href="{{ route('animal.show',$animal->id) }}">Ver</a>
                        <a class="btn btn-primary" href="{{ route('animal.edit',$animal->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
            </div>
        @endforeach
    </div>

    <br> <br>
    <footer>
        <p>&copy; 2023 Todos los derechos reservados.</p>
    </footer>

    <a href="#" class="scroll-top"><i class="material-icons arrow">arrow_upward</i></a>
@endsection
