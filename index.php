<?php 

    require_once 'includes/startfile.php'; 

    require_once 'classes/logout.class.php';
    $logout = new Logout();
?>

<title>HCD | Página Inicial</title>
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3" id="navbar">
        <a href="index.php" class="navbar-brand h1 m-0 ml-5">Home Care Digital</a>
        <div class="container">

            <button class="col- navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#sobre" class="nav-link">SOBRE</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#servico" class="nav-link">SERVIÇOS</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#como-funcionar" class="nav-link">COMO FUNCIONAR</a>
                    </li>
                    <li class="nav-item active">
                        <a href="#faq" class="nav-link">DÚVIDAS</a>
                    </li>
                    <li class="nav-item active">
                        <a href="blog.php" class="nav-link">BLOG</a>
                    </li>
                    <li class="nav-item active">
                        <a href="cadastro_cuidador.php" class="nav-link">TRABALHE CONOSCO</a>
                    </li>
                </ul>


                <div id="btns1">
                    <a href="login.php" class="col-sm- btn btn-outline-light btn-sm mr-3">Login</a>
                </div>
                <div id="btns2">
                    <a href="cadastro_usuario.php" class="col-sm- btn btn-outline-light btn-sm">Cadastro</a>
                </div>
            </div>

    </nav>

    <!-- CARROSEL -->
    <div id="carouselsite" class="carousel slide " data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselsite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselsite" data-slide-to="1"></li>
            <li data-target="#carouselsite" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="media/img/cuidado_em_domicilio.jpg" class="img-fluid d-block" alt="Primeiro_Slide">
                <div class="carousel-caption d-none d-md-block text-right pr-5">
                    <h2>Cuidados domiciliares</h2>
                    <p>Aumenta a confiança e melhoram sintomas dos pacientes</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="media/img/vida.jpg" class="img-fluid d-block" alt="Segundo_Slide">
                <div class="carousel-caption d-none d-md-block text-right pr-5">
                    <h2>Facilidade para contratação</h2>
                    <p>Usuários do site encontram cuidadores mais facilmente</p>
                </div>
            </div>


            <div class="carousel-item">
                <img src="media/img/elders-03.jpg" class="img-fluid d-block" alt="Terceiro_Slide">
                <div class="carousel-caption d-none d-md-block text-right pr-5">
                    <h2>domiciliares</h2>
                    <p>Aumenta a confiança e melhoram sintomas dos pacientes</p>
                </div>
            </div>

        </div>
        <a href="#carouselsite" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#carouselsite" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>


    <!-- Por que criamos -->

    <section class="p-5">
        <div class="container text-center">
            <div class="row col-8">
                <div class="mt-2" id="sobre">
                    <h2>SOBRE</h2>
                    <p>
                        Home Care Digital é uma plataforma que, por meio da tecnologia
                        auxilia as pessoas na busca por profissionais de saúde para apoio no
                        cuidado de seus entes queridos em domicilio, para um atendimento em domicílio imediato ou programado.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="servico">
        <div class="container text-center bg-white rounded">
            <h2 class="p-4 ">PROFISSIONAIS</h2>
            <div class="row col-12 pb-5">
                <div class="col-sm-4 ">
                    <div class="card shadow">
                        <img src="media/img/cuidador_infantil.jpg" style="width: 330px" class=" ">
                        <div class="card-body">
                            <h5 class="card-title">Cuidador(a) de crianças</h5>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow">
                        <img src="media/img/enfermeiro.jpg" style="width: 330px" class="">
                        <div class="card-body">
                            <h5 class="card-title">Profissionais de saúde</h5>

                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow">
                        <img src="media/img/cuidador-de-idosos.jpg" style="width: 330px" class="">
                        <div class="card-body">
                            <h5 class="card-title">Cuidador(a) de idosos</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="como-funcionar">
        <div class="container text-center bg-white ">
            <h2 class="p-4">COMO FUNCIONAR</h2>
            <div class="row pb-5 ">
                <div class="col-12 text-center p-3 ">

                    <ul class="nav nav-pills justify-content-float  mb-5 p-2 h3" id="pills-nav" role="tablist">
                        <li class="nav-item  col-sm-6">
                            <a class="nav-link  active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">USUÁRIO</a>
                        </li>
                        <li class="nav-item col-sm-6">
                            <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">PROFISSIONAIS</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="nav-pills-content">
                        <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <div class="">
                                        <i class="fas fa-users fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                        <h4>1. Cadastro</h4>
                                        <p class="mb-5">Crie uma conta, rapido e simple.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4  mt-md-0">
                                    <i class="fas fa-desktop fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                    <h4>2. Acesso a plataforma</h4>
                                    <p class="mb-5">Após receber e-mail de confimação, acesse a plataforma.</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <div class="">
                                        <i class="fas fa-search fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                        <h4>3. Pesquise por profissionais</h4>
                                        <p class="mb-5">Escolhe o tipo de atendimento que precisa, preenche o CEP do local do atendimento,
                                            e então a plataforma irá te apresentar as opções de profissionais disponíveis perto de você.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4  mt-md-0">
                                    <i class="fas fa-comments fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                    <h4>4. Agendamento</h4>
                                    <p class="mb-5">Escolha local, data e horário do serviço.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 mb-5">
                                    <div>
                                        <i class="fas fa-users fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                        <h4>1. Cadastro</h4>
                                        <p>Crie uma conta, rapido e simple.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-5 mt-4 mt-md-0">
                                    <i class="fas fa-search fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                    <h4>2. Analise de documentos</h4>
                                    <p>A equipe da Home Care Digital analisa cuidadosamente os dados informado por você.</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6 mb-4">
                                    <div>
                                        <i class="fas fa-thumbs-up fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                        <h4>3. Acesso ao usuário</h4>
                                        <p>Depois de analise de dados, os cliente passar ater acessa ou seu perfi.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-4  mt-md-0 ">
                                    <i class="far fa-address-book fa-4x mb-3 text-primary mt-5"></i>
                                    <h4>4. Solicitação de serviço</h4>
                                    <p>O cliente entra em contato com o profissional, combina as condições do trabalho e agenda o atendimento.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container bg-white" id="faq">
            <div class="row m-5 ">
                <!-- ***** FAQ Start ***** -->
                <div class="col-12 ">

                    <div class=" text-center mt-5 mb-4">
                        <h2>DÚVIDAS</h2>
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="faq" id="accordion">
                        <div class="card">
                            <div class="card-header bg-primary" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">1</span>O que é Home Care Digital?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Home Care Digital é uma plataforma que, por meio da tecnologia auxilia as pessoas na busca por profissionais de saúde para apoio no cuidado de seus entes queridos em domicilio.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">2</span>Como me cadastrar?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Clique em cadastro e insira seus dados no campo CRIAR UMA CONTA. Não leva mais do que 2 minutos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">3</span>Como pedir um profissional?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Informe o endereço onde precisa receber um o profissional, a especialidade desejada do profissional. Logo após, selecione  agende data e hora de acordo com sua disponibilidade.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">4</span> Qual o valor do serviços?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>O valor varia de profissional para profissional e disponibilidade do mesmo selecionado. O próprio Profissional é quem determina os valores dos seu serviço.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">5</span> Como é realizado o pagamento?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p> O pagamento é realizado diretamente ao profissional. </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq" id="accordion">
                        <div class="card ">
                            <div class="card-header bg-primary" id="faqHeading-6">
                                <div class="mb-0">
                                    <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="true" data-aria-controls="faqCollapse-6">
                                        <span class="badge">6</span> Quais documentos necessário para o cadastro?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                <div class="card-body">
                                    <p>É necessário o anexo de documento de identificação com foto (RG ou carteira de motorista) frente e verso, dos diplomas e certificados de especialização, caso os tenha.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary" id="faqHeading-7">
                                <div class="mb-0">
                                    <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                        <span class="badge">7</span> O que acontecerá depois do cadastro efetuado?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Seu perfil será analisado pela nossa equipe, para que então seja aprovado ou não.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary" id="faqHeading-8">
                                <div class="mb-0">
                                    <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-8" data-aria-expanded="false" data-aria-controls="faqCollapse-8">
                                        <span class="badge">8</span>Quanto tempo leva até a ativação do cadastro?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A ativação do cadastro pode levar até 48 horas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary" id="faqHeading-9">
                                <div class="mb-0">
                                    <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-9" data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                                        <span class="badge">9</span>Pode entrar em contato com o solicitante?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Sim. O profissional receberá o telefone de contato do solicitante e, caso seja necessário, podera entra em contato.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header bg-primary" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="false" data-aria-controls="faqCollapse-10">
                                        <span class="badge">10</span> Como é feito o pagamento?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p> O pagamento é feito direta a você pelo solicitante do serviço.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Formulario -->

    <section class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center pt-4">
                    <h1 class="display-5"><i class="fas fa-paper-plane text-primary" aria-hidden="true"></i> CONTATO</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputNome">Nome</label>
                                <input class="form-control" id="inputNome" type="text" placeholder="Nome">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input class="form-control" id="V" type="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="inputTel">Telefone</label>
                                <input class="form-control" id="inputTel" type="tel" placeholder="Telefone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputMsg">Mensagem</label>
                                <textarea style="resize: none;" class="form-control" id="inputMsg" rows="8" placeholder="Como podemos ajudar?"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <div class="form-check">
                                    <label class="custom-form-label">
                                        <input type="checkbox" class="custom-form-input" name=""> Desejo receber novidades por e-mail
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <button class="btn btn-primary btn-lg">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                Copyright &copy; HCDigital 2019
            </div>
        </div>
    </footer>

    <?php require_once 'includes/endfile.php'; ?>