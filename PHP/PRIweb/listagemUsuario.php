<?php session_start();

require "cabecalho.php";

require "conexao.php";

$sql = "select prontuario, nome from usuario";
$stmt = $conn -> query($sql);

if($_SESSION['logado'] == true):
?>

<br>
<div class="table-responsive" style="background-color: #D9A658; border-color: #F8CF86; color: white; opacity: 0.9; border-radius: 20px; padding: 20px;">
<table class="table table-striped ">
    <thead>
        <tr>

            <th scope="col" style="width: 15%;">Prontuário</th>
            <th scope="col" style="width: 20%;">Nome</th>
            <th scope="col" style="width: 35%;" colspan="2"></th>

        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $stmt->fetch()) {
        ?>
        <tr>
            <td><?= $row['prontuario'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td>

                <a class="btn btn-sm btn-warning" 
                href="formAlterarUsuario.php?prontuario=<?= $row['prontuario']; ?>">
                    <span data-feather="edit"></span>
                    Editar
                </a>
            </td>
            <td>
                <a class="btn btn-sm btn-danger" 
                href="verificaUsuario.php?prontuario=<?= $row['prontuario']; ?>"
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

<a href="formularioUsuario.php">
        <style>
            .autor {
                width: 200px;
                margin-top: 20px;
                margin-right: 10px;
                margin-left: 10px;
            }
        </style>
    <button style="background-color: #D9A658; border-color: #F8CF86; color: white;" type="button" class="btn btn-danger autor"> Cadastrar novo Usuário </button>
</a>

<?php
endif;

require "rodape.php";

?>