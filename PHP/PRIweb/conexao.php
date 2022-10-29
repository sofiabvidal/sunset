<?php

$conf = parse_ini_file("config.ini");

$string_connection = $conf["driver"] .
        ":dbname=" . $conf["database"] .
          ";host=" . $conf["server"] .
          ";port=" . $conf["port"];

try {
    $conn = new PDO(
        $string_connection,
        $conf["user"],
        $conf["password"]
    );
} catch (Exception $e) {
    echo "<p> Erro ao se conectar no banco de dados. </p>";
    echo $e->getMessage();
}

?>