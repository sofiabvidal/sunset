<?php session_start();

$titulo_pagina = "Alugar exemplar";
require "cabecalho.php";

require "conexao.php";

$prontuario = filter_input(INPUT_POST, "prontuariousuario", FILTER_SANITIZE_SPECIAL_CHARS);
$dtaemprestimo = filter_input(INPUT_POST, "dtaemprestimo", FILTER_SANITIZE_SPECIAL_CHARS);
$dtadevolucao = filter_input(INPUT_POST, "dtadevolucao", FILTER_SANITIZE_SPECIAL_CHARS);
$listExemplar = filter_input(INPUT_POST, "listExemplar", FILTER_SANITIZE_NUMBER_INT);

$sql = "insert into emprestimo (prontuariousuario, dtaemprestimo, dtadevolucao, idexemplar) values (?, ?, ?, ?)";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([strtolower($prontuario), $dtaemprestimo, $dtadevolucao, $listExemplar]);

if ($result == true) {
?>
    <div class="alert alert-success" role="alert">
    <style>
            .alert-success {
                width:400px;
                margin-top: 20px;
                margin-right: 20px;
                margin-left: 20px;
            }
        </style>
        <h4> Dados gravados com sucesso! </h4>
        <a class="btn btn-sm btn-warning" href="listagemExemplar.php">
                        Voltar
        </a>
    </div>
<?php
}  else {
?>
    <div class="alert alert-danger" role="alert">
        <h4> Falha ao efetuar a gravação. </h4>
        <p> <?php echo $stmt->error; ?> </p>
    </div>
<?php

}

require "rodape.php";

?>