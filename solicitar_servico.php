<?php

    require_once 'includes/startfile.php';

    require_once "classes/servico.class.php";
    $servico = new Servico();

?>

    <body id="page-top">
<div id="wrapper">

<!-- Inclusão da NAVBAR lateral do sistema -->
<?php require_once('includes/navbar.php'); ?>

    <div id="content">

        <!-- Button TopPage -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <div class="card-header">Solicitação de serviço</div>

        <div class="card-body">

            <form method="POST" action="" name="formServico">
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
                                <option value="M">Masculino</option>
                                <option value="F">Feminino</option>
                                <option value="O">Outro</option>
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
                                    <option value="Infantil">Cuidador infantil</option>
                                    <option value="Idoso">Cuidador de idosos</option>
                                    <option value="Enfermagem">Enfermagem</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="text" name="diasServico" id="diasServico" style="cursor: pointer;" class="form-control" placeholder="Escolha os dias para o serviço">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="number" name="carga_horaria" id="carga_horaria" class="form-control" placeholder="Carga horária diária">
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
                        <div class="col-md-12">
                            <div class="form-label-group">
                                O paciente possui alguma doença crônica?
                                <input type="radio" name="doenca" id="doenca_true" value="true">
                                <label>Sim</label>
                                <input type="radio" name="doenca" id="doenca_false" value="false">
                                <label>Não</label>
                                <!-- Hidden -->
                                <input type="text" name="desc_doenca" id="desc_doenca" placeholder="Qual?" class="form-control mb-3" style="display: none;">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-label-group">
                                O paciente possui deficiência física?
                                <input type="radio" name="deficFisica" id="deficFisica_true" value="true">
                                <label>Sim</label>
                                <input type="radio" name="deficFisica" id="deficFisica_false" value="false">
                                <label>Não</label>
                                <!-- Hidden -->
                                <input type="text" name="desc_deficFisica" id="desc_deficFisica" placeholder="Qual?" class="form-control mb-3" style="display: none;">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-label-group">
                                O paciente possui deficiência mental?
                                <input type="radio" name="deficMental" id="deficMental_true" value="true">
                                <label>Sim</label>
                                <input type="radio" name="deficMental" id="deficMental_false" value="false">
                                <label>Não</label>
                                <!-- Hidden -->
                                <input type="text" name="desc_deficMental" id="desc_deficMental" placeholder="Qual?" class="form-control mb-3" style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-label-group">
                                <textarea style="resize: none;" cols="64" rows="7" placeholder="Descreva, se necessário, algumas informações a mais e essenciais do paciente" class="form-control" name="descricao"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group" class="my-4">
                    <div class="form-row">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="confirmaResponsavel" id="confirmaResponsavel">
                                <label class="form-check-label">Confirmo que sou responsável pelo paciente descrito acima</label>
                            </div>
                        </div>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary btn-block" name="btnSolicitarServico" value="Solicitar serviço">

            </form>

        </div>
    </div>


    <?php require_once 'includes/endfile.php'; ?>

    