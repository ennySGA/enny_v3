<div id="edit_<?php echo $cont;?>" class="modal hide" style="display: none;" aria-hidden="true">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3><?php echo $widget->nombre; ?></h3>
	</div>
		
	<form action='<?php echo base_url().'estrategias/edit_metas/'; ?>' method='POST' class='form-vertical'>
		<div class='modal-body'>
			<input type='hidden' value='<?php echo $id;?>' name='id_estrategia'>

			<input type='hidden' value='<?php echo $widget->id;?>' name='id_w'>
			<div class="control-group">
				
				<div class='controls'>
					<input class="span8" type='text' name='nombre_w' placeholder='Nombre' value='<?php echo $widget->nombre; ?>' />
				</div>

			</div>

			<table class="table table-striped table-condensed table-bordered">
				<tr>
					<th>nombre</th>
					<th>estado inicial</th>
					<th>estado actual</th>
					<th>estado meta</th>
					<th>fecha meta</th>
				</tr>
				<tbody>
					<?php foreach($widget->rows as $meta){ ?>
					<tr>
						<td><?php echo $meta->nombre ?></td>
						<td><?php echo $meta->edo_inicial ?></td>
						<td><?php echo form_input('edo_actual['.$meta->id.']', $meta->edo_actual, 'class="span7"') ?></td>
						<td><?php echo $meta->edo_meta ?></td>
						<td><?php echo form_input('fecha_meta['.$meta->id.']',$meta->fecha_meta, 'class="datepicker span7"') ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		
		</div>

		<div class='modal-footer'>
			<input type='submit' class='btn btn-primary' value='Guardar' name='editar_metas' >
			<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
		</div>

	</form>
</div>
