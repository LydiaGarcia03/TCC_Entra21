<?php

    require_once 'classes/cuidador.class.php';

    $cuidador = new Cuidador();
    $cuidador->listarCuidador();

?>
<!-- Inclusão do HEADER do sistema -->
<?php require_once('includes/startfile.php'); ?>

<body id="page-top">
    <div id="wrapper">

<!-- Inclusão da NAVBAR lateral do sistema -->
<?php require_once('includes/navbar.php'); ?>

<div id="content">

    <!-- Begin Page Content -->
    <div class="container">
        
        <!-- <?php // foreach($lista as $servico){ ?> -->

        <div class="card my-5 ml-5 rounded-0" style=" width: 890px; height: 10%;">
            <div class="card-body float-left">

                <div class="row">
                    <div class="col-6 my-auto">
                        <h5>#<?=$servico['id']?></h5>
                    </div>

                    <div class="col-6 my-auto">
                        <span class="dot"></span>
                    </div>
                </div>
                
                <hr>

                <div class="row">
                    <div class="col-4">
                        <p class="card-text mr-5">Nome do profissional: </p>  
                    </div>

                    <div class="col-4">
                        <p class="card-text">Tipo do serviço: <?=$servico['tipo_servico']?></p>
                    </div>

                    <div class="col-4">
                        <button type="button" class="btn btn-primary  btn-sm ml-5">Ver detalhes</button>
                    </div>
                </div>  
            </div>
        </div>

        <!-- <?php //} ?> -->
    </div>

<!-- SCRIPT PARA CONVERTER DEPOIS... -->
<script type="text/javascript" src="media/js/custom/calendario.js"></script>

<?php // Inclusão da FOOTER do sistema ?>
<?php require_once('includes/footer.php'); ?>