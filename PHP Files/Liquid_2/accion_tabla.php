			<div class="row table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>n_Guia</th>
							<th>chofer</th>
							<th>camion</th>
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
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		