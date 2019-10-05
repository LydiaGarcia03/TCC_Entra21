<?php

class Logout{

	public function __construct(){

		session_start();

		if(isset($_SESSION) || ($_SESSION['tipo_usuario'] != NULL)){
			$_SESSION['tipo_usuario'] = NULL;
			session_destroy();
		}

	}

}

?>