<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('ModelPedidos');
        $this->load->model('ModelConfig');
    }
	public function index(){
		$session_admin = $this->session->userdata('logged_ins');
  		$idUsuario = $session_admin['id_usuario'];
  		$ver_pedido = $this->ModelPedidos->buscaprodutosdash($idUsuario);
  		$ret = $this->ModelConfig->buscaConfig();
		$data = array(
			'title' => 'Painel de Controle do Cliente',
			'pedidos' => $ver_pedido,
			'config' => $ret
		);
        $this->load->view('clientes/dashboard', $data);
	}
}