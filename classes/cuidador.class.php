<?php

require_once 'site.class.php';
require_once 'upload.class.php';

class Cuidador extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

        if(isset($_POST['btnNovaConta']))
            $this->novaConta();

        if(isset($_POST['btnEditarPerfil']))
            $this->editarCuidador();

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
		$end_numero = $_POST['numero_casa'];
		$end_complemento = $_POST['complemento'];

		$num_coren = $_POST['num_coren'];
		$val_hora = $_POST['val_hora'];
		$curso_formacao = $_POST['form_curso'];
		$instituicao = $_POST['form_instituicao'];

		// Tratamento de dados
		$crip_senha = hash('sha512', $senha);

		$dt_aux = str_replace('/', '-', $dt_nascimento);
		$dt_nascimento_sql = date("Y-m-d", strtotime($dt_aux));

        $upload = new Upload('foto');
        $nome = $upload->upload();
        $nome = $nome[0]['dados']['nome_novo'];

		$sql = "INSERT INTO cuidador VALUES (DEFAULT, '$nome_completo', '$nome', '$genero', '$dt_nascimento_sql', '$email', '$crip_senha', NULL, '$cep', '$end_numero', '$end_complemento', '$tel_celular', '$num_coren', $val_hora, '$curso_formacao', '$instituicao', now())";
		$query = mysqli_query($this->con, $sql);

		header('Location: login.php');
		
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

    public function editarCuidador(){
        // Recebendo dados
        $nome_completo = $_POST['nomeCompleto'];
        $genero = $_POST['genero'];
        $dt_nascimento = $_POST['dt_nascimento'];
        $cep = $_POST['cep'];
        $numeroCasa = $_POST['numero_casa'];
        $complemento = $_POST['complemento'];
        $tel_celular = $_POST['tel_celular'];
        $num_coren = $_POST['num_coren'];
        $val_hora = $_POST['val_hora'];
        $curso_formacao = $_POST['curso_formacao'];
        $instituicao = $_POST['instituicao'];

        $dt_aux = str_replace('/', '-', $dt_nascimento);
        $dt_nascimento_sql = date("Y-m-d", strtotime($dt_aux));

        $id_user = $_SESSION['id_usuario'];

        // Upload foto
        $upload = new Upload('foto');
        $upload = $upload->upload();
        $nome_foto = $upload[0]['dados']['nome_novo'];

        if ($upload !== false) {
            $sql_juncao = ", foto = '$nome_foto'";
            $_SESSION['foto_usuario'] = $nome_foto;
        }

        $sql = "UPDATE cuidador 
                SET nome_completo = '$nome_completo', 
                    genero = '$genero',
                    dt_nascimento = '$dt_nascimento_sql',
                    cep = '$cep',
                    end_numero = '$numeroCasa',
                    end_complemento = '$complemento',
                    tel_cel = '$tel_celular',
                    tel_cel = '$tel_celular',
                    num_coren = '$num_coren',
                    valor_hora = '$val_hora',
                    curso_formacao = '$curso_formacao',
                    instituicao = '$instituicao',
                    dt_ingresso = now() ";

        if (isset($sql_juncao))
            $sql .= $sql_juncao;

        $sql .= " WHERE id = $id_user";

        $query = mysqli_query($this->con, $sql);

    }

}

?>