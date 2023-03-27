<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style type="text/css">
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
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
            right:45px;
        }
    
        #logo {
            position:absolute;
            top: -10px;
        }

        th,td {
            padding: 6px;
        }
    </style>
</head>

<body>

    <table width="100%">
        <tr>
            <td valign="top"><img id="logo" src="img/vetLogoPDF.png" alt="" class="img-fluid" alt="" height="100"width="100"/></td>
            <td align="right">
                <div class="datos">
                <h3>VETERINARIA</h3>
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
            <td><h1>RECETA MÉDICA</h1></td>
            <td><strong>Fecha:</strong> {{$consulta->FechaCita}}</td>
            <td><strong>Cliente:</strong> {{$consulta->NombreDueno}} {{$consulta->ApellidoP}} {{$consulta->ApellidoM}}</td>
        </tr>
    
      </table>
    
      <table width="100%" border="1">
        <thead style="background-color: lightgray;">
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Especie</th>
                <th class="text-center">Raza</th>
                <th class="text-center">Peso</th>
        </thead>
        <tbody>

                <tr>
                    <td class="text-center">{{$consulta->id}}</td> class="text-center"
                    <td class="text-center">{{$consulta->NombreMascota}}</td>
                    <td class="text-center">{{$consulta->EspecieMascota}}</td>
                    <td class="text-center">{{$consulta->RazaMascota}}</td>
                    <td class="text-center">{{$consulta->PesoMascota}} Kg.</td>     
                </tr>
        </tbody>

      </table>

    <br>
    <h3>Diagnóstico</h1>

    <p>{{$consulta->DiagnosticoMascota}}</p>





</body>

</html>







