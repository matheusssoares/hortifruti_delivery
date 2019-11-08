<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastrar extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('ModelClientes', '', TRUE);
        $this->load->helper('url');
        $this->load->helper("Palavras");
        $this->load->helper('security');
    }
	public function index()
	{   
	    $this->load->helper('url');
      $this->load->model('ModelConfig');
      $ret = $this->ModelConfig->buscaConfig();
            $dados = array(
            'title' => 'Crie sua conta e participe das melhores promoções!',
            'config' => $ret
            );
		$this->load->view('site/cadastrar', $dados);	    
	}

	function cadastrar_cliente(){
        $email_cliente = strtolower($_POST['email']);
        if($email_cliente != ""){
            $dados['nome'] = palavra($_POST['name'], 1);
            $dados['email'] = strtolower($_POST['email']);
            $dados['senha'] = md5($_POST['senha']);
            $dados['status'] = true;
            $dados['data'] = date('Y-m-d');

            $validarCliente = $this->ModelClientes->validar_cliente($email_cliente);
            if($validarCliente == 1){
               echo "errorvalidar";
            } else {
                $processacadastro = $this->ModelClientes->cadastrar_cliente($dados);
                    if($processacadastro){
                        $config_array = array('nomeUsuario' => $dados['nome'], 'emailUser' => $dados['email']);
                        $this->session->set_userdata('logged_ins', $config_array);
                        echo "success";
                    } else {
                        echo "error"; 
                    }

            }
        } else {
            redirect('Entrar', 'refresh');
        }
    }
    function endereco(){
        $this->load->helper('url');
        $this->load->model('ModelBairros', '', TRUE);
        $this->load->model('ModelConfig');
        $retorno = $this->ModelBairros->buscar_bairros_ativos();
        $ret = $this->ModelConfig->buscaConfig();
        $data = array(
          'title' => 'Cadastre seu endereço para receber seus produtos',
          'bairros' => $retorno,
          'config' => $ret
        );
        $this->load->view('clientes/endereco', $data);
        
    }
    function cadastrar_end(){
      if($_POST['email']){
          $dados['email']  = strtolower($_POST['email']);
          $dados['city']   = $_POST['city'];
          $dados['cep']    = $_POST['cep'];
          $dados['bairro'] = palavra($_POST['bairro'], 1);
          $dados['ende']   = palavra($_POST['ende'], 1);
          $dados['comp']   = palavra($_POST['comp'], 1);
          $dados['ponto']  = palavra($_POST['ponto'], 1);
          $dados['num']    = $_POST['num'];
          $dados['cel']    = $_POST['cel'];
          $dados['ativo']  = true;
              $usu = $this->ModelClientes->buscar_id($dados['email']);
              foreach ($usu as $y) {   }
              $id_user = $y->id;  
              $retorno = $this->ModelClientes->cadastrar_end($dados, $id_user);
                    if($retorno){                       
                      $cel = $dados['cel'];
                      $email = $dados['email'];
                      $retornodois = $this->ModelClientes->cadastrar_cel($cel, $email);
                      $this->session->unset_userdata('logged_ins');
                      //session_destroy();
                      echo "success";                      

                    } else {
                        echo "error"; 
                    }

      } else {
        redirect('entrar', 'refresh');
      }

    }
}