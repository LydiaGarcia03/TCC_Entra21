<?php

require_once 'site.class.php';

class Login extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

		$this->autenticacao();

	}

	public function autenticacao(){

		if(!parent::session_error()){
			
			if(isset($_POST['btnEntrar'])){

				$email = $_POST['email'];
				$crip_senha = hash('sha512', $_POST['senha']);

				$tipoUser = $_POST['btnTipoUsuario'];

				if($tipoUser == 'contratante'){

					$user = 'contratante';
					$sql = "SELECT * FROM necessitado WHERE email = '$email' AND senha = '$crip_senha'";

				}
				else if($tipoUser == 'cuidador'){

					$user = 'cuidador';
					$sql = "SELECT * FROM profissional WHERE email = '$email' AND senha = '$crip_senha'";
				}

				$query = mysqli_query($this->con, $sql);
				$result = mysqli_fetch_array($query);

				if($result != NULL){

					// Criando sessões
					if($user == 'contratante'){

						$_SESSION['tipo_usuario'] = 'contratante';
						header('Location: dashboard_contratante.php');

					} else if($user == 'cuidador'){

						$_SESSION['tipo_usuario'] = 'cuidador';
						header('Location: dashboard_cuidador.php');

					}

				} else{

					header('Location: error.php');

				}

			}
		}

	}

}

?>