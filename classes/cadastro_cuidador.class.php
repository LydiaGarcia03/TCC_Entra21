<?php

require_once "site.class.php";

class Cadastro_cuidador extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

	}

	public function receberDados(){

		$nome_completo = $_POST['nome_completo'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$tel_celular = $_POST['tel_celular'];
		$num_coren = $_POST['num_coren'];
		
	}

	public function novaConta(){

		$this->receberDados();

		if(isset($_POST['btnNovaConta'])){

		

		}

	}

}

?>