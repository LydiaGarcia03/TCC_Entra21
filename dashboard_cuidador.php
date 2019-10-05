<?php

    require_once 'includes/startfile.php'; 

    require_once 'classes/servico.class.php';

    $servicos = new Servico();
    $lista = $servicos->listarTodosServicos($_SESSION['id_usuario']);


?>
    <title>Dashboard</title>
</head>

<body id="page-top">
    <div id="wrapper">

<!-- Inclusão da NAVBAR lateral do sistema -->
<?php require_once('includes/navbar.php'); ?>

<div id="content">

    <div class="container-fluid">
        <div class="container">
            <div class="row pt-4 pb-3">
                <div class="col-12">
                    
                    <h3 class="float-right p-0 m-0 text-uppercase font-weight-bolder">Histórico de serviços</h3>

                </div>
            </div>
            
            <hr class="mt-0">

            <div class="row">
                <div class="col-12">
        
                    <?php foreach($lista as $servico){ ?>
                    <div class="card my-5 rounded-0">
                        <div class="card-body float-left">

                            <div class="row">
                                <div class="col-6 my-auto">
                                    <h5>#<?=$servico['id_servico']?></h5>
                                </div>

                                <div class="col-6 my-auto text-right">
                                    <div class="spinner-grow text-<?=$servicos->verificarEstado($servico)?>" role="status">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                            
                            <hr>

                            <div class="row">
                                <div class="col-4">
                                    <p class="card-text m-0 campo"><?=$servico['nome_paciente']?></p>  
                                    <small class="p-0 m-0 descricao_campos">Paciente</small>
                                </div>

                                <div class="col-3">
                                    <p class="card-text m-0 campo"><?=($servico['tipo_servico'] == 'Idoso') ? 'Cuidador de Idosos' : ($servico['tipo_servico'] == 'Infantil') ? 'Cuidador Infantil' : 'Enfermagem' ?></p>  
                                    <small class="p-0 m-0 descricao_campos">Tipo de serviço</small></p>
                                </div>

                                <div class="col-3">
                                    <p class="card-text m-0 campo"><?=(count($servicos->buscarCuidadorPorServico($servico['id_servico'])) > 0) ? $servicos->buscarCuidadorPorServico($servico['id_servico']) : ''?></p>
                                    <small class="p-0 m-0 descricao_campos">Profissionais</small></p>
                                </div>

                                <div class="col-2">
                                    <button type="button" class="btn btn-primary btn-sm float-right" name="btnDetalhes" id="btnDetalhes" data-toggle="modal" data-target="#modalDetalhes<?=$servico['id']?>">Ver detalhes</button>
                                    <?php if($servico['estado'] <> 'finalizado') : ?>
                                    <button type="button" class="btn btn-danger btn-sm float-right mt-2 btnFinalizar" name="btnFinalizar" id="btnFinalizar" data-servico="<?=$servico['id_servico']?>">Finalizar Serviço</button>
                                    <?php endif; ?>
                                </div>
                            </div>  
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modalDetalhes<?=$servico['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-white rounded-0 bg-primary">
                                    <h5 class="modal-title" id="exampleModalLabel">#<?=$servico['id']?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                
                                    <h5><?=$servico['nome_paciente']?></h5>

                                    <p>Nasceu em <?=date_format(date_create($servico['dt_nascimento_paciente']), 'd/m/Y')?></p>

                                    <?php if($servico['genero_paciente'] == 'F'){ ?>
                                    <p>Sexo Feminino</p>
                                    <?php } elseif($servico['genero_paciente'] == 'M'){ ?>
                                    <p>Sexo Masculino</p>
                                    <?php } else{ ?>
                                    <p>Outro sexo</p>
                                    <?php } ?>

                                    <?=($servico['tipo_servico'] == 'Idoso') ? '<p>Serviço para cuidado de idosos</p>' : ($servico['tipo_servico'] == 'Infantil') ? '<p>Serviço para cuidados infantis</p>' : '<p>Serviço de enfermagem</p>' ?>
                                
                                    <p>Responsável: <?=$servico['nome_contratante']?>
                                    </p>
                                
                                    <p>
                                        Possui doença crônica
                                        <?=($servico['doenca_cronica'] == 1) ? '<i class="fas fa-check text-success pl-2"></i><br><i class="fas fa-caret-right mr-3"></i>' . $servico['doenca_cronica_descricao'] : '<i class="fas fa-times text-danger pl-2"></i>'?>
                                    </p>

                                    <p>
                                        Possui deficiência física
                                        <?=($servico['deficiencia_fisica'] == 1) ? '<i class="fas fa-check text-success pl-2"></i><br><i class="fas fa-caret-right mr-3"></i>' . $servico['deficiencia_fisica_descricao'] : '<i class="fas fa-times text-danger pl-2"></i>'?>
                                    </p>
                                                                                  
                                    <p>
                                        Possui deficiência mental
                                        <?=($servico['deficiencia_mental'] == 1) ? '<i class="fas fa-check text-success pl-2"></i><br><i class="fas fa-caret-right mr-3"></i>' . $servico['deficiencia_mental_descricao'] : '<i class="fas fa-times text-danger pl-2"></i>'?>
                                    </p>

                                    <?=$servico['descricao_geral']?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if (count($lista) <= 0) : ?>
                        <div class="card rounded-0">
                            <div class="card-body text-center py-5 shadow">
                                Você não tem nenhum serviço no momento =(
                                <br>
                                <a href="servicos_disponiveis.php" class="btn btn-primary mt-3 shadow">
                                    Buscar serviços disponíveis
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            Copyright &copy; HCDigital 2019
        </div>
    </div>
</footer>

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<?php require_once 'includes/endfile.php'; ?>

<script>
    $(document).ready(function() {

        $('.btnFinalizar').click(function() {
            var servico = $(this).attr('data-servico');

            $.ajax({
                url: "servicos_disponiveis_ajax.php",
                type: "POST",
                data: {
                    "finalizar_servico": servico
                }
            }).done(function (resposta) {
                if (resposta=='1') {
                    location.reload();
                }
            });

        });
    });
</script>