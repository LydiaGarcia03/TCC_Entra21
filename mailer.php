<?php

	// Incluir o script phpMailer
	require_once 'phpmailer/class.phpmailer.php';

	// Definições de acesso
	define('USUARIO', 'hcdsuport@gmail.com');
	define('SENHA', '88121377');

	// Criando uma função de envio de e-mails
	function enviar_email($para, $de, $de_nome, $copia, $assunto, $corpo){		
	
		// Instanciando um objeto do PHPMailer
		$mail = new PHPMailer();

		// Atividando caracteres UTF-8
		$mail->CharSet = "UTF-8";

		// Mudando a codificação para o UTF-8 funcionar
		$mail->Enconding = 'base64';

		// Mensagem é HTML?
		$mail->IsHTML(true);

		// Ativar o SMTP
		$mail->IsSMTP();

		// Ativando a autenticação via SMTP
		$mail->SMTPAuth = true;

		// Definindo o certificado do SMTP
		$mail->SMTPSecure = 'ssl';

		// Servidor SMTP
		$mail->Host = 'smtp.gmail.com';
		// $mail->Host = 'mail.hcdigital.org';

		// Porta de envio de e-mails de servidor
		$mail->Port = 587;

		// Passando usuário para conectar
		$mail->Username = hcdigital;

		// Passando senha do usuário
		$mail->Password = 88121377;

		// Definindo o remetente
		$mail->SetFrom($de, $de_nome);

		// Definindo o assunto
		$mail->Subject = $assunto;

		// Definindo o corpo do e-mail
		$mail->Body = $corpo;

		// Definindo o destinatário
		$mail->AddAddress($para);

		// Definindo a cópia do e-mail
		// $mail->AddCC($copia);

		// Definindo a cópia oculta do e-mail
		$mail->AddBCC($copia);

		if($mail->Send()){
			return true;
		}
		else{
			return $mail->ErrorInfo;
		}

	}

?>