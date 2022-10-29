<?php

require "cabecalho.php";

require "conexao.php";

$sql = "select idautor, nome, idade, tempocarreira from autor order by idautor";
$stmt = $conn -> query($sql);

?>

<div class="table-responsive">
<table class="table table-striped ">
    <thead>
        <tr>

            <th scope="col" style="width: 10%;">ID</th>
            <th scope="col" style="width: 25%;">Nome</th>
            <th scope="col" style="width: 15%;">Idade</th>
            <th scope="col" style="width: 15%;">Tempo de Carreira</th>
            <th scope="col" style="width: 25%;" colspan="2"></th>

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
                href="#?idautor=<?= $row['idautor']; ?>">
                    <span data-feather="edit"></span>
                    Editar
                </a>
            </td>
            <td>
                <a class="btn btn-sm btn-danger" 
                href="excluirAutor.php?idautor=<?= $row['idautor']; ?>"
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

<?php

require "rodape.php";

?>