<?php

require_once "site.class.php";

class Usuario extends Site{

	public function __construct(){

		parent::__construct();

		session_start();
		
		if(isset($_POST['btnNovaConta']))
			$this->novaConta();
	
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

	public function procuraUsuario(){

		$id_user = $_SESSION['id_usuario'];

		$sql = "SELECT * FROM contratante WHERE id = $id_user";
		$query = mysqli_query($this->con, $sql);
		$result = mysqli_fetch_array($query);

		return $result;

	}

	public function editarUsuario(){

		// Recebendo dados
		$nome_completo = $_POST['nomeCompleto'];
		$genero = $_POST['genero'];
		$dt_nascimento = $_POST['dt_nascimento'];
		$cep = $_POST['cep'];
		$numeroCasa = $_POST['numeroCasa'];
		$complemento = $_POST['complemento'];
		$tel_celular = $_POST['tel_celular'];
		$tel_residencial = $_POST['tel_residencial'];

		$dt_aux = str_replace('/', '-', $dt_nascimento);
		$dt_nascimento_sql = date("Y-m-d", strtotime($dt_aux));

		$id_user = $_SESSION['id_usuario'];

		$sql = "UPDATE contratante 
			SET nome_completo = '$nome_completo', 
				genero = '$genero', 
				dt_nascimento = '$dt_nascimento_sql',
				cep = '$cep',
				end_numero = '$numeroCasa',
				end_complemento = '$complemento',
				tel_cel = '$tel_celular',
				tel_res = '$tel_residencial'
			WHERE id = $id_user";

		$query = mysqli_query($this->con, $sql);

	}

}

?>