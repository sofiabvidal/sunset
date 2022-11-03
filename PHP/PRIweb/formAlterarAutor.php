<?php

$titulo_pagina = "Alteração de Autores";

require "conexao.php";

require "cabecalho.php";

?>

<form action="alterarAutor.php" method="POST">
<div class="row">
<div class="col-8">
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

<button type="submit" class="btn btn-primary"> Gravar </button>
<button type="reset" class="btn btn-primary"> Cancelar </button>

</div>
</div>
</div>

</form>

<?php

require "rodape.php";

?>

            