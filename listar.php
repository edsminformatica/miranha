<?php

//inclui o codigo de config.php dentro de listar.php
require_once '../../config.php';

//inclui o codigo de usuario.php dentro de listar.php
require_once '../../../src/actions/tipos_produtos.php';

//inclui o codigo de cabecalho.php dentro de listar.php
require_once '../recursos/tipos_cabecalho.php';

require_once '../../../src/modules/tipos_mensagens.php';

$tipos_produtos= listartipos_produtos($conn);
?>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> MIRANHA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tipos de Produtos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Suspenso
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Ação</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Desabilitado</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
  <br> <h1>Lista Tipos de Produtos   
  <a href="./criar.php">    
      <button type="button" class="btn btn-outline-primary">  Adicionar Tipos de Produtos</h1> </br>
    </button>
  </a>

 
  <!-- Exibição de mensagens via função exibirMsg() caso url conter a mesma -->
  <div class="row flex-center">
    <?php if(isset ($_GET['mensagem'])) echo(exibirMsg($_GET ['mensagem']));?>

</div>



  <table class="table">
    <caption>Listagem Tipos de Produtos</caption>
    <thead>
      <tr>

        <th scope="col">Código</th>

        <th scope="col">Tipo de Produto</th>

        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tipos_produtos as $linha){?>
        <tr>
        <th scope="row"><?=htmlspecialchars($linha['codigo'])?></th>
        <td><?=htmlspecialchars($linha['nome'])?></td>
        <td><?htmlspecialchars($linha['acao'])?>
        
        
        <button type="button" class="btn btn-outline-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
          <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
          <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
        </svg>
      </button>

      </a>

        <a href="./editar.php?codigo=<?=$linha['codigo']?>">
        <button type="button" class="btn btn-outline-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
        </svg>
      </button>
      </a>

        <a href="./deletar.php?codigo=<?=$linha['codigo']?>">
        <button type="button" class="btn btn-outline-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
        </svg>
      </button>
      </a>
      </td>
    </tr>
      <?php }?>
    <tbody>
  </table>

</div>

<?php

 require '../recursos/tipos_rodape.php';

?>