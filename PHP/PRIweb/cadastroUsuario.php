<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$prontuario = filter_input(INPUT_POST, "prontuario", FILTER_SANITIZE_SPECIAL_CHARS);
$tipo = filter_input(INPUT_POST, "listUsuario", FILTER_SANITIZE_SPECIAL_CHARS);
$dado_especial = filter_input(INPUT_POST, "dado_especial", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "insert into usuario (nome, prontuario) values (?, ?);";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([$nome, $prontuario]);

if ($tipo == "aluno") {
    $sql = "insert into aluno (prontuario, curso) values (?, ?);";
    $stmt = $conn -> prepare($sql);
    $result = $stmt -> execute([$prontuario, $dado_especial]);
} else if ($tipo == "professor") {
    $sql = "insert into professor (prontuario, materia) values (?, ?);";
    $stmt = $conn -> prepare($sql);
    $result = $stmt -> execute([$prontuario, $dado_especial]);
} else if ($tipo == "servidor") {
    $sql = "insert into servidor (prontuario, funcao) values (?, ?);";
    $stmt = $conn -> prepare($sql);
    $result = $stmt -> execute([$prontuario, $dado_especial]);
}

if ($result == true) {
    $sql_gerenciamento = "insert into gerenciamento (idbibliotecaria, prontuariousuario, dtaHora, tipo)
                            values (?, ?, NOW(), ?);";
    $stmt_gerenciamento = $conn->prepare($sql_gerenciamento);
    $stmt_gerenciamento->execute([$_SESSION['idbibliotecaria'], $prontuario, "Cadastro do usuário"]);
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