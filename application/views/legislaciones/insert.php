<?php
echo form_open('legislaciones/insert');
echo form_fieldset('Agregar ley');
?>

<p>Nombre</p>
<?php echo form_input('nombre', ''); ?>

<p>Tipo</p>
<?php echo form_dropdown('tipo',$tipos= array('Ley'=>'Ley', 'Norma'=>'Norma', 'Otro'=>'Otro' )); ?>

<p>Autoridad</p>
<?php echo form_input('autoridad', ''); ?>

<p>Actualizacion</p>
<?php echo form_input('actualizacion', ''); ?>

<p>Descripción</p>
<?php $data= array(
	'name' => 'descripcion',
	'rows'=>'3',
	); ?>
<?php echo form_textarea($data); ?>

<p>Ultima actualización <span style="color: gray;"><i>(aaaa-mm-dd)</i></span></p>
<?php echo form_input('ult_act', '', 'class="datepicker"'); ?>

<p>Artículo</p>
<?php echo form_input('articulo', ''); ?>

<p>Nivel</p>
<?php echo form_dropdown('nivel',$niveles= array('Local'=>'Local', 'Estatal'=>'Estatal', 'Federal'=>'Federal', 'Otro'=>'Otro' )); ?>

<p>Requisitos</p>
<?php echo form_input('requisitos', ''); ?>

<p>Fuente</p>
<?php echo form_input('fuente', ''); ?>

<p>Se cumple</p>
<p>Si <input type="radio" name="cumple" value="Si" <?php echo set_radio('cumple', 'Si', 'Si'); ?> />
No <input type="radio" name="cumple" value="No" <?php echo set_radio('cumple', 'No', 'No'); ?> /></p>


<?php echo form_fieldset_close();
echo form_submit('enviar', 'Agregar', 'class="btn btn-primary"');
echo " ";
echo anchor('legislaciones', 'Cancelar', 'class="btn btn-danger"');
echo validation_errors('<p class="error">'); ?>