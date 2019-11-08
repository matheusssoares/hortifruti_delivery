<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

	public function index()
	{   
	    $this->load->helper('url');	    
        $dados = array(
            'title' => 'Galeria de Fotos | Delivery de Frutas & Legumes em Belém PA'			
        );
		$this->load->view('site/galeria', $dados);
	}
}