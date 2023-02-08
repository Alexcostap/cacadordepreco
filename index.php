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

  <title>Caçador de Preço</title>
</head>

<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <img class="logoHeader img-fluid" src="imagens/logo-cacador-de-preco.png" alt="Logo Caçador">
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-secondary">Pagina Inicial</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Promoções</a></li>
        <li><a href="#" class="nav-link px-2 link-dark">Supermercados</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2" id="btnEntrar">Entrar</button>
        <button type="button" class="btn btn-primary" id="btnCadastrar">Cadastrar Produto</button>
      </div>
    </header>
  </div>

  <!-- SLIDE BOOTSTRAP -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./imagens/melhores.png" class="d-block w-100" alt="OFERTAS">
      </div>
    </div>
  </div>
  
  <!-- 
  <div class="container">
    <div class="lista-patrocinador">
      <div class="produto-patrocinador">1</div>
      <div class="produto-patrocinador">2</div>
      <div class="produto-patrocinador">3</div>
    </div>
  </div> -->
<br><br>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
          </svg>

          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
          </svg>

          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a short card.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
          </svg>

          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
          </svg>


          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>