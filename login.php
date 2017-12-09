<?php
include'lib.php';
if (isset($_SESSION['user_name'])) {
	header("location: admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Frozen Waves</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="manifest" href="manifest.json">	
	<!-- Add to homescreen for Chrome on Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="200x200" href="view/img/logo-frozen-vetor.png">
	<meta name="theme-color" content="white">

	<!-- Add to homescreen for Safari on iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Project">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="apple-touch-icon-precomposed" href="view/img/logo-frozen-vetor.png">

	<!-- Tile icon for Win8 (144x144 + tile color) -->
	<meta name="msapplication-TileImage" content="img/logo-frozen-vetor.png">
	<meta name="msapplication-TileColor" content="white">
	
	<link rel="stylesheet" type="text/css" href="view/css/tether.min.css">
	<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css">

</head>
<body class="text-dark">
	<div class="container">
		<div class="col-8 col-md-4 mx-auto mt-5 pt-5">
			<h2 class="mt-5 thin">Login</h2>
			<form action="verifLogin.php" method="post">
				<div class="input-group mt-4">
					<input type="text" class="form-control" placeholder="E-mail" name="email" required autofocus>
				</div>
				<div class="input-group mt-2">
					<input type="password" name="senha" class="form-control" placeholder="Senha" required >
				</div>
				<button type="submit" class="btn mt-4 btn-primary btn-block">Entrar</button>
				<a href="index.php" class="btn mt-1 btn-secondary btn-block">Voltar</a>
			</form>
			<div class="alert alert-info alert-dismissible mt-5" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php 
				if (!isset($_GET["alert"])) {
					echo "Bem Vindo!";
				}
				?>
				<strong><?php echo getAlert() ?></strong>
			</div>
		</div>
	</div>	
</body>
<!-- <script type="text/javascript" src="view/js/install.js"></script> -->
<!-- <script type="text/javascript" src="service-worker.js"></script> -->
</html>