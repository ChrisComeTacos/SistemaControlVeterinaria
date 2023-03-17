<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    {{-- <img class="wave2" src="/img/FondoPagina.png"> --}}

    {{-- <div class="p-3 d-flex mb-3">
    
        <div class="me-auto p-2">
    
            <select class="form-select" aria-label="Default select example">
    
                <option selected>ID de paciente</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
    
        </div>
    
        <div class="p-2">
            <a class="btn btn-light" href="">Volver</a>
        </div>
    
    </div> --}}

    @foreach ($mascota as $mascota)

    <table>
        <td>{{$mascota->NombreMascota}}</td>
        <td>{{$mascota->EspecieMascota}}</td>
        <td>{{$mascota->RazaMascota}}</td>
        <td>{{$mascota->PesoMascota}} Kg.</td>
        <td></td>
    </table>

      @endforeach
    
                    {{-- <a class="btn btn-primary" href="#">Descargar PDF</a> --}}
                </div>
              </div>
        
        </div>
    
    </div>

</body>

</html>




{{-- <style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .datos{
        position:relative;
        right:465px;
    }

    #logo {
        position:absolute;
        top:60px;
    }
</style> --}}


{{-- <table width="100%">
    <tr>
        <td valign="top"><img id="logo" src="/img/cat.png" alt="" class="img-fluid" alt="" height="500"width="500"/></td>
        <td align="right">
            <div class="datos">
            <h3>Arq. José Alejandro Torres Uc</h3>
            <pre>
                <b>RFC: </b>TOUA860228JE7.
                <b>Dirección: </b>Calle 5 # 100-B Col. Bellavista. 
                <b>C.P.: </b>24020.
                <b>Tel: </b>9811699144.
                <b>Ciudad: </b>San Francisco de Campeche, Camp.
            </pre>
            </div>

        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><h1>PRESUPUESTO</h1></td>
        <td><strong>Fecha:</strong></td>
        <td><strong>Cliente:</strong></td>
    </tr>

  </table>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>ID</th>
        <th>Descripción</th>
        <th>Unidad</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
                        <tr align="center">
                            <td>Hola Mundo, esta es una prueba</td>
                            <td>Hola Mundo, esta es una prueba</td>
                            <td>Hola Mundo, esta es una prueba</td>
                            <td>Hola Mundo, esta es una prueba</td>
                            <td>Hola Mundo, esta es una prueba</td>
                            <td>Hola Mundo, esta es una prueba</td>
                        </tr>
                    </tbody>
    <br>

    <tfoot>

        <tr>
            <td>Hola Mundo</td>
            <td>Hola Mundo</td>
            <td>Hola Mundo</td>
        </tr>

        <tr>


            <td colspan="4"></td>
            <td align="right">Total</td>
            <td align="right" class="gray">$1000 MXN</td>
        </tr>

    </tfoot>
  </table>

  <div class="terminos">
  <table width="100%">
    <tr>
        <td align="left">
            <pre>
Presupuesto válido 20 días después de la fecha entregada.

En este mismo presupuesto se anexa el contrato para fines que requiera el contratante.

El costo del presupuesto y el tiempo de entrega puede variar durante la construcción según 
modificaciones o alteraciones en obra, de variaciones en precios de los materiales, proveedores, 
combustibles o accidentes ocasionados por la naturaleza.

El tipo cimentación puede variar según tipo de suelo y la profundidad puede ser variable hasta 
encontrar el subsuelo adecuado para realizar la cimentación.

Para iniciar la obra se requiere del 50 % del importe total del presupuesto o dependiendo de la 
magnitud de la construcción a realizar, para tener continuidad de la obra se requiere de abonos 
durante la construcción según requiera el Arquitecto o Constructor, de lo contrario se suspende las
actividades laborales para la construcción y el Arquitecto no se hace responsable de los daños por abandono de obra.

En caso de que surjan trabajos fuera de lo estipulado en el anexo de presupuesto, surgirá una nueva partida como, 
gastos extraordinarios de obra.
            
La parte contratada se compromete a construir lo estipulado en el presupuesto que se anexa en el presente contrato, 
en un tiempo aproximado de ________________________ a partir del día ___________________________________.

Los gastos generados por el trámite del permiso de construcción son a cuenta del cliente.


            </pre>
        </td>
    </tr>
  </div> --}}