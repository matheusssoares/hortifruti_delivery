<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sobre extends CI_Controller {

	public function index()
	{   
	    $this->load->helper('url');	    
        $dados = array(
            'title' => 'Sobre Nós | Delivery de Frutas & Legumes em Belém PA'			
        );
		$this->load->view('site/sobre', $dados);
	}
}