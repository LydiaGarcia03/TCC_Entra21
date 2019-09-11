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
		$diabetico = $_POST[''];
		$deficiencia_fisica = $_POST[''];
		$deficiencia_mental = $_POST[''];
		$hipertensao = $_POST[''];
		$descricao = $_POST[''];
		$email_responsavel = $_POST[''];
		$cod_banco = $_POST[''];
		$num_agencia = $_POST[''];
		$tipo_conta = $_POST[''];
		$num_conta = $_POST[''];
		$dig_conta = $_POST[''];
		$num_cartao = $_POST[''];
		$nome_usuario_cartao = $_POST[''];

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

			$sqlAcharFK = "SELECT id FROM necessitado.hcdigital WHERE email = $email_responsavel";
			$queryIdResponsavel = mysqli_query($con, $sqlAcharFK);
			$resultIdResponsavel = mysqli_fetch_array($queryIdResponsavel);

			$sql = "INSERT INTO servico.hcdigital VALUES (DEFAULT, '$nome_paciente', '$dt_nascimento', '$genero', '$tipo_servico', '$diabetico', '$deficiencia_fisica', '$deficiencia_mental', '$hipertensao', '$descricao', '$resultIdResponsavel', '$cod_banco_crip', '$num_agencia_crip', '$tipo_conta_crip', '$num_conta_crip', '$dig_conta_crip', '$num_cartao_crip', '$nome_usuario_cartao_crip')";
			$query = mysqli_query($con, $sql);
			$result = mysqli_fetch_array($query);


			header('Location: dashboard_usuario.php');

		}

	}

}

?>