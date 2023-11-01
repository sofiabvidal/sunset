<?php session_start();

$titulo_pagina = "Aluguel de Exemplar";

require "conexao.php";

require "cabecalho.php";

$hoje = date("Y-m-d");

$prontuario = $_SESSION["prontuario"];
$idexemplar = filter_input(INPUT_GET, "idexemplar", FILTER_SANITIZE_SPECIAL_CHARS);

?>

<div class="row justify-content-md-center" style="width: 100%; display: flex;">
<div class="col-7">
<div style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: 5%;">
<form action="aluguelExemplar.php" method="POST">
<h1 class="h3 mb-3 fw-normal" style="text-align: center;"> Empréstimo de Exemplar </h1>
<div class="form-floating mb-2">
    <label for="prontuariousuario" class="form-label"> Prontuario </label>
    <input type="text" class="form-control" id="prontuariousuario" name="prontuariousuario" value="<?php echo $prontuario; ?>" required readonly>
</div>
<div class="form-floating mb-2">
    <label for="dtaemprestimo" class="form-label"> Data do Empréstimo </label>
    <input type="date" class="form-control" id="dtaemprestimo" name="dtaemprestimo" value="<?= $hoje ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="dtadevolucao" class="form-label"> Data da Devolução </label>
    <input type="date" class="form-control" id="dtadevolucao" name="dtadevolucao" value="<?= date('Y-m-d', strtotime("$hoje +7 day")) ?>" required>
</div>
<div class="form-floating mb-2">
    <label for="listExemplar" class="form-label"> Exemplar </label>
    <select class="form-select mb-5 form-control" aria-label="Defaul select example" id="listExemplar" name="listExemplar">
        <?php
        $sql = "select exemplar.idexemplar, livro.titulolivro from exemplar inner join livro on exemplar.idlivro = livro.idlivro";
        $stmt = $conn -> query($sql);

        while ($row = $stmt->fetch()) {
            if ($idexemplar == $row['idexemplar']){
                echo "<option value=" . $row['idexemplar'] . " selected>" . $row['titulolivro'] . "</option>";
            } else {
                echo "<option value=" . $row['idexemplar'] . ">" . $row['titulolivro'] . "</option>";
            }
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