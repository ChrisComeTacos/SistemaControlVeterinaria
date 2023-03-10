@extends('layouts.inicio')


@section('content')

<img class="wave2" src="img/FondoPagina.png">

<div class="tabla">

    <div class="p-3 d-flex mb-3">

        <div class="p-2 flex-grow-1">

            <form action="{{ route('mascotas.index')}}" method="GET">
                <div class="btn-group">
                    <input type="text" name="busqueda" class="form-control">
                    <input type="submit" value="Buscar" class="btn btn-primary">
                </div>
            </form>
        </div>
    
        <div class="p-2">
            <a class="btn btn-success" href="{{ route('mascotas.create') }}">Agregar</a>
            <a class="btn btn-light" href="{{ route('admin.index') }}">Volver</a>
        </div>
    
    </div>

    <div class="card">
        <div class="card-header">
            <h1>Administración de mascotas</h1>
        </div>
        
        <div class="card-body">
            <h5 class="card-title">Lista de mascotas que acudieron a su cita</h5>
    
            <table class="table table-responsive">
                <thead>
                        <th>ID</th>
                        <th>Nombre del dueño</th>
                        <th>Apellido P.</th>
                        <th>Apellido M.</th>
                        <th>Nombre de mascota</th>
                        <th>Raza de mascota</th>
                        <th>Diagnostico</th>
                        <th></th>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($mascotas as $mascota)
                        <tr>
                            <th>{{$mascota->id}}</th>
                            <td>{{$mascota->NombreDueno}}</td>
                            <td>{{$mascota->ApellidoP}}</td>
                            <td>{{$mascota->ApellidoM}}</td>
                            <td>{{$mascota->NombreMascota}}</td>
                            <td>{{$mascota->RazaMascota}}</td>
                            <td>{{$mascota->DiagnosticoMascota}}</td>
                            <td>
                                <div class="btn-group">
            
                                <a class="btn btn-primary" href="{{ route('mascotas.show',$mascota) }}">+</a>
                                <a class="btn btn-warning" href="{{ route('mascotas.edit',$mascota) }}">Editar</a>
            
                                <form action="{{ route('mascotas.destroy', $mascota->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                    <input type="submit" value="Eliminar" class="btn btn-danger">
                                </form>
                                </div>
                            </td>
                                     
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="8"> {{$mascotas->appends(['busqueda'=>$busqueda])}}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    
    </div>

</div>




@endsection