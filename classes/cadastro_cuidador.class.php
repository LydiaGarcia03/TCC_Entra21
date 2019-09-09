<?php

require_once "site.class.php";

class Cadastro_cuidador extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

	}

	public function receberDados(){

		// Primeira etapa
		$nome_completo = $_POST['nome_completo'];
		$genero = $_POST['genero'];
		$dt_nascimento = $_POST['dt_nascimento'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$tel_celular = $_POST['tel_celular'];
		$cep = $_POST['cep'];
		$end_numero = $_POST['end_numero'];
		$end_complemento = $_POST['end_complemento'];

		$num_coren = $_POST['num_coren'];
		$curso_formacao = $_POST['form_curso'];
		$instituicao = $_POST['form_instituicao'];

		$cod_banco = $_POST['cod_banco'];
		$num_agencia = $_POST['num_agencia'];
		$dig_agencia = $_POST['dig_agencia'];
		$tipo_conta = $_POST['tipo_conta'];
		$num_conta = $_POST['num_conta'];
		$dig_conta = $_POST['dig_conta'];
		$num_cartao = $_POST['num_cartao']; 
		$nome_user_cartao = $_POST['nome_user_cartao'];

		// Criptografia
		$crip_senha = hash('sha512', $senha);
		$crip_cod_banco = hash('sha512', $cod_banco);
		$crip_num_agencia = hash('sha512', $num_agencia);
		$crip_dig_agencia = hash('sha512', $dig_agencia);
		$crip_tipo_conta = hash('sha512', $tipo_conta);
		$crip_num_conta = hash('sha512', $num_conta);
		$crip_dig_conta = hash('sha512', $dig_conta);
		$crip_num_cartao = hash('sha512', $num_cartao);
		$crip_nome_user_cartao = hash('sha512', $nome_user_cartao);

	}

	public function novaConta(){

		$this->receberDados();

		if(isset($_POST['btnNovaConta'])){

			

		}

	}

}

?>