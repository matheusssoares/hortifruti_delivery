<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/**
 * Modelo model_usuario - Efetua a busca dos dados no banco
 *
 * @author Matheus
 */
class ModelVendas extends CI_Model {

	function fazerpedido($dados, $idCliente){
		if ($dados !== NULL) {
			extract ($dados);
			$this->db->insert ('pedidos_balcao', array (
					'id_cliente' => $dados['id'],
					'nome_cliente' => $dados['nomeCliente'],
					'token' => $dados['token'],
					'total' => $dados['total'],
					'valor_pago' => $dados['valor_pago'],
					'desconto'  => $dados['desconto'],
					'troco' => $dados['troco'],
					'datahora' => $dados['dataLocal'], 
					'status' => $dados['status'],
			) );
			return true;
		} else {
			return false;
		}

	}
	function fazerpedidofiado($dados, $idCliente){
		if ($dados !== NULL) {
			extract ($dados);
			$this->db->insert ('pedidos_fiado', array (
					'id_cliente' => $dados['id'],
					'nome_cliente' => $dados['nomeCliente'],
					'token' => $dados['token'],
					'total' => $dados['total'],
					'datahora' => $dados['dataLocal'], 
					'status' => $dados['status'],
			) );
			return true;
		} else {
			return false;
		}

	}
	function finalizarpedido($r, $token) {
		if ($r !== NULL) {
			extract ($r);
			$this->db->insert('itens_pedido', array (
					'token' => $token,
					'id_produto' => $r['idDoProduto'],
					'produto' => $r['nomeDoProduto'],
					'quantidade' => $r['qtd'],
			) );
			return true;
		} else {
			return false;
		}

	}
}