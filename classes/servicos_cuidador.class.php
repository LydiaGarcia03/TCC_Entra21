<?php

require_once 'site.class.php';

class ServicosCuidador extends Site{

	public $id;
	public $fk_id_servico;
	public $fk_id_cuidador;


	public function cadastraServicoPorCuidador($servico, $idCuidador){

		if(is_array($servico)){

			foreach ($servico as $idServico) {
				
				$sql = "INSERT INTO servicos_cuidadores VALUES (DEFAULT, $idServico, $idCuidador)";
				$query = mysqli_query($this->con, $sql);

			}
			return 1;
		} else
			return 0;
		
	}

	public function listagemServicosPorCuidador($idCuidador){

		$sql = "SELECT DISTINCT(fk_id_servico), servico.tipo_servico, servico.nome_paciente, cuidador.nome_completo FROM servicos_cuidadores
				LEFT JOIN servico ON servico.id = servicos_cuidadores.fk_id_servico
				RIGHT JOIN cuidador ON cuidador.id = servicos_cuidadores.fk_id_cuidador
				WHERE fk_id_cuidador = $idCuidador OR fk_id_cuidador IS NULL"; // OR realmente necessário?

		$query = mysqli_query($this->con, $sql);

		return mysqli_fetch_all($query, MYSQLI_ASSOC);

	}


}

?>