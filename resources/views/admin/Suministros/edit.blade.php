@extends('layouts.inicio')

@section('content')

<div class="container mt-5">

    <form action="{{ route('suministros.update',$suministro) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">Nombre del medicamento</label>
            <input type="text" name="NombreSuministro" value="{{$suministro->NombreSuministro}}" class="form-control">
        </div>

        <div>
            <label for="">Tipo del medicamento</label>
            <input type="text" name="AreaSuministro" value="{{$suministro->AreaSuministro}}" class="form-control">
        </div>

        <div>
            <label for="">Contenido del medicamento</label>
            <input type="text" name="PrecioSuministro" value="{{$suministro->PrecioSuministro}}" class="form-control">
        </div>
    
        <div>
            <label for="">Precio</label>
            <input type="text" name="CantidadSuministro" value="{{$suministro->CantidadSuministro}}" class="form-control">
        </div>
    
        <div>
            <input type="submit" value="Agregar" class="btn btn-success mt-3">
        </div>
    
    </form>

</div>


@endsection