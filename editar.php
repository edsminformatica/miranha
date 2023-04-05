<?php
require_once './../../config.php';
require_once '../../../src/actions/tipos_produtos.php';
require_once '../recursos/tipos_cabecalho.php';

//verifica se o formulário foi preenchido
if (isset($_POST["Fnome"])){
    //editar tipos de produtos conforme os dados informados no formulário de cadastro
    editartipos_produtos($conn, $_POST["codigo"], $_POST["Fnome"]);
}
//buscar dados do tipo de produto para edição e jogar no form
$tipos_produtos = buscartipos_produtos($conn, $_GET['codigo']);

?>

<!-- colocar aqui o code do menu de navegação do listar.php <nav ... </nav>-->

<div class="container">
    <h1> Editar Tipos de Produtos</h1>
    <form class="form" action="editar.php" method="POST">
            <input type="hidden" name="codigo" value="<?=$tipos_produtos['codigo']?>" required/>
             <label>Nome</label>
             <input type="text" name="Fnome" value="<?=htmlspecialchars($tipos_produtos['nome'])?>" required/>
            
            <button class="btn btn-success text-white" type="submit">Salvar</button>
           
    </form>
</div>
<?php require_once '../recursos/tipos_rodape.php'; ?>