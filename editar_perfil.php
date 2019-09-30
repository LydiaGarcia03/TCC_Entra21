<?php

	require_once "classes/site.class.php";
	$site = new Site();

	if($site->session_error() == 0){
		session_destroy();
		header('Location: error.php');
	}

?>
<!-- Inclusão do HEADER do sistema -->
<?php require_once('includes/startfile.php'); ?>

<body id="page-top">
    <div id="wrapper">

<!-- Inclusão da NAVBAR lateral do sistema -->
<?php require_once('includes/navbar.php'); ?>	

    <div id="content">

        <!-- Button TopPage -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <div class="card-header">Edição de conta</div>

        <div class="card-body">
            <form class="validation">
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
                                <label class="custom-file-label text-secondary" for="c_foto"></label>
                                <input type="file" class="custom-file-input" name="c_foto" id="c_foto" placeholder="Escolha uma foto de perfil">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <select class="form-control" name="genero" required autofocus>
                                <option selected disabled>Gênero</option>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                                <option value="outros">Outros</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="dt_nascimento" id="dt_nascimento" class="form-control"
                                placeholder="Data de nascimento" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="email" name="email" id="email" class="form-control"
                                placeholder="E-mail" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="email" name="confirmarEmail" id="confirmarEmail" class="form-control"
                                placeholder="Confirmar Email" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" name="senha" id="senha" class="form-control"
                                placeholder="Senha" minlength="8" maxlength="16" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" name="confirmarSenha" id="confirmarSenha" class="form-control"
                                placeholder="Confirmar Senha" minlength="8" maxlength="16" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-label-group">
                                <input type="text" name="cep" id="cep" class="form-control"
                                placeholder="CEP" required autofocus autocomplete="off" value="" onblur="pesquisacep(this.value);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="rua" id="rua" class="form-control"
                                placeholder="Rua" required autofocus disabled autocomplete="off">
                            </div>
                        </div>
    
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="numeroCasa" id="numeroCasa" class="form-control <?='d-none'; ?>"
                                placeholder="Número da residência" required autofocus autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="complemento" id="complemento" class="form-control"
                                placeholder="Complemento" autofocus required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="cidade" id="cidade" class="form-control"
                                placeholder="Cidade" required autofocus disabled autocomplete="off">
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
                            <div class="form-label-group">
                                <input type="text" name="uf" id="uf" class="form-control"
                                placeholder="Estado" required autofocus disabled autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <?php if($site->session_type() == 'contratante'){ ?>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="tel_residencial" id="tel_residencial" class="form-control"
                                placeholder="Número de telefone fixo" required autocomplete="off">
                            </div>
                        </div>
                        <?php } ?>

                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="tel_celular" id="tel_celular" class="form-control"
                                placeholder="Número de celular" required autocomplete="off">
                            </div>
                        </div>

                        <?php if($site->session_type() == 'contratante'){ ?>
                        <div class="col-md-2 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="num_coren" id="num_coren" class="form-control"
                                placeholder="Número do Coren" required autofocus autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-2 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="val_hora" id="val_hora" class="form-control"
                                placeholder="Valor hora (R$)" required autofocus autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="curso_formacao" id="curso_formacao" class="form-control"
                                placeholder="Curso de formação" required autofocus autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="instituicao" id="instituicao" class="form-control"
                                placeholder="Instituição de formação" required autofocus autocomplete="off">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary btn-block" name="btnNovaConta" value="Concluir alterações">
            </form>
        </div>
    </div>

    <!-- SCRIPTS PARA EDITAR E GERAR ARQUIVOS SEPARADOS -->
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
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script type="text/javascript" src="media/js/custom/cep.js"></script>

<?php // Inclusão da FOOTER do sistema ?>
<?php require_once('includes/footer.php'); ?>