<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
function pegarTotal() {
    $pdo = new PDO('mysql:host=mysql.hostinger.com.br;dbname=u382986716_free', 'u382986716_free', 'm87585256');
    $json = array();
    $json['totalCarrinho'] = number_format(0, 2, ',','.');
    $json['count'] = 0;
    if (isset($_SESSION['carrinho']) AND !empty($_SESSION['carrinho'])):
        $json['count'] = count($_SESSION['carrinho']);
        $total = 0;
        foreach ($_SESSION['carrinho'] as $key => $value):
            $idProduto = $value['produto_id'];
            $con = $pdo->prepare("SELECT * FROM produtos WHERE id_prod = $idProduto");
            $con->execute();
            $ln = $con->fetch(PDO::FETCH_ASSOC);

            $json['dados'][] = array(
                'id' => $key,
                'nome' => ucfirst($ln['nome_prod']),
                'qtd' => $value['qtd'],
                'valor' => number_format($ln['preco_prod'], 2, ",", "."),
                'subtotal' => number_format($ln['preco_prod'] * $value['qtd'], 2, ",", ".")
            );
            //SOMA TUDO
            $total += $ln['preco_prod'] * $value['qtd'];
            $json['totalCarrinho'] = number_format($total, 2, ",",".");
        endforeach;
     endif;
    //RETORNA O JSON SEM OS DADOS
    return $total;                       
}