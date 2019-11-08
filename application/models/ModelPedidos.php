<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/**
 *
 * @author Matheus Soares Almeida
 */
class ModelPedidos extends CI_Model {
	function pedidos_geral($dados){
		if ($dados !== NULL) {
			extract ($dados);
			$this->db->insert ('pedidos_geral', array (
					'token' => $dados['token'],
					'tipo_pedido' => $dados['tipo_pedido'], //1 para site, 2 para telefone, 3 para pedido local.
					'modo_pagamento' => $dados['modo_pagamento'], //1 para dinheiro, 2 para cartão, 3 para fiado.
					'nome_cliente' => $dados['nome_cliente'],
					'id_cliente' => $dados['id_cliente'],
					'total' => $dados['total'],
					'valor_pago' => $dados['valor_pago'],
					'desconto' => $dados['desconto'],
					'troco' => $dados['troco'],
					'datahora_pedido' => $dados['datahora_pedido'],
					'status_pedido' => $dados['status'], //1 aguardando resposta, 2 aceito, 3 recusado.
					'atendido_por' => $dados['atendido'],
					'datahora_atendimento' => $dados['datahora_atendimento'],					
			) );
			return true;
		} else {
			return false;
		}
	}
	function pedidos_delivery($dados){
		if($dados !== NULL){
			extract($dados);
			$this->db->insert('pedidos_delivery', array(
				'token' => $dados['token'],
				'id_endereco' => $dados['id_endereco'],
				'contato_cancel' => $dados['contato'],
				'obs' => $dados['obs'],
				'estado_pedido' => 1, //1 para aguardando entrega, 2 para entregue
				'entregue_por' => 0, //id do usuário que entregou o pedido
				'datahora_entrega' => $dados['entrega']
			));
			return true;
		} else {
			return false;
		}
	}
	function buscaprodutosdash($idUsuario){
		$this->db->select ('*');
		$this->db->from('pedidos_geral');
		$this->db->where('id_cliente', $idUsuario);
		$this->db->order_by('datahora_pedido', 'DESC');
		$this->db->limit(4);	
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function buscahist($idUsuario){
		$this->db->select ('*');
		$this->db->from('pedidos_geral');
		$this->db->where('id_cliente', $idUsuario);
		$this->db->order_by('datahora_pedido', 'DESC');
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
}