<?php

include_once '../Criaenvio_loader.php';

// VOCÊ DEVE ALTERAR SUA CHAVE AQUI
define('NN_CHAVE', '-chave-=');

/*
 * Consulta de envios
 */
//try {
//
//    $parametros = null; // sem parâmetros
//    $parametros = array('codigo' => '11');     // pelo contador
// //   $parametros = array('status' => 1);  // nome e id
//
//    $envios = (new Criaenvio\Envio())->buscar($parametros);
//
//    echo '<pre>';
//    //print_r($envios->getDados());
//
//    foreach ($envios->getDados() as $e) {
//        echo '#' . $e->codigo . ' ' . $e->id_mensagem . ': ' . $e->data_de_inicio. ' ('. $e->status . ') Contatos/Conclusão: '.$e->total_de_contatos.'/'.$e->porcentagem_de_conclusao.'%<br>';
//    }
//
//} catch (Exception $e) {
//    echo $e->getMessage(); die;
//}
