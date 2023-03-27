@extends('layouts.inicio')

@section('content')
<img class="wave2" src="/img/FondoPagina.png">

<div class="p-3 d-flex mb-3">



    <div class="p-2">
        <a class="btn btn-light" href="{{ route('consultas.index') }}">Volver</a>
    </div>

</div>

<div class="row align-items-center justify-content-center m-1">

    <div class="col-sm-6">
        
        <div class="card">
            <div class="card-header">

            <form action="{{ route('consultas.update',$consulta) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              Receta consultas
            </div>
            <div class="card-body">

            <h5 class="card-title mb-3">Información del dueño</h5>
                
            <div class="row g-2 mb-3">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="NombreDueno" placeholder="Nombre" value="{{$mascota->NombreDueno}}" disabled>
                        <label for="floatingInputGrid">Nombre del dueño</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="ApellidoP" placeholder="Nombre de la mascota" value="{{$mascota->ApellidoP}}" disabled>
                        <label for="floatingInputGrid">Apellido paterno del dueño</label>
                    </div>
                </div>
            </div>

            <div class="row g-2 mb-3">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="ApellidoM" placeholder="Nombre" value="{{$mascota->ApellidoM}}" disabled>
                        <label for="floatingInputGrid">Apellido materno del dueño</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="TelefonoDueno" placeholder="Nombre de la mascota" value="{{$mascota->TelefonoDueno}}" disabled>
                        <label for="floatingInputGrid">Teléfono del dueño</label>
                    </div>
                </div>
            </div>

            <div class="input-group mt-4">
                <select name="AsistenciaStatus" class="form-select" id="inputGroupSelect01">
                    <option selected>{{$mascota->AsistenciaStatus}}</option>
                    <option value="En espera">En espera...</option>
                    <option value="Asistio">Asistio</option>
                    <option value="No Asistio">no asistio</option>
                </select>            
            </div>
            <br>

            <h5 class="card-title mb-3">Información del paciente</h5>

            <div class="row g-2 mb-3">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="NombreMascota" placeholder="Nombre" value="{{$mascota->NombreMascota}}">
                        <label for="floatingInputGrid">Nombre de la mascota</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="EspecieMascota" placeholder="Nombre de la mascota" value="{{$mascota->EspecieMascota}}">
                        <label for="floatingInputGrid">Especie de la mascota</label>
                    </div>
                </div>
            </div>

            <div class="row g-2 mb-3">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="RazaMascota" placeholder="Nombre" value="{{$mascota->RazaMascota}}">
                        <label for="floatingInputGrid">Raza de la mascota</label>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="PesoMascota" placeholder="Nombre de la mascota" value="{{$mascota->PesoMascota}}">
                        <label for="floatingInputGrid">Peso de la mascota</label>
                    </div>
                </div>
            </div>

            
            <div class="row g-2 mb-3">
                <div class="col-md">
                    <div class="form-floating">
                        <div class="mb-3">
                            <label for="FotoMascota" class="form-label">Foto de la mascota</label>
                            <input class="form-control" type="file" name="FotoMascota" id="FotoMascota" value="{{$mascota->FotoMascota}}">
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Diagnóstico</label>
                    <textarea name="DiagnosticoMascota" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$mascota->DiagnosticoMascota}}"></textarea>
                </div>

                <input type="submit" value="Agregar" class="btn btn-success mt-3">

            </form>

            </div>
          </div>
    
    </div>

</div>


@endsection

