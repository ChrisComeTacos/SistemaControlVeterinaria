@extends('layouts.app')

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
          <a href="{{ route('login.index') }}">Iniciar sesión</a>
          <a href="{{ route('register.index') }}">Registrarse</a>
        </nav>
      @endif

</header>
  
@endsection

@section('CuerpoInicio')

<img class="wave2" src="img/FondoPagina.png">



  <div class="cita">
    <h1>!AGENDA TU consulta!</h1>
    <p>Agenda una cita previa para tu mascota en la veterinaria rellenando nuestro formulario en línea. Es fácil y rápido, solo ingresa tus datos y los de tu mascota. ¡No esperes más y agenda la cita hoy mismo!</p>
    <form action="{{ route('consultas.store') }}" method="POST">
      @csrf
      <div class="row">
        <div class="column">
          <legend>Información del dueño</legend>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <label for="">Nombre del dueño</label>
          <input type="text" name="NombreDueno" value="{{ old('NombreDueno')}}">
          @error('NombreDueno')      
          <small>
            <p>{{$message}}</p>
          </small>
          @enderror
        </div>
        <div class="column">
          <label for="">Apellido Paterno</label>
          <input type="text" name="ApellidoP" value="{{ old('ApellidoP')}}" >
          @error('ApellidoP')      
          <small>
            <p>{{$message}}</p>
          </small>
          @enderror
        </div>
        <div class="column">
          <label for="subject">Apellido Materno</label>
          <input type="text" name="ApellidoM" value="{{ old('ApellidoM')}}">
          @error('ApellidoM')      
          <small>
            <p>{{$message}}</p>
          </small>
          @enderror
        </div>
      </div>

      <div class="row">
        <div class="column">
          <legend>Información de la mascota</legend>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <label for="issue">Nombre de la mascota</label>
          <input type="text" name="NombreMascota" value="{{ old('NombreMascota')}}">
          @error('NombreMascota')      
          <small>
            <p>{{$message}}</p>
          </small>
          @enderror
        </div>
        <div class="column">
          <label for="issue">Especie de la mascota</label>
          <input type="text" name="EspecieMascota" value="{{ old('EspecieMascota')}}">
          @error('EspecieMascota')      
          <small>
            <p>{{$message}}</p>
          </small>
          @enderror
        </div>
        <div class="column">
          <label for="contact">Raza de la mascota</label>
          <input type="text" name="RazaMascota" value="{{ old('RazaMascota')}}">
          @error('RazaMascota')      
          <small>
            <p>{{$message}}</p>
          </small>
          @enderror
        </div>
      </div>

      <div class="row">
        <div class="column">
          <legend>Información de la cita</legend>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <label for="">Elige la fecha de tu cita</label>
            <input type="date" name="FechaCita" value="{{ old('FechaCita')}}">
            @error('FechaCita')      
            <small>
              <p>{{$message}}</p>
            </small>
            @enderror
        </div>
        <div class="column">
          <label for="contact">Teléfono</label>
          <input type="text" name="TelefonoDueno" value="{{ old('TelefonoDueno')}}">
          @error('TelefonoDueno')      
          <small>
            <p>{{$message}}</p>
          </small>
          @enderror
        </div>
      </div>

      <div class="row">

        <button type="submit" value="agregar">Agregar</button>


          {{-- <button class="show-modal">Show Modal</button>
          <span class="overlay"></span>
  
          <div class="modal-box">
            <i class="fa-regular fa-circle-check" style="color: #00d10e;"></i>
            <h2>Cita generada</h2>
            <h3>Tu cita se ha enviado a la veterinaria con éxito.</h3>
  
            <div class="buttons">
              <button class="close-btn">Entendido</button>
              <button>Descargar cita</button>
            </div>
          </div> --}}


      </div>

    </form>
  </div>
    

@endsection
