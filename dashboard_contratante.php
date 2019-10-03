<?php
    
    require_once 'includes/startfile.php';

    require_once 'classes/servico.class.php';

    $servicos = new Servico();
    $lista = $servicos->listarTodosServicos();

?>
    <title>HCD | Dashboard</title>
</head>

<body id="page-top">
    <div id="wrapper">

<!-- Inclusão da NAVBAR lateral do sistema -->
<?php require_once('includes/navbar.php'); ?> 

<div id="content">

    <!-- Cards -->
    <div class="container">

        <?php foreach($lista as $servico){ ?>

        <div class="card my-5 rounded-0">
            <div class="card-body float-left">

                <div class="row">
                    <div class="col-6 my-auto">
                        <h5>#<?=$servico['id']?></h5>
                    </div>

                    <div class="col-6 my-auto">

                        <span class="dot"> <!--bg-<?php //$servicos->verificarEstado()?> --></span>
                       
                    </div>  
                </div>
                
                <hr>

                <div class="row">
                    <div class="col-4">
                        <p class="card-text m-0 campo"><?=$servico['nome_paciente']?></p>  
                        <small class="p-0 m-0 descricao_campos">Paciente</small>
                    </div>

                    <div class="col-3">
                        <p class="card-text m-0 campo"><?=$servico['tipo_servico']?></p>  
                        <small class="p-0 m-0 descricao_campos">Tipo de serviço</small></p>
                    </div>

                    <div class="col-3">
                        <p class="card-text m-0 campo"><?=$servicos->verificarEstado()?></p>  
                        <small class="p-0 m-0 descricao_campos">Profissionais</small></p>
                    </div>

                    <div class="col-2">
                        <button type="button" class="btn btn-primary btn-sm float-right" name="btnDetalhes" id="btnDetalhes" data-toggle="modal" data-target="#modalDetalhes<?=$servico['id']?>">Ver detalhes</button>
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

                        <p>Nasceu em <?=$servico['dt_nascimento_paciente']?></p>

                        <?php if($servico['genero_paciente'] == 'F'){ ?>
                        <p>Sexo Feminino</p>
                        <?php } elseif($servico['genero_paciente'] == 'M'){ ?>
                        <p>Sexo Masculino</p>
                        <?php } else{ ?>
                        <p>Outro sexo</p>
                        <?php } ?>

                        <?php if($servico['tipo_servico'] == 'Idoso'){ ?>
                        <p>Serviço para cuidado de idosos</p>
                        <?php } elseif($servico['tipo_servico'] == 'Infantil'){ ?>
                        <p>Serviço para cuidados infantis</p>
                        <?php } else{ ?>
                        <p>Serviço de enfermagem</p>
                        <?php } ?>
                        
                        Possui doença crônica
                        <?=($servico['doenca_cronica'] == 1) ? '<i class="fas fa-check text-success pl-2"></i>' : '<i class="fas fa-times text-danger pl-2"></i>'?>

                        Possui deficiência física
                        <?=($servico['deficiencia_fisica'] == 1) ? '<i class="fas fa-check text-success pl-2"></i>' : '<i class="fas fa-times text-danger pl-2"></i>'?>

                        Possui deficiência mental
                        <?=($servico['deficiencia_mental'] == 1) ? '<i class="fas fa-check text-success pl-2"></i>' : '<i class="fas fa-times text-danger pl-2"></i>'?>

                        <?=$servico['descricao_geral']?>
                        <?=$servico['']?>

                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

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
    

<!-- Inclusão da FOOTER do sistema -->
<?php require_once 'includes/endfile.php';?>