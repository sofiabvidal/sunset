<?php session_start();

$titulo_pagina = "Login";

require "conexao.php";

require "cabecalho.php";

$prontuario=$_POST['prontuario'];
$senha=$_POST['senha'];

$sql = "SELECT * FROM bibliotecaria WHERE prontuario = '$prontuario' AND senha = '$senha'";
$stmt = $conn -> query($sql);

$quantidade = $stmt->rowCount();


if($quantidade > 0){
    $_SESSION['prontuario'] = $prontuario;
    $_SESSION['logado'] = true;

    header("location: index.php");
} else {
    echo "Login incorreto!";
}

?>

<?php

require "rodape.php";

?>