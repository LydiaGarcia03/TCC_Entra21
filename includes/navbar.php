<?php
    
    require_once 'classes/site.class.php';

    $site = new Site();

?>

<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(30, 144, 255);">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard_contratante.php">
        <div class="sidebar-brand-icon">
            <i class="fas fa-laptop-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">HCDigital</div>
    </a>

    <!-- Divisor -->
    <hr class="sidebar-divider my-0">

    <!-- Perfil Info -->
    <div class="text-center text-white my-3">
        <img src="media/img/img-04.jpeg" class="rounded-circle profile-img d-inline" id="profile-img">
        <p class="mb-0 mt-2"><?=$_SESSION['nome_usuario']?></p>
    </div>

    <?php if($site->session_type() == 'contratante'){ ?>
    <div class="text-center my-3">
        <li class="nav-item">
            <small>
                <a href="dashboard_contratante.php" class="nav-link text-center p-0">
                    <i class="far fa-fw fa-edit"></i>
                    <span>Dashboard Contratante</span>
                </a>
            </small>
        </li>
    </div>
    <?php } ?>

    <?php if($site->session_type() == 'cuidador'){ ?>
    <div class="text-center my-3">
        <li class="nav-item">
            <small>
                <a href="dashboard_cuidador.php" class="nav-link text-center p-0">
                    <i class="far fa-fw fa-edit"></i>
                    <span>Dashboard Cuidador</span>
                </a>
            </small>
        </li>
    </div>
    <?php }?>

    <div class="text-center my-3">
        <li class="nav-item">
            <small>
                <a href="editar_perfil.php" class="nav-link text-center p-0">
                    <i class="far fa-fw fa-edit"></i>
                    <span>Editar perfil</span>
                </a>
            </small>
        </li>
    </div>

    <?php if($site->session_type() == 'contratante'){ ?>
    <div class="text-center my-3">
        <li class="nav-item">
            <a href="solicitar_servico.php" class="nav-link text-center p-0">
                <i class="far fa-fw fa-comments"></i>
                <span>Solicitar Serviço</span>
            </a>
        </li>
    </div>
    <?php } ?>

    <?php if($site->session_type() == 'cuidador'){ ?>
    <div class="text-center my-3">
        <li class="nav-item">
            <a href="servicos_disponiveis.php" class="nav-link text-center p-0">
                <i class="far fa-fw fa-comments"></i>
                <span>Serviços Disponíveis</span>
            </a>
        </li>
    </div>
    <?php } ?>

    <div style="bottom: 0px">
        <li class="nav-item no-arrow mb-0">
            <a href="index.php" class="nav-link text-center" data-dismiss = 'modal'>
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Sair</span>
            </a>
        </li>
    </div>

</ul>

<!-- Inicio do Conteudo da Página -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Notificações -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow mx-auto">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                </a>
                
            </li>
        </ul>
    </nav>