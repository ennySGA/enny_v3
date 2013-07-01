<h3><?php echo $welcome; ?></h3>

<?php echo anchor('usuarios/update', 'Edita tu perfil', 'class="btn btn-primary"'); ?>

<?php echo anchor('usuarios/update_password', 'Cambia tu contraseña', 'class="btn btn-inverse"'); ?>

<?php echo anchor('organizacion', 'Información de organización', 'class="btn btn-inverse"'); ?>

<?php echo anchor('sitio/logout', 'Log out', 'class="btn btn-warning"'); ?>