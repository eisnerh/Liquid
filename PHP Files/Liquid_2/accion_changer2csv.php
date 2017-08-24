<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 20/8/2017
 * Time: 4:04 PM
 */

//Incluyo la clase
include 'assets/simplexlsx.class.php';
$xlsx = new SimpleXLSX( 'upload/clientes.xlsx' );//Instancio la clase y le paso como parametro el archivo a leer
$fp = fopen( 'upload/datos.csv', 'w');//Abrire un archivo "datos.csv", sino existe se creara
foreach( $xlsx->rows() as $fields ) {//Itero la hoja de calculo
    fputcsv( $fp, $fields);//Doy formato CSV a una línea y le escribo los datos
}
fclose($fp);//Cierro el archivo "datos.csv"
?>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Liquid@</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" type="text/css" media="screen">
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/npm.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="row" style="text-a">
            <?php if($fp) {?>
                <h3>Archivo Combertido con Exito y Guardado</h3>
            <?php } else { ?>
                <h3>ERROR AL GUARDAR</h3>
            <?php } ?>
            <a href="principal.php" class="btn btn-primary">Regresar</a>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"></script>
</body>
</html>
