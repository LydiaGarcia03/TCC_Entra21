<?php

require_once "site.class.php";

class Cadastro_user extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

	}

	public function receberDados(){

		$nome_completo = $POST['nomeCompleto'];
		// Upload de imagens 
		$genero = $POST['genero'];
		$dt_nascimento = $POST['date'];
		$email = $POST['email'];
		$senha = $POST['senha'];
		$cep = $POST['cep'];
		$numero = $POST['numeroCasa'];
		$complemento = $POST['complemento'];
		$tel_celular = $POST['telefone_celular'];
		$tel_residencial = $POST['telefone_residencial'];

		// Criptografia de senha
		$senha_crip = hash('sha512', $senha);
		
	}

	public function novaConta(){

		$this->receberDados();

		if(isset($_POST['btnNovaConta'])){

			$sql = "INSERT INTO necessitado.hcdigital VALUES (DEFAULT, '$nomeCompleto', NULL, '$genero', '$dt_nascimento', '$senha_crip', '$cep', '$numero', '$complemento', '$tel_celular', '$tel_residencial')";


			$query = mysqli_query($this->con, $sql);

		}

	}

}

?>