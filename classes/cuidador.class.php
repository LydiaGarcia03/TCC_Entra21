<?php

require_once "site.class.php";

class Cuidador extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

		if(isset($_POST['btnNovaConta']))
			$this->novaConta();

	}

	public function receberDados(){

		// Primeira etapa
		$nome_completo = $_POST['nome_completo'];
		// Upload de foto
		$genero = $_POST['genero'];
		$dt_nascimento = $_POST['dt_nascimento'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$tel_celular = $_POST['tel_celular'];
		$cep = $_POST['cep'];
		$end_numero = $_POST['end_numero'];
		$end_complemento = $_POST['end_complemento'];

		$num_coren = $_POST['num_coren'];
		$val_hora = $_POST['val_hora'];
		$curso_formacao = $_POST['form_curso'];
		$instituicao = $_POST['form_instituicao'];

		// Criptografia
		$crip_senha = hash('sha512', $senha);

	}

	public function novaConta(){

		$this->receberDados();

		$sql = "INSERT INTO profissional VALUES (DEFAULT, '$nome_completo', NULL, '$genero', '$dt_nascimento', '$email', '$crip_senha', '$cep', '$end_numero', '$end_complemento', '$tel_celular', '$num_coren', '$val_hora', '$curso_formacao', '$instituicao', CURDATE())";

		$query = mysqli_query($this->con, $sql);

	}

	public function listarCuidador(){

		$sql = "SELECT * FROM profissional";

		$query = mysqli_query($this->con, $sql);

		if($query)
			return mysqli_fetch_all($query, MYSQLI_ASSOC);
		else
			return 0;

	}

}

?>