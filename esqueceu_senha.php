<?php

require_once 'includes/startfile.php';

require_once 'classes/login.class.php';
$login = new Login();

// Chanmando arquivos de funções
require_once 'funcoes.php';

// Receber as informações do formulário
if(isset($_POST['btnEnviar'])){
	$email = $_POST['email'];

	$corpo = '<h1>Obrigado pelo seu contato</h1>';
	$corpo .= '<p>Sua redefinição de senha foi confirmada </p>';
	$corpo .= '<p>$mensagem</p>';

	$envio = enviar_email($email, 'lydiagarcia.chan@gmail.com', 'Lydia', 'lydiagarcia.chan@gmail.com', 'Teste', $corpo);

	if($envio == true){
		echo 'Contato enviado com sucesso';
	} else{
		echo 'Erro ao enviar contato :(';
		echo $envio;
	}
}

?>

<title>HCD | Esqueceu sua senha</title>
</head>

<body style="background-color: dodgerblue">
	<div class="container">
		<div class="col-" style="position: absolute; top: 20%; left: 34%">		
			<div class="card card-register rounded-0 shadow-lg">
				<div class="card-header py-4 text-center">
					Confirme seu endereço de login
				</div>
				<div class="card-body">
					<form method="POST" action="" name="formLogin">
						<div class="form-group">
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="email" id="email" class="form-control" 
								placeholder="Endereço de e-mail" required="required">
							</div>
						</div>
						<input  type="submit" href="dashboard_cuidador.php" name="btnEntrar" value="Confirmar" class="btn btn-primary btn-block mt-5">
					</form>
				</div>
			</div>
		</div>

		<a class="scroll-to-top rounded d-inline" href="login.php" id="btn-voltar">
			<i class="fas fa-angle-left"></i>
		</a>

	</div>

	<?php require_once 'includes/endfile.php'; ?>

<!-- 	<div class="container">
		<div class="col-lg-4 m-b-3" style="position: absolute; top: 20%; left: 34%">		
			<div class="card card-register mt-5">
				<div class="card-header">Confirme seu e-mail</div>
				<div class="card-body">
					<form>
						<div class="form-group">
						</div>
						<div class="form-group">
							<div class="form-label-group">
								<input type="email" id="email" class="form-control" 
								placeholder="Endereço de e-mail" required="required">
							</div>
						</div>
						<a class="btn btn-primary btn-block" href="">Continuar</a>
					</form>
				</div>
			</div>
		</div>  
	</div> -->