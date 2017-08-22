<?php
function getTime(){
$hora = date('h:i:s');
echo $hora . "<br/>";
}
function timeZone(){
	date_default_timezone_set('America/Costa_Rica');
$script_tz = date_default_timezone_get();
if (strcmp($script_tz, ini_get('date.timezone'))){
echo 'La zona horaria del script difiere de la zona horaria de la configuracion ini.';
} else {
echo 'La zona horaria del script y la zona horaria de la configuración ini coinciden.';
}
}
getTime();
timeZone();
?>