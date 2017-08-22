}<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 20/8/2017
 * Time: 8:48 PM
 */

	$mysqli = new mysqli('localhost', 'root', '', 'liquidar');

	if($mysqli->connect_error){

        die('Error en la conexion' . $mysqli->connect_error);
    }
?>