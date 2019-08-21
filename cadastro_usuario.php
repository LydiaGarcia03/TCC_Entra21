<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>HCD | Cadastro</title>
	<meta charset="utf-8">
	<!-- CSS -->   
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-info">
	<div class="container">
		<div class="card card-register mx-auto mt-5">
			<div class="card-header">Crie sua conta grátis</div>
			<div class="card-body">
				<form>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" id="primeiroNome" class="form-control" 
									placeholder="Primeiro nome" required="required" autofocus="autofocus">    
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" id="ultimoNome" class="form-control" 
									placeholder="Último nome" required="required">    
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-label-group">
							<input type="email" id="email" class="form-control" 
							placeholder="Endereço de e-mail" required="required">
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="password" id="Senha" class="form-control" 
									placeholder="Senha" required="required">    
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="password" id="ConfirmaSenha" class="form-control" 
									placeholder="Confirma Senha" required="required">    
								</div>
							</div>
						</div>
					</div>
					<a class="btn btn-primary btn-block" href="">Criar Conta</a>
				</form>
				<div class="text-center">
					<a class="d-block small mt-3" href="">Página de login</a>
					<a class="d-block small" href="">Esqueceu sua senha?</a>
				</div>
			</div>
		</div>
	</div>  


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>