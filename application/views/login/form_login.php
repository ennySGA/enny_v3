<?php if(isset($error)){ ?>
	<div class='alert alert-error'><?php echo $error ?></div>
<?php } ?>

<?php 
echo form_open('login');
echo form_fieldset('ingresa tus datos');
 ?>

<p>Correo:</p>
<?php echo form_input('correo', '') ?>
<p>Password:</p>
<?php echo form_password('password', '') ?>

<?php 
echo form_fieldset_close();
echo form_submit('enviar', 'Entrar', 'class="btn btn-primary"');
echo " ";
echo anchor('login/nuevo_registro', 'Crea tu cuenta', 'class="btn btn-success"');
echo form_close();
 ?>