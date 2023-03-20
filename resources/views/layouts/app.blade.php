<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veterinaria</title>

    {{-- ESTILOS --}}
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">

    {{-- FUENTE --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">
    
</head>
<body>

    <header>
        
        <h2 class="logo">Veterinaria</h2>
        <div class="menu"></div>
        
        <nav class="navigation">
            <a href="{{ route('inicio')}}">Inicio</a>
            <a href="{{ route('contacto')}}">Contacto</a>
            <a href="#">Galería</a>
            <a href="{{ route('AgendarCita')}}" class="active">Agendar cita</a>
          </nav>

        {{-- @if(auth()->check())
  
            </a>
        
            <h2 class="logo">Veterinaria</h2>
            <div class="menu"></div>
            
            <nav class="navigation">
                <a>Bienvenido <b>{{ auth()->user()->name }}</b></a>
                <a href="{{ route('inicio')}}">Inicio</a>
                <a href="{{ route('contacto')}}">Contacto</a>
                <a href="#">Galería</a>
                <a href="{{ route('AgendarCita')}}" class="active">Agendar cita</a>
                <a href="{{ route('login.destroy') }}">
                    <button>Log Out</button>
            </nav>
            
            @else
  
            <h2 class="logo">Veterinaria</h2>
            <div class="menu"></div>
            
            <nav class="navigation">
                <a href="{{ route('inicio')}}">Inicio</a>
                <a href="{{ route('contacto')}}">Contacto</a>
                <a href="#">Galería</a>
                <a href="{{ route('AgendarCita')}}" class="active">Agendar cita</a>
                <a href="{{ route('login.index') }}">Log In</a>
                <a href="{{ route('register.index') }}">Register</a>
              </nav>
            @endif --}}

      </header>



      @yield('CuerpoInicio')


    <script src="js/script.js"></script>
</body>
</html>
