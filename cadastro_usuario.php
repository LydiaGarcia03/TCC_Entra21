<?php
// Inclusão da conexão com o banco de dados
require_once "include/conexao.php";

?>

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

	<div class="container-fluid">
		<div class="container">
			<div class="card card-register mx-auto mt-5">
				
				<div class="card-header">Crie sua conta grátis</div>
				
				<div class="card-body">
					<form>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control" 
										placeholder="Nome Completo" required="required" autofocus="autofocus">    
									</div>
								</div>
								<div class="col-6">

									<div class="input-group">
										<label class="custom-file-label text-secondary" for="c_foto"></label>
										<input type="file" class="custom-file-input" name="c_foto" id="c_foto" placeholder="Escolha uma foto de perfil">
									</div>

								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<select class="form-control">
										<option>Gênero</option>
										<option>Masculino</option>
										<option>Feminino</option>
										<option>Outros</option>
									</select>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="date" name="date" id="date" class="form-control" 
										placeholder="Data de nascimento" required="required">    
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="email" name="email" id="email" class="form-control" 
										placeholder="Endereço de e-mail" required="required">    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="email" name="confirmarEmail" id="confirmarEmail" class="form-control" 
										placeholder="Confirmar Email" required="required">    
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="password" name="senha" id="senha" class="form-control" 
										placeholder="senha" required="required">    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="password" name="confirmaSenha" id="confirmaSenha" class="form-control" 
										placeholder="Confirma Senha" required="required">    
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-12">
									<div class="form-label-group">
										<input type="number" name="cep" id="cep" class="form-control" 
										placeholder="CEP: (00000-000)" required="required" autofocus="autofocus">   
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="rua" id="rua" class="form-control" 
										placeholder="Rua" required="required" autofocus="autofocus" disabled="">    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="numeroRes" id="numeroRes" class="form-control" 
										placeholder="Numero" required="required" autofocus="autofocus">    
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="complemento" id="complemento" class="form-control" 
										placeholder="Complemento" required="required" autofocus="autofocus" >    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="cidade" id="cidade" class="form-control" 
										placeholder="Cidade" required="required" autofocus="autofocus" disabled="">    
									</div>
								</div>
							</div>
						</div>


						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="bairro" id="bairro" class="form-control" 
										placeholder="Bairro" required="required" autofocus="autofocus" disabled="">    
									</div>	
								</div>
								<div class="col-md-6">
									
									<select class="custom-select" disabled="">
										<option>SC</option>
										<option>RS</option>
										<option>PR</option>
									</select>
								</div>
							</div>
						</div>


						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="number" name="numeroFixo" id="numeroFixo" class="form-control" 
										placeholder="Numero fixo" required="required">    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="number" name="numeroCelular" id="numeroCelular" class="form-control" 
										placeholder="Numero de celular" required="required">    
									</div>
								</div>
							</div>
						</div>


						<button class="btn btn-primary btn-block" href="">Criar Conta</button>
					</form>

					<div class="text-center">
						<a class="d-block small mt-3" href="login.php">Página de login</a>
						<a class="d-block small" href="esqueceu_senha.php">Esqueceu sua senha?</a>
					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-3 bg-danger my-5 py-3">
				<i class="fas fa-chevron-left mx-3"></i>
				Voltar a página inicial
			</div>
		</div>

	</div>  
	

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/635b697ad0.js"></script>
</body>
</html>