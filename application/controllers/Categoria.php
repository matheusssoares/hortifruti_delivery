<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function segmento($id)
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
	    $result_prod = $this->ModelProdutos->buscaprodutosid($id);
	    $retorno['name_cat'] = $this->ModelProdutos->buscacategoriasid($id);
	    $retorno['num_prod'] = $this->ModelProdutos->buscanumprodutosid($id);
	    $retorno['config'] = $this->ModelConfig->buscaConfig();
	    $retorno['result_prod']  = $result_prod; 
        $dados = array(
            'title' => 'Categorias | Delivery de Frutas & Legumes em Belém PA',
			'categorias' => $retorno['result_cat'],
			'name_cat'=> $retorno['name_cat'],
			'produtos' => $retorno['result_prod'],
			'num_prod' => $retorno['num_prod'],
			'config' => $retorno['config']
        );
		$this->load->view('site/categorias', $dados);
	}

}