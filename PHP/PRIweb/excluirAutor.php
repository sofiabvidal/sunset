<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$idautor = filter_input(INPUT_GET, "idautor", FILTER_SANITIZE_NUMBER_INT);

$sql_livroAutor = "delete from livroAutor where idautor = ?";
$stmt_livroAutor = $conn -> prepare($sql_livroAutor);
$result_livroAutor = $stmt_livroAutor -> execute([$idautor]);

$sql = "delete from autor where idautor = ?";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([$idautor]);

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
        <h4> Registro excluído com sucesso! </h4>
        <a class="btn btn-sm btn-warning" 
        href="listagemAutor.php">
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
                    href="listagemAutor.php">
                        Voltar
        </a>
    </div>

<?php

}

require "rodape.php";

?>