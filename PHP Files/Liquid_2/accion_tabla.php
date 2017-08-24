			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>N Guia</th>
							<th>Chofer</th>
							<th>Camion</th>
							<th>Fecha</th>
							<th>Viaje</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php 
						include ('accion_selectDatos.php');
						while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['id_inicio']; ?></td>
								<td><?php echo $row['n_Guia']; ?></td>
								<td><?php echo $row['chofer']; ?></td>
								<td><?php echo $row['camion']; ?></td>
								<td><?php echo $row['fecha']; ?></td>
								<td><?php echo $row['viaje']; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		