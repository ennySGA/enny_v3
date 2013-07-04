<?php echo anchor('administracion/insert_usuario/'.$id_organizacion.'', '<i class="icon-user"></i> Agregar usuario', 'class="btn"') ?> <br/ >

<?php foreach($usuarios as $usuario): ?>

<img src="<?php echo base_url().$usuario->avatar; ?>" />
<?php echo $usuario->nombre." "; ?>
<?php echo $usuario->apellido." "; ?>
<?php echo $usuario->puesto." "; ?>
<?php echo $usuario->email; ?>
<br/ >

<?php endforeach ?>
