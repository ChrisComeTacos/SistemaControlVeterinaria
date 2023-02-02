@extends('layouts.inicio')

@section('title', 'PanelAdmin')

@section('content')

<h1 class="text-5xl text-center pt-24 m-4">¡Bienvenido al panel de administrador!</h1>
    
@endsection

@section('cards')

<div class="d-flex justify-content-around">

    <div class="card m-4" style="width: 18rem;">
      <img src="img/cards/mascotasCard.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Administrar mascotas</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="{{ route('mascotas') }}" class="btn btn-primary">Acceder</a>
      </div>
    </div>

    <div class="card m-4" style="width: 18rem;">
        <img src="img/cards/medicamentosCard.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Administrar medicamentos</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Acceder</a>
        </div>
      </div>

      <div class="card m-4" style="width: 18rem;">
        <img src="img/cards/materialesCard.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Administrar materiales</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Acceder</a>
        </div>
      </div>

</div>
    
@endsection