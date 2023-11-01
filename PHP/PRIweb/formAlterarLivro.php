<?php session_start();

$titulo_pagina = "Alteração de Livros";

require "conexao.php";

require "cabecalho.php";

$idlivro = filter_input(INPUT_GET, "idlivro", FILTER_SANITIZE_NUMBER_INT);

$sql = "select idlivro, isbn, dtapublicacao, idioma, titulolivro, localpublicacao, sinopse, temalivro, editoralivro from livro where idlivro = $idlivro order by idlivro";
$stmt = $conn -> query($sql);

$_SESSION['idlivro'] = $idlivro;

while ($row = $stmt->fetch()) {
        $isbn = $row['isbn'];
        $dtapublicacao = $row['dtapublicacao'];
        $idioma = $row['idioma'];
        $titulolivro = $row['titulolivro'];
        $localpublicacao = $row['localpublicacao'];
        $sinope = $row['sinopse'];
        $temaLivro = $row['temalivro'];
        $editoraLivro = $row['editoralivro'];
}

?>

<div class="row justify-content-md-center" style="width: 100%; display: flex;">
<div class="col-7">
<div style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: 5%;">
<form action="alterarLivro.php" method="POST">
<h1 class="h3 mb-3 fw-normal" style="text-align: center;"> Edição de Livro </h1>
<div class="form-floating mb-2">
    <label for="isbn" class="form-label"> ISBN </label>
    <input type="number" class="form-control" id="isbn" name="isbn" value="<?php echo $isbn; ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="dtaPublicacao" class="form-label"> Data de Publicação </label>
    <input type="date" class="form-control" id="dtapublicacao" name="dtapublicacao" value="<?php echo $dtapublicacao; ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="idioma" class="form-label"> Idioma </label>
    <input type="text" class="form-control" id="idioma" name="idioma" value="<?php echo $idioma; ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="tituloLivro" class="form-label"> Título </label>
    <input type="text" class="form-control" id="titulolivro" name="titulolivro" value="<?php echo $titulolivro; ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="localPublicacao" class="form-label"> Local de Publicação </label>
    <input type="text" class="form-control" id="localpublicacao" name="localpublicacao" value="<?php echo $localpublicacao; ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="sinopse" class="form-label"> Sinopse </label>
    <input type="text" class="form-control" id="sinopse" name="sinopse" value="<?php echo $sinope; ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="temaLivro" class="form-label"> Gênero </label>
    <input type="text" class="form-control" id="temalivro" name="temalivro" value="<?php echo $temaLivro; ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="editoraLivro" class="form-label"> Editora </label>
    <input type="text" class="form-control" id="editoralivro" name="editoralivro" value="<?php echo $editoraLivro; ?>" required>
</div>

<button type="submit" class="btn btn-primary justify-content-end float-right" style="background-color: #D9A658; border-color: #F8CF86; color: white;"> Gravar </button>
</form>
<a href="listagemLivro.php"> <button type="reset" class="btn btn-danger"> Cancelar </button> </a>
</div>
</div>
</div>
</div>

<?php

require "rodape.php";

?>

            