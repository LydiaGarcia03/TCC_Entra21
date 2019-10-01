<?php

require_once "site.class.php";

class Cuidador extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

		if(isset($_POST['btnNovaConta']))
			$this->novaConta();

	}
	public function novaConta(){

		$nome_completo = $_POST['nomeCompleto'];
		$c_foto = $_FILES['imagem']['tpm_name'];
		$tamanho = $_FILES['imagem']['tamanho'];
		$genero = $_POST['genero'];
		$dt_nascimento = $_POST['dt_nascimento'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$tel_celular = $_POST['tel_celular'];
		$cep = $_POST['cep'];
		$end_numero = $_POST['numeroCasa'];
		$end_complemento = $_POST['complemento'];

		$num_coren = $_POST['num_coren'];
		$val_hora = $_POST['val_hora'];
		$curso_formacao = $_POST['form_curso'];
		$instituicao = $_POST['form_instituicao'];

		// Tratamento de dados
		$crip_senha = hash('sha512', $senha);

		$dt_aux = str_replace('/', '-', $dt_nascimento);
		$dt_nascimento_sql = date("Y-m-d", strtotime($dt_aux));

		$dataAtual = date('Y-m-d');

		$sql = "INSERT INTO cuidador VALUES (DEFAULT, '$nome_completo', NULL, '$genero', '$dt_nascimento_sql', '$email', '$crip_senha', NULL, '$cep', '$end_numero', '$end_complemento', '$tel_celular', '$num_coren', $val_hora, '$curso_formacao', '$instituicao', '$dataAtual')";

		$query = mysqli_query($this->con, $sql);
		
	}

	public function listarCuidador(){

		$sql = "SELECT * FROM cuidador";

		$query = mysqli_query($this->con, $sql);

		if($query)
			return mysqli_fetch_all($query, MYSQLI_ASSOC);
		else
			return 0;

	}

}

/*
Fazer upload de fotos
*/

?>