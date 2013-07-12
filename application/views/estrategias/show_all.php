<?php 
$arr_etapas=array();
foreach ($etapas as $etapa) {
	$arr_etapas[$etapa->id]=$etapa->nombre;
}
 ?>

<?php $this->load->view('alerts/validation_errors'); ?>
<?php $this->load->view('alerts/control'); ?>

<?php foreach($etapas as $i=>$etapa){ ?>
<?php if($i%2==0){ ?>
<div class="row-fluid">
<?php } ?>
	<div class="span6">
		<div class="widget-box">
			<div class="widget-title">
				<span class="icon">
					<i class="icon-file"></i>
				</span>
				<h5><?php echo $etapa->nombre; ?></h5>
				<span title="x/n metas" class="label label-info tip-left">% avance</span>
			</div>
			<div class="widget-content nopadding">
				<ul class="recent-posts">
					<?php foreach($etapa->estrategias as $estrategia){ ?>
					<li>
						<div class="user-thumb">
							<a href="#image_<?php echo $estrategia->id; ?>" data-toggle="modal">
								<img width="40" height="40" alt="User" src="<?php echo base_url(); ?>assets/img/estrategias/thumbnails/<?php echo $estrategia->imagen; ?>">
							</a>
						</div>
						<?php 
							$datos=array(
							'estrategia'=>$estrategia,
							'etapa'=>$etapa,
							'etapas'=>$arr_etapas
							);
						?>
						<?php $this->load->view('estrategias/modals/edit_image',$datos); ?>
						<div class="article-post">
							<?php echo anchor('estrategias/single/'.$estrategia->id,$estrategia->nombre); ?>
							<div class="progress">
								<div style="width: <?php echo rand(0,100); ?>%;" class="bar"></div>
							</div>
							<p>
								<?php echo $estrategia->descripcion ?>
							</p>
							<a href="#edit_<?php echo $estrategia->id; ?>" data-toggle="modal" class="btn btn-primary btn-mini" >
								Editar
							</a>
							<?php 
							$datos=array(
							'estrategia'=>$estrategia,
							'etapa'=>$etapa,
							'etapas'=>$arr_etapas
							); ?>
							<?php $this->load->view('estrategias/modals/edit_estrategia', $datos) ?>
						</div>
					</li>
					<?php } ?>

					<?php echo form_open('estrategias/','',$hidden=array('id_etapa'=>$etapa->id)); ?>
					<li>
						<div class="user-thumb">
							<img width="40" height="40" alt="User" src="<?php echo base_url(); ?>assets/img/estrategias/thumbnails/default.jpg">
						</div>
						<div class="article-post">
							<?php echo form_input('nombre','','placeholder="Nueva estratégia etapa '.$etapa->id.'"'); ?>
							<?php echo form_input('plazo','','placeholder="Fecha objetivo" class="datepicker"'); ?>
							<p>
								<?php $text = array('name'=>'descripcion','placeholder'=> 'Descripción','rows'=> '2','style'=>'width:100%'); ?>
								<?php echo form_textarea($text); ?>
							</p>
							<?php echo form_submit('crear_estrategia', 'Crear', 'class="btn btn-success btn-mini"'); ?>
						</div>
					</li>
					<?php echo form_close(); ?>
				</ul>
			</div>
		</div>
	</div>
<?php if($i%2!=0||$i==count($etapas)){ ?>
</div>
<?php } ?>
<?php } ?>


<!-- CODIGO PARA DATE PICKER-->
<script>
$(function() {
$( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
});
</script>
<!--TERMINA DATE PICKER-->