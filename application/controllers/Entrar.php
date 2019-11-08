<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrar extends CI_Controller {

	public function index()
	{   
		if ($this->session->userdata('logged_ins') AND isset($_SESSION['carrinho'])) {
			$this->load->helper('url');
			redirect('clientes/pedidos/finalizar', 'refresh' );
		}
		if($this->session->userdata('logged_ins')){
			$this->load->helper('url');
			redirect('clientes/dashboard', 'refresh' );
		} 
		if($this->session->userdata('logged_ins') == ""){
	    $this->load->helper('url');
	    $this->load->model('ModelConfig');
	    $ret = $this->ModelConfig->buscaConfig();
            $dados = array(
            'title' => 'Entre ou Cadastre-se | Peça seu delivery!',
            'config' => $ret
            );
		$this->load->view('site/entrar', $dados);	    
		}
	}
}