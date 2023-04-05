<?php
require_once '../../database/usuario.php';

function listarusuarios ($conn) {
     return listarusuariosDoBanco($conn);   
}

function criarusuario($conn, $name, $email, $phone) {
    $criar = criarusuarioDoBanco($conn, $name, $email, $phone);
    $mensagem = $criar == 1 ? 'success-create' : 'error-create';

    return header("location: listar.php?mensagem=$mensagem");
}

function deletarusuario($conn, $id) {
    //obtem true ou false ao deletar usuario
    $resultado = deletarusuarioDoBanco($conn,$id);

    //indica qual css usar na mensagem do usuário conforme resultado 
    $menssagem = $resultado == 1 ? 'success-remove' : 'error-remove';

    //retorna e redireciona para o listar.php contendo a classe da mensagem 
    return header ("location: listar.php?mensagem=$menssagem");
} 

function editarusuario($conn, $id, $name, $email, $phone) {
    $update = editarusuarioDoBanco($conn, $id, $name, $email, $phone);
    $menssage = $update == 1 ? 'success-update' : 'error-update';

    $menssagem = $update == 1 ? 'success-edition' : 'error-edition';
    return header ("location: listar.php?mensagem=$menssagem");
}

function buscarusuario($conn, $id) {
    return buscarusuarioDoBanco($conn, $id);
}
?>