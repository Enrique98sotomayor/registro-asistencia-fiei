
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Asistencia FIEI - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="p-5 border-b bg-white shadow">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex gap-3 items-center">
                <img src="{{asset('img/logo.jpeg')}}" alt="Imagen Logo" class="w-12 h-12">
                <a class="text-3xl font-black" href="{{route('principal')}}">
                    Registro de Asistencia - FIEI
                </a>
            </div>

            @auth
            <nav class="flex gap-2 items-center">
                <a class="font-bold  text-gray-600 text-sm" href="#">Hola: <span class="font-normal">{{auth()->user()->name}}</span></a>
                <a class="font-bold  text-gray-600 text-sm" href="#">Rol: <span class="font-normal">{{auth()->user()->role}}</span></a>
                <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="font-bold  text-gray-600 text-sm" href="{{route('logout')}}">
                        Cerrar Sesión</button>
                    </nav>
                </form>
            @endauth

            @guest
            <nav class="flex gap-2 items-center">
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('login')}}">Login</a>
                <a class="font-bold uppercase text-gray-600 text-sm" href="{{route('register')}}">
                    Crear Cuenta</a>
            </nav>
            @endguest

        </div>
    </header>

    <main class="container mx-auto mt-10">
        <h2 class="font-black text-center text-3xl mb-10">
            @yield('titulo')
        </h2>
        @yield('contenido')
    </main>

    <footer class="text-center p-5 text-gray-500 font-bold mt-10">
        Registro de Asistencia FIEI - Todos los derechos reservados {{ now()->year}}
    </footer>
</body>
</html>
