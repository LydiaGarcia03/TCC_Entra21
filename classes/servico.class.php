<?php

require_once 'site.class.php';

class Servico extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

		if(isset($_POST['btnSolicitarServico']))
			$this->novoServico();

	}

	public function novoServico(){

		$nome_paciente = $_POST['nomePaciente'];
		$dt_nascimento = $_POST['dt_nascimento'];
		$genero = $_POST['genero'];
		$tipo_servico = $_POST['servico'];
		$doenca = $_POST['doenca'];
		$doenca_descricao = $_POST['desc_doenca'];
		$deficiencia_fisica = $_POST['deficFisica'];
		$deficiencia_fisica_descricao = $_POST['desc_deficFisica'];
		$deficiencia_mental = $_POST['deficMental'];
		$deficiencia_mental_descricao = $_POST['desc_deficMental'];
		$descricao = $_POST['descricao'];
		$email_responsavel = $_POST['email'];
		$carga_horaria_diaria = $_POST['carga_horaria'];
		$estado = 'em espera';
		$dias_servico_string = $_POST['diasServico'];

		// Tratamento dos dados
		$dt_aux = str_replace('/', '-', $dt_nascimento);
		$dt_nascimento_sql = date("Y-m-d", strtotime($dt_aux));

		if($doenca == 'false')
			$doenca_descricao = 'NULL';
		if($deficiencia_fisica == 'false')
			$deficiencia_fisica_descricao = 'NULL';
		if($deficiencia_mental == 'false')
			$deficiencia_mental_descricao = 'NULL';

		$qtd_funcionarios_necessarios = 1;

		// Separando a string no array
		$dias_servico = explode(',', $dias_servico_string);

		// Não é permitido carga horária superior a 12h diárias
		if($carga_horaria_diaria > 12)
			die('mais de 12h'); 

		// Como os cuidadores são alternados (dia s/ dia n/), o máximo que se pode ter são 2
		if(count($dias_servico) >= 2)
			$qtd_funcionarios_necessarios = 2;

		$sqlAcharFK = "SELECT id FROM contratante WHERE email = '$email_responsavel'";
		$queryIdResponsavel = mysqli_query($this->con, $sqlAcharFK);
		$resultIdResponsavel = mysqli_fetch_array($queryIdResponsavel);

		$idResponsavel = $resultIdResponsavel['id'];

		$sql = "INSERT INTO servico VALUES (DEFAULT, '$nome_paciente', '$dt_nascimento_sql', '$genero', '$tipo_servico', '$doenca', $doenca_descricao, '$deficiencia_fisica', $deficiencia_fisica_descricao, '$deficiencia_mental', $deficiencia_mental_descricao, '$descricao', $idResponsavel, '$carga_horaria_diaria', '$dias_servico_string', '$estado')";

		$query = mysqli_query($this->con, $sql);
		
		// header('Location: dashboard_contratante.php');

	}

	public function listarServico(){

		$sql = "SELECT * FROM servico";
		$query = mysqli_query($this->con, $sql);

	}

}


?>