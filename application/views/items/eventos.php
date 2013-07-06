<div class="widget">
<div class="widget-title">
	<span class="icon">
		<i class="icon-calendar"></i>
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

	<div class="widget-box widget-calendar">
		<div class="widget-title">
			<span class="icon">
				<i class="icon-calendar"></i>
			</span>
			<h5>Eventos</h5>
		</div>
		<div class="widget-content nopadding">
			<div id="calendar_<?php echo $cont; ?>"></div>
		</div>
	</div>
	<a href="#add_evento" data-toggle="modal" class="btn btn-mini btn-primary">Agregar evento</a>
</div>

</div>

<div id="add_evento" class="modal hide" style="display: none;" aria-hidden="true">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3>Agregar evento</h3>
	</div>
		
	<form action='<?php echo base_url().'estrategias/add_evento/'; ?>' method='POST' class='form-vertical'>
		<div class='modal-body'>
		
			<br />
			<input type='hidden' value='<?php echo $estrategia[0]->id;?>' name='id_estrategia'>
			<input class="span7" type='hidden' name='id_w' value='<?php echo $widget->id; ?>' />

			<div class='form-elements'>

				<div class="control-group">

						<div class='form-fields'>
							<div class="span13">
				
								<input type='text' name='nombre' placeholder='Nombre del evento' value='' />
								<p>Descripción</p>
								<?php echo form_textarea('descripcion', '', 'style="width:100%"') ?>
								<p>Fecha del evento</p>
								<input class='datepicker' type='text' name='fecha_evento' placeholder='' value='<?php echo date('Y-m-d'); ?>' />
							</div>
						
						</div>
				
				</div>
			</div>
		
		</div>

		<div class='modal-footer'>
			<input type='submit' class='btn btn-primary' value='Guardar' name='add_evento' >
			<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
		</div>

	</form>
</div>

<div id="edit_<?php echo $cont;?>" class="modal hide" style="display: none;" aria-hidden="true">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3><?php echo $widget->nombre; ?></h3>
	</div>
		
	<form action='<?php echo base_url().'estrategias/edit_eventos/'; ?>' method='POST' class='form-vertical'>
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
					<th>fecha meta</th>
					<th>x</th>
				</tr>
				<tbody>
					<?php foreach($widget->evs as $evento){ ?>
					<tr>
						<td><?php echo form_input('nombre['.$evento->id.']',$evento->nombre) ?></td>
						<td><?php echo form_input('fecha_evento['.$evento->id.']',$evento->fecha_evento, 'class="datepicker span7"') ?></td>
						<td><?php echo anchor('estrategias/delete_evento/'.$evento->id."/".$id,'<i class="icon-trash"></i>', 'class="btn btn-danger"'); ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		
		</div>

		<div class='modal-footer'>
			<input type='submit' class='btn btn-primary' value='Guardar' name='editar_eventos' >
			<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
		</div>

	</form>
</div>



<!-- Scrip para el calendar -->
<script>

	$(document).ready(function() {
	
		$('#calendar_<?php echo $cont; ?>').fullCalendar({
		
			//editable: true,
			
			events: <?php echo json_encode($widget->rows); ?>,
			
			eventDrop: function(event, delta) {
				/*alert(event.title + ' se ha recorrido ' + delta + ' días\n' +
					'(hay que updatear la db.)');*/
			},
			
			loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
			}
			
		});
		
	});

</script>
<!-- /Scrip para el calendar -->