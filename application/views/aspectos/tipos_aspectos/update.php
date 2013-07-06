<?php
echo form_open('aspectos/update_tipos_aspectos/'.$tipos_aspectos->id.'');
echo form_fieldset('Editar aspecto');
?>

<p>Nombre</p>
<?php echo form_input('nombre',$tipos_aspectos->nombre); ?>


<p>Descripción</p>
<?php $data= array(
	'name' => 'descripcion',
	'rows'=>'3',
	); ?>
<?php echo form_textarea($data, $tipos_aspectos->descripcion); ?>

<?php echo form_fieldset_close();
echo form_submit('enviar', 'Guardar', 'class="btn btn-primary"');
echo " ";
echo anchor('aspectos/tipos_aspectos', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>