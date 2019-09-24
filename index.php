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

        <div class="container text-center m-5">
            <div class="row col-8">
                <div class="sobre">
                    <h2>SOBRE</h2> 
                    <p class="mt-4">
                        Home Care Digital é uma plataforma que, por meio da tecnologia auxilia as pessoas na busca por profissionais de saúde para apoio no cuidado de seus entes queridos em domicilio, para um atendimento em domicílio imediato ou programado.  
                    </p>
                </div>              
            </div>
        </div>

        <div class="container text-center m-5">
            <h2 class="m-4">PROFISSIONAIS</h2>
            <div class="row">                   
              <div class="col-sm-4">
                <div class="card">
                    <img src="media/img/blog-1.jpg" class="rounded p-3">
                    <div class="card-body">
                        <h5 class="card-title">Cuidador(a) de crianças</h5>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="media/img/blog-2.jpg" class="rounded p-3">
                    <div class="card-body">
                        <h5 class="card-title">Profissionais de saúde</h5>

                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <img src="media/img/blog-3.jpg" class="rounded p-3">
                    <div class="card-body">
                        <h5 class="card-title">Cuidador(a) de idosos</h5>             
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center m-5">
        <h2 class="m-5">COMO FUNCIONAR</h2>
        <div class="row">
            <div class="col-12 text-center">

                <ul class="nav nav-pills justify-content-float mb-5" id="pills-nav" role="tablist">
                    <li class="nav-item col-sm-6">
                        <a class="nav-link active" id="nav-pills-01" data-toggle="pill" href="#nav-item-01">USUÁRIO</a>
                    </li>
                    <li class="nav-item col-sm-6">
                        <a class="nav-link" id="nav-pills-02" data-toggle="pill" href="#nav-item-02">PROFISSIONAIS</a>
                    </li>                    
                </ul>
                <div class="tab-content" id="nav-pills-content">
                    <div class="tab-pane fade show active" id="nav-item-01" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <i class="far fa-address-book fa-4x"></i>
                                    <h4>What is Lorem Ipsum?</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4 mt-md-0">
                                <i class="far fa-address-book fa-4x"></i>
                                <h4>What is Lorem Ipsum?</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <i class="far fa-address-book fa-4x"></i>
                                    <h4>What is Lorem Ipsum?</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4 mt-md-0">
                                <i class="far fa-address-book fa-4x"></i>
                                <h4>What is Lorem Ipsum?</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-item-02" role="tabpanel">
                        <div class="row">
                            <div class="col-sm-6">
                                <div>
                                    <i class="far fa-address-book fa-4x"></i>
                                    <h4>What is Lorem Ipsum?</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4 mt-md-0">
                                <i class="far fa-address-book fa-4x"></i>
                                <h4>What is Lorem Ipsum?</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 border ">
                                <div ">
                                    <i class="far fa-address-book fa-4x"></i>
                                    <h4>What is Lorem Ipsum?</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4 mt-md-0 ">
                                <i class="far fa-address-book fa-4x"></i>
                                <h4>What is Lorem Ipsum?</h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
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