<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="#" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="logoHeader img-fluid" src="imagens/logo-cacador-de-preco.png" alt="Logo Caçador">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-dark"> <i class="fa-solid fa-heart"></i> Pagina Inicial</a></li>
        <li><a href="#" class="nav-link px-2 link-dark"><i class="fa-solid fa-tags"></i> Promoções</a></li>
        <li><a href="#" class="nav-link px-2 link-dark"><i class="fa-solid fa-store"></i> Supermercados</a></li>
      </ul>

    <div class="col-md-4 text-end">
      <?php
       
        if (!isset($_SESSION['login']) && !isset($_SESSION['senha']))
        {
          echo"<a href='telaLogin.php'><button type='button'  class='btn btn-outline-primary me-2' id='btnEntrar'>Entrar</button></a>
          <a href='telaLogin.php'><button type='button'  class='btn btn-primary' id='btnCadastrar'>Cadastrar Produto</button></a>";
        }else{
          echo"<a href='telaLogin.php'><button type='button'  class='btn btn-outline-primary me-2' id='btnEntrar'>" . "<i class='fa-sharp fa-regular fa-user'> </i> " ."Olá <strong> " .  $_SESSION['login'] . "</strong> </button></a>";
          echo"<a href='cadastroProduto.php'><button type='button'  class='btn btn-primary' id='btnCadastrar'>" . "<i class='fa-solid fa-cookie-bite'></i>" . " Cadastre agora seu Produto!</button></a>";          
        }
       ?>
      </div>
    </header>
  </div>