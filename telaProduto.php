<?php
include "conexao/conexao.php";
session_start();

$id=filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
$consulta=$conexao->query("select * from produtos where id =$id");
$produto = $consulta->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
<meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>

  <!-- Bootstrap CSS -->
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' rel='stylesheet'>
  <link href='https://getbootstrap.com/docs/5.2/assets/css/docs.css' rel='stylesheet'>
  <!-- Icons -->
  <link rel='stylesheet' href='https://kit.fontawesome.com/adf9b248e1.css' crossorigin='anonymous'>
  <!-- Css -->
  <link rel='stylesheet' href='css/estilos.css'>
  <link rel='stylesheet' href='css/paginaInicial.css'>
  <link rel='stylesheet' href='css/footer.css'>
  <!-- Fav Icon -->
  <link rel='shortcut icon' href='imagens/icon-logo.png' type='image/x-icon'>
  <link rel='icon' href='imagens/icon-logo.png' type='image/x-icon'>
  <script src='javascript/localizacao.js'></script>
  <title><?php echo "Caçador de Preços - $produto[nome_produto] por apenas R$$produto[preco_produto], no supermercado $produto[mercado_produto] localizado no(a)$produto[mercado_produto]. apenas aqui, no caçador de preços! </title> ";?></title>
</head>
<body> 
<?php
    include_once 'includes/menu.php'
?>

<?php 



echo "
<div class='container'>
<div class='container mt-5 mb-5'>
    <div class='row d-flex justify-content-center'>
        <div class='col-md-10'>
            <div class='card'>
                <div class='row'>
                    <div class='col-md-6'>
                        <div class='images p-3'>
                            <div class='text-center p-4'> 
                                <img id='main-image' src='$produto[caminho_img]' 
                                alt='$produto[nome_produto], $produto[nome_produto] barato, $produto[nome_produto] promoção, $produto[nome_produto] perto de mim,$produto[nome_produto] $produto[descricao_produto],$produto[nome_produto] $produto[mercado_produto],$produto[nome_produto] $produto[bairro_produto],$produto[nome_produto] $produto[cidade_produto],$produto[nome_produto] $produto[cidade_produto],$produto[descricao_produto],$produto[cidade_produto] promoção,$produto[bairro_produto] promoção,barato, promoção,'
                                 srcset='' width='250' />
                                
                            </div>
                        </div>
                    </div>
                    <div class='col-md-6'>
                        <div class='product p-4'>
                            <div class='d-flex justify-content-between align-items-center'>
                               <a href='index.php' class='return'> <div class='d-flex align-items-center'> 
                               <i class= 'fa fa-long-arrow-left ' > </i> <span id='voltar' class='ml-1'> <strong> Voltar </strong></span> </div> </a>
                               
                            </div>
                            
                            <div class='mt-4 mb-3'>
                                <h5 class='text-uppercase'>$produto[nome_produto]</h5>
                                <div class='price d-flex flex-row align-items-center'> <span class='act-price'>R$$produto[preco_produto]</span>
                                    
                                </div>
                            </div>
                            <p class='about'>$produto[descricao_produto]</p>
                            <p class='card-text'>
                                <i class='fa-solid fa-location-dot'></i> <strong>Local:</strong> $produto[bairro_produto], $produto[cidade_produto] - $produto[estado_produto] <br>
                                <i class='fa-solid fa-store'></i> <strong>Supermercado:</strong> $produto[mercado_produto]<br>
                                <i class='fa-regular fa-money-bill-1'></i> <strong> Valor:</strong> R$ $produto[preco_produto]<br>     
                                <i class='fa-solid fa-calendar-days'></i> <strong> Data do Cadastro:</strong> $produto[data_de_cadastro]<br>          
                            </p>
                            <div class='cart mt-4 align-items-center'> 
                            <p class='card-text'>
                            Compartilhe agora essa caça com seus amigos: <br>                         
                            <a href='whatsapp://send?text=Olha esse *PROMOÇÃO*! $produto[nome_produto], no Supermercado - $produto[mercado_produto],  $produto[bairro_produto] - $produto[cidade_produto] - $produto[estado_produto] - Valor *(R$ $produto[preco_produto])* -  Confira mais detalhes no site *Caçador de Preco*: https://www.cacadordepreco.com.br/telaProduto.php?id=$produto[id]'> <i class='fa-brands fa-whatsapp fa-xl text-muted'></i></a> 
                            <a href='https://www.facebook.com/sharer/sharer.php?u=https://www.cacadordepreco.com.br/telaProduto.php?id=$produto[id]'><i class='fa-brands fa-facebook fa-xl text-muted'></i></a> </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>";
?>

<?php 
    include_once "includes/rodape.php"
  ?>   
</body>
</html>