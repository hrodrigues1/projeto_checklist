<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="shortcut icon" href="assets/img/rounded.png" />
    <title>Organizaí App</title>
  </head>
  <body id="fundo">
    <div class="card" id="login_view">
      <!-- <img src="..." class="card-img-top" alt="..."> -->
      <div class="card-body">
        <form action="../controller/executa_login.php" method="POST" role="form">
          <div>
            <img src="assets/img/logo1.png" class="img-fluid" alt="...">

          </div>
          <div class="form-group">
            <label>Login</label>
            <input type="email" class="form-control" id="login" name="login" aria-describedby="emailHelp" placeholder="Informe seu e-mail">
            <small id="emailHelp" class="form-text text-muted">Nós nunca compartilharemos seu e-mail com ninguém.</small>
          </div>
          <div class="form-group">
            <label>Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Informe sua senha">
          </div>

          <button type="submit" class="btn btn-light btn-lg btn-block">Entrar</button>
          
          <div class="cadastre-se">
            Ainda não tem Cadastro? <a href="newUser.php">Cadastre-se</a>
          </div>
        </form>
      </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>