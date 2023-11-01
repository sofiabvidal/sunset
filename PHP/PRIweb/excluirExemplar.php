<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$idexemplar = filter_input(INPUT_GET, "idexemplar", FILTER_SANITIZE_NUMBER_INT);

$sql = "delete from exemplar where idexemplar = ?";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([$idexemplar]);

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
                    href="listagemExemplar.php">
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
                    href="listagemExemplar.php">
                        Voltar
        </a>
    </div>

<?php

}

require "rodape.php";

?>