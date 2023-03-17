@extends('layouts.inicio')

@section('content')

<img class="wave2" src="/img/InicioBG.png">

    <div class="row row align-items-center">
        <div class="col-6">

            <h1 class="m-5">Ingresa tus datos y el de la mascota</h1>

            <form action="{{ route('mascotas.store') }}" style="width: 600px; height: 300px," class="m-5 justify-content-center align-items-center" method="POST">
                @csrf
            
                <div>
                    <input type="text" name="NombreDueno" class="form-control mb-3" placeholder="Nombre del dueño">
                </div>
        
                
                <div>
                    <input type="text" name="ApellidoP" class="form-control mb-3" placeholder="Apellido Paterno">
                </div>
                
                <div>
                    <input type="text" name="ApellidoM" class="form-control mb-3" placeholder="Apellido Materno">
                </div>

                <div>
                    <input type="text" name="TelefonoDueno" class="form-control mb-3" placeholder="Teléfono del dueño">
                </div>

                <div>
                    <input type="text" name="NombreMascota" class="form-control mb-3" placeholder="Nombre de la mascota">
                </div>

                <div>
                    <input type="text" name="EspecieMascota" class="form-control mb-3" placeholder="Especie">
                </div>
 
                <div>
                    <input type="text" name="RazaMascota" class="form-control mb-3" placeholder="Raza">
                </div>
                
                {{-- <div class="input-group mb-3">
                    <input type="text" class="form-control" name="PesoMascota" aria-label="Amount (to the nearest dollar)" placeholder="Peso">
                    <span class="input-group-text">Kg.</span>
                </div> --}}

                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-success" type="submit" value="agregar">Agregar</button>
                    <a class="btn btn-secondary" href="{{ route('mascotas.index') }}">Volver</a>                </div>
                
            </form>

        </div>
        <div class="col-6">

            <img style="height: 700px; width: 700px;" class="img-fluid" src="/img/Illustration1.svg">


        </div>
    </div>
    

@endsection