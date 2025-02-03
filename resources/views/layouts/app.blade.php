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
        /* Establece el color de fondo gris para toda la barra de navegación */
        .navbar {
            background-color: #515558; /* Gris oscuro */
            padding-top: 1rem; /* Espaciado superior */
            padding-bottom: 1rem; /* Espaciado inferior */
        }

        /* Establece color blanco para los enlaces de navegación */
        .navbar-nav .nav-link {
            color: white; /* Letras blancas en los enlaces */
        }

        /* Cambiar el color de los enlaces cuando el mouse pasa por encima */
        .navbar-nav .nav-link:hover {
            color: #dcdcdc; /* Color gris claro al pasar el mouse */
        }

        /* Asegurarse de que el logo también sea blanco */
        .navbar-brand {
            font-size: 1.5rem; /* Tamaño del texto del logo */
            font-weight: bold; /* Negrita para destacar el logo */
            color: white; /* Color blanco para el logo */
        }

        /* Cambiar color del icono de la barra de navegación (hamburguesa) */
        .navbar-dark .navbar-toggler-icon {
            background-color: white; /* Hacer el icono blanco */
        }

        /* Estilo para el footer */
        .footer {
            background-color: #4d5256;
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            margin-top: auto; /* Esto empuja el footer hacia abajo */
        }

        .footer .left-side img {
            height: 50px;
        }

        .footer .right-side {
            text-align: right;
            font-size: 0.9rem;
        }

        /* Asegurarse de que el contenido principal ocupe todo el alto disponible */
        body, html {
            height: 100%;
            margin: 0;
        }

        #app {
            min-height: 100%; /* Hace que el contenedor principal ocupe todo el alto */
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1; /* Hace que el contenido principal ocupe todo el espacio disponible */
        }
    </style>
</head>
<body>
    <div id="app">
        <!-- Cambiar a navbar-dark y quitar bg-white -->
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm">
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
                                <a class="nav-link" href="{{ route('members.index') }}">{{ __('Usuarios') }}</a>
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
                        <a class="nav-link" href="{{ route('members-attention.index') }}">{{ __('Atención Usuarios') }}</a>
                    </li>
                @endif
                 @endauth
                 @auth
                 @if (Route::has('generics-accounts.index'))
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('generics-accounts.index') }}">{{ __('Cuentas Genéricas') }}</a>
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
                                        {{ __('Cerrar Sesión') }}
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
    <footer class="footer">
        <div class="left-side">
            <img src="{{ asset('images/Logo-footer.png') }}" alt="Logo">
        </div>
        <div class="right-side">
            <p>Este software es propiedad de la Administración de IT de Bavaria, desarrollado como parte del proceso de formación de uno de sus aprendices<br> Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html>
