<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 20/8/2017
 * Time: 4:10 PM
 */


	$db_host="localhost";
	$db_name="liquidar";
	$db_user="root";
	$db_pass="";
    include 'assets/simplexlsx.class.php';
    $xlsx = new SimpleXLSX( 'upload/clientes.xlsx' );
    try {
        $conn = new PDO( "mysql:host=$db_host;dbname=$db_name", "$db_user", "$db_pass");
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo $sql . "<br>" . $e->getMessage();
    }

    $stmt = $conn->prepare( "INSERT INTO inicio (n_Guia, chofer, camion, fecha, viaje) VALUES (?, ?, ?, ?, ?)");

    $stmt->bindParam( 1, $n_Guia);
    $stmt->bindParam( 2, $chofer);
    $stmt->bindParam( 3, $camion);
    $stmt->bindParam( 4, $fecha);
    $stmt->bindParam( 5, $viaje);
    foreach ($xlsx->rows() as $fields)
    {
        $n_Guia = $fields[0];
        $chofer = $fields[1];
        $camion = $fields[2];
        $fecha = $fields[3];
        $viaje = $fields[4];

        $stmt->execute();
    }
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
                <h3>REGISTRO GUARDADO</h3>
            <a href="principal.php" class="btn btn-primary">Regresar</a>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"></script>
</body>
</html>
