<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Avaliacoes extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('ModelConfig');
        $this->load->model('ModelAvaliacoes');
        $this->load->helper("Palavras");
    }
	public function index(){
  		$ret = $this->ModelConfig->buscaConfig();
		$data = array(
			'title' => 'Avaliar Atendimento',
			'config' => $ret
		);
        $this->load->view('clientes/avaliacoes', $data);
	}
	public function enviar(){
		$dados['nome'] = ucwords(strtolower(palavra($_POST['name'], 1)));
		$dados['email'] = strtolower($_POST['email']);
		$dados['assunto'] = ucwords(strtolower(palavra($_POST['assunto'], 1)));
		$dados['msg'] = ucfirst(strtolower(palavra($_POST['msg'], 1)));
		$dados['status'] = 0;

		$retorno = $this->ModelAvaliacoes->enviar($dados);

		if($retorno){
			echo "success";
		} else {
			echo "error";
		}

	}
}