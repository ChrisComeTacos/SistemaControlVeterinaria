{{-- Panel de administrador --}}

@extends('layouts.inicio')

@section('title', 'Veterinaria')

@section('secciones')

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Nuestra ubicación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Agenda una cita</a>
      </li>
    </ul>
    
@endsection

@section('content')

  {{-- <h1 class="text-5xl text-center pt-24">Bienvenidos a la veterinaria</h1> --}}

  <section class="inicio__main container">
    <div class="inicio__texts">
      <h1 class="inicio__title">NOS PREOCUPAMOS POR TU MASCOTA</h1>
      <p class="inicio__subtitle">Atendemos a sus mascotas de forma integral con el apoyo de un experimentado médico veterinario de perros y gatos para brindarles los tratamientos y cuidados que merecen.</p>
      <a href="#" class="inicio_cta">Agenda una cita</a>
    </div>
    
    <figure class="inicio_picture">
      <img src="img/dogWalking.svg" class="inicio__img">
    </figure>

  </section>

  <img src="img/InicioBG.svg" alt="">

@endsection
