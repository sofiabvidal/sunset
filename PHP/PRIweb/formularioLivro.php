<?php

$titulo_pagina = "Cadastro de Livros";

require "conexao.php";

require "cabecalho.php";

?>

<form action="cadastroLivro.php" method="POST">
<div class="row">
<div class="col-8">
<div class="mb-3">
    <label for="isbn" class="form-label"> ISBN </label>
    <input type="number" class="form-control" id="isbn" name="isbn" required>
</div>
<div class="mb-3">
    <label for="dtaPublicacao" class="form-label"> Data de Publicação </label>
    <input type="number" class="form-control" id="dtaPublicacao" name="dtaPublicacao" required>
</div>
<div class="mb-3">
    <label for="idioma" class="form-label"> Idioma </label>
    <input type="text" class="form-control" id="idioma" name="idioma" required>
</div>
<div class="mb-3">
    <label for="tituloLivro" class="form-label"> Título </label>
    <input type="text" class="form-control" id="tituloLivro" name="tituloLivro" required>
</div>
<div class="mb-3">
    <label for="localPublicacao" class="form-label"> Local de Publicação </label>
    <input type="text" class="form-control" id="localPublicacao" name="localPublicacao" required>
</div>
<div class="mb-3">
    <label for="sinopse" class="form-label"> Sinopse </label>
    <input type="text" class="form-control" id="sinopse" name="sinopse" required>
</div>
<div class="mb-3">
    <label for="temaLivro" class="form-label"> Gênero </label>
    <input type="text" class="form-control" id="temaLivro" name="temaLivro" required>
</div>
<div class="mb-3">
    <label for="editoraLivro" class="form-label"> Editora </label>
    <input type="text" class="form-control" id="editoraLivro" name="editoraLivro" required>
</div>

<button type="submit" class="btn btn-primary"> Gravar </button>
<button type="reset" class="btn btn-primary"> Cancelar </button>

</div>
</div>
</div>

</form>

<?php

require "rodape.php";

?>

            