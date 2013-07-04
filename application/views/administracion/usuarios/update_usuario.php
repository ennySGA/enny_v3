<?php if(isset($error_img)){ ?>
<div class="alert alert-error"><?php echo $error_img; ?> </div>
<?php } ?>

<?php if(isset($success_message)){ ?>
	<div class="alert alert-success"><?php echo $success_message; ?> </div>
<?php } ?>

<?php if(validation_errors()){ ?>
<div class="alert alert-error"><?php echo validation_errors(); ?> </div>
<?php } ?>

	<img src="<?php echo base_url().$avatar; ?>" />

<?php
    echo form_open_multipart('administracion/update_avatar');
    $Fdata = array('name' => 'avatar', 'class' => 'file'); // set your file and class for the image
    echo form_upload($Fdata); // upload the datas here the image that user has selected.
    echo form_submit('enviar', 'Actualizar avatar', 'class="btn btn-primary"'); // your submit button fucntion
    echo form_close();
    ?>
<p>Asegúrese de que la imagen se encuentra con extensión .jpg</p>

<?php
echo form_open('administracion/update_usuario');
echo form_fieldset('Edita tu perfil');
?>

<p>Nombre</p>
<?php echo form_input('nombre', set_value('nombre', $name)); ?>

<p>Apellido</p>
<?php echo form_input('apellido', set_value('apellido', $apellido)); ?>

<p>Puesto</p>
<?php echo form_input('puesto', set_value('puesto', $puesto)); ?>

<p>Correo electrónico</p>
<?php echo form_input('email', set_value('email', $correo)); ?>

<?php echo form_fieldset_close();
echo form_submit('enviar', 'Guardar', 'class="btn btn-primary"');
echo " ";
echo anchor('sitio', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>