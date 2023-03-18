@extends('layouts.inicio')


@section('content')

<img class="wave2" src="img/FondoPagina.png">

<div class="tabla">

    <div class="p-3 d-flex mb-3">

        <div class="row">
            <div class="col-sm-8">

                <div class="p-2 flex-grow-1">

                    <form action="{{ route('mascotas.index')}}" method="GET">
                        <div class="btn-group">
                            <input type="text" name="busqueda" class="form-control">
                            <input type="submit" value="Buscar" class="btn btn-primary">
                        </div>
                    </form>
                </div>

            </div>
            
            <div class="col-sm-4">

                <div class="p-2" >
                    <a class="btn btn-light" href="{{ route('admin.index') }}">Volver</a>
                </div>

            </div>
        </div>


    

    
    </div>

    <div class="card">
        <div class="card-header">
            <h1>Administración de mascotas</h1>
        </div>
        
        <div class="card-body">
            <h5 class="card-title">Lista de mascotas que acudieron a su cita</h5>
    
            <div class="table-responsive sm">

                <table class="table">
                    <thead>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nombre del dueño</th>
                            <th class="text-center">Apellido P.</th>
                            <th class="text-center">Apellido M.</th>
                            <th class="text-center">Telefono</th>
                            <th class="text-center">Nombre de mascota</th>
                            <th class="text-center">Especie</th>
                            <th class="text-center">Raza</th>
                            <th class="text-center">Peso</th>
                            <th class="text-center">Fecha de cita</th>
                            <th class="text-center">Asistencia</th>
                            <th class="text-center"></th>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($mascotas as $mascota)
                            <tr>
                                <th class="text-center">{{$mascota->id}}</th>
                                <td class="text-center">{{$mascota->NombreDueno}}</td>
                                <td class="text-center">{{$mascota->ApellidoP}}</td>
                                <td class="text-center">{{$mascota->ApellidoM}}</td>
                                <td class="text-center">{{$mascota->TelefonoDueno}}</td>
                                <td class="text-center">{{$mascota->NombreMascota}}</td>
                                <td class="text-center">{{$mascota->EspecieMascota}}</td>
                                <td class="text-center">{{$mascota->RazaMascota}}</td>
                                <td class="text-center">{{$mascota->PesoMascota}}</td>
                                <td class="text-center text-primary">{{$mascota->FechaCita}}</td>
                                <td class="text-center">{{$mascota->AsistenciaStatus}}</td>
                                <td>
                                    <div class="btn-group">
                
                                    <a class="btn btn-primary" href="{{ route('mascotas.show',$mascota) }}">Imprimir</a>
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
                            <td colspan="12"> {{$mascotas->appends(['busqueda'=>$busqueda])}}</td>
                        </tr>
                    </tfoot>
                </table>


            </div>
            
        </div>
    
    </div>

</div>




@endsection

