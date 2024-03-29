<?php

    require_once 'includes/startfile.php';

    require_once "classes/site.class.php";
    require_once "classes/servico.class.php";

    $site = new Site();

    $servicos = new Servico();
    $servicos = $servicos->listarServicosDisponiveis();

?>
    <title>Serviços</title>
</head>

<body id="page-top">
    
    <div id="wrapper">
        <?php // Inclusão da NAVBAR lateral do sistema ?>
        <?php require_once('includes/navbar.php'); ?>

        <div class="container-fluid">
            <div class="container">
                <div class="row pt-4 pb-3">
                    <div class="col-12">
                        
                        <h3 class="float-right p-0 m-0 text-uppercase font-weight-bolder">Serviços disponíveis</h3>

                    </div>
                </div>
            
                <hr class="mt-0">

                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            
                            <div class="card-body p-0 m-0">
                                <table class="table table-hover table-striped border-0 m-0">
                                    <thead class="py-5">
                                        <tr>
                                            <th class="text-left">Nome</th>
                                            <th class="text-left">Tipo de Serviço</th>
                                            <th class="text-left">Carga</th>
                                            <th class="text-left">Dia</th>
                                            <th class="text-left">Aceites</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach($servicos as $chave => $servico) : ?>
                                            <?php
                                                unset($data);
                                                $explode = explode(',', $servico['dias_servico']);
                                                foreach ($explode as $key => $value) :
                                                    $explode2 = explode('-', $explode[$key]);
                                                    $data[] = $explode2[0] . '/' . $explode2[1];
                                                endforeach;
                                            ?>
                                            <!-- Visible -->
                                            <tr>
                                                <td class="text-left py-4"><?=$servico['nome_paciente']?></td>
                                                <td class="text-left py-4"><?=$servico['tipo_servico']?></td>
                                                <td class="text-center py-4"><?=$servico['qtd_horas_diarias']?>h</td>
                                                <td class="text-left py-4">
                                                    <?php
                                                        foreach ($data as $chave => $dt)
                                                            if ($chave < (count($data)-1))
                                                                echo $dt . ', ';
                                                            else
                                                                echo $dt;
                                                    ?>
                                                </td>
                                                <td class="text-left py-4"><?=$servico['total']?>/<?=$servico['qtd_func_necessarios']?></td>
                                                <td class="text-right py-3">
                                                    <button type="button" class="btn btn-info mostrar_aba mb-1" data-hidden="<?=$chave?>" data-texto="<i class='fas fa-minus'></i>" title="Detalhes">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-success aceitar_servico" data-servico="<?=$servico['id']?>" title="Aceitar serviço">
                                                        <i class="fas fa-check"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Hidden -->
                                            <tr class="<?=$chave?>" style="display: none;">
                                                <td colspan="2" class="text-left">
                                                    <strong>Doença crônica:</strong>
                                                    <?=($servico['doenca_cronica']==1) ? '<i class="fas fa-check text-success pl-2"></i>' : '<i class="fas fa-times text-danger pl-2"></i>'?>
                                                </td>
                                                <td colspan="5" class="text-left">
                                                    <strong>Descrição da doença crônica:</strong>
                                                    <?=($servico['doenca_cronica_descricao']!=null) ? $servico['doenca_cronica_descricao'] : '<i>Não Informada</i>' ?>
                                                </td>
                                            </tr>

                                            <tr class="<?=$chave?>" style="display: none;">
                                                <td colspan="2" class="text-left">
                                                    <strong>Deficiência física:</strong>
                                                    <?=($servico['deficiencia_fisica']==1) ? '<i class="fas fa-check text-success pl-2"></i>' : '<i class="fas fa-times text-danger pl-2"></i>'?>
                                                </td>
                                                <td colspan="5" class="text-left">
                                                    <strong>Descrição da deficiência física:</strong>
                                                    <?=($servico['deficiencia_fisica_descricao']!=null) ? $servico['deficiencia_fisica_descricao'] : '<i>Não Informada</i>' ?>
                                                </td>
                                            </tr>

                                            <tr class="<?=$chave?>" style="display: none;">
                                                <td colspan="2" class="text-left">
                                                    <strong>Doença mental:</strong>
                                                    <?=($servico['deficiencia_mental']==1) ? '<i class="fas fa-check text-success pl-2"></i>' : '<i class="fas fa-times text-danger pl-2"></i>'?>
                                                </td>
                                                <td colspan="5" class="text-left">
                                                    <strong>Descrição da deficiência mental:</strong>
                                                    <?=($servico['deficiencia_mental_descricao']!=null) ? $servico['deficiencia_mental_descricao'] : '<i>Não Informada</i>' ?>
                                                </td>
                                            </tr>

                                            <tr class="<?=$chave?>" style="display: none;">
                                                <td colspan="7" class="text-left">
                                                    <strong>Descrição geral:</strong>
                                                    <?=$servico['descricao_geral']?>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                        <?php if (count($servicos)==0) : ?>
                                            <tr>
                                                <td colspan="7" class="text-center py-4">
                                                    <i class="fas fa-2x fa-frown text-danger mb-3"></i><br>
                                                    Nenhum serviço disponível no momento
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'includes/endfile.php'; ?>

    <script>
        $(document).ready(function() {

            $('.mostrar_aba').click(function() {
                var hidden = $(this).attr('data-hidden');
                var texto = $(this).attr('data-texto');

                $(this).attr('data-texto', $(this).html());
                $(this).parent().parent().toggleClass('bg-secondary');
                $(this).parent().parent().toggleClass('text-white');
                $(this).parent().parent().toggleClass('font-weight-bolder');

                $('.'+hidden).fadeToggle();

                $(this).html(texto);
            });

            $('.aceitar_servico').click(function() {
                var servico = $(this).attr('data-servico');
                var esse = $(this);

                $.ajax({
                    url: "servicos_disponiveis_ajax.php",
                    type: "POST",
                    data: {
                        "servico": servico
                    }
                }).done(function (resposta) {
                    if (resposta=='1') {
                        esse.attr('disabled', true);
                    }
                });

            });
        });
    </script>