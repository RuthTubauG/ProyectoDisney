<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- mi css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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

<h2 class="titulo">JUGUETES DISNEY &#129293;</h2>

<div id="padre">
    <div class="card">
        <h1>1</h1>
        <h3>Peluche Minnie Mouse</h3>
        <h5>Precio; 30,90€</h5>
        <img class="imagen" src="https://cdn.s7.shopdisney.eu/is/image/DisneyStoreES/415157297621?fmt=webp&qlt=70&wid=652&hei=652" alt="error">
    </div>

    <div class="card">
        <h1>2</h1>
        <h3>Peluche Sulley</h3>
        <h5>Precio; 25,90€</h5>
        <img class="imagen" src="https://cdn.s7.shopdisney.eu/is/image/DisneyStoreES/415157296143?fmt=webp&qlt=70&wid=652&hei=652" alt="error">
    </div>

    <div class="card">
        <h1>3</h1>
        <h3>Peluche Elsa</h3>
        <h5>Precio; 25,90€</h5>
        <img class="imagen" src="https://cdn.s7.shopdisney.eu/is/image/DisneyStoreES/412333627883?fmt=webp&qlt=70&wid=652&hei=652" alt="error">
    </div>

    <div class="card">
        <h1>4</h1>
        <h3>Peluche Dumbo</h3>
        <h5>Precio; 45€</h5>
        <img class="imagen" src="https://cdn.s7.shopdisney.eu/is/image/DisneyStoreES/415167296898?fmt=webp&qlt=70&wid=652&hei=652" alt="error">
    </div>

    <div class="card">
        <h1>5</h1>
        <h3>Peluche Mufasa</h3>
        <h5>Precio; 32,90€</h5>
        <img class="imagen" src="https://cdn.s7.shopdisney.eu/is/image/DisneyStoreES/415157429220?fmt=webp&qlt=70&wid=652&hei=652" alt="error">
    </div>

    <div class="card">
        <h1>6</h1>
        <h3>Peluche Stitch</h3>
        <h5>Precio; 30,90€</h5>
        <img class="imagen" src="https://cdn.s7.shopdisney.eu/is/image/DisneyStoreES/415157299298?fmt=webp&qlt=70&wid=652&hei=652" alt="error">
    </div>
</div>

<br> <br>
<footer>
    <p>&copy; 2023 Todos los derechos reservados.</p>
</footer>

<a href="#" class="scroll-top"><i class="material-icons arrow">arrow_upward</i></a>

<script src="{{ asset('js/script.js') }}"></script>