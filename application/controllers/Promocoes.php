<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocoes extends CI_Controller {

	public function index()
	{   
	    $this->load->helper('url');	    
        $dados = array(
            'title' => 'Promoções e Ofertas | Delivery de Frutas & Legumes em Belém PA'			
        );
		$this->load->view('site/promocoes', $dados);
	}
}