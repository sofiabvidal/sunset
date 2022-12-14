<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$isbn = filter_input(INPUT_POST, "isbn", FILTER_SANITIZE_NUMBER_INT);
$dtaPublicacao = filter_input(INPUT_POST, "dtaPublicacao", FILTER_SANITIZE_SPECIAL_CHARS);
$idioma = filter_input(INPUT_POST, "idioma", FILTER_SANITIZE_SPECIAL_CHARS);
$tituloLivro = filter_input(INPUT_POST, "tituloLivro", FILTER_SANITIZE_SPECIAL_CHARS);
$localPublicacao = filter_input(INPUT_POST, "localPublicacao", FILTER_SANITIZE_SPECIAL_CHARS);
$sinopse = filter_input(INPUT_POST, "sinopse", FILTER_SANITIZE_SPECIAL_CHARS);
$temaLivro = filter_input(INPUT_POST, "temaLivro", FILTER_SANITIZE_SPECIAL_CHARS);
$editoraLivro = filter_input(INPUT_POST, "editoraLivro", FILTER_SANITIZE_SPECIAL_CHARS);
$idautor = filter_input(INPUT_POST, "listAutor", FILTER_SANITIZE_SPECIAL_CHARS);

// var_dump($_POST);


$sql = "insert into livro (isbn, dtaPublicacao, idioma, tituloLivro, localPublicacao, sinopse, temaLivro, editoraLivro) values (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([$isbn, $dtaPublicacao, $idioma, $tituloLivro, $localPublicacao, $sinopse, $temaLivro, $editoraLivro]);

if ($result == true) {

$idlivro = $conn->lastInsertId();

$sqlLivroAutor = "insert into livroAutor (idlivro, idautor) values (?, ?)";
$stmt = $conn -> prepare($sqlLivroAutor);
$result = $stmt -> execute([$idlivro, $idautor]);
   

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
        <a class="btn btn-sm btn-warning" href="listagemLivro.php">
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