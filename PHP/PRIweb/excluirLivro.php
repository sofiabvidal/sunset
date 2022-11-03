<?php 
 
require "conexao.php";
require "cabecalho.php";

$idlivro = filter_input(INPUT_GET, "idlivro", FILTER_SANITIZE_NUMBER_INT);

$sql = "delete from livro where idlivro = ?";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([$idlivro]);

if ($result == true) {
?>
    <div class="alert alert-sucess" role="alert">
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