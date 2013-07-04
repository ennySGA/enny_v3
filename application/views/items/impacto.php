<div class="widget-title"><span class="icon"><i class="icon-list-alt"></i></span><h5><?php echo $widget->widget_nombre; ?></h5><div class="buttons"><a href="#myAlert<?php echo $cont;?>" data-toggle="modal" class="btn btn-mini"><i class="icon-pencil"></i> Editar</a><a href="<?php echo base_url()?>index.php/objetivos/delItem/<?php echo $widget->widgetobj_id.'/'.$id; ?>" class="btn btn-mini"><i class="icon-trash"></i> Borrar</a></div></div>
		<div class="widget-content">
<?php
if($widget->rows)foreach ($widget->rows as $row) {
	echo '<p>'.$row->cuerpo.' '.$row->descripcion.'</p>';
}
?>

<div id="myAlert<?php echo $cont;?>" class="modal hide" style="display: none;" aria-hidden="true">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3>Alert modal</h3>
	</div>
	

		
		<form id='ftext-<?php echo $cont;?>' action='<?php echo base_url();?>index.php/objetivos/saveItem/<?php echo $id;?>' method='POST' class='form-vertical'>
		<div class='modal-body'>
		<input type='button' class='add' value='add'>
		
		<input type='text' name='widget_nombre' placeholder='Nombre' value='<?php echo $widget->widget_nombre;?>' /><br />
		<input type='hidden' value='<?php echo $widget->widgetobj_id;?>' name='w_id'>
		<div class='form-elements'>
		<div class="control-group">

		<?php
		if($widget->rows)foreach ($widget->rows as $row) { ?>
			<div class='form-fields'>
			<input type='text' name='cuerpo[]' placeholder='Cuerpo' value='<?php echo $row->cuerpo;?>' />
			<input type='text' name='descripcion[]' placeholder='Descripción' value='<?php echo $row->descripcion;?>' />
			<input type='button' value='borrar' class='del-reg' rid='<?php echo $row->id;?>'>
			<input type='hidden' value='<?php echo $row->id;?>' name='id[]'><br/>
			
			</div>
		<?php } ?>
			</div>
		</div>
		
		</div>
		<div class='modal-footer'>
			<input type='button' class='add-impacto btn btn-warning' value='Agregar registro'>
			<input type='submit' class='btn btn-primary' value='Guardar' name='edit' >
			<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
		</div>
		</div>
		</form>
	</div>
