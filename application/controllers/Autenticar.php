<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autenticar extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('ModelClientes', '', TRUE);
        $this->load->model('ModelEnderecos', '', TRUE);
        $this->load->helper('url');
        $this->load->helper('security');
    }
    public function index(){
    	$email = strtolower($_POST['email']);        
        $senha = md5($_POST['senha']);
        $resultadoUsuario = $this->ModelClientes->login($email,$senha);
        if ($resultadoUsuario){
             foreach ($resultadoUsuario as $usuario){
                 $config_array = array('id_usuario' => $usuario->id, 'nomeUsuario' => $usuario->nome,'emailUser' => $usuario->email,'datacadastro' => $usuario->data, 'telefone' => $usuario->tel);
             }


             $this->session->set_userdata('logged_ins', $config_array);
             $end = $this->ModelClientes->buscaClientesPorEmail($email);
                if($end == false){
                    echo "semendereco";
                    exit;
                }

             if(isset($_SESSION['carrinho'])) {
             	 echo "comcart";
             } else {
             	echo "semcart";
             }
    	} else {
    		echo "error";
    	}
    }

    public function logout(){
    	$this->session->unset_userdata('logged_ins');
		redirect('entrar', 'refresh' );
    }
    public function recuperar(){
        $email = strtolower($_POST['email']);
        $validar = $this->ModelClientes->ClientesPorEmail($email);
        if($validar){
            $upsenha = $this->ModelClientes->newsenha($email);
            if($upsenha){
                /*$this->load->library('email');

                $this->email->from('matheusssoares04@gmail.com', 'Matheus Soares');
                $this->email->to('$email');

                $this->email->subject('Recuperando senha de acesso');
                $this->email->message('Sua senha temporária para acesso é: recuperarsenha');

                $this->email->send();*/
                echo "success";
            } else {
                echo "error-update";
            }
        } else {
            echo "error-users";
        }
    }
}