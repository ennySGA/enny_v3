<div class="span4 pagination-centered">
	<table class="table table-condensed table-tripped table-bordered">
	<img align="middle" src="<?php echo base_url().$organizaciones->logo; ?>" />
		<tr>
			<td><b>Nombre:</b></td>
			<td><?php echo $organizaciones->nombre; ?></td>
		</tr>
		<tr>
			<td><b>Dirección:</b></td>
			<td><?php echo $organizaciones->direccion; ?></td>
		</tr>
		<tr>
			<td><b>Colonia:</b></td>
			<td><?php echo $organizaciones->colonia; ?></td>
		</tr>
		<tr>
			<td><b>Código Postal:</b></td>
			<td><?php echo $organizaciones->cp; ?></td>
		</tr>
		<tr>
			<td><b>Ciudad/Estado:</b></td>
			<td><?php echo $organizaciones->ciudad_estado; ?></td>
		</tr>
		<tr>
			<td><b>Giro/Rubro:</b></td>
			<td><?php echo $organizaciones->giro; ?></td>
		</tr>
		<tr>
			<td><b>Tamaño:</b></td>
			<td><?php echo $organizaciones->tamano; ?></td>
		</tr>
		
	</table>
	<div class="span4"><?php echo anchor('administracion/update_organizacion', 'Editar', 'class="btn"');?></div>
</div>

