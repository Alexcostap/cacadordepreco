<?php
include "conexao/conexao.php";
session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])){ 
  echo"
  <script language='javascript' type='text/javascript'>
  
 
  window.location.href='index.php';
  
  </script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href='https://getbootstrap.com/docs/5.2/assets/css/docs.css' rel='stylesheet'>
    <!-- CSS -->
    <link rel="stylesheet" href="css/telaUsuario.css">
    <link rel="stylesheet" href="css/paginaInicial.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel='stylesheet' href='css/estilos.css'>
   <!-- Icons -->
    <link rel='stylesheet' href='https://kit.fontawesome.com/adf9b248e1.css' crossorigin='anonymous'>
   <!-- Fav Icon -->
    <link rel='shortcut icon' href='imagens/icon-logo.png' type='image/x-icon'>
    <link rel='icon' href='imagens/icon-logo.png' type='image/x-icon'>
    <script src='javascript/localizacao.js'></script>

    <title>Caçador de Preço - Pernambuco</title>
</head>
<body>
<?php
include_once "includes/menu.php"
?>    
<div class="container">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" id="tituloUsuario"  aria-current="page" href="telaUsuario.php">Dados Pessoais</a>
  </li>
  <li class="nav-item">
  <a class="nav-link active " id="tituloUsuario"  href="#"><strong>Minhas Caças</strong></a>  
</li>

</ul>
<br> <br>
</div>
<div class="container" id="containerCards">
    <div class="row row-cols-1 row-cols-md-4 g-4">
  <?php

    $idDoCliente = $_SESSION['id'];
    $consulta = $conexao->query("select * from produtos where id_cliente=$idDoCliente"); 
      
    while ($produto = $consulta->fetch(PDO::FETCH_ASSOC)){
    echo "
      <div class='col col-lg-3 card-principal'>
        <div class='card h-100'>
          <img src='$produto[caminho_img]' alt='' srcset=''>
          <div class='card-body'>
            <h5 class='card-title'>$produto[nome_produto]</h5>
            <p class='card-text'>
              <i class='fa-solid fa-location-dot'></i> <strong>Local:</strong> $produto[bairro_produto], $produto[cidade_produto] - $produto[estado_produto] <br>
              <i class='fa-solid fa-store'></i> <strong>Supermercado:</strong> $produto[mercado_produto]<br>
              <i class='fa-regular fa-money-bill-1'></i> <strong> Valor:</strong> R$ $produto[preco_produto]<br>            
            </p>
            <a href='telaProduto.php?id=$produto[id]'><button type='button'  class='btn btn-primary' id='btnCadastrar'><i></i>Editar</button></a>
            <a href='php/excluirProduto.php?id=$produto[id]'><button type='button'  class='btn btn-primary' id='btnCadastrar'><i></i>Excluir</button></a>         
            </div>
        </div>
      </div>";
    }
    ?>
    </div>
    </div>
  </div>



<?php
include_once "includes/rodape.php"
?>
</body>
</html>