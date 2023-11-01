<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$prontuario = filter_input(INPUT_GET, "prontuario", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "delete from usuario where prontuario = ?";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([$prontuario]);

if ($result == true) {
    $sql_gerenciamento = "insert into gerenciamento (idbibliotecaria, prontuariousuario, dtaHora, tipo)
                            values (?, ?, NOW(), ?);";
    $stmt_gerenciamento = $conn->prepare($sql_gerenciamento);
    $stmt_gerenciamento->execute([$_SESSION['idbibliotecaria'], $prontuario, "Exclusão do usuário"]);
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
        href="listagemUsuario.php">
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
                    href="listagemUsuario.php">
                        Voltar
        </a>
    </div>

<?php

}

require "rodape.php";

?>