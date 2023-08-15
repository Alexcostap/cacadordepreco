<?php
  session_start();
?>
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
              <!-- Endereço -->
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
                <option data-cidade="Paulista" value="Arthur Lundgren">Arthur Lundgren</option>
                <option data-cidade="Paulista" value="Janga">Janga</option>
                <option data-cidade="Paulista" value="Pau Amarelo">Pau Amarelo</option>
                <option data-cidade="Paulista" value="Jardim Paulista">Jardim Paulista</option>
                <option data-cidade="Paulista" value="Maranguape I">Maranguape I</option>
                <option data-cidade="Paulista" value="Maranguape II">Maranguape II</option>
                <option data-cidade="Paulista" value="Aurora">Aurora</option>
                <option data-cidade="Paulista" value="Centro">Centro</option>
                <option data-cidade="Paulista" value="Mirueira">Mirueira</option>
                <option data-cidade="Paulista" value="Vila torres galvão">Vila Torres Galvão</option>
                <option data-cidade="Paulista" value="Maria Farinha">Maria Farinha</option>
                <option data-cidade="Paulista" value="Nobre">Nobre</option>
                <option data-cidade="Paulista" value="Nsra da Conceição">Nsra da Conceição</option>
                <option data-cidade="Paulista" value="Paratibe">Paratibe</option>
                <option data-cidade="Paulista" value="Fragoso">Fragoso</option>
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