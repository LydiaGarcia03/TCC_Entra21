<?php
    
    require_once 'includes/startfile.php';

    require_once 'classes/servico.class.php';

    $servicos = new Servico();
    $lista = $servicos->listarServicos(); 

    // $t = $servicos->verificarEstado();

    // echo '<pre>';
    // var_dump($lista);
    // var_dump($t);
    // echo '</pre>';
    // die();


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

                        <span class="dot bg-<?=$servicos->verificarEstado()?>"></span>
                       
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
                        <button type="button" class="btn btn-primary btn-sm float-right" name="btnDetalhes" id="btnDetalhes" data-toggle="modal" data-target="#modalDetalhes">Ver detalhes</button>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modalDetalhes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header text-white rounded-0 bg-primary">
                        <h5 class="modal-title" id="exampleModalLabel">#<?=$servico['id']?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    
                        <?=$servico['genero_paciente']?>
                        <?=$servico['nome_paciente']?>

                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>
    

<!-- Inclusão da FOOTER do sistema -->
<?php require_once 'includes/footer.php';?>
