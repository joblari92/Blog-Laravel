<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mi Blog - @yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<!-- agrega aquí el header con el logo -->
<nav class="navbar navbar-light bg-main">
    <div class="container p-4">
        <a class="navbar-brand m-auto" href="#">
            <img src="{{asset('images/logo.png')}}" width="120" alt="" loading="lazy">
        </a>
    </div>
</nav>

<!-- Contenido -->
@yield('content')

<!-- Footer -->
<footer class="container-fluid bg-main">
    <div class="row text-center p-4">
        <div class="mb-3">
            <img src="{{asset('images/logo.png')}}" alt="YouDevs logo" width="120" id="logofooter">
        </div>
        <div id="col-md-10">
            <a href="https://www.facebook.com/youdevs">
                <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
            </a>
            <a href="https://www.instagram.com/youdevs">
                <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
            </a>
            <a href="https://www.youtube.com/c/YouDevsOficial">
                <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube youdevs">
            </a>
            <p class="mt-3">Copyright © 2020 YouDevs, Blog. <br> Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
