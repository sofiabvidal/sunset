<?php 
 
require "conexao.php";

$sth = $conn->prepare("SELECT COUNT(*) FROM livroAutor WHERE idautor = 100");
$sth->execute();

$result = $sth->fetch(PDO::FETCH_ASSOC);
print_r($result['count']);

?>