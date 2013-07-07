<?php
echo form_open('aspectos/update_aspectos/'.$aspectos->id.'/'.$aspectos->id_tipo.'');
echo form_fieldset('Editar aspecto');
?>

<p>Nombre</p>
<?php echo form_input('nombre',$aspectos->nombre); ?>

<p>Descripción</p>
<?php $data= array(
	'name' => 'descripcion',
	'rows'=>'3',
	); ?>
<?php echo form_textarea($data, $aspectos->descripcion); ?>

<?php echo form_fieldset_close();
echo form_submit('enviar', 'Guardar', 'class="btn btn-primary"');
echo " ";
echo anchor('aspectos/aspectos_ambientales/'.$aspectos->id_tipo.'', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>