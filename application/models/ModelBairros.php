<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/**
 *
 *
 * @author Matheus Soares Almeida
 */
class ModelBairros extends CI_Model {

	function buscar_bairros() {
		$this->db->select ('*');
		$this->db->from('bairros');	
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function buscar_bairros_ativos(){
		$this->db->select ('*');
		$this->db->from('bairros');
		$this->db->where('status', 1);
		$this->db->order_by('nome', 'ASC');
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}

    function validar_bairro($nome){
        $this->db->select('*');
		$this->db->from('bairros');
		$this->db->where('nome', $nome);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return 1;
		} else {
			return false;
		}
    }

    function cadastrar_bairro($dados = NULL) {
        if ($dados !== NULL) {
			extract ($dados);
			$this->db->insert ('bairros', array (
					'nome' => $dados['nome'],
					'descricao' => $dados['descricao'],
					'status' => $dados['ativo'],
					'datahora' => $dados['data'],
			) );
			return true;
		} else {
			return false;
		}
    }
    public function atualizar($identificador, $dados){
        if($dados !== NULL){
			extract($dados);
			$data = array(
					'id' => $dados['identificador'],
					'nome' => $dados['nome'],
					'descricao' => $dados['detalhes'],
					'status' => $dados['status']
				);
			$where = "id = $identificador";
			$query = $this->db->update('bairros', $data, $where);
			return 1;
		} else {
			return false;
		}
    }
    public function deletar($id){
        if($id !== NULL){
			$this->db->where('id', $id);
			$this->db->delete('bairros');
			return 1;
		} else {
			return false;
		}
    }
}    