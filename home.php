<?php
  require_once "validador_acesso.php";
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Cássia Resolve: Help Desk</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      body {
        background-color: #f5f5f5; /* Fundo suave */
        font-family: 'Arial', sans-serif;
      }

      .card-home {
        padding: 30px 0;
        width: 100%;
        margin: 50px auto;
      }

      .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
        border-radius: 8px; /* Bordas arredondadas */
      }

      .card-header {
        background-color: #343a40;
        color: white;
        text-align: center;
        font-size: 1.25rem;
        font-weight: bold;
        border-radius: 8px 8px 0 0;
      }

      .btn {
        border-radius: 50px;
      }

      .img-btn {
        transition: transform 0.2s ease-in-out; /* Animação ao passar o mouse */
      }

      .img-btn:hover {
        transform: scale(1.1); /* Aumenta o tamanho ao passar o mouse */
      }

      .navbar-brand img {
        border-radius: 50%; /* Logotipo com borda arredondada */
      }

      .footer {
        margin-top: 30px;
        text-align: center;
        color: #888;
      }
    </style>
  </head>

  <body>

    <!-- Barra de navegação -->
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

    <!-- Container Principal -->
    <div class="container">    
      <div class="row">
        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                
                <!-- Abrir Chamado -->
                <div class="col-6 d-flex justify-content-center">
                  <a href="abrir_chamado.php">
                    <img src="imagens/formulario_abrir.png" width="100" height="100" class="img-btn" alt="Abrir Chamado">
                    <p>Abrir Chamado</p> <!-- Texto abaixo da imagem -->
                  </a>
                </div>
                
                <!-- Consultar Chamado -->
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_chamado.php">
                    <img src="imagens/formulario_consultar.png" width="100" height="100" class="img-btn" alt="Consultar Chamado">
                    <p>Consultar Chamado</p> <!-- Texto abaixo da imagem -->
                  </a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Rodapé -->
    <div class="footer">
      &copy; 2024 Cássia Resolve Help Desk. Todos os direitos reservados.
    </div>

  </body>
</html>