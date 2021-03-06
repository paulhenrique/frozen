<?php
require_once'../controller/lib.php';
$verif = new Util;
$verif->mode = 'inativo';
$verif->isset_login();
?>
<!DOCTYPE html>
<html manifest="manifest.appcache">
<head>
	<title>Frozen Waves - <?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="manifest" href="manifest.json">

	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="200x200" href="img/ico.png">
	<meta name="theme-color" content="#292b2c">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Project">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="apple-touch-icon-precomposed" href="img/ico.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="img/ico.png">
	<meta name="msapplication-TileColor" content="#292b2c">

	<link rel="stylesheet" type="text/css" href="../view/css/tether.min.css">
	<link rel="stylesheet" type="text/css" href="../view/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../view/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../view/css/c3.min.css">
	<link rel="stylesheet" type="text/css" href="../view/css/estilo.css">
</head>
<body class="bg-light">
	<?php if($page == "index"){ ?>
		<div class="sidebar">
			<h1 >Frozen Waves</h1>
			<ul class="border-list">
				<li><i class="fa fa-user-circle" aria-hidden="true"></i> <span class="label"><?= $_SESSION["user"]["nome"];?></span></a></li>
			</ul>
			<ul class="">
				<li class="active"><a href="start.php"><i class="fa fa-th" aria-hidden="true"></i> <span class="label">Application</span></a></li>
				<li><a href="configuracoes.php"><i class="fa fa-cog" aria-hidden="true"></i> <span class="label">Settings</span></a></li>
				<li><a href="../controller/verify.php?a=logout"><i class="fa fa-sign-out" aria-hidden="true"></i> <span class="label">Sair</span></a></li>
			</ul>
		</div>
		<div class="bar-top box-shadow">
			<h1><i class="fa fa-info-circle green-icon" aria-hidden="true"></i> <span class="label">Applications</span></h1>
			<!-- <i class="fa fa-bell-o notification-icon" aria-hidden="true"></i> -->
			<a class="btn-toggle-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
			<div class="content-toggle-menu">
				<ul class="tab-cog">
					<li><a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> <span class="label"><?php echo $_SESSION["user_name"];?></span></a></li>
				</ul>
				<ul class="user-cog">
					<li><a href="start.php"><i class="fa fa-th" aria-hidden="true"></i> <span class="label">Applications</span></a></li>
					<li><a href="configuracoes.php"><i class="fa fa-cog" aria-hidden="true"></i> <span class="label">Settings</span></a></li>
					<li><a href="../controller/verify.php?a=logout"><i class="fa fa-sign-out" aria-hidden="true"></i> <span class="label">Log Out</span></a></li>
				</ul>
			</div>
		</div>
	<?php }else if($page == "application"){?>
		<div class="sidebar">
			<h1 >Frozen Waves - <?=$application?></h1>
			<ul class="border-list">
				<li><i class="fa fa-user-circle" aria-hidden="true"></i> <span class="label"><?= $_SESSION["user"]["nome"];?></span></a></li>
			</ul>
			<ul class="tab-cog">
				<li class="active"><a href="#inicio"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span class="label">Home</span></a></li>
				<li><a href="#generate-chart"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span class="label">New Chart</span> </a></li>
			</ul>
			<ul class="">
				<li><a href="index.php"><i class="fa fa-th" aria-hidden="true"></i> <span class="label">Applications</span></a></li>
				<li><a href="../configuracoes.php"><i class="fa fa-cog" aria-hidden="true"></i> <span class="label">Settings</span></a></li>
				<li><a href="../controller/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <span class="label">Sair</span></a></li>
			</ul>
		</div>
		<div class="bar-top box-shadow">
			<h1><i class="fa fa-info-circle green-icon" aria-hidden="true"></i> <span class="label">Charts</span></h1>
			<a class="btn-toggle-menu"><i class="fa fa-bars" aria-hidden="true"></i></a>
			<div class="content-toggle-menu">
				<ul class="tab-cog">
					<li><a href="#"><i class="fa fa-user-circle" aria-hidden="true"></i> <span class="label"><?= $_SESSION["user"]["nome"];?></span></a></li>
					<li><a href="#inicio"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span class="label">Inicio</span></a></li>
					<li><a href="#generate-chart"><i class="fa fa-plus-circle" aria-hidden="true"></i> <span class="label">Novo Gráfico</span> </a></li>
					<!-- <li><a href="#graficos"><i class="fa fa-cog" aria-hidden="true"></i> <span class="label">Gerenciar Gráficos</span></a></li> -->
				</ul>
				<ul class="user-cog">
					<li><a href="index.php"><i class="fa fa-th" aria-hidden="true"></i> <span class="label">Aplicações</span></a></li>
					<li><a href="../configuracoes.php"><i class="fa fa-cog" aria-hidden="true"></i> <span class="label">Configurações</span></a></li>
					<li><a href="../controller/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> <span class="label">Sair</span></a></li>>
				</ul>
			</div>
		</div>
	<?php };?>
	
</body>
<script type="text/javascript" src="view/js/jquery.min.js"></script>
<script type="text/javascript" src="view/js/popper.min.js"></script>
<script type="text/javascript" src="view/js/bootstrap.min.js"></script>
<script type="text/javascript" src="view/js/d3.min.js"></script>
<script type="text/javascript" src="view/js/c3.min.js"></script>
<script type="text/javascript" src="view/js/smoothscroll.js"></script>
<script type="text/javascript" src="view/js/spin.js"></script>
<script type="text/javascript" src="view/js/app.js"></script>
<script type="text/javascript" src="view/js/install.js"></script>
<script type="text/javascript" src="service-worker.js"></script>
</html>
