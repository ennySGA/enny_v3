<?php echo $tipo_aspecto->nombre; ?>
<br>

<?php if($aspectos){ ?>
	<?php foreach ($aspectos as $aspecto): ?>
		<?php echo anchor('aspectos/aspectos/'.$aspecto->id.'', 'Ver', 'class="btn"'); ?>
		<?php echo anchor('aspectos/update_aspectos/'.$aspecto->id.'', 'Editar', 'class="btn"'); ?>
		<?php echo anchor('aspectos/delete_aspectos/'.$aspecto->id.'', 'Eliminar', 'class="btn"'); ?>
		<?php echo $aspecto->nombre; ?>
		<?php echo $aspecto->descripcion; ?> <br>
	<?php endforeach ?>
	<?php } ?>

<?php echo anchor('aspectos/insert_aspectos/'.$id_tipo.'', 'Agregar aspecto', 'class="btn"'); ?>