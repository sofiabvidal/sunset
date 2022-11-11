<?php session_start();

require "cabecalho.php";

require "conexao.php";

$sql = "select idautor, nome, idade, tempocarreira from autor order by idautor";
$stmt = $conn -> query($sql);

if($_SESSION['logado'] == true):
?>

<br>
<div class="table-responsive" style="background-color: #D9A658; border-color: #F8CF86; color: white; opacity: 0.9; border-radius: 20px; padding: 20px;">
<table class="table table-striped ">
    <thead>
        <tr>

            <th scope="col" style="width: 15%;">ID</th>
            <th scope="col" style="width: 20%;">Nome</th>
            <th scope="col" style="width: 15%;">Idade</th>
            <th scope="col" style="width: 20%;">Tempo de Carreira</th>
            <th scope="col" style="width: 35%;" colspan="2"></th>

        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $stmt->fetch()) {
            ?>
        <tr>
            <td><?= $row['idautor'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['idade'] ?></td>
            <td><?= $row['tempocarreira'] ?></td>
            <td>

                <a class="btn btn-sm btn-warning" 
                href="formAlterarAutor.php?idautor=<?= $row['idautor']; ?>">
                    <span data-feather="edit"></span>
                    Editar
                </a>
            </td>
            <td>
                <a class="btn btn-sm btn-danger" 
                href="verificaAutor.php?idautor=<?= $row['idautor']; ?>"
                onclick="if(!confirm('Tem certeza que deseja excluir?')) return false;">
                    <span data-feather="trash-2"> </span>
                    Excluir
                </a>
            </td>
        </tr>

    <?php
            }
    ?>

    </tbody>
</table>
</div>

<a href="formularioAutor.php">
        <style>
            .autor {
                width: 200px;
                margin-top: 20px;
                margin-right: 10px;
                margin-left: 10px;
            }
        </style>
    <button style="background-color: #D9A658; border-color: #F8CF86; color: white;" type="button" class="btn btn-danger autor"> Cadastrar novo Autor </button>
</a>

<?php

else: 

?>

<br>
<div class="table-responsive" style="background-color: #D9A658; border-color: #F8CF86; color: white; opacity: 0.9; border-radius: 20px; padding: 20px;">
<table class="table table-striped ">
    <thead>
        <tr>

            <th scope="col" style="width: 25%;">ID</th>
            <th scope="col" style="width: 25%;">Nome</th>
            <th scope="col" style="width: 25%;">Idade</th>
            <th scope="col" style="width: 25%;">Tempo de Carreira</th>

        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $stmt->fetch()) {
            ?>
        <tr>
            <td><?= $row['idautor'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['idade'] ?></td>
            <td><?= $row['tempocarreira'] ?></td>
        </tr>

    <?php
            }
    ?>

    </tbody>
</table>
</div>

<?php

        endif;
require "rodape.php";

?>