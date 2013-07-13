<?php
echo form_open('procesos/update/'.$procesos->id.'');
echo form_fieldset('Editar proceso');
?>

<p>Nombre</p>
<?php echo form_input('nombre', $procesos->nombre); ?>



<?php echo form_fieldset_close();
echo form_submit('enviar', 'Guardar', 'class="btn btn-primary"');
echo " ";
echo anchor('procesos', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>