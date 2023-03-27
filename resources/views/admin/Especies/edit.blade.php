@extends('layouts.inicio')

@section('content')
<img class="wave2" src="/img/FondoPagina.png">

<div class="p-3 d-flex mb-3">



    <div class="p-2">
        <a class="btn btn-light" href="{{ route('mascotas.index') }}">Volver</a>
    </div>

</div>

<div class="row align-items-center justify-content-center m-1">

    <div class="col-sm-6">
        
        <div class="card">
            <div class="card-header">

            <form action="{{ route('especies.update',$especie) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              Receta médica
            </div>
            <div class="card-body">

            <h5 class="card-title mb-3">Información del dueño</h5>
                
            <div class="row g-2 mb-3">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="NombreEspecie" placeholder="Nombre" value="{{$especie->NombreEspecie}}">
                        <label for="floatingInputGrid">Nombre de la especie</label>
                    </div>
                </div>
            </div>

                <input type="submit" value="Agregar" class="btn btn-success mt-3">

            </form>

            </div>
          </div>
    
    </div>

</div>


@endsection

