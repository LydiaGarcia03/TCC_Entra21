<?php

    require_once 'includes/startfile.php';

    require_once 'classes/usuario.class.php';
    require_once 'classes/cuidador.class.php';
        
    session_start();

    if($_SESSION['tipo_usuario'] == 'contratante'){

        $usuario_obj = new Usuario();

        $user = $usuario_obj->procuraUsuario();

    }
    elseif($_SESSION['tipo_usuario'] == 'cuidador'){

        $cuidador_obj = new Cuidador();

        $user = $cuidador_obj->procuraCuidador();

    }

?>

    <title>Perfil</title>
</head>

<body id="page-top">
    <div id="wrapper">

<!-- Inclusão da NAVBAR lateral do sistema -->
<?php require_once 'includes/navbar.php'; ?>    

    <div id="content">

        <div class="container-fluid">
            <div class="container">
                <div class="row pt-4 pb-3">
                    <div class="col-12">
                        
                        <h3 class="float-right p-0 m-0 text-uppercase font-weight-bolder">Edição de conta</h3>

                    </div>
                </div>
                
                <hr class="mt-0">

                <div class="row">
                    <div class="col-12">
    
                        <form class="validation">
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control"
                                            placeholder="Nome completo" value="<?=$user['nome_completo']?>" autofocus autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div class="input-group">
                                            <label class="custom-file-label text-secondary" for="c_foto"></label>
                                            <input type="file" class="custom-file-input" name="c_foto" id="c_foto" placeholder="Escolha uma foto de perfil">
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <select class="form-control" name="genero" autofocus>
                                            <option selected disabled>Gênero</option>
                                            <option value="M" <?php if($user['genero'] == 'M'){ echo 'selected'; } ?> >Masculino</option>
                                            <option value="F" <?php if($user['genero'] == 'F'){ echo 'selected'; } ?> >Feminino</option>
                                            <option value="O" <?php if($user['genero'] == 'O'){ echo 'selected'; } ?> >Outros</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">

                                            <?php
                                                $dt_nascimento_sql = $user['dt_nascimento'];
                                                $dt_aux = str_replace('-', '/', $dt_nascimento_sql);
                                                $dt_nascimento = date("d/m/Y", strtotime($dt_aux));
                                            ?>

                                            <input type="text" name="dt_nascimento" id="dt_nascimento" class="form-control"
                                            placeholder="Data de nascimento" value="<?=$dt_nascimento?>" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="email" name="email" id="email" class="form-control"
                                            placeholder="E-mail" value="<?=$user['email']?>" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" name="cep" id="cep" class="form-control"
                                            placeholder="CEP" autofocus autocomplete="off" value="<?=$user['cep']?>" onblur="pesquisacep(this.value);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" name="rua" id="rua" class="form-control"
                                            placeholder="Rua" autofocus disabled autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-label-group">
                                                <input type="text" name="numero_casa" id="numero_casa" class="form-control" 
                                                placeholder="<?=$user['end_numero']?>" minlength="2" maxlength="4">    
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" name="complemento" id="complemento" class="form-control"
                                            placeholder="<?=$user['end_complemento']?>" autofocus autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" name="cidade" id="cidade" class="form-control"
                                            placeholder="Cidade" autofocus disabled autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" name="bairro" id="bairro" class="form-control"
                                            placeholder="Bairro" autofocus disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" name="uf" id="uf" class="form-control"
                                            placeholder="Estado" autofocus disabled autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <?php if($site->session_type() == 'contratante'){ ?>
                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" name="tel_residencial" id="tel_residencial" class="form-control"
                                            placeholder="Telefone residencial" value="<?=$user['tel_res']?>" autocomplete="off">
                                        </div>
                                    </div>
                                    <?php } ?>

                                    <div class="col-md-6">
                                        <div class="form-label-group">
                                            <input type="text" name="tel_celular" id="tel_celular" class="form-control"
                                            placeholder="Telefone celular" value="<?=$user['tel_cel']?>" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <?php if($site->session_type() == 'cuidador'){ ?>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-3 mt-3">
                                        <div class="form-label-group">
                                            <input type="text" name="num_coren" id="num_coren" class="form-control"
                                            placeholder="Número de Coren" value="<?=$cuidador['num_coren']?>" autofocus autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-md-3 mt-3">
                                        <div class="form-label-group">
                                            <input type="text" name="val_hora" id="val_hora" class="form-control"
                                            placeholder="Valor por hora (R$)" value="<?=$cuidador['valor_hora']?>" autofocus autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6 mt-3">
                                        <div class="form-label-group">
                                            <input type="text" name="curso_formacao" id="curso_formacao" class="form-control"
                                            placeholder="Curso de formação" value="<?=$cuidador['curso_formacao']?>" autofocus autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6 mt-3">
                                        <div class="form-label-group">
                                            <input type="text" name="instituicao" id="instituicao" class="form-control"
                                            placeholder="Instituição de formação" value="<?=$cuidador['instituicao']?>" autofocus autocomplete="off">
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <?php } ?>

                            <input type="submit" class="btn btn-primary btn-block mt-5" name="btnEditarPerfil" value="Concluir alterações">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button TopPage -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Footer -->
    <footer class="sticky-footer bg-white mt-4">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                Copyright &copy; HCDigital 2019
            </div>
        </div>
    </footer>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#dt_nascimento').mask('99/99/9999');
            $('#cep').mask('99999-999');
            $('#tel_celular').mask('(99) 9 9999-9999');
            $('#tel_residencial').mask('(99) 9999-9999');
            $('#num_coren').mask('999.999');
        });
    </script>

<?php require_once 'includes/endfile.php'; ?>