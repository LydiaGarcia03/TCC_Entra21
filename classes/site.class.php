<?php

class Site{
	
	CONST HOST = '162.241.2.207:3306';
	CONST USER = 'recei134_yuri';
	CONST DB = 'recei134_hcd_master';
	CONST PASS = '1234qwer';

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

	public function session_type(){

		if($_SESSION['tipo_usuario'] == 'contratante')
			return 'contratante';
		elseif ($_SESSION['tipo_usuario'] == 'cuidador') 
			return 'cuidador';

	}

}

?>