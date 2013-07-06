<div class="alert alert-info">
En esta sección podrás consultar, agregar y editar las <strong>leyes</strong> y <strong>normas</strong> que rigen a tu organización.
<a href="#" data-dismiss="alert" class="close">×</a>
</div>

<div class="widget-box">
	<div class="widget-title">
		<span class="icon">
			<i class="icon-briefcase"></i>
		</span>
		<h5>Leyes</h5>
	</div>
		<div class="widget-content nopadding">
			<table class="table table-bordered table-striped table-hover data-table">
				<thead>
					<tr>
						<th colspan="2"><i class="icon-wrench"></i></th>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Autoridad</th>					
						<th>Actualización</th>
						<th>Descripción</th>
						<th>Últ. act.</th>
						<th>Artículo</th>
						<th>Nivel</th>
						<th>Requisitos</th>
						<th>Fuente</th>
						<th>Cumple</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($leyes as $row): ?> 
						<tr>
							<td><div class="btn btn-small"><?php echo anchor('legislaciones/update/'.$row->id.'', ' ', 'class="icon-edit"'); ?></div></td>
							<td>
								<div class="btn btn-small">
									<a href="#myAlert_<?php echo $row->id; ?>" data-toggle="modal" class="icon-remove"> </a>
									<div id="myAlert_<?php echo $row->id; ?>" class="modal hide">
										<div class="modal-header">
											<button data-dismiss="modal" class="close" type="button">×</button>
											<h3>Eliminar ley</h3>
										</div>
										<div class="modal-body">
											<p><h4>¿Está seguro de eliminar <?php echo $row->nombre; ?>?</h4></p>
										</div>
										<div class="modal-footer">
											<?php echo anchor('legislaciones/delete/'.$row->id.'', '<i class="icon-remove"></i> Confirmar', 'class="btn"') ?>
											<a data-dismiss="modal" class="btn" href="#">Cancelar</a>
										</div>
									</div>
								</div>
							</td>
							<td><?php echo $row->nombre;?></td>
							<td><?php echo $row->tipo;?></td>
							<td><?php echo $row->autoridad;?></td>
							<td><?php echo $row->actualizacion;?></td>
							<td><?php echo $row->descripcion;?></td>
							<td><?php echo $row->ult_act;?></td>
							<td><?php echo $row->articulo;?></td>
							<td><?php echo $row->nivel;?></td>
							<td><?php echo $row->requisitos;?></td>
							<td><?php echo "<a href=".$row->fuente.">".$row->nombre."</a>";?></td>
							<td><?php echo $row->cumple;?></td>
						</tr>	
					<?php endforeach; ?>				
				</tbody>
		</table>							
	</div>
</div>

<?php echo anchor('legislaciones/insert', '<i class="icon-plus"></i> Agregar ley', 'class="btn"') ?>

<?php echo anchor('sitio', '<i class="icon-home"></i> Regresar', 'class="btn"') ?>
