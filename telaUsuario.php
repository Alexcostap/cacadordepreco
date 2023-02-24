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
    <link rel="stylesheet" href="css/cadastroProduto.css">
    <!-- <script> src="javascript/cadastrarProduto.js"</script> -->
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
        <a class="nav-link " id="tituloUsuario" href="telaUsuarioProdutos.php">Meus Produtos</a>
    </li>

    </ul>
    <br> <br>
        <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Nome do Caçador</label>
    <input type="text" class="form-control" id="telaUsuarioNomeDoCacador" placeholder="">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">E-mail do Caçador</label>
    <input type="text" class="form-control" id="telaUsuarioEmail" placeholder="">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Login do Caçador</label>
    <input type="text" class="form-control" id="telaUsuarioLogin" placeholder="">
    </div>
    <label for="formGroupExampleInput2" class="form-label">CPF do Caçador</label>
    <input class="form-control" type="text" placeholder="CPF" aria-label="Disabled input example" disabled>
    <br>
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Telefone</label>
    <input type="text" class="form-control" id="telaUsuarioTelefone" placeholder="">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Data de Nascimento</label>
    <input type="text" class="form-control" id="telaUsuarioDataDeNascimento" placeholder="">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Estado</label>
    <input type="text" class="form-control" id="telaUsuarioEstado" placeholder="">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="telaUsuarioCidade" placeholder="">
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