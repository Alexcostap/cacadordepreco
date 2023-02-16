<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="css/paginaInicial.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/cadastroProduto.css">
  <!-- <script> src="javascript/cadastrarProduto.js"</script> -->

  <title>Caçador de Preços</title>
</head>
<body>
<?php
    include_once "includes/menu.php"
  ?> 
  
    <h1 class="text-center" id="titulo"> Cadastrar Produto</h1>
    
<div class="container">
  <form action="">
    <div class="col-6">
      <div class="input-group mb-3">
        <div class="dropdown" id="Categoria" >       
            <select class="form-select" aria-label="Default select example">        
              <option selected>Categoria</option>
              <option value="mercado">Mercado</option>
              <option value="hortifruti">Hortifruti</option>
              <option value="higiene">Higiene</option>
              <option value="limpeza">Limpeza</option>
            </select>
          </div>
        </div>
        <div class="mb-3 ">  
            <label  for="exampleFormControlInput1" class="form-label">Nome do Produto</label>
            <input type="text" required class="form-control" id="nomePdt" id="exampleFormControlInput1" placeholder="Biscoito Treloso, tchê">
        </div>
        <div class="mb-3">    
            <label for="exampleFormControlInput1" class="form-label">Preço do Produto</label>
            <input type="text" required class="form-control"  id="precoPdt" id="exampleFormControlInput1" placeholder="R$30.00">
        </div>
        <div class="mb-3">    
            <label for="exampleFormControlInput1" class="form-label">Descrição(Opcional)</label>
            <input type="text" class="form-control" id="descPdt" id="exampleFormControlInput1" placeholder="Ex: Biscoito barato, muito bom...">
        </div>
        <!--  Localidade   -->
        <div class="mb-3">
          <select class="form-select" aria-label="Default select example">
            <option selected>Cidade</option>
            <option value="recife">Recife</option>
            <option value="jaboatao">Jaboatão dos Guararapes</option>
            <option value="olinda">Olinda</option>
          </select>
        </div>
        <div class="mb-3">
          <select class="form-select" aria-label="Default select example">
            <option selected>Bairro</option>
            <option value="bongi">Bongi</option>
            <option value="mustardinha">Mustardinha</option>
            <option value="afogados">Afogados</option>
          </select>

          <div class="mb-3">    
            <label for="exampleFormControlInput1" class="form-label">Local</label>
            <input type="text" class="form-control" id="localPdt" id="exampleFormControlInput1" placeholder="Extra Bom...">
        </div>
      
        
        <!-- Botão para adicionar Arquivo -->
        <div class="input-group mb-3">
          <input type="file" class="form-control" id="inputGroupFile01">
        </div>

        <input type="submit"  class="btn btn-primary" id="btnCadastrarProduto" onclick="validarProduto()">
        </button> 
    </form>
  </div>
</div>

  <?php 
    include_once "includes/rodape.php"
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>