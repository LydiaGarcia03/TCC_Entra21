<?php

	require_once "classes/cuidador.class.php";
	$cuidador = new Cuidador();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>HCD | Cadastro</title>
	<meta charset="utf-8">
	<link href="media/css/custom/cadastro_cuidador.css" rel="stylesheet" type="text/css">
	<link href="media/css/custom/style.css" rel="stylesheet" type="text/css">
	<link href="media/css/custom/style_blog.css" rel="stylesheet" type="text/css">

	<!-- ============ RESOURCES ============ -->
	<!-- Boostrap -->
	<link href="media/css/resource/bootstrap.min.css" rel="stylesheet" type="text/css">

	<!-- Datepicker -->
	<link href="media/css/resource/datepicker.css" rel="stylesheet" type="text/css">

	<!-- SBAdmin -->
	<link href="media/css/resource/sb-admin-2.min.css" rel="stylesheet" type="text/css">
	<!-- CEP -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="media/js/custom/cep.js"></script>
</head>
<body style="background-color: dodgerblue">
<!--botao voltar-->

<div class="container">


		<div class="card mx-auto my-5">

			<div class="card-header text-center">Crie sua conta grátis</div>
			<div class="card-body">

				<form action="" method="POST" id="formCadastroCuidador">

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control" 
									placeholder="Nome completo" required autofocus autocomplete="off">    
								</div>
							</div>

							<div class="col-6">
								<div class="input-group">
									<input type="file" class="custom-file-input" name="c_foto" id="c_foto" placeholder="Escolha uma foto de perfil" style="cursor: pointer;">
									<label class="text-secondary custom-file-label" for="c_foto"></label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<select class="form-control" name="genero">
									<option disabled selected>Gênero</option>
									<option value="M">Masculino</option>
									<option value="F">Feminino</option>
									<option value="O">Outros</option>
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
									placeholder="E-mail" required>    
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
									placeholder="Senha" minlength="8" maxlength="16" required>    
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-label-group">
									<input type="password" name="confirmaSenha" id="confirmaSenha" class="form-control" 
									placeholder="Confirmar Senha" minlength="8" maxlength="16" required>    
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<div class="form-label-group">
									<input type="text" name="cep" id="cep" class="form-control" 
									placeholder="CEP" required autofocus>   
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-8">
								<div class="form-label-group">
									<input type="text" name="rua" id="rua" class="form-control" 
									placeholder="Rua" required autofocus disabled>    
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-label-group">
									<input type="number" name="numeroCasa" id="numeroCasa" class="form-control" 
									placeholder="Número da residência" maxlength="5" minlength="2" required autofocus>    
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-4">
								<div class="form-label-group">
									<input type="text" name="cidade" id="cidade" class="form-control" 
									placeholder="Cidade" maxlength="6" autocomplete="off" required autofocus disabled>    
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-label-group">
									<input type="text" name="bairro" id="bairro" class="form-control" 
									placeholder="Bairro" required autofocus disabled>    
								</div>	
							</div>
							<div class="col-md-4">
								<input type="text" name="uf" id="uf" placeholder="Estado" class="form-control" disabled>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-12">
								<div class="form-label-group">
									<input type="text" name="complemento" id="complemento" class="form-control" 
									placeholder="Complemento" required autofocus>    
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="form-row">
							<div class="col-md-6">
								<div class="form-label-group">
									<input type="text" name="tel_residencial" id="tel_residencial" class="form-control" 
									placeholder="Número da residência fixo" required>    
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-label-group">
									<input autocomplete="off" type="tel" placeholder="Número de celular" class="form-control fone" id="tel_celular" name="tel_celular" value="" required maxlength="15" data-original-title="TELEFONE: Forneça um válido ou limpe o campo">    
								</div>
							</div>
						</div>
					</div>

					<!-- Dados acadêmicos -->
					<div class="form-group">
						<div class="form-row">
							<div class="col-md-2">
								<div class="form-label-group">
									<input type="text" id="num_coren" name="num_coren" placeholder="Número do Coren" class="form-control">
								</div>
							</div>

							<div class="col-md-2">
	                            <div class="form-label-group">
	                                <input type="text" name="val_hora" id="val_hora" class="form-control"
	                                placeholder="Valor hora (R$)" required autofocus autocomplete="off">
	                            </div>
	                        </div>

							<div class="col-md-4">
								<div class="form-label-group">
									<input type="text" name="form_curso" id="form_curso" placeholder="Curso de formação" class="form-control">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-label-group">
									<input type="text" name="form_instituicao" id="form_instituicao" placeholder="Instituição de formação" class="form-control">
								</div>
							</div>
						</div>
					</div>
					<div class="custom-control custom-checkbox mb-3">
						<input type="checkbox" class="custom-control-input" id="customCheck1" required>
						<label class="custom-control-label" for="customCheck1">De acordo com os dados coletados?</label>
					</div>

					<input type="submit" class="btn btn-primary btn-block" name="btnNovaConta" id="btnNovaConta" value="Criar Conta">

					<div class="text-center">
						<a class="d-block small mt-3" href="login.php">Página de login</a>
					</div>

				</form>
				
			</div>
		</div>

	</div>
	<!-- Button TopPage -->
	<a class="scroll-to-top rounded d-inline" href="index.php" id="btn-voltar">
		<i class="fas fa-angle-left"></i>
	</a>
	<!-- Bootstrap core JavaScript-->
	<script src="sbadmin/vendor/jquery/jquery.min.js"></script>
	<script src="sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Optional JavaScript -->
	<script src="https://kit.fontawesome.com/635b697ad0.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/635b697ad0.js"></script>
	<!-- JQuery Mask -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="media/js/resources/jquery.mask.min.js"/></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#dt_nascimento').mask('99/99/9999');
			$('#cep').mask('99999-999');
			$('#tel_celular').mask('(99) 9 9999-9999');
			$('#tel_residencial').mask('(99) 9999-9999');
			$('#num_coren').mask('999.999');
		});
	</script>

	<script>
		$('.custom-file-input').on('change', function() {
			var fileName = $(this).val();
			$(this).attr('placeholder', fileName);
		});
	</script>

</body>
</html>