<?php session_start();

$titulo_pagina = "Cadastro de Livros";

require "conexao.php";

require "cabecalho.php";

?>

<div class="row justify-content-md-center" style="width: 100%; display: flex;">
<div class="col-7">
<form action="cadastroLivro.php" method="POST" style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: 5%;">
<h1 class="h3 mb-3 fw-normal" style="text-align: center;"> Cadastro de livro </h1>


<div class="form-floating mb-2">
    <label for="isbn" class="form-label"> ISBN </label>
    <input type="number" class="form-control" id="isbn" name="isbn" required>
</div>
<div class="form-floating mb-2">
    <label for="dtaPublicacao" class="form-label"> Data de Publicação </label>
    <input type="number" class="form-control" id="dtaPublicacao" name="dtaPublicacao" placeholder="DD/MM/YYYY" onfocus="(this.type='date')" required>
</div>
<div class="form-floating mb-2">
    <label for="idioma" class="form-label"> Idioma </label>
    <input type="text" class="form-control" id="idioma" name="idioma" required>
</div>
<div class="form-floating mb-2">
    <label for="tituloLivro" class="form-label"> Título </label>
    <input type="text" class="form-control" id="tituloLivro" name="tituloLivro" required>
</div>
<div class="form-floating mb-2">
    <label for="localPublicacao" class="form-label"> Local de Publicação </label>
    <input type="text" class="form-control" id="localPublicacao" name="localPublicacao" required>
</div>
<div class="form-floating mb-2">
    <label for="sinopse" class="form-label"> Sinopse </label>
    <input type="text" class="form-control" id="sinopse" name="sinopse" required>
</div>
<div class="form-floating mb-2">
    <label for="temaLivro" class="form-label"> Gênero </label>
    <input type="text" class="form-control" id="temaLivro" name="temaLivro" required>
</div>
<div class="form-floating mb-2">
    <label for="editoraLivro" class="form-label"> Editora </label>
    <input type="text" class="form-control" id="editoraLivro" name="editoraLivro" required>
</div>

<div class="form-floating mb-2">
    <label for="listAutor" class="form-label"> Autor </label>
    <select class="form-select mb-5" aria-label="Defaul select exmaple" id="listAutor" name="listAutor">
        <option value="" selected> Selecione um autor </option>
        <?php
        $sql = "select idautor, nome, idade, tempocarreira from autor order by idautor";
        $stmt = $conn -> query($sql);

        while ($row = $stmt->fetch()) {
            echo "<option value=" . $row['idautor'] . ">" . $row['nome'] . "</option>";
        }
        ?>
    </select>

</div>

<button type="submit" class="btn btn-primary" style="background-color: #D9A658; border-color: #F8CF86; color: white;"> Gravar </button>
<button type="reset" class="btn btn-danger"> Cancelar </button>

</div>
</div>
</div>

</form>

<?php

require "rodape.php";

?>

            