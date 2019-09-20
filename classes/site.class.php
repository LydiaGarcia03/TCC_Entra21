<?php

class Site{
	
	CONST HOST = '127.0.0.1';
	CONST USER = 'root';
	CONST DB = 'hcdigital';
	CONST PASS = '';

	public $con;

	public function __construct(){

		$this->conexao();
		$this->config();

	}

	public function conexao(){

		$this->con = mysqli_connect(self::HOST, self::USER, self::PASS, self::DB);
		// Verifica erro
		if(!$this->con){
			die('erro na conexao');
			header('location: error.php');
		} else{
			echo 'conexao ok';
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

}


?>