<?php
  session_start();
?>
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
   <!-- Fav Icon -->
  <link rel="shortcut icon" href="imagens/icon-logo.png" type="image/x-icon">
  <link rel="icon" href="imagens/icon-logo.png" type="image/x-icon">
  

  <title>Caçador de Preços</title>
</head>
<body>
<?php
  include_once "includes/menu.php"
?> 
  
    <h1 class="text-center" id="titulo"> Cadastrar Produto</h1>
    
<div class="container">
    <form action="php/produto.php" method="post" enctype="multipart/form-data">
      <div class="col-12">
          <div class="input-group mb-3">
            <div class="dropdown" id="Categoria" >       
                <select  name="categoriaPdt"class="form-select" aria-label="Default select example">        
                  <option selected>Selecione a Categoria do Produto</option>
                  <option value="Mercado">Mercado</option>
                  <option value="Hortifruti">Hortifruti</option>
                  <option value="Higiene">Higiene</option>
                  <option value="Limpeza">Limpeza</option>
                </select>
              </div>
            </div>
            <div class="mb-3 ">  
                <label  for="exampleFormControlInput1" class="form-label">Nome do Produto</label>
                <input type="text" required class="form-control" id="nomePdt" name="nomePdt" id="exampleFormControlInput1" placeholder="Biscoito Treloso, tchê">
            </div>
            <div class="mb-3">    
                <label for="exampleFormControlInput1" class="form-label">Preço do Produto</label>
                <input type="text" required class="form-control"  id="precoPdt" name="precoPdt" id="exampleFormControlInput1" placeholder="R$30.00">
            </div>
            <div class="mb-3">    
                <label for="exampleFormControlInput1" class="form-label">Descrição(Opcional)</label>
                <input type="text" class="form-control" id="descPdt" name="descPdt" id="exampleFormControlInput1" placeholder="Ex: Biscoito barato, muito bom...">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Selecione o Estado</label>
              <select class="form-select" name="estadoPdt" aria-label="Default select example">
                <option selected value="Pernambuco">Pernambuco</option>
              </select>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Selecione a cidade</label>
              <select class="form-select" name="cidadePdt" aria-label="Default select example">
                <option selected>Cidade</option>
                <option value="recife">Recife</option>
                <option value="Jabotão dos Guararapes">Jaboatão dos Guararapes</option>
                <option value="Olinda">Olinda</option>
              </select>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Selecione o Bairro</label>
              <select class="form-select" name="bairroPdt" aria-label="Default select example">
                <option selected>Bairro</option>
                <option value="Bongi">Bongi</option>
                <option value="Mustardinha">Mustardinha</option>
                <option value="Afogados">Afogados</option>
                <option value="Candeias">Candeias</option>
              </select>

              <div class="mb-3">    
                <label for="exampleFormControlInput1" class="form-label">Local</label>
                <input type="text" class="form-control" id="localPdt" name="mercadoPdt" id="exampleFormControlInput1" placeholder="Extra Bom...">
            </div>    
            
            <div class="mb-3">    
                <input type="hidden" class="form-control" id="idUsuario" name="idUsuario"value="<?php echo $_SESSION['id'] ?>"  id="exampleFormControlInput1" placeholder="Extra Bom...">
            </div>
            
            <!-- Botão para adicionar Arquivo -->
            <div class="input-group mb-3">
              <input id="imagemPdt" name="imagemPdt"  type="file" class="form-control" id="inputGroupFile01">
            </div>

            <button  class="w-100 btn btn-primary btn-lg" type="submit" value="Cadastrar">Cadastrar</button>
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