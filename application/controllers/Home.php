<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{   
	    $this->load->helper('url');
	    $this->load->model('ModelProdutos');
	    $this->load->model('ModelConfig');
	    $req = $this->ModelProdutos->buscaCategorias();
	    if($req !== false){
		$retorno['result_cat'] = $req;
	    } else {
		$retorno['result_cat'] = "vazio";
	    }
	    $result_prod = $this->ModelProdutos->buscaprodutos();
	    $retorno['config'] = $this->ModelConfig->buscaConfig();
	    $retorno['result_prod']  = $result_prod; 
        $dados = array(
            'title' => 'Frutas Belém | Delivery de Frutas & Legumes em Belém PA',
			'categorias' => $retorno['result_cat'],
			'produtos' => $retorno['result_prod'],
			'config' => $retorno['config']
        );
		$this->load->view('site/home', $dados);
	}
}