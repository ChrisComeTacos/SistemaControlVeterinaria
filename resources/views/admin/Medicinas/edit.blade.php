@extends('layouts.inicio')

@section('content')

<div class="container mt-5">

    <form action="{{ route('medicinas.update',$medicina) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-group">
            <input type="text" name="NombreMedicamento" value="{{$medicina->NombreMedicamento}}" class="form-control" placeholder="Nombre">
                <select name="TipoMedicamento" class="form-select" id="inputGroupSelect01">
                    <option selected>{{$medicina->TipoMedicamento}}</option>
                    <option value="Pastillas/Capsulas">Pastillas/Capsulas</option>
                    <option value="Solucion oral">Solucion oral</option>
                    <option value="Unguento">Unguento</option>
                    <option value="Crema">Crema</option>
                    <option value="Crema">Gotas oftalmicas</option>
                    <option value="Inyeccion">Inyeccion</option>
                    <option value="Pasta">Pasta</option>
                    <option value="Polvo">Polvo</option>
                    <option value="Aerosol">Aerosol</option>
                </select>            
          </div>

        <div>
            <label for="">Contenido del medicamento</label>
            <input type="text" name="ContenidoMedicamento" value="{{$medicina->ContenidoMedicamento}}" class="form-control">
        </div>
    
        <div>
            <label for="">Precio</label>
            <input type="text" name="PrecioMedicamento" value="{{$medicina->PrecioMedicamento}}" class="form-control">
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