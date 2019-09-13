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

				if(parent::session_verify() == 'user'){

					$user = 'user';
					$sql = "SELECT * FROM necessitado.hcdigital WHERE email = '$email' AND senha = '$crip_senha'";

				}
				else if(parent::session_verify() == 'cuidador'){

					$user = 'cuidador';
					$sql = "SELECT * FROM profissional.hcdigital WHERE email = '$email' AND senha = '$crip_senha'";

				}

				$query = mysqli_query($con, $sql);
				$result = mysqli_fetch_array($query);

				if($result != NULL){

					// Criando sessões
					if($user == 'user'){

						$_SESSION['user'] = true;
						header('Location: ../dashboard_usuario.php');

					} else if($user == 'cuidador'){

						$_SESSION['cuidador'] = true;
						header('Location: ../dashboard_cuidador.php');

					}

				} else{

					// header('Location: error.php');

				}

			}
		}

	}

}

$login = new Login();

var_dump($login->autenticacao());

die();



?>