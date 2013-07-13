	<script>
	jQuery.noConflict();
	jQuery(document).ready(function(){ 
  		jQuery('.bxslider').bxSlider();
	});
 	</script>


<div class="alert alert-info">
En esta sección podrás definir los <strong>procesos</strong> de tu organización y sus <strong>características</strong>.
<a href="#" data-dismiss="alert" class="close">×</a>
</div>

<ul class="bxslider">
 <?php foreach($procesos as $proceso){ ?>
<li>
	<div style="height: 300px; width: 100%"> <!-- Contenedor -->
		<div style="height: 100px; background: whitesmoke"> <!-- Primera fila -->
			<div style="height: 100%; width: 32%; float: left; position: relative; "> <!-- Legislación ambiental -->
				<div style="height: 20%; width: 49%; float: left; font-size: 1.05vw; border-bottom: 1px solid #ccc">
					<i class="icon-briefcase"></i> Legislación
				</div>
				<div style="height: 20%; width: 49%; float: left; border-bottom: 1px solid #ccc; text-align: right">
					<div class="btn btn-small"><i class="icon-edit"></i></div>
				</div>
				<div style="height: 80%; width: 100%; position: absolute; bottom: 0; font-size: 1.05vw">
					<ul>
						<li>Ley 1</li>
					</ul>
				</div>
			</div>
			<div style="height: 100%; width: 32%; float: left; position: relative"> <!-- Responsable -->
				<div style="height: 20%; width: 49%; float: left; font-size: 1.05vw; border-bottom: 1px solid #ccc">
					<i class="icon-user"></i> Responsable
				</div>
				<div style="height: 20%; width: 49%; float: left; border-bottom: 1px solid #ccc; text-align: right">
					<div class="btn btn-small"><i class="icon-edit"></i></div>
				</div>
				<div style="height: 80%; width: 100%; position: absolute; bottom: 0">
					<div style="height: 97%; width: 19%;  float: left; padding: 2px"> <!-- Avatar -->
						<img src="<?php echo base_url().$usuarios->avatar; ?>" style="height: 85%; width: 85%" />
					</div> 
					<div style="font-size: 1.05vw; height: 100%; width: 79%; float: left"> <!-- Nombre y puesto -->
						<div>
							<?php echo $usuarios->nombre." ".$usuarios->apellido; ?>
						</div>
						<div>
							<?php echo $usuarios->puesto; ?>
						</div>
						<div>
							Periodicidad: Permanente
						</div>
					</div>
				</div>
			</div>
			<div style="height: 100%; width: 32%; float: left; font-size: 1.05vw; position: relative;"> <!-- Archivos -->
				<div style="height: 20%; width: 48%; float: left; font-size: 1.05vw; border-bottom: 1px solid #ccc">
					<i class="icon-file"></i> Archivos
				</div>
				<div style="height: 20%; width: 48%; float: left; border-bottom: 1px solid #ccc; text-align: right">
					<div class="btn btn-small"><i class="icon-edit"></i></div>
				</div>
				<div style="height: 79%; width: 100%; position: absolute; bottom: 0; font-size: 1.05vw">
					<ul>
						<li>Archivo 1</li>
						<li>Archivo 2</li>
					</ul>
				</div>
			</div>	
		</div>
		<div style="height: 110px; background: whitesmoke"> <!-- Segunda fila -->
			<div style="height: 100%; width: 32%; float: left">
			</div>
			<div style="border: 2px solid black; height: 90%; width: 31%; float: left; border-radius: 25px 10px / 10px 25px; -moz-box-shadow: 0 0 30px 5px #999; -webkit-box-shadow: 0 0 30px 5px #999; background: #eee"> <!-- Proceso -->
				<div style="height: 20%; margin-left: 87%">
					<div class="btn btn-small"><?php echo anchor('procesos/update/'.$proceso->id.'', ' ', 'class="icon-edit"'); ?></i></div>
				</div>
				<div style="height: 60%; text-align: center; font-size: 2.5vw">
					<?php echo $proceso->nombre; ?>
				</div>
			</div>
			<div style="height: 100%; width: 33%; float: left">
			</div>
		</div>
		<div style="height: 100px; background: whitesmoke"> <!-- Tercera fila -->
			<div style="height: 100%; width: 32%; float: left; font-size: 1.05vw;"> <!-- Sub-procesos -->
				<div style="height: 20%; width: 48%; float: left; font-size: 1.05vw; border-bottom: 1px solid #ccc">
					<i class="icon-th"></i> Sub procesos
				</div>
				<div style="height: 20%; width: 48%; float: left; border-bottom: 1px solid #ccc; text-align: right">
					<div class="btn btn-small"><i class="icon-edit"></i></div>
				</div>
				<div style="height: 79%; width: 100%; bottom: 0; font-size: 1.05vw">
					
				</div>
			</div>
			<div style="height: 100%; width: 32%; float: left; font-size: 1.05vw;"> <!-- Aspectos ambientales -->
				<div style="height: 20%; width: 75%; float: left; font-size: 1.05vw; border-bottom: 1px solid #ccc">
					<i class="icon-fire"></i><i class="icon-leaf"></i><i class="icon-tint"></i><i class="icon-globe"></i>
				</div>
				<div style="height: 20%; width: 23%; float: left; border-bottom: 1px solid #ccc; text-align: right">
					<div class="btn btn-small"><i class="icon-edit"></i></div>
				</div>
				<div style="height: 79%; width: 100%; bottom: 0; font-size: 1.05vw">
					
				</div>
			</div>
			<div style="height: 100%; width: 32%; float: left; font-size: 1.05vw;"> <!-- Opciones -->
				<div style="height: 20%; width: 98%; float: left; font-size: 1.05vw; border-bottom: 1px solid #ccc">
				<i class="icon-wrench"></i> Opciones
				</div>
				<div style="height: 79%; width: 100%; bottom: 0; font-size: 1.05vw">
					<div> <!--- Eliminar proceso -->
						<div class="btn btn-small">
							<?php echo anchor('procesos/delete/'.$proceso->id.'', ' ', 'class="icon-remove"'); ?>
						</div> Eliminar proceso
					</div>
					<div>
						<div class="btn btn-small"><?php echo anchor('procesos/insert/'.$proceso->id.'', ' ', 'class="icon-plus"'); ?></div> Agregar proceso

					</div>
				</div>
			</div>
		</div>
	</div>
</li>
<?php } ?>
</ul>
