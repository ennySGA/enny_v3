<div class="widget-title">
	<span class="icon">
		<i class="icon-list-alt"></i>
	</span><h5><?php echo $widget->nombre; ?></h5>

	<div class="buttons">
		<a href="#myAlert<?php echo $cont;?>" data-toggle="modal" class="btn btn-mini">
			<i class="icon-pencil"></i> Comentar
		</a>
		<?php echo anchor('items/delete/'.$widget->id.'/'.$estrategia[0]->id,'<i class="icon-trash"></i> Borrar', 'class="btn btn-mini"') ?>

	</div>
</div>
<div class="widget-content">

	<ul class="recent-posts">
		<?php foreach ($widget->rows as $comment) { ?>

				<li>
					<div class="user-thumb">
						<img style="width: 40px; height: 40px;" width="40" height="40" alt="User" src="<?php echo base_url().$comment->avatar; ?>" />
					</div>

					<div class="article-post">
						<span class="user-info"> Por: <?php echo $comment->username; ?> En <?php echo $comment->creado; ?> </span>
						<p>
							<p><?php echo $comment->cuerpo; ?></p>
						</p>
						<?php if($user->id==$comment->id_usuario){ ?>
							<a href="#mec<?php echo $comment->id;?>" data-toggle="modal" class="btn btn-primary btn-mini">Editar</a> 
						<?php } ?>
						<a href="#" class="btn btn-success btn-mini">Publicar</a> 
						<?php if($user->id==$comment->id_usuario){ ?>
							<?php echo anchor('estrategias/delete_comment/'.$comment->id.'/'.$estrategia[0]->id, 'borrar', 'class="btn btn-danger btn-mini"'); ?>
						<?php } ?>
					</div>
				</li>

				<!--Modal de edición-->
				<div id="mec<?php echo $comment->id;?>" class="modal hide" style="display: none;" aria-hidden="true">
					<div class="modal-header">
						<button data-dismiss="modal" class="close" type="button">×</button>
						<h3><?php echo $widget->nombre; ?></h3>
					</div>
					<form id='ftext-<?php echo $cont; ?>' action='<?php echo base_url(); ?>estrategias/edit_comment/<?php echo $estrategia[0]->id; ?>' method='POST' class='form-vertical'>
						<div class='modal-body'>
							<input type='hidden' value='<?php echo $widget->widgetobj_id;?>' name='w_id'>
							<input type='hidden' value='<?php echo $comment->id;?>' name='id_c'>
							<input type='hidden' value='<?php echo $user_id; ?>' name='usuario_id'>
							<div class='form-elements'>
								<div class="control-group">
										<div class='form-fields'>
											<div class="controls">
												<textarea style="width:100%" name="cuerpo" rows="7"><?php echo $comment->cuerpo;?></textarea>
											</div>
										</div>
								</div>
							</div>
						</div>
						<div class='modal-footer'>
							<input type='submit' class='btn btn-primary' value='Guardar' name='edit-comentario' >
							<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
						</div>
					</form>
					<div class='mensaje'></div>
				</div>
		<?php } ?>
		
		
		<li class="viewall">
			<a title="" class="tip-top" href="#" data-original-title="Ver todos los comentarios"> + Ver todo + </a>
		</li>
	</ul>


<!-- Modal Comentar -->
<div id="myAlert<?php echo $cont;?>" class="modal hide" style="display: none;" aria-hidden="true">
	<div class="modal-header">
		<button data-dismiss="modal" class="close" type="button">×</button>
		<h3><?php echo $widget->nombre; ?></h3>
	</div>

	<form id='ftext-<?php echo $cont; ?>' action='<?php echo base_url(); ?>/estrategias/add_comment/<?php echo $id; ?>' method='POST' class='form-vertical'>
		<div class='modal-body'>
			<input type='hidden' value='<?php echo $widget->id;?>' name='id_w'>
			<input type='hidden' value='<?php echo $user_id; ?>' name='id_usuario'>
			
			<div class='form-elements'>
				<div class="control-group">
					<div class='form-fields'>
						<div class="controls">
							<textarea style="width:100%" name="cuerpo" rows="7"></textarea>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class='modal-footer'>
			<input type='submit' class='btn btn-primary' value='Guardar' name='add_comment' >
			<a data-dismiss='modal' class='btn btn-danger' href='#'>Cancelar</a>
		</div>
	</form>
	<div class='mensaje'></div>
</div>

</div>
