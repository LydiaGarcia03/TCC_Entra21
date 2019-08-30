<?php 

	CONST HOST = "localhost";
	CONST USER = "root";
	CONST PASS = "";
	CONST DB = "hcdigital";

	$con = mysqli_connect(HOST, USER, PASS, DB);

	if (!$con) {
		die("ERRO: Não foi possível conectar ao banco dados ---> " . 
			mysqli_connect_error());
	}

?>
