<?php
require_once '../../database/mercadorias.php';

function listarmercadorias ($conn){
     return listarmercadoriasDoBanco($conn);   
}

function criarmercadorias($conn, $codigo_tipo, $nome, $quantidade){
    $criar = criarmercadoriasDoBanco($conn, $codigo_tipo, $nome, $quantidade);
    $mensagem = $criar == 1 ? 'success-create' : 'error-create';

    return header("location: listar.php?mensagem=$mensagem");
}

function deletarmercadorias($conn, $codigo_tipo) {
    //obtem true ou false ao deletar mercadoria
    $resultado = deletarmercadoriasDoBanco($conn, $codigo_tipo);

    //indica qual css usar na mensagem conforme resultado 
    $classMenssagem = $resultado == 1 ? 'success-remove' : 'error-remove';

    //retorna e redireciona para o listar.php contendo a classe da mensagem 
    return header ("location: listar.php?mensagem=$classMenssagem");
} 

function editarmercadorias($conn, $codigo_tipo, $nome, $quantidade) {
    $update = editarmercadoriasDoBanco($conn, $codigo_tipo, $nome, $quantidade);
    $menssage = $update == 1 ? 'success-update' : 'error-update';

    $classMenssagem = $update == 1 ? 'success-edition' : 'error-edition';
    return header ("location: listar.php?mensagem=$classMenssagem");
}

function buscarmercadorias($conn, $codigo_tipo) {
    return buscarmercadoriasDoBanco($conn, $codigo_tipo);
}
?>