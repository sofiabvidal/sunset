<?php

$titulo_pagina = "Alterar Autor";
require "cabecalho.php";

require "conexao.php";

$idautor = filter_input(INPUT_POST, "idautor", FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
$tempocarreira = filter_input(INPUT_POST, "tempocarreira", FILTER_SANITIZE_NUMBER_INT);

echo "<p> ID: $idautor </p>";
echo "<p> Nome: $nome </p>";
echo "<p> Idade: $idade </p>";
echo "<p> Tempo de Carreira: $tempocarreira </p>";

$sql = "update autor set 
                nome = ?,
                idade = ?,
                tempocarreira = ?
                where idautor = ?";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $idade, $tempocarreira, $idautor]);

if ($result == true) {
?>
    <div class="alert alert-sucess" role="alert">
        <h4> Dados alterados com sucesso! </h4>
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