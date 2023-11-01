<?php session_start();

$titulo_pagina = "Login";
require "cabecalho.php";
require "conexao.php";

?>

<div class="row justify-content-md-center">
    <div class="col-3">
    <br><br><br><br>
    <form action="login_usuario.php" method="POST" style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: -15%;">
        <h1 class="h3 mb-3 fw-normal" style="text-align: center;"> Login </h1>
        <div class="form-floating mb-2">
            <label for="listUsuario" class="form-label"> Você é: </label>
            <select class="form-select form-control" aria-label="Defaul select example" id="listUsuario" name="listUsuario">
                <option value="aluno">Aluno</option>
                <option value="professor">Professor</option>
                <option value="servidor">Servidor</option>
            </select>
        </div>
        <div class="form-floating mb-2">
            <label for="floatingInput"> Nome </label> 
            <input type="name" class="form-control" name="nome" id="floatingInput" placeholder="Insira seu nome completo">
        </div>
        <div class="form-floating mb-4">
            <label for="floatingInput"> Prontuário </label> 
            <input type="prontuario" class="form-control" name="prontuario" id="floatingInput" placeholder="Insira seu prontuário">
        </div>    
        <button type="submit" style="background-color: #D9A658; border-color: #F8CF86; color: white;" class="btn btn-primary"> Entrar </button>
    </form>
    </div>
</div>  
<?php

require "rodape.php";

?>