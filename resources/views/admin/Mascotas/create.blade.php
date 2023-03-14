@extends('layouts.inicio')

@section('content')

<div class="container mt-5">

    <form action="{{ route('mascotas.store') }}" method="POST">
        @csrf
        <div>
            <label for="">Nombre del dueño</label>
            <input type="text" name="NombreDueno" class="form-control">
        </div>
    
        <div>
            <label for="">Apellido P.</label>
            <input type="text" name="ApellidoP" class="form-control">
        </div>
    
        <div>
            <label for="">Apellido M.</label>
            <input type="text" name="ApellidoM" class="form-control">
        </div>
    
        <div>
            <label for="">Nombre de mascota</label>
            <input type="text" name="NombreMascota" class="form-control">
        </div>
    
        <div>
            <label for="">Raza de mascota</label>
            <input type="text" name="RazaMascota" class="form-control">
        </div>
    
        <div>
            <label for="">Diagnóstico</label>
            <input type="text" name="DiagnosticoMascota" class="form-control">
        </div>
    
        <div>
            <input type="submit" value="Agregar" class="btn btn-success mt-3">
        </div>
    
    </form>

</div>

@endsection

{{-- <th>id</th>
<th>Nombre del dueño</th>
<th>Apellido P.</th>
<th>Apellido M.</th>
<th>Nombre de mascota</th>
<th>Raza de mascota</th>
<th>Diagnostico</th> --}}