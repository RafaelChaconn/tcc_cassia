<?php require_once "validador_acesso.php"; ?>

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

      .card-abrir-chamado {
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

      .btn-rosa {
        background-color: #FF4CA2; /* Rosa inspirado na sua imagem */
        border-color: #FF4CA2;
        color: white;
        transition: background-color 0.3s ease;
        border-radius: 50px;
      }

      .btn-rosa:hover {
        background-color: #FF3285;
        border-color: #FF3285;
      }

      .form-control {
        border-radius: 8px;
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
        <div class="card-abrir-chamado">
          <div class="card">
            <div class="card-header">
              Abertura de chamado
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  
                  <form method="post" action="registra_chamado.php">
                    <div class="form-group">
                      <label>Título</label>
                      <input name="titulo" type="text" class="form-control" placeholder="Digite o título do chamado">
                    </div>
                    
                    <div class="form-group">
                      <label>Categoria</label>
                      <select name="categoria" class="form-control">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Descrição</label>
                      <textarea name="descricao" class="form-control" rows="3" placeholder="Descreva o problema"></textarea>
                    </div>

                    <!-- Botões -->
                    <div class="row mt-5">
                      <div class="col-6">
                        <a class="btn btn-lg btn-azul btn-block" href="home.php">Voltar</a>
                      </div>

                      <div class="col-6">
                        <button class="btn btn-lg btn-rosa btn-block" type="submit">Abrir</button>
                      </div>
                    </div>
                  </form>

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