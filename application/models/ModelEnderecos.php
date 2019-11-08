<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/**
 * Modelo model_usuario - Efetua a busca dos dados no banco
 *
 * @author Matheus Soares Almeida
 */
class ModelEnderecos extends CI_Model {
	function buscaEndsPorId($user) {
		$this->db->select ('*');
		$this->db->from('endereco');
		$this->db->where('id_usuario', $user);
		$this->db->order_by("ativo", "desc");
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function buscaEndsPorIdAtivos($user) {
		$this->db->select ('*');
		$this->db->from('endereco');
		$this->db->where('id_usuario', $user);
		$this->db->where('ativo', 1);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function cadastrar_end($dados){
		if ($dados !== NULL) {
			extract ($dados);
			$this->db->insert('endereco', array (
					'email' => $dados['email'],
					'id_usuario' => $dados['user'],
					'city' => $dados['city'],
					'cep' => $dados['cep'],										
					'bairro' => $dados['bairro'],
					'endereco' => $dados['ende'],
					'complemento' => $dados['comp'],
					'pontoref' => $dados['ponto'],
					'num' => $dados['num'],
					'ativo' => $dados['ativo']
			) );
			return true;
		} else {
			return false;
		}
	}
	function buscar_ativos($user){	
		$this->db->select('*');
		$this->db->from('endereco');
		$this->db->where('id_usuario', $user);
		$this->db->where('ativo', 1);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}

	}
	function desativar($id){
	$data = array('ativo' => 0	);
	$where = "id = '$id'";	
	$query = $this->db->update('endereco', $data, $where);
		if($query){
			return true;
		} else {
			return false;
		}
	}
	function ativar($id){
		$data = array('ativo' => 1);
		$where = "id = '$id'";
		$query = $this->db->update('endereco', $data, $where);
		if($query){
			return true;
		} else {
			return false;
		}

	}
	function excluir($id_end){
		if($id_end !== NULL){
			$this->db->where('id', $id_end);
			$this->db->delete('endereco');
			return 1;
		} else {
			return false;
		}
	}
}