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
        <div class="col-sm card my-5 ml-5 rounded-0" style=" width: 890px; height: 10%;">
        <div class="card-body float-left">
            <div class="spinner-border text-danger float-right" role="status">
        </div>
            <h5>#2760</h5>
            <hr>
            <div class="row">
                <div class="col-4">
                    <p class="card-text mr-5">Nome do pasciente: Alpha</p>  
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
  <div class="col-sm card my-5 ml-5 rounded-0" style=" width: 890px; height: 10%;">
    <div class="card-body float-left">
        <div class="spinner-border text-primary float-right" role="status">
        </div>
        <h5>#2760</h5>
        <hr>
        <div class="row">
             <div class="col-4">
            <p class="card-text">Nome do pasciente: Beta</p>  
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
<div class="col-sm card my-5 ml-5 rounded-0" style=" width: 890px; height: 10%;">
    <div class="card-body float-left">
        <div class="spinner-border text-danger  float-right" role="status">
        </div>
        <h5>#2760</h5>
        <hr>
        <div class="row">
             <div class="col-4">
            <p class="card-text">Nome do pasciente: Charlie</p>  
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
<div class="col-sm card my-5 ml-5 rounded-0" style=" width: 890px; height: 10%;">
    <div class="card-body float-left">
        <div class="spinner-border text-primary float-right" role="status">
        </div>
        <h5>#2760</h5>
        <hr>
        <div class="row">
             <div class="col-4">
            <p class="card-text">Nome do pasciente: Delta</p>  
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




<!-- SCRIPT PARA CONVERTER DEPOIS... -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid' ],
            defaultView: 'dayGridMonth',
            fixedWeekCount: Boolean, default: true,
            height: 370,
            contentHeight: 4,
            locale: 'pt',
            events: [{
                id: 1,
                title: 'Serviço',
                start: new Date(2019, 8, 11),
                allDay: false,
                className: 'info'
            }],
            header: {
                center: '',
                right: 'today, prev, next'
            }

        });

        calendar.render();
    });
</script>

<?php // Inclusão da FOOTER do sistema ?>
<?php require_once('includes/footer.php'); ?>