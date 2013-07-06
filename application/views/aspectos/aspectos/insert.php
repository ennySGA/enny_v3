<?php
echo form_open('aspectos/insert_aspectos/'.$tipo_aspecto->id.'');
echo form_fieldset('Agregar aspecto ambiental');
?>

<p>Nombre</p>
<?php echo form_input('nombre', ''); ?>

<p>Descripción</p>
<?php $data= array(
	'name' => 'descripcion',
	'rows'=>'3',
	); ?>
<?php echo form_textarea($data, ''); ?>

<?php echo form_fieldset_close();
echo form_submit('enviar', 'Guardar', 'class="btn btn-primary"');
echo " ";
echo anchor('aspectos/aspectos_ambientales/'.$tipo_aspecto->id.'', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>