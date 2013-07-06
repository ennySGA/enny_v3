<div id="nuevo-checklist" class="modal hide" style="display: none;" aria-hidden="true">
<div class="modal-header">
	<button data-dismiss="modal" class="close" type="button">×</button>
	<h3>Agregar widget de checklist</h3>
</div>
	
<form action='<?php echo base_url().'estrategias/single/'.$estrategia[0]->id; ?>' method='POST' class='form-vertical'>
	<div class='modal-body'>
	
		<input class="span7" type='text' name='nombre_w' placeholder='Nombre' value='' />
		<br />
		<input type='hidden' value='<?php echo $estrategia[0]->id;?>' name='id_estrategia'>

		<div class='form-elements'>

			<div class="control-group">

					<div class='form-fields'>
						<div class="span14">
							<div class='checkinline span1'>
								<input type='checkbox' name='status[]' />
							</div>

							<input class="span9" type='text' name='cuerpo[]' placeholder='Cuerpo' value='' />
						</div>
					
					</div>
			
			</div>
		</div>
	
	</div>

	<div class='modal-footer'>
		<input type='button' class='add-check btn btn-info' value='Agregar'>
		<input type='submit' class='btn btn-primary' value='Guardar' name='add_check' >
		<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
	</div>

</form>
</div>