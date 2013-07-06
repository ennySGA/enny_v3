<?php
echo form_open('aspectos/insert_tipos_aspectos');
echo form_fieldset('Agregar tipo');
?>

<p>Nombre</p>
<?php echo form_input('nombre', ''); ?>

<p>Descripción</p>
<?php $data= array(
	'name' => 'descripcion',
	'rows'=>'3',
	); ?>
<?php echo form_textarea($data); ?>


<?php echo form_fieldset_close();
echo form_submit('enviar', 'Agregar', 'class="btn btn-primary"');
echo " ";
echo anchor('aspectos/tipos_aspectos/ver', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>