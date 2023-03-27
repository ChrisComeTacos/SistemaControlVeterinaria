@extends('layouts.inicio')

@section('content')

<img class="wave2" src="/img/InicioBG.png">

    <div class="row row align-items-center">
        <div class="col-6">

            <h1 class="m-5">Ingresa los datos de la medicina</h1>

            <form action="{{ route('medicinas.store') }}" style="width: 600px; height: 300px," class="m-5 justify-content-center align-items-center" method="POST">
                @csrf
            
                <div class="input-group mb-3">
                    <div class="input-group">
                        <input type="text" name="NombreMedicamento" class="form-control" placeholder="Nombre">

                            <select name="TipoMedicamento" class="form-select" id="inputGroupSelect01">
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

                      @error('NombreMedicamento')
                      <small>
                          <strong>¡El campo debe estar lleno!</strong>
                      </small>
                      @enderror
                
                </div>
            
                <div class="input-group mb-3">
                    <div class="input-group">
                        <input type="text" name="ContenidoMedicamento" class="form-control" placeholder="Cantidad">
                        <select name="medida" class="form-select" id="inputGroupSelect01">
                            <option value="Ml">Mililitro/s</option>
                            <option value="Mg">Miligramo/s</option>
                            <option value="g">Gramo/s</option>
                        </select>            
                    </div>
                    @error('ContenidoMedicamento')
                    <small>
                        <strong>¡El campo debe estar lleno!</strong>
                    </small>
                    @enderror
                
                </div>
        
                    <div class="input-group mb-3">
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" name="PrecioMedicamento" aria-label="Amount (to the nearest dollar)" placeholder="Precio">
                            <span class="input-group-text">.00</span>
                        </div>
                        @error('PrecioMedicamento')
                        <small>
                            <strong>¡El campo debe estar lleno!</strong>
                        </small>
                        @enderror
                    </div>

            
                    <div class="input-group mb-3">
                        <div class="input-group">
                        <input type="text" class="form-control" name="cantidad" aria-label="Amount (to the nearest dollar)" placeholder="Unidades">
                        <span class="input-group-text">Pz</span>
                        </div>
                        @error('cantidad')
                        <small>
                            <strong>¡El campo debe estar lleno!</strong>
                        </small>
                        @enderror
                    </div>

                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary" type="submit" value="agregar">Button</button>
                    <button class="btn btn-secondary" type="submit" value="">Button</button>
                </div>    
            
            </form>

        </div>
        <div class="col-6">

            <img style="height: 700px; width: 700px;" src="/img/Illustration1.svg">


        </div>
    </div>
    

@endsection

