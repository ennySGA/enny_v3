<div id="add_meta" class="modal hide" style="display: none;" aria-hidden="true">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3>Agregar meta</h3>
	</div>
		
	<form action='<?php echo base_url().'estrategias/add_meta/'; ?>' method='POST' class='form-vertical'>
		<div class='modal-body'>

			<input type='hidden' value='<?php echo $estrategia[0]->id;?>' name='id_estrategia'>
			<input type='hidden' value='<?php echo $widget->id;?>' name='id_w'>

			<div class='form-elements'>

				<div class="control-group">

						<div class='form-fields'>
							<div class="span13">
				
								<input type='text' name='nombre' placeholder='Nombre de la meta' value='' />
								<p>Descripción</p>
								<?php echo form_textarea('descripcion', '', 'class="span5"') ?>
								<p>Estado inicial</p>
								<input type='text' name='edo_inicial' placeholder='0' value='' />
								<p>Estado meta</p>
								<input type='text' name='edo_meta' placeholder='0' value='' />
								<p>Fecha propuesta</p>
								<input class='datepicker' type='text' name='fecha_meta' placeholder='' value='<?php echo date('Y-m-d'); ?>' />
							</div>
						
						</div>
				
				</div>
			</div>
		
		</div>

		<div class='modal-footer'>
			<input type='submit' class='btn btn-primary' value='Guardar' name='nva_meta' >
			<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
		</div>

	</form>
</div>
