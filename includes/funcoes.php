<?php

	// Incluir o script do PHPMailer
	require_once "phpmailer/class.phpmailer.php";

	// Definições de acesso
	define('USUARIO', 'padariadojukalokinho@gmail.com');
	define('SENHA', 'olokinho@@@');

	// Criando uma função de envio de e-mails
	function enviar_email($para, $de, $de_nome, $copia, $assunto, $corpo) {

		// Instanciando um objeto do Mailer
		$mail = new PHPMailer();

		// Ativando caracteres UTF-8
		$mail->CharSet = "UTF-8";
		// Mudando a codificação para o UTF-8 funcionar
		$mail->Encoding = "base64";
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
		// $mail->Host = 'mail.faqhospital.tk';	
		// Porta de envio de e-mails do servidor
		$mail->Port = 465;
		// Passando usuário para conectar
		$mail->Username = USUARIO;
		// Passando senha do usuário
		$mail->Password = SENHA;

		// Definindo o remetente
		$mail->SetFrom($de, $de_nome);
		// Definindo o assunto
		$mail->Subject = $assunto;
		// Definindo o corpo do e-mail
		$mail->Body = $corpo;
		// Definindo o destinário
		$mail->AddAddress($para);
		// Definindo a cópia do e-mail
		// $mail->AddCC($copia);
		// Definindo a cópia oculta
		$mail->AddBCC($copia);

		if ($mail->Send()) {
			return true;
		} else {
			return $mail->ErrorInfo;
		}
		
	}

?>