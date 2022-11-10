<?php session_start();

$titulo_pagina = "Alterar Autor";
require "cabecalho.php";

require "conexao.php";

//$idautor = filter_input(INPUT_POST, "idautor", FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
$tempocarreira = filter_input(INPUT_POST, "tempocarreira", FILTER_SANITIZE_NUMBER_INT);

$idautor = $_SESSION['idautor'];

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

/*
$sql = "update autor set nome = '$nome', idade = $idade, tempocarreira = $tempocarreira WHERE idautor = $idautor";
$stmt = $conn -> query($sql);*/

if ($result == true) {
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