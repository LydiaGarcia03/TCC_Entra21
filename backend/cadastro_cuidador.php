<?php
// Inclusão da conexão com o banco de dados
require_once "../include/conexao.php";

// Iniciar sessão
session_start();

class Cadastro extends site {
	// Receber os dados
	$id ;
	$nome = $_POST['nomeCompleto'];
	$foto = $_POST['c_foto'];
	$genero ;
	$data_nascimento = $_POST['date'];
	$email = $_POST['email'];
	$confirmar_email;
	$senha = $_POST['senha'];
	$confirmar_senha;
	$cep = $_POST['cep'];
	$rua;
	$numero_residencial = $_POST['numeroRes'];
	$complemento = $_POST['complemento'];
	$cidade;
	$bairro;
	$estado;
	$telefone_fixo = $_POST['numeroFixo'];
	$telefone_celular = $_POST['numeroCelular'];

}
 
?>


