<?php
	
	require 'controller/connection.php';
/*INSERT INTO `liquidar`.`liquidar`
(`n_Guia`,
`chofer`,
`camion`,
`chequeador`,
`fecha`,
`hora_llegada`,
`hora_entr_almacen`,
`hora_inicio_chequeo`,
`hora_salida_almacen`,
`inicio_id_inicio`)
VALUES
('$n_Guia','$chofer','$camion','$chequeador','$fecha','$hora_llegada','$hora_entr_almacen','$hora_inicio_chequeo','$hora_salida_almacen','1');*/
	
	$n_Guia = $_POST['n_Guia'];
	$chofer = $_POST['chofer'];
	$camion = $_POST['camion'];
	$chequeador = $_POST['chequeador'];
	$fecha = $_POST['fecha'];
	$hora_llegada = $_POST['hora_llegada'];
	$hora_entr_almacen = $_POST['hora_entr_almacen'];
	$hora_inicio_chequeo = $_POST['hora_inicio_chequeo'];
	$hora_salida_almacen = $_POST['hora_salida_almacen'];
	$inicio_id_inicio = 1;//$_POST['inicio_id_inicio'];
	
	$sql = "INSERT INTO `liquidar` (`n_Guia`, `chofer`, `camion`, `chequeador`, `fecha`, `hora_llegada`, `hora_entr_almacen`, `hora_inicio_chequeo`, ` hora_salida_almacen`, `inicio_id_inicio`) VALUES ('$n_Guia','$chofer','$camion','$chequeador','$fecha','$hora_llegada','$hora_entr_almacen','$hora_inicio_chequeo','$hora_salida_almacen','$inicio_id_inicio')";
	$resultado = $mysqli->query($sql);
	
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
					<h3>REGISTRO GUARDADO</h3>
					<?php } else { ?>
					<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>