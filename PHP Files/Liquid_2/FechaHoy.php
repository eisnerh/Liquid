<?php
/**
 * Created by PhpStorm.
 * User: usuario
 * Date: 22/8/2017
 * Time: 4:20 PM
 */

function getDia()
{
    $fecha = date('d.m.Y');
    echo "  " . $fecha;
}


function getTiempo()
{
    $hora = date('G:i:s');
    echo "  " . $hora;
}



?>
