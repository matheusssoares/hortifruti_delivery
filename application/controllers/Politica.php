<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Politica extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('ModelConfig');
        $this->load->model('ModelProdutos');
    }
    public function index(){
    	$ret = $this->ModelConfig->buscaConfig();
    	$req = $this->ModelProdutos->buscaCategorias();
    	if($req !== false){
		$retorno['result_cat'] = $req;
	    } else {
		$retorno['result_cat'] = "vazio";
	    }
            $dados = array(
            'title' => 'Política de Entrega - Frutas Belém',
            'config' => $ret,
            'categorias' => $retorno['result_cat']
            );
		$this->load->view('site/politica', $dados);	
    }
}