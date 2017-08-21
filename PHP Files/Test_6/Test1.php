<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect( "localhost", "root", "surfing", "clientes" );
// Check connection
if ( $link === FALSE ) {
	die( "ERROR: Could not connect. " . mysqli_connect_error() );
}
// Escape user inputs for security
$n_Guia              = mysqli_real_escape_string( $link, $_REQUEST["n_Guia"] );
$chofer              = mysqli_real_escape_string( $link, $_REQUEST["chofer"] );
$camion              = mysqli_real_escape_string( $link, $_REQUEST["camion"] );
$chequeador          = mysqli_real_escape_string( $link, $_REQUEST["chequeador"] );
$fecha               = mysqli_real_escape_string( $link, $_REQUEST["fecha"] );
$hora_llegada        = mysqli_real_escape_string( $link, $_REQUEST["hora_llegada"] );
$hora_entr_almacen   = mysqli_real_escape_string( $link, $_REQUEST["hora_entr_almacen"] );
$hora_inicio_chequeo = mysqli_real_escape_string( $link, $_REQUEST["hora_inicio_chequeo"] );
$hora_salida_almacen = mysqli_real_escape_string( $link, $_REQUEST["hora_salida_almacen"] );
// attempt insert query execution
$sql = "INSERT INTO liquidar(n_Guia, chofer, camion, chequeador, fecha, hora_llegada, hora_entr_almacen, hora_inicio_chequeo, hora_salida_almacen) VALUES ('$n_Guia', '$chofer', '$camion', '$chequeador', '$fecha', '$hora_llegada', '$hora_entr_almacen', '$hora_inicio_chequeo', '$hora_salida_almacen')";
if ( mysqli_query( $link, $sql ) ) {
	echo "Records added successfully.";
} else {
	echo "ERROR: Could not able to execute $sql. " . mysqli_error( $link );
}
// close connection
mysqli_close( $link );
?>