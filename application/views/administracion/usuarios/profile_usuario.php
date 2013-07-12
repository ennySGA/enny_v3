<table>
	<tbody>
		<tr>
			<td rowspan=4><img src="<?php echo base_url().$usuarios->avatar; ?>" style="width: 175px; height: 175px;"  /></td>
		</tr>
		<tr>
		</tr>
			<td><h2><?php echo  $usuarios->nombre." ".$usuarios->apellido; ?></h2></td>
		<tr>
			<td>
				<div class="widget-box">
					<div class="widget-content nopadding">
						<table class="table table-bordered table-striped table-hover table-condensed">
							<tbody>
								<tr>
									<td>Puesto</td>
									<td><?php echo $usuarios->puesto; ?></td>
								</tr>
								<tr>
									<td>E-mail</td>
									<td><?php echo $usuarios->email; ?></td>
								</tr>
								<tr>
									<td>Sexo</td>
									<td><?php echo $usuarios->sexo; ?></td>
								</tr>
								<tr>
									<td>Fecha de registro</td>
									<td><?php echo $usuarios->created; ?></td>
								</tr>
							</tbody>
						</table>							
					</div>
				</div>
			</td>
		</tr>
	</tbody>
</table>
<br/ >
<?php echo anchor('administracion/update_usuario', '<i class="icon-edit"></i> Editar', 'class="btn"'); ?>

<?php echo anchor('sitio', '<i class="icon-home"></i> Regresar', 'class="btn"'); ?>


