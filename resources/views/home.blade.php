<!DOCTYPE html>
    
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- mi css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body>
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

    <div class="slider">
        <div class="slide"><img src="https://wallpapers.com/images/hd/animated-disney-castle-has6vy47k75d0bzs.jpg" alt="Imagen 1"></div>
        <div class="slide"><img src="https://d.wattpad.com/story_parts/337918556/images/14cdf709946e7714827081619259.jpg" alt="Imagen 2"></div>
        <div class="slide"><img src="https://fondosmil.com/fondo/50754.jpg" alt="Imagen 3"></div>
        <div class="slide"><img src="https://i.pinimg.com/originals/60/73/54/60735465454a76319248d92212e3a6f6.jpg" alt="Imagen 4"></div>
        <div class="slide"><img src="https://ae01.alicdn.com/kf/S6610d97516fa477599d30fec1b944662n/Monsters-Inc-Sulley-foto-de-fondo-para-ni-os-fiesta-de-primer-cumplea-os-ojos-grandes.jpg" alt="Imagen 5"></div>
    </div>

    <div class="about-section">
    <div class="menu-derecho">
        <h1>Bienvenid@s al universo de {{$web}}&#129293;</h1>
        <h2>Para poder acceder debes estar registrad@&#128272;</h2>
        <h3>Registrate&#128521;</h3>
        <h3>Y echale un vistazo&#128064;</h3>
                        @extends('animal.layouts.app')
                        @if (Route::has('login'))
                            @auth
                                <!-- <a class="btn btn-default" href="{{ url('animal') }}">Personajes</a> -->
                                <a class="btn btn-default" href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Panel De Control</a>
                            @else
                                <!-- <a class="btn btn-default" href="{{ url('animal') }}">Personajes</a> -->
                                <a class="btn btn-default" style="margin: 30px" href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Acceder</a>

                                @if (Route::has('register'))
                                    <a class="btn btn-default" href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>
                                @endif
                            @endauth
                        @endif
                    </div>
    </div>

    <footer>
        <p>&copy; 2023 Todos los derechos reservados.</p>
    </footer>

    <a href="#" class="scroll-top"><i class="material-icons arrow">arrow_upward</i></a>

    </body>
    <script src="{{ asset('js/script.js') }}"></script>
</html>