<?php

    require_once "classes/servico.class.php";

    if (isset($_POST['servico'])) {
        $servico = $_POST['servico'];

        $servicos = new Servico();
        if ($servicos->candidatar_servico($servico))
            echo 1;
        else
            echo 0;
    } elseif (isset($_POST['finalizar_servico'])) {
        $servico = $_POST['finalizar_servico'];

        $servicos = new Servico();
        if ($servicos->finalizar_servico($servico))
            echo 1;
        else
            echo 0;
    } else
        echo 0;