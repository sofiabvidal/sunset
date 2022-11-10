<?php session_start();

$titulo_pagina = "Login";

require "conexao.php";

require "cabecalho.php";

$nome=$_POST['nome'];
$prontuario=$_POST['prontuario'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql = "SELECT * FROM bibliotecaria WHERE nome = '$nome' AND prontuario = '$prontuario' AND email = '$email' AND senha = '$senha'";
$stmt = $conn -> query($sql);

$quantidade = $stmt->rowCount();


if($quantidade > 0){
    $_SESSION['nome'] = $nome;
    header("location: index.php");
} else {
    echo "Login incorreto!";
}

?>

<?php

require "rodape.php";

?>