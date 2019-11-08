<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: text/html; charset=utf-8');
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrinho extends CI_Controller {
        function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper("Palavras");
        $this->load->helper("Moeda");
        $this->load->helper("Listarcarrinho");
        $this->load->helper("Pegartotal");
    }
    public function add(){
        $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
        if ($acao == "add"){
           $id = base64_decode(filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING));
           $this->load->model('ModelProdutos');
           $cont = $this->ModelProdutos->buscaprodutosvendasid($id);
           $idsessao = md5($id);
                if($cont == 0){
                    echo "Este produto está temporariamente indisponível!";
                } else {
                    if(!isset($_SESSION['carrinho'])){
                        $_SESSION['carrinho'] = array();
                    }
                    if(empty($_SESSION['carrinho'][$idsessao])){
                        $_SESSION['carrinho'][$idsessao] = array(
                                 'produto_id' => $id,
                                 'qtd' => 1);
                    } else {

                        $_SESSION['carrinho'][$idsessao]['qtd'] += 1;
                    }

                    echo pegarCarrinho();
                }
        }
    }
    public function listarcarrinho(){
        $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
            if($acao == "getCarrinho"){
                echo pegarCarrinho();               
            }
    }
    public function esvaziarcarrinho(){
        $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
        if($acao == "esvaziar"){
            if(isset($_SESSION['carrinho'])){
                unset($_SESSION['carrinho']);
                echo json_encode('SIM');
            }
        }
    }
    public function addmaisum(){
        $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
        if($acao == "addIten"){
            $key = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
            if(!isset($_SESSION['carrinho'])){
                $_SESSION['carrinho'] = array();
            }
            if(isset($_SESSION['carrinho'][$key])){
                $_SESSION['carrinho'][$key]['qtd'] += 1;
                echo json_encode('YES');
            }
        }
    }
    public function delmenosum(){
         $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
         if($acao == "deleteIten"){
            $key = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
            if(isset($_SESSION['carrinho'][$key])){
                $_SESSION['carrinho'][$key]['qtd'] -= 1;
            }
            if($_SESSION['carrinho'][$key]['qtd'] == 0){
                unset($_SESSION['carrinho'][$key]);
                
            }
            echo json_encode('OK');
        }
    }

    public function excluir_prod(){
        $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
        if($acao == "deleteIten"){
           $key = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
           if(isset($_SESSION['carrinho'][$key])){
               unset($_SESSION['carrinho'][$key]);
               echo json_encode('OK');
           }
       }
    }
    public function pedido_fiado(){
        if(!isset($_SESSION['carrinho'])){
                echo "<script language='javascript' type='text/javascript'>
                             alertify.alert('Gaby Arts Culinárias | NorteScript  1.1.9',
                                 'Opsss! Carrinho Vazio... Adicione produtos ao carrinho e tente novamente!',
                            function(){ alertify.error('Não foi possível completar o seu pedido!');  } );
                          </script>";
        } else {
                $idCliente = $_POST['opcli'];
                if($idCliente == ""){
                     redirect('admin/vendas');
                } else {
                $this->load->model('model_clientes');
                $getNome = $this->model_clientes->buscaClientesPorID($idCliente);
                foreach ($getNome as $nome) {          
                $dados['nomeCliente'] = palavra($nome->nome, 1);
                }
                $dados['id'] = $_POST['opcli'];
                $dados['token'] = $_POST['token'];
                $dados['dataLocal'] = $_POST['dataLocal'];
                $total = pegarTotal();
                $total = number_format($total, 2, ',', '.');
                $dados['total'] = moeda($total);
                $dados['status'] = 2;
                $token = $_POST['token'];

                $this->load->model('model_vendas');
                $res = $this->model_vendas->fazerpedidofiado($dados, $idCliente);
           
                foreach($_SESSION['carrinho'] as $key => $value){
                $idProduto = $value['produto_id'];
                $this->load->model('model_produtos');
                $resdois = $this->model_produtos->buscarfoto($idProduto);

                    foreach ($resdois as $k) { }
                    $r['nomeDoProduto'] = $k->nome_prod;
                    $r['idDoProduto']   = $k->id_prod;
                    $r['qtd']   = $value['qtd'];

                    $retornovenda = $this->model_vendas->finalizarpedido($r, $token);

                }
                if($retornovenda == 1) {
                        echo "<script language='javascript' type='text/javascript'>
                             alertify.success('Adicionado à lista de devedores!');
                             window.location.reload();
                      </script>";
                    } else {
                        echo "<script language='javascript' type='text/javascript'>
                                 alertify.alert('Gaby Arts Culinárias | NorteScript  1.1.9',
                                     'Opsss! Ocorreu um problema ao tentar processar os dados. Código do Erro: 2017b400 problemas! <br /> Tente novamente...',
                                function(){ alertify.error('Não foi possível completar o seu pedido!');  } );
                              </script>";
                    }
                    unset($_SESSION['carrinho']);
            }
        }
    }  
    public function pedido_imprimir(){

        if(!isset($_SESSION['carrinho'])){
                echo "<script language='javascript' type='text/javascript'>
                             alertify.alert('Gaby Arts Culinárias | NorteScript  1.1.9',
                                 'Opsss! Carrinho Vazio... Adicione produtos ao carrinho e tente novamente!',
                            function(){ alertify.error('Não foi possível completar o seu pedido!');  } );
                          </script>";
        } else {
                $idCliente = $_POST['opcli'];
                if($idCliente == ""){
                     redirect('admin/vendas');
                } else {
                $this->load->model('model_clientes');
                $getNome = $this->model_clientes->buscaClientesPorID($idCliente);
                foreach ($getNome as $nome) {          
                $dados['nomeCliente'] = palavra($nome->nome, 1);
                }
                $dados['id'] = $_POST['opcli'];
                $dados['token'] = $_POST['token'];
                $dados['dataLocal'] = $_POST['dataLocal'];
                $total = pegarTotal();
                $dados['total'] = number_format($total, 2, ',', '.');
                $dados['valor_pago'] = moeda($_POST['valor_pago']);
                $dados['desconto']   = moeda($_POST['valor_desconto']);
                $dados['troco'] = moeda($_POST['valor_troco']);
                $dados['status'] = 2;
                $token = $_POST['token'];
                if($dados['valor_pago'] == ""){
                   echo "<script language='javascript' type='text/javascript'>
                             alertify.alert('Gaby Arts Culinárias | NorteScript  1.1.9',
                                 'Opsss! Campo VALOR PAGO está vazio. Adicione um valor válido! ',
                            function(){ alertify.error('Não foi possível completar a operação!');  } );
                          </script>";
                          exit;
                }

                if($dados['valor_pago'] < $dados['total']){
                    echo "<script language='javascript' type='text/javascript'>
                             alertify.alert('Gaby Arts Culinárias | NorteScript  1.1.9',
                                 'Opsss! Valor recebido é menor que o valor total do pedido! Tente na opção de pagamento em Conta/Fiado.',
                            function(){ alertify.error('Não foi possível completar a operação!');  } );
                          </script>";
                } else {

                $this->load->model('model_vendas');
                $res = $this->model_vendas->fazerpedido($dados, $idCliente);
           
                foreach($_SESSION['carrinho'] as $key => $value){
                $idProduto = $value['produto_id'];
                $this->load->model('model_produtos');
                $resdois = $this->model_produtos->buscarfoto($idProduto);

                    foreach ($resdois as $k) { }
                    $r['nomeDoProduto'] = $k->nome_prod;
                    $r['idDoProduto']   = $k->id_prod;
                    $r['qtd']   = $value['qtd'];

                    $retornovenda = $this->model_vendas->finalizarpedido($r, $token);

                }
                if($retornovenda == 1) {
                    $url = base_url('admin/imprimir/');
                    $url .= $token;
                echo "<script language='javascript' type='text/javascript'>
                            alertify.confirm('Gaby Arts Culinárias | NorteScript  1.1.9', 'Você deseja imprimir o comprovante?', function(){
                                    window.open('$url', '_blank');
                                }, function(){
                                     alertify.success('Pedido realizado com sucesso!');
                                     window.location.reload();
                                }
                            );
                             
                      </script>";
                    } else {
                        echo "<script language='javascript' type='text/javascript'>
                                 alertify.alert('Gaby Arts Culinárias | NorteScript  1.1.9',
                                     'Opsss! Ocorreu um problema ao tentar processar os dados. Código do Erro: 2017b400 problemas! <br /> Tente novamente...',
                                function(){ alertify.error('Não foi possível completar o seu pedido!');  } );
                                window.location.reload();
                              </script>";
                    }
                    unset($_SESSION['carrinho']);
                }    
            }

        }
    }
    public function validar_cupom(){
        $codigo = palavra($_POST['cupom'], 1);
        $this->load->model('ModelPromocoes');
        $r = $this->ModelPromocoes->buscar_cupom($codigo);
        if($r != false){
            foreach($r as $rs) {
                $retorno = $rs->valor;
            }
            echo $retorno;
        } else {
            $retorno = "error";
            echo $retorno;
        }

    }
    public function add_cart(){        
        
        $acao = filter_input(INPUT_POST, 'acao', FILTER_SANITIZE_STRING);
        if ($acao == "add"){
           $id = base64_decode(filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_STRING));
           $qtde = filter_input(INPUT_POST, 'qtde_prod', FILTER_SANITIZE_NUMBER_INT);

           $this->load->model('ModelProdutos');
           $cont = $this->ModelProdutos->buscaprodutosvendasid($id);
           $idsessao = md5($id);
                if($cont == 0){
                    echo "Este produto está temporariamente indisponível!";
                } else {
                    if(!isset($_SESSION['carrinho'])){
                        $_SESSION['carrinho'] = array();
                    }
                    if(empty($_SESSION['carrinho'][$idsessao])){
                        $_SESSION['carrinho'][$idsessao] = array(
                                 'produto_id' => $id,
                                 'qtd' => $qtde);
                    } else {
                        $_SESSION['carrinho'][$idsessao]['qtd'] += $qtde;
                    }

                    echo pegarCarrinho();
                }
        }       
    }
}