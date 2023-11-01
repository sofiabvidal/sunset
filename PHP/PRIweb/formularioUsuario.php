<?php session_start();

$titulo_pagina = "Cadastro de Usuários";

require "conexao.php";

require "cabecalho.php";

?>

<div class="row justify-content-md-center" style="width: 100%; display: flex;">
<div class="col-3">
    <br>
<div style="box-shadow: 10px 10px 8px #888888; background-color: white; border-radius: 20px; padding: 20px; margin-top: 5%;">
<form action="cadastroUsuario.php" method="POST">
<h1 class="h3 mb-3 fw-normal" style="text-align: center;"> Cadastro de Usuário </h1>


<div class="mb-3">
    <label for="nome" class="form-label"> Nome </label>
    <input type="text" class="form-control" id="nome" name="nome" required>
</div>
<div class="mb-3">
    <label for="prontuario" class="form-label"> Prontuário </label>
    <input type="text" class="form-control" id="prontuario" name="prontuario" required>
</div>
<div class="form-floating mb-2">
    <label for="listUsuario" class="form-label"> Tipo do usuário </label>
    <select class="form-select form-control" aria-label="Defaul select example" id="listUsuario" name="listUsuario">
        <option value="aluno">Aluno</option>
        <option value="professor">Professor</option>
        <option value="servidor">Servidor</option>
    </select>
</div>
<div class="mb-3">
    <label for="dado_especial" class="form-label" id='label_dado_especial'> Curso </label>
    <input type="text" class="form-control" id="dado_especial" name="dado_especial" required>
</div>
<script>
    document.getElementById('listUsuario').addEventListener('change', () => {
        let tipo_usuario = document.getElementById('listUsuario').value;

        if (tipo_usuario == 'aluno'){
            document.getElementById('label_dado_especial').innerHTML = 'Curso';
        } else if (tipo_usuario == 'professor'){
            document.getElementById('label_dado_especial').innerHTML = 'Matéria';
        } else if (tipo_usuario == 'servidor'){
            document.getElementById('label_dado_especial').innerHTML = 'Função';
        }
    });
</script>

<button type="submit" class="btn btn-primary justify-content-end float-right" style="background-color: #D9A658; border-color: #F8CF86; color: white;"> Gravar </button>
</form>
<a href="listagemAutor.php"><button class="btn btn-danger"> Cancelar </button></a>
</div>
</div>
</div>
</div>


<?php

require "rodape.php";

?>

            