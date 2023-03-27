@extends('layouts.inicio')

@section('content')
<img class="wave2" src="/img/FondoPagina.png">

<div class="p-3 d-flex mb-3">



    <div class="p-2">
        <a class="btn btn-light" href="{{ route('especies.index') }}">Volver</a>
    </div>

</div>

<div class="row align-items-center justify-content-center m-1">

    <div class="col-sm-6">
        
        <div class="card">
            <div class="card-header">

            <form action="{{ route('especies.store') }}" method="POST">
                @csrf

            </div>
            <div class="card-body">

            <h5 class="card-title mb-3">Agregar especie</h5>
                
            <div class="row g-2 mb-3">
                <div class="col-md">
                    <div class="form-floating">
                        <input type="text" class="form-control" name="NombreEspecie" placeholder="Especie">
                        <label for="floatingInputGrid">Nombre</label>
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
