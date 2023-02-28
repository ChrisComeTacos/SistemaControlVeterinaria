@extends('layouts.inicio')

@section('content')

<a href="{{ route('mascotas.create') }}" >Agregar</a> 

<a href="{{ route('admin.index') }}" >Volver</a> 

<h1 class="m-4">Administración de mascotas</h1>

<table class="table m-3" border="1">
    <thead>
        <th>id</th>
        <th>Nombre del dueño</th>
        <th>Apellido P.</th>
        <th>Apellido M.</th>
        <th>Nombre de mascota</th>
        <th>Raza de mascota</th>
        <th>Diagnostico</th>
    </thead>
    <tbody>
        @foreach ($mascotas as $mascota)
            <tr>
                <td>{{$mascota->id}}</td>
                <td>{{$mascota->NombreDueno}}</td>
                <td>{{$mascota->ApellidoP}}</td>
                <td>{{$mascota->ApellidoM}}</td>
                <td>{{$mascota->NombreMascota}}</td>
                <td>{{$mascota->RazaMascota}}</td>
                <td>{{$mascota->DiagnosticoMascota}}</td>
                <td>
                    <a href="{{ route('mascotas.edit',$mascota->id) }}">Editar</a>
                </td>

                <td>
                    <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Eliminar</button>

                    </form>
                </td>
                         
            </tr>
        @endforeach
    </tbody>
</table>
    
@endsection

@section('CRUDmascotas')


@endsection