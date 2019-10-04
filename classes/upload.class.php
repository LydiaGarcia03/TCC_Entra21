<?php
	
require_once 'site.class.php';

class Upload extends Site{

	public function __construct(){

		session_start();

		if(isset($_POST['btnNovaConta']) || isset($_POST['btnEditarPerfil']))
			$this->upload();

	}


	public function upload($arquivo){

		$pasta = '../uploads/';

		$confirm = 1;

		$tipoImagem = ptahinfo($arquivo, PATHINFO_EXTENSION);

		if(move_uploaded_file($_FILES['foto']['tmp_name'], $arquivo)){
			echo 'O arquivo ' . basename($_FILES['foto']['name']) . ' foi baixado';
		}
		else{
			echo 'Erro ao subir a imagem';
		}

	    $imagem = basename($_FILES['foto']['name'], '.jpg');

	    if($_SESSION['tipo_user'] == 'contratante'){
	    	$query = "INSERT INTO contratante(foto) VALUES ('$imagem')";
	    }
	    elseif($_SESSION['tipo_user'] == 'cuidador'){
	    	$query = "INSERT INTO cuidador(foto) VALUES ('$imagem')";
	    }

	    mysqli_query($query);

	}


}


?>