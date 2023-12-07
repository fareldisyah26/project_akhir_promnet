<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    @vite(['resources/js/app.js'])
</head>
<body style="background-image: url('/img/andy-vult-t-WkBEOQngs-unsplash.jpg');">
    <div id="app">
        <nav class="ps-5 pt-3 pb-3 pe-3 navbar navbar-expand-lg" style="background-color: #739072;">>
            <div class="container-fluid">
              <a class="navbar-brand" href="/"><h1 class = "pe-5 fw-bold">neeCall</h1></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/home"><h5 class="ms-5 fw-bold">Home</h5></a>
                    <a class="nav-link" href="/hospital"><h5 class="ms-5 fw-bold">Hospital</h5></a>
                    <a class="nav-link" href="/firefighter"><h5 class="ms-5 fw-bold">Fire Fighter</h5></a>
                    <a class="nav-link" href="/police"><h5 class="ms-5 fw-bold">Police</h5></a>
                    <a class="nav-link" href="/more"><h5 class="ms-5 fw-bold">More</h5></a>
                </div>
            </div>

                <div class="navbar-nav ms-auto">
                    <ul class="navbar-nav">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="me-3 btn btn-outline-dark" href="{{ route('login') }}"><h5 class="fw-bold">{{ __('Login') }}</h5></a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="me-3 btn btn-outline-dark" href="{{ route('register') }}"><h5 class="fw-bold">{{ __('Register') }}</h5></a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="me-3 btn btn-outline-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
              </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
