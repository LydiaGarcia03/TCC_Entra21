<?php

class Site{
	
	CONST HOST = 'homecaredigital.org:3306';
	CONST USER = 'homecare_master';
	CONST DB = 'homecare_master';
	CONST PASS = 'senha_loka2019@';

	public $con;

	public function __construct(){

		$this->connection();
		$this->config();

	}

	public function connection(){

		$this->con = mysqli_connect(self::HOST, self::USER, self::PASS, self::DB);
		// Verifica erro
		if(!$this->con){
		    mysqli_connect_error();
			die('erro na conexao');
			header('location: error.php');
		}
	}

	public function config(){

		date_default_timezone_set('America/Sao_Paulo');
		error_reporting(0);

	}

	public function session_error(){

		session_start();

		// Verifica erro
		if(!isset($_SESSION['tipo_usuario']) || is_null($_SESSION['tipo_usuario'])){
			return 0;
		} else {
			return 1;
		}

	}

	public function session_type(){

		if($_SESSION['tipo_usuario'] == 'contratante')
			return 'contratante';
		elseif ($_SESSION['tipo_usuario'] == 'cuidador') 
			return 'cuidador';

	}

}

?>