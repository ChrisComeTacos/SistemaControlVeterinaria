@extends('layouts.app')

@section('secciones')

<header>

  @if(auth()->check())

      <h2 class="logo">Veterinaria</h2>
      <div class="menu"></div>
      
      <nav class="navigation">
              <a>¡Bienvenido, <b>{{ auth()->user()->name }}!</b></a>
              <a href="{{ route('inicio')}}">Inicio</a>
              <a href="{{ route('contacto')}}" class="active">Contacto</a>
              <a href="{{ route('AgendarCita')}}">Agendar cita</a>
              <a href="{{ route('login.destroy') }}">Log Out</a>
      </nav>
      
      @else

      <h2 class="logo">Veterinaria</h2>
      <div class="menu"></div>
      
      <nav class="navigation">
          <a href="{{ route('inicio')}}">Inicio</a>
          <a href="{{ route('contacto')}}" class="active">Contacto</a>
          {{-- <a href="{{ route('AgendarCita')}}" class="active">Agendar cita</a> --}}
          <a href="{{ route('login.index') }}">Iniciar sesión</a>
          <a href="{{ route('register.index') }}">Registrarse</a>
        </nav>
      @endif

</header>
  
@endsection

@section('CuerpoInicio')

<h1>Estamos ubicados aqui</h1>

<section>
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d331.6932098145271!2d-90.53043637775097!3d19.8534762661428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f833ff554dfce9%3A0x89c4c80bedbf908a!2sEL%20MUNDO%20DE%20LAS%20MASCOTAS!5e0!3m2!1ses-419!2smx!4v1679302549994!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

@endsection