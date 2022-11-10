<?php session_start();
 
require "conexao.php";
require "cabecalho.php";

$idautor = filter_input(INPUT_GET, "idautor", FILTER_SANITIZE_NUMBER_INT);

$sth = $conn->prepare("SELECT COUNT(*) FROM livroAutor WHERE idautor = $idautor");
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);
//print_r($result['count']); // -> mostra quantidade

if ($result['count'] > 0) {
?>

 <div class="alert alert-danger" role="alert">
        <h4> Atenção! Existe <?php echo $result['count']; ?> livro(s) com este autor! Deseja continuar? </h4>
        <a class="btn btn-sm btn-danger" 
                    href="excluirAutor.php?idautor=<?php echo $idautor; ?>">
                        Continuar
        </a>
        <a class="btn btn-sm btn-warning" 
                    href="listagemAutor.php">
                        Voltar
        </a>
    </div>

<?php

}else {
    header("Location: excluirAutor.php?idautor=$idautor");
}

require "rodape.php";

?>