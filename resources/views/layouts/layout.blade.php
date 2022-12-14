<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @vite(['resources/sass/styles.sass'])
</head>
<body>
{{--Nav--}}
<nav class="navbar navbar-light bg-main">
    <div class="container p-4">
        <a class="navbar-brand m-auto" href="{{ route('home') }}">
            <img src="{{asset('images/marvel-logo.png')}}" width="120" alt="" loading="lazy">
        </a>
    </div>
</nav>
{{--Nav END--}}

<!-- Contenido -->
@yield('content')

<!-- Footer -->
<footer class="container-fluid bg-main">
    <div class="row text-center p-4">
        <div class="mb-3">
            <img src="{{asset('images/marvel-logo.png')}}" alt="YouDevs logo" width="120" id="logofooter">
        </div>
        <div id="col-md-10">
            <a href="#">
                <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
            </a>
            <a href="#">
                <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
            </a>
            <a href="#">
                <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube youdevs">
            </a>
            <p class="mt-3">Copyright © 2022 MARVEL. <br> Data provided by Marvel. © 2022 MARVEL</p>
        </div>
    </div>
</footer>
{{--Footer END--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
