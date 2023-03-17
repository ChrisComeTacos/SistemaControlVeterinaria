@extends('layouts.inicio')

@section('content')

<div class="container mt-5">

    <form action="{{ route('mascotas.update',$mascota) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">Nombre del dueño</label>
            <input class="form-control" type="text" name="NombreDueno" value="{{$mascota->NombreDueno}}" placeholder="Disabled input" disabled> 
    
        <div>
            <label for="">Apellido P.</label>
            <input class="form-control" type="text" name="ApellidoP" value="{{$mascota->ApellidoP}}" placeholder="Disabled input" disabled>
        </div>
    
        <div>
            <label for="">Apellido M.</label>
            <input class="form-control" type="text" name="ApellidoM" value="{{$mascota->ApellidoM}}" placeholder="Disabled input" disabled>

        <div>
            <label for="">Telefono</label>
            <input class="form-control" type="text" name="TelefonoDueno" value="{{$mascota->TelefonoDueno}}" placeholder="Disabled input" disabled>
        </div>
    
        <div>
            <label for="">Nombre de mascota</label>
            <input class="form-control" type="text" name="NombreMascota" value="{{$mascota->NombreMascota}}" placeholder="Disabled input" disabled>
        </div>

        <div>
            <label for="">Especie</label>
            <input type="text" name="EspecieMascota" value="{{$mascota->EspecieMascota}}" class="form-control">
        </div>
    
        <div>
            <label for="">Raza</label>
            <input type="text" name="RazaMascota" value="{{$mascota->RazaMascota}}" class="form-control">
        </div>
    
        <div>
            <label for="">Peso</label>
            <input type="text" name="PesoMascota" value="{{$mascota->PesoMascota}}" class="form-control">
        </div>
 
        <div class="input-group mt-4">
                <select name="AsistenciaStatus" class="form-select" id="inputGroupSelect01">
                    <option selected>{{$mascota->AsistenciaStatus}}</option>
                    <option value="En espera">En espera...</option>
                    <option value="Asistio">Asistio</option>
                    <option value="No Asistio">no asistio</option>
                </select>            
          </div>
    
        <div>
            <input type="submit" value="Agregar" class="btn btn-success mt-3">
        </div>
    
    </form>

</div>


@endsection