<div id="nuevo-com" class="modal hide" style="display: none;" aria-hidden="true">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3>Agregar widget de comentarios</h3>
	</div>
		
	<form action='<?php echo base_url().'estrategias/single/'.$estrategia[0]->id; ?>' method='POST' class='form-vertical'>
		<div class='modal-body'>
		
			<input class="span7" type='text' name='widget_nombre' placeholder='Nombre del widget' value='' />
			<br />
			<input type='hidden' value='<?php echo $estrategia[0]->id;?>' name='id_estrategia'>
			<input type='hidden' value='<?php echo $user->id;?>' name='id_usuario'>

			<div class='form-elements'>

				<div class="control-group">

						<div class='form-fields'>
							<div class="span13">
								<?php echo form_textarea('cuerpo', '', 'placeholder="escribe aqui tu comentario" style="width:100%"') ?>
							</div>
						
						</div>
				
				</div>
			</div>
		
		</div>

		<div class='modal-footer'>
			<input type='submit' class='btn btn-primary' value='Guardar' name='add_comentarios' >
			<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
		</div>

	</form>
</div>
