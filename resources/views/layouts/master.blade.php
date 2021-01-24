<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>{{config('app.name')}}</title>
    <link href="{{asset('css/main.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <meta name="theme-color" content="#7952b3">


</head>
<body class="bg-summer">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand col-1 align-content-center" href="#">
            <img class="col-8 img-fluid" src="{{asset('images/logo_p3d_new.png')}}"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img src="{{asset('images/favicon.png')}}">
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wiki</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Github</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Discord</a>
                </li>
                <li class="nav-item dropstart">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" data-bs-popperConfig="{placement: 'left-end'}" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">News</a></li>
                        <li><a class="dropdown-item" href="#">Resources</a></li>
                        <li><a class="dropdown-item" href="#">Skin Changer</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main id="app" class="container mw-unset mt-5 ps-0 pe-0">

    @yield('content')

</main>
<div class="bg-transparent-dark bordered-section-container">
    <div class="seperator-checkerboard inverted"></div>
    <footer class=" py-5 bg-dark">
        <div class="row">
            <div class="col-12 p-4">
                <img src="{{asset('images/favicon.png')}}">
                Pokémon 3D is not affiliated with Nintendo, Creatures Inc. or GAME FREAK Inc.
                <br/>
                pokemon3d.net is owned and operated by Infihex
                <br/>
                <small>© 2014-{{now()->format('Y')}}, Infihex</small>
            </div>
        </div>
    </footer>
</div>

<script src="{{asset('js/main.js')}}"></script>


</body>
</html>
