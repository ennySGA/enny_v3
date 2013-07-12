<div id="image_<?php echo $estrategia->id; ?>" class="modal hide" style="display: none;" aria-hidden="true">
<div class="modal-header">
	<button data-dismiss="modal" class="close" type="button">×</button>
	<h3>Actualizar imagen para: <?php echo $estrategia->nombre; ?></h3>
</div>
	
<?php echo form_open_multipart('estrategias/'); ?>
	<div class='modal-body'>
	
		<div class="user-thumb">
			<a href="#image_<?php echo $estrategia->id; ?>" data-toggle="modal">
				<img alt="User" src="<?php echo base_url(); ?>assets/img/estrategias/thumbnails/<?php echo $estrategia->imagen; ?>">
			</a>
		</div>
		<input type='hidden' value='<?php echo $estrategia->id;?>' name='id_estrategia'>

		<div class='form-elements'>

			<div class="control-group">

					<div class='form-fields'>
						
						<?php $Fdata = array('name' => 'file', 'class' => 'file'); ?>
						<?php  echo form_upload($Fdata); ?>
						
					
					</div>
			
			</div>
		</div>
	
	</div>

	<div class='modal-footer'>
		<input type='submit' class='btn btn-primary' value='Actualizar' name='edit_imagen' >
		<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
	</div>

<?php echo form_close(); ?>
</div>