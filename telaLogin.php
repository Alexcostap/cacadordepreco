<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Caçador de Preço</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card my-5">

          <form action="php/login.php" method="post" class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="imagens/logo-cacador-de-preco.png" class="img-fluid"
                width="300px" alt="logo caçador">
            </div>

            <div class="mb-3">
              <input type="text" class="form-control" id="login" name="login" aria-describedby="emailHelp"
                placeholder="Digite seu usuário">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
            </div>
            <div class="text-center">
              <button type="submit" class="btn btn-color px-5 mb-5 w-100">Login</button>
            </div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Ainda não é cadastrado?
               <a href="cadastroCliente.php" class="text-dark fw-bold"> Crie sua conta</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  </body>
</html>