<?php
include "conexao/conexao.php";
session_start()

?>
<!doctype html>
<html lang="pt-br">

<head>
  <script type="text/javascript">
      (function(c,l,a,r,i,t,y){
          c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
          t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
          y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, "clarity", "script", "ftswyak4g8");
  </script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Caçador de Preço">
      <meta name="descriptionSom" content="O caçador de preço , fundado em 23 de janeiro de 2023, o site foi criado no curso de programador web na instituição Senac. Tem com o objetivo de ser um site moderno e ágil, voltado para encontrar produtos com descontos para os nossos clientes. Mantém uma margem competitiva por meio da entrega de informações imediata dos produtos. Refere-se a praticidade como fatores de excelência, para manter um site competitivo, eficaz e produtivo.
      Temos como alvo alcançar clientes para cadastrar produtos , pequenos e grandes comercios  para parcerias. Aqui você vai encontrar os melhores preços e produtos da sua região.">
      <meta name="keywords" content="promoção de produtos, promoções de produtos de varejo, promoção no bairro do bongi, promoção na caxanga, biscoito de chocolate, promoção piedade , promoção boa viagem, promoções de carnes , promoções de legumes, promoções de cerveja, promoções de cerveja caxanga, promoções de cerveja boa viagem, promoções de cerveja camaragibe, promoção de frutas">

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
  <link rel="stylesheet" href="css/sobrenos.css">
</head>

<body>
  <?php
    include_once "includes/menu.php"
  ?>
  
  
  <div class="container">
    <div class="text-center" >
        <img src="imagens/sobre.jpeg" id="sobrenos" class="rounded img-fluid" alt="...">
    </div>
    <br>
       
    <p class="sobrenosfont">O caçador de preço , fundado em 23 de janeiro de 2023, o site foi criado no curso de programador web na instituição Senac. Tem com o objetivo de ser um site moderno e ágil, voltado para encontrar produtos com descontos para os nossos clientes. Mantém uma margem competitiva por meio da entrega de informações imediata dos produtos. Refere-se a praticidade como fatores de excelência, para manter um site competitivo, eficaz e produtivo.
    Temos como alvo alcançar clientes para cadastrar produtos , pequenos e grandes comercios  para parcerias. Aqui você vai encontrar os melhores preços e produtos da sua região.</p>

    </div>
  </div>
  <?php 
    include_once "includes/rodape.php"
  ?>
  <script src="javascript/pesquisaProdutos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>