<?php
  require_once "validador_acesso.php";

  // Chamados
  $chamados = array();

  // Abrir chamado
  $arquivo = fopen('arquivo.hd', 'r');

  // Enquanto houver registros (linhas) a serem recuperados
  while(!feof($arquivo)) { 
    // Linhas
    $registro = fgets($arquivo);
    $chamados[] = $registro;
  }

  // Fechar o arquivo aberto
  fclose($arquivo);
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Cássia Resolve: Help Desk</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      body {
        background-color: #f5f5f5;
        font-family: 'Arial', sans-serif;
      }

      .card-consultar-chamado {
        padding: 30px 0;
        width: 100%;
        margin: 30px auto;
      }

      .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
      }

      .card-header {
        background-color: #343a40;
        color: white;
        text-align: center;
        font-size: 1.25rem;
        font-weight: bold;
        border-radius: 8px 8px 0 0;
      }

      .card-body {
        background-color: #ffffff;
        border-radius: 0 0 8px 8px;
      }

      .btn-azul {
        background-color: #3A81C3; /* Azul inspirado no ícone */
        border-color: #3A81C3;
        color: white;
        transition: background-color 0.3s ease;
        border-radius: 50px;
      }

      .btn-azul:hover {
        background-color: #337AB7;
        border-color: #337AB7;
      }

      .card.mb-3.bg-light {
        border-radius: 8px;
        border: 1px solid #ddd;
      }

      .card-title {
        font-weight: bold;
        color: #3A81C3;
      }

      .card-subtitle {
        color: #888;
      }

      .navbar-brand img {
        border-radius: 50%; 
      }

      .footer {
        margin-top: 30px;
        text-align: center;
        color: #888;
      }
    </style>
  </head>

  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="imagens/logo.png" width="40" height="40" class="d-inline-block align-top" alt="logo">
        Cássia Resolve: Help Desk
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>

    <!-- Container -->
    <div class="container">    
      <div class="row">
        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de Chamados
            </div>
            
            <div class="card-body">

              <!-- Laço para exibir os chamados -->
              <?php foreach($chamados as $chamado) { ?>
              
              <?php
                $chamado_dados = explode('#', $chamado);

                // Exibir apenas chamados do usuário (se o perfil for 2)
                if($_SESSION['perfil_id'] == 2) {
                  if($_SESSION['id'] != $chamado_dados[0]) {
                    continue;
                  }
                }

                // Ignorar chamados incompletos
                if(count($chamado_dados) < 3) {
                  continue;
                }
              ?>

              <!-- Exibição de cada chamado -->
              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?= $chamado_dados[1] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamado_dados[2] ?></h6>
                  <p class="card-text"><?= $chamado_dados[3] ?></p>
                </div>
              </div>

              <?php } ?>

              <!-- Botão Voltar -->
              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-azul btn-block" href="home.php">Voltar</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="footer">
      &copy; 2024 Cássia Resolve Help Desk. Todos os direitos reservados.
    </div>

  </body>
</html>
