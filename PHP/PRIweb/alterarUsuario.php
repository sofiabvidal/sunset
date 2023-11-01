<?php session_start();

$titulo_pagina = "Alterar Usuário";
require "cabecalho.php";

require "conexao.php";

$prontuario = filter_input(INPUT_POST, "prontuario", FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

echo "<p> Prontuário: $prontuario </p>";
echo "<p> Nome: $nome </p>";

$sql = "update usuario set 
                nome = ?
                where prontuario = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $prontuario]);

/*
$sql = "update autor set nome = '$nome', idade = $idade, tempocarreira = $tempocarreira WHERE idautor = $idautor";
$stmt = $conn -> query($sql);*/

if ($result == true) {
    $sql_gerenciamento = "insert into gerenciamento (idbibliotecaria, prontuariousuario, dtaHora, tipo)
                            values (?, ?, NOW(), ?);";
    $stmt_gerenciamento = $conn->prepare($sql_gerenciamento);
    $stmt_gerenciamento->execute([$_SESSION['idbibliotecaria'], $prontuario, "Alteração do usuário"]);
?>
    <div class="alert alert-success" role="alert">
        <style>
            .alert-success {
                width:400px;
                margin-top: 20px;
                margin-left: 20px;
            }
        </style>
        <h4> Dados alterados com sucesso! </h4>
        <a class="btn btn-sm btn-warning" href="listagemUsuario.php">
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