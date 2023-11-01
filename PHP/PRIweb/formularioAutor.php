<?php session_start();

$titulo_pagina = "Cadastro de Autores";

require "conexao.php";

require "cabecalho.php";

?>

<div class="row justify-content-md-center" style="width: 100%; display: flex;">
<div class="col-3">
    <br><br><br><br><br>
<div style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: 5%;">
<form action="cadastroAutor.php" method="POST">
<h1 class="h3 mb-3 fw-normal" style="text-align: center;"> Cadastro de Autor </h1>


<div class="mb-3">
    <label for="nome" class="form-label"> Nome </label>
    <input type="text" class="form-control" id="nome" name="nome" required>
</div>
<div class="mb-3">
    <label for="idade" class="form-label"> Idade </label>
    <input type="number" class="form-control" id="idade" name="idade" required>
</div>
<div class="mb-3">
    <label for="tempoCarreira" class="form-label"> Tempo de Carreira </label>
    <input type="number" class="form-control" id="tempoCarreira" name="tempoCarreira" required>
</div>

<button type="submit" class="btn btn-primary justify-content-end float-right" style="background-color: #D9A658; border-color: #F8CF86; color: white;"> Gravar </button>
</form>
<a href="listagemAutor.php"><button class="btn btn-danger"> Cancelar </button></a>
</div>
</div>
</div>
</div>


<?php

require "rodape.php";

?>

            