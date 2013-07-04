<?php echo anchor('administracion/insert_usuario/'.$id_organizacion.'', '<i class="icon-user"></i> Agregar usuario', 'class="btn"') ?> 
<br/ >
<br/ >
<hr/ >
<?php foreach($usuarios as $usuario): ?>
	<table>
		<tr>	
			<td rowspan="6"><img src="<?php echo base_url().$usuario->avatar; ?>" width="175" height="175" /></td>
		</tr>
		<tr>
			<td style="vertical-align: text-top"><h3><?php echo $usuario->nombre." ".$usuario->apellido; ?></h3></td>
		</tr>
		<tr>
			<td><b><?php echo $usuario->email; ?></b></td>
		</tr>	
		<tr>
			<td><i><?php echo $usuario->puesto; ?></i></td>
		</tr>
		<tr>
		</tr>
		<tr>
		</tr>
		<tr>
			<?php if($id_user == $usuario->id){ ?>
				<td align="center"><?php echo anchor('administracion/update_usuario', '<i class="icon-edit"></i> Editar', 'class="btn"'); ?></td>
			<?php } ?>
		</tr>
	</table>
	<br/ >
	<br/ >
	<hr style="color: green;" />
<?php endforeach ?>