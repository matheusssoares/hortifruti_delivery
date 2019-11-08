<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class ModelProdutos extends CI_Model {

	function buscaCategorias() {
		$this->db->select ('*');
		$this->db->from('categorias');
		$this->db->where('status_cat', 1);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function buscaprodutos() {
		$this->db->select ('*');
		$this->db->from('produtos');
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function validarproduto($nome_prod){
		$this->db->select('*');
		$this->db->from('produtos');
		$this->db->where('nome_prod', $nome_prod);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return 1;
		} else {
			return false;
		}
	}
	function namecat($id_cat){
		$this->db->select('nome_cat');
		$this->db->from('categorias');
		$this->db->where('id_cat', $id_cat);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function cadastrarprodutos($dados, $nome_atual){
		if ($dados !== NULL) {
			extract ($dados);
			$this->db->insert ('produtos', array (
					'nome_prod' => $dados['nome_prod'],
					'ingrediente_prod' => $dados['ingrediente_prod'],
					'preco_prod' => $dados['preco_prod'],
					'categoria_prod' => $dados['categorias_prod'],
					'medida' => $dados['medida_prod'],
					'preco_custo' => $dados['preco_custo'],
					'qtde_estoque' => $dados['qtde_estoque'],
					'qtde_estoque_min' => $dados['qtde_estoque_min'],
					'nome_categoria' => $dados['nome_categoria'],
					'img_prod' => $nome_atual,
			) );
			return 1;
		} else {
			return false;
		}

	}

	function atualizarproduto($dados, $id){		
		if($dados !== NULL){
			extract($dados);
			$data = array(
					'id_prod' => $dados['id_prod'],
					'nome_prod' => $dados['nome_prod'],
					'ingrediente_prod' => $dados['ingrediente_prod'],
					'preco_prod' => $dados['preco_prod'],
					'categoria_prod' => $dados['idcategorias_prod'],
					'medida' => $dados['medidas_prod'],
					'preco_custo' => $dados['preco_custo_prod'],
					'qtde_estoque' => $dados['estoque_prod'],
					'qtde_estoque_min' => $dados['estoque_min_prod'],
					'nome_categoria' => $dados['final_categoria'],
					'img_prod' => $dados['imagem_upload'],
					'ativos' => 0
				);
			$where = "id_prod = $id";
			$query = $this->db->update('produtos', $data, $where);
			return 1;
		} else {
			return false;
		} 
	}
	function buscarfoto($id){
		$this->db->select('*');
		$this->db->from('produtos');
		$this->db->where('id_prod', $id);
		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function deletarproduto($id){
		if($id !== NULL){
			$this->db->where('id_prod', $id);
			$this->db->delete('produtos');
			return 1;
		} else {
			return false;
		}
	}
	function buscaprodutosid($id){
		$this->db->select('*');
		$this->db->from('produtos');
		$this->db->where('categoria_prod', $id);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return 0;
		}
	}
	function buscaprodutosvendasid($id){
		$this->db->select('*');
		$this->db->from('produtos');
		$this->db->where('id_prod', $id);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return 0;
		}
	}
	function buscacategoriasid($id){
		$this->db->select('*');
		$this->db->from('categorias');
		$this->db->where('id_cat', $id);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return 0;
		}
	}
	function buscanumprodutosid($id){
		$this->db->select('*');
		$this->db->from('produtos');
		$this->db->where('categoria_prod', $id);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}
	function buscaprodutosfiltro($id_cat, $filtro){
		if ($filtro == 1) {
			$this->db->select('*');
			$this->db->from('produtos');
			$this->db->where('categoria_prod', $id_cat);
			$this->db->order_by('nome_prod', 'ASC');
			$query = $this->db->get();
			if ($query->num_rows() >= 1) {
				return $query->result();
			} else {
				return 0;
			}
		}
		if ($filtro == 2) {
			$this->db->select('*');
			$this->db->from('produtos');
			$this->db->where('categoria_prod', $id_cat);
			$this->db->order_by('nome_prod', 'DESC');
			$query = $this->db->get();
			if ($query->num_rows() >= 1) {
				return $query->result();
			} else {
				return 0;
			}
		}
		if ($filtro == 3) {
			$this->db->select('*');
			$this->db->from('produtos');
			$this->db->where('categoria_prod', $id_cat);
			$this->db->order_by('preco_prod', 'ASC');
			$query = $this->db->get();
			if ($query->num_rows() >= 1) {
				return $query->result();
			} else {
				return 0;
			}
		}
		if ($filtro == 4) {
			$this->db->select('*');
			$this->db->from('produtos');
			$this->db->where('categoria_prod', $id_cat);
			$this->db->order_by('preco_prod', 'DESC');
			$query = $this->db->get();
			if ($query->num_rows() >= 1) {
				return $query->result();
			} else {
				return 0;
			}
		}
	}
}
