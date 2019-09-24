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
		$carga_horaria_diaria = $_POST['']
		$estado = 'em espera';
		$dias_servico = $_POST['diasServico'];

		if($carga_horaria_diaria > 12)
			die();

		// Separando a string no array
		$dias_servico = explode(',', $dias_servico);

		if(count($dias_servico) > 2){
			$qtd_funcionarios_necessarios++;
		}

	}

	public function novoServico(){

		$this->receber_dados();

		if(isset($_POST['btnSolicitarServico'])){

			$sqlAcharFK = "SELECT id FROM necessitado WHERE email = $email_responsavel";
			$queryIdResponsavel = mysqli_query($this->con, $sqlAcharFK);
			$resultIdResponsavel = mysqli_fetch_array($queryIdResponsavel);

			$sql = "INSERT INTO servico VALUES (DEFAULT, '$nome_paciente', '$dt_nascimento', '$genero', '$tipo_servico', '$diabetico', '$deficiencia_fisica', '$deficiencia_mental', '$hipertensao', '$descricao', '$resultIdResponsavel', '$qtd_funcionarios_necessarios', NULL, '$cod_banco_crip', '$num_agencia_crip', '$tipo_conta_crip', '$num_conta_crip', '$dig_conta_crip', '$num_cartao_crip', '$nome_usuario_cartao_crip')";
			$query = mysqli_query($this->con, $sql);
			$result = mysqli_fetch_array($query);

			header('Location: dashboard_usuario.php');

		}

	}

}

?>