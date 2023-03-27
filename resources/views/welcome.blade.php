{{-- INICIO--}}

@extends('layouts.app')

@section('secciones')

<header>

  @if(auth()->check())

      <h2 class="logo">Veterinaria</h2>
      <div class="menu"></div>
      
      <nav class="navigation">
        <ul>

          <p id="usuario">¡Bienvenido, <b>{{ auth()->user()->name }}!</b></p id="usuario">
          <a href="{{ route('inicio')}}" class="active">Inicio</a>
          <a href="{{ route('contacto')}}">Contacto</a>
          <a href="{{ route('AgendarCita')}}">Agendar cita</a>
          <a href="{{ route('login.destroy') }}">Log Out</a>
        </ul>
      </nav>
      
      @else

      <h2 class="logo">Veterinaria</h2>
      <div class="menu"></div>
      
      <nav class="navigation">
          <a href="{{ route('inicio')}}" class="active">Inicio</a>
          <a href="{{ route('contacto')}}">Contacto</a>
          {{-- <a href="{{ route('AgendarCita')}}" class="active">Agendar cita</a> --}}
          <a href="{{ route('login.index') }}">Iniciar sesión</a>
          <a href="{{ route('register.index') }}">Registrarse</a>
        </nav>
      @endif

</header>
  
@endsection

@section('CuerpoInicio')
  <section>
    <img src="img/parallax/edificios.svg" alt="fondo" id="edificios">
    <h2 id="slogan">Bienvenido a nuestra veterinaria</h2>
    
    @if(auth()->check())

    <a href="{{ route('AgendarCita')}}" id="btn">Agendar cita</a>

    @else

    <a href="{{ route('register.index')}}" id="btn">Registrarse</a>

    @endif



    <img src="img/parallax/fondovet.svg" alt="fondo" id="fondovet">
    <img src="img/parallax/persona1.svg" alt="viento" id="persona1">
    <img src="img/parallax/gato.svg" alt="fondo_transparente" id="gato">
    <img src="img/parallax/persona2.svg" alt="persona" id="persona2">
    <img src="img/parallax/bush1.svg" alt="nube1" id="bush1">
  </section>

<div class="sec">
    <h2>SOBRE NOSOTROS</h2>
    {{-- <h3>Nuestra historia en Campeche</h3> --}}
    <br>
    <p>¡Bienvenidos a nuestra veterinaria! En nuestro centro, nos apasiona cuidar y proteger la salud de tus mascotas. Nuestro equipo de profesionales altamente capacitados y comprometidos está aquí para brindarte la mejor atención y cuidado para tu amigo peludo.
    <br><br>
    Ofrecemos una amplia gama de servicios para satisfacer todas las necesidades de tu mascota, desde exámenes de rutina y vacunas hasta cirugías y tratamientos de enfermedades. Nuestras instalaciones están equipadas con tecnología de última generación y seguimos los estándares más altos de seguridad e higiene.
    <br><br>
    Además, nos enorgullece ofrecer una experiencia personalizada y cercana para ti y tu mascota. Nos tomamos el tiempo de escuchar tus inquietudes y responder a todas tus preguntas para brindarte la tranquilidad y seguridad que mereces.
    <br><br>     
    Así que, si estás buscando una veterinaria confiable y profesional para cuidar de tu mascota, no busques más. ¡Agenda una cita hoy mismo y déjanos demostrarte por qué somos la mejor opción para ti y tu amigo peludo!
    <br><br>
    </p>

    {{-- <img src="img/slider2.jpg" alt=""> --}}

</div>

<div class="sec2">

  <h2>Mascotas en la veterinaria: Una galería de amigos peludos</h2>
  <p>Un vistazo a la vida en la clínica, donde los expertos en salud animal cuidan y aman a sus pacientes de cuatro patas.</p>

  <div class="slider-frame">
      <ul>
          <li><img src="img/slider1.jpg" alt=""></li>
          <li><img src="img/slider2.jpg"  alt=""></li>
          <li><img src="img/slider3.jpg" alt=""></li>
          <li><img src="img/slider4.jpg"  alt=""></li>
      </ul>
  </div>

</div>


@endsection