<div class="alert alert-info">
En esta sección podrás ver la información de los <strong>participantes</strong> del SGA.
<a href="#" data-dismiss="alert" class="close">×</a>
</div>

<!-- <div class="row-fluid" style="border: 1px solid black; height: 30px;">
	<div class="span12">
		<div class="btn-group">
			<?php echo anchor('administracion/insert_usuario/'.$id_organizacion.'', '<i class="icon-user"></i> Agregar', 'class="btn"'); ?>
			<?php echo anchor('#', '<i class="icon-list-alt"</i>', 'class="btn"'); ?>
			<?php echo anchor('administracion/profile_organizacion', '<i class="icon-th"></i> Organigrama', 'class="btn"'); ?>
			<?php echo anchor('sitio', '<i class="icon-home"></i> Regresar', 'class="btn"'); ?>
		</div>
	</div>
</div> -->

<?php foreach($usuarios as $usuario): ?>
	<div class="row-fluid" style="height: 250px;">
		<div class="span2">
			<img src="<?php echo base_url().$usuario->avatar; ?>"  style="width: 175px; height: 175px;" /></td>
			<div class="row-fluid">
				<div class"span2" align="center">
					<?php if($id_user == $usuario->id){ ?>
						<?php echo anchor('administracion/update_usuario', '<i class="icon-edit"></i> Editar', 'class="btn btn-small"'); ?>
					<?php } ?>
				</div>
			</div>	
		</div>
		<div class="span3" style="border: 0px solid black">
			<div style="font-size: 175%;"><?php echo $usuario->nombre." ".$usuario->apellido; ?></div>
			<div style="font-weight: bold;"><?php echo $usuario->email; ?></div>
			<div style="font-style: italic;"><?php echo $usuario->puesto; ?></div>
		</div>
	</div>
	<hr style="border-top: 1px solid #ccc;"/>
<?php endforeach ?>

