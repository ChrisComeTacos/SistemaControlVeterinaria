@extends('layouts.inicio')

@section('content')

<div class="container mt-5">

    <form action="{{ route('mascotas.update',$mascota) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">Nombre del dueño</label>
            <input type="text" name="NombreDueno" value="{{$mascota->NombreDueno}}" class="form-control">
        </div>
    
        <div>
            <label for="">Apellido P.</label>
            <input type="text" name="ApellidoP" value="{{$mascota->ApellidoP}}" class="form-control">
        </div>
    
        <div>
            <label for="">Apellido M.</label>
            <input type="text" name="ApellidoM" value="{{$mascota->ApellidoM}}" class="form-control">
        </div>
    
        <div>
            <label for="">Nombre de mascota</label>
            <input type="text" name="NombreMascota" value="{{$mascota->NombreMascota}}" class="form-control">
        </div>
    
        <div>
            <label for="">Raza de mascota</label>
            <input type="text" name="RazaMascota" value="{{$mascota->RazaMascota}}" class="form-control">
        </div>
    
        <div>
            <label for="">Diagnóstico</label>
            <input type="text" name="DiagnosticoMascota" value="{{$mascota->DiagnosticoMascota}}" class="form-control">
        </div>
    
        <div>
            <input type="submit" value="Agregar" class="btn btn-success mt-3">
        </div>
    
    </form>

</div>


@endsection