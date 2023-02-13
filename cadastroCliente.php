<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Cadastre-se</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/checkout.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo-cadastro-usuario.css">
    
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="imagens/logo-cacador-de-preco.png" alt="" width="180" height="80">
      <h2>Faça seu Cadastro</h2>
      <p class="lead">Realize seu cadastro gratuitamente e consiga privilégios exclusivos para membros.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-7 col-lg-8">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-12">
              <label for="username" class="form-label">Nome Completo</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username"  required>
              <div class="invalid-feedback">
                  Informe seu Nome.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Usuário</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="username" placeholder="Usuário" required>
              <div class="invalid-feedback">
                  Informe seu usuário.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Senha</label>
              <div class="input-group has-validation">
                <input type="password" class="form-control" id="senha" placeholder="Senha" required>
              <div class="invalid-feedback">
                  Informe sua senha.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="usuario" class="form-label">Confirme sua senha</label>
              <div class="input-group has-validation">
                <input type="password" class="form-control" id="confirmarSenha" placeholder="Confirme sua senha" required>
              <div class="invalid-feedback">
                  Confirme sua senha.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="usuario" class="form-label">Email</label>
              <div class="input-group has-validation">
                <input type="email" class="form-control" id="email" placeholder="exemplo@exemplo.com" required>
              <div class="invalid-feedback">
                  Informe seu email.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="usuario" class="form-label">Numero do celular</label>
              <div class="input-group has-validation">
                <input type="number" class="form-control" id="celular" placeholder="(00) 0.0000-0000" required>
              <div class="invalid-feedback">
                  Informe seu número do celular.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="data-de-nascimento" class="form-label">Data de nascimento</label>
              <div class="input-group has-validation">
                <input type="number" class="form-control" id="data-de-nascimento" required>
              <div class="invalid-feedback">
                  Informe sua data de nascimento.
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Estado</label>
              <select class="form-select" id="country" required>
              </select>
              <div class="invalid-feedback">
                Informe seu Estado.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Cidade</label>
              <select class="form-select" id="state" required>
              </select>
              
              <div class="invalid-feedback">
                Informe sua Cidade.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Bairro</label>
              <select class="form-select" id="state" required>
              </select>
              
              <div class="invalid-feedback">
                Informe seu Bairro.
              </div>
            </div>
          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">Confirmar</button>
        </form>
      </div>
    </div>
  </main>
</div>

      <script src="javascript/checkout.js"></script>
  </body>
</html>
