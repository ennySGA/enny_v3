<?php
echo form_open('aspectos/update_aspectos/'.$aspectos->id_tipo.'');
echo form_fieldset('Editar ley');
?>

<p>Nombre</p>
<?php echo form_input('nombre',$leyes->nombre); ?>

<p>Descripción</p>
<?php $data= array(
	'name' => 'descripcion',
	'rows'=>'3',
	); ?>
<?php echo form_textarea($data, $leyes->descripcion); ?>

<?php echo form_fieldset_close();
echo form_submit('enviar', 'Guardar', 'class="btn btn-primary"');
echo " ";
echo anchor('aspectos/aspectos_ambientales', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>