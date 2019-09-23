<?php

	require_once "classes/site.class.php";
	$site = new Site();

	if(!isset($_SESSION))
		session_start();

	if(!isset($_SESSION['tipo_usuario'])){
		// session_destroy(   );
		// header('Location: error.php');
	}

?>
<?php // Inclusão do HEADER do sistema ?>
<?php require_once('includes/header.php'); ?>
<?php // Inclusão da NAVBAR lateral do sistema ?>
<?php require_once('includes/navbar.php'); ?>

    <style type="text/css">
    	/*Arrumar depois*/
    	.form-control, select.custom-select, .custom-file-label{
    		border-radius: 0 !important;
    		border: none !important;
    		border-bottom: 1px solid lightgray !important;
    		background-color: white !important;
    		transition: 0.5s !important;
    		margin-top: 10px !important;
    	}
    	.form-control:focus, .form-control:active, .btn:focus, .btn:active{
    		background-color: rgba(0,0,0,.03) !important;
    		outline: none !important;
    		box-shadow: none !important;
    		border-bottom: 1px solid darkgray !important;
    	}
    	.custom-file-label:after{
    		content: "Escolha a foto de perfil" !important;
    		background-color: white !important;
    		float: left !important;
    		left: 0 !important;
    		padding-bottom: 0 !important;
    	}
    </style>

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
                                <input type="password" name="confirmaSenha" id="confirmaSenha" class="form-control"
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
                                <input type="text" name="numeroCasa" id="numeroCasa" class="form-control"
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
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="tel_residencial" id="tel_residencial" class="form-control"
                                placeholder="Número de telefone fixo" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="tel_celular" id="tel_celular" class="form-control"
                                placeholder="Número de celular" requiredautocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="num_coren" id="num_coren" class="form-control"
                                placeholder="Número do Coren" required autofocusautocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="cod_banco" id="cod_banco" class="form-control"
                                placeholder="Código do banco" required autofocusautocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="num_agencia" id="num_agencia" class="form-control"
                                placeholder="Número da agência" required autofocusautocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-4 mt-3">
                            <select class="custom-select">
                                <option disabled selected>Tipo de conta</option>
                                <option value="corrente">Corrente</option>
                                <option value="poupança">Poupança</option>
                                <option value="especial">Especial</option>
                            </select>
                        </div>

                        <div class="col-md-4 mt-3 mt-3">
                            <input type="text" name="num_conta" id="num_conta" class="form-control" placeholder="Número da conta"autocomplete="off">
                        </div>

                        <div class="col-md-4 mt-3 mt-3">
                            <input type="text" name="dig_conta" id="dig_conta" class="form-control" placeholder="Dígito da conta"autocomplete="off">
                        </div>

                        <div class="col-md-6 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="num_cartao" id="num_cartao" class="form-control"
                                placeholder="Número do cartão" required autofocus autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="nome_user_cartao" id="nome_user_cartao" class="form-control"
                                placeholder="Nome do usuário do cartão" required autofocus autocomplete="off">
                            </div>
                        </div>

                        <div class="col-md-6 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="curso_formacao" id="curso_formacao" class="form-control"
                                placeholder="Curso de formação" required autofocus autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-label-group">
                                <input type="text" name="instituicao" id="instituicao" class="form-control"
                                placeholder="Instituição de formação" required autofocus autocomplete="off">
                            </div>
                        </div>
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
			$('#cod_banco').mask('999');
			$('#num_agencia').mask('9999');
			$('#tipo_conta').mask('999');
			$('#num_conta').mask('99999999');
			$('#dig_conta').mask('9');
			$('#num_cartao').mask('9999 9999 9999 9999');
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

<?php // Inclusão da FOOTER do sistema ?>
<?php require_once('includes/footer.php'); ?>