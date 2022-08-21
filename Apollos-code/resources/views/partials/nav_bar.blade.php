<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apollo's - @yield('titulo')</title>
    @stack('js')
    @stack('styles')
    @vite(['resources/css/app.css'])
</head>

<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-3xl font-black">
                Apollo's
            </h1>

            @auth
                <nav class="flex gap-2 items-center">
                    @if (auth()->user()->rol == 'artist')
                        <a href="{{ route('upload.select') }}" class="font-bold uppercase text-gray-600 text-sm">Subir</a>
                    @endif

                    <a href="{{ route('profile.index', auth()->user()) }}"
                        class="font-bold uppercase text-gray-800 text-sm">{{ auth()->user()->name }}</a>

                    <a href="{{ route('main') }}" class="font-bold uppercase text-gray-600 text-sm">Home</a>

                    <a href="{{ route('settings.index') }}" class="font-bold uppercase text-gray-600 text-sm">Editar
                        Perfil</a>


                    <form action="{{ route('logout') }}" class="font-bold uppercase text-gray-600 text-sm" method="POST">
                        @csrf
                        <a class="" href="#" onclick="this.closest('form').submit()">Cerrar sesión</a>
                    </form>
                </nav>
            @endauth
            @guest
                <nav class="flex gap-2 items-center">
                    <a class="font-bold uppercase text-gray-600 text-sm" href="/">Welcome</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('login') }}">Login</a>
                    <a class="font-bold uppercase text-gray-600 text-sm" href="{{ route('signup') }}">Crear cuenta</a>
                </nav>
            @endguest

        </div>
    </header>


    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-5xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase ">
        Apollo's - Todos los derechos reservados {{ now()->year }}
    </footer>

    @stack('noBack')

</body>

</html>
