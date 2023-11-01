<?php session_start();

$titulo_pagina = "Cadastro de Exemplar";

require "conexao.php";

require "cabecalho.php";

?>

<div class="row justify-content-md-center" style="width: 100%; display: flex;">
<div class="col-7">
<div style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: 5%;">
<form action="cadastroExemplar.php" method="POST">
<h1 class="h3 mb-3 fw-normal" style="text-align: center;"> Cadastro de Exemplar </h1>

<div class="form-floating mb-2">
    <label for="anopublicacao" class="form-label"> Ano publicação </label>
    <input type="number" class="form-control" id="anopublicacao" name="anopublicacao" required>
</div>
<div class="form-floating mb-2">
    <label for="edicao" class="form-label"> Edição </label>
    <input type="number" class="form-control" id="edicao" name="edicao" required>
</div>
<div class="form-floating mb-2">
    <label for="listLivro" class="form-label"> Livro </label>
    <select class="form-select mb-5 form-control" aria-label="Defaul select exmaple" id="listLivro" name="listLivro">
        <option value="" selected> Selecione um livro </option>
        <?php
        $sql = "select livro.idlivro, livro.titulolivro from ((autor inner join livroAutor on autor.idAutor = livroAutor.idAutor) inner join livro on livroAutor.idLivro = livro.idLivro) order by idlivro";
        $stmt = $conn -> query($sql);

        while ($row = $stmt->fetch()) {
            echo "<option value=" . $row['idlivro'] . ">" . $row['titulolivro'] . "</option>";
        }
        ?>
    </select>

</div>

<button type="submit" class="btn btn-primary justify-content-end float-right" style="background-color: #D9A658; border-color: #F8CF86; color: white;"> Gravar </button>
</form>
<a href="listagemExemplar.php"><button type="reset" class="btn btn-danger"> Cancelar </button></a>
</div>
</div>
</div>
</div>

<?php

require "rodape.php";

?>