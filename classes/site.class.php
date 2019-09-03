<?php

class Site{
	
	CONST HOST = 'localhost';
	CONST DB = 'hcdigital';
	CONST USER = 'root';
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
			header('location: error.php');
		}

	}

	public function config(){

		date_default_timezone_set('America/Sao_Paulo');
		error_reporting(0);

	}

	public function session(){

		session_start();

		// Verifica erro
		if( (!isset($_SESSION['user']) || $_SESSION['user'] == true) || (!isset($_SESSION['cuidador']) || $_SESSION['cuidador'] == true) ){

			header('location: error.php');

		} 

	}



}

?>