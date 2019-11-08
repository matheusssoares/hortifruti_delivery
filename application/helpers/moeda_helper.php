<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
function moeda($get_valor) {

    $source = array('.', ',');

    $replace = array('', '.');

    $valor = str_replace($source, $replace, $get_valor); //remove os pontos e substitui a virgula pelo ponto

    return $valor; //retorna o valor formatado para gravar no banco
}