<?php
define('hostname', 'localhost');
define('user', 'root');
define('password', 'surfing');
define('databaseName', 'clientes');
$connect = mysqli_connect(hostname, user, password, databaseName);
if(!$connect = mysqli_connect(hostname, user, password, databaseName)){
	echo 'exit' ;
}
else{
	echo 'Great';
}
?>