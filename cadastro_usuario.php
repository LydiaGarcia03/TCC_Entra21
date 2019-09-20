<?php

	require_once "classes/cadastro_user.class.php";
	$cadastro = new Cadastro_user();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>HCD | Cadastro</title>
	<meta charset="utf-8">
	<!-- CSS -->   
	<link href="style/home.css" rel="stylesheet" type="text/css">
	<link href="sbadmin/css/sb-admin-2.min.css" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- CEP -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                            } 
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } 
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } 
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
</head>
<body style="background-color: dodgerblue">

	<div class="container-fluid">
		<div class="container">

			<div class="card card-register mx-auto mt-5">
				
				<div class="card-header">Crie sua conta grátis</div>

				<div class="card-body">

					<form method="POST" action="login.php">
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
										<input type="file" name="c_foto" id="c_foto" class="custom-file-input" placeholder="Escolha uma foto de perfil">
									</div>

								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<select class="form-control" name="genero">
										<option selected disabled>Gênero</option>
										<option value="masculino">Masculino</option>
										<option value="feminino">Feminino</option>
										<option value="outros">Outros</option>
									</select>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="dt_nascimento" id="dt_nascimento" data-mask="00/00/0000" maxlength="10" class="form-control" 
										placeholder="Data de nascimento" required>    
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
										<input type="email" name="confirmarEmail" id="confirmarEmail" class="form-control" placeholder="Confirmar E-mail" required> 
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
										placeholder="Confirmar Senha" required>    
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
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="rua" id="rua" class="form-control" 
										placeholder="Rua" required autofocus disabled>    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="numeroCasa" id="numeroCasa" class="form-control" placeholder="Número da residência" required autofocus>    
									</div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="complemento" id="complemento" class="form-control" placeholder="Complemento" required autofocus>    
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" required autofocus disabled>    
									</div>
								</div>
							</div>
						</div>


						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" required autofocus disabled>    
									</div>	
								</div>
								<div class="col-md-6">
									<input type="text" name="uf" id="uf" placeholder="Estado" class="form-control" disabled>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="tel_residencial" id="tel_residencial" class="form-control" placeholder="Número fixo" required>    
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="tel_celular" id="tel_celular" class="form-control" placeholder="Número de celular" required>    
									</div>
								</div>
							</div>
						</div>

						<input type="submit" class="btn btn-primary btn-block" name="btnNovaConta" value="Criar Conta">

					</form>

					<div class="text-center">
						<a class="d-block small mt-3" href="login.php">Página de login</a>
					</div>

				</div>
			</div>
		</div>

		<!-- Button TopPage -->
		<a class="scroll-to-top rounded d-inline" href="index.php">
			<i class="fas fa-angle-left"></i>
		</a>

	</div>  

	<!-- Bootstrap core JavaScript-->
	<script src="sbadmin/vendor/jquery/jquery.min.js"></script>
	<script src="sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/635b697ad0.js"></script>
	
	<!-- JQuery Mask -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="jQuery-Mask-Plugin/jquery.mask.min.js"/></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#dt_nascimento').mask('99/99/9999');
			$('#cep').mask('99999-999');
			$('#tel_celular').mask('(99) 9 9999-9999');
			$('#tel_residencial').mask('(99) 9999-9999');
		});
	</script>
</body>
</html>