<?php 

	require_once "classes/site.class.php";
	$site = new Site();

	if(!$site->session_error()){
		// header('Location: error.php');
	}

?>
<?php // Inclusão do HEADER do sistema ?>
<?php require_once('includes/header.php'); ?>
<?php // Inclusão da NAVBAR lateral do sistema ?>
<?php require_once('includes/navbar.php'); ?>
<!--linkando css -->
<link rel="stylesheet" type="text/css" href="media/css/custom/servicos_disponiveis.css">

    <div id="content">
        <!-- Button TopPage -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
        <!--Colunas -->
        <table class="table">
            <thead>
                <tr class="my-auto">
                    <th scope="col" class="py-0">Nome</th>
                    <th scope="col" class="py-0">Tipo de Serviço</th>
                    <th scope="col" class="py-0">Carga Horaria</th>
                    <th scope="col" class="py-0">Dia</th>
                    <th scope="col" class="py-0">Funcionarios <br> necessitados</th>
                    <th scope="col" class="py-0">Funcionarios <br> aceitos</th>
                 	<th scope="col" class="py-0">&nbsp</th>
                    <th scope="col" class="py-0">&nbsp</th>
                </tr>
            </thead>
            <tbody>
                <tr id="tr_servico">
                    <th scope="row">Caue</th>
                    <td>Cuidado Infantil</td>
                    <td>4h</td>
                    <td>20/10</td>
                    <td>Funeraria</td>
                    <td>Funeraria</td>
                    <td> <button type="button" class="btn btn-outline-info" onclick="mostrar_abas(this);" id="mostra_aba1">Mais</button>  <button type="button" class="btn btn-outline-success">Aceitar</button> </td>
                    <th scope="col" class="py-0">&nbsp</th>


                    <div id="div_aba1" style="display: none">
                        <p>Hipertenso: Sim </p>
                        <p>Diabético: Nao </p>
                        <p>
                            <strong>Descrição:</strgon> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,.
                            </p>
                        </div>
                    </tr>
                    <tr id="tr_descricao" style="display: none;">
                        <th scope="row">Nathan</th>
                        <td>Cuidado Infantil</td>
                        <td>0h</td>
                        <td>20/10</td>
                        <td>Funeraria</td>
                        <td>Funeraria</td>


                    </tr>

                </tr>
                <tr id="tr_servico">
                    <th scope="row">Nathan</th>
                    <td>Cuidado Infantil</td>
                    <td>8h</td>
                    <td>20/10</td>
                    <td>Funeraria</td>
                    <td>Funeraria</td>
                    <td> <button type="button" class="btn btn-outline-info" onclick="mostrar_abas(this);" id="mostra_aba2">Mais</button> <button type="button" class="btn btn-outline-success">Aceitar</button> </td>
                    <th scope="col" class="py-0">&nbsp</th>

                    <div id="div_aba2" style="display: none">
                        <p>Hipertenso: Sim </p>
                        <p>Diabético: Nao </p>
                        <p><strong>Descrição:</strgon> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,.</p>
                    </div>
                </tr>
            </tr>

            <tr id="tr_servico">
                <th scope="row">Maicon</th>
                <td>Cuidado Infantil</td>
                <td>12h</td>
                <td>20/10</td>
                <td>Funeraria</td>
                <td>Funeraria</td>
                <td> <button type="button" class="btn btn-outline-info" onclick="mostrar_abas(this);" id="mostra_aba3">Mais</button> 	 <button type="button" class="btn btn-outline-success">Aceitar</button> </td>
                <th scope="col" class="py-0">&nbsp</th>

                <div id="div_aba3" style="display: none">
                    <p>Hipertenso: Sim </p>
                    <p>Diabético: Nao </p>
                    <p><strong>Descrição:</strgon> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,.</p>
                </div>
            </tr>
        </tbody>
    </table>
</div>

<script>

    function mostrar_abas(obj) {
        document.getElementById('div_aba1').style.display="none";
        document.getElementById('div_aba2').style.display="none";
        document.getElementById('div_aba3').style.display="none";

        switch (obj.id) {
            case 'mostra_aba1':
                document.getElementById('div_aba1').style.display="block";
                break;
            case 'mostra_aba2':
                document.getElementById('div_aba2').style.display="block";
                break;
            case 'mostra_aba3':
                document.getElementById('div_aba3').style.display="block";
                break;
        }
    }

</script>
<?php // Inclusão da FOOTER do sistema ?>
<?php require_once('includes/footer.php'); ?>