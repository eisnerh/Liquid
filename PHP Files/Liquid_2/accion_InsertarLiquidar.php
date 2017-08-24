<?php

require 'controller/connection.php';
/*INSERT INTO `liquidar`.`liquidar`
(`n_Guia`,
`chofer`,
`camion`,
`chequeador`,
`fecha`,
`hora_llegada`,
`hora_entr_almacen`,
`hora_inicio_chequeo`,
`hora_salida_almacen`,
`inicio_id_inicio`)
VALUES
('$n_Guia','$chofer','$camion','$chequeador','$fecha','$hora_llegada','$hora_entr_almacen','$hora_inicio_chequeo','$hora_salida_almacen','1');*/

$n_Guia = $_POST['n_Guia'];
$chofer = $_POST['chofer'];
$camion = $_POST['camion'];
$chequeador = $_POST['chequeador'];
$fecha = $_POST['fecha'];
$hora_llegada = $_POST['hora_llegada'];
$hora_entr_almacen = $_POST['hora_entr_almacen'];
$hora_inicio_chequeo = $_POST['hora_inicio_chequeo'];
$hora_salida_almacen = $_POST['hora_salida_almacen'];
$inicio_id_inicio1 = $_POST['inicio_id_inicio1'];


/** @var $sql */
$sql = "INSERT INTO liquidar (
n_Guia, 
chofer, 
camion, 
chequeador, 
fecha, 
hora_llegada, 
hora_entr_almacen, 
hora_inicio_chequeo, 
hora_salida_almacen, 
inicio_id_inicio1) VALUES (
'$n_Guia',
'$chofer',
'$camion',
'$chequeador',
'$fecha',
'$hora_llegada',
'$hora_entr_almacen',
'$hora_inicio_chequeo',
'$hora_salida_almacen',
'$inicio_id_inicio1')";
$resultado = $mysqli->query($sql);

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
            <?php if($resultado) {?>
                <h3>REGISTRO GUARDADO</h3>
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