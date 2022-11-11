<!doctype html> 
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/logo2.png">

    <title> Sunset </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
html {
    height: 100%;
    min-height: 100%;
}

body {
    display: flex;
    flex-direction: column;
    min-height: 100%;
}

footer {
    margin-top: auto;
}
</style> 
  </head>
<?php error_reporting(E_ERROR | E_PARSE); ?>
  <body style="background-image: url(img/fundo2.png); background-repeat: no-repeat; background-size: 100%"> 
    <nav style="background-color: #CB7B00; color: white;" class="navbar navbar-expand-md"> 
      <a style="color: white;" class="navbar-brand" href="index.php"> <img id="logo" class="bi me-1" width="45em" src="img/logo3.png"></img> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
          <li class="nav-item">
            <a style="color: white;" class="nav-link" href="listagemAutor.php"> Autores </a>
          </li>
          <a style="color: white;" class="nav-link" href="listagemLivro.php"> Livros </a>
          </li>

          <?php 
            if($_SESSION['logado'] == false):
          ?>
          <li class="nav-item">
            <a style="color: white;" class="nav-link disabled" href="formularioLogin.php"> Área da Bibliotecária </a>
          </li>
          <?php 
            endif;
            if($_SESSION['logado'] == true):
          ?>
          <li class="nav-item">
            <a href="logout.php">
              <button style="background-color: #D9A658; border-color: #F8CF86; color: white;" type="button" class="btn btn-danger"> Log-out </button>
            </a>
          </li>
          <?php 
            endif;
          ?>

          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="pesquisa.php" method="POST">
          <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search" id="texto" name="texto">
          <button style="background-color: #D9A658; border-color: #F8CF86; color: white;" class="btn btn-outline-success my-2 my-sm-0" type="submit"> Pesquisar </button>
        </form>
      </div>
    </nav>

    