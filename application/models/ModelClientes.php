<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/**
 * Modelo model_usuario - Efetua a busca dos dados no banco
 *
 * @author Matheus Soares Almeida
 */
class ModelClientes extends CI_Model {

	function buscaClientes() {
		$this->db->select ('*');
		$this->db->from('clientes');	
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function buscaClientesPorID($id_cliente) {
		$this->db->select ('*');
		$this->db->from('clientes');
		$this->db->where('id', $id_cliente);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function buscaClientesPorIDeSenha($id, $senhaatual){
		$this->db->select ('*');
		$this->db->from('clientes');
		$this->db->where('id', $id);
		$this->db->where('senha', $senhaatual);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function alterarDadosSemSenha($dados, $id){
		if($dados !== NULL){
			extract($dados);
			$data = array(
					'id' => $dados['id'],
					'nome' => $dados['nome'],
					'email' => $dados['email'],					
					'tel' => $dados['telefone']
				);
			$where = "id = $id";
			$query = $this->db->update('clientes', $data, $where);
			return 1;
		} else {
			return false;
		} 
	}
	function alterarDadosComSenha($dados, $id){
		if($dados !== NULL){
			extract($dados);
			$data = array(
					'id' => $dados['id'],
					'nome' => $dados['nome'],
					'senha' => $dados['novasenha'],
					'email' => $dados['email'],					
					'tel' => $dados['telefone']
				);
			$where = "id = $id";
			$query = $this->db->update('clientes', $data, $where);
			return 1;
		} else {
			return false;
		} 
	}
	function ClientesPorEmail($email) {
		$this->db->select ('*');
		$this->db->from('clientes');
		$this->db->where('email', $email);
		$this->db->where('status', 1);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function buscaClientesPorEmail($email) {
		$this->db->select ('*');
		$this->db->from('endereco');
		$this->db->where('email', $email);
		$this->db->where('ativo', 1);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function buscaClientesAtivos() {
		$this->db->select ('*');
		$this->db->from('clientes');
		$this->db->where('status', 1);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function validarcliente($nome_cliente, $email_cliente){
		$this->db->select('*');
		$this->db->from('clientes');
		$this->db->where('nome', $nome_cliente);
		$this->db->where('email', $email_cliente);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return 1;
		} else {
			return false;
		}
	}
	function validar_cliente($email_cliente){
		$this->db->select('*');
		$this->db->from('clientes');
		$this->db->where('email', $email_cliente);

		$query = $this->db->get();
		if ($query->num_rows() == 1) {
			return 1;
		} else {
			return false;
		}
	}
	function cadastrarcliente($dadoscliente = NULL){
		if ($dadoscliente !== NULL) {
			extract ($dadoscliente);
			$this->db->insert ('clientes', array (
					'nome' => $dadoscliente['nome_cliente'],
					'senha' => $dadoscliente['senha_cliente'],
					'email' => $dadoscliente['email_cliente'],					
					'tel' => $dadoscliente['telefone_cliente'],
					'status' => $dadoscliente['status_cliente'],
					'data' => $dadoscliente['data_cliente'],
			) );
			return true;
		} else {
			return false;
		}

	}
	function cadastrar_cliente($dados = NULL){
		if ($dados !== NULL) {
			extract ($dados);
			$this->db->insert ('clientes', array (
					'nome' => $dados['nome'],
					'senha' => $dados['senha'],
					'email' => $dados['email'],										
					'status' => $dados['status'],
					'data' => $dados['data'],
			) );
			return true;
		} else {
			return false;
		}
	}

	function atualizarcliente($identificador, $upcliente){
		
		if($upcliente !== NULL){
			extract($upcliente);
			$data = array(
					'id' => $upcliente['identificador'],
					'nome' => $upcliente['nome_cliente'],
					'email' => $upcliente['email_cliente'],					
					'tel' => $upcliente['telefone_cliente'],
					'status' => $upcliente['status_cliente'],
				);
			$where = "id = $identificador";
			$query = $this->db->update('clientes', $data, $where);
			return 1;
		} else {
			return false;
		} 
	}
	function cadastrar_end($dados, $id_user){
		if ($dados !== NULL) {
			extract ($dados);
			$this->db->insert('endereco', array (
					'email' => $dados['email'],
					'id_usuario' => $id_user,
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
	function cadastrar_cel($cel, $email){
		$data = array(
			'tel' => $cel
		);
		$where = "email = '$email'";
		$query = $this->db->update('clientes', $data, $where);
		return true;

	}
	function atualizar_end($dados, $identificador){
		if($dados !== NULL){
			extract($dados);
			$data = array(
					'endereco' => $dados['ende'],
					'city' => $dados['city'],
					'cep' => $dados['cep'],
					'bairro' => $dados['bairro'],
					'comp' => $dados['comp'],
					'num' => $dados['num'],
					'tel' => $dados['cel'],
					'status' => 1,
				);
			$where = "email = '$identificador'";
			$query = $this->db->update('clientes', $data, $where);
			return 1;
		} else {
			return false;
		} 
	}
	function deletarcliente($id){
		if($id !== NULL){
			$this->db->where('id', $id);
			$this->db->delete('clientes');
			return 1;
		} else {
			return false;
		}
	}

	function login($email, $senha){
		$this->db->select ('*');
		$this->db->from('clientes');
		$this->db->where('status', 1);
		$this->db->where('email', $email);
		$this->db->where('senha', $senha);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
	function newsenha($email){
		$pass = md5('recuperarsenha');
		$data = array(
					'senha' => $pass
				);
		$where = "email = '$email'";
		$query = $this->db->update('clientes', $data, $where);
		if($query){
			return true;
		} else {
			return false;
		}
	}
	function buscar_id($email){
		$this->db->select ('*');
		$this->db->from('clientes');
		$this->db->where('status', 1);
		$this->db->where('email', $email);
		$query = $this->db->get();
		if ($query->num_rows() >= 1) {
			return $query->result();
		} else {
			return false;
		}
	}
}
