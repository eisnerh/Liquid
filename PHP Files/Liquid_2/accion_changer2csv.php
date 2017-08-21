<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 20/8/2017
 * Time: 4:04 PM
 */

//Incluyo la clase
include 'assets/simplexlsx.class.php';
$xlsx = new SimpleXLSX( 'upload/clientes.xlsx' );//Instancio la clase y le paso como parametro el archivo a leer
$fp = fopen( 'upload/datos.csv', 'w');//Abrire un archivo "datos.csv", sino existe se creara
foreach( $xlsx->rows() as $fields ) {//Itero la hoja de calculo
    fputcsv( $fp, $fields);//Doy formato CSV a una línea y le escribo los datos
}
fclose($fp);//Cierro el archivo "datos.csv"
?>