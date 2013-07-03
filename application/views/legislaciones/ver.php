<?php // print_r($leyes); ?>
<div class="widget-box">
	<div class="widget-title">
		<span class="icon">
			<i class="icon-briefcase"></i>
		</span>
		<h5>Leyes</h5>
	</div>
		<div class="widget-content nopadding">
			<table class="table table-bordered table-striped table-hover">
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
							<td><div class="btn btn-small"><?php echo anchor('legislaciones/delete/'.$row->id.'', ' ', 'class="icon-remove"'); ?></div></td>
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


<?php echo anchor('legislaciones/insert', 'Agregar ley', 'class="btn btn-primary"'); ?>

<?php echo anchor('sitio', 'Volver', 'class="btn btn-danger"'); ?>

