<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>HCD | Página Inicial</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS -->
    <link href="media/css/custom/index.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary py-3">
        <div class="container">

            <i class="fas fa-laptop-medical pr-2 fa-4x text-white"></i><a href="index.php" class="navbar-brand h1 m-0">HCDigital</a>
            <button class="col- navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse ml-5" id="navbarSite">
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
            </div>
        <div>
            <a href="login.php" class="col-sm- btn btn-outline-light btn-sm mr-3">Login</a>
            <a href="cadastro_usuario.php" class="col-sm- btn btn-outline-light btn-sm">Cadastro</a>
        </div>
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
                    <img src="media/img/elders-01.jpg" class="img-fluid d-block" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Lorem ipsum dolor</h3>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="media/img/elders-02.jpg" class="img-fluid d-block" alt="">
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h3>Lorem ipsum dolor</h3>
                    <p>Lorem ipsum dolor sit amet</p>
                </div>
                <div class="carousel-item">
                    <img src="media/img/elders-03.jpg" class="img-fluid d-block" alt="">
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

        <section class="p-5">
            <div class="container text-center">
                <div class="row col-8">
                    <div class="mt-5" id="sobre">
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
                        <div class="card shadow-lg">
                            <img src="media/img/blog-1.jpg" class="rounded p-3">
                            <div class="card-body">
                                <h5 class="card-title">Cuidador(a) de crianças</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow-lg">
                            <img src="media/img/blog-2.jpg" class="rounded p-3">
                            <div class="card-body">
                                <h5 class="card-title">Profissionais de saúde</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card shadow-lg">
                            <img src="media/img/blog-3.jpg" class="rounded p-3">
                            <div class="card-body">
                                <h5 class="card-title">Cuidador(a) de idosos</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container bg-white">
                <div class="row col-12"> 
                <div class="row">
                    <hr>

                </div>                   
                    <div class="col-4">
                        
                    </div>
                    
                    <div class="col-4">
                        
                    </div>
                    <div class="col-4">
                        
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
                                            <p class="mb-5">Lorem Ipsum is simply dummy text of the.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-4  mt-md-0">
                                        <i class="fas fa-desktop fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                        <h4>2. Acesso a plataforma</h4>
                                        <p class="mb-5">Lorem Ipsum is simply dummy text of the.</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <div class="">
                                            <i class="fas fa-search fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                            <h4>3. Pesquise por profissionais</h4>
                                            <p class="mb-5">Lorem Ipsum is simply dummy text of the.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-4  mt-md-0">
                                        <i class="fas fa-comments fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                        <h4>4. Agendamento</h4>
                                        <p class="mb-5">Lorem Ipsum is simply dummy text of the.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 mb-5">
                                        <div>
                                            <i class="fas fa-users fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                            <h4>1. Cadastro</h4>
                                            <p>Lorem Ipsum is simply dummy text</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-5 mt-4 mt-md-0">
                                        <i class="fas fa-search fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                        <h4>2. Analise de documentos</h4>
                                        <p>Lorem Ipsum is simply dummy text</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <div>
                                            <i class="fas fa-thumbs-up fa-4x mb-2 text-primary mb-3 mt-5"></i>
                                            <h4>3. Acesso ao usuário</h4>
                                            <p>Lorem Ipsum is simply dummy text</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-4  mt-md-0 ">
                                        <i class="far fa-address-book fa-4x mb-3 text-primary mt-5"></i>
                                        <h4>4. Solicitação de serviço</h4>
                                        <p>Lorem Ipsum is simply dummy text </p>
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

                        <div class=" text-center mb-5">
                            <h2>DÚVIDAS</h2>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="faq" id="accordion">
                            <div class="card">
                                <div class="card-header bg-primary" id="faqHeading-1">
                                    <div class="mb-0">
                                        <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                            <span class="badge">1</span>What is Lorem Ipsum?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="faqHeading-2">
                                    <div class="mb-0">
                                        <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                            <span class="badge">2</span> Where does it come from?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="faqHeading-3">
                                    <div class="mb-0">
                                        <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                            <span class="badge">3</span>Why do we use it?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="faqHeading-4">
                                    <div class="mb-0">
                                        <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                            <span class="badge">4</span> Where can I get some?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="faqHeading-5">
                                    <div class="mb-0">
                                        <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                            <span class="badge">5</span> What is Lorem Ipsum?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
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
                                            <span class="badge">6</span> What is Lorem Ipsum?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="faqHeading-7">
                                    <div class="mb-0">
                                        <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
                                            <span class="badge">7</span> Where does it come from?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="faqHeading-8">
                                    <div class="mb-0">
                                        <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-8" data-aria-expanded="false" data-aria-controls="faqCollapse-8">
                                            <span class="badge">8</span>Why do we use it?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-8" class="collapse" aria-labelledby="faqHeading-8" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="faqHeading-9">
                                    <div class="mb-0">
                                        <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-9" data-aria-expanded="false" data-aria-controls="faqCollapse-9">
                                            <span class="badge">9</span> Where can I get some?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-9" class="collapse" aria-labelledby="faqHeading-9" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header bg-primary" id="faqHeading-10">
                                    <div class="mb-0">
                                        <h5 class="faq-title text-white" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="false" data-aria-controls="faqCollapse-10">
                                            <span class="badge">10</span> What is Lorem Ipsum?
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-10" class="collapse" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                    <div class="card-body">
                                        <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
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

        <!-- Copyright -->

        <footer class="bg-primary text-white py-3 mt-4">
            <div class="container">
                <div class="footer-copyright text-center py-3"> HCDigital © 2019 Copyright</div>
            </div>
        </footer>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/635b697ad0.js"></script>
    </body>

    </html>