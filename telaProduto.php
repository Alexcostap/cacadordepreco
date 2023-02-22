<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
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
  <script src="javascript/localizacao.js"></script>
  <title>Caçador de Preços - Pernambuco</title>
</head>
<body> 
<?php
    include_once "includes/menu.php"
?>
<div class="container">
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> 
                                <img id="main-image" src="imagens/produtos/biscoito_treloso.png" width="250" /> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4">
                            <div class="d-flex justify-content-between align-items-center">
                               <a href="index.php" class="return"> <div class="d-flex align-items-center"> 
                               <i class="fa fa-long-arrow-left"></i> <span class="ml-1">  Voltar</span> </div> </a>
                               <i class="fa fa-shopping-cart text-muted"></i>
                            </div>
                            <div class="mt-4 mb-3">
                                <h5 class="text-uppercase">Biscoito Treloso</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">R$0,75</span>
                                    
                                </div>
                            </div>
                            <p class="about">Biscoito Treloso do pequeno, varios sabores no precinho lá no Extra bom da Mustardinha</p>
                            <p class="card-text">
                                <i class="fa-solid fa-location-dot"></i> <strong>Local:</strong> Mustardinha, Recife - PE <br>
                                <i class="fa-solid fa-store"></i> <strong>Supermercado:</strong> Extra Bom<br>
                                <i class="fa-regular fa-money-bill-1"></i> <strong> Valor:</strong> R$ 0,75<br>            
                            </p>
                            <div class="cart mt-4 align-items-center"> 
                            <i class="fa fa-heart text-muted"></i> 
                            <i class="fa fa-share-alt text-muted"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>







<?php 
    include_once "includes/rodape.php"
  ?>   
</body>
</html>