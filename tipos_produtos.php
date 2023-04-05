<?php
require_once '../../database/tipos_produtos.php';

function listartipos_produtos ($conn){
     return listartipos_produtosDoBanco($conn);   
}

function criartipos_produtos($conn, $nome){
    $criar = criartipos_produtosDoBanco($conn, $nome);
    $mensagem = $criar == 1 ? 'success-create' : 'error-create';

    return header("location: listar.php?mensagem=$mensagem");
}

function deletartipos_produtos($conn, $codigo){
    //obtem true ou false ao deletar tipo de produto
    $resultado = deletartipos_produtosDoBanco($conn, $codigo);

    //indica qual css usar na mensagem conforme resultado 
    $classMenssagem = $resultado == 1 ? 'success-remove' : 'error-remove';

    //retorna e redireciona para o listar.php contendo a classe da mensagem 
    return header ("location: listar.php?mensagem=$classMenssagem");
} 

function editartipos_produtos($conn, $codigo, $nome) {
    $update = editartipos_produtosDoBanco($conn, $codigo, $nome);
    $menssage = $update == 1 ? 'success-update' : 'error-update';
    
    $menssagem = $update == 1 ? 'success-edition' : 'error-edition';
    return header ("location: listar.php?mensagem=$menssagem");

}

function buscartipos_produtos($conn, $codigo){
    return buscartipos_produtosDoBanco($conn, $codigo);
}
?>