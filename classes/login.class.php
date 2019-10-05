<?php

require_once 'site.class.php';

class Login extends Site{

	public function __construct(){

		parent::__construct();

		session_start();

		$this->autenticacao();

	}

	public function autenticacao(){

		if(!isset($_SESSION['tipo_usuario']) || is_null($_SESSION['tipo_usuario'])){

			if(isset($_POST['btnEntrar'])){

				$email = $_POST['email'];
				$crip_senha = hash('sha512', $_POST['senha']);

				$tipoUser = $_POST['btnTipoUsuario'];

				if($tipoUser == 'contratante'){

					$user = 'contratante';
					$sql = "SELECT * FROM contratante WHERE email = '$email' AND senha = '$crip_senha'";

                }
				else if($tipoUser == 'cuidador'){

					$user = 'cuidador';
					$sql = "SELECT * FROM cuidador WHERE email = '$email' AND senha = '$crip_senha'";
				}

				$query = mysqli_query($this->con, $sql);
				$result = mysqli_fetch_array($query, MYSQLI_ASSOC);


				if($result !== null){

					// Criando sessões
					if($user == 'contratante'){

                        $_SESSION['tipo_usuario'] = 'contratante';

                        // De acordo com a session do nome e da foto, modificar a sidebar
                        
                        // $_SESSION['foto_usuario'] = $result['foto'];
                        $_SESSION['nome_usuario'] = $result['nome_completo'];
                        $_SESSION['id_usuario'] = $result['id'];
                        $_SESSION['foto_usuario'] = $result['foto'];

						header('Location: dashboard_contratante.php');

					} else if($user == 'cuidador'){

						$_SESSION['tipo_usuario'] = 'cuidador';
                        $_SESSION['foto_usuario'] = $result['foto'];
                        $_SESSION['nome_usuario'] = $result['nome_completo'];
                        $_SESSION['id_usuario'] = $result['id'];

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