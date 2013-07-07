<div class="alert alert-info">
En esta sección podrás ver los <strong>aspectos ambientales</strong> de tu organización.
<a href="#" data-dismiss="alert" class="close">×</a>
</div>

<br>

<?php if($tipos_aspectos){ ?>
	<div class="row-fluid">
		<?php foreach ($tipos_aspectos as $tipo_aspecto): ?>
			<div id="clickeable" onclick="location.href='aspectos_ambientales/<?php echo $tipo_aspecto->id;?>';" class="btn" style="border: 1px solid #ccc; height: 130px; margin-bottom: 20px; width: 16%; padding: 1px; cursor: pointer;">

				<div style="height: 20%">	
					<?php echo anchor('aspectos/update_tipos_aspectos/'.$tipo_aspecto->id.'', '<i class="icon-edit"></i>', 'class="btn btn-small"'); ?>
					<?php echo anchor('aspectos/delete_tipos_aspectos/'.$tipo_aspecto->id.'', '<i class="icon-remove"></i>', 'class="btn btn-small"'); ?>
				</div>
				<div>
					<div style="">
						<?php echo $tipo_aspecto->nombre; ?>
					</div>
					<div style="border: 1px dotted #ddd; height: 60%; padding: 1px" align="center">
						<?php echo $tipo_aspecto->descripcion; ?> <br>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
<?php } ?>

<?php echo anchor('aspectos/insert_tipos_aspectos', 'Agregar tipo', 'class="btn"'); ?>



