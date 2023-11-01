<?php session_start();

$titulo_pagina = "Alteração de Usuários";

require "conexao.php";

require "cabecalho.php";

$prontuario = filter_input(INPUT_GET, "prontuario", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "select nome from usuario where prontuario = '$prontuario'";
$stmt = $conn -> query($sql);

while ($row = $stmt->fetch()) {
    $nome = $row['nome'];
}

?>
<br><br><br><br>
<div class="row justify-content-md-center">
<div class="col-3">
<div style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: 5%;">
<form action="alterarUsuario.php" method="POST">
<h1 class="h3 mb-3 fw-normal" style="text-align: center;"> Edição de Usuário </h1>
<?php /* <div class="mb-3">
    <label for="idautor" class="form-label"> ID Autor </label>
    <input type="text" class="form-control" id="idautor" name="idautor" value="<?php echo $idautor; ?>" disabled required>
</div> */
?>
<div class="form-floating mb-2">
    <label for="prontuario" class="form-label"> Prontuário </label>
    <input type="text" class="form-control" id="prontuario" name="prontuario" value="<?php echo $prontuario; ?>" required readonly>
</div>
<div class="form-floating mb-2">
    <label for="nome" class="form-label"> Nome </label>
    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $nome; ?>" required>
</div>

<button type="submit" style="background-color: #D9A658; border-color: #F8CF86; color: white;" class="btn btn-primary justify-content-end float-right"> Gravar </button>
</form>
<a href="listagemUsuario.php"> <button type="reset" class="btn btn-danger"> Cancelar </button> </a>
</div>
</div>
</div>
</div>



<?php

require "rodape.php";

?>