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
<br><br><br><br>
<div class="row justify-content-md-center">
<div class="col-3">
<div style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: 5%;">
<form action="alterarAutor.php" method="POST">
<h1 class="h3 mb-3 fw-normal" style="text-align: center;"> Edição de Autor </h1>
<?php /* <div class="mb-3">
    <label for="idautor" class="form-label"> ID Autor </label>
    <input type="text" class="form-control" id="idautor" name="idautor" value="<?php echo $idautor; ?>" disabled required>
</div> */
?>
<div class="form-floating mb-2">
    <label for="nome" class="form-label"> Nome </label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="idade" class="form-label"> Idade </label>
    <input type="number" class="form-control" id="idade" name="idade" value="<?php echo $idade; ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="tempoCarreira" class="form-label"> Tempo de Carreira </label>
    <input type="number" class="form-control" id="tempocarreira" name="tempocarreira" value="<?php echo $tempocarreira; ?>" required>
</div>

<button type="submit" style="background-color: #D9A658; border-color: #F8CF86; color: white;" class="btn btn-primary justify-content-end float-right"> Gravar </button>
</form>
<a href="listagemAutor.php"> <button type="reset" class="btn btn-danger"> Cancelar </button> </a>
</div>
</div>
</div>
</div>



<?php

require "rodape.php";

?>

            