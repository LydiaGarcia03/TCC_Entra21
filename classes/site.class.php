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
			// header('location: ../error.php');
		}

	}

	public function config(){

		date_default_timezone_set('America/Sao_Paulo');
		error_reporting(0);

	}

	public function session_error(){

		session_start();

		// Verifica erro
		if( (!isset($_SESSION['user']) || $_SESSION['user'] == false) || (!isset($_SESSION['cuidador']) || $_SESSION['cuidador'] == false) ){

			return 0;

		} 

	}

	public function session_verify(){

		$this->session_error();

		if((isset($_SESSION['user']) || $_SESSION['user'] == true))

			return 'user';

		else if((isset($_SESSION['cuidador']) || $_SESSION['cuidador'] == true))

			return 'cuidador';
		else
			return 'saco';
		
	}

}

?>