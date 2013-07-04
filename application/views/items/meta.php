<div class="widget-title">
	<span class="icon"><i class="icon-list-alt"></i></span>
	<h5><?php echo $widget->widget_nombre; ?></h5>
	<div class="buttons"><a href="#myAlert<?php echo $cont;?>" data-toggle="modal" class="btn btn-mini">
		<i class="icon-plus-sign"></i> Agregar</a>
		<a href="<?php echo base_url()?>index.php/items/delItem/<?php echo $widget->widgetobj_id.'/'.$id; ?>" class="btn btn-mini">
			<i class="icon-trash"></i> Borrar</a>
	</div>
</div>
<div class="widget-content nopadding">
	<table class="table table-condensed">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Descripción</th>
          <th>Estado</th>
          <th>Inicio</th>
          <th>Terminación</th>
          <th>Tipo</th>
          <th> </th>
        </tr>
      </thead>
      <tbody>
<?php
if($widget->rows)foreach ($widget->rows as $row) {
	?>
        <tr>
          <td><?php echo $row->nombre; ?></td>
          <td style="max-width: 195px;"><?php echo $row->descripcion; ?></td>
          <td>
          <?php 
          if($row->tipo=='Incrementar'){
          	$p=$row->edo_actual*100/$row->edo_lograr;
          	echo sprintf("%01.2f", $p).' % de '.$row->edo_lograr.' '.$row->metrica;
          }elseif($row->tipo=='Reducir'){
          	$p=$row->edo_lograr*100/$row->edo_actual;
          	echo sprintf("%01.2f", $p).' % de '.$row->edo_lograr.' '.$row->metrica;
          }
          ?>
       	  </td>
          <td><?php echo $row->fecha_inicio; ?></td>
          <td><?php echo $row->fecha_meta; ?></td>
          <td><?php echo $row->tipo; ?></td>
          <td>
          	<a href="#" class="btn btn-info btn-mini">Editar</a>
          	<a href="<?php echo base_url()?>index.php/items/delMeta/<?php echo $row->id; ?>/<?php echo $widget->id; ?>" class="btn btn-danger btn-mini">Borrar</a>
          </td>
        </tr>
	<?php
}
?>
		</tbody>
    </table>
</div>
<?php
	$metricas=array(
	'Kg'=>'Kg',
	'Ha'=>'Ha',
	'Personas'=>'Personas'
	);

	$tipo=array(
	'Reducir'=>'Reducir',
	'Mantener'=>'Mantener',
	'Incrementar'=>'Incrementar'
	);
?>
<div id="myAlert<?php echo $cont;?>" class="modal hide" style="display: none;" aria-hidden="true">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3><?php echo $widget->widget_nombre; ?></h3>
	</div>
	<?php
	//echo form_open('items/saveItemMeta',array('class'=>'form-horizontal'));
	?>
	<form action='<?php echo base_url(); ?>index.php/items/saveItemMeta/<?php echo $id; ?>' method='POST' class="form-horizontal">
		<div class='modal-body'>
		
			<input type='hidden' value='<?php echo $widget->widgetobj_id;?>' name='w_id'>
			<div class="control-group">
				<label class="control-label" for="nombre">Nombre</label>
				<div class="controls">
			    	<input type="text" name="nombre">
			    </div>
			</div>

		    <div class="control-group">
			    <label class="control-label" for="descripcion">Descripción</label>
				<div class="controls">
			    	<?php echo form_textarea(array('name'=>'descripcion','rows'=>'4')); ?>
			    </div>
			</div>
		    <div class="control-group">
			    <label class="control-label" for="edo_actual">Estado actual</label>
				<div class="controls">
			    	<input type="text" name="edo_actual">
			    </div>
			</div>     
			<div class="control-group">
			    <label class="control-label" for="edo_lograr">Estado a lograr</label>
				<div class="controls">
			    	<input type="text" name="edo_lograr">
			    </div>
			</div>             
		    <div class="control-group">
			    <label class="control-label" for="metrica">Métrica</label>
				<div class="controls">
			    	<?php $attributes = "style='width:auto'"; ?>
		            <?php echo form_dropdown('metrica', $metricas,'',$attributes); ?>
			    </div>
			</div>                   
		    <div class="control-group">
			    <label class="control-label" for="fecha_inicio">Fecha inicio</label>
				<div class="controls">
			    	<input type="text" name="fecha_inicio" style="width:auto" class="datepicker">
			    </div>
			</div>              
		    <div class="control-group">
			    <label class="control-label" for="fecha_meta">Fecha fin</label>
				<div class="controls">
			    	<input type="text" name="fecha_meta" style="width:auto" class="datepicker">
			    </div>
			</div>                   
		    <div class="control-group">
			    <label class="control-label" for="cuantificable">Cuantificable</label>
				<div class="controls">
			    	<?php echo form_checkbox('cuantificable', 'accept', true); ?>
			    </div>
			</div>                 
		    <div class="control-group">
			    <label class="control-label" for="cuantificable">Tipo</label>
				<div class="controls">
			    	<?php $attributes = "style='width:auto'"; ?>
		            <?php echo form_dropdown('tipo',$tipo,'',$attributes); ?>
			    </div>
			</div>                
		</div>
		<div class='modal-footer'>
			<input type='submit' class='btn btn-primary' value='Guardar' name='add-meta' >
			<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
		</div>
	</form>
	<div class='mensaje'></div>
</div>