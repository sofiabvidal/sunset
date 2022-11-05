<?php

$titulo_pagina = "Login";
require "cabecalho.php";
require "conexao.php";

?>

<div class="row justify-content-md-center">
        <div class="col-3">
        <br><br><br>
<form action="login.php" method="POST" style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: -15%;">
    <h1 class="h3 mb-3 fw-normal"> Faça seu login para ter acesso </h1>
    
    <div class="form-floating mb-2">
        <label for="floatingInput"> Nome </label> 
        <input type="nome" class="form-control" name="nome" id="floatingInput" placeholder="Insira seu nome">
    </div>
    <div class="form-floating mb-2">
        <label for="floatingInput"> Prontuário </label> 
        <input type="prontuario" class="form-control" name="prontuario" id="floatingInput" placeholder="Insira seu prontuário">
    </div>
    <div class="form-floating mb-2">
        <label for="floatingInput"> E-mail </label> 
        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="Insira seu e-mail">
    </div>
    <div class="form-floating mb-4">
        <label for="floatingPassword"> Senha </label> 
        <input type="password" class="form-control" name="senha" id="floatingPassword" placeholder="Insira sua senha">
    </div>    
<button type="submit" class="btn btn-primary"> Entrar </button>
</form>
    </div>
</div>  
<?php

require "rodape.php";

?>