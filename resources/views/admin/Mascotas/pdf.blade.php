<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style type="text/css">
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
            right:45px;
        }
    
        #logo {
            position:absolute;
            top:60px;
        }
    </style>
</head>

<body>

    <table width="100%">
        <tr>
            {{-- <td valign="top"><img id="logo" src="/img/cat.png" alt="" class="img-fluid" alt="" height="500"width="500"/></td> --}}
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
            <td><strong>Fecha:</strong></td>
            <td><strong>Cliente:</strong></td>
        </tr>
    
      </table>
    
      <table width="100%">
        <thead style="background-color: lightgray;">
          <tr>
            <th>Nombre de mascota</th>
            <th>Especie</th>
            <th>Raza</th>
            <th>Peso</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$mascota->NombreMascota}}</td>
                <td>{{$mascota->EspecieMascota}}</td>
                <td>{{$mascota->RazaMascota}}</td>
                <td>{{$mascota->PesoMascota}} Kg.</td>
                <td></td>
            </tr>
                        </tbody>
        <br>
    
        <tfoot>
    

    
            <tr>
    
    
                <td colspan="4"></td>
                <td align="right">Total</td>
                <td align="right" class="gray">$1000 MXN</td>
            </tr>
    
        </tfoot>
      </table>

        <br>
        <h3>Diagnóstico</h1>


            <textarea name="" id="" cols="30" rows="10">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam alias impedit distinctio molestiae unde nihil magnam ducimus, ut reprehenderit quaerat expedita. Ratione velit delectus similique ad? Delectus quo doloremque ea aliquid, repellendus libero soluta ducimus, ut aliquam, voluptatem mollitia rerum quaerat sit ullam reprehenderit labore. Molestiae quod eligendi dolor exercitationem, nemo similique laudantium corporis numquam, assumenda suscipit aliquam aperiam omnis!
            </textarea>


    
                    {{-- <a class="btn btn-primary" href="#">Descargar PDF</a> --}}
                </div>
              </div>
        
        </div>
    
    </div>

</body>

</html>







