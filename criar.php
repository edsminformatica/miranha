<?php
require_once './../../config.php';
require_once '../../../src/actions/tipos_produtos.php';
require_once '../recursos/tipos_cabecalho.php';

//verifica se o formulário foi preenchido
if (isset($_POST["Fnome"])){
    //criar tipos de produtos conforme os dados informados no formulário de cadastro
    criartipos_produtos($conn, $_POST["Fnome"]);
}

?>

<div class="container">
    <h1> Cadastrar Tipos de Produtos</h1>
    <form class="form" action="criar.php" method="POST">
            <label>Nome</label>
            <input type="text" name="Fnome" required/>

            <button class="btn btn-success text-white" type="submit">Salvar</button>
           
    </form>
</div>
<?php require_once '../recursos/tipos_rodape.php'; ?>
