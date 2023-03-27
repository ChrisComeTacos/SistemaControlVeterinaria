@extends('layouts.app')

@section('title', 'Login')

@section('secciones')

<header>

  @if(auth()->check())

      <h2 class="logo">Veterinaria</h2>
      <div class="menu"></div>
      
      <nav class="navigation">
              <a>¡Bienvenido, <b>{{ auth()->user()->name }}!</b></a>
              <a href="{{ route('inicio')}}">Inicio</a>
              <a href="{{ route('contacto')}}">Contacto</a>
              <a href="{{ route('AgendarCita')}}">Agendar cita</a>
              <a href="{{ route('login.destroy') }}">Log Out</a>
      </nav>
      
      @else

      <h2 class="logo">Veterinaria</h2>
      <div class="menu"></div>
      
      <nav class="navigation">
          <a href="{{ route('inicio')}}">Inicio</a>
          <a href="{{ route('contacto')}}">Contacto</a>
          {{-- <a href="{{ route('AgendarCita')}}" class="active">Agendar cita</a> --}}
          <a href="{{ route('login.index') }}" class="active">Iniciar sesión</a>
          <a href="{{ route('register.index') }}">Registrarse</a>
        </nav>
      @endif

</header>
  
@endsection

@section('CuerpoInicio')

<img class="wave" src="img/fondoLogin.png">

{{-- <div class="inicio"> --}}

    <div class="container">
        <div class="img">
            <img src="img/dogWalking.svg">
        </div>
        <div class="login-content">
            <form method="POST" action="">
    
                @csrf
    
                <img src="img/catProfileLogin.png">
                <h2 class="title">¡Bienvenido a nuestra veterinaria!</h2>
                   <div class="input-div one">
                      <div class="i">
                              <i class="fas fa-user"></i>
                      </div>
                      <div class="div">
                              <h5>Correo</h5>
                              <input type="email" class="input" id="email" name="email">
                      </div>
                   </div>
                   <div class="input-div pass">
                      <div class="i"> 
                           <i class="fas fa-lock"></i>
                      </div>
                      <div class="div">
                           <h5>Contraseña</h5>
                           <input type="password" class="input" id="password" name="password">
    
                   </div>
                </div>
                <input type="submit" class="loginBoton" value="Login">
                @error('message')
                <div class="alert alert-danger m-4" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </form>
        </div>
    </div>
{{-- </div> --}}

@endsection

{{-- <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">

    <h1 class="text-3xl text-center font-bold">Login</h1>

    <form class="mt-4" method="POST" action="">
        @csrf

        <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email"> 

        <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password"> 

        @error('message')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}   </p>
        @enderror

      

        <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>

    </form>

</div> --}}
