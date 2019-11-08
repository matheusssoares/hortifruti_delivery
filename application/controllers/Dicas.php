<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dicas extends CI_Controller {

	public function index()
	{   
	    $this->load->helper('url');	    
        $dados = array(
            'title' => 'Dicas e Ajudas | Delivery de Frutas & Legumes em Belém PA'			
        );
		$this->load->view('site/dicas', $dados);
	}
}