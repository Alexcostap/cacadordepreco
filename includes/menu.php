<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="logoHeader img-fluid" src="imagens/logo-cacador-de-preco.png" alt="Logo Caçador">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Pagina Inicial</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Promoções</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Supermercados</a></li>
      </ul>

      
      
      <div class="col-md-3 text-end">
      <?php
        session_start();
        if (!isset($_SESSION['login']) && !isset($_SESSION['senha']))
        {
          echo"<a href='telaLogin.php'><button type='button'  class='btn btn-outline-primary me-2' id='btnEntrar'>Entrar</button></a>
          <a href='telaLogin.php'><button type='button'  class='btn btn-primary' id='btnCadastrar'>Cadastrar Produto</button></a>";
        }else{
          echo"<a href='cadastrarProduto.php'><button type='button'  class='btn btn-primary' id='btnCadastrar'>Cadastre agora seu Produto!</button></a>";          
        }
       ?>
      </div>
    </header>
  </div>