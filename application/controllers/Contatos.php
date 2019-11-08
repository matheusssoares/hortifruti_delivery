<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contatos extends CI_Controller {

	public function index()
	{   
	    $this->load->helper('url');	    
        $dados = array(
            'title' => 'Contatos Frutas Delivery | Delivery de Frutas & Legumes em Belém PA'			
        );
		$this->load->view('site/contatos', $dados);
	}
}