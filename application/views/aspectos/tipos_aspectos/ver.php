<div class="alert alert-info">
En esta sección podrás ver los <strong>aspectos ambientales</strong> de tu organización.
<a href="#" data-dismiss="alert" class="close">×</a>
</div>

<br>
<?php if($tipos_aspectos){ ?>
	<?php foreach ($tipos_aspectos as $tipo_aspecto): ?>
		<?php echo anchor('aspectos/aspectos_ambientales/'.$tipo_aspecto->id.'', 'Ver', 'class="btn"'); ?>
		<?php echo anchor('aspectos/update_tipos_aspectos/'.$tipo_aspecto->id.'', 'Editar', 'class="btn"'); ?>
		<?php echo anchor('aspectos/delete_tipos_aspectos/'.$tipo_aspecto->id.'', 'Eliminar', 'class="btn"'); ?>
		<?php echo $tipo_aspecto->nombre; ?>
		<?php echo $tipo_aspecto->descripcion; ?> <br>
	<?php endforeach ?>
	<?php } ?>

<?php echo anchor('aspectos/insert_tipos_aspectos', 'Agregar tipo', 'class="btn"'); ?>