<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('ModelClientes', '', TRUE);
        $this->load->model('ModelPedidos');
        $this->load->model('ModelEnderecos');
        $this->load->model('ModelConfig');
        $this->load->helper('url');
        $this->load->helper("Palavras");
        $this->load->helper("Moeda");
        $this->load->helper('security');
        date_default_timezone_set('America/Belem');
    }

    public function index(){
        $session_admin = $this->session->userdata('logged_ins');
        $idUsuario = $session_admin['id_usuario'];
        $ver_pedido = $this->ModelPedidos->buscahist($idUsuario);
        $ret = $this->ModelConfig->buscaConfig();
        $data = array(
            'title' => 'Histórico de Pedidos',
            'pedidos' => $ver_pedido,
            'config' => $ret
        );
        $this->load->view('clientes/historico', $data);
    }
   
     public function finalizar(){
        $session_admin = $this->session->userdata('logged_ins');
        $user  = $session_admin['id_usuario'];
        $inf = $this->ModelEnderecos->buscaEndsPorIdAtivos($user);
        $data = array('title' => 'Delivery de Frutas e Legumes em Belém', 'ende' => $inf);
        $this->load->view('clientes/finalizar_pedido', $data);

     }
     public function maquina(){
     	$email = strtolower($_POST['email']);
     	$usuario = $this->ModelClientes->ClientesPorEmail($email);
     	foreach ($usuario as $key) {}
     	$dados['id_cliente']	= $key->id;
        $dados['nome_cliente'] = $key->nome;
     	
        //validar dados para contato em caso de cancelamento do pedido
        $dados['contato'] = $_POST['radio2'];
        if($dados['contato'] != "not"){
            if($_POST['celcont'] == ""){
                echo "error-contato-vazio";
                exit;
            } else {
                $dados['contato'] = $_POST['celcont'];                
            }
        } else {
            $dados['contato'] = "Não ligar para avisar cancelamento";
        }
        $dados['obs'] = palavra($_POST['obs'], 1);
        $dados['token'] = uniqid(rand(), true);
        $dados['tipo_pedido'] = 1; //1 para site, 2 para telefone, 3 para pedido local.
        $dados['modo_pagamento'] = 2; //1 para dinheiro, 2 para cartão, 3 para fiado.
        $dados['total'] = $_POST['total'];
        $dados['troco'] = $_POST['troco'];
        $dados['desconto'] = $_POST['desconto'];
        $dados['valor_pago'] = $_POST['valor_pago'];
        $dados['datahora_pedido'] = date('Y-m-d H:i:s');                
        $dados['status'] = 1; //1 aguardando resposta, 2 aceito, 3 recusado.
        $dados['atendido'] = 0;
        $dados['datahora_atendimento'] = date('Y-m-d H:i:s');
        $dados['entrega'] = date('Y-m-d H:i:s');
        $token = $dados['token'];
        $dados['id_endereco'] = $_POST['endereco'];
        //retorno do model pedidos geral
        $ret = $this->ModelPedidos->pedidos_geral($dados);
        if($ret){
        	$ret2 = $this->ModelPedidos->pedidos_delivery($dados);
        	if($ret2){
        		foreach($_SESSION['carrinho'] as $key => $value){
                $idProduto = $value['produto_id'];
                $this->load->model('ModelProdutos');
                $this->load->model('ModelVendas');
                $resdois = $this->ModelProdutos->buscarfoto($idProduto);

                    foreach ($resdois as $k) { }
                    $r['nomeDoProduto'] = $k->nome_prod;
                    $r['idDoProduto']   = $k->id_prod;
                    $r['qtd']   = $value['qtd'];

                    $retornovenda = $this->ModelVendas->finalizarpedido($r, $token);


                }
                $url = base_url('clientes/historico');
                    if($retornovenda){
                        $this->load->library('email');                        
                        //Inicia o processo de configuração para o envio do email
                        $this->load->library('email');
                        $config['charset'] = 'utf-8';
                        $config['wordwrap'] = TRUE;
                        $config['mailtype'] = 'text';
                        $config['protocol'] = 'smtp';
                        $config['smtp_host'] = 'nortescript.com.br';
                        $config['smtp_user'] = 'contato@nortescript.com.br';
                        $config['smtp_pass'] = 'm87585256';
                        $config['smtp_port'] = '587';
                        $config['newline'] = '\r\n';
                        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
                        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
                 
                        // Inicializa a library Email, passando os parâmetros de configuração
                        $this->email->initialize($config);
                        $this->email->from('contato@nortescript.com.br', 'Norte Script'); // Remetente
                        $this->email->to($email, $dados['nome_cliente']); // Destinatário
                        $this->email->subject('Confirmação de Pedido');
                        $this->email->message('Olá, seu pedido está em processo de análise. Aguarde um e-mail informando se o pedido foi ACEITO ou RECUSADO.');
                        if($this->email->send()){
                        unset($_SESSION['carrinho']);
                        echo "success";
                        } else {
                            echo "error";
                            //echo "Pedido efetuado com sucesso!";
                        }
                    } else {
                        echo "error"; 
                      //echo "Erro ao fazer pedido";
                    }
            
        	}
        }
    }
    public function dinheiro(){
        $email = strtolower($_POST['email']);
        $dados['total'] = $_POST['total'];
        $usuario = $this->ModelClientes->ClientesPorEmail($email);
        foreach ($usuario as $key) {}
        $dados['id_cliente']    = $key->id;
        $dados['nome_cliente'] = $key->nome;
        //validar troco
        $cktroco = $_POST['dincmptroco'];
        if($cktroco != "not"){
            if($_POST['trocotexto2'] == ""){                
                echo "error-troco-vazio";
                exit;
            } else {
                $dados['troco'] = moeda($_POST['trocotexto2']);                
            }
        } else {
            $dados['troco'] = "0.00";            
        }

        if($dados['troco'] < $dados['total'] AND $dados['troco'] != "0.00"){
            echo "error-troco-menor";
            exit;
        }

        //validar receber ligação
        $cktroco = $_POST['radiotel2'];
        if($cktroco != "not"){
            if($_POST['celcont2'] == ""){                
                echo "error-contato-vazio";
                exit;
            } else {
                $dados['contato'] = $_POST['celcont2'];                
            }
        } else {
            $dados['contato'] = "Não ligar para avisar cancelamento";            
        }       
        $dados['obs'] = palavra($_POST['obs2'], 1);
        $dados['token'] = uniqid(rand(), true);
        $dados['tipo_pedido'] = 1; //1 para site, 2 para telefone, 3 para pedido local.
        $dados['modo_pagamento'] = 1; //1 para dinheiro, 2 para cartão, 3 para fiado.
        $dados['valor_pago'] = $dados['troco'];
        if($dados['troco'] == "0.00"){
            $dados['troco'] = "0.00";
        } else {
        $troco = $dados['troco'] - $dados['total'];
        $dados['troco'] = $troco;
        }
        $dados['desconto'] = 0.00;        
        $dados['datahora_pedido'] = date('Y-m-d H:i:s');                
        $dados['status'] = 1; //1 aguardando resposta, 2 aceito, 3 recusado.
        $dados['atendido'] = 0;
        $dados['datahora_atendimento'] = date('Y-m-d H:i:s');
        $dados['entrega'] = date('Y-m-d H:i:s');
        $token = $dados['token'];
        $dados['id_endereco'] = $_POST['endereco'];

        //dados para enviar
        //retorno do model pedidos geral
        $ret = $this->ModelPedidos->pedidos_geral($dados);
        if($ret){
            $ret2 = $this->ModelPedidos->pedidos_delivery($dados);
            if($ret2){
                foreach($_SESSION['carrinho'] as $key => $value){
                $idProduto = $value['produto_id'];
                $this->load->model('ModelProdutos');
                $this->load->model('ModelVendas');
                $resdois = $this->ModelProdutos->buscarfoto($idProduto);

                    foreach ($resdois as $k) { }
                    $r['nomeDoProduto'] = $k->nome_prod;
                    $r['idDoProduto']   = $k->id_prod;
                    $r['qtd']   = $value['qtd'];

                    $retornovenda = $this->ModelVendas->finalizarpedido($r, $token);
                }
                $url = base_url('clientes/historico');
                    if($retornovenda){
                        $this->load->library('email');                        
                        //Inicia o processo de configuração para o envio do email
                        $this->load->library('email');
                        $config['charset'] = 'utf-8';
                        $config['wordwrap'] = TRUE;
                        $config['mailtype'] = 'text';
                        $config['protocol'] = 'smtp';
                        $config['smtp_host'] = 'nortescript.com.br';
                        $config['smtp_user'] = 'contato@nortescript.com.br';
                        $config['smtp_pass'] = 'm87585256';
                        $config['smtp_port'] = '587';
                        $config['newline'] = '\r\n';
                        $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
                        $config['validate'] = TRUE; // define se haverá validação dos endereços de email
                 
                        // Inicializa a library Email, passando os parâmetros de configuração
                        $this->email->initialize($config);
                        $this->email->from('contato@nortescript.com.br', 'Norte Script'); // Remetente
                        $this->email->to($email, $dados['nome_cliente']); // Destinatário
                        $this->email->subject('Confirmação de Pedido');
                        $this->email->message('Olá, seu pedido está em processo de análise. Aguarde um e-mail informando se o pedido foi ACEITO ou RECUSADO.');
                        if($this->email->send()){
                        unset($_SESSION['carrinho']);
                        echo "success";
                        } else {
                            echo "error";
                            //echo "Pedido efetuado com sucesso!";
                        }
                    } else {
                        echo "error"; 
                      //echo "Erro ao fazer pedido";
                    }
            }
        }

    }
    public function imprimir($token){
        require_once './vendor/autoload.php';
        $mpdf = new \Mpdf\Mpdf();
        // Ao invés de imprimir a view 'welcome_message' na tela, passa o código
        // HTML dela para a variável $html
        $html = $this->load->view('admin/reports/detalhes_pedidos','',TRUE);
        // Define um Cabeçalho para o arquivo PDF
        $mpdf->SetHeader('Relatório Detalhes do Pedido');
        // Define um rodapé para o arquivo PDF, nesse caso inserindo o número da
        // página através da pseudo-variável PAGENO
        $mpdf->SetFooter('{PAGENO}');
        // Insere o conteúdo da variável $html no arquivo PDF
        $mpdf->writeHTML($html);
        // Gera o arquivo PDF
        $mpdf->Output();
    } 
}