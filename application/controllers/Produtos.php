<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {
/*	function __construct() {
        parent::__construct();
        $this->load->model('ModelClientes', '', TRUE);
        $this->load->helper('url');
        $this->load->helper("Palavras");
        $this->load->helper('security');
    }*/
	public function visualizar()
	{   
        $this->load->model('ModelProdutos', '', TRUE);
        $this->load->helper('url');
        $this->load->model('ModelConfig');
        $req = $this->ModelProdutos->buscaCategorias();
        $retorno['config'] = $this->ModelConfig->buscaConfig();
	    $productID =  $this->uri->segment(3);

        $buscar = $this->ModelProdutos->buscarfoto($productID);

        if($buscar){
            $dados = array(
                'title' => 'Detalhes do Produto | Frutas Belém o melhor delivery paraense!',
                'produtos' => $buscar,
                'config' => $retorno['config'],
                'categorias' => $req
            );
            $this->load->view('site/visualizar', $dados);
        }
        
	}
}