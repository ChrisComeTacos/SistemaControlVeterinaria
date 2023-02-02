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

<h1 class="text-5xl text-center pt-24">Bienvenidos a la veterinaria</h1>
    
@endsection
