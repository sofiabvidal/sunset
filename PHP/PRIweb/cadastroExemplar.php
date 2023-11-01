<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$anopublicacao = filter_input(INPUT_POST, "anopublicacao", FILTER_SANITIZE_SPECIAL_CHARS);
$edicao = filter_input(INPUT_POST, "edicao", FILTER_SANITIZE_NUMBER_INT);
$idlivro = filter_input(INPUT_POST, "listLivro", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "insert into exemplar (anopublicacao, edicaoexemplar, idlivro) VALUES (?, ?, ?)";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([$anopublicacao, $edicao, $idlivro]);

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