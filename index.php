<?php
include "conexao/conexao.php";

session_start()

?>
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://kit.fontawesome.com/adf9b248e1.css" crossorigin="anonymous">
  <!-- Css -->
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/paginaInicial.css">
  <link rel="stylesheet" href="css/footer.css">
  <!-- Fav Icon -->
  <link rel="shortcut icon" href="imagens/icon-logo.png" type="image/x-icon">
  <link rel="icon" href="imagens/icon-logo.png" type="image/x-icon">

  <title>Caçador de Preços - Pernambuco</title>
</head>

<body>
  <?php
    include_once "includes/menu.php"
  ?>
  <!-- SLIDE BOOTSTRAP -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./imagens/melhores.png" class="d-block w-100" alt="OFERTAS">
      </div>
    </div>
  </div>
  <!--
  <div class="container">
    <div class="lista-patrocinador">
      <div class="produto-patrocinador">1</div>
      <div class="produto-patrocinador">2</div>      
    </div>
  </div>-->
  <br>
   
    <div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col col-lg-3 ">
        <div class="card h-100">
          <img src="imagens/produtos/biscoito_treloso.png" alt="" srcset="">
          <div class="card-body">
            <h5 class="card-title">Biscoito Treloso</h5>
            <p class="card-text">
              <i class="fa-solid fa-location-dot"></i> <strong>Local:</strong> Bongi, Recife - PE <br>
              <i class="fa-solid fa-store"></i> <strong>Supermercado:</strong> Extra Bom<br>
              <i class="fa-regular fa-money-bill-1"></i> <strong> Valor:</strong> R$ 0,75<br>            
            </p>
            <a href="#" id='btnCadastrar' class="btn btn-primary"><i class="fa-regular fa-face-laugh-wink"></i> Opa, Eu quero!</a>
          </div>
        </div>
      </div>
      <div class="col col-lg-3 ">
        <div class="card h-100">
          <img src="imagens/produtos/biscoito_treloso.png" alt="" srcset="">
          <div class="card-body">
            <h5 class="card-title">Biscoito Treloso</h5>
            <p class="card-text">
              <i class="fa-solid fa-location-dot"></i> <strong>Local:</strong> Bongi, Recife - PE <br>
              <i class="fa-solid fa-store"></i> <strong>Supermercado:</strong> Extra Bom<br>
              <i class="fa-regular fa-money-bill-1"></i> <strong> Valor:</strong> R$ 0,75<br>            
            </p>
            <a href="#" id='btnCadastrar' class="btn btn-primary"><i class="fa-regular fa-face-laugh-wink"></i> Opa, Eu quero!</a>
          </div>
        </div>
      </div>
      <div class="col col-lg-3 ">
        <div class="card h-100">
          <img src="imagens/produtos/biscoito_treloso.png" alt="" srcset="">
          <div class="card-body">
            <h5 class="card-title">Biscoito Treloso</h5>
            <p class="card-text">
              <i class="fa-solid fa-location-dot"></i> <strong>Local:</strong> Bongi, Recife - PE <br>
              <i class="fa-solid fa-store"></i> <strong>Supermercado:</strong> Extra Bom<br>
              <i class="fa-regular fa-money-bill-1"></i> <strong> Valor:</strong> R$ 0,75<br>            
            </p>
            <a href="#" id='btnCadastrar' class="btn btn-primary"><i class="fa-regular fa-face-laugh-wink"></i> Opa, Eu quero!</a>
          </div>
        </div>
      </div>
      <div class="col col-lg-3 ">
        <div class="card h-100">
          <img src="imagens/produtos/biscoito_treloso.png" alt="" srcset="">
          <div class="card-body">
            <h5 class="card-title">Biscoito Treloso</h5>
            <p class="card-text">
              <i class="fa-solid fa-location-dot"></i> <strong>Local:</strong> Bongi, Recife - PE <br>
              <i class="fa-solid fa-store"></i> <strong>Supermercado:</strong> Extra Bom<br>
              <i class="fa-regular fa-money-bill-1"></i> <strong> Valor:</strong> R$ 0,75<br>            
            </p>
            <a href="#" id='btnCadastrar' class="btn btn-primary"><i class="fa-regular fa-face-laugh-wink"></i> Opa, Eu quero!</a>
          </div>
        </div>
      </div>      
    </div>
    </div>
  </div>
  <?php 
    include_once "includes/rodape.php"
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>