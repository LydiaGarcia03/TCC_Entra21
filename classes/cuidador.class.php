<?php

require_once 'site.class.php';
require_once 'upload.class.php';
$upload = new Upload();

class Cuidador extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

		if(isset($_POST['btnNovaConta']))
			$this->novaConta();

	}
	public function novaConta(){

		$nome_completo = $_POST['nomeCompleto'];
		$imagem = $_FILES['foto'];
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

		$upload->upload();

		header('Location: ../login.php');
		
	}

	public function listarCuidador(){

		$sql = "SELECT * FROM cuidador";

		$query = mysqli_query($this->con, $sql);

		if($query)
			return mysqli_fetch_all($query, MYSQLI_ASSOC);
		else
			return 0;

	}

	public function procuraCuidador(){

		$id_user = $_SESSION['id_usuario'];

		$sql = "SELECT * FROM cuidador WHERE id = $id_user";
		$query = mysqli_query($this->con, $sql);
		$result = mysqli_fetch_array($query);

		return $result;

	}

}

/*
Fazer upload de fotos
*/

?>