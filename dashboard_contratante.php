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

        <div class="card my-5 ml-5 rounded-0" style=" width: 890px; height: 10%;">
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
                        <p class="card-text mr-5">Nome do profissional: <?=$servicos->verificarEstado()?></p>  
                    </div>

                    <div class="col-4">
                        <p class="card-text">Tipo do serviço: <?=$servico['tipo_servico']?></p>
                    </div>

                    <div class="col-4">
                        <button type="button" class="btn btn-primary btn-sm ml-5" name="btnDetalhes" id="btnDetalhes" data-toggle="modalDetalhes" data-target="#modalDetalhes">Ver detalhes</button>
                    </div>
                </div>  
            </div>
        </div>

        <!-- Modal -->
        <!-- <div class="modal fade" id="modalDetalhes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    uhdiaudisa
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div> -->

        <?php } ?>

    </div>

<!-- Inclusão da FOOTER do sistema -->
<?php require_once 'includes/footer.php';?>
