<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: text/html; charset=utf-8');
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
        function __construct() {
        parent::__construct ();
        $this->load->helper('url');
        $this->load->helper("Palavras");
        $this->load->helper("Moeda");
        $this->load->helper("Listarcarrinho");
        $this->load->helper("Pegartotal");
        $this->load->model('ModelProdutos');
        $this->load->model('ModelConfig');
    }
    public function index()
    {
        $req = $this->ModelProdutos->buscaCategorias();
        $ret = $this->ModelConfig->buscaConfig();
        $dados['cart'] = pegarCarrinho();
        $dados['title'] = "Checkout | Delivery de Frutas Belém PA";
        $dados['categorias'] = $req;
        $dados['config'] = $ret;

        $this->load->view('site/checkout', $dados);
    }
}    