<?php
// $mysql_database = "id2485344_liquidaciones";
// $mysql_username = "id2485344_admin";

$mysql_database = "clientes";
$mysql_username = "root";
$mysql_password = "surfing";
$mysql_hostname = "localhost";

$con = mysqli_connect( $mysql_hostname, $mysql_username, $mysql_password, $mysql_database );
if ( mysqli_connect_errno( $con ) ) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$username = $_POST['2'];
$password = $_POST['3'];
$result   = mysqli_query( $con, "SELECT dni FROM cliente where nombre='$username' and apellido='$password'" );
$row      = mysqli_fetch_array( $result );
$data     = $row[0];
if ( $data ) {
	echo $data;
}
mysqli_close( $con );
?>
