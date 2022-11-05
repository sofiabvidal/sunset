<?php session_start();

$titulo_pagina = "Alteração de Autores";

require "conexao.php";

require "cabecalho.php";

$idautor = filter_input(INPUT_GET, "idautor", FILTER_SANITIZE_NUMBER_INT);

$sql = "select idautor, nome, idade, tempocarreira from autor where idautor = $idautor order by idautor";
$stmt = $conn -> query($sql);

$_SESSION['idautor'] = $idautor;

while ($row = $stmt->fetch()) {
        $nome = $row['nome'];
        $idade = $row['idade'];
        $tempocarreira = $row['tempocarreira'];
}

?>

<form action="alterarAutor.php" method="POST">
<div class="row">
<div class="col-8">
<?php /* <div class="mb-3">
    <label for="idautor" class="form-label"> ID Autor </label>
    <input type="text" class="form-control" id="idautor" name="idautor" value="<?php echo $idautor; ?>" disabled required>
</div> */
?>
<div class="mb-3">
    <label for="nome" class="form-label"> Nome </label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required>
</div>
<div class="mb-3">
    <label for="idade" class="form-label"> Idade </label>
    <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $idade; ?>" required>
</div>
<div class="mb-3">
    <label for="tempoCarreira" class="form-label"> Tempo de Carreira </label>
    <input type="number" class="form-control" id="tempocarreira" name="tempocarreira" value="<?php echo $tempocarreira; ?>" required>
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

            