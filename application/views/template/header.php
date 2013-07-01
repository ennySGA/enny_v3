<html>
<head>
	<title>Enny Servicios de gestión || <?php echo $nombre; ?></title>
	<?php 
	echo meta('Content-type', 'text/html; charset=utf-8', 'equiv');
	echo link_tag('assets/css/bootstrap.min.css');
	echo link_tag('assets/css/bootstrap-responsive.min.css');
	echo link_tag('assets/css/fullcalendar.css');
	
	echo link_tag('assets/css/unicorn.main.css');
	echo link_tag('assets/css/unicorn.grey.css');
	echo link_tag('http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css');
	 ?>
	<script src='<?php echo base_url(); ?>jquery/js/jquery-1.9.1.min.js'></script>
	<script src='<?php echo base_url(); ?>jquery/js/jquery-ui-1.10.2.custom.min.js'></script>
	<script src='<?php echo base_url(); ?>fullcalendar/fullcalendar.min.js'></script>
</head>
<body>
		<div id="header">
			<h1><a href="#">Enny</a></h1>		
		</div>
		
		<div id="search">
			<input type="text" placeholder="Buscar..."/><button type="submit" class="tip-right" title="Search"><i class="icon-search icon-white"></i></button>
		</div>
		<div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text"><?php echo $this->session->userdata('username'); ?></span></a></li>
                <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a class="sAdd" title="" href="#">Nuevos Mensajes</a></li>
                        <li><a class="sInbox" title="" href="#">recibidos</a></li>
                        <li><a class="sOutbox" title="" href="#">enviados</a></li>
                        <li><a class="sTrash" title="" href="#">papelera</a></li>
                    </ul>
                </li>

                <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Configuración</span></a></li>
                <li class="btn btn-inverse"><a title="" href="<?php echo base_url()?>index.php/sitio/logout"><i class="icon icon-share-alt"></i> <span class="text">Salir</span></a></li>
            </ul>
        </div>
            
		<div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-home"></i> Inicio</a>
			<ul>
				<li class="active"><a href="<?php echo base_url()."index.php/programas"; ?>"><i class="icon icon-home"></i> <span>Inicio</span></a></li>
				<li><a href="<?php echo base_url()."index.php/programas"; ?>"><i class="icon icon-th-list"></i> <span>Procedimientos ISO</span></a></li>
				<li class="submenu">
					<a href="#"><i class="icon icon-asterisk"></i> <span>Organización</span></a>
					<ul>
						<li><a href="invoice.html"><i class="icon icon-th"></i> <span>Organigrama</span></a></li>
						<li><a href="chat.html" ><i class="icon icon-user"></i> <span>Integrantes</span></a></li>
					</ul>
				</li>
				<li><a href="<?php echo base_url()."index.php/areas"; ?>"><i class="icon icon-screenshot"></i> <span>Áreas</span></a></li>
				<li><a href="<?php echo base_url()."index.php/tipos"; ?>"><i class="icon icon-leaf"></i> <span>Aspectos ambientales</span></a></li>
				<li><a href="<?php echo base_url()."index.php/niveles"; ?>"><i class="icon icon-briefcase"></i> <span>Legislación ambiental</span></a></li>
				<li class="submenu">
					<a href="#"><i class="icon icon-signal"></i> <span>Resultados</span></a>
					<ul>
						<li><a href="invoice.html">Gráficos</a></li>
						<li><a href="chat.html">Reporte PDF</a></li>
						<li><a href="calendar.html">Historial</a></li>
					</ul>
				</li>
			</ul>
		
		</div>
		
		<div id="content">
			<div id="content-header">
				<h1>
					<?php echo $nombre; ?>
				</h1>
				<div class="btn-group">
					<a class="btn btn-large tip-bottom" title="Archivos"><i class="icon-file"></i></a>
					<a class="btn btn-large tip-bottom" title="Resultados"><i class="icon-user"></i></a>
					<a class="btn btn-large tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a>
				</div>
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Inicio</a>
				<a href="#" class="current"><?php echo $nombre; ?></a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
					<div class="span12">