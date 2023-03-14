@extends('layouts.inicio')

@section('content')

<div class="container mt-5">

    <form action="{{ route('medicinas.store') }}" method="POST">
        @csrf
        <div>
            <label for="">Nombre del medicamento</label>
            <input type="text" name="NombreMedicamento" class="form-control">
        </div>
    
        <div>
            <label for="">Precio</label>
            <input type="text" name="precio" class="form-control">
        </div>
    
        <div>
            <label for="">Cantidad</label>
            <input type="text" name="cantidad" class="form-control">
        </div>

        <div>
            <input type="submit" value="Agregar" class="btn btn-success mt-3">
        </div>
    
    </form>

</div>

@endsection