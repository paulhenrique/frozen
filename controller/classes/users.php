<?php
class Usuario{
	private $id;
	private $email;
	private $nome;
	private $usuario;
	private $senha;

	public function set_id($_a){
		$this->id = $_a;
	}
	public function get_id(){
		return $this->id;
	}
	public function set_email($_a){
		$this->email = $_a;
	}
	public function get_email(){
		return $this->email;
	}
	public function set_nome($_a){
		$this->nome = $_a;
	}
	public function get_nome(){
		return $this->nome;
	}
	public function set_usuario($_a){
		$this->usuario = $_a;
	}
	public function get_usuario(){
		return $this->usuario;
	}
	public function set_senha($_a){
		$this->senha = $_a;
	}
	public function get_senha(){
		return $this->senha;
	}

	public function verify_login(){	
		$conexao = new Conexao();
		$conn = $conexao->new_connection();

		$query = "SELECT * FROM usuario WHERE email = '".$this->email."' and senha = '".$this->senha."'";
		$result = mysqli_query($conn,$query);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$_SESSION["user"]["id"] 	= $row["id"];
				$_SESSION["user"]["user"] 	= $row["user"];
				$_SESSION["user"]["nome"] 	= $row["nome"];
				$_SESSION["user"]["email"] 	= $row["email"];

				$this->id 	= $row["id"];
				$this->user = $row["user"];
				$this->nome = $row["nome"];
			}
			return true;
		}else{
			return false;
		}
		$conexao->end_conection();
	}
	public function novo_usuario(){
		$conexao = new Conexao();
		$conn = $conexao->new_connection();

		$insert = "INSERT INTO usuario(user, nome, email, senha) VALUES('".$this->usuario."','".$this->nome."','".$this->email."', '".$this->senha."')";
		$query = mysqli_query($conn, $insert);

		if(!$query){
			return false;
		}else{
			shell_exec("mkdir ../users/".$this->usuario);
			return true;
		}
		$conexao->end_conection();
	}
	public function encerrar_section(){
		session_start();
		session_unset();
		session_destroy();
		$_SESSION = array();
		return true;
	}
}


?>