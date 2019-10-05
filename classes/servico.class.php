<?php

require_once 'site.class.php';

class Servico extends Site{

    public function __construct(){

        parent::__construct();

        session_start();

        if(isset($_POST['btnSolicitarServico']))
            $this->novoServico();

    }

    public function novoServico(){

        $nome_paciente = $_POST['nomePaciente'];
        $dt_nascimento = $_POST['dt_nascimento'];
        $genero = $_POST['genero'];
        $tipo_servico = $_POST['servico'];
        $doenca = $_POST['doenca'];
        $doenca_descricao = $_POST['desc_doenca'];
        $deficiencia_fisica = $_POST['deficFisica'];
        $deficiencia_fisica_descricao = $_POST['desc_deficFisica'];
        $deficiencia_mental = $_POST['deficMental'];
        $deficiencia_mental_descricao = $_POST['desc_deficMental'];
        $descricao = $_POST['descricao'];
        $carga_horaria_diaria = $_POST['carga_horaria'];
        $estado = 'disponivel';
        $dias_servico_string = $_POST['diasServico'];

        // Tratamento dos dados
        $dt_aux = str_replace('/', '-', $dt_nascimento);
        $dt_nascimento_sql = date("Y-m-d", strtotime($dt_aux));

        if($doenca == 'false')
            $doenca_descricao = 'NULL';
        if($deficiencia_fisica == 'false')
            $deficiencia_fisica_descricao = 'NULL';
        if($deficiencia_mental == 'false')
            $deficiencia_mental_descricao = 'NULL';

        $qtd_funcionarios_necessarios = 1;

        // Separando a string no array
        $dias_servico = explode(',', $dias_servico_string);

        for($i = 0; $i > count($dias_servico); $i++){
            $dt_servico_aux = str_replace('/', '-', $dias_servico['$i']);
            $dt_servico_sql = date("Y-m-d", strtotime($dt_servico_aux));
        }

        // Como os cuidadores são alternados (dia s/ dia n/), o máximo que se pode ter são 2
        if(count($dias_servico) >= 2)
            $qtd_funcionarios_necessarios = 2;

        $idResponsavel = $_SESSION['id_usuario'];

        $sql = "INSERT INTO servico VALUES (DEFAULT, '$nome_paciente', '$dt_nascimento_sql', '$genero', '$tipo_servico', '$doenca', '$doenca_descricao', '$deficiencia_fisica', '$deficiencia_fisica_descricao', '$deficiencia_mental', '$deficiencia_mental_descricao', '$descricao', $idResponsavel, '$carga_horaria_diaria', '$dias_servico_string', '$qtd_funcionarios_necessarios', '$estado');";

        $query = mysqli_query($this->con, $sql);

        $result = mysqli_fetch_array($query);

        $this->candidatar_servico($result['id']);

        header('Location: dashboard_contratante.php');
    }

    public function listarTodosServicos($idUsuario){

        if($_SESSION['tipo_usuario'] == 'contratante'){
            $sql = "SELECT * FROM servico
                    WHERE fk_id_contratante = $idUsuario
                    ORDER BY id DESC";
        }
        elseif($_SESSION['tipo_usuario'] == 'cuidador'){
            $sql = "SELECT servico.*, servicos_cuidadores.*, servico.id as id_servico, contratante.nome_completo as nome_contratante FROM servico 
                    JOIN servicos_cuidadores ON servicos_cuidadores.fk_id_servico = servico.id 
                    JOIN contratante ON contratante.id = servico.fk_id_contratante WHERE fk_id_cuidador = $idUsuario 
                    ORDER BY id_servico DESC";
        }

        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $result;

    }

    public function listarServicosDisponiveis(){
        $sql = "SELECT 
                    s.*,
                    (SELECT COUNT(*) FROM servicos_cuidadores WHERE fk_id_servico = s.id) as total,
                    (SELECT COUNT(*) FROM servicos_cuidadores WHERE fk_id_servico = s.id AND fk_id_cuidador = {$_SESSION['id_usuario']}) as my
                FROM servico s
                WHERE estado <> 'terminado'
                HAVING my <= 0";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);

        return $result;
    }

    public function candidatar_servico($idServico) {
        $sql = "INSERT INTO servicos_cuidadores VALUES (DEFAULT, $idServico, {$_SESSION['id_usuario']})";
        $sql2 = "UPDATE servico SET estado = 'andamento' WHERE id = $idServico";

        if (mysqli_query($this->con, $sql) && mysqli_query($this->con, $sql2))
            return true;
        else
            return false;
    }

    public function finalizar_servico($idServico) {
        $sql = "UPDATE servico SET estado = 'finalizado' WHERE id = $idServico";

        if (mysqli_query($this->con, $sql))
            return true;
        else
            return false;
    }

    public function verificarEstado($servico){

        if($servico['estado'] == 'disponivel')
            $dot_color = 'warning';
        elseif($servico['estado'] == 'andamento')
            $dot_color = 'success';
        elseif($servico['estado'] == 'finalizado')
            $dot_color = 'danger';

        return $dot_color;

    }

    public function buscarCuidadorPorServico($idServico){

        $sql = "SELECT GROUP_CONCAT(cuidador.nome_completo SEPARATOR ', ') as cuidadores FROM servicos_cuidadores
                JOIN cuidador ON cuidador.id = servicos_cuidadores.fk_id_cuidador
                WHERE fk_id_servico = $idServico";
        $query = mysqli_query($this->con, $sql);
        $result = mysqli_fetch_array($query);

        return $result['cuidadores'];

    }

}

?>