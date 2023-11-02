<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$idemprestimo = filter_input(INPUT_GET, "idemprestimo", FILTER_SANITIZE_NUMBER_INT);

$sql = "update emprestimo set statusemprestimo = false where idemprestimo = ?";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([$idemprestimo]);

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
        <h4> Registro desativado com sucesso! </h4>
        <a class="btn btn-sm btn-warning" 
                    href="listagemEmprestimo.php">
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