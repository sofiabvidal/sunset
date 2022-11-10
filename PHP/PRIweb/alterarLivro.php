<?php session_start();

$titulo_pagina = "Alterar Livro";
require "cabecalho.php";

require "conexao.php";

//$idlivro = filter_input(INPUT_POST, "idlivro", FILTER_SANITIZE_NUMBER_INT);
$isbn = filter_input(INPUT_POST, "isbn", FILTER_SANITIZE_NUMBER_INT);
$dtapublicacao = filter_input(INPUT_POST, "dtapublicacao", FILTER_SANITIZE_SPECIAL_CHARS);
$idioma = filter_input(INPUT_POST, "idioma", FILTER_SANITIZE_SPECIAL_CHARS);
$titulolivro = filter_input(INPUT_POST, "titulolivro", FILTER_SANITIZE_SPECIAL_CHARS);
$localpublicacao = filter_input(INPUT_POST, "localpublicacao", FILTER_SANITIZE_SPECIAL_CHARS);
$sinopse = filter_input(INPUT_POST, "sinopse", FILTER_SANITIZE_SPECIAL_CHARS);
$temalivro = filter_input(INPUT_POST, "temalivro", FILTER_SANITIZE_SPECIAL_CHARS);
$editoralivro = filter_input(INPUT_POST, "editoralivro", FILTER_SANITIZE_SPECIAL_CHARS);

$idlivro = $_SESSION['idlivro'];

echo "<p> ISBN: $isbn </p>";
echo "<p> Data de Publicação: $dtapublicacao </p>";
echo "<p> Idioma: $idioma </p>";
echo "<p> Título: $titulolivro </p>";
echo "<p> Local de Publicação: $localpublicacao </p>";
echo "<p> sinopse: $sinopse </p>";
echo "<p> Gênero: $temalivro </p>";
echo "<p> Editora: $editoralivro </p>";

$sql = "update livro set 
                isbn = ?,
                dtapublicacao = ?,
                idioma = ?,
                titulolivro = ?,
                localpublicacao = ?,
                sinopse = ?,
                temalivro = ?,
                editoralivro = ?
                where idlivro = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$isbn, $dtapublicacao, $idioma, $titulolivro, $localpublicacao, $sinopse, $temalivro, $editoralivro, $idlivro]);

if ($result == true) {
?>
    <div class="alert alert-success" role="alert">
        <h4> Dados alterados com sucesso! </h4>
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