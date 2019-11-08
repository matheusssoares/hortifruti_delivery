<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Endereco extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('ModelEnderecos', '', TRUE);
        $this->load->model('ModelBairros');
        $this->load->helper('url');
        $this->load->helper("Palavras");
        $this->load->helper('security');
    }
    public function index(){
        $session_admin = $this->session->userdata('logged_ins');
        $user  = $session_admin['id_usuario'];

        $ret2 = $this->ModelBairros->buscar_bairros_ativos();
        $ret = $this->ModelEnderecos->buscaEndsPorId($user);

        $data = array('title' => 'Gerenciar Endereços', 'ende' => $ret, 'bairros' => $ret2);
        $this->load->view('clientes/gerenciar_endereco', $data);      

     }
     public function incluir(){
     	if($_POST['email']){     	
		      $dados['email']  = strtolower($_POST['email']);
              $dados['user']   = $_POST['id_user'];
	          $dados['city']   = $_POST['city'];
	          $dados['cep']    = $_POST['cep'];
	          $dados['bairro'] = palavra($_POST['bairros'], 1);
	          $dados['ende']   = palavra($_POST['endereco'], 1);
	          $dados['comp']   = palavra($_POST['comp'], 1);
	          $dados['ponto']  = palavra($_POST['pontoref'], 1);
	          $dados['num']    = $_POST['num'];
	          $dados['ativo']  = false;

	          $retorno = $this->ModelEnderecos->cadastrar_end($dados);
	          if($retorno){
	          	echo "success";
	          } else {
	          	echo "error";
	          }
	    } else {
	     	redirect('clientes/dashboard');
	    }

     }

     public function principal(){
     	$id_end = $_GET['id_end'];
     	$session_admin = $this->session->userdata('logged_ins');
        $user  = $session_admin['id_usuario'];
     	$desativar = $this->ModelEnderecos->buscar_ativos($user);
        foreach ($desativar as $key) { }
        $id = $key->id;
    	$newdesativar = $this->ModelEnderecos->desativar($id);
    	if($newdesativar){        	
        	$retorno = $this->ModelEnderecos->ativar($id_end);
        	if($retorno){
        		echo "success";
        	} else {
        		echo "error";
        	}
        	
        }

    }

    public function excluir(){
    	$id_end = $_GET['id_end'];
    	$ret = $this->ModelEnderecos->excluir($id_end);
    	if ($ret) {
    		echo "success";
    	} else {
    		echo "error";
    	}

    }


}