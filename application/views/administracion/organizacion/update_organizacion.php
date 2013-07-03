<?php if(isset($error_img)){ ?>
<div class="alert alert-error"><?php echo $error_img; ?> </div>
<?php } ?>

<?php if(isset($success_message)){ ?>
	<div class="alert alert-success"><?php echo $success_message; ?> </div>
<?php } ?>

<?php if(validation_errors()){ ?>
<div class="alert alert-error"><?php echo validation_errors(); ?> </div>
<?php } ?>



	<?php echo form_fieldset('Modificar Logo'); ?>
	<img src="<?php echo base_url().$organizaciones->logo; ?>" />

    
    <?php
    echo form_open_multipart('administracion/update_logo');
    $Fdata = array('name' => 'logo', 'class' => 'file'); // set your file and class for the image
    echo form_upload($Fdata); // upload the datas here the image that user has selected.
    echo form_submit('enviar', 'Actualizar Logo', 'class="btn btn-primary"'); // your submit button fucntion
    echo form_close();
    ?>
<p>Asegúrese de que la imagen se encuentra con extensión .jpg</p>



<?php
echo form_open('administracion/update_organizacion');
echo form_fieldset('Modificar Datos');
?>

<p>Nombre</p>
	<?php echo form_input('nombre',$organizaciones->nombre); ?>

	<p>Dirección</p>
	<?php echo form_input('direccion',$organizaciones->direccion); ?>

	<p>Colonia</p>
	<?php echo form_input('colonia',$organizaciones->colonia); ?>

	<p>Código Postal</p>
	<?php echo form_input('cp',$organizaciones->cp); ?>

	<p>Ciudad y Estado</p>
	<?php echo form_input('ciudad_estado',$organizaciones->ciudad_estado); ?>

	<p>Giro/Rubro</p>
	<?php echo form_input('giro',$organizaciones->giro); ?>

	<p>Tamaño</p>
	<?php echo form_dropdown('tamano',$tamanos= array('Chica'=>'Chica', 'Mediana'=>'Mediana', 'Grande' =>'Grande' ), $organizaciones->tamano); ?>


<?php echo form_fieldset_close(); ?>
<?php echo form_submit('enviar', 'Guardar cambios', 'class="btn btn-primary"'); ?>

<?php echo anchor('administracion/profile_organizacion', 'Volver', 'class="btn btn-danger"'); ?>
<?php echo form_close(); ?>