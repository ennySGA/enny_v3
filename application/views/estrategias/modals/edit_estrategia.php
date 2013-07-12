<div id="edit_<?php echo $estrategia->id; ?>" class="modal hide" style="display: none;" aria-hidden="true">
<div class="modal-header">
	<button data-dismiss="modal" class="close" type="button">×</button>
	<h3><?php echo $estrategia->nombre; ?></h3>
</div>
	
<form action='<?php echo base_url().'estrategias/'; ?>' method='POST' class='form-vertical'>
	<div class='modal-body'>
	
		<input class="span7" type='text' name='nombre' placeholder='Nombre de la estratégia' value='<?php echo $estrategia->nombre; ?>' />
		<br />
		<input type='hidden' value='<?php echo $estrategia->id;?>' name='id_estrategia'>

		<div class='form-elements'>

			<div class="control-group">

					<div class='form-fields'>
						<p>Descripción</p>
						<textarea style="width:100%" name="descripcion" rows="3"><?php echo $estrategia->descripcion;?></textarea>
						<p>Etapa</p>
						<?php echo form_dropdown('etapa',$etapas, $etapa->id); ?>

						
					
					</div>
			
			</div>
		</div>
	
	</div>

	<div class='modal-footer'>
		<input type='submit' class='btn btn-primary' value='Actualizar' name='edit_estrategia' >
		<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
	</div>

</form>
</div>