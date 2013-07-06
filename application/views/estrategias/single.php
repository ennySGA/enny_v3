<div class="alert alert-info">
	En esta sección podrás gestionar el <strong>objetivo</strong> que seleccionaste, agregando diferentes tipos de <strong>elementos</strong>.
	<a href="#" data-dismiss="alert" class="close">×</a>
</div>

<?php $this->load->view('alerts/control'); ?>
<?php $this->load->view('alerts/validation_errors'); ?>
<?php $this->load->view('alerts/success'); ?>

<?php foreach($widgets as $cont=>$widget){ ?>
	<div class="widget-box">
	
	<?php
	switch ($widget->tipo) {
		case 'text':
			$data=array('widget'=>$widget,'id'=>$estrategia[0]->id,'cont'=>$cont);
			$this->load->view('items/texto',$data);
				
			break;
		case 'comentario':
			$data=array('widget'=>$widget,'id'=>$estrategia[0]->id,'cont'=>$cont,'user_id'=>$user->id);
			$this->load->view('items/comentario',$data);
			
			break;	
		case 'impacto':
			$data=array('widget'=>$widget,'id'=>$estrategia[0]->id,'cont'=>$cont,'user_id'=>$user->id);
			//$this->load->view('items/impacto',$data);
			
			break;
		case 'check':
			$data=array('widget'=>$widget,'id'=>$estrategia[0]->id,'cont'=>$cont,'user_id'=>$user->id);
			$this->load->view('items/check',$data);
			
			break;
		case 'meta':
			$data=array('widget'=>$widget,'id'=>$estrategia[0]->id,'cont'=>$cont,'user_id'=>$user->id);
			$this->load->view('items/metas',$data);
			
			break;
		case 'evento':
			$data=array('widget'=>$widget,'id'=>$estrategia[0]->id,'cont'=>$cont,'user_id'=>$user->id);
			$this->load->view('items/eventos',$data);
			
			break;
		default:
			echo $widget->tipo;
			
			break;
		}
		?>	
</div>
<?php } ?>

<div style="text-align:center;">
	<div class="btn-group">
		<button id="nuevo-text" href="#nuevo-txt" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Texto"><i class="icon-list-alt icon-white"></i></button>
		<button id="nuevo-impacto" href="#nuevo-w" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Impacto ambiental"><i class="icon-leaf icon-white"></i></button>
		<button id="nuevo-archivo" href="#nuevo-w" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Archivos"><i class="icon-file icon-white"></i></button>
		<button id="nuevo-meta" href="#nueva-meta" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Metas"><i class="icon-road icon-white"></i></button>
		<button id="nuevo-galeria" href="#nuevo-w" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Galería"><i class="icon-picture icon-white"></i></button>
		<button id="nuevo-legislacion" href="#nuevo-w" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Legislación ambiental"><i class="icon-briefcase icon-white"></i></button>
		<button id="nuevo-respuesta" href="#nuevo-w" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Respuesta a emergencias"><i class="icon-warning-sign icon-white"></i></button>
		<button id="nuevo-comentario" href="#nuevo-com" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Comentarios"><i class="icon-comment icon-white"></i></button>
		<button id="nuevo-evento" href="#nuevo-event" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Eventos"><i class="icon-calendar icon-white"></i></button>
		<button id="nuevo-check" href="#nuevo-checklist" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Lista de revisión"><i class="icon-check icon-white"></i></button>
		<button id="nuevo-responsabilidad" href="#nuevo-w" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Responsabilidades y autoridades"><i class="icon-hand-right icon-white"></i></button>
		<button id="nuevo-mapa" href="#nuevo-w" data-toggle="modal" class="btn btn-success tip-top" data-original-title="Mapa"><i class="icon-map-marker icon-white"></i></button>
	</div>
</div>



<?php $this->load->view('estrategias/modals/widget_texto'); ?>
<?php $this->load->view('estrategias/modals/widget_comentario'); ?>
<?php $this->load->view('estrategias/modals/widget_evento'); ?>
<?php $this->load->view('estrategias/modal_nueva_meta'); ?>
<?php $this->load->view('estrategias/modals/widget_checklist'); ?>


				

		
	</div>
</div>


<!-- CODIGO PARA DATE PICKER-->
<script>
$(function() {
$( ".datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
});
</script>
<!--TERMINA DATE PICKER-->