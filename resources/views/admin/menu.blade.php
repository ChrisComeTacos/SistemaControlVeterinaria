@extends('layouts.app')

@section('title', 'PanelAdmin')

@section('secciones')

<header>

      <h2 class="logo">Veterinaria</h2>
      <div class="menu"></div>
      
      <nav class="navigation">
              <a>¡Bienvenido, <b>{{ auth()->user()->name }}!</b></a>
              <a href="{{ route('login.destroy') }}" class="active">Log Out</a>
      </nav>

</header>
  
@endsection

@section('CuerpoInicio')

<img class="wave2" src="img/FondoPagina.png">

<div class="contenido">
       
  <div class="card">
      <img src="img/cards/mascotasCard.png">
      <br><br>
      <h4>Administración de citas/mascotas</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
      <a href="{{ route('consultas.index') }}">Leer más</a>
  </div>
  
  <div class="card">
      <img src="img/cards/medicamentosCard.png">
      <br><br>
      <h4>Administración de medicamentos</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
      <a href="{{ route('medicinas.index') }}">Leer más</a>
  </div>
  
  <div class="card">
      <img src="img/cards/materialesCard.png">
      <br><br>
      <h4>Administración de materiales</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
      <a href="{{ route('suministros.index') }}">Leer más</a>
  </div>

  <div class="card">
    <img src="img/cards/materialesCard.png">
    <br><br>
    <h4>Añadir especies</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, excepturi unde?</p>
    <a href="{{ route('especies.index') }}">Leer más</a>
</div>
  
</div>

@endsection

{{-- <img class="wave2" src="img/FondoPagina.png">

<h1 class="text-5xl text-center pt-24 m-4">¡Bienvenido al panel de administrador!</h1>
    
<div class="d-flex justify-content-between row row-cols-1 row-cols-md-2 g-0 m-5">

  <div class="card m-4" style="width: 18rem;">
    <img src="img/cards/mascotasCard.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Administrar mascotas/citas</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="{{ route('mascotas.index') }}" class="btn btn-primary">Acceder</a>
    </div>
  </div>

  <div class="card m-4" style="width: 18rem;">
      <img src="img/cards/medicamentosCard.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Administrar medicamentos</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{ route('medicinas.index') }}" class="btn btn-primary">Acceder</a>
      </div>
    </div>

    <div class="card m-4" style="width: 18rem;">
      <img src="img/cards/materialesCard.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Administrar materiales</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{ route('suministros.index') }}" class="btn btn-primary">Acceder</a>
      </div>
    </div>

</div> --}}