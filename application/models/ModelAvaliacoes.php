<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/**
 * Modelo model_usuario - Efetua a busca dos dados no banco
 *
 * @author Matheus Soares Almeida
 */
class ModelAvaliacoes extends CI_Model {
	function enviar($dados){
		if ($dados !== NULL) {
			extract ($dados);
			$query = $this->db->insert('ava', array (
					'nome' => $dados['nome'],
					'email' => $dados['email'],
					'assunto' => $dados['assunto'],
					'msg' => $dados['msg'],
					'status' => $dados['status']
			) );
			if($query) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}