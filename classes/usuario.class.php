<?php

require_once "site.class.php";

class Usuario extends Site{

	public function __construct(){

		parent::__construct();

		session_start();
		
		if(isset($_POST['btnNovaConta']))
			$this->novaConta();

		if (isset($_GET['id'])) 
			$id_user = $_GET['id'];
	
	}

	public function receberDados(){

		$nome_completo = $POST['nomeCompleto'];
		// Upload de imagens 
		$genero = $POST['genero'];
		$dt_nascimento = $POST['dt_nascimento'];
		$email = $POST['email'];
		$senha = $POST['senha'];
		$cep = $POST['cep'];
		$numero = $POST['numeroCasa'];
		$complemento = $POST['complemento'];
		$tel_celular = $POST['tel_celular'];
		$tel_residencial = $POST['tel_residencial'];

		// Criptografia de senha
		$crip_senha = hash('sha512', $senha);

	}

	public function novaConta(){

		$sql = "INSERT INTO contratante VALUES (DEFAULT, '$nome_completo', NULL, '$genero', '$dt_nascimento', '$email', '$crip_senha', NULL, '$cep', '$numero', '$complemento', '$tel_residencialular', '$tel_residencial')";

		$query = mysqli_query($this->con, $sql);

		var_dump($sql);
		die('<br>droga');

	}

	public function listarUsuario(){

		$sql = "SELECT * FROM contratante";

		$query = mysqli_query($this->con, $sql);

	}

}

?>