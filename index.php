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
      .card-login {
        padding: 30px 0 0 0;
        width: 400px;
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
        border-radius: 8px 8px 0 0;
        font-size: 1.25rem;
        font-weight: bold;
      }
      .btn-rosa {
        background-color: #FF4C9D;
        border-color: #FF4C9D;
        color: white;
      }
      .btn-rosa:hover {
        background-color: #ff3287;
        border-color: #ff3287;
      }
      .form-control {
        border-radius: 20px; /* Deixa os campos de input com bordas arredondadas */
        padding: 10px;
      }
      .text-danger {
        margin-top: 10px;
        font-size: 0.9rem;
      }
      .footer {
        margin-top: 30px;
        text-align: center;
        color: #888;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Cássia Resolve: Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">
        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>

            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <!-- Mensagens de erro -->
                <? if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>
                  <div class="text-danger">
                    <i class="fas fa-exclamation-triangle"></i> Usuário ou senha inválido(s)
                  </div>
                <? } ?>

                <? if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
                  <div class="text-danger">
                    <i class="fas fa-lock"></i> Faça login antes de acessar as páginas protegidas.
                  </div>
                <? } ?>

                <button class="btn btn-lg btn-rosa btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      &copy; 2024 Cássia Resolve Help Desk. Todos os direitos reservados.
    </div>

    <!-- Font Awesome para ícones -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  </body>
</html>
