<?php session_start();
error_reporting(E_ERROR | E_PARSE);

require "conexao.php";

require "cabecalho.php";

?>
    <main role="main">
        <?php 
        if($_SESSION['logado'] == true){
            $prontuario_bibliotecaria = $_SESSION['prontuario'];
            $sql = "select nome from bibliotecaria where prontuario = '$prontuario_bibliotecaria'";
            $stmt = $conn -> query($sql);

            while ($row = $stmt->fetch()) {
                $nome = $row['nome'];
                echo "<h1> Bem-vindo(a) $nome </h1>";
            }
        }
        ?>
    </main>
<?php

require "rodape.php";

?>   


    