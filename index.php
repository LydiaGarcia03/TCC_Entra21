<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>HCD | Página Inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link href="media/css/custom/index.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <div class="container">

            <a href="index.php" class="navbar-brand h1 mb-0"><i class="fas fa-laptop-medical pr-2"></i>HCDigital</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ml-5" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a href="quem_somos.php" class="nav-link">QUEM SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="faq.php" class="nav-link">DÚVIDAS</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog.php" class="nav-link">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php#tbConosco" class="nav-link">TRABALHE CONOSCO</a>
                    </li>
                </ul>
            </div>
            
            <a href="login.php" class="btn btn-outline-light btn-sm mr-3">Login</a>
            <a href="cadastro_usuario.php" class="btn btn-outline-light btn-sm">Cadastro</a>

        </nav>

        <!-- CARROSEL -->
        <div id="carouselsite" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
                <li data-target="#carouselsite" data-slide-to="0" class="active"></li>
                <li data-target="#carouselsite" data-slide-to="1"></li>
                <li data-target="#carouselsite" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="media/img/elders-01.jpg" class="img-fluid d-block"  alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="media/img/elders-02.jpg" class="img-fluid d-block"  alt="">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="carousel-item">
                    <img src="media/img/elders-03.jpg" class="img-fluid d-block"  alt="">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet</p>
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

        <div class="container bg-white">
            <div class="row ">
                <div class="col-12 text-center my-5">
                    <h3 class="mb-5">COMO FUNCIONA</h3>            
                </div>
                <div class="row mb-4">
                    <div class="col-6">
                        <img src="media/img/dashboard.jpeg" alt="" style="width: 500px;">
                    </div>
                    <!-- Texto Por que criamos o HCDigital -->
                    <div class="col-6 ">
                        <h2 class="py-3">Pensando no futuro</h2>
                        
                        Home Care Digital é uma plataforma que, por meio da tecnologia promove a contração entre prestador de saúde e pessoas que busca profissionais na sua região para apoio no cuidado de seus entes queridos em domicilio, profissionais como: Téc. de Enfermagem, Aux. de Enfermagem, Enfermeiros(a), Cuidador(a) de Idosos, Cuidador(a) de Crianças e serviços pós operatórios para um atendimento em domicílio imediato ou programado.
                    </div>
                </div>
            </div>
        </div>


        <div class="container servicos">
            <div class="row m-5">
                <div class="col-12 text-center my-5">

                    <h2 class="mb-5">PROFISSINAIS</h2>

                    <div class="row justify-content-sm-center">
                        <div class="col-sm-6 col-md-4">
                            <div class="card mb-5">
                                <div class="mx-auto">
                                    <img src="media/img/gravida.png" alt="" class="card-top w-50">
                                </div>

                                <div class="card-body">
                                    <h4 class="card-title">Cuidador(a) de crianças</h4>
                                    <p class="card-text">Auxilia mães e pais com seus bebês.</p>
                                </div>

                                <a href="#" class="card-link btn btn-primary rounded-bottom" data-toggle="modal" data-target="#siteModal-01">Ver mais</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="card mb-5">
                                <div class="mx-auto">
                                    <img src="media/img/cadeirante.png" alt="" class="card-top w-50">
                                </div>

                                <div class="card-body">
                                    <h4 class="card-title">Profissionais de saúde</h4>
                                    <p class="card-text">Aux. de enfermagem, Téc.(a) de enfermagem, Enfermeiro(a).</p>
                                </div>

                                <a href="#" class="card-link btn btn-primary rounded-bottom" data-toggle="modal" data-target="#siteModal-02">Ver mais</a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="card mb-5">
                                <div class="mx-auto">
                                    <img src="media/img/medica.png" alt="" class="card-top w-50">
                                </div>

                                <div class="card-body">
                                    <h4 class="card-title">Cuidador(a) de idosos </h4>
                                    <p class="card-text">Esse serviço e para pessoas idosas que precisam de cuidados especiais.</p>
                                </div>

                                <a href="#" class="card-link btn btn-primary rounded-bottom" data-toggle="modal" data-target="#siteModal-03">Ver mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TRABALHE CONOSCO -->
        <div class="jumbotron jumbotron-fluid bg-primary mt-5" id="tbConosco">
            <div class="row text-white text-left">
                <div class="container  py-3">
                    <div class="col-lg-8 float-left ">
                        <h3 class="py-1">QUER FAZER PARTE DA EQUIPE HCDIGITAL?<br /> JUNTE-SE A NÓS!</h3>
                        <p class="py-3">Você define os seus horários e dias de atendimento,<br />com total controle sobre a sua
                        agenda.</p>
                        <div class="text-center">
                            <div class="col-md-3 mb-1 float-left mr-5">
                                <span class="fa-stack fa-3x">
                                    <i class="fas fa-circle fa-stack-2x "></i>
                                    <i class="fas fa-clipboard-list fa-stack-1x fa-inverse text-primary"></i>
                                </span>
                                <p class="text-white mt-2">Cadastro <br /> cadastre seus dados</p>                           
                            </div>
                            <div class="col-md-3 mb-1 float-left mr-5">
                                <span class="fa-stack fa-3x">
                                    <i class="fas fa-circle fa-stack-2x "></i>
                                    <i class="fas fa-user-friends fa-stack-1x fa-inverse text-primary"></i>
                                </span>
                                <p class="text-white mt-2"> Aprovação <br/>analisaremos cuidadosamente dados</p>
                            </div>
                            <div class="col-md-3 mb-1 float-left mr-5">
                                <span class="fa-stack fa-3x">
                                    <i class="fas fa-circle fa-stack-2x "></i>
                                    <i class="fas fa-user-friends fa-stack-1x fa-inverse text-primary"></i>
                                </span>
                                <p class="text-white mt-2">OK <br />Já pode trabalhar na plataforma</p>
                            </div>
                            <a href="cadastro_cuidador.php" class="btn btn-lg btn-light mt-4 px-5 py-2 text-center text-dark">Quero trabalhar na HCDigital</a>
                        </div>
                    </div>

                    <div class="col-lg-3 float-left my-auto">
                        <img src="img/equipe.jpg" alt="" class="mt-4">
                    </div>
                </div>
            </div>
        </div>

       



        <!-- Formulario -->

        <div class="container mt-5">
            <div class="row">
                <div class="col-12 text-center">
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
                                <textarea style="resize: none;" class="form-control" id="inputMsg" rows="8"
                                placeholder="Como podemos ajudar?"></textarea>
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

        <!-- Copyright -->

        <footer class="btn-primary text-white py-2 mt-4">
            <div class="container">
                <div class="footer-copyright text-center py-3"> HCDigital © 2019 Copyright</div>
            </div>
        </footer>

        <!-- modal 01 -->
        <div class="modal fade" id="siteModal-01" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Cuidador infantil</h5>
                        <button class="close" type="button" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2></h2>
                        <p></p>

                        <ul>
                            <li>Acompanhamento a exames</li>
                            <li>Acompanhamento a passeios</li>
                            <li>Acompanhamentos em Hospitais e Clínicas </li>
                            <li>Atendimento Diário (Até 12 horas)</li>
                            <li>Cuidados com a higiene</li>
                            <li>Conforto e alimentação </li>
                            <li>Observar possíveis alterações no estado geral da criança </li>
                            <li>Zelar pela integridade física</li>
                            <li>Prestar primeiros socorros </li>
                            <li>Promover atividades lúdicas e de entretenimento</li>
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal 02-->
        <div class="modal fade" id="siteModal-02" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Profissionais de saúde</h5>
                        <button class="close" type="button" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>Auxiliar de enfermagem</h2>
                        <p>O Auxiliar de enfermagem ele está apto a realizar curativos, aplicar vacinas, injeções, administrar medicamentos, higienizar o paciente, alimentá-lo, entre outras atividades de baixa complexidade.</p>

                        <h3>Alguns Serviços</h3>

                        <ul>
                            <li>companhamento a exames</li>
                            <li>Acompanhamento a passeios</li>
                            <li>Acompanhamentos em internações de Hospitais, Clínicas e Instituição de Longa Permanência ILPIs </li>
                            <li>Atendimento Diário (Até 12 horas)</li>
                            <li>Administração de medicamentos (somente com prescrição médica)</li>
                            <li>Banho, higiene e conforto </li>
                            <li>Monitoramento dos sinais vitais (temperatura, pressão arterial, batimentos cardíacos, frequência respiratória)</li>
                            <li>Teste de Glicose</li>
                            <li>Nebulização</li>
                            <li>Cuidados pós-operatórios </li>
                            <li>Curativos Simples</li>
                        </ul>
                        <p>Administração de medicamentos somente com prescrição médica</p>

                        <h2>Técnico(a) de enfermagem</h2>
                        <p></p>

                        <h3>Alguns Serviços</h3>

                        <ul>
                            <li>Acompanhamento a exames</li>
                            <li>Acompanhamento a passeios</li>
                            <li>Acompanhamentos em internações de Hospitais, Clínicas e Instituição de Longa Permanência ILPIs</li>
                            <li>Atendimento Diário (Até 12 horas)</li>
                            <li>Administração de medicamentos (somente com prescrição médica)</li>
                            <li>Banho, higiene e conforto</li>
                            <li>Monitoramento dos sinais vitais (temperatura, pressão arterial, batimentos cardíacos, frequência respiratória) </li>
                            <li>Teste de Glicose</li>
                            <li>Nebulização</li>
                            <li>Prevenção de escaras</li>
                            <li>Cuidados  pós-operatórios</li>
                            <li>Higienização e cuidados com sondas, traqueostomia, ostomias</li>
                            <li>Curativo de ferida aberta </li>
                            <li>Curativo de ferida operatória</li>
                            <li>Administração dieta enteral</li>
                            <li>Cuidados com a pele ao redor da gastrostomia</li>
                            <li>Esvaziamento e higienização da bolsa de colostomia e ileostomia</li>
                            <li>Cuidados com sonda vesical de demora</li>
                        </ul>
                        <p>Administração de medicamentos somente com prescrição médica</p>

                        <h2>Enfermeiro(a)</h2>
                        <p></p>

                        <h3>Alguns Serviços</h3>

                        <ul>
                            <li>Acompanhamento a exames </li>
                            <li>Acompanhamento a passeios </li>
                            <li>Acompanhamentos em internações de Hospitais, Clínicas e e Instituição de Longa Permanência ILPIs </li>
                            <li>Atendimento Diário (Até 12 horas) </li>
                            <li>Administração de medicamentos (somente com prescrição médica) </li>
                            <li>Banho, higiene e conforto </li>
                            <li>Monitoramento dos sinais vitais (temperatura, pressão arterial, batimentos cardíacos, frequência respiratória) </li>
                            <li>Teste de Glicose </li>
                            <li>Nebulização</li>
                            <li>Tratamento e prevenção de escaras</li>
                            <li>Cuidados pós-operatórios </li>
                            <li>Cuidados pós-operatórios </li>
                            <li>Prevenção de queda</li>
                            <li>Prevenção de lesão por pressão</li>
                            <li>Administração dieta enteral  </li>
                            <li>Cuidados com a pele ao redor da gastrostomia</li>
                            <li>Esvaziamento e higienização da bolsa de colostomia e ileostomia </li>                           
                        </ul>
                        


                    </div>
                    <div class="modal-footer">
                        <p>Administração de medicamentos somente com prescrição médica</p>
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal 03-->
        <div class="modal fade" id="siteModal-03" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Cuidador de idosos</h5>
                        <button class="close" type="button" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p></p>

                        <ul>
                            <li>Acompanhamento a exames </li>
                            <li>Acompanhamento a passeios </li>
                            <li>Acompanhamentos em internações de Hospitais, Clínicas e Geriatrias</li>
                            <li>Atendimento Diário (Até 12 horas) </li>
                            <li>Fazer companhia</li>
                            <li>Dar remédios de acordo com a prescrição médica</li>
                            <li>Cuidar da higiene pessoal do acompanhado</li>
                            <li>Servir e auxiliar nas refeições </li>
                            <li>Levar o acompanhado para exercícios físicos e passeios autorizados pelo médico e/ou pela família </li>
                            <li>Levar o acompanhado a consultas médicas, fisioterapia, etc…</li>
                            <li>Prezar pelo bem-estar e lazer do acompanhado </li>
                            <li>Prestar auxílio em tarefas cotidianas do acompanhado </li>
                            <li>Observar por possíveis problemas de saúde e conhecer os procedimentos requeridos em cada caso </li>
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/635b697ad0.js"></script>
    </body>

    </html>