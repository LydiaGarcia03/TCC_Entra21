<?php

require_once 'site.class.php';

class Servico extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

	}

	public function receber_dados(){

		$nome_paciente = $_POST['nomePaciente'];
		$dt_nascimento = $_POST['dt_nascimento'];
		$genero = $_POST['genero'];
		$tipo_servico = $_POST['servico'];
		$doenca = $_POST['doenca'];
		$deficiencia_fisica = $_POST['deficFisica'];
		$deficiencia_mental = $_POST['deficMental'];
		$descricao = $_POST['descricao'];
		$email_responsavel = $_POST['email'];
		$carga_horaria_diaria = $_POST['carga_horaria'];
		$estado = 'em espera';
		$dias_servico_string = $_POST['diasServico'];

		$qtd_funcionarios_necessarios = 1;

		// Separando a string no array
		$dias_servico = explode(',', $dias_servico_string);

		// Não é permitido carga horária superior a 12h diárias
		if($carga_horaria_diaria > 12)
			die('mais de 12h'); 

		// Como os cuidadores são alternados (dia s/ dia n/), o máximo que se pode ter são 2
		if(count($dias_servico) >= 2)
			$qtd_funcionarios_necessarios = 2;

	}

	public function novoServico(){

		$this->receber_dados();

		if(isset($_POST['btnSolicitarServico'])){

			$sqlAcharFK = "SELECT id FROM contratante WHERE email = $email_responsavel";
			$queryIdResponsavel = mysqli_query($this->con, $sqlAcharFK);
			$resultIdResponsavel = mysqli_fetch_array($queryIdResponsavel);

			$sql = "INSERT INTO servico VALUES (DEFAULT, '$nome_paciente', '$dt_nascimento', '$genero', '$tipo_servico', '$diabetico', '$deficiencia_fisica', '$deficiencia_mental', '$hipertensao', '$descricao', '$resultIdResponsavel', '$carga_horaria_diaria', '$dias_servico_string', '$estado')";
			$query = mysqli_query($this->con, $sql);
			$result = mysqli_fetch_array($query);

			header('Location: dashboard_usuario.php');

		}

	}

	public function listarServico(){

		$sql = "SELECT * FROM servico";
		$query = mysqli_query($this->con, $sql);

	}

}


?>