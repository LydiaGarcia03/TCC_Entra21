<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>HCD | Cadastro</title>
	<meta charset="utf-8">
	<!-- CSS -->    
	<link href="style/style.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-info">
	<div class="container">
		<div class="card card-register mx-auto mt-5">
			<div class="card-header">Crie sua conta grátis</div>
			<div class="card-body">
				<form>
					<form id="formExemplo" data-toggle="validator" role="form">
					<div class="form-group ">
						<div class="form-row">
							<div class="col-md-12">
								<div class="form-label-group">
									<input type="text" id="NomeComp" class="form-control" 
									placeholder="Nome completo" required="required" autofocus="autofocus">
									<div class="help-block with-errors"></div>    
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">
							<input type="inputEmail" id="email" class="form-control" 
							placeholder="Endereço de e-mail" required="required"  data-error="Por favor, informe um e-mail correto." >
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="password" id="Senha" class="form-control" 
									placeholder="Digite a senha minimo 8 digitos" required="required"data-minlength="8" required>
									<div class="help-block with-errors"></div>    
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="password" id="ConfirmaSenha" class="form-control" 
									placeholder="Confirma Senha" required="required">    <div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6 mt-3">
								<div class="form-label-group">
									<input type="" id="cell" class="form-control" 
									placeholder="Numero de Telefone" required="required" pattern="[0-9]+$" > 
									<div class="help-block with-errors"></div>   
								</div>
							</div>
							<div class="col-md-6 mt-3">
								<div class="form-label-group">
									<input type="" id="Core" class="form-control" 
									placeholder="Digite seu numero de Coren" required="required" pattern="[0-9]+$" >  
									<div class="help-block with-errors"></div>  
								</div>
							</div>
							<div class="col-md-6 mt-3">
								<div class="form-label-group">
									<input type="" id="Cep" class="form-control" 
									placeholder="Digite seu Cep" required="required" pattern="[0-9]+$" >  
									<div class="help-block with-errors"></div>  
								</div>
							</div>
						</div>
					</div>

					<div class="custom-control custom-checkbox
					mb-3">
					<input type="checkbox" class="custom-control-input" id="customCheck1" required="required">
					<label class="custom-control-label" for="customCheck1">De acordo com os dados coletados?</label>
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
</form>

<a href="index.php">
		<i style="margin-top: 15%;" class="far fa-arrow-alt-circle-left text-white fa-3x p-3"></i>
	</a>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="https://kit.fontawesome.com/635b697ad0.js"></script>
</body>
</html>