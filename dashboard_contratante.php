<?php

    require_once 'classes/usuario.class.php';

    $usuario = new Usuario();
    $usuario->listarUsuario(); // Deveria ter exeutado ou atribuido para funcionar o foreach (?)

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
        <div class="card my-5 ml-5 rounded-0" style=" width: 890px; height: 10%;">
        <div class="card-body float-left">
            <div class="spinner-border text-danger float-right" role="status">
        </div>
        <?php foreach ($usuario as $user){ ?>
            <h5>#<?=$user['id']?></h5>
            <hr>
            <div class="row">
                <div class="col-4">
                    <p class="card-text mr-5">Nome do profissional: Alpha</p>  
                </div>
                <div class="col-4">
                    <p class="card-text">Tipo do serviço: Cuidador de Idoso</p>
                </div>
                <div class="col-4">
                  <button type="button" class="btn btn-primary  btn-sm ml-5">Ver detalhes</button>
              </div>
          </div>  
          <?php } ?>  
      </div>
  </div>
  <div class="card my-5 ml-5 rounded-0" style=" width: 890px; height: 10%;">
    <div class="card-body float-left">
        <div class="spinner-border text-primary float-right" role="status">
        </div>
        <h5>#2761</h5>
        <hr>
        <div class="row">
             <div class="col-4">
            <p class="card-text">Nome do profissional: Beta</p>  
        </div>
             <div class="col-4">
            <p class="card-text">Tipo do serviço: Cuidador Infantil</p>
        </div>
        <div class="col-4">
                  <button type="button" class="btn btn-primary  btn-sm ml-5">Ver detalhes</button>
              </div>
        </div>
    </div>
</div>
<div class="card my-5 ml-5 rounded-0" style=" width: 890px; height: 10%;">
    <div class="card-body float-left">
        <div class="spinner-border text-danger  float-right" role="status">
        </div>
        <h5>#2762</h5>
        <hr>
        <div class="row">
             <div class="col-4">
            <p class="card-text">Nome do profissional: Charlie</p>  
        </div>
             <div class="col-4">
            <p class="card-text">Tipo do serviço: Cuidador Infantil</p>
        </div>
        <div class="col-4">
                  <button type="button" class="btn btn-primary  btn-sm ml-5">Ver detalhes</button>
              </div>
        </div>
    </div>
</div>
<div class="card my-5 ml-5 rounded-0" style=" width: 890px; height: 10%;">
    <div class="card-body float-left">
        <div class="spinner-border text-primary float-right" role="status">
        </div>
        <h5>#2763</h5>
        <hr>
        <div class="row">
             <div class="col-4">
            <p class="card-text">Nome do profissional: Delta</p>  
        </div>
             <div class="col-4">
            <p class="card-text">Tipo do serviço: Cuidador de Idoso</p>
        </div>
        <div class="col-4">
                  <button type="button" class="btn btn-primary  btn-sm ml-5">Ver detalhes</button>
              </div>
        </div>
    </div>
</div>

<!-- Inclusão da FOOTER do sistema -->
<?php require_once 'includes/footer.php'; ?>