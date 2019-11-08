<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('ModelClientes');
        $this->load->helper('url');
        $this->load->helper('Palavras');
    }
	public function index(){
		$session_admin = $this->session->userdata('logged_ins');
        $user  = $session_admin['id_usuario'];
        $ret = $this->ModelClientes->buscaClientesPorID($user);
		$data = array('title' => 'Alterar dados', 'dados' => $ret);
        $this->load->view('clientes/perfil', $data);
	}
	public function atualizar(){
		$id = $_POST['id'];
		if($id == ""){
			redirect('clientes/perfil');
		} else {
			$dados['id'] = $_POST['id'];
			if($_POST['senhaatual'] == ""){
				//echo "prosseguir sem alteracao na senha";
				$dados['nome'] = palavra($_POST['nome'], 1);
				$dados['email'] = strtolower($_POST['email']);
				$dados['telefone'] = $_POST['cel'];

				$ret = $this->ModelClientes->alterarDadosSemSenha($dados, $id);
				if($ret){
					$this->session->unset_userdata('logged_ins');
					session_destroy();
					echo "success";

				} else {
					echo "error";
				}
			} else {
				if($_POST['novasenha'] == ""){
					//echo "informe uma nova senha";
					echo "error-novasenha";
				} else {
					$senhaatual = md5($_POST['senhaatual']);
					$ret = $this->ModelClientes->buscaClientesPorIDeSenha($id, $senhaatual);
					if($ret){
						//echo "encontrou senha";
						$dados['nome'] = palavra($_POST['nome'], 1);
						$dados['email'] = strtolower($_POST['email']);
						$dados['telefone'] = $_POST['cel'];
						$dados['novasenha'] = md5($_POST['novasenha']);
						$ret2 = $this->ModelClientes->alterarDadosComSenha($dados, $id);
						if ($ret2) {
							$this->session->unset_userdata('logged_ins');
							session_destroy();
							echo "success";
						} else {
							echo "error";
						}

					} else {
						//echo "não encontrou senha";
						echo "error-senhaatualinvalida";
					}
				}
				

			}
		}
	}
}