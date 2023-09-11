@extends('layouts.app')

@section('titulo')
    Inicia sesión en Nuestra Plataforma
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center p-5">
        <div class="md:w-6/12">
            <img src="{{asset('img/login.jpg')}}" alt="Imagen registro de ususarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rouded-lg shadow-xlz">
            <form method="POST" action="{{route('login')}}" novalidate>
                @csrf

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{session('mensaje')}}</p>
                @endif

                <div class="mb-5">
                    <label for="email"  class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
                    <input
                    id="email"
                    name="email"
                    type="email"
                    placeholder="Ingrese su email"
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    value={{old('email')}}
                    >
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="password"  class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Ingrese su contraseña"
                    class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror"
                    >
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <input type="submit"
                    value="Iniciar Sesión"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors w-full text-white rounded-lg p-3 uppercase font-bold"
                >
            </form>
        </div>
    </div>

@endsection
