<?php session_start();
error_reporting(E_ERROR | E_PARSE);

require "conexao.php";

require "cabecalho.php";

?>
        <?php 
        if($_SESSION['logado'] == true){
            $prontuario_bibliotecaria = $_SESSION['prontuario'];
            $sql = "select nome from bibliotecaria where prontuario ILIKE '$prontuario_bibliotecaria'";
            $stmt = $conn -> query($sql);
            while ($row = $stmt->fetch()) {
                $nome = $row['nome'];
                echo "<main role='main'>
                <div class='bibliotecaria'>
                    <style>
                        main {
                            width: 100%;
                            display: flex; 
                            justify-content: center;
                            align-content: center;
                            align-items: center; 
                        }
                        .bibliotecaria {
                            background-color: #D9A658; 
                            border-color: #F8CF86; 
                            color: white;
                            margin-top: 20px;
                            margin-right: 20px;
                            margin-left: 20px;
                            box-shadow: 10px 10px 8px #888888;
                            border-radius: 20px; 
                            padding: 10px; 
                            margin-top: 1%;
                            width: 50%;
                            display: flex; 
                            justify-content: center;
                            align-content: center;
                            align-items: center;
                        }
                    </style> <h1> <center> Bem-vinda $nome! </center> </h1></div>
                    </main>";
            }
        } else if ($_SESSION['logado_usuario'] == true) {
            $prontuario = $_SESSION['prontuario'];
            $sql = "select nome from usuario where prontuario ILIKE '$prontuario'";
            $stmt = $conn -> query($sql);
            while ($row = $stmt->fetch()) {
                $nome = $row['nome'];
                echo "<main role='main'>
                <div class='bibliotecaria'>
                    <style>
                        main {
                            width: 100%;
                            display: flex; 
                            justify-content: center;
                            align-content: center;
                            align-items: center; 
                        }
                        .bibliotecaria {
                            background-color: #D9A658; 
                            border-color: #F8CF86; 
                            color: white;
                            margin-top: 20px;
                            margin-right: 20px;
                            margin-left: 20px;
                            box-shadow: 10px 10px 8px #888888;
                            border-radius: 20px; 
                            padding: 10px; 
                            margin-top: 1%;
                            width: 50%;
                            display: flex; 
                            justify-content: center;
                            align-content: center;
                            align-items: center;
                        }
                    </style> <h1> <center> Bem-vinda $nome! </center> </h1></div>
                    </main>";
            }
        }
        ?>
<?php

require "rodape.php";

?>