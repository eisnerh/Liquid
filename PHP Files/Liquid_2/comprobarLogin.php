<?php

try{
    $conn = new PDO('mysql:host=localhost;dbname=liquidar','root','');
    echo 'Conexion realizada';
}
catch (PDOException $ex) {
    echo $ex->getMessage();
    exit;
}
if(isset($_POST['formulario'])) {
    /* @var $_POST type */
    $nombre = $_POST["txtusuario"];
    $pass = $_POST["txtviaje"];


    $query = ("SELECT camion,viaje FROM inicio "
        . "WHERE `camion`='" . mysqli_real_escape_string($nombre) . "' AND "
        . "`viaje`='" . mysqli_real_escape_string($pass) . "'");

    $rs = mysqli_query($query);
    $row = mysqli_fetch_object($rs);
    $nr = mysqli_num_rows($rs);
}

if($nr == 1){

    echo 'No ingreso';
}

else if($nr == 0) {

    header("Location:principal.php");
}

?>