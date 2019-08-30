<?php 

	$nome=$_POST['nome'];
	$foto=$_POST['foto'];
	$genero=$_POST['genero'];
	$dt_nascimento=$_POST['dt_nascimento'];
	$email=$_POST['email'];
	$confirma_email=$_POST['confirma_email'];
	$senha=$_POST['seha'];
	$confirma_senha=$_POST['confirma_senha'];
	$cep=$_POST['cep'];
	$rua=$_POST['rua'];
	$numero=$_POST['numero'];
	$complemento=$_POST['complemento'];
	$bairro=$_POST['bairro'];
	$cidade=$_POST['cidade'];
	$estado=$_POST['estado'];
	$numero_fixo=$_POST['numero_fixo'];
	$numero_celular=$_POST['numero_fixo'];

	$sql = mysqli_query("INSERT INTO necessitados(id, nome_completo, foto, genero, dt_nascimento, email, senha, cep, end_numero, end_complemento, tel_cel, tel_res)
	VALUES($nome, $email, $senha, $foto, $ddd)");
?>