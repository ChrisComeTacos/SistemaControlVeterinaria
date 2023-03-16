@extends('layouts.inicio')

@section('title', 'Veterinaria')

@section('secciones')

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active text-white " aria-current="page" href="{{ route('inicio')}}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#">Sobre nosotros</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#">Nuestra ubicación</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white " href="#">Agenda una cita</a>
      </li>
    </ul>
    
@endsection

@section('content')





  <div class="tabla">
    <div class="row">
      <div class="col-7">
        <div class="inputs mt-5 ">
            <div class="input-group mb-3">
                <span class="input-group-text">Nombre y apellidos</span>
                <input type="text" aria-label="First name" class="form-control">
                <input type="text" aria-label="Last name" class="form-control">
            </div>
    
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Teléfono</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Nombre de la máscota</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Raza de la mascota</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Edad de la mascota</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <legend>Elige la fecha</legend>
                <label for="">Fecha:
                    <input type="date" name="" value="">
                </label>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">Agendar cita</button>
              </div>            
        </div>

    </div>
    <div class="col-5">
        <h1 class="m-4">Ingresa tus datos para agendar una cita</h1>
        <img src="img/cat.png" alt="">
      </div>
    </div>
  </div>





@endsection
