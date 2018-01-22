<?php
include'lib.php';

class Verify{
	public $result;
	
	function Verify(){
		$action = $_GET["a"];
		switch ($action) {
			case 'login':
				$this->login();
				if($this->result)
					header('location: ../applications/');
			break;
			case 'cadastro':
				$this->cadastro();
				if($this->result)
					header('location: ../login.php');
				else
					echo "<script>javascript:history.go(-1)'</script>";
			break;
			case 'logout':
				$this->logout();
				if($this->result)
					header('location: ../index.php');
			break;

			default:

			break;
		}
	}

	function login(){
		$user = new Usuario;
		$user->set_senha(sha1($_POST["senha"]));
		$user->set_email($_POST["email"]);
		$this->result = $user->verify_login();
		
	}
	function cadastro(){
		$user = new Usuario;

		$user->set_usuario($_POST["user_name"]);
		$user->set_nome($_POST["nome"]);
		$user->set_email($_POST["email"]);
		$user->set_senha(sha1($_POST["senha"]));
		
		$this->result = $user->novo_usuario();
	}
	function logout(){
		$user = new Usuario;
		$this->result = $user->encerrar_section();
	}
	
}

$verificar = new Verify();
?>
