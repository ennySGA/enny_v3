<div class="widget-box">
	<div class="widget-title">
		<span class="icon">
			<i class="icon-leaf"></i>
		</span>
		<h5><?php echo $tipo_aspecto->nombre; ?> - Aspectos ambientales</h5>
	</div>
		<div class="widget-content nopadding">
			<table class="table table-bordered table-striped table-hover data-table">
				<thead>
					<tr>
						<th colspan="2" style="width: 10%"><i class="icon-wrench"></i></th>
						<th>Nombre</th>
						<th>Descripción</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($aspectos as $aspecto): ?>
						<tr>
							<td><div class="btn btn-small"><?php echo anchor('aspectos/update_aspectos/'.$aspecto->id.'/'.$aspecto->id_tipo.'', ' ', 'class="icon-edit"'); ?></div></td>
							<td>
								<div class="btn btn-small">
									<a href="#myAlert_<?php echo $aspecto->id; ?>" data-toggle="modal" class="icon-remove"> </a>
									<div id="myAlert_<?php echo $aspecto->id; ?>" class="modal hide">
										<div class="modal-header">
											<button data-dismiss="modal" class="close" type="button">×</button>
											<h3>Eliminar aspecto</h3>
										</div>
										<div class="modal-body">
											<p><h4>¿Está seguro de eliminar <?php echo $aspecto->nombre; ?>?</h4></p>
										</div>
										<div class="modal-footer">
											<?php echo anchor('aspectos/delete_aspectos/'.$aspecto->id.'/'.$aspecto->id_tipo.'', '<i class="icon-remove"></i> Confirmar', 'class="btn"') ?>
											<a data-dismiss="modal" class="btn" href="#">Cancelar</a>
										</div>
									</div>
								</div>
							</td>
							<td><?php echo $aspecto->nombre;?></td>
							<td><?php echo $aspecto->descripcion;?></td>
						</tr>	
					<?php endforeach; ?>				
				</tbody>
		</table>							
	</div>
</div>


<?php echo anchor('aspectos/insert_aspectos/'.$id_tipo.'', 'Agregar aspecto', 'class="btn"'); ?>

<?php echo anchor('aspectos/tipos_aspectos', '<i class="icon-leaf"></i> Regresar', 'class="btn"') ?>


