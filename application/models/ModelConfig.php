<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/**
 * Modelo model_usuario - Efetua a busca dos dados no banco
 *
 * @author Matheus Soares Almeida
 */
class ModelConfig extends CI_Model {
	function buscaConfig() {
		$this->db->select ('*');
		$this->db->from('config');	
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
}