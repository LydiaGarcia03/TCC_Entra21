<?php

	require_once 'includes/startfile.php';
	
	require_once 'classes/usuario.class.php';
	$user = new Usuario();

?>
	<title>HCD | Cadastro</title>
</head>
<body style="background-color: dodgerblue">


	<div class="container-fluid">
		    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
            
        </div>
    </a>

		<div class="container mb-5	">


			<div class="card mx-auto mt-5">

				<div class="card-header text-center">Crie sua conta grátis</div>

				<div class="card-body">

					<form method="POST" action="" name="formCadastroUser">
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
										<label class="custom-file-label text-secondary" for="fotoUser"></label>
										<input type="file" name="fotoUser" id="fotoUser" class="custom-file-input" placeholder="Escolha uma foto de perfil">
									</div>

								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="form-row">
								<div class="col-md-6">
									<select class="form-control" name="genero">
										<option selected disabled>Gênero</option>
										<option value="M">Masculino</option>
										<option value="F">Feminino</option>
										<option value="O">Outros</option>
									</select>
								</div>
								<div class="col-md-6">
									<div class="form-label-group">
										<input type="text" name="dt_nascimento" id="dt_nascimento" cadastro_usuario0/0000" maxlength="10" class="form-control" 
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
										<input type="text" name="numero_casa" id="numero_casa" class="form-control" 
										placeholder="Número da residência" minlength="2" maxlength="4" required>    
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row">
								<div class="col-md-4">
									<div class="form-label-group">
										<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" required autofocus disabled>    
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-label-group">
										<input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" required autofocus disabled>    
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
										<input type="text" name="complemento" id="complemento" class="form-control" placeholder="Complemento" minlength="8" maxlength="16" required autofocus>    
									</div>
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

						<input type="submit" class="btn btn-primary btn-block" name="btnNovaConta" id="btnNovaConta" value="Criar Conta">

					</form>

					<div class="text-center">
						<a class="d-block small mt-3" href="login.php">Página de login</a>
					</div>

				</div>
			</div>
		</div> 
	</div>

	<!-- Button TopPage -->
	<a class="scroll-to-top rounded d-inline" href="index.php" id="btn-voltar">
		<i class="fas fa-angle-left"></i>
	</a>

	<?php require_once 'includes/endfile.php'; ?>