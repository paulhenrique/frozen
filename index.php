<!DOCTYPE html>
<html manifest="appcache.manifest">
<?php
include'lib.php';
if (isset($_SESSION["user_name"])) {
	header("location: admin.php");			
}
?>

<head>
	<title>Frozen Waves</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="manifest" href="manifest.json">
	
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="icon" sizes="200x200" href="view/img/ico-frozen-vetor.png">
	<meta name="theme-color" content="#ffffff">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="Frozen">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<link rel="apple-touch-icon-precomposed" href="view/img/ico-frozen-vetor.png">

	<meta name="msapplication-TileImage" content="view/img/ico-frozen-vetor.png">
	<meta name="msapplication-TileColor" content="#ffffff">

	<!-- arquivos de estilo  -->
	<link rel="stylesheet" type="text/css" href="view/css/tether.min.css">
	<link rel="stylesheet" type="text/css" href="view/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="view/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="view/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-light navbar-light fixed-top">
		<div class="container position-relative ">
			<a class="navbar-brand" href="index.php">Frozen Waves</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</button>
			<div class="collapse navbar-collapse col-3" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="login.php">Entrar</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="cadastro.php">Criar Conta</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container-fluid pt-md-5 header text-center">
		<div class="col-12 col-md-8 m-auto text-center">
			<div class="col-8 col-md-4 m-auto">
				<img class="img-fluid mt-md-10 mt-5" src="view/img/logo-frozen-vetor.png">
			</div>
		</div>
		<h3 class="text-white mt-5 thin">uma solução fechada, portável e gratuita</h3>
		<!-- <div class="col-3">
				<div class="phone-view"></div>
			</div> -->
		</div>
		<div class="container-fluid p-md-5 position-relative mt-md-10">
			<div class="container">
				<h1 class="thin">Como isso funciona?</h1>
				<img src="view/img/schema-comunicacao3.png" style="position: absolute;right:60px;width: 500px;" class="img-fluid hide-md">
				<p class="col-md-5 thin lead text-justify mt-5">O Frozen foi desenvolvido utilizando dos conceitos de Progressive Web Apps utilizando o modelo MVC (Model View Controller). Na camada Model foram utilizadas tecnologias Python desenvolvidas em trabalhos de pesquisa que antecederam à este.<br>A comunicação com essa camada é feita através de PHP, que permite a utilização dos dados criados em Model por View, exibindo os dados utilizando bibliotecas Javascript.
				</p>
			</div>
		</div>
		<div class="container-fluid	hide-md">
			<div class="container text-dark p-md-5 mt-md-5 text-center">
				<h2 class="mt-5 p-md-5 thin text-dark">Pesquisadores Envolvidos</h2>
				<div class="row justify-content-center mt-5 thin">
					<div class="col-2 text-center bloco-pesquisador">
						<img width="150" class="rounded-circle img-fluid mx-auto" src="view/img/pesquisadores/carlos.gif"><p class="mt-3">Dr. Carlos Henrique</p>
					</div>
					<div class="col-2 text-center bloco-pesquisador">
						<img width="150" class="rounded-circle img-fluid mx-auto" src="view/img/pesquisadores/leonardo.jpeg">
						<p class="mt-3">Dr. Leonardo Ambrosio</p>
					</div>
					<div class="col-2 text-center bloco-pesquisador">
						<img width="150" class="rounded-circle img-fluid mx-auto" src="view/img/pesquisadores/danilo.jpg">
						<p class="mt-3">Msc. Danilo Bueno</p>
					</div>
					<div class="col-2 text-center bloco-pesquisador">
						<img width="150" class="rounded-circle img-fluid mx-auto" src="view/img/pesquisadores/ivan.jpg">
						<p class="mt-3">Ivan Rodrigues</p>
					</div>
					<div class="col-2 text-center bloco-pesquisador">
						<img width="150" class="rounded-circle img-fluid mx-auto" src="view/img/pesquisadores/paulo.jpg">
						<p class="mt-3">Paulo Henrique</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="p-md-5 p-3 p-md-0 mt-10 row">
				<div class="col-6 pt-md-5 hide-md">
					<div class="monitor"></div>
				</div>
				<div class="col-md-6">
					<h1 class="thin">O que é Frozen Waves?</h1>
					<p class="thin lead text-justify">
						A complexidade dos métodos numéricos, as variedades na quantidade e uso de seus atributos de entrada e a quantidade de saída de dados pode conduzir os pesquisadores à errôneas interpretações e até limitar o uso das ferramentas para os que possuem menor conhecimento teórico em determinado assunto e que pretendem aplica-­lo a um certo fim. Nessa afirmação se enquadram as modelagem de sobreposições de Feixe de Bessel, que vêm sendo exploradas em várias das comunicações e computação quântica, assim como na detecção de tumores na medicina. Nesse contexto, esse projeto é a continuidade de uma parceria já em andamento entre pesquisadores do IFSP e da EESC/USP para o desenvolvimento de interfaces computacionais que visem simplificar a inserção de dados nesse complexos modelos numéricos e também a visualização de seus resultados em gráficos em uma solução fechada, portável e gratuita, visando sua possível distribuição futuramente.
					</p>
				</div>
			</div>
		</div>
		//<div class="pt-1 container-fluid">
		//	<p class="lead">v0.01</p>
		//</div>
	</body>
	<script type="text/javascript" src="view/js/jquery.min.js"></script>
	<script type="text/javascript" src="view/js/smoothscroll.js"></script>
	<script type="text/javascript" src="view/js/popper.min.js"></script>
	<script type="text/javascript" src="view/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="service-worker.js"></script>
	<script type="text/javascript">
		$(function(){
			var windowHeight = $(window).height();
			$(".header").height(windowHeight);
	});
</script>
</html>
