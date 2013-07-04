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
			//$this->load->view('items/meta',$data);
			
			break;
		default:
			echo $widget->tipo;
			
			break;
		}
		?>	
</div>
<?php } ?>