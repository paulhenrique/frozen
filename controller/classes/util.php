<?php
class Util{
	public $alert;
	public $mode;
	public function getAlert(){  
		if (isset($_GET["alert"])) {
			$this->alert = $_GET["alert"];
			if ($this->alert == 1)
				return "Preencha os campos para fazer login...";
			if ($this->alert == 2)
				return "Senha incorreta!";
			if ($this->alert == 3)
				return "Você tem que estar logado para acessar à essa página!";
			if ($this->alert == 4)
				return "Usuário não encontrado!";
		}
	}
	public function alert($mensagem){
		echo "<script>".$mensagem."</script>";
	}
	public function setAlert($page, $NumErro){
		echo "<script>location.href='".$page."?alert=".$NumErro."'</script>";  
	}
	public function console_log($string){
		echo "<script>console.log('".$string."')</script>";
	}
	public function isset_login(){

		switch ($this->mode) {
			case 'ativo':
				if (isset($_SESSION["user"]))
					header("location: applications/");
				break;
			
			case 'inativo':
				if (!isset($_SESSION["user"]))
					header("location: ./login.php");
				break;
			
			default:
				if (!isset($_SESSION["user"]))
					header("location: ./index.php");
				break;
		}	
	}
}
?>
