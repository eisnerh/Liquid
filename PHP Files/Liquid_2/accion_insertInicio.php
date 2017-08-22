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