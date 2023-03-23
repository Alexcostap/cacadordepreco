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
                <option value="Recife">Recife</option>
                <option value="Jabotão">Jaboatão dos Guararapes</option>
                <option value="Olinda">Olinda</option>
              </select>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Selecione o Bairro</label>
              <select class="form-select" name="bairroPdt" aria-label="Default select example">
                <option selected><strong>Bairro</strong></option>
                <option data-cidade="Olinda" value="7RO">7ºRO</option>
                <option data-cidade="Recife" value="Aflitos">Aflitos</option>
                <option data-cidade="Recife"value="Afogados">Afogados</option>
                <option data-cidade="Recife"value="Água fria">Água fria</option>
                <option data-cidade="Olinda" value="Águas Compridas">Águas Compridas</option>
                <option data-cidade="Olinda"value="Aguazinha">Aguazinha</option>
                <option data-cidade="Olinda"value="Alto da Bondade">Alto da Bondade</option>
                <option data-cidade="Recife"value="Alto José Bonifácio">Alto José Bonifácio</option>
                <option data-cidade="Olinda"value="Amaro Branco">Amaro Branco</option>
                <option data-cidade="Olinda"value="Amparo">Amparo</option>
                <option data-cidade="Recife"value="Apipucos">Apipucos</option>
                <option data-cidade="Recife"value="Areias">Areias</option>
                <option data-cidade="Recife"value="Arruda">Arruda</option>
                <option data-cidade="Olinda"value="Bairro Novo">Bairro Novo</option>
                <option data-cidade="Jaboatao"value="Barra de Jangada">Barra de Jangada</option>
                <option data-cidade="Recife"value="Barro">Barro</option>
                <option data-cidade="Recife"value="Beberibe">Beberibe</option>
                <option data-cidade="Recife"value="Boa Viagem">Boa Viagem</option>
                <option data-cidade="Recife"value="Boa Vista">Boa Vista</option>
                <option data-cidade="Recife"value="Bomba do Hemetério">Bomba do Hemetério</option>
                <option data-cidade="Recife"value="Bongi">Bongi</option>
                <option data-cidade="Olinda"value="Bultrins">Bultrins</option>
                <option data-cidade="Recife"value="Brasília Teimosa">Brasília Teimosa</option>
                <option data-cidade="Recife"value="Brejo da Guabiraba">Guabiraba</option>
                <option data-cidade="Recife"value="Brejo de Beberibe">Brejo de Beberibe</option>
                <option data-cidade="Recife"value="Cabanga">Cabanga</option>
                <option data-cidade="Recife"value="Caçote">Caçote</option>
                <option data-cidade="Recife"value="Cajueiro">Cajueiro</option>
                <option data-cidade="Jaboatao"value="Cajueiro Seco">Cajueiro Seco</option>
                <option data-cidade="Recife"value="Campina do Barreto">Campina do Barreto</option>
                <option data-cidade="Recife"value="Campo Grande">Campo Grande</option>
                <option data-cidade="Jaboatao"value="Candeias">Candeias</option>
                <option data-cidade="Recife"value="Casa Amarela">Casa Amarela</option>
                <option data-cidade="Olinda"value="Casa Caiada">Casa Caiada</option>
                <option data-cidade="Recife"value="Casa Forte">Casa Forte</option>
                <option data-cidade="Olinda"value="Caixa D'agua">Caixa D'agua</option>
                <option data-cidade="Olinda"value="Carmo">Carmo</option>
                <option data-cidade="Recife"value="Caxangá">Caxangá</option>
                <option data-cidade="Recife"value="CDU">CDU</option>
                <option data-cidade="Recife"value="Cohab">Cohab</option>
                <option data-cidade="Jaboatao"value="Coqueiral">Coqueiral</option>
                <option data-cidade="Recife"value="Cordeiro">Cordeiro</option> 
                <option data-cidade="Recife"value="Curado">Curado</option>
                <option data-cidade="Recife"value="Derby">Derby</option>
                <option data-cidade="Recife"value="Dois Irmãos">Dois Irmãos</option>
                <option data-cidade="Recife"value="Dois Unidos">Dois Unidos</option>
                <option data-cidade="Recife"value="Encruzilhada">Encruzilhada</option>    
                <option data-cidade="Recife"value="Engenho do Meio">Engenho do Meio</option>
                <option data-cidade="Recife"value="Espinheiro">Espinheiro</option>
                <option data-cidade="Recife"value="Estância">Estância</option>
                <option data-cidade="Olinda"value="Fragoso">Fragoso</option>
                <option data-cidade="Recife"value="Graças">Graças</option>
                <option data-cidade="Recife"value="Guabiraba">Guabiraba</option>
                <option data-cidade="Olinda"value="Guadalupe">Guadalupe</option>
                <option data-cidade="Recife"value="Ibura">Ibura</option>
                <option data-cidade="Recife"value="Imbiribeira">Imbiribeira</option>
                <option data-cidade="Recife"value="Ipsep">Ipsep</option>
                <option data-cidade="Recife"value="Iputinga">Iputinga</option>
                <option data-cidade="Recife"value="Jaqueira">Jaqueira</option>
                <option data-cidade="Recife"value="Jardim Atlântico">Jardim Atlântico</option>
                <option data-cidade="Recife"value="Jardim Brasil">Jardim Brasil</option>
                <option data-cidade="Recife"value="Jardim São Paulo">Jardim São Paulo</option>
                <option data-cidade="Recife"value="Jiquiá">Jiquiá</option>
                <option data-cidade="Recife"value="Jordão">Jordão</option>
                <option data-cidade="Recife"value="Linha do Tiro">Linha do Tiro</option>
                <option data-cidade="Recife"value="Macaxeira">Macaxeira</option>
                <option data-cidade="Recife"value="Madalena">Madalena</option>
                <option data-cidade="Recife"value="Mangabeira">Mangabeira</option>
                <option data-cidade="Recife"value="Mangueira">Mangueira</option>
                <option data-cidade="Jaboatao"value="Marcos Freire">Marcos Freire</option>
                <option data-cidade="Recife"value="Monteiro">Monteiro</option>
                <option data-cidade="Recife"value="Morro da Conceição">Morro da Conceição</option>
                <option data-cidade="Recife"value="Mustardinha">Mustardinha</option>
                <option data-cidade="Jaboatao"value="Muribeca">Muribeca</option>
                <option data-cidade="Recife"value="Nova Descoberta">Nova Descoberta</option>
                <option data-cidade="Olinda"value="Ouro Preto">Ouro Preto</option>
                <option data-cidade="Recife"value="Paissandu">Paissandu</option>
                <option data-cidade="Recife"value="Parnamirim">Parnamirim</option>
                <option data-cidade="Recife"value="Passarinho">Passarinho</option>
                <option data-cidade="Recife"value="Pina">Pina</option>
                <option data-cidade="Jaboatao"value="Piedade">Piedade</option>
                <option data-cidade="Olinda"value="Peixinhos">Peixinhos</option>
                <option data-cidade="Recife"value="Poço da Panela">Poço da Panela</option>
                <option data-cidade="Recife"value="Prado">Prado</option>
                <option data-cidade="Jaboatao"value="Prazeres">Prazeres</option>
                <option data-cidade="Olinda"value="Rio Doce">Rio Doce</option>
                <option data-cidade="Recife"value="Rosarinho">Rosarinho</option>
                <option data-cidade="Recife"value="Roda de Fogo">Roda de Fogo</option>
                <option data-cidade="Olinda"value="Salgadinho">Salgadinho</option>
                <option data-cidade="Recife"value="San Martin">San Martin</option>
                <option data-cidade="Recife"value="Sancho">Sancho</option>
                <option data-cidade="Recife"value="Santana">Santana</option>
                <option data-cidade="Recife"value="Santo Amaro">Santo Amaro</option>
                <option data-cidade="Recife"value="Santo Antônio">Santo Antônio</option>
                <option data-cidade="Olinda"value="São Benedito">São Benedito</option>
                <option data-cidade="Recife"value="São José">São José</option>
                <option data-cidade="Recife"value="Sapucaia">Sapucaia</option>
                <option data-cidade="Recife"value="Setúbal">Setúbal</option>
                <option data-cidade="Olinda"value="Sítio Novo">Sítio Novo</option>
                <option data-cidade="Olinda"value="Tabajara">Tabajara</option>
                <option data-cidade="Recife"value="Tamarineira">Tamarineira</option>
                <option data-cidade="Recife"value="Tejipió">Tejipió</option>
                <option data-cidade="Recife"value="Torre">Torre</option>
                <option data-cidade="Recife"value="Torreão">Torreão</option>
                <option data-cidade="Recife"value="Torrões">Torrões</option>
                <option data-cidade="Recife"value="Totó">Totó</option>
                <option data-cidade="Olinda"value="Varadouro">Varadouro</option>
                <option data-cidade="Recife"value="Varzea">Várzea</option>
                <option data-cidade="Recife"value="Vasco da Gama">Vasco da Gama</option>
                <option data-cidade="Olinda"value="Vila Popular">Vila Pupular</option>
                <option data-cidade="Jaboatao"value="Vila Tamandaré">Vila Tamandaré</option>
                <option data-cidade="Recife"value="Zumbi">Zumbi</option>
                <option value=""></option>
              </select>
  <!-- <script>
               var bairros = $('select[name="bairroPdt"] option');
              $('select[name="cidadePdt"]').on('change', function () {
                  var Cidade = this.value;
                  var novoSelect = bairros.filter(function () {
                      return $(this).data('cidade') == Cidade;
                  });
                  $('select[name="bairroPdt"]').html(novoSelect);
              });
</script> -->

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