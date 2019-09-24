<?php

    require_once "classes/solicitar_servico.class.php";
    $solicitar_servico = new Solicitar_servico();

    if(!parent::$solicitar_servico->session_error()){
        header('Location: error.php');
    }

?>

<?php // Inclusão do HEADER do sistema ?>
<?php require_once('includes/header.php'); ?>
<?php // Inclusão da NAVBAR lateral do sistema ?>
<?php require_once('includes/navbar.php'); ?>

<div id="content">

    <!-- Button TopPage -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <div class="card-header">Solicitação de serviço</div>

    <div class="card-body">

        <form>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-12">
                        <div class="form-label-group">
                            <input type="text" name="nomePaciente" id="nomePaciente" class="form-control"
                            placeholder="Nome completo do paciente" required autofocus>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <select class="custom-select" name="genero">
                            <option selected disabled>Gênero</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" name="dt_nascimento" id="dt_nascimento" class="form-control"
                            placeholder="Data de nascimento" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <select class="custom-select" name="servico">
                                <option selected disabled>Tipo de serviço</option>
                                <option value="infantil">Cuidador infantil</option>
                                <option value="idoso">Cuidador de idosos</option>
                                <option value="enfermagem">Enfermagem</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="email" name="email" id="email" class="form-control" placeholder="E-mail do responsável">
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" name="diasServico" id="diasServico" style="cursor: pointer;" class="form-control date" placeholder="Escolha os dias para o serviço">
                        </div>
                    </div>

                    
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="number" name="qtd_cuidadores" id="qtd_cuidadores" class="form-control" placeholder="Quantidade de profissionais necessários" disabled>
                            <small>A quantidade é definida pelo sistema de acordo com a PLC Nº 11, DE 2016</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <p>O paciente é diabético?</p>
                            <input type="radio" name="diabetico" id="diabetico_true" value="diabetico_true">
                            <label>Sim</label>
                            <br>
                            <input type="radio" name="diabetico" id="diabetico_false" value="diabetico_false">
                            <label>Não</label>
                        </div>

                        <div class="form-label-group">
                            <p>O paciente possui deficiência física?</p>
                            <input type="radio" name="deficFisica" id="deficFisica_true" value="deficFisica_true">
                            <label>Sim</label>
                            <br>
                            <input type="radio" name="deficFisica" id="deficFisica_false" value="deficFisica_false">
                            <label>Não</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-label-group">
                            <p>O paciente possui deficiência mental?</p>
                            <input type="radio" name="deficMental" id="deficMental_true" value="deficMental_true">
                            <label>Sim</label>
                            <br>
                            <input type="radio" name="deficMental" id="deficMental_false" value="deficMental_false">
                            <label>Não</label>
                        </div>

                        <div class="form-label-group">
                            <p>O paciente é hipertenso?</p>
                            <input type="radio" name="hipertenso" id="hipertenso_true" value="hipertenso_true">
                            <label>Sim</label>
                            <br>
                            <input type="radio" name="hipertenso" id="hipertenso_false" value="hipertenso_false">
                            <label>Não</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <textarea style="resize: none;" cols="64" rows="7" placeholder="Descreva, se necessário, algumas informações a mais e essenciais do paciente" class="form-control" name="descricao"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group" class="my-4">
                <div class="form-row">
                    <div class="col-md-6">
                        <input type="checkbox" class="custom-control-input" name="confirmaResponsavel" id="confirmaResponsavel">
                        <label class="custom-control-label">Confirmo que sou responsável pelo paciente descrito acima</label>
                    </div>
                </div>
            </div>

            <input type="submit" class="btn btn-primary btn-block" name="btnSolicitarServico" value="Solicitar serviço">

        </form>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="media/js/resources/jquery.mask.min.js"/></script>

<script type="text/javascript">
  $(document).ready(function(){
   $('#dt_nascimento').mask('99/99/9999');
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

<script type="text/javascript">
    $("#diasServico").datepicker({
    format: 'dd-mm-yyyy',
    inline: false,
    lang: 'pt',
    multidate: true,
    closeOnDateSelect: true
});
</script>

<?php // Inclusão da FOOTER do sistema ?>
<?php require_once('includes/footer.php'); ?>

<?php 

/* 
    12h diarias max

    +2 dias -> +1 profissional
    alterna prof. dias s/ dia n/

    PLC Nº 11, DE 2016 ART4.I

    LEI COMPLEMENTAR Nº 150, DE 1º DE JUNHO DE 2015
*/

?>