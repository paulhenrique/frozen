\<?php
session_start();
function alert($mensagem){
	echo "<script>".$mensagem."</script>";
}
function setAlert($page, $NumErro){
	// header("location:".$page."?alert=".$NumErro.""); //PROBLEMAS COM SERVICE WORKERS/APPCACHE
	echo "<script>location.href='".$page."?alert=".$NumErro."'</script>";  //POSSÍVEL SOLUÇÃO
}
function verify_login(){
	include 'conn.php';

	$senha = sha1($_POST["senha"]);
	$email = $_POST["email"];

	$query = "SELECT * FROM usuario WHERE email = '".$email."' and senha = '".$senha."'";
	$result = mysqli_query($conn,$query);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
				$_SESSION["user"]["id"] = $row["id"];
				$_SESSION["user"]["user"] = $row["user"];
				$_SESSION["user"]["nome"] = $row["nome"];
				$_SESSION["user"]["email"] = $row["email"];
		}
		return true;
	}else{
		return false;
	}
	$conn->close();
}
function isset_login(){
	if (isset($_SESSION["user"]))
		header("location: applications/");
}
function is_not_set_login(){
	if (!isset($_SESSION["user"]))
		setAlert("login.php", 3);
}
function getAlert(){  //Verificar erros de acordo com o número
	if (isset($_GET["alert"])) {
		$alert = $_GET["alert"];
		if ($alert == 1)
			return "Preencha os campos para fazer login...";
		if ($alert == 2)
			return "Senha incorreta!";
		if ($alert == 3)
			return "Você tem que estar logado para acessar à essa página!";
		if ($alert == 4)
			return "Usuário não encontrado!";
	}
}

function checkLogin(){ //checar se a sessão que confirma o login foi criada
	if (!isset($_SESSION["user_id"])){
		setAlert("login.php", 3);
		die();
	}else{
		header("location:admin.php");
	}
}
function getLastChart($opt){
	include 'conn.php';
	if ($opt==1) {
		$result = mysqli_query($conn,"SELECT * FROM charts WHERE idAutor=".$_SESSION["usuario"]." LIMIT 1 ");
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo $row['dadosChart'];
			}
		}else {
			echo "0 results";
		}
	}
	if ($opt==2) {
		$result = mysqli_query($conn,"SELECT * FROM charts WHERE idAutor=".$_SESSION["usuario"]." LIMIT 1");
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<h3 class='f300'>".$row['titulo']."</h3>";
			}
		}else {
			echo "0 results";
		}

		$result = mysqli_query($conn,"SELECT * FROM usuarios WHERE id=".$_SESSION["usuario"]."");
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<h4 class='f300'>".$row['nome']."</h4>";
			}
		}else {
			echo "0 results";
		}
		$result = mysqli_query($conn,"SELECT * FROM charts WHERE idAutor=".$_SESSION["usuario"]." LIMIT 1");
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<p class='f300'>".date('d/m/Y', strtotime($row['dataCriacao']))."</p>";
			}
		}else {
			echo "0 results";
		}
	}
	$conn->close();
}
function getIndividualChart($id, $opt){
	include 'conn.php';
	if ($opt == 1) {

		$result = mysqli_query($conn,"SELECT * FROM charts WHERE id=".$id."");
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo $row['dadosChart'];
			}
		}else {
			echo "";
		}
	}
	if ($opt == 2) {
		$result = mysqli_query($conn,"SELECT * FROM charts WHERE id=".$id."");
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<h3 class='f300'>".$row['titulo']."</h3>";
			}
		}else {
			echo "0 results";
		}

		$result = mysqli_query($conn,"SELECT * FROM usuarios WHERE id=".$_SESSION["usuario"]."");
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<h4 class='f300 d-block'>".$row['nome']."</h4>";
			}
		}else {
			echo "0 results";
		}
		$result = mysqli_query($conn,"SELECT * FROM charts WHERE id=".$id."");
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "<p class='f300'>".date('d/m/Y', strtotime($row['dataCriacao']))."</p>";
			}
		}else {
			echo "0 results";
		}
	}
	$conn->close();
}
function listChart(){
	include'conn.php';
	$result = mysqli_query($conn,"SELECT * FROM charts WHERE idAutor=".$_SESSION["usuario"]." ");
	if ($result->num_rows > 0) {
		$cont = 0;
		while($row = $result->fetch_assoc()) {
			if ($cont == 0) {
				echo "<a href='graph.php?graph=".$row['id']."' class='btn-PreviewGraph' ><li class='list-group-item list-graph active'>".$row['titulo']."</li></a>";
				$cont ++;
			}else{
				echo "<a href='graph.php?graph=".$row['id']."' class='btn-PreviewGraph' ><li class='list-group-item list-graph'>".$row['titulo']."</li></a>";
			}

		}
	}else {
		echo "<li class='list-group-item'>Você ainda não tem nenhum gráfico na sua lista</li>";
	}

	$conn->close();
}
function console_log($string){
		echo "<script>console.log('".$string."')</script>";
}
function create_list_charts(){
	$types = array('json');
	if ($handle = opendir('../users/'.$_SESSION["user"]["user"].'/')) {
	$title = array();
		while ($entry = readdir( $handle ) ) {
			$ext = strtolower( pathinfo( $entry, PATHINFO_EXTENSION) );
			if(in_array($ext, $types))
				$title[] = $entry;
		}
		closedir($handle);
		return $title;
	}
}
?>
