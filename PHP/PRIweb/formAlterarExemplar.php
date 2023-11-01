<?php session_start();

$titulo_pagina = "Alteração de Exemplar";

require "conexao.php";

require "cabecalho.php";

$idexemplar = filter_input(INPUT_GET, "idexemplar", FILTER_SANITIZE_NUMBER_INT);

$sql = "select idexemplar, anopublicacao, edicaoexemplar from exemplar where idexemplar = $idexemplar order by idexemplar";
$stmt = $conn -> query($sql);

$_SESSION['idexemplar'] = $idexemplar;

while ($row = $stmt->fetch()) {
    $anopublicacao = $row['anopublicacao'];
    $edicaoexemplar = $row['edicaoexemplar'];
}

?>


<div class="row justify-content-md-center" style="width: 100%; display: flex;">
<div class="col-7">
<div style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: 5%;">
<form action="alterarExemplar.php" method="POST">
<h1 class="h3 mb-3 fw-normal" style="text-align: center;"> Edição de Exemplar </h1>

<div class="form-floating mb-2">
    <label for="anopublicacao" class="form-label"> Ano publicação </label>
    <input type="number" class="form-control" id="anopublicacao" name="anopublicacao" value="<?= $anopublicacao ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="edicao" class="form-label"> Edição </label>
    <input type="number" class="form-control" id="edicao" name="edicao" value="<?= $edicaoexemplar ?>" required>
</div>

<button type="submit" class="btn btn-primary justify-content-end float-right" style="background-color: #D9A658; border-color: #F8CF86; color: white;"> Gravar </button>
</form>
<a href="listagemExemplar.php"> <button type="reset" class="btn btn-danger"> Cancelar </button> </a>
</div>
</div>
</div>
</div>



<?php

require "rodape.php";

?>