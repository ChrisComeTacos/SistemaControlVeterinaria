@extends('layouts.inicio')


@section('content')

<img class="wave2" src="img/FondoPagina.png">

<div class="tabla">

    <div class="p-3 d-flex mb-3">

        <div class="p-2 flex-grow-1">

            <form action="{{ route('suministros.index')}}" method="GET">
                <div class="btn-group">
                    <input type="text" name="busqueda" class="form-control">
                    <input type="submit" value="Buscar" class="btn btn-primary">
                </div>
            </form>
        </div>
    
        <div class="p-2">
            <a class="btn btn-success" href="{{ route('suministros.create') }}">Agregar</a>
            <a class="btn btn-light" href="{{ route('admin.index') }}">Volver</a>
        </div>
    
    </div>

    <div class="card">
        <div class="card-header">
            <h1>Administración de suministros</h1>
        </div>
        
        <div class="card-body">
            <h5 class="card-title">Lista de suministros con las que cuenta la veterinaria para su uso o venta.</h5>
    
            <table class="table table-responsive">
                <thead>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nombre </th>
                        <th class="text-center">Área</th></th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Cantidad</th>
                        <th></th>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($suministros as $suministro)
                        <tr>
                            <th class="text-center">{{$suministro->id}}</th>
                            <td class="text-center">{{$suministro->NombreSuministro}}</td>
                            <td class="text-center">{{$suministro->AreaSuministro}}</td>
                            <td class="text-center">{{$suministro->PrecioSuministro}}</td>
                            <td class="text-center">{{$suministro->CantidadSuministro}}</td>
                            <td>
                                <div class="btn-group">
            
                                <a class="btn btn-primary" href="{{ route('suministros.show',$suministro) }}">+</a>
                                <a class="btn btn-warning" href="{{ route('suministros.edit',$suministro) }}">Editar</a>
            
                                <form action="{{ route('suministros.destroy', $suministro->id) }}" method="POST">
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
                        <td colspan="8"> {{$suministros->appends(['busqueda'=>$busqueda])}}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    
    </div>

</div>




@endsection