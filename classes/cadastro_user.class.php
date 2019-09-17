<?php

require_once "site.class.php";

class Cadastro_user extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

		$this->novaConta();

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

		$this->receberDados();

		if(isset($_POST['btnNovaConta'])){

			$sql = "INSERT INTO necessitado.hcdigital VALUES (DEFAULT, '$nomeCompleto', NULL, '$genero', '$dt_nascimento', '$crip_senha', '$cep', '$numero', '$complemento', '$tel_celular', '$tel_residencial')";


			$query = mysqli_query($this->con, $sql);

		}

	}

}

?>