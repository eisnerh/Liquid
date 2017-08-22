<div class="container">
	
	<div class="row">
		<h3 style="text-align:center">NUEVO REGISTRO</h3>
	</div>
	
	<form class="form-horizontal center" method="POST" action="accion_InsertarLiquidar.php" autocomplete="off">
		<div class="form-group">
			<label for="Fecha" class="col-sm-2 control-label">Fecha de Hoy
			<?php
				function getTime(){
				$fecha = date('d.m.Y');
				echo "  " . $fecha;
				}
				echo getTime();?>
				</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="fecha" name="fecha" placeholder="<?php echo getTime();?>">
			</div>
		</div>
		<div class="form-group">
			<label for="n_Guia" class="col-sm-2 control-label">Número de Guia</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="n_Guia" name="n_Guia" placeholder="Número de Guia">
			</div>
		</div>
		
		<div class="form-group">
			<label for="chofer" class="col-sm-2 control-label">Chofer</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="chofer" name="chofer" placeholder="Número Chofer">
			</div>
		</div>
		
		<div class="form-group">
			<label for="camion" class="col-sm-2 control-label">Número de camion</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="camion" name="camion" placeholder="Número de camion">
			</div>
		</div>
		
		<div class="form-group">
			<label for="chequeador" class="col-sm-2 control-label">Número de chequeador</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="chequeador" name="chequeador" placeholder="Número de chequeador">
			</div>
		</div>
		<hr class="table-bordered table-responsive}" />
		<form class="form-horizontal center" method="POST" action="" autocomplete="off">
			<div class="form-group">
				<label for="HID" class="col-sm-2 control-label" name="HID">Entrado al Deposito</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="hora_llegada" name="hora_llegada" placeholder="<?php
				function getHour(){
				$hora = date('G.i.s');
				echo "  " . $hora;
				}
				echo getHour();?>">
				</div>
			</div>
			<div class="form-group">
				<label for="HEA" class="col-sm-2 control-label col-sm-2 control-label"" name="HEA">Entrada al Almacen</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="hora_entr_almacen" name="hora_entr_almacen" placeholder="<?php echo getHour();?>">
					
				</div>
			</div>
			<div class="form-group">
				<label for="HIC" class="col-sm-2 control-label" name="HIC">Inicio de Chequeo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="hora_inicio_chequeo" name="hora_inicio_chequeo" placeholder="<?php echo getHour();?>">
					
				</div>
			</div>
			<div class="form-group">
				<label for="HSA" class="col-sm-2 control-label" name="HSA">Salida del Almacen</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="hora_salida_almacen" name="hora_salida_almacen" placeholder="<?php echo getHour();?>">
				</div>
				<hr class="divider" />
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<a href="index.php" class="btn btn-danger">Regresar</a>
				<button type="submit" class="btn btn-primary">Guardar</button>
			</div>
		</div>
	</form>
</div>