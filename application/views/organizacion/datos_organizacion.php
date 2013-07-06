<?php if (!$organizaciones) {?>
		<div class="alert alert-error">El usuario no se encuentra dentro de ninguna organización</div>
	<?php } else{?>

<div class="span4 pagination-centered">
	<table class="table table-condensed table-tripped table-bordered">
		<?php foreach ($organizaciones as $organizacion){ ?>

	<img align="middle" src="<?php echo base_url().$organizacion->logo; ?>" />
		<tr>
			<td><b>Nombre:</b></td>
			<td><?php echo $organizacion->nombre; ?></td>
		</tr>
		<tr>
			<td><b>Dirección:</b></td>
			<td><?php echo $organizacion->direccion; ?></td>
		</tr>
		<tr>
			<td><b>Colonia:</b></td>
			<td><?php echo $organizacion->colonia; ?></td>
		</tr>
		<tr>
			<td><b>Código Postal:</b></td>
			<td><?php echo $organizacion->cp; ?></td>
		</tr>
		<tr>
			<td><b>Ciudad/Estado:</b></td>
			<td><?php echo $organizacion->ciudad_estado; ?></td>
		</tr>
		<tr>
			<td><b>Giro/Rubro:</b></td>
			<td><?php echo $organizacion->giro; ?></td>
		</tr>
		<tr>
			<td><b>Tamaño:</b></td>
			<td><?php echo $organizacion->tamano; ?></td>
		</tr>
		<?php } ?>
	</table>
	<div class="span4"><?php echo anchor('organizacion/modificar', 'Modificar', 'class="btn"');?></div>
</div>
<?php } ?>
