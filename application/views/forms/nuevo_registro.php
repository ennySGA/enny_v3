<?php
echo form_open('login/nuevo_registro');
echo form_fieldset('Usuario nuevo');
?>

<p>Nombre</p>
<?php echo form_input('nombre', ''); ?>

<p>Apellido</p>
<?php echo form_input('apellido', ''); ?>

<p>Sexo</p>
<p>H <input type="radio" name="sexo" value="H" <?php echo set_radio('sexo', 'H', 'Hombre'); ?> />
M <input type="radio" name="sexo" value="M" <?php echo set_radio('sexo', 'M', 'Mujer'); ?> /></p>

<p>Correo electrónico</p>
<?php echo form_input('email', ''); ?>

<p>Contraseña</p>
<?php echo form_password('password', ''); ?>

<p>Confirma tu contraseña</p>
<?php echo form_password('password2', ''); ?>


<?php echo form_fieldset_close();
echo form_submit('enviar', 'Registrar usuario', 'class="btn btn-primary"');
echo " ";
echo anchor('login', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>