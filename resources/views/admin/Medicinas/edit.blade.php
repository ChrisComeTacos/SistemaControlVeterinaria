@extends('layouts.inicio')

@section('content')

<div class="container mt-5">

    <form action="{{ route('medicinas.update',$medicina) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="">Nombre del medicamento</label>
            <input type="text" name="NombreMedicamento" value="{{$medicina->NombreMedicamento}}" class="form-control">
        </div>
    
        <div>
            <label for="">Precio</label>
            <input type="text" name="precio" value="{{$medicina->precio}}" class="form-control">
        </div>
    
        <div>
            <label for="">Cantidad</label>
            <input type="text" name="cantidad" value="{{$medicina->cantidad}}" class="form-control">
        </div>
    
        <div>
            <input type="submit" value="Agregar" class="btn btn-success mt-3">
        </div>
    
    </form>

</div>


@endsection