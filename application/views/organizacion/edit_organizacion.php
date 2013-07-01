<?php if(isset($error_img)){ ?>
<div class="alert alert-error"><?php echo $error_img; ?> </div>
<?php } ?>

<?php if(isset($success_message)){ ?>
	<div class="alert alert-success"><?php echo $success_message; ?> </div>
<?php } ?>

<?php if(validation_errors()){ ?>
<div class="alert alert-error"><?php echo validation_errors(); ?> </div>
<?php } ?>


<?php foreach ($organizaciones as $organizacion){ ?>
	<?php echo form_fieldset('Modificar Logo'); ?>
	<img src="<?php echo base_url().$organizacion->logo; ?>" />
<?php } ?>
    
    <?php
    echo form_open_multipart('organizacion/edit_logo');
    $Fdata = array('name' => 'logo', 'class' => 'file'); // set your file and class for the image
    echo form_upload($Fdata); // upload the datas here the image that user has selected.
    echo form_submit('enviar', 'Actualizar Logo', 'class="btn btn-primary"'); // your submit button fucntion
    echo form_close();
    ?>
<p>Asegúrese de que la imagen se encuentra con extensión .jpg</p>



<?php
echo form_open('organizacion/modificar');
echo form_fieldset('Modificar Datos');
?>

<?php foreach ($organizaciones as $organizacion){ ?>

<p>Nombre</p>
	<?php echo form_input('nombre',$organizacion->nombre); ?>

	<p>Dirección</p>
	<?php echo form_input('direccion',$organizacion->direccion); ?>

	<p>Colonia</p>
	<?php echo form_input('colonia',$organizacion->colonia); ?>

	<p>Código Postal</p>
	<?php echo form_input('cp',$organizacion->cp); ?>

	<p>Ciudad y Estado</p>
	<?php echo form_input('ciudad_estado',$organizacion->ciudad_estado); ?>

	<p>Giro/Rubro</p>
	<?php echo form_input('giro',$organizacion->giro); ?>

	<p>Tamaño</p>
	<?php echo form_dropdown('tamano',$tamanos= array('Chica'=>'Chica', 'Mediana'=>'Mediana', 'Grande' =>'Grande' ), $organizacion->tamano); ?>

<?php } ?>

<?php 
echo form_fieldset_close();
echo anchor('organizacion', 'Volver', 'class="btn"');
echo form_submit('enviar', 'Guardar cambios', 'class="btn btn-primary"');
echo form_close();
?>