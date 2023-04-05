<?php

require_once './../../config.php';
require_once '../../../src/actions/tipos_produtos.php';
require_once '../recursos/tipos_cabecalho.php';

//se id passou pela url
if(isset($_POST['codigo'])){
   //executa ação de deletar usuário
   deletartipos_produtos($conn, $_POST['codigo']);  
}

?>
<div class="container">
    <div class="row">
        <a href="listar.php"><h1>Tipos de Produtos - Deletar</h1></a>
    </div>
   
    <div class="row flex-center">
        <div class="form-div">
            <form class="form" action="deletar.php" method="POST">
                <label> Você quer realmente deletar este Tipo de Produto?</label>
                <input type="hidden" name="codigo" value="<?=$_GET['codigo']?>" required/>

             <button class="btn btn-success text-white" type="submit">Sim</button>
            </form>
        </div>
    </div>
</div>
<?php require_once '../recursos/tipos_rodape.php'; ?>