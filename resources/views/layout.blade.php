<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.0.0/cyborg/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-HOjmaybB3GQTM8HunY46MvK7ngm9b/eRGOWESCQ/s+Vk4omobTY5+FXqurpSFcbz" crossorigin="anonymous">

    <!-- Open Iconic -->
    <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">

    <title>
        @yield('page-title')
    </title>
</head>
<style>
    body, html {
        height: 100%;
    }

    .bg {
        /* The image used */
        background-image: url("/images/header.jpg");

        /* Full height */
        height: 50%;

        /* Center and scale the image nicely */
        background-position: bottom;
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="/images/me.png" width="32px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02"
            aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active text-">
                <a class="nav-link text-success" href="/">About <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/keys">Keys</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/twittering-machines">Twittering Machines</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/laragoon">Laragoon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/jiracat">JIRACat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/bleats">Bleats</a>
            </li>
            <li>
                @guest
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                @else
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
            </li>
        </ul>
        <div class="my-2 my-lg-0">
            <a href="https://www.linkedin.com/in/bryangruneberg/" target="_new"><img
                        src="/images/Linkedin-Logo-White-34px-R.png"></a>
            &nbsp; &nbsp;
            <a href="https://github.com/bryangruneberg" target="_new"><img src="/images/GitHub-Mark-Light-32px.png"></a>
        </div>
    </div>
</nav>

<div class="container-fluid bg">
    &nbsp;
</div>

<div class="container-fluid">
    @yield('content')
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
