<?php
    session_start();


?>

<!-- Sidebar -->
<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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
        <p class="mb-0 mt-2">Nome</p>
    </div>

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

    <div class="text-center my-3">
        <li class="nav-item">
            <a href="solicitar_servico.php" class="nav-link text-center p-0">
                <i class="far fa-fw fa-comments"></i>
                <span>Solicitar Serviço</span>
            </a>
        </li>
    </div>

    <div class="text-center my-3">
        <li class="nav-item">
            <a href="servicos_disponiveis.php" class="nav-link text-center p-0">
                <i class="far fa-fw fa-comments"></i>
                <span>Serviços Disponíveis</span>
            </a>
        </li>
    </div>

    <div style="bottom: 0px">
        <li class="nav-item no-arrow mb-0">
            <a href="#" class="nav-link text-center" data-toggle="modal" data-target="#logoutModal">
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
                    <i class="fas fa-bell fa-fw"></i>
                    <!-- Contador -->
                    <span class="badge badge-danger badge-counter">+5</span>
                </a>
                <!-- Mensagens -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header bg-primary border-0">Notificações</h6>
                    <a href="#" class="dropdown-item d-flex align-items-center">
                        <i class="fas fa-exclamation-circle text-primary mr-3 fa-3x"></i>
                        <div>
                            <div class="small text-gray-500">
                                Serviço
                            </div>
                            <span class="font-weight-bold">
                                        Você tem uma nova solicitação de serviço
                                    </span>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </nav>