<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Título fijo -->
    <title>IT BAVARIA</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .navbar {
            padding-top: 1rem; /* Espaciado superior */
            padding-bottom: 1rem; /* Espaciado inferior */
        }
    
        .navbar-brand {
            font-size: 1.5rem; /* Tamaño del texto del logo */
            font-weight: bold; /* Negrita para destacar el logo */
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- Nombre fijo en el navbar -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/bavaria-logo-red.png') }}" alt="Logo">
                    IT BAVARIA
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @auth
                        @if (Route::has('members.index'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('members.index') }}">{{ __('Miembros') }}</a>
                            </li>
                        @endif
                    @endauth
                    @auth
                    @if (Route::has('assigned.index'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('assigned.index') }}">{{ __('Asignados') }}</a>
                        </li>
                    @endif
                     @endauth
                @auth
                @if (Route::has('members-attention.index'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('members-attention.index') }}">{{ __('Attencion Usuarios') }}</a>
                    </li>
                @endif
                 @endauth
                 @auth
                 @if (Route::has('generics-accounts.index'))
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('generics-accounts.index') }}">{{ __('Cuentas Genericas') }}</a>
                     </li>
                 @endif
             @endauth
                 @auth
                 @if (Route::has('movement.index'))
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('movement.index') }}">{{ __('Movimientos') }}</a>
                     </li>
                 @endif
                  @endauth
                        
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
