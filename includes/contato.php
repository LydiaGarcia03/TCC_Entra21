<?php

	// Chamando o arquivo de funções
	require_once "funcoes.php";

	// Receber as informações do formulário
	if (isset($_POST['enviar'])) {

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$mensagem = $_POST['mensagem'];

		$corpo = "<h1>Obrigado pelo seu contato $nome</h1>";
		$corpo .= "<p>Assim que possivel retornaremos seu contato. Mensagem enviada: </p>";
		$corpo .= "<p>$mensagem</p>";

		$envio = enviar_email($email, 'padariadojukalokinho@gmail.com', 'Padaria do Juca', 'padariadojukalokinho@gmail.com', 'Contato no site - Padaria do Juca', $corpo);

		if ($envio == true) {
			echo "Contato enviado com sucesso!";
		} else {
			echo "Erro ao enviar contato =( <br>";
			echo $envio;
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Contato</title>
</head>
<body>

	<form method="post" action="">
			
		<label for="nome">Nome:</label><br>
		<input type="text" name="nome" id="nome">

		<br>

		<label for="email">E-mail:</label><br>
		<input type="email" name="email" id="email">
		
		<br>

		<label for="mensagem">Mensagem:</label><br>
		<textarea name="mensagem" id="mensagem"></textarea>
		
		<br>

		<input type="submit" name="enviar" value="Enviar Contato">

	</form>

</body>
</html>