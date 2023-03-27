@extends('layouts.app')

@section('title', 'Register')

@section('secciones')

<header>

  @if(auth()->check())

      <h2 class="logo">Veterinaria</h2>
      <div class="menu"></div>
      
      <nav class="navigation">
              <a>¡Bienvenido, <b>{{ auth()->user()->name }}!</b></a>
              <a href="{{ route('inicio')}}">Inicio</a>
              <a href="{{ route('contacto')}}">Contacto</a>
              <a href="{{ route('AgendarCita')}}" class="active">Agendar cita</a>
              <a href="{{ route('login.destroy') }}">Log Out</a>
      </nav>
      
      @else

      <h2 class="logo">Veterinaria</h2>
      <div class="menu"></div>
      
      <nav class="navigation">
          <a href="{{ route('inicio')}}">Inicio</a>
          <a href="{{ route('contacto')}}">Contacto</a>
          {{-- <a href="{{ route('AgendarCita')}}" class="active">Agendar cita</a> --}}
          <a href="{{ route('login.index') }}">Iniciar sesión</a>
          <a href="{{ route('register.index') }}" class="active">Registrarse</a>
        </nav>
      @endif

</header>
  
@endsection

@section('CuerpoInicio')

<img class="wave" src="img/fondoLogin.png">
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
                              <h5>Nombre de usuario</h5>
                              <input type="text" class="input" id="name" name="name">
                            </div>
                        </div>
                        
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
                        
                        <div class="input-div pass">
                            <div class="i"> 
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="div">
                                <h5>Confirmar contraseña</h5>
                                <input type="password" class="input" id="password_confirmation" name="password_confirmation">
                                
                            </div>
                        </div>
                        
                        <input type="submit" class="loginBoton" value="Registrarse">
                    </form>
                </div>
            </div>


@endsection



            {{-- <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg">
                
                <h1 class="text-3xl text-center font-bold">Register</h1>
                
                <form class="mt-4" method="POST" action=""> 
                       
                    @csrf
            
                    
                    <input type="text" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Name" id="name" name="name">
                    
                    @error('name')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}   </p>
                    @enderror
                    
                    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">
                    
                    @error('email')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}   </p>
                    @enderror
            
                    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password" id="password" name="password"> 
                    
                     @error('password')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}   </p>
                    @enderror 
            
                    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Password confirmation" id="password_confirmation" name="password_confirmation"> 
                    
                    
                    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold p-2 my-3 hover:bg-indigo-600">Send</button>
                    </form>
                        
                    </div>    --}}