<div class="widget-title">
	<span class="icon"><i class="icon-list-alt"></i></span>
	<h5><?php echo $widget->nombre; ?></h5>
	<div class="buttons">
		<a href="#modal_text<?php echo $cont;?>" data-toggle="modal" class="btn btn-mini">
		<i class="icon-pencil"></i> Editar</a>
		<?php echo anchor('items/delete/'.$widget->id.'/'.$estrategia[0]->id, '<i class="icon-trash"></i> Borrar','class="btn btn-mini"') ?>	
	</div>
</div>

<div class="widget-content">
	<?php foreach($widget->rows as $text){ ?>
		<p><?php echo $text->descripcion ?></p>
	<?php } ?>

	<div id="modal_text<?php echo $cont;?>" class="modal hide" style="display: none;" aria-hidden="true">
		<div class="modal-header">
			<button data-dismiss="modal" class="close" type="button">×</button>
			<h3><?php echo $widget->nombre; ?></h3>
		</div>

		<form id='ftext-<?php echo $cont; ?>' action='<?php echo base_url(); ?>estrategias/update_text/<?php echo $estrategia[0]->id; ?>' method='POST' class='form-vertical'>
			<div class='modal-body'>
				
				<div class="control-group">
					
					<div class='controls'>
						<input type='text' name='nombre_w' placeholder='Nombre' value='<?php echo $widget->nombre; ?>' />
					</div>

				</div>

				<input type='hidden' value='<?php echo $widget->id;?>' name='id_w'>
				
				<div class='form-elements'>
					<div class="control-group">
						
							<div class='form-fields'>

								<input type='hidden' value='<?php echo $widget->rows[0]->id; ?>' name='id_t'>
								<div class="controls">
									<textarea style="width:100%" name="descripcion_t" rows="7"><?php echo $widget->rows[0]->descripcion;?></textarea>
								</div>
							</div>

					</div>
				</div>
			</div>
			<div class='modal-footer'>
				<input type='submit' class='btn btn-primary' value='Guardar' name='edit-text' >
				<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
			</div>
		</form>
		<div class='mensaje'></div>
	</div>

</div>
