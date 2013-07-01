<?php if(isset($success_message)){ ?>
	<div class="alert alert-success"><?php echo $success_message; ?> </div>
<?php } ?>

<?php if(validation_errors()){ ?>

<div class="alert alert-error"><?php echo validation_errors(); ?> </div>
<?php } ?>

<?php
echo form_open('organizacion/registrar');
echo form_fieldset('Nueva Organización');
?>

<p>Nombre</p>
<?php echo form_input('nombre',''); ?>

<p>Dirección</p>
<?php echo form_input('direccion',''); ?>

<p>Colonia</p>
<?php echo form_input('colonia',''); ?>

<p>Código Postal</p>
<?php echo form_input('cp',''); ?>

<p>Ciudad y Estado</p>
<?php echo form_input('ciudad_estado',''); ?>

<p>Giro/Rubro</p>
<?php echo form_input('giro', ''); ?>

<p>Tamaño</p>
<?php echo form_dropdown('tamano',$tamanos= array('Chica'=>'Chica', 'Mediana'=>'Mediana', 'Grande' =>'Grande' )); ?>

<?php 
echo form_fieldset_close();
echo form_submit('enviar', 'Registrar', 'class="btn"');
echo form_close();
?>
