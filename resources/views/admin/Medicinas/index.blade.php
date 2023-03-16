@extends('layouts.inicio')


@section('content')

<img class="wave2" src="img/FondoPagina.png">

<div class="tabla">

    <div class="p-3 d-flex mb-3">

        <div class="p-2 flex-grow-1">

            <form action="{{ route('medicinas.index')}}" method="GET">
                <div class="btn-group">
                    <input type="text" name="busqueda" class="form-control">
                    <input type="submit" value="Buscar" class="btn btn-primary">
                </div>
            </form>
        </div>
    
        <div class="p-2">
            <a class="btn btn-success" href="{{ route('medicinas.create') }}">Agregar</a>
            <a class="btn btn-light" href="{{ route('admin.index') }}">Volver</a>
        </div>
    
    </div>

    <div class="card">
        <div class="card-header">
            <h1>Administración de medicamentos</h1>
        </div>
        
        <div class="card-body">
            <h5 class="card-title">Lista de medicinas con las que cuenta la veterinaria para su uso o venta.</h5>
    
            <table class="table table-responsive">
                <thead>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nombre del medicamento</th>
                        <th class="text-center">Tipo del medicamento</th>
                        <th class="text-center">Contenido del medicamento</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Cantidad</th>
                        <th></th>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($medicinas as $medicina)
                        <tr>
                            <th class="text-center">{{$medicina->id}}</th>
                            <td class="text-center">{{$medicina->NombreMedicamento}}</td>
                            <td class="text-center">{{$medicina->TipoMedicamento}}</td>
                            <td class="text-center">{{$medicina->ContenidoMedicamento}}</td>
                            <td class="text-center">${{$medicina->PrecioMedicamento}}</td>
                            <td class="text-center">{{$medicina->cantidad}}</td>
                            <td>
                                <div class="btn-group">
            
                                    <a class="btn btn-primary" href="{{ route('medicinas.show',$medicina) }}">+</a>
                                    <a class="btn btn-warning" href="{{ route('medicinas.edit',$medicina) }}">Editar</a>
            
                                        <form action="{{ route('medicinas.destroy', $medicina->id) }}" method="POST">
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
                        <td colspan="8"> {{$medicinas->appends(['busqueda'=>$busqueda])}}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    
    </div>

</div>




@endsection