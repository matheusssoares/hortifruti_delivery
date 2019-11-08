<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Homevendas extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('ModelProdutos');
    }
    public function index(){
        $id_cat = filter_input(INPUT_POST, 'id_cat', FILTER_SANITIZE_STRING);
        if ($id_cat == 0){
            $resultado = $this->ModelProdutos->buscaprodutos();
            $retorno['produtos'] = $resultado;
            $this->load->view('admin/lib/view_vendas', $retorno);
        } else {
            $id = $id_cat;
            $resultado = $this->ModelProdutos->buscaprodutosid($id);
            $retorno['produtos'] = $resultado;
            $this->load->view('admin/lib/view_vendas', $retorno);
        }   
    }
    public function filtrar(){
       $filtro = filter_input(INPUT_POST, 'filtro', FILTER_SANITIZE_STRING); 
       $id_cat = filter_input(INPUT_POST, 'id_cat', FILTER_SANITIZE_STRING);

       $resultado = $this->ModelProdutos->buscaprodutosfiltro($id_cat, $filtro);
       $retorno['produtos'] = $resultado;
       $this->load->view('admin/lib/view_vendas', $retorno);


    }
}    