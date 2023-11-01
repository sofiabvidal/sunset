<?php session_start();

$titulo_pagina = "Login Usuário";

require "conexao.php";

require "cabecalho.php";

$prontuario=$_POST['prontuario'];
$nome=$_POST['nome'];
$tipo=$_POST['listUsuario'];

if ($tipo == 'aluno'){
    $sql = "SELECT u.prontuario, u.nome, a.curso FROM usuario u 
                INNER JOIN aluno a
                ON u.prontuario = a.prontuario
                WHERE u.prontuario ILIKE '$prontuario' AND u.nome ILIKE '$nome';";
} else if ($tipo == 'professor'){
    $sql = "SELECT u.prontuario, u.nome, p.materia FROM usuario u 
                INNER JOIN professor p
                ON u.prontuario  p.prontuario
                WHERE u.prontuario ILIKE '$prontuario' AND u.nome ILIKE '$nome';";
} else if ($tipo == 'servidor'){
    $sql = "SELECT u.prontuario, u.nome, s.funcao FROM usuario u 
                INNER JOIN servidor s
                ON u.prontuario = s.prontuario
                WHERE u.prontuario ILIKE '$prontuario' AND u.nome ILIKE '$nome';";
} else {
    header("location: index.php");
    exit();
}

$stmt = $conn -> query($sql);

$quantidade = $stmt->rowCount();

if($quantidade > 0){
    $_SESSION['prontuario'] = $prontuario;
    $_SESSION['logado_usuario'] = true;

    header("location: index.php");
} else {
    echo "Login incorreto!";
}

?>
