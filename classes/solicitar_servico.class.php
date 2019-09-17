<?php

require_once 'site.class.php';

class Solicitar_Servico extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

	}

	public function receber_dados(){

		$nome_paciente = $_POST['nomePaciente'];
		$dt_nascimento = $_POST['dt_nascimento'];
		$genero = $_POST['genero'];
		$tipo_servico = $_POST['servico'];
		$diabetico = $_POST['diabetico'];
		$deficiencia_fisica = $_POST['deficFisica'];
		$deficiencia_mental = $_POST['deficMental'];
		$hipertensao = $_POST['hipertenso'];
		$descricao = $_POST['descricao'];
		$email_responsavel = $_POST['email'];
		$qtd_funcionarios_necessarios = $_POST['qtd_cuidadores'];
		// $qtd_funcionarios_contratados = $_POST[''];
		$cod_banco = $_POST['cod_banco'];
		$num_agencia = $_POST['num_agencia'];
		$tipo_conta = $_POST['tipo_conta'];
		$num_conta = $_POST['num_conta'];
		$dig_conta = $_POST['dig_conta'];
		$num_cartao = $_POST['num]'];
		$nome_usuario_cartao = $_POST['nome_usuario_cartao'];

		// Criptografia
		$cod_banco_crip = hash('sha512', $cod_banco);
		$num_agencia_crip = hash('sha512', $num_agencia);
		$tipo_conta_crip = hash('sha512', $tipo_conta);
		$num_conta_crip = hash('sha512', $num_conta);
		$dig_conta_crip = hash('sha512', $dig_conta);
		$num_cartao_crip = hash('sha512', $num_cartao);
		$nome_usuario_cartao_crip = hash('sha512', $nome_usuario_cartao);

	}

	public function novoServico(){

		$this->receber_dados();

		if(isset($_POST['btnSolicitarServico'])){

			$sqlAcharFK = "SELECT id FROM necessitado WHERE email = $email_responsavel";
			$queryIdResponsavel = mysqli_query($con, $sqlAcharFK);
			$resultIdResponsavel = mysqli_fetch_array($queryIdResponsavel);

			$sql = "INSERT INTO servico VALUES (DEFAULT, '$nome_paciente', '$dt_nascimento', '$genero', '$tipo_servico', '$diabetico', '$deficiencia_fisica', '$deficiencia_mental', '$hipertensao', '$descricao', '$resultIdResponsavel', '$qtd_funcionarios_necessarios', NULL, '$cod_banco_crip', '$num_agencia_crip', '$tipo_conta_crip', '$num_conta_crip', '$dig_conta_crip', '$num_cartao_crip', '$nome_usuario_cartao_crip')";
			$query = mysqli_query($con, $sql);
			$result = mysqli_fetch_array($query);


			header('Location: dashboard_usuario.php');

		}

	}

}

?>