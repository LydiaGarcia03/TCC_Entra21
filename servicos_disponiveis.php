<?php 

require_once "classes/site.class.php";
$site = new Site();

if(!$site->session_error()){
		// header('Location: error.php');
}

?>
<?php // Inclusão do HEADER do sistema ?>
<?php require_once('includes/startfile.php'); ?>
<body id="page-top">
  <div id="wrapper">
<?php // Inclusão da NAVBAR lateral do sistema ?>
<?php require_once('includes/navbar.php'); ?>
<!--linkando css -->
<link rel="stylesheet" type="text/css" href="media/css/custom/servicos_disponiveis.css">

<div id="content">
    <!-- Button TopPage -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>

    <!-- Tabela -->
    <table class="table table-hover">
        <thead>
            <tr class="my-auto">
                <th class="py-0">Nome</th>
                <th class="py-0">Tipo de Serviço</th>
                <th class="py-0">Carga Horaria</th>
                <th class="py-0">Dia</th>
                <th class="py-0">Funcionarios<br>necessitados</th>
                <th class="py-0">Funcionarios<br>aceitos</th>
                <th class="py-0"></th>
            </tr>
        </thead>

        <tbody>
            <!-- Visible -->
            <tr id="tr_visible">
                <td>Alpha</td>
                <td>Cuidado Infantil</td>
                <td>4h</td>
                <td>20/10</td>
                <td>Cuidador infantil</td>
                <td>3/5</td>
                <td> 
                    <button type="button" class="btn btn-outline-info" onclick="mostrar_abas(this);" class="mostra_aba1">Mais</button>  
                    <button type="button" class="btn btn-outline-success">Aceitar</button> 
                </td>
            </tr>

            <!-- Hidden -->
            <tr class="tr_hidden" style="display: none;">
                <td>Hipertenso: sim</td>
                <td>Diabético: não</td>
                <td>Descrição:
                Aqui devera ficar as informações sobre o "paciente" dentro delas algumas observações</td>
            </tr>

                <!-- Visible -->
                <tr id="tr_visible">
                    <td>Beta</td>
                    <td>Cuidado Infantil</td>
                    <td>8h</td>
                    <td>20/10</td>
                    <td>Cuidador infantil</td>
                    <td>2/3</td>
                    <td> 
                        <button type="button" class="btn btn-outline-info" onclick="mostrar_abas(this);" id="mostra_aba2">Mais</button> 
                        <button type="button" class="btn btn-outline-success">Aceitar</button> 
                    </td>
                </tr>

                <!-- Hidden -->
                <tr id="tr_hidden" style="display: none;">

                    <td>Hipertenso: sim</td>
                    <td>Diabético: não</td>
                    <td colspan="5">
                        <strong>Descrição:</strong> 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </td>
                </tr>

                <!-- Visible -->
                <tr id="tr_visible">
                    <td>Charlie</td>
                    <td>Cuidado Infantil</td>
                    <td>12h</td>
                    <td>20/10</td>
                    <td>Cuidador infantil</td>
                    <td>4/5</td>
                    <td> 
                        <button type="button" class="btn btn-outline-info" onclick="mostrar_abas(this);" id="mostra_aba3">Mais</button> 	 
                        <button type="button" class="btn btn-outline-success">Aceitar</button> 
                    </td>
                </tr>

                <!-- Hidden -->
                <tr id="tr_hidden" style="display: none;">

                    <td>Hipertenso: sim</td>
                    <td>Diabético: não</td>
                    <td colspan="5">
                        <strong>Descrição:</strong> 
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>

        function mostrar_abas(obj) {
            document.getElementsByClassName('tr_hidden').style.display = "none";
            // document.getElementById('div_aba2').style.display = "none";
            // document.getElementById('div_aba3').style.display = "none";

            switch (obj.class) {
                case 'mostra_aba1':
                document.getElementById('div_aba1').style.display = "block";
                break;
                case 'mostra_aba2':
                document.getElementById('div_aba2').style.display = "block";
                break;
                case 'mostra_aba3':
                document.getElementById('div_aba3').style.display = "block";
                break;
            }
        }

    </script>

    <?php // Inclusão da FOOTER do sistema ?>
    <?php require_once('includes/footer.php'); ?>