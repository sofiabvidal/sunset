<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$idlivro = filter_input(INPUT_GET, "idlivro", FILTER_SANITIZE_NUMBER_INT);

$sql_livroAutor = "delete from livroAutor where idlivro = ?";
$stmt_livroAutor = $conn -> prepare($sql_livroAutor);
$result_livroAutor = $stmt_livroAutor -> execute([$idlivro]);

$sql = "delete from livro where idlivro = ?";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([$idlivro]);

if ($result == true && $result_livroAutor == true) {
?>
    <div class="alert alert-success" role="alert">
        <h4> Registro excluído com sucesso! </h4>
        <a class="btn btn-sm btn-warning" 
                    href="listagemLivro.php">
                        Voltar
        </a>
    </div>
<?php
} else {
?>
    <div class="alert alert-danger" role="alert">
        <h4> Falha ao efetuar a exclusão. </h4>
        <p> <?php echo $stmt->error; ?> </p>
        <a class="btn btn-sm btn-warning" 
                    href="listagemLivro.php">
                        Voltar
        </a>
    </div>

<?php

}

require "rodape.php";

?>