@extends('layouts.inicio')


@section('content')

<img class="wave2" src="img/FondoPagina.png">

<div class="tabla">

    <div class="p-3 d-flex mb-3">

        <div class="p-2 flex-grow-1">

            <form action="{{ route('especies.index')}}" method="GET">
                <div class="btn-group">
                    <input type="text" name="busqueda" class="form-control">
                    <input type="submit" value="Buscar" class="btn btn-primary">
                </div>
            </form>
        </div>
    
        <div class="p-2">
            <a class="btn btn-success" href="{{ route('especies.create') }}">Agregar</a>
            <a class="btn btn-light" href="{{ route('admin.index') }}">Volver</a>
        </div>
    
    </div>

    {{-- SE PUEDE MOSTRAR LOS DATOS DEL MEDICO --}}

    <div class="card">
        <div class="card-header">
            <h1>Administración de especies</h1>
        </div>
        
        <div class="card-body">
            <h5 class="card-title">Lista de especies que la veterinaria puede aceptar.</h5>
    
            <div class="table-responsive sm">

                <table class="table">
                    <thead>
                            <th class="text-center">ID</th>
                            <th class="text-center">Nombre de la especie</th>
                            <th class="text-center"></th>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($especies as $especie)
                            <tr>
                                <th class="text-center">{{$especie->id}}</th>
                                <td class="text-center">{{$especie->NombreEspecie}}</td>
                                <td>
                                    <div class="btn-group">
    
                                    <a class="btn btn-warning" href="{{ route('especies.edit',$especie) }}">Editar</a>
                
                                    <form action="{{ route('especies.destroy', $especie->id) }}" method="POST" class="formEliminar">
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
                            <td colspan="12"> {{$especies->appends(['busqueda'=>$busqueda])}}</td>
                        </tr>
                    </tfoot>
                </table>


            </div>
            
        </div>
    
    </div>

</div>




@endsection

@section('js')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<script>

(function() {
  'use strict'

  var forms = document.querySelectorAll('.formEliminar')

  Array.prototype.slice.call(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
        event.preventDefault()
        event.stopPropagation()
        Swal.fire({
            title: '¿Estás seguro que quieres eliminarlo?',
            // text: "¡No es posible revertirlo!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, elimínalo!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit();
                Swal.fire(
                '¡Eliminado!',
                'El registro ha sido eliminado exitosamente.',
                'success'
                )
            }
        })

    }, false)
  })
})()
</script>



@endsection

