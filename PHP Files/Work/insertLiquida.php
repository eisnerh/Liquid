<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    require 'connection.php';
    createProduct();
}

function createProduct(){
    global $connect;

    $n_Guia=$_POST["n_Guia"];
	$chofer=$_POST["chofer"];
	$camion=$_POST["camion"];
	$chequeador=$_POST["chequeador"];
	$fecha=$_POST["fecha"];
	$hora_llegada=$_POST["hora_llegada"];
	$hora_entr_almacen=$_POST["hora_entr_almacen"];
	$hora_inicio_chequeo=$_POST["hora_inicio_chequeo"];
	$hora_salida_almacen=$_POST["hora_salida_almacen"];
	$query = "INSERT INTO liquidar(n_Guia, chofer, camion, chequeador, fecha, hora_llegada, hora_entr_almacen, hora_inicio_chequeo, hora_salida_almacen) VALUES ('$n_Guia', '$chofer', '$camion', '$chequeador', '$fecha', '$hora_llegada', '$hora_entr_almacen', '$hora_inicio_chequeo', '$hora_salida_almacen')";
	mysqli_query($connect, $query) or die (mysqli_errno($connect));
    mysqli_close($connect);
}

?>