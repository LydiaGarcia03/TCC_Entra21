<?php

    require_once 'classes/servico.class.php';

    $servico = new Servico();
    $lista = $servico->listarServico(); // Deveria ter exeutado ou atribuido para funcionar o foreach (?)

?>
<!-- Inclusão do HEADER do sistema -->
<?php require_once('includes/startfile.php'); ?>

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

        <?php } ?>

    </div>


<!-- Inclusão da FOOTER do sistema -->
<?php require_once 'includes/footer.php';?>
