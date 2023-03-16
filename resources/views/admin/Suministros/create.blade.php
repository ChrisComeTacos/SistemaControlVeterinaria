@extends('layouts.inicio')

@section('content')

<img class="wave2" src="/img/InicioBG.png">

    <div class="row row align-items-center">
        <div class="col-6">

            <h1 class="m-5">Ingresa los datos del suministro</h1>

            <form action="{{ route('suministros.store') }}" style="width: 600px; height: 300px," class="m-5 justify-content-center align-items-center" method="POST">
                @csrf
            
                <div class="input-group mb-3">
                    <div class="input-group">
                        <input type="text" name="NombreSuministro" class="form-control" placeholder="Nombre">
                            <select name="AreaSuministro" class="form-select" id="inputGroupSelect01">
                                <option selected>Tipo</option>
                                <option value="Pastillas/Capsulas">Quirurgico</option>
                                <option value="Unguento">Oficina</option>
                                <option value="Crema">Limpieza</option>
                            </select>            
                      </div>
                
                </div>
        
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <input type="text" class="form-control" name="PrecioSuministro" aria-label="Amount (to the nearest dollar)" placeholder="Precio">
                        <span class="input-group-text">.00</span>
                    </div>
            
                <div>
                    <input type="text" name="CantidadSuministro" class="form-control mb-3" placeholder="Unidades">
                </div>
            
                <div>
                    <input type="submit" value="Agregar" class="btn btn-success mt-3">
                </div>
            
            </form>

        </div>
        <div class="col-6">

            <img style="height: 700px; width: 700px;" src="/img/Illustration1.svg">


        </div>
    </div>
    

@endsection

