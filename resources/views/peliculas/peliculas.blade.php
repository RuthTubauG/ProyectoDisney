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

<h2 class="titulo">PELÍCULAS DISNEY &#129293;</h2>
<div id="padre">
    <div class="card">
        <h1>1</h1>
        <h3>Película; El Rey León</h3>
        <h4>Ditribución; Walt Disney Productions</h4>
        <h5>Año; 1994</h5>
        <img class="imagen" src="https://blogpara25.files.wordpress.com/2021/03/3512617be12f9a804e546305927420bb.jpg" alt="error">
    </div>

    <div class="card">
        <h1>2</h1>
        <h3>Película; La Sirenita</h3>
        <h4>Ditribución; Walt Disney Productions</h4>
        <h5>Año; 1989</h5>
        <img class="imagen" src="https://play-lh.googleusercontent.com/B-U6u-jY7Z1XBzl2-jjozZM3sNbbC_qrl9Y-D5uuxA_TqQR3ZDYhx-yqMidfM26lqvg" alt="error">
    </div>

    <div class="card">
        <h1>3</h1>
        <h3>Película; Bambi</h3>
        <h4>Ditribución; Walt Disney Productions</h4>
        <h5>Año; 1942</h5>
        <img class="imagen" src="https://images.justwatch.com/poster/99655634/s718/bambi.jpg" alt="error">
    </div>

    <div class="card">
        <h1>4</h1>
        <h3>Película; Mickey's House of Villains</h3>
        <h4>Ditribución; Walt Disney Productions</h4>
        <h5>Año; 2002</h5>
        <img class="imagen" src="https://i.pinimg.com/736x/6a/96/1e/6a961e7025a7ae456b75c03aee93280f.jpg" alt="error">
    </div>

    <div class="card">
        <h1>5</h1>
        <h3>Película; La Dama Y El Bagabundo</h3>
        <h4>Ditribución; Walt Disney Productions</h4>
        <h5>Año; 1955</h5>
        <img class="imagen" src="https://4.bp.blogspot.com/_2ucMreS1bpQ/TOMMQJMOpEI/AAAAAAAAG1s/rtanXa6R-zM/s1600/La-Dama-y-el-Vagabundo-Walt-Disney.png" alt="error">
    </div>

    <div class="card">
        <h1>6</h1>
        <h3>Película; Lilo & Stitch</h3>
        <h4>Ditribución; Walt Disney Productions</h4>
        <h5>Año; 2002</h5>
        <img class="imagen" src="https://www.visitelche.com/wp-content/uploads/2022/07/Cine-Infantil-Lilo-Stitch-Cinema-dEstiu-Escorxador-Elx-Elche.jpg" alt="error">
    </div>
</div>

<br> <br>
<footer>
    <p>&copy; 2023 Todos los derechos reservados.</p>
</footer>

<a href="#" class="scroll-top"><i class="material-icons arrow">arrow_upward</i></a>


<script src="{{ asset('js/script.js') }}"></script>

