<?php

require_once "classes/site.class.php";
$site = new Site();

if($site->session_error() == 0){
    // header('Location: error.php');
    echo 'droga';
    var_dump($_SESSION['tipo_usuario']);
}

?>
<?php // Inclusão do HEADER do sistema ?>
<?php require_once('includes/header.php'); ?>
<?php // Inclusão da NAVBAR lateral do sistema ?>
<?php require_once('includes/navbar.php'); ?>

    <div id="content">

        <!-- Begin Page Content -->
        <div class="container">
            <div class="card my-5 ml-5" style=" width: 890px; height: 25%;">
                
                <div class="card-body float-left">
                	<h5>#ID</h5>
                	<hr>
                    <i class="far fa-user-circle fa-3x float-right mr-5"></i>
                     <p class="card-text">Nome do pasciente:</p>
                    <p class="card-text">Tipo do serviço:</p>
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