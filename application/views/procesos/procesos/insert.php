<?php
echo form_open('procesos/insert');
echo form_fieldset('Agregar procesos organizacional');
?>

<p>Nombre</p>
<?php echo form_input('nombre', ''); ?>

<?php echo form_fieldset_close();
echo form_submit('enviar', 'Guardar', 'class="btn btn-primary"');
echo " ";
echo anchor('procesos/procesos/ver', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>