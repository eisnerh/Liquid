<?php
$_SERVER['PHP_SELF'];
//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
{
    //Validamos que el archivo exista
    if($_FILES["archivo"]["name"][$key]) {
        $filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
        $source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo

        $directorio = 'upload/'; //Declaramos un  variable con la ruta donde guardaremos los archivos

        //Validamos si la ruta de destino existe, en caso de no existir la creamos

        if(!file_exists($directorio)){
            mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");
        }

        $dir=opendir($directorio); //Abrimos el directorio de destino
        $target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo

        //Movemos y validamos que el archivo se haya cargado correctamente
        //El primer campo es el origen y el segundo el destino
        

        /*if(move_uploaded_file($source, $target_path)) {
            //echo "<h2>El archivo $filename se ha almacenado en forma exitosa.<br/ ></h2>";
            } else {
            echo "<h3><br ></h3>";
            closedir($dir); //Cerramos el directorio de destino
            }*/
    }
}
?>

<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Liquid@</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" type="text/css" media="screen">
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/npm.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="row" style="text-a">
            <?php if(move_uploaded_file($source, $target_path)) { ?>
                <h3>El archivo <?php $filename  ?> se ha almacenado en forma exitosa.<br/ ></h3>
            <?php } else { ?>
                <h3>Ha ocurrido un error, por favor inténtelo de nuevo.</h3>
            <?php } ?>
            <a href="principal.php" class="btn btn-primary">Regresar</a>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"></script>
</body>
</html>