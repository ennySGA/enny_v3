<?php
echo form_open('administracion/update_password');
echo form_fieldset('Cambia tu contraseña');
?>

<p>Contraseña actual</p>
<?php echo form_password('passwordactual', ''); ?>

<p>Contraseña nueva</p>
<?php echo form_password('password', ''); ?>

<p>Confirma tu nueva contraseña</p>
<?php echo form_password('password2', ''); ?>

<?php echo form_fieldset_close();

echo form_submit('enviar', 'Guardar', 'class="btn btn-primary"');
echo " ";
echo anchor('sitio', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>
