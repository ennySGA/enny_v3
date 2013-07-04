<div class="widget-title">
	<span class="icon">
		<i class="icon-check"></i>
	</span>
	<h5><?php echo $widget->nombre; ?></h5>
	<div class="buttons">
		<a href="#edit_<?php echo $cont;?>" data-toggle="modal" class="btn btn-mini">
		<i class="icon-pencil"></i> Editar</a>
		<a href="<?php echo base_url()?>items/delete/<?php echo $widget->id.'/'.$id; ?>" class="btn btn-mini">
			<i class="icon-trash"></i> Borrar</a>
	</div>
</div>

<div class="widget-content">
	<?php if($widget->rows)foreach ($widget->rows as $row) { ?>
		<?php if ($row->status==1) { ?>
				<p>
					<i class="icon-ok"></i>
					<?php echo $row->cuerpo ?>
				</p>
		<?php } ?>
		<?php if (!$row->status==1) { ?>
				<p>
					<i class="icon-remove"></i>
					<?php echo $row->cuerpo; ?>
				</p>
		<?php } ?>
		
	<?php } ?>

	<div id="edit_<?php echo $cont;?>" class="modal hide" style="display: none;" aria-hidden="true">
		<div class="modal-header">
			<button data-dismiss="modal" class="close" type="button">×</button>
			<h3><?php echo $widget->nombre; ?></h3>
		</div>
			
		<form id='ftext-<?php echo $cont;?>' action='<?php echo base_url().'estrategias/edit_checklist/'; ?>' method='POST' class='form-vertical'>
			<div class='modal-body'>
			
				<input class="span7" type='text' name='widget_nombre' placeholder='Nombre' value='<?php echo $widget->nombre;?>' />
				<br />
				<input type='hidden' value='<?php echo $widget->id;?>' name='id_w'>
				<input type='hidden' value='<?php echo $id;?>' name='id_estrategia'>

				<div class='form-elements'>

					<div class="control-group">

						<?php foreach ($widget->rows as $row) { ?>
							<div class='form-fields'>
								<div class="span13">
									<div class='checkinline span1'>
										<input type='checkbox' name='status[<?php echo $row->id;?>]' <?php if($row->status==1)echo 'checked="checked"';  ?>>
									</div>

									<input class="span9" type='text' name='cuerpo[]' placeholder='Cuerpo' value='<?php echo $row->cuerpo;?>' />
									<?php echo anchor('estrategias/delete_check/'.$row->id.'/'.$id, 'borrar', 'class="btn"'); ?>
									<input type='hidden' value='<?php echo $row->id;?>' name='id[]'><br/>
								</div>
							
							</div>
						<?php } ?>
					
					</div>
				</div>
			
			</div>

			<div class='modal-footer'>
				<input type='button' class='add-check btn btn-info' value='Agregar'>
				<input type='submit' class='btn btn-primary' value='Guardar' name='edit-check' >
				<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
			</div>

		</form>
	</div>
</div>
