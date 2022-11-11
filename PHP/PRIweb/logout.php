<?php session_start();

$_SESSION['logado'] = false;

session_destroy();
header('Location: index.php');

?>