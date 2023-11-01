<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$prontuario = filter_input(INPUT_GET, "prontuario", FILTER_SANITIZE_SPECIAL_CHARS);

$sth = $conn->prepare("SELECT COUNT(*) FROM usuario WHERE prontuario = '$prontuario'");
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);
//print_r($result['count']); // -> mostra quantidade

if ($result['count'] > 0) {
?>

<br>
 <div class="alert alert-danger" role="alert">
        <h4> Atenção! Deseja continuar? </h4>
        <a class="btn btn-sm btn-danger" 
                    href="excluirUsuario.php?prontuario=<?php echo $prontuario; ?>">
                        Continuar
        </a>
        <a class="btn btn-sm btn-warning" 
                    href="listagemUsuario.php">
                        Voltar
        </a>
    </div>

<?php

}else {
    header("Location: excluirUsuario.php?prontuario=$prontuario");
}

require "rodape.php";

?>