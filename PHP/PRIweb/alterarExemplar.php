<?php session_start();

$titulo_pagina = "Alterar Exemplar";
require "cabecalho.php";

require "conexao.php";

$anopublicacao = filter_input(INPUT_POST, "anopublicacao", FILTER_SANITIZE_SPECIAL_CHARS);
$edicaoexemplar = filter_input(INPUT_POST, "edicao", FILTER_SANITIZE_SPECIAL_CHARS);

$idexemplar = $_SESSION['idexemplar'];

echo "<p> Ano de Publicação: $anopublicacao </p>";
echo "<p> Edição: $edicaoexemplar </p>";

$sql = "update exemplar set 
            anopublicacao = ?,
            edicaoexemplar = ?
            where idexemplar = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$anopublicacao, $edicaoexemplar, $idexemplar]);

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
        <h4> Dados alterados com sucesso! </h4>
        <a class="btn btn-sm btn-warning" href="listagemExemplar.php">
                        Voltar
        </a>
    </div>
<?php
} else {
?>
    <div class="alert alert-danger" role="alert">
        <h4> Falha ao efetuar a gravação. </h4>
        <p> <?php echo $stmt->error; ?> </p>
    </div>
<?php    
}

require "rodape.php";

?>