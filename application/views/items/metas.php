<div class="widget-title">
	<span class="icon">
		<i class="icon-road"></i>
	</span>
	<h5><?php echo $widget->nombre; ?></h5>
	<div class="buttons">
		<a href="#edit_<?php echo $cont;?>" data-toggle="modal" class="btn btn-mini">
		<i class="icon-pencil"></i> Editar</a>
		<a href="<?php echo base_url()?>items/delete/<?php echo $widget->id.'/'.$id; ?>" class="btn btn-mini">
			<i class="icon-trash"></i> Borrar</a>
	</div>
</div>

<div class="widget-content">
	<table class="table table-striped table-condensed table-bordered">
		<tr>
			<th>nombre</th>
			<th>estado inicial</th>
			<th>estado actual</th>
			<th>estado meta</th>
			<th>fecha meta</th>
		</tr>
		<tbody>
			<?php foreach($widget->rows as $meta){ ?>
			<tr>
				<td><?php echo $meta->nombre ?></td>
				<td><?php echo $meta->edo_actual ?></td>
				<td><?php echo $meta->edo_inicial ?></td>
				<td><?php echo $meta->edo_meta ?></td>
				<td><?php echo $meta->fecha_meta ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	<?php echo anchor('estrategias/single/'.$id, 'nueva meta', 'class="btn btn-primary"'); ?>
</div>
