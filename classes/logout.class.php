<?php

class Logout{

	public function __construct(){

		session_destroy();

	}

}

?>