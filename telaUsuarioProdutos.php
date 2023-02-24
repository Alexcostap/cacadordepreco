<?php
include "conexao/conexao.php";
session_start();
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
    <!-- CSS -->
    <link rel="stylesheet" href="css/telaUsuario.css">
    <link rel="stylesheet" href="css/paginaInicial.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Caçador de Preço</title>
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
  <a class="nav-link active " id="tituloUsuario"  href="#"><strong>Meus Produtos</strong></a>  
</li>

</ul>
<br> <br>
</div>

<?php
include_once "includes/rodape.php"
?>
</body>
</html>