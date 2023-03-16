<?php 
    include("../../php/conexion_be.php");

    $sql="SELECT id, descripcion, unidad, cantidad, precio_unitario, cantidad * precio_unitario AS subtotal FROM presupuesto";
    $query=mysqli_query($conexion,$sql);

    $fcha = date("Y-m-d");

    $nombre_cliente=$_POST['nombre_cliente'];
    $iva = $_POST['agregar_iva'];
    
    ob_start();

?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Presupuesto JACTORRES</title>




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
        right:465px;
    }

    #logo {
        position:absolute;
        top:60px;
    }

    /* #qr{
        position: absolute;
        height:130px;
        width: 130px;
    } */
</style>

</head>
<body>


  <table width="100%">
    <tr>
        <td valign="top"><img id="logo" src="http://<?php echo $_SERVER['HTTP_HOST'] ?>/estudio_arquitectura/assets/img/LogoJACTORRES.png" alt="" class="img-fluid" alt="" height="40"width="325"/></td>
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
        <td><strong>Fecha:</strong> <?php echo $fcha;?></td>
        <td><strong>Cliente:</strong> <?php echo $nombre_cliente?></td>
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
                        <?php
                            $total = 0;
                            while($row=mysqli_fetch_array($query)) {

                            $total = $total + $row['subtotal'];

                        ?>
                        <tr align="center">
                            <td><?php echo $row['id'] ?></td>
                            <td align="left"><?php echo $row['descripcion'] ?></td>
                            <td><?php echo $row['unidad'] ?></td>
                            <td><?php echo $row['cantidad'] ?></td>
                            <td>$<?php echo number_format($row['precio_unitario'], 2, '.', ','); ?></td>
                            <td>$<?php echo number_format($row['subtotal'], 2, '.', ','); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
    <br>

    <?php
        $calculoIVA = $total * $iva;
        $resultado = $calculoIVA + $total;
    ?>

    <tfoot>

        <tr>
            <td colspan="4"></td>
            <td align="right">I.V.A</td>
            <td align="right" class="gray">$<?php echo number_format($calculoIVA, 2, '.', ','); ?></td>
        </tr>

        <tr>


            <td colspan="4"></td>
            <td align="right">Total</td>
            <td align="right" class="gray">$<?php echo number_format($resultado, 2, '.', ','); ?></td>
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
  </div>
</body>
</html>

<?php

$html=ob_get_clean();
// echo $html;

require_once '../libreria/dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();

$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));
$dompdf->setOptions($options);

$dompdf->loadHtml($html);

$dompdf->setPaper('letter');

$dompdf->render();

$dompdf->stream("presupuesto.pdf", array("Attachment" => false));


?>