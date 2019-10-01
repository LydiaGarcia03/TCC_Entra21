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

	public function novaConta(){

		// Recebendo dados
		$nome_completo = $_POST['nomeCompleto'];
		$genero = $_POST['genero'];
		$dt_nascimento = $_POST['dt_nascimento'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$cep = $_POST['cep'];
		$numeroCasa = $_POST['numeroCasa'];
		$complemento = $_POST['complemento'];
		$tel_celular = $_POST['tel_celular'];
		$tel_residencial = $_POST['tel_residencial'];

		// Tratamento de dados
		$crip_senha = hash('sha512', $senha);

		$dt_aux = str_replace('/', '-', $dt_nascimento);
		$dt_nascimento_sql = date("Y-m-d", strtotime($dt_aux));


		$sql = "INSERT INTO contratante VALUES (DEFAULT, '$nome_completo', NULL, '$genero', '$dt_nascimento_sql', '$email', '$crip_senha', NULL, '$cep', '$numeroCasa', '$complemento', '$tel_celular', '$tel_residencial')";
		
		$query = mysqli_query($this->con, $sql);

	}

	public function listarUsuario(){

		$sql = "SELECT * FROM contratante";

		$query = mysqli_query($this->con, $sql);

	}

	public function editarUsuario(){

		// Recebendo dados
		$nome_completo = $_POST['nomeCompleto'];
		$genero = $_POST['genero'];
		$dt_nascimento = $_POST['dt_nascimento'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$cep = $_POST['cep'];
		$numeroCasa = $_POST['numeroCasa'];
		$complemento = $_POST['complemento'];
		$tel_celular = $_POST['tel_celular'];
		$tel_residencial = $_POST['tel_residencial'];

		$dt_aux = str_replace('/', '-', $dt_nascimento);
		$dt_nascimento_sql = date("Y-m-d", strtotime($dt_aux));

		$sql = "UPDATE contratante 
			SET nome_completo = '$nome_completo', 
				genero = '$genero', 
				dt_nascimento = '$dt_nascimento_sql'
			WHERE ";

		$query = mysqli_query($this->con, $sql);

	}

}

?>