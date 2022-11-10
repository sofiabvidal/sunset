<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
$tempoCarreira = filter_input(INPUT_POST, "tempoCarreira", FILTER_SANITIZE_NUMBER_INT);

$sql = "insert into autor (nome, idade, tempoCarreira) values (?, ?, ?)";
$stmt = $conn -> prepare($sql);
$result = $stmt -> execute([$nome, $idade, $tempoCarreira]);

if ($result == true) {
?>
    <div class="alert alert-success" role="alert">
        <h4> Dados gravados com sucesso! </h4>
        <a class="btn btn-sm btn-warning" href="listagemAutor.php">
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