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
    <!-- CSS -->
    <link rel="stylesheet" href="css/telaUsuario.css">
    <link rel="stylesheet" href="css/paginaInicial.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cadastroProduto.css">
    <script> src="javascript/mascaraCadastro.js"</script>
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="imagens/icon-logo.png" type="image/x-icon">
    <link rel="icon" href="imagens/icon-logo.png" type="image/x-icon">

    <title>Caçador de Preço</title>

</head>

<body>
    <?php
    include_once "includes/menu.php"
    ?>
    
    <!-- Perfil Usuário -->
<div class="container">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active " id="tituloUsuario" aria-current="page" href="#"><strong>Dados Pessoais</strong></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="tituloUsuario" href="telaUsuarioProdutos.php">Minhas Caças</a>
        </li>
    </ul>
    <br><br>
    <?php
    $idDoCliente = $_SESSION['id'];
    $consulta=$conexao->query("select * from clientes where id=$idDoCliente");
    $cliente = $consulta->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Nome do Caçador</label>
    <input type="text" class="form-control" id="telaUsuarioNomeDoCacador" value="<?php echo $cliente['nome'];?>" >
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">E-mail do Caçador</label>
    <input type="text" class="form-control" id="telaUsuarioEmail" value="<?php echo $cliente['email'];?>" >
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Login do Caçador</label>
    <input type="text" class="form-control" id="telaUsuarioLogin" value="<?php echo $cliente['login'];?>">
    </div>
    <label for="formGroupExampleInput2"  class="form-label">CPF do Caçador</label>
    <input class="form-control"  type="text" value="<?php echo $cliente['cpf_cnpj'];?>" aria-label="Disabled input example" disabled>
    <br>
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="telaUsuarioTelefone" value="<?php echo $cliente['celular'];?>">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Data de Nascimento</label>
    <input type="text" class="form-control" id="telaUsuarioDataDeNascimento" value="<?php echo $cliente['data_nasc'];?>">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Estado</label>
    <input type="text" class="form-control" id="telaUsuarioEstado" value="<?php echo $cliente['estado'];?>">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="telaUsuarioCidade" value="<?php echo $cliente['cidade'];?>">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Bairro</label>
    <input type="text" class="form-control" id="telaUsuarioBairro" value="<?php echo $cliente['bairro'];?>">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Redefinir Senha</label>
    <input type="text" class="form-control" id="telaUsuarioRedefinirSenha" placeholder="">
    </div>

    <div class="btnEditar">
        <button type='button'  class='btn btn-primary' id="btnCadastrar"><i class='fa-solid'></i>Atualizar meus Dados</button></a>
    </div>
</div>
    <?php
    include_once "includes/rodape.php"
    ?>
</body>
</html>