<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>HCD | Cadastro</title>
	<meta charset="utf-8">
	<!-- CSS -->    
	<link href="style/home.css" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-info">
	<div class="container">

		<div class="card card-register mx-auto mt-5">

			<div class="card-header">Crie sua conta grátis</div>
			<div class="card-body">

				<form id="formExemplo" data-toggle="validator" role="form">

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control" 
									placeholder="Nome Completo" required autofocus>    
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
								<select class="form-control" name="genero">
									<option disabled selected>Gênero</option>
									<option value="masculino">Masculino</option>
									<option value="feminino">Feminino</option>
									<option value="outros">Outros</option>
								</select>
							</div>

							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="dt_nascimento" id="dt_nascimento" class="form-control" data-mask="00/00/0000" maxlength="10" placeholder="Data de nascimento" required>    
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="email" name="email" id="email" class="form-control" 
									placeholder="Endereço de e-mail" required>    
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-label-group">
									<input type="email" name="confirmarEmail" id="confirmarEmail" class="form-control" 
									placeholder="Confirmar Email" required>    
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="password" name="senha" id="senha" class="form-control" 
									placeholder="Senha" required>    
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-label-group">
									<input type="password" name="confirmaSenha" id="confirmaSenha" class="form-control" 
									placeholder="Confirma Senha" required>    
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<div class="form-label-group">
									<input type="text" name="cep" id="cep" class="form-control" 
									placeholder="CEP: (00000-000)" required autofocus>   
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="rua" id="rua" class="form-control" 
									placeholder="Rua" required autofocus disabled>    
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-label-group">
									<input type="number" name="numeroCasa" id="numeroCasa" class="form-control" 
									placeholder="Numero" required autofocus>    
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="complemento" id="complemento" class="form-control" 
									placeholder="Complemento" required autofocus >    
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="cidade" id="cidade" class="form-control" 
									placeholder="Cidade" required autofocus disabled>    
								</div>
							</div>
						</div>
					</div>


					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="bairro" id="bairro" class="form-control" 
									placeholder="Bairro" required autofocus disabled>    
								</div>	
							</div>

							<div class="col-md-6">
								<select class="custom-select" disabled>
									<option value="AC">AC</option>
									<option value="AL">AL</option>
									<option value="AP">AP</option>
									<option value="AM">AM</option>
									<option value="BA">BA</option>
									<option value="CE">CE</option>
									<option value="DF">DF</option>
									<option value="ES">ES</option>
									<option value="GO">GO</option>
									<option value="MA">MA</option>
									<option value="MT">MT</option>
									<option value="MS">MS</option>
									<option value="MG">MG</option>
									<option value="PA">PA</option>
									<option value="PB">PB</option>
									<option value="PR">PR</option>
									<option value="PE">PE</option>
									<option value="PI">PI</option>
									<option value="RJ">RJ</option>
									<option value="RN">RN</option>
									<option value="RO">RO</option>
									<option value="RS">RS</option>
									<option value="RR">RR</option>
									<option value="SC">SC</option>
									<option value="SP">SP</option>
									<option value="SE">SE</option>
									<option value="TO">TO</option>
								</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="tel_residencial" id="tel_residencial" class="form-control" 
									placeholder="Numero fixo" required>    
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-label-group">
									<input autocomplete="off" type="tel" class="form-control fone" id="tel_celular" name="tel_celular" value="" required="" maxlength="15" data-original-title="TELEFONE: Forneça um válido ou limpe o campo">    
								</div>
							</div>
						</div>
					</div>

					<!-- Dados acadêmicos -->
					<div class="form-group">
						<div class="form-row">
							 <div class="col-md-12">
							 	<div class="form-label-group">
							 		<input type="text" id="num_coren" name="num_coren" placeholder="Número do Coren" class="form-control">
							 	</div>
							 </div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="form_curso" id="form_curso" placeholder="Curso de formação" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="form_instituicao" id="form_instituicao" placeholder="Instituição de formação" class="form-control">
								</div>
							</div>
						</div>
					</div>

					<!-- Dados bancários -->
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="cod_banco" id="cod_banco" placeholder="Código do banco" class="form-control">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="num_agencia" id="num_agencia" placeholder="Número da agência" class="form-control">
								</div>
							</div>

						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">
							 	<div class="form-label-group">
							 		<input type="text" id="tipo_conta" name="tipo_conta" placeholder="Tipo de conta" class="form-control">
							 	</div>
							 </div>

							<div class="col-md-4">
								<input type="text" name="num_conta" id="num_conta" class="form-control" placeholder="Número da conta">
							</div>

							<div class="col-md-4">
								<input type="text" name="dig_conta" id="dig_conta" class="form-control" placeholder="Dígito da conta">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<input type="text" name="num_cartao" id="num_cartao" class="form-control" placeholder="Número do cartão">
							</div>

							<div class="col-md-6">
								<input type="text" name="nome_user_cartao" id="nome_user_cartao" class="form-control" placeholder="Nome do usuário no cartão">
							</div>
						</div>
					</div>

					<div class="custom-control custom-checkbox mb-3">
						<input type="checkbox" class="custom-control-input" id="customCheck1" required>
						<label class="custom-control-label" for="customCheck1">De acordo com os dados coletados?</label>
					</div>

					<input type="submit" class="btn btn-primary btn-block" name="btnNovaConta" value="Criar Conta">

					<div class="text-center">
						<a class="d-block small mt-3" href="">Página de login</a>
						<a class="d-block small" href="">Esqueceu sua senha?</a>
					</div>

				</form>
				
			</div>
		</div>
	</div>

	<a href="index.php">
		<i style="margin-top: 15%;" class="far fa-arrow-alt-circle-left text-white fa-3x p-3"></i>
	</a>

	<!-- JQuery Mask -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="jQuery-Mask-Plugin/jquery.mask.min.js"/></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#dt_nascimento').mask('99/99/9999');
			$('#cep').mask('99999-999');
			$('#tel_celular').mask('(99) 9 9999-9999');
			$('#tel_residencial').mask('9999-9999');
			$('#num_coren').mask('999.999');
			$('#cod_banco').mask('999');
			$('#num_agencia').mask('9999');
			$('#tipo_conta').mask('999');
			$('#num_conta').mask('99999999');
			$('#dig_conta').mask('9');
			$('#num_cartao').mask('9999 9999 9999 9999');
		});
	</script>

	<!-- Optional JavaScript -->
	<script src="https://kit.fontawesome.com/635b697ad0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>