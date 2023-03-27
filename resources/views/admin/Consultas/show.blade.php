@extends('layouts.inicio')

@section('content')

<img class="wave2" src="/img/FondoPagina.png">

<div class="p-3 d-flex mb-3">



    <div class="p-2">
        <a class="btn btn-light" href="{{ route('consultas.index') }}">Volver</a>
    </div>

</div>

<div class="row align-items-center justify-content-center m-5">

    <div class="col-sm-6">
        
        <div class="card">
            <div class="card-header">
              Receta médica
            </div>
            <div class="card-body">
              <h5 class="card-title mb-3">Información del paciente</h5>

              <div class="row g-2 mb-3">
                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Nombre de la mascota" value="{{$consulta->NombreMascota}}">
                    <label for="floatingInputGrid">Nombre de la mascota</label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Raza" value="{{$consulta->EspecieMascota}}">
                    <label for="floatingInputGrid">Especie</label>
                  </div>
                </div>
              </div>

              <div class="row g-2 mb-3">
                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Nombre de la mascota" value="{{$consulta->RazaMascota}}">
                    <label for="floatingInputGrid">Raza</label>
                  </div>
                </div>
                <div class="col-md">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInputGrid" placeholder="Raza" value="{{$consulta->PesoMascota}} Kg.">
                    <label for="floatingInputGrid">Peso</label>
                  </div>
                </div>
              </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Diagnóstico</label>
                    <textarea name="DiagnosticoMascota" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$consulta->DiagnosticoMascota}}"></textarea>
                </div>

                <a class="btn btn-primary" href="{{ route('consultas.pdf', $consulta)}}">Descargar PDF</a>
            </div>
          </div>
    
    </div>

</div>


@endsection