<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Cadastre-se</title>
  <!-- servidor do bootstrap-->
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
  <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--organização da pagina-->  
    <link rel="stylesheet" href="css/cadastroCliente.css"> 
  <!--css menu & footer-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="css/paginaInicial.css">
  <link rel="stylesheet" href="css/footer.css">
   <!-- Fav Icon -->
   <link rel="shortcut icon" href="imagens/icon-logo.png" type="image/x-icon">
  <link rel="icon" href="imagens/icon-logo.png" type="image/x-icon">
  
</head>

<body class="bg-light">

  <!--include menu-->  
  <?php include_once "includes/menu.php"?>

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <h2>Faça seu Cadastro</h2>
        <p class="lead">Realize seu cadastro gratuitamente e consiga privilégios exclusivos para membros.</p>
      </div>

      <div class="row g-5">
        <div class="col-md-12 col-lg-12">
          <form class="needs-validation" novalidate action="php/cadastro.php" method="post">
           <div class="row g-3">
              <div class="col-sm-6">


              <!-- NOME -->


                <label for="username" class="form-label">Nome Completo</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" name="nome" id="nome"  required>
                  <div class="invalid-feedback">
                    Informe seu Nome.
                  </div>
                  </div>
                </div>
          
                <div class="col-6">


                <!-- LOGIN -->


                <label for="username" class="form-label">Login</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" id="username" name="login" placeholder="Usuário" required>
                  <div class="invalid-feedback">
                    Informe um login Válido.
                  </div>
                </div>
              </div>

              <div class="col-6">


              <!-- SENHA -->


                <label for="username" class="form-label">Senha</label>
                <div class="input-group has-validation">
                  <input type="password" class="form-control" id="senha"  name="senha" placeholder="senha" required>
                <div class="invalid-feedback">
                    Informe sua senha.
                  </div>
                </div>
              </div>

              <div class="col-6">


              <!-- CONFIRME SUA SENHA -->


                <label for="usuario" class="form-label">Confirme sua senha</label>
                <div class="input-group has-validation">
                  <input type="password" class="form-control" id="confirmarSenha" name="conf-senha" placeholder="Confirme sua senha" required>
                <div class="invalid-feedback">
                    Confirme sua senha.
                  </div>
                </div>
              </div>

              <div class="col-6">


              <!-- EMAIL -->


                <label for="usuario" class="form-label">Email</label>
                <div class="input-group has-validation">
                  <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@exemplo.com" required>
                <div class="invalid-feedback">
                    Informe seu email.
                  </div>
                </div>
              </div>

              <div class="col-6">


              <!-- CELULAR -->


                <label for="usuario" class="form-label">Numero do celular</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" id="celu" name="celular" placeholder="(00) 0.0000-0000" required onkeypress="mascaraCelular()" maxLength="15" autocomplete="off">
                <div class="invalid-feedback">
                    Informe seu número do celular.
                  </div>
                </div>
              </div>

              <div class="col-6">


              <!--  DATA DE NASCIMENTO -->


                <label for="data-de-nascimento" class="form-label">Data de nascimento</label>
                <div class="input-group has-validation">
                  <input type="texte" class="form-control" name="dataNascimento" id="dataNascimento" required onkeypress="dataNascimentos()" maxLength="10" autocomplete="off">
                <div class="invalid-feedback">
                    Informe sua data de nascimento.
                  </div>
                </div>
              </div>

              <div class="col-6">


              <!-- CPF -->


                <label for="usuario" class="form-label">CPF</label>
                <div class="input-group has-validation">
                  <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" required onkeypress="mascaraCPF()" maxLength="14" autocomplete="off">
                <div class="invalid-feedback">
                    Informe seu número do celular.
                  </div>
                </div>
              </div>

              <br>

              <div class="col-md-6">


                <label for="country" class="form-label">Estado</label>
                <select class="form-select" name="estado" id="estado" required>
                  <option value="Pernambuco">Pernambuco</option>
                </select>
                <div class="invalid-feedback">
                  Informe seu Estado.
                </div>
              </div>

              <div class="col-md-6">
                <label for="state" class="form-label">Cidade</label>
                <select class="form-select" name="cidade" id="cidade" required>
                <option value="Recife">Recife</option>
                <option value="Camaragibe">Camaragibe</option>
                <option value="Jaboatão">Jaboatão</option>
                <option value="Olinda">Olinda</option>
                <option value="Itamaracá">Itamaracá</option>
                </select>
                
                <div class="invalid-feedback">
                  Informe sua Cidade.
                </div>
              </div>

              <div class="col-md-6">
                <label for="state" class="form-label">Bairro</label>
                <select class="form-select" name="bairro" id="bairro" required>
                <option value="Bongi">Bongi</option>
                </select>
                
                <div class="invalid-feedback">
                  Informe seu Bairro.
                </div>
              </div>
            <hr class="my-4">
            <button  class="w-100 btn btn-primary btn-lg" type="submit" value="Cadastrar">Cadastrar</button>
          </form>
          </div>
        </div>
      </div>
    </main>
  </div>

  <!--LINKS PARA AS MASCARAS CPF/CELULAR/DATA DE NASCIMENTO-->

  <script src="javascript/mascaraCadastro.js"></script>


  <?php include_once "includes/rodape.php"?>


</body>
</html>